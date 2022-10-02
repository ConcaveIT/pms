@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
		@if(isset($data))
			<form action="{{route('clients.update',$data->id)}}" method="post">
			@method('put')
		@else
			<form action="{{route('clients.store')}}" method="post">
		@endif
			@csrf
				<h6 class="text-center text-danger text-uppercase p-5 mt-5">Please configure and build module form and table to use this module!</h6>
				<div class="form-group mb-4 mt-4 text-right">
					<p class="text-end"><button type="submit" class="btn btn-primary">Save Information</button></p>
				 </div>
			</form>
		</div>
	</div>
		 
@endsection

@push('script')

@endpush