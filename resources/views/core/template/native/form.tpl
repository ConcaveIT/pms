@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
			<form action="{{route('{class}.store')}}" method="post">
				@csrf
				{form_html}
				<div class="form-group mb-4 mt-4 text-right">
					<p class="text-end"><button type="submit" class="btn btn-primary">Save Information</button></p>
				 </div>
			</form>
		</div>
	</div>
		 
@endsection

@push('script')
{script_html}
@endpush