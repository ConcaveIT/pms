@extends('layouts.app')

@section('content')

	<div class="card">
		<div class="card-body">
			<form action="{{route('{class}.store')}}" method="post">
				@csrf
				{form_html}
			</form>
		</div>
	</div>
		 
@endsection