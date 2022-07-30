@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle ?? '' }} <small> {{ $pageNote ?? '' }} </small></h2>
</div>


<div class="card">
	<div class="card-body">
			<div class="table-responsive">
		    <table class="table  table-hover table-striped  " id="projectTable">
		        <thead>
					<tr>
						<td> SL </td>
						@foreach ($tableGrid as $tableItem)
							<td>{{$tableItem}}</td>
						@endforeach
						<td>Action</td>
					  </tr>
		        </thead>

		        <tbody>
					@foreach($results as $result)
						<tr>
							<td>{{$loop->iteration}}</td>
							@foreach ($tableGrid as $tableItem)
								<td>{{$result->$tableItem}}</td>
							@endforeach
							<td><button class="btn btn-danger text-white"> <i class="fa fa-trash"></i> </button></td>
						</tr>
					@endforeach        						
		        </tbody>
		      
		    </table>
		    </div>
			
		</div>
	</div>	
			
</div>

@endsection
