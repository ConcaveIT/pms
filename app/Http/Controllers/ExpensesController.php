<?php namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\ModuleGenerator;
use Yajra\DataTables\DataTables;
use Validator, Input, Redirect, Auth; 


class ExpensesController extends Controller {
	public $module = 'expenses';
	public $per_page	= '20';

	public function __construct(){
        $this->middleware(function($request,$next){
            $this->user = Auth::user();
			$this->role = Role::findByName($this->user->getRoleNames()[0]);
            return $next($request);
        });
    }

	public function index( Request $request ){
	
		if(is_null($this->user) || !$this->role->hasPermissionTo('Expenses.view')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$tableGrid = \Helper::getTableHeader('Expenses');
		$results = Expenses::all();
		
		$info = [
			'module_name' => ucwords($this->module),
			'create_button' => 'Expenses',
			'module_route' => $this->module
		];

		return view( $this->module.'.index',compact('results','tableGrid','info'));
	}



	public function show($id){
	
		if(is_null($this->user) || !$this->role->hasPermissionTo('payments.view')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$tableGrid = \Helper::getTableHeader('Expenses');


		$data = Expenses::all();

	
		return Datatables::of($data)->addIndexColumn()

		
				->editColumn("description", function($row){
					return $row->description;
				})
		
		->rawColumns(['action','description'])

		->addColumn('action', function($row){
			$btn = '';
			$btn .= '<a href="'.route($this->module.'.edit',$row->id ).'" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></a>';
			$btn .= '<a href="'.route($this->module.'.destroy',$row->id ).'" class="delete_btn btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>';
			
			return $btn;
		})

		->make(true);

	}



	function create() {
		if(is_null($this->user) || !$this->role->hasPermissionTo('Expenses.create')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$info = [
			'module_name' => ucwords($this->module),
			'create_button' => 'Expenses',
			'module_route' => $this->module
		];

		return view( $this->module.'.form',compact('info'));
	}


	function edit( Request $request , $id ){

		if(is_null($this->user) || !$this->role->hasPermissionTo('Expenses.update')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }
		$data =  Expenses::find($id);
		return view($this->module.'.form',compact('data'));
	}


	function store(Request $request){

		if(is_null($this->user) || !$this->role->hasPermissionTo('Expenses.create')){
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

		$model = new Expenses();

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

		if(is_null($this->user) || !$this->role->hasPermissionTo('Expenses.create')){
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

		$model = Expenses::find($id);

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

		if(is_null($this->user) || !$this->role->hasPermissionTo('Expenses.delete')){
            return redirect()->route('dashboard')->with('error', 'You don\'t have enough privileges to perform this action!');
        }

		$result = Expenses::find($id);
		$update = $result->delete();
		if($update){
			return back()->with('success', 'Record has been successfully deleted!');
		}else{
			return back()->with('error', 'Unable to delete this record!');
		}

	}
	
	
}
