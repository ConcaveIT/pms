@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('projects.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('projects.store')}}" method="post">
		@endif
			@csrf
				<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Title  </label>
							<div class="col-sm-9">
								<input type="text" name="title"  class="form-control @error("title") is-invalid @enderror" value="{{$data->title ?? "" }}" >
								@error("title")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Client  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->client_ids ?? "" }}" id="select_client_ids"  data-live-search="true" data-select-type=""  class="form-control select2 @error("client_ids") is-invalid @enderror" name="client_ids" ></select>
								
								@error("client_ids")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Members  </label>
							<div class="col-sm-9">
								<select multiple data-selected-value="{{$data->member_ids ?? "" }}" id="select_member_ids"  data-live-search="true" data-select-type="multiple"  class="form-control select2 @error("member_ids") is-invalid @enderror" name="member_ids[]" ></select>
								
								@error("member_ids")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Project manager  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->project_manager_id ?? "" }}" id="select_project_manager_id"  data-live-search="true" data-select-type=""  class="form-control select2 @error("project_manager_id") is-invalid @enderror" name="project_manager_id" ></select>
								
								@error("project_manager_id")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Total hour  </label>
							<div class="col-sm-9">
								<input type="number" name="total_hour"  class="form-control @error("total_hour") is-invalid @enderror" value="{{$data->total_hour ?? "" }}" >
								@error("total_hour")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Deadline  </label>
							<div class="col-sm-9">
								<input type="datetime-local" name="deadline"  class="form-control @error("deadline") is-invalid @enderror" value="{{$data->deadline ?? "" }}" >
								@error("deadline")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Total worth  </label>
							<div class="col-sm-9">
								<input type="number" name="total_worth"  class="form-control @error("total_worth") is-invalid @enderror" value="{{$data->total_worth ?? "" }}" >
								@error("total_worth")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
						  <label for="ModuleTitle" class="col-sm-3 col-form-label">SRS  </label>
						    <div class="col-sm-9">
						  		<button type="button" data-input-name="srs" data-input-type="single" class="btn btn-success text-white initConcaveMedia" >Select File</button>
						  		@if(isset($data->srs))
					<p class="selected_images_gallery">
						<span>
						<input type="hidden" value="{{$data->srs}}" name="srs">
						<img src="{{"/".$data->srs}}"> 
						<b data-file-url="{{$data->srs}}" class="selected_image_remove"><i class="fa fa-trash"></i></b>
						</span>
					</p>
				@endif
								@error("srs")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Description  </label>
							<div class="col-sm-9">
								<textarea  name="description"  class="textEditor form-control @error("description") is-invalid @enderror" 
								 >{{$data->description ?? "" }}</textarea>
								 @error("description")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
						  <label for="ModuleTitle" class="col-sm-3 col-form-label">Related documents  </label>
						    <div class="col-sm-9">
						  		<button type="button" data-input-name="related_documents" data-input-type="multiple" class="btn btn-success text-white initConcaveMedia" >Select Files</button>
						  		@if(isset($data->related_documents))
					<p class="selected_images_gallery">
					@foreach(explode(",",$data->related_documents) as $file)
						@if($$file)
							<span>
								<input type="hidden" value="{{$img}}" name="related_documents[]">
								<img src="{{"/".$$file}}"> <b data-file-url="{{$$file}}" class="selected_image_remove">X</b>
							</span>
						@endif
					@endforeach
					</p>
				@endif
								@error("related_documents")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Department  </label>
							<div class="col-sm-9">
								<select multiple data-selected-value="{{$data->department_id ?? "" }}" id="select_department_id"  data-live-search="true" data-select-type="multiple"  class="form-control select2 @error("department_id") is-invalid @enderror" name="department_id[]" ></select>
								
								@error("department_id")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Status  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->status ?? "" }}" id="select_status"  data-live-search="true" data-select-type=""  class="form-control select2 @error("status") is-invalid @enderror" name="status" ></select>
								
								@error("status")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div>
				<div class="form-group mb-4 mt-4 text-right">
					<p class="text-end"><button type="submit" class="btn btn-primary">Save Information</button></p>
				 </div>
			</form>
		</div>
	</div>
		 
@endsection

@push('script')
<script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db=clients&key=id&display1=name&display2=company_name&display3=&parent_filter=",
									success: function(response){
										jQuery("#select_client_ids").html(response);
										var selectedVal = jQuery("#select_client_ids").attr("data-selected-value");
	
										if(jQuery("#select_client_ids").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_client_ids").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_client_ids").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script><script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db=members&key=id&display1=name&display2=designation&display3=&parent_filter=",
									success: function(response){
										jQuery("#select_member_ids").html(response);
										var selectedVal = jQuery("#select_member_ids").attr("data-selected-value");
	
										if(jQuery("#select_member_ids").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_member_ids").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_member_ids").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script><script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db=members&key=id&display1=name&display2=designation&display3=&parent_filter=",
									success: function(response){
										jQuery("#select_project_manager_id").html(response);
										var selectedVal = jQuery("#select_project_manager_id").attr("data-selected-value");
	
										if(jQuery("#select_project_manager_id").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_project_manager_id").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_project_manager_id").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script><script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db=departments&key=id&display1=title&display2=&display3=&parent_filter=",
									success: function(response){
										jQuery("#select_department_id").html(response);
										var selectedVal = jQuery("#select_department_id").attr("data-selected-value");
	
										if(jQuery("#select_department_id").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_department_id").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_department_id").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script><script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db=statuses&key=id&display1=title&display2=&display3=&parent_filter=",
									success: function(response){
										jQuery("#select_status").html(response);
										var selectedVal = jQuery("#select_status").attr("data-selected-value");
	
										if(jQuery("#select_status").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_status").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_status").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script>
@endpush