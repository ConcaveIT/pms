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
        return view('core.module.update',compact('moduleData','columns')); 
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
            'configuration' => 'required',
        ]);

        $model = $moduleGenerator->find($id);
        $model->module_title = $request->module_title;
        $model->module_description = $request->module_description;
        $model->configuration = json_encode($request->configuration);
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
    public function buildModule(ModuleGenerator $moduleGenerator)
    {
        //
    }

    
}
