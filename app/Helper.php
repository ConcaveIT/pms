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
			$tableGrid = json_decode($moduleConfig->configuration);
			if($tableGrid){
				$tableGrid = $tableGrid->table_configuration;
				foreach ($tableGrid as $tableItemKey => $tableItem){
					if($tableItem && isset($tableItem->listview)){
						$tableHeaders[] = [
							'field_key'	=>$tableItemKey,
							'field_name' => $tableItem->field_name,
							'field_format' => $tableItem->format,
							'field_format_value' => $tableItem->format_value,
							'database_relation'	=> [
								'current_db_model' => $controller,
								'relation_database' => $tableItem->relation_database ?? null,
								'relation_database_key' => $tableItem->relation_database_key ?? null,
								'relation_database_display1' => $tableItem->relation_database_display1 ?? null,
								'relation_database_display2' => $tableItem->relation_database_display2 ?? null,
								'relation_database_display3' => $tableItem->relation_database_display3 ?? null,
							]
						];
					}
				}
			}
		}
		return $tableHeaders;
	}


	public static function formatTableItem($rowId,$formatType = 'default',$field_format_value,$value,$databaseRelation){

			if($formatType == 'datetime'){
				return date($field_format_value,strtotime($value));
			}elseif($formatType == 'link'){
				return '<a  target="_blank" href="'.$field_format_value.'/'.$value.'" >'.$value.'</a>';
			}elseif($formatType == 'image'){
				return '<a  target="_blank" href="'.$field_format_value.'/'.$value.'" > <img width="65" src="'.$field_format_value.'/'.$value.'" alt="Table Image" ></a>';
			}elseif($formatType == 'multipleimage'){
				$images = explode(',',$value);
				$html = '';
				foreach($images as $image){
					if($image){
						$html.= '<a  target="_blank" href="'.$field_format_value.'/'.$image.'" ><img style="width:65px;margin-right:5px;" src="'.$field_format_value.'/'.$image.'" alt="Table Image" ></a>';
					}
					
				}
				return $html;
			}elseif($formatType == 'file'){
				return '<a  target="_blank" href="'.$field_format_value.'/'.$value.'" ><img style="width:40px;margin-right:5px;" src="/assets/images/file.png"></a>';
			}elseif($formatType == 'multiplefile'){
				$files = explode(',',$value);
				$html = '';
				foreach($files as $file){
					if($image){
						$html.=  '<a  target="_blank" href="'.$field_format_value.'/'.$file.'" ><img style="width:40px;margin-right:5px;" src="/assets/images/file.png"></a>';
					}
				}
				return $html;
			}elseif( $formatType == 'function'){

				$args = explode(':',$field_format_value);
				$functionName = $args[0];
				$paramKey1 = isset($args[1]) ? $args[1] :null;
				$paramKey2 = isset($args[2]) ? $args[2] :null;
				$paramKey3 = isset($args[3]) ? $args[3] :null;
				$modelString = $databaseRelation['current_db_model'];
				return \Helper::{$functionName}($modelString,$rowId,$paramKey1,$paramKey2,$paramKey3);

			}elseif($formatType == 'select'){
				if($databaseRelation['relation_database'] && $databaseRelation['relation_database_key'] ){
					$display = '';
					$displayArray = [];
					$relationDataBaseName = $databaseRelation['relation_database'];
					$relationDataBaseKey = $databaseRelation['relation_database_key'];
					$display1 = $databaseRelation['relation_database_display1'];
					$display2= $databaseRelation['relation_database_display2'];
					$display3= $databaseRelation['relation_database_display3'];
	
					$valueArray = explode(',',$value);
	
					$databaseValues = \DB::table($relationDataBaseName)->whereIn($relationDataBaseKey,$valueArray)->get();
					foreach($databaseValues as $opVal){
						if($display1) $display = $opVal->{$display1};
						if($display2) $display .= '--'.$opVal->{$display2};
						if($display3) $display .= '--'.$opVal->{$display3};
						$displayArray[] = $display;
					}
	
					return implode(',',$displayArray);
				
			}
			}else{
				return $value;
			}
		
	}


	public static function getUppercase(
		$modelString, //Model Name
		$rowId, //Field row ID
		$paramKey1, //Request Parameter 1
		$paramKey2, //Request Parameter 2
		$paramKey3 //Request Parameter 3
		){
		$model = 'App\\Models\\'.$modelString;
		$model = $model::find($rowId);
		return strtoupper($model->title);
	}

	
	public static function generateForm($config){
		$html = '';
		$selectOptionData = [];
		$form_configuration = isset(json_decode($config)->form_configuration) ? json_decode($config)->form_configuration : [];
		if($form_configuration){
			foreach($form_configuration as $conf){
				$selectOptionData['allow_multiple'] = isset($conf->allow_multiple) ? true : false ;
				$html .= \Helper::buildInputs($conf->type,$conf->field_key,$conf->validation,$conf->field_name,$selectOptionData);
			}
		}else{
			$html .= '<h6 class="text-center text-danger text-uppercase p-5 mt-5">Please configure and build module form and table to use this module!</h6>';
		}
		return $html;
	}

	public static function generateScript($config){
		$scripts = '';
		$selectOptionData = [];
		$form_configuration = isset(json_decode($config)->form_configuration) ? json_decode($config)->form_configuration : [];
		if($form_configuration){

			foreach($form_configuration as $conf){

				$relationDataDataType = isset($conf->data_type) ? $conf->data_type : null ;
				$relationDataCustomData = isset($conf->custom_data) ? $conf->custom_data : [] ;
				$relationDataBaseName = isset($conf->relation_database) ? $conf->relation_database : null ; 
				$relationDataBaseKey = isset($conf->relation_database_key) ? $conf->relation_database_key : null ;
				$display1 = isset($conf->relation_database_display1) ? $conf->relation_database_display1 : null ;
				$display2 = isset($conf->relation_database_display2) ? $conf->relation_database_display2 : null ;
				$display3 = isset($conf->relation_database_display3) ? $conf->relation_database_display3 : null ;

				if($relationDataDataType == 'custom'){

					$response = '';
					foreach($relationDataCustomData  as $cData){
						$response .= '<option value=\''.$cData->value.'\'>'.$cData->name.'</option>';
					}

						$scripts .= '<script>
							jQuery(document).ready(function(){
								jQuery("#select_'.$conf->field_key.'").html("'.$response.'");
								var selectedVal = jQuery("#select_'.$conf->field_key.'").attr("data-selected-value");
								if(jQuery("#select_'.$conf->field_key.'").attr("data-select-type") == "multiple"){
									var str_array = selectedVal.split(",");
									for(var i = 0; i < str_array.length; i++) {
									str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
										jQuery("#select_'.$conf->field_key.'").find("option[value="+str_array[i]+"]").prop("selected", true);
									}
								}else{
									jQuery("#select_'.$conf->field_key.'").find("option[value="+selectedVal+"]").prop("selected", true);
								}
							});
						
						</script>';
					
				}else{
					if($relationDataBaseName && $relationDataBaseKey){
						$scripts .= '<script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db='.$relationDataBaseName.'&key='.$relationDataBaseKey.'&display1='.$display1.'&display2='.$display2.'&display3='.$display3.'",
									success: function(response){
										jQuery("#select_'.$conf->field_key.'").html(response);
										var selectedVal = jQuery("#select_'.$conf->field_key.'").attr("data-selected-value");
	
										if(jQuery("#select_'.$conf->field_key.'").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_'.$conf->field_key.'").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_'.$conf->field_key.'").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script>';
					}
				}

				
				
			}
		}

		return $scripts;
	}


	public static function getSlelectDatabaseValues($relationDataBaseName,$relationDataBaseKey,$display1,$display2=null,$display3=null){
		$optionHtml = '';
		$databaseValues = \DB::table($relationDataBaseName)->get();
		$display = '';

		foreach($databaseValues as $opVal){
			if($display1){
				$display = $opVal->{$display1};
			}
			if($display2){
				$display .= '--'.$opVal->{$display2};
			}

			if($display3){
				$display .= '--'.$opVal->{$display3};
			}
			$optionHtml .= '<option value="'.$opVal->id.'">'.$display.'</option>';
		}
		return $optionHtml;
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
					<p class="selected_images_gallery">
					@foreach(explode(",",$data->'.$configFieldKey.') as $img)
						@if($img)
							<span>
								<input type="hidden" value="{{$img}}" name="'.$configFieldKey.'[]">
								<img src="{{"/".$img}}"> <b data-file-url="{{$img}}" class="selected_image_remove">X</b>
							</span>
						@endif
					@endforeach
					</p>
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

		if($configType == 'select') {

			$multiple = '';
			$multipleString = '';
			if($selectOptionData['allow_multiple']) {
				$multiple = 'multiple';
				$multipleString = '[]';
			}

			$html .= '<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">'.$configFieldName . $requiredHtml.'  </label>
							<div class="col-sm-9">
								<select '.$multiple.' data-selected-value="{{$data->'.$configFieldKey.' ?? "" }}" id="select_'.$configFieldKey.'"  data-live-search="true" data-select-type="'.$multiple.'"  class="form-control select2 @error("'.$configFieldKey.'") is-invalid @enderror" name="'.$configFieldKey.$multipleString.'" '.$required.'></select>
								
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