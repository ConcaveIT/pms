@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
			<form action="{{route('projects.store')}}" method="post">
				@csrf
				<input type="hidden" name="id"  value="{{$data->id ?? "" }}" ><div class="row g-3 align-items-center">
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Client ids  </label>
							<div class="col-sm-9">
								<select class="form-control selectpicker @error("client_ids") is-invalid @enderror" name="client_ids"  >
									
								</select>
								
								@error("client_ids")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Member ids  </label>
							<div class="col-sm-9">
								<select class="form-control selectpicker @error("member_ids") is-invalid @enderror" name="member_ids"  >
									<option value="Arif--Web Developer--01711158729">Arif--Web Developer--01711158729</option><option value="Jakaria--Web Developer--01711158729">Jakaria--Web Developer--01711158729</option>
								</select>
								
								@error("member_ids")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Project Manager  </label>
							<div class="col-sm-9">
								<select class="form-control selectpicker @error("project_manager_id") is-invalid @enderror" name="project_manager_id"  >
									
								</select>
								
								@error("project_manager_id")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Total hour  </label>
							<div class="col-sm-9">
								<input type="number" name="total_hour"  class="form-control @error("total_hour") is-invalid @enderror" value="{{$data->total_hour ?? "" }}" >
								@error("total_hour")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Deadline  </label>
							<div class="col-sm-9">
								<input type="datetime-local" name="deadline"  class="form-control @error("deadline") is-invalid @enderror" value="{{$data->deadline ?? "" }}" >
								@error("deadline")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Total worth  </label>
							<div class="col-sm-9">
								<input type="number" name="total_worth"  class="form-control @error("total_worth") is-invalid @enderror" value="{{$data->total_worth ?? "" }}" >
								@error("total_worth")
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
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Department  </label>
							<div class="col-sm-9">
								<select class="form-control selectpicker @error("department_id") is-invalid @enderror" name="department_id"  >
									<option value="Web Development">Web Development</option><option value="App Development">App Development</option><option value="Graphics Design">Graphics Design</option>
								</select>
								
								@error("department_id")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
						</div>
					</div>
			</div><input type="hidden" name="is_deleted"  value="{{$data->is_deleted ?? "" }}" ><div class="row g-3 align-items-center">
					<div class="col-md-12">
						<div class="form-group row  mb-1">
							<label for="ModuleTitle" class="col-sm-3 col-form-label">Status  </label>
							<div class="col-sm-9">
								<select class="form-control selectpicker @error("status") is-invalid @enderror" name="status"  >
									
								</select>
								
								@error("status")
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							
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