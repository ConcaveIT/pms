<?php namespace App\Http\Controllers;

use App\Models\{controller};
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\ModuleGenerator;
use Validator, Input, Redirect, Auth; 


class {controller}Controller extends Controller {
	public $module = '{class}';
	public $per_page	= '20';

	public function __construct(){
        $this->middleware(function($request,$next){
            $this->user = Auth::user();
			$this->role = Role::findByName($this->user->getRoleNames()[0]);
            return $next($request);
        });
    }

	public function index( Request $request ){
	
		if(is_null($this->user) || !$this->role->hasPermissionTo('{permission_title}.view')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$tableGrid = \Helper::getTableHeader('{controller}');
		$results = {controller}::all();
		
		$info = [
			'module_name' => ucwords($this->module),
			'create_button' => '{controller}',
			'module_route' => $this->module
		];

		return view( $this->module.'.index',compact('results','tableGrid','info'));
	} //end index
	

	function create() {
		if(is_null($this->user) || !$this->role->hasPermissionTo('{permission_title}.create')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$info = [
			'module_name' => ucwords($this->module),
			'create_button' => '{controller}',
			'module_route' => $this->module
		];

		return view( $this->module.'.form',compact('info'));
	} //end create


	function edit( Request $request , $id ){

		if(is_null($this->user) || !$this->role->hasPermissionTo('{permission_title}.update')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }
		$data =  {controller}::find($id);
		return view($this->module.'.form',compact('data'));
	}

	function show( Request $request , $id ) {

		if(is_null($this->user) || !$this->role->hasPermissionTo('{permission_title}.view')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }
	}



	function store(Request $request){

		if(is_null($this->user) || !$this->role->hasPermissionTo('{permission_title}.create')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$data =  $request->all();
		$validationArray = [];
		$validFormKeys = [];
		$primaryKey = [];
		$module = ModuleGenerator::where('controller_name',$this->module)->first();
		if($module ){
			if($configuration = $module->configuration){
				$form_configuration = isset(json_decode($configuration)->form_configuration) ? json_decode($configuration)->form_configuration : [];
				if($form_configuration){
					foreach($form_configuration as $fieldKey => $fieldVal){
						$validFormKeys[] = $fieldKey;
						if($fieldVal->validation){
							$validationArray[$fieldKey] = $fieldVal->validation;
						}
						
					}
				}

			}
			
		}

		$request->validate($validationArray);

		$model = new {controller}();

		foreach($request->all() as $fieldKey => $fieldVal){
			if(in_array($fieldKey,$validFormKeys)){
				if(is_array($fieldVal)) $fieldVal = implode(',',$fieldVal);
				$model->$fieldKey = $fieldVal;
			}

		}

        $update = $model->save();

		if($update) {
            return redirect()->route($this->module.'.index')->with('success', 'Module data has been successfully saved!');
        }else {
			return back()->with('error', 'Something went wrong. Please try again later!');
        }
		
	}	//End Store




	function update(Request $request,$id){

		if(is_null($this->user) || !$this->role->hasPermissionTo('{permission_title}.create')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$data =  $request->all();
		$validationArray = [];
		$validFormKeys = [];
		$primaryKey = [];
		$module = ModuleGenerator::where('controller_name',$this->module)->first();
		if($module ){
			if($configuration = $module->configuration){
				$form_configuration = isset(json_decode($configuration)->form_configuration) ? json_decode($configuration)->form_configuration : [];
				if($form_configuration){
					foreach($form_configuration as $fieldKey => $fieldVal){
						$validFormKeys[] = $fieldKey;
						if($fieldVal->validation){
							$validationArray[$fieldKey] = $fieldVal->validation;
						}
						
					}
				}

			}
			
		}

		$request->validate($validationArray);

		$model = {controller}::find($id);

		foreach($request->all() as $fieldKey => $fieldVal){
			if(in_array($fieldKey,$validFormKeys)){
				if(is_array($fieldVal)) {
					$fieldVal = implode(',',$fieldVal);
				}
				$model->$fieldKey = $fieldVal;
			}

		}

        $update = $model->save();

		if($update) {
            return redirect()->route($this->module.'.index')->with('success', 'Module data has been successfully updated!');
        }else {
			return back()->with('error', 'Something went wrong. Please try again later!');
        }
		
	}	//End Update




	public function destroy($id){

		if(is_null($this->user) || !$this->role->hasPermissionTo('{permission_title}.delete')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$result = {controller}::find($id);
		$update = $result->delete();
		if($update){
			return back()->with('success', 'Record has been successfully deleted!');
		}else{
			return back()->with('error', 'Unable to delete this record!');
		}

	}	//end destroy
	
	
}
