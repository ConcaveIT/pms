@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('members.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('members.store')}}" method="post">
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
						  <label for="ModuleTitle" class="col-sm-3 col-form-label">Profile image  </label>
						    <div class="col-sm-9">
						  		<button type="button" data-image-width="800" data-image-height="800" data-input-name="profile_image" data-input-type="single" class="btn btn-success text-white initConcaveMedia" >Select Image</button>
						  		@if(isset($data->profile_image))
					<p class="selected_images_gallery">
						<span>
						<input type="hidden" value="{{$data->profile_image}}" name="profile_image">
						<img src="{{"/".$data->profile_image}}"> 
						<b data-file-url="{{$data->profile_image}}" class="selected_image_remove"><i class="fa fa-trash"></i></b>
						</span>
					</p>
				@endif
								@error("profile_image")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Phone<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="text" name="phone"  class="form-control @error("phone") is-invalid @enderror" value="{{$data->phone ?? "" }}" required>
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Date of Birth<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="date" name="dob"  class="form-control @error("dob") is-invalid @enderror" value="{{$data->dob ?? "" }}" required>
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Salary id  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->salary_id ?? "" }}" id="select_salary_id"  data-live-search="true" data-select-type=""  class="form-control select2 @error("salary_id") is-invalid @enderror" name="salary_id" ></select>
								
								@error("salary_id")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Nationality  </label>
							<div class="col-sm-9">
								<input type="text" name="nationality"  class="form-control @error("nationality") is-invalid @enderror" value="{{$data->nationality ?? "" }}" >
								@error("nationality")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Religion  </label>
							<div class="col-sm-9">
								<input type="text" name="religion"  class="form-control @error("religion") is-invalid @enderror" value="{{$data->religion ?? "" }}" >
								@error("religion")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Merital status  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->merital_status ?? "" }}" id="select_merital_status"  data-live-search="true" data-select-type=""  class="form-control select2 @error("merital_status") is-invalid @enderror" name="merital_status" ></select>
								
								@error("merital_status")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Passport No.  </label>
							<div class="col-sm-9">
								<input type="text" name="passport_no"  class="form-control @error("passport_no") is-invalid @enderror" value="{{$data->passport_no ?? "" }}" >
								@error("passport_no")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Nid No.  </label>
							<div class="col-sm-9">
								<input type="text" name="nid_no"  class="form-control @error("nid_no") is-invalid @enderror" value="{{$data->nid_no ?? "" }}" >
								@error("nid_no")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Emergency Contact Name  </label>
							<div class="col-sm-9">
								<input type="text" name="emergency_contact_name"  class="form-control @error("emergency_contact_name") is-invalid @enderror" value="{{$data->emergency_contact_name ?? "" }}" >
								@error("emergency_contact_name")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Emergency Contact Phone  </label>
							<div class="col-sm-9">
								<input type="text" name="emergency_contact_phone"  class="form-control @error("emergency_contact_phone") is-invalid @enderror" value="{{$data->emergency_contact_phone ?? "" }}" >
								@error("emergency_contact_phone")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Bank Name  </label>
							<div class="col-sm-9">
								<input type="text" name="bank_name"  class="form-control @error("bank_name") is-invalid @enderror" value="{{$data->bank_name ?? "" }}" >
								@error("bank_name")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Bank A/C Name  </label>
							<div class="col-sm-9">
								<input type="text" name="bank_ac_name"  class="form-control @error("bank_ac_name") is-invalid @enderror" value="{{$data->bank_ac_name ?? "" }}" >
								@error("bank_ac_name")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Bank A/C No.  </label>
							<div class="col-sm-9">
								<input type="text" name="bank_ac_no"  class="form-control @error("bank_ac_no") is-invalid @enderror" value="{{$data->bank_ac_no ?? "" }}" >
								@error("bank_ac_no")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Bank A/C Routing No.  </label>
							<div class="col-sm-9">
								<input type="text" name="bank_ac_routing"  class="form-control @error("bank_ac_routing") is-invalid @enderror" value="{{$data->bank_ac_routing ?? "" }}" >
								@error("bank_ac_routing")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">MFS Details  </label>
							<div class="col-sm-9">
								<textarea name="mfs_details"  class="form-control @error("mfs_details") is-invalid @enderror" 
								 >{{$data->mfs_details ?? "" }}</textarea>
								 @error("mfs_details")
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
									url: "{{route("database.relation.options")}}?db=users&key=id&display1=name&display2=phone&display3=&parent_filter=role:member",
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
								jQuery("#select_merital_status").html("");
								var selectedVal = jQuery("#select_merital_status").attr("data-selected-value");
								if(jQuery("#select_merital_status").attr("data-select-type") == "multiple"){
									var str_array = selectedVal.split(",");
									for(var i = 0; i < str_array.length; i++) {
									str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
										jQuery("#select_merital_status").find("option[value="+str_array[i]+"]").prop("selected", true);
									}
								}else{
									jQuery("#select_merital_status").find("option[value="+selectedVal+"]").prop("selected", true);
								}
							});
						
						</script>
@endpush