@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('users.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('users.store')}}" method="post">
		@endif
			@csrf
				<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Role  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->role ?? "" }}" id="select_role"  data-live-search="true" data-select-type=""  class="form-control select2 @error("role") is-invalid @enderror" name="role" ></select>
								
								@error("role")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Email<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="text" name="email"  class="form-control @error("email") is-invalid @enderror" value="{{$data->email ?? "" }}" required>
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
								jQuery("#select_role").html("<option value='member'>Member</option><option value='client'>Client</option><option value='administrator'>Administrator</option><option value='accountant'>Accountant</option><option value='hrm'>HRM</option>");
								var selectedVal = jQuery("#select_role").attr("data-selected-value");
								if(jQuery("#select_role").attr("data-select-type") == "multiple"){
									var str_array = selectedVal.split(",");
									for(var i = 0; i < str_array.length; i++) {
									str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
										jQuery("#select_role").find("option[value="+str_array[i]+"]").prop("selected", true);
									}
								}else{
									jQuery("#select_role").find("option[value="+selectedVal+"]").prop("selected", true);
								}
							});
						
						</script>
@endpush