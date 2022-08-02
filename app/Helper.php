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
		$html = '';
		$selectOptionData = [];
		$form_configuration = isset(json_decode($config)->form_configuration) ? json_decode($config)->form_configuration : [];
		if($form_configuration){

			// var_dump($form_configuration);
			// exit;
			foreach($form_configuration as $conf){
				$selectOptionData['data_type'] = isset($conf->data_type) ? $conf->data_type : null ;
				$selectOptionData['relation_database'] = isset($conf->relation_database) ? $conf->relation_database : null ; 
				$selectOptionData['relation_database_key'] = isset($conf->relation_database_key) ? $conf->relation_database_key : null ;
				$selectOptionData['relation_database_display1'] = isset($conf->relation_database_display1) ? $conf->relation_database_display1 : null ;
				$selectOptionData['relation_database_display2'] = isset($conf->relation_database_display2) ? $conf->relation_database_display2 : null ;
				$selectOptionData['relation_database_display3'] = isset($conf->relation_database_display3) ? $conf->relation_database_display3 : null ;
				$selectOptionData['custom_data'] = isset($conf->custom_data) ? $conf->custom_data : null ;
				$html .= \Helper::buildInputs($conf->type,$conf->field_key,$conf->validation,$conf->field_name,$selectOptionData);
			}
		}
		return $html;
	}


	public static  function buildInputs($configType,$configFieldKey,$configValidation,$configFieldName,$selectOptionData){
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
								@error("'.$configFieldKey.'")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
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
								 @error("'.$configFieldKey.'")
								 <span class="invalid-feedback" role="alert">
									 <strong>{{ $message }}</strong>
								 </span>
							 	@enderror
							</div>
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
								 @error("'.$configFieldKey.'")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
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
								@error("'.$configFieldKey.'")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
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
								@error("'.$configFieldKey.'")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div>';
		}

		if($configType == 'date') {
			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
							<div class="col-sm-9">
								<input type="date" name="'.$configFieldKey.'"  class="form-control @error("'.$configFieldKey.'") is-invalid @enderror" value="{{$data->'.$configFieldKey.' ?? "" }}" '.$required.'>
								@error("'.$configFieldKey.'")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div>';
		}

		if($configType == 'image' || $configType == 'multipleimages' ) {
			$previewImageHtml = '';
			if($configType == 'image'){
				$inputType = 'single';
				$btnText = 'Select Image';

				$previewImageHtml = '@if(isset($data->'.$configFieldKey.'))
					<p class="selected_images_gallery">
						<span>
						<input type="hidden" value="{{$data->'.$configFieldKey.'}}" name="'.$configFieldKey.'">
						<img src="{{"/".$data->'.$configFieldKey.'}}"> 
						<b data-file-url="{{$data->'.$configFieldKey.'}}" class="selected_image_remove"><i class="fa fa-trash"></i></b>
						</span>
					</p>
				@endif';


			}else{
				$inputType = 'multiple';
				$btnText = 'Select Images';
				$previewImageHtml = '@if(isset($data->'.$configFieldKey.'))
					@foreach(explode(",",$data->'.$configFieldKey.') as $img)
						@if($img)
						<span>
							<input type="hidden" value="{{$img}}" name="'.$configFieldKey.'[]">
							<img src="{{"/".$img}}"> <b data-file-url="{{$img}}" class="selected_image_remove">X</b>
						</span>
						@endif
					@endforeach
				@endif';
			}

			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
						  <label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
						    <div class="col-sm-9">
						  		<button type="button" data-image-width="800" data-image-height="800" data-input-name="'.$configFieldKey.'" data-input-type="'.$inputType .'" class="btn btn-success text-white initConcaveMedia" >'.$btnText.'</button>
						  		'.$previewImageHtml.'
								@error("'.$configFieldKey.'")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
			</div>';
		}


		// $selectOptionData['data_type'] = isset($conf->data_type) ? $conf->data_type : null ;

		// $selectOptionData['relation_database'] = isset($conf->relation_database) ? $conf->relation_database : null ; 
		// $selectOptionData['relation_database_key'] = isset($conf->relation_database_key) ? $conf->relation_database_key : null ;
		// $selectOptionData['relation_database_display1'] = isset($conf->relation_database_display1) ? $conf->relation_database_display1 : null ;
		// $selectOptionData['relation_database_display2'] = isset($conf->relation_database_display2) ? $conf->relation_database_display2 : null ;
		// $selectOptionData['relation_database_display3'] = isset($conf->relation_database_display3) ? $conf->relation_database_display3 : null ;
		// $selectOptionData['custom_data'] = isset($conf->custom_data) ? $conf->custom_data : null ;

		if($configType == 'select') {

			$optionHtml = '';

			if($selectOptionData['data_type'] && $selectOptionData['data_type'] = 'database'){
				
					if($selectOptionData['relation_database'] && $selectOptionData['relation_database_key']){
						$relationDataBaseName = $selectOptionData['relation_database'];
						$relationDataBaseKey = $selectOptionData['relation_database_key'];
						$databaseValues = \DB::table($relationDataBaseName)->get();
						
						$display = '';

						foreach($databaseValues as $opVal){
							if($selectOptionData['relation_database_display1']){
								$display = $opVal->{$selectOptionData['relation_database_display1']};
							}
	
							if($selectOptionData['relation_database_display2']){
								$display .= '::'.$opVal->{$selectOptionData['relation_database_display2']};
							}
	
							if($selectOptionData['relation_database_display3']){
								$display .= '::'.$opVal->{$selectOptionData['relation_database_display3']};
							}
							$optionHtml .= '<option value="xxx">'.$display.'</option>';
						}
					}
				}
		
			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
							<div class="col-sm-9">
								<select class="form-control @error("'.$configFieldKey.'") is-invalid @enderror" name="'.$configFieldKey.'" '.$required.' >
									'.$optionHtml.'
								</select>
								
								@error("'.$configFieldKey.'")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div>';
		}


		return $html;
	}







    

    
}