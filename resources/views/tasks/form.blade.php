@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('tasks.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('tasks.store')}}" method="post">
		@endif
			@csrf
				<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Project<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->project_id ?? "" }}" id="select_project_id"  data-live-search="true" data-select-type=""  class="form-control select2 @error("project_id") is-invalid @enderror" name="project_id" required></select>
								
								@error("project_id")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Title<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="text" name="title"  class="form-control @error("title") is-invalid @enderror" value="{{$data->title ?? "" }}" required>
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Assaigned Members  </label>
							<div class="col-sm-9">
								<select multiple data-selected-value="{{$data->assaigned_member_ids ?? "" }}" id="select_assaigned_member_ids"  data-live-search="true" data-select-type="multiple"  class="form-control select2 @error("assaigned_member_ids") is-invalid @enderror" name="assaigned_member_ids[]" ></select>
								
								@error("assaigned_member_ids")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Created by  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->created_by ?? "" }}" id="select_created_by"  data-live-search="true" data-select-type=""  class="form-control select2 @error("created_by") is-invalid @enderror" name="created_by" ></select>
								
								@error("created_by")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Priority<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->priority ?? "" }}" id="select_priority"  data-live-search="true" data-select-type=""  class="form-control select2 @error("priority") is-invalid @enderror" name="priority" required></select>
								
								@error("priority")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Department<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->department_id ?? "" }}" id="select_department_id"  data-live-search="true" data-select-type=""  class="form-control select2 @error("department_id") is-invalid @enderror" name="department_id" required></select>
								
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Total hour<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="number" name="total_hour"  class="form-control @error("total_hour") is-invalid @enderror" value="{{$data->total_hour ?? "" }}" required>
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Deadline<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="datetime-local" name="deadline"  class="form-control @error("deadline") is-invalid @enderror" value="{{$data->deadline ?? "" }}" required>
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Status<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->status ?? "" }}" id="select_status"  data-live-search="true" data-select-type=""  class="form-control select2 @error("status") is-invalid @enderror" name="status" required></select>
								
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
									url: "{{route("database.relation.options")}}?db=projects&key=id&display1=title&display2=&display3=",
									success: function(response){
										jQuery("#select_project_id").html(response);
										var selectedVal = jQuery("#select_project_id").attr("data-selected-value");
	
										if(jQuery("#select_project_id").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_project_id").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_project_id").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script><script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db=members&key=id&display1=name&display2=designation&display3=",
									success: function(response){
										jQuery("#select_assaigned_member_ids").html(response);
										var selectedVal = jQuery("#select_assaigned_member_ids").attr("data-selected-value");
	
										if(jQuery("#select_assaigned_member_ids").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_assaigned_member_ids").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_assaigned_member_ids").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script><script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db=users&key=id&display1=name&display2=&display3=",
									success: function(response){
										jQuery("#select_created_by").html(response);
										var selectedVal = jQuery("#select_created_by").attr("data-selected-value");
	
										if(jQuery("#select_created_by").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_created_by").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_created_by").find("option[value="+selectedVal+"]").prop("selected", true);
										}
									}
								});
							});
						
						</script><script>
							jQuery(document).ready(function(){
								jQuery("#select_priority").html("<option value='High'>High</option><option value='Medium'>Medium</option><option value='Low'>Low</option>");
								var selectedVal = jQuery("#select_priority").attr("data-selected-value");
								if(jQuery("#select_priority").attr("data-select-type") == "multiple"){
									var str_array = selectedVal.split(",");
									for(var i = 0; i < str_array.length; i++) {
									str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
										jQuery("#select_priority").find("option[value="+str_array[i]+"]").prop("selected", true);
									}
								}else{
									jQuery("#select_priority").find("option[value="+selectedVal+"]").prop("selected", true);
								}
							});
						
						</script><script>
							jQuery(document).ready(function(){
								jQuery.ajax({
									url: "{{route("database.relation.options")}}?db=departments&key=id&display1=title&display2=&display3=",
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
									url: "{{route("database.relation.options")}}?db=statuses&key=id&display1=title&display2=&display3=",
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