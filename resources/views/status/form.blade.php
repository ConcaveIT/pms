@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('status.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('status.store')}}" method="post">
		@endif
			@csrf
				<div class="row g-3 align-items-center">
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
								jQuery("#select_status").html("<option value='1'>Active</option><option value='0'>Inactive</option>");
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
							});
						
						</script>
@endpush