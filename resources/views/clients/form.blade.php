@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('clients.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('clients.store')}}" method="post">
		@endif
			@csrf
				<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">User<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->user_id ?? "" }}" id="select_user_id"  data-live-search="true" data-select-type=""  class="form-control select2 @error("user_id") is-invalid @enderror" name="user_id" required></select>
								
								@error("user_id")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Name<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="text" name="name"  class="form-control @error("name") is-invalid @enderror" value="{{$data->name ?? "" }}" required>
								@error("name")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Company Name<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="text" name="company_name"  class="form-control @error("company_name") is-invalid @enderror" value="{{$data->company_name ?? "" }}" required>
								@error("company_name")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Designation<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="text" name="designation"  class="form-control @error("designation") is-invalid @enderror" value="{{$data->designation ?? "" }}" required>
								@error("designation")
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
								<input type="text" name="description"  class="form-control @error("description") is-invalid @enderror" value="{{$data->description ?? "" }}" >
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Phone  </label>
							<div class="col-sm-9">
								<input type="text" name="phone"  class="form-control @error("phone") is-invalid @enderror" value="{{$data->phone ?? "" }}" >
								@error("phone")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Email  </label>
							<div class="col-sm-9">
								<input type="text" name="email"  class="form-control @error("email") is-invalid @enderror" value="{{$data->email ?? "" }}" >
								@error("email")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">DOB  </label>
							<div class="col-sm-9">
								<input type="date" name="dob"  class="form-control @error("dob") is-invalid @enderror" value="{{$data->dob ?? "" }}" >
								@error("dob")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Address  </label>
							<div class="col-sm-9">
								<textarea name="address"  class="form-control @error("address") is-invalid @enderror" 
								 >{{$data->address ?? "" }}</textarea>
								 @error("address")
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
									url: "{{route("database.relation.options")}}?db=users&key=id&display1=name&display2=&display3=",
									success: function(response){
										jQuery("#select_user_id").html(response);
										var selectedVal = jQuery("#select_user_id").attr("data-selected-value");
	
										if(jQuery("#select_user_id").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_user_id").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_user_id").find("option[value="+selectedVal+"]").prop("selected", true);
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