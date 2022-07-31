@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
			<form action="{{route('project.store')}}" method="post">
				@csrf
				<input type="hidden" name="id"  value="{{$data->id ?? "" }}" ><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Product Title<span class="text-danger">*</span>  </label>
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
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Total hour  </label>
							<div class="col-sm-9">
								<input type="text" name="total_hour"  class="form-control @error("total_hour") is-invalid @enderror" value="{{$data->total_hour ?? "" }}" >
							</div>
							@error("total_hour")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Deadline  </label>
							<div class="col-sm-9">
								<input type="datetime-local" name="deadline"  class="form-control @error("deadline") is-invalid @enderror" value="{{$data->deadline ?? "" }}" >
							</div>
							@error("deadline")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Total worth  </label>
							<div class="col-sm-9">
								<input type="number" name="total_worth"  class="form-control @error("total_worth") is-invalid @enderror" value="{{$data->total_worth ?? "" }}" >
							</div>
							@error("total_worth")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Description  </label>
							<div class="col-sm-9">
								<textarea name="description"  class="form-control @error("description") is-invalid @enderror" 
								 >{{$data->description ?? "" }}</textarea>
							</div>
							@error("description")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Related documents  </label>
							<div class="col-sm-9">
								<textarea  name="related_documents"  class="textEditor form-control @error("related_documents") is-invalid @enderror" 
								 >{{$data->related_documents ?? "" }}</textarea>
							</div>
							@error("related_documents")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><input type="hidden" name="is_deleted"  value="{{$data->is_deleted ?? "" }}" ><input type="hidden" name="deleted_at"  value="{{$data->deleted_at ?? "" }}" ><input type="hidden" name="created_at"  value="{{$data->created_at ?? "" }}" ><input type="hidden" name="updated_at"  value="{{$data->updated_at ?? "" }}" >
			</form>
		</div>
	</div>
		 
@endsection