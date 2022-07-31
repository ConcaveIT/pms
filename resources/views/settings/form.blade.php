@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
			<form action="{{route('settings.store')}}" method="post">
				@csrf
				<input type="hidden" name="id"  value="{{$data->id ?? "" }}" ><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Meta key<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="text" name="meta_key"  class="form-control @error("meta_key") is-invalid @enderror" value="{{$data->meta_key ?? "" }}" required>
							</div>
							@error("meta_key")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
						  <label for="ModuleTitle" class="col-sm-3 col-form-label">Meta value<span class="text-danger">*</span>  </label>
						    <div class="col-sm-9">
						  		<button type="button" data-image-width="800" data-image-height="800" data-input-name="meta_value" data-input-type="single" class="btn btn-success text-white initConcaveMedia" >Select Image</button>
						  		@if(isset($data->meta_value))
					<p class="selected_images_gallery">
						<span>
						<input type="hidden" value="{{$data->meta_value}}" name="meta_value">
						<img src="{{"/".$data->meta_value}}"> 
						<b data-file-url="{{$data->meta_value}}" class="selected_image_remove"><i class="fa fa-trash"></i></b>
						</span>
					</p>
				@endif
							</div>
							@error("meta_value")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><input type="hidden" name="deleted_at"  value="{{$data->deleted_at ?? "" }}" ><input type="hidden" name="created_at"  value="{{$data->created_at ?? "" }}" ><input type="hidden" name="updated_at"  value="{{$data->updated_at ?? "" }}" >

				<div class="form-group mb-4 mt-4 text-right">
					<p class="text-end"><button type="submit" class="btn btn-primary">Save Information</button></p>
				 </div>
			</form>
		</div>
	</div>
		 
@endsection