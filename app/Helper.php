<?php

use App\Models\ModuleGenerator;

class Helper{

    public static function sanitizeField($field){

        return ucfirst(str_replace("_"," ",$field));

    }

    public static function blend($str,$data) {
		$src = $rep = array();
		
		foreach($data as $k=>$v){
			$src[] = "{".$k."}";
			$rep[] = $v;
		}
		
		if(is_array($str)){
			foreach($str as $st ){
				$res[] = trim(str_ireplace($src,$rep,$st));
			}
		} else {
			$res = str_ireplace($src,$rep,$str);
		}
		
		return $res;
		
	}

	public static function getTableHeader($controller){
		$tableHeaders = [];
		$moduleConfig = ModuleGenerator::where('controller_name',$controller)->first();
		if($moduleConfig){
			$tableGrid = json_decode($moduleConfig->configuration)->table_configuration;
			if($tableGrid){
				foreach ($tableGrid as $tableItemKey => $tableItem){
					if($tableItem && isset($tableItem->listview)){
						$tableHeaders[] = [
							'field_key'	=>$tableItemKey,
							'field_name' => $tableItem->field_name,
							'field_format' => $tableItem->format,
							'field_format_value' => $tableItem->format_value,
						];
					}
				}
			}
		}
		return $tableHeaders;
	}


	public static function formatTableItem($formatType = 'default',$field_format_value,$value){

		if($formatType == 'datetime'){
			return date($field_format_value,strtotime($value));
		}elseif($formatType == 'link'){
			return '<a  target="_blank" href="'.$field_format_value.'/'.$value.'" >'.$value.'</a>';
		}elseif($formatType == 'image'){
			return '<img src="'.$field_format_value.'/'.$value.'" alt="Table Image" >';
		}elseif($formatType == 'file'){
			return '<a  target="_blank" href="'.$field_format_value.'/'.$value.'" >'.$value.'</a>';
		}else{
			return $value;
		}
	}

	
	public static function generateForm($config){
		$form_configuration = json_decode($config)->form_configuration;
		$html = '';
		foreach($form_configuration as $conf){
			$html .= \Helper::buildInputs($conf->type,$conf->field_key,$conf->validation,$conf->field_name);
		}
		return $html;
	}


	public static  function buildInputs($configType,$configFieldKey,$configValidation,$configFieldName){
		$html = '';
		$requiredHtml = '';
		$required = '';
		if(strpos($configValidation,'required') > -1){
			$requiredHtml .= '<span class="text-danger">*</span>';
			$required = 'required';
		}

		if($configType == 'hidden') {
			$html .= '<input type="hidden" name="'.$configFieldKey.'"  value="{{$data->'.$configFieldKey.' ?? "" }}" >';
		}

		if($configType == 'text') {
			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
							<div class="col-sm-9">
								<input type="text" name="'.$configFieldKey.'"  class="form-control @error("'.$configFieldKey.'") is-invalid @enderror" value="{{$data->'.$configFieldKey.' ?? "" }}" '.$required.'>
							</div>
							@error("'.$configFieldKey.'")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div>';
		}

		if($configType == 'textarea') {
			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
							<div class="col-sm-9">
								<textarea name="'.$configFieldKey.'"  class="form-control @error("'.$configFieldKey.'") is-invalid @enderror" 
								 '.$required.'>{{$data->'.$configFieldKey.' ?? "" }}</textarea>
							</div>
							@error("'.$configFieldKey.'")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div>';
		}


		if($configType == 'textareawitheditor') {
			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
							<div class="col-sm-9">
								<textarea  name="'.$configFieldKey.'"  class="textEditor form-control @error("'.$configFieldKey.'") is-invalid @enderror" 
								 '.$required.'>{{$data->'.$configFieldKey.' ?? "" }}</textarea>
							</div>
							@error("'.$configFieldKey.'")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div>';
		}


		if($configType == 'number') {
			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
							<div class="col-sm-9">
								<input type="number" name="'.$configFieldKey.'"  class="form-control @error("'.$configFieldKey.'") is-invalid @enderror" value="{{$data->'.$configFieldKey.' ?? "" }}" '.$required.'>
							</div>
							@error("'.$configFieldKey.'")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div>';
		}


		if($configType == 'datetime') {
			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
							<div class="col-sm-9">
								<input type="datetime-local" name="'.$configFieldKey.'"  class="form-control @error("'.$configFieldKey.'") is-invalid @enderror" value="{{$data->'.$configFieldKey.' ?? "" }}" '.$required.'>
							</div>
							@error("'.$configFieldKey.'")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div>';
		}


		return $html;
	}







    

    
}