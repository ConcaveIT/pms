@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
			<form action="{{route('leaverequest.store')}}" method="post">
				@csrf
				<div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Id  </label>
							<div class="col-sm-9">
								<input type="text" name="id"  class="form-control @error("id") is-invalid @enderror" value="{{$data->id ?? "" }}" >
							</div>
							@error("id")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">User id  </label>
							<div class="col-sm-9">
								<input type="text" name="user_id"  class="form-control @error("user_id") is-invalid @enderror" value="{{$data->user_id ?? "" }}" >
							</div>
							@error("user_id")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Leave type  </label>
							<div class="col-sm-9">
								<input type="text" name="leave_type"  class="form-control @error("leave_type") is-invalid @enderror" value="{{$data->leave_type ?? "" }}" >
							</div>
							@error("leave_type")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Leave from  </label>
							<div class="col-sm-9">
								<input type="text" name="leave_from"  class="form-control @error("leave_from") is-invalid @enderror" value="{{$data->leave_from ?? "" }}" >
							</div>
							@error("leave_from")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Leave to  </label>
							<div class="col-sm-9">
								<input type="text" name="leave_to"  class="form-control @error("leave_to") is-invalid @enderror" value="{{$data->leave_to ?? "" }}" >
							</div>
							@error("leave_to")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Reason  </label>
							<div class="col-sm-9">
								<input type="text" name="reason"  class="form-control @error("reason") is-invalid @enderror" value="{{$data->reason ?? "" }}" >
							</div>
							@error("reason")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
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
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Deleted at  </label>
							<div class="col-sm-9">
								<input type="text" name="deleted_at"  class="form-control @error("deleted_at") is-invalid @enderror" value="{{$data->deleted_at ?? "" }}" >
							</div>
							@error("deleted_at")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Created at  </label>
							<div class="col-sm-9">
								<input type="text" name="created_at"  class="form-control @error("created_at") is-invalid @enderror" value="{{$data->created_at ?? "" }}" >
							</div>
							@error("created_at")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
			</div><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Updated at  </label>
							<div class="col-sm-9">
								<input type="text" name="updated_at"  class="form-control @error("updated_at") is-invalid @enderror" value="{{$data->updated_at ?? "" }}" >
							</div>
							@error("updated_at")
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
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