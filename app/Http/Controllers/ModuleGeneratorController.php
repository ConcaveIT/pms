<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModuleGenerator;

class ModuleGeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModuleGenerator::all();
        return view('core.module.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = \DB::select('SHOW TABLES');
        return view('core.module.create',compact('tables')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'module_title' => 'required',
            'module_description' => 'required',
            'controller_name' => 'required | unique:module_generators',
            'database_table_name' => 'required',
            'grid_table_type' => 'required',
        ]);


        $model = new ModuleGenerator();

        $model->module_title = $request->module_title;
        $model->module_description = $request->module_description;
        $model->controller_name = $request->controller_name;
        $model->database_table_name = $request->database_table_name;
        $model->grid_table_type = $request->grid_table_type;
        $model->configuration = '';
        $model->status = $request->status;
        $create = $model->save();
        $this->createRouters();

        if($create) session()->flash('success','Module has been created!');
        else session()->flash('error','Something went wrong!');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ModuleGenerator  $moduleGenerator
     * @return \Illuminate\Http\Response
     */
    public function show(ModuleGenerator $moduleGenerator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ModuleGenerator  $moduleGenerator
     * @return \Illuminate\Http\Response
     */
    public function edit(ModuleGenerator $moduleGenerator,$id)
    {

        $moduleData = $moduleGenerator::find($id);
        $columns = $moduleGenerator->getTableColumns($moduleData->database_table_name);
        $tables = \DB::select('SHOW TABLES');
        return view('core.module.update',compact('moduleData','columns','tables')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ModuleGenerator  $moduleGenerator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModuleGenerator $moduleGenerator,$id)
    {
        $validated = $request->validate([
            'module_title' => 'required',
            'form_configuration' => 'required',
            'table_configuration' => 'required',
        ]);

        $model = $moduleGenerator->find($id);
        $model->module_title = $request->module_title;
        $model->module_description = $request->module_description;

        $model->configuration =  json_encode([
            'table_configuration' => $request->table_configuration,
            'form_configuration' => $request->form_configuration
        ]);

        $update = $model->save();

        if($update) session()->flash('success','Module has been updated!');
        else session()->flash('error','Something went wrong!');
        return back();
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ModuleGenerator  $moduleGenerator
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModuleGenerator $moduleGenerator)
    {
        //
    }

     /**
     * buildModule the specified resource from storage.
     *
     * @param  \App\Models\ModuleGenerator  $moduleGenerator
     * @return \Illuminate\Http\Response
     */
    public function buildModule(Request $request, ModuleGenerator $moduleGenerator,$id){
        $module = $moduleGenerator::find($id);
        $class =  strtolower($module->controller_name);
        $dir = base_path().'/resources/views/'.$class; 
        $dirC = app_path().'/Http/Controllers/';
        $dirApi = app_path().'/Http/Controllers/Api/';
        $dirM = app_path().'/Models/';
        $ctr = ucwords($module->controller_name);

        if(!is_dir($dir)) mkdir( $dir,0777 );  

        $f = '';
        $req = '';


        $codes = [
            'controller'       => ucwords($class),
            'class'            => $class,
            'table'            => $module->database_table_name ,
            'title'            => $module->module_title ,
            'note'             => $module->module_description
        ];

        $codes['form_html'] = \Helper::generateForm($module->configuration);

        $mType = ( $module->grid_table_type == 'native' ? 'native' :  $row->grid_table_type);

            if(is_dir( base_path().'/resources/views/core/template/'.$mType )){
                 
                 require_once( base_path().'/resources/views/core/template/'.$mType.'/config/config.php');
            } else {
                if($request->ajax() == true && \Auth::check() == true){
                    return response()->json(array('status'=>'success','message'=>'Template is Not Exists')); 
                } else {
                    return redirect('concave/module')->with('message','Template is Not Exists')->with('status','success');   
                }  
            } 

           self::createRouters($module->id);
    
        if($request->ajax() == true && \Auth::check() == true)
        {
            return response()->json(array('status'=>'success','message'=>'Code Script has been replaced successfull')); 
        } else {

            session()->flash('success','Code Script has been successfully replaced!');
            return back();
    
        } 
        
    }

    /**
     * createRouters the specified resource from function.
     *
     * @param  \App\Models\ModuleGenerator  $moduleGenerator
     * @return \Illuminate\Http\Response
     */


    public function createRouters(){
        $modules = ModuleGenerator::all();
        $val  =    "<?php";
        $val_api  = "<?php"; 
    
        foreach($modules as $module){
            $route =  strtolower($module->controller_name);
            $controller = ucwords($module->controller_name).'Controller';
            $mType = ( $module->grid_table_type == 'native' ? 'native' :  $module->grid_table_type);
            include(base_path().'/resources/views/core/template/'.$mType.'/config/route.php' );
            include(base_path().'/resources/views/core/template/'.$mType.'/config/route_api.php' ); 
        }

        $val .=     "?>";
        $val_api .=     "?>";

        $filename = base_path().'/routes/module.php';
        $fp=fopen($filename,"w+"); 
        fwrite($fp,$val); 
        fclose($fp);    
        file_put_contents( base_path()."/routes/services.php" , $val_api) ;
        return true;
    }

    public function getDatabaseColumns(ModuleGenerator  $moduleGenerator,$databasename){
        $html = '<option value="">-- Select Field -- </option>';
        if($databasename != -1 ){
            foreach($moduleGenerator->getTableColumns($databasename) as $column){
                $html .= '<option value="'.$column.'">'.$column.'</option>';
            }
        }
        return $html;
    }




    
}
