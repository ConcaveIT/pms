<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Payments;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\ModuleGenerator;
use Validator, Input, Redirect, Auth; 


class PaymentsController extends Controller {
	public $module = 'payments';
	public $per_page	= '20';

	public function __construct(){
        $this->middleware(function($request,$next){
            $this->user = Auth::user();
			$this->role = Role::findByName('api');
            return $next($request);
        });
    }

	public function index( Request $request ){
	
		if(!$this->role->hasPermissionTo('payments.view')){
			return response()->json("You do not have enough privileges to perform this action!", 400);
        }

		$tableGrid = \Helper::getTableHeader('Payments');
		$results = Payments::paginate(30);
		return response()->json($results, 200);
	
	}
	

	function show( Request $request , $id ) {
		if(!$this->role->hasPermissionTo('payments.view')){
			return response()->json("You do not have enough privileges to perform this action!", 400);
        }
		$result = Payments::find($id);
		return response()->json($result, 200);
	}



	function store(Request $request){

		if(!$this->role->hasPermissionTo('payments.create')){
			return response()->json("You do not have enough privileges to perform this action!", 400);
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

		$validator = Validator::make($request->all(), $validationArray);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }


		$model = new Payments();

		foreach($request->all() as $fieldKey => $fieldVal){
			if(in_array($fieldKey,$validFormKeys)){
				if(is_array($fieldVal)) $fieldVal = implode(',',$fieldVal);
				$model->$fieldKey = $fieldVal;
			}

		}

		try {
			$update = $model->save();
			if($update) {
				return response()->json('Module data has been successfully saved!', 200);
			}else {
				return response()->json('Something went wrong. Please try again later!', 400);
			}
		}
		catch(\Exception $e) {
			return response()->json($e->getMessage(), 400);
		}

		
	}




	function update(Request $request,$id){

		if(!$this->role->hasPermissionTo('payments.update')){
			return response()->json("You do not have enough privileges to perform this action!", 400);
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

		$validator = Validator::make($request->all(), $validationArray);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }


		$model = Payments::find($id);

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
			return response()->json('Module data has been successfully updated!', 200);
        }else {
			return response()->json('Something went wrong. Please try again later!', 400);
        }
		
	}




	public function destroy($id){

		if(!$this->role->hasPermissionTo('payments.delete')){
			return response()->json("You do not have enough privileges to perform this action!", 400);
        }

		$result = Payments::find($id);
		$update = $result->delete();

		if($update) {
			return response()->json('Record has been successfully deleted!', 200);
        }else {
			return response()->json('Unable to delete this record!', 400);
        }

	}
	
	
}