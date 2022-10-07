<?php namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\ModuleGenerator;
use Yajra\DataTables\DataTables;
use Validator, Input, Redirect, Auth; 


class TasksController extends Controller {
	public $module = 'tasks';
	public $per_page	= '20';

	public function __construct(){
        $this->middleware(function($request,$next){
            $this->user = Auth::user();
			$this->role = Role::findByName($this->user->getRoleNames()[0]);
            return $next($request);
        });
    }

	public function index( Request $request ){
	
		if(is_null($this->user) || !$this->role->hasPermissionTo('Tasks.view')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$tableGrid = \Helper::getTableHeader('Tasks');
		$results = Tasks::all();
		
		$info = [
			'module_name' => ucwords($this->module),
			'create_button' => 'Tasks',
			'module_route' => $this->module
		];

		return view( $this->module.'.index',compact('results','tableGrid','info'));
	}



	public function show($id){
	
		if(is_null($this->user) || !$this->role->hasPermissionTo('payments.view')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$tableGrid = \Helper::getTableHeader('Tasks');


		$data = Tasks::all();

	
		return Datatables::of($data)->addIndexColumn()

		
					->editColumn("project_id", function($row){
						$databaseRelation = '{"current_db_model":"Tasks","relation_database":"projects","relation_database_key":"id","relation_database_display1":"title","relation_database_display2":null,"relation_database_display3":null}';
						return  \Helper::selectDatabaseFormat( $databaseRelation, $row->project_id);
					})
					->editColumn("assaigned_member_ids", function($row){
						$databaseRelation = '{"current_db_model":"Tasks","relation_database":"members","relation_database_key":"id","relation_database_display1":"name","relation_database_display2":"designation","relation_database_display3":null}';
						return  \Helper::selectDatabaseFormat( $databaseRelation, $row->assaigned_member_ids);
					})
					->editColumn("department_id", function($row){
						$databaseRelation = '{"current_db_model":"Tasks","relation_database":"departments","relation_database_key":"id","relation_database_display1":"title","relation_database_display2":null,"relation_database_display3":null}';
						return  \Helper::selectDatabaseFormat( $databaseRelation, $row->department_id);
					})
				->editColumn("deadline", function($row){
					if($row->deadline){
						return date("d M, Y h:ia",strtotime($row->deadline));
					}
				})
					->editColumn("status", function($row){
						$databaseRelation = '{"current_db_model":"Tasks","relation_database":"statuses","relation_database_key":"id","relation_database_display1":"title","relation_database_display2":null,"relation_database_display3":null}';
						return  \Helper::selectDatabaseFormat( $databaseRelation, $row->status);
					})
		
		->rawColumns(['action','deadline'])

		->addColumn('action', function($row){
			$btn = '';
			$btn .= '<a href="'.route($this->module.'.edit',$row->id ).'" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>';
			$btn .= '<a href="'.route($this->module.'.destroy',$row->id ).'" class="delete_btn btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>';
			
			return $btn;
		})

		->make(true);

	}



	function create() {
		if(is_null($this->user) || !$this->role->hasPermissionTo('Tasks.create')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$info = [
			'module_name' => ucwords($this->module),
			'create_button' => 'Tasks',
			'module_route' => $this->module
		];

		return view( $this->module.'.form',compact('info'));
	}


	function edit( Request $request , $id ){

		if(is_null($this->user) || !$this->role->hasPermissionTo('Tasks.update')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }
		$data =  Tasks::find($id);
		return view($this->module.'.form',compact('data'));
	}


	function store(Request $request){

		if(is_null($this->user) || !$this->role->hasPermissionTo('Tasks.create')){
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

		$model = new Tasks();

		foreach($request->all() as $fieldKey => $fieldVal){
			if(in_array($fieldKey,$validFormKeys)){
				
				if(is_array($fieldVal)) $fieldVal = implode(',',$fieldVal);
				$model->$fieldKey = $fieldVal;
			}

		}

		try{
			$model->save();
			return redirect()->route($this->module.'.index')->with('success', 'Module data has been successfully saved!');
		}catch( \Exception $e){
			return back()->with('error', 'Something went wrong. Please try again later! \n\n Error: '.$e->getMessage());
		}

		
	}




	function update(Request $request,$id){

		if(is_null($this->user) || !$this->role->hasPermissionTo('Tasks.create')){
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

		$model = Tasks::find($id);

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
		
	}




	public function destroy($id){

		if(is_null($this->user) || !$this->role->hasPermissionTo('Tasks.delete')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$result = Tasks::find($id);
		$update = $result->delete();
		if($update){
			return back()->with('success', 'Record has been successfully deleted!');
		}else{
			return back()->with('error', 'Unable to delete this record!');
		}

	}
	
	
}
