@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('payments.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('payments.store')}}" method="post">
		@endif
			@csrf
				<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Id  </label>
							<div class="col-sm-9">
								<input type="text" name="id"  class="form-control @error("id") is-invalid @enderror" value="{{$data->id ?? "" }}" >
								@error("id")
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
						  <label for="ModuleTitle" class="col-sm-3 col-form-label">Project id  </label>
						    <div class="col-sm-9">
						  		<button type="button" data-image-width="800" data-image-height="800" data-input-name="project_id" data-input-type="single" class="btn btn-success text-white initConcaveMedia" >Select Image</button>
						  		@if(isset($data->project_id))
					<p class="selected_images_gallery">
						<span>
						<input type="hidden" value="{{$data->project_id}}" name="project_id">
						<img src="{{"/".$data->project_id}}"> 
						<b data-file-url="{{$data->project_id}}" class="selected_image_remove"><i class="fa fa-trash"></i></b>
						</span>
					</p>
				@endif
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Payment date  </label>
							<div class="col-sm-9">
								<input type="date" name="payment_date"  class="form-control @error("payment_date") is-invalid @enderror" value="{{$data->payment_date ?? "" }}" >
								@error("payment_date")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Amount  </label>
							<div class="col-sm-9">
								<input type="text" name="amount"  class="form-control @error("amount") is-invalid @enderror" value="{{$data->amount ?? "" }}" >
								@error("amount")
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
								<input type="text" name="status"  class="form-control @error("status") is-invalid @enderror" value="{{$data->status ?? "" }}" >
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

@endpush