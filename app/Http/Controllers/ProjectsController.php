<?php namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\ModuleGenerator;
use Validator, Input, Redirect, Auth; 


class ProjectsController extends Controller {
	public $module = 'projects';
	public $per_page	= '20';

	public function __construct(){
        $this->middleware(function($request,$next){
            $this->user = Auth::user();
			$this->role = Role::findByName($this->user->getRoleNames()[0]);
            return $next($request);
        });
    }

	public function index( Request $request ){
	
		if(is_null($this->user) || !$this->role->hasPermissionTo('project.view')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$tableGrid = \Helper::getTableHeader('Projects');
		$results = Projects::all();
		
		$info = [
			'module_name' => ucwords($this->module),
			'create_button' => 'Projects',
			'module_route' => $this->module
		];

		return view( $this->module.'.index',compact('results','tableGrid','info'));
	} //end index
	

	function create() {
		if(is_null($this->user) || !$this->role->hasPermissionTo('project.create')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$info = [
			'module_name' => ucwords($this->module),
			'create_button' => 'Projects',
			'module_route' => $this->module
		];

		return view( $this->module.'.form',compact('info'));
	} //end create


	function edit( Request $request , $id ){

		if(is_null($this->user) || !$this->role->hasPermissionTo('project.update')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }
		$data =  Projects::find($id);
		return view($this->module.'.form',compact('data'));
	}

	function show( Request $request , $id ) {

		if(is_null($this->user) || !$this->role->hasPermissionTo('project.view')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }
	}
	function store(Request $request){

		if(is_null($this->user) || !$this->role->hasPermissionTo('project.create')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$data =  $request->all();
		$validationArray = [];
		$validFormKeys = [];
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

		
		$model = new Projects();

		foreach($request->all() as $fieldKey => $fieldVal){
			if(in_array($fieldKey,$validFormKeys)){
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

	public function destroy($id){

		if(is_null($this->user) || !$this->role->hasPermissionTo('project.delete')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$result = Projects::find($id);
		$update = $result->delete();
		if($update){
			return back()->with('success', 'Record has been successfully deleted!');
		}else{
			return back()->with('error', 'Unable to delete this record!');
		}

	}	//end destroy
	
	
}
