@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('memberexperiences.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('memberexperiences.store')}}" method="post">
		@endif
			@csrf
				<input type="hidden" name="id"  value="{{$data->id ?? "" }}" ><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Member  </label>
							<div class="col-sm-9">
								<select  data-selected-value="{{$data->member_id ?? "" }}" id="select_member_id"  data-live-search="true" data-select-type=""  class="form-control select2 @error("member_id") is-invalid @enderror" name="member_id" ></select>
								
								@error("member_id")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Company name  </label>
							<div class="col-sm-9">
								<input type="text" name="company_name"  class="form-control @error("company_name") is-invalid @enderror" value="{{$data->company_name ?? "" }}" >
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Designation  </label>
							<div class="col-sm-9">
								<input type="text" name="designation"  class="form-control @error("designation") is-invalid @enderror" value="{{$data->designation ?? "" }}" >
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Start date  </label>
							<div class="col-sm-9">
								<input type="datetime-local" name="start_date"  class="form-control @error("start_date") is-invalid @enderror" value="{{$data->start_date ?? "" }}" >
								@error("start_date")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">End date  </label>
							<div class="col-sm-9">
								<input type="datetime-local" name="end_date"  class="form-control @error("end_date") is-invalid @enderror" value="{{$data->end_date ?? "" }}" >
								@error("end_date")
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
									url: "{{route("database.relation.options")}}?db=members&key=id&display1=name&display2=designation&display3=",
									success: function(response){
										jQuery("#select_member_id").html(response);
										var selectedVal = jQuery("#select_member_id").attr("data-selected-value");
	
										if(jQuery("#select_member_id").attr("data-select-type") == "multiple"){
											var str_array = selectedVal.split(",");
											for(var i = 0; i < str_array.length; i++) {
											str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
												jQuery("#select_member_id").find("option[value="+str_array[i]+"]").prop("selected", true);
											}
										}else{
											jQuery("#select_member_id").find("option[value="+selectedVal+"]").prop("selected", true);
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