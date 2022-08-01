@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
			<form action="{{route('status.store')}}" method="post">
				@csrf
				<input type="hidden" name="id"  value="{{$data->id ?? "" }}" ><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Title<span class="text-danger">*</span>  </label>
							<div class="col-sm-9">
								<input type="text" name="title"  class="form-control @error("title") is-invalid @enderror" value="{{$data->title ?? "" }}" required>
							</div>
							@error("title")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><input type="hidden" name="deleted_at"  value="{{$data->deleted_at ?? "" }}" ><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Status  </label>
							<div class="col-sm-9">
								<input type="text" name="status"  class="form-control @error("status") is-invalid @enderror" value="{{$data->status ?? "" }}" >
							</div>
							@error("status")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><input type="hidden" name="created_at"  value="{{$data->created_at ?? "" }}" ><input type="hidden" name="updated_at"  value="{{$data->updated_at ?? "" }}" >

				<div class="form-group mb-4 mt-4 text-right">
					<p class="text-end"><button type="submit" class="btn btn-primary">Save Information</button></p>
				 </div>
			</form>
		</div>
	</div>
		 
@endsection