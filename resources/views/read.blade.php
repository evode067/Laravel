@extends('layouts.master')
@section('content')

<div class="panel panel-default">
	
	<div  class="panel-heading">
		<form action="{!!route('search')!!}" method="post">
		{!!csrf_field()!!}
	<input type="text" name="search" class="form-control" placeholder="Search">		
</form>
<div class="panel-body">
	<div class="table-resonsive">
		<table class="table table-bordered table-condensed table-hover" border="1">
			<thead>
				<tr>
					<th>Cell</th>
					<th>Sector</th>
					<th>District</th>
					<th>Province</th>
					<th>Country</th>  
				</tr>
			</thead>
			<tbody>

			@if ($s=!0)
				@foreach($results as $key => $s )
				<tr>
					<td>{!!$s->id!!}</td>
					<td>{!!$s->cel!!}</td>
					<td>{!!$s->sector!!}</td>
					<td>{!!$s->district!!}</td>
					<td>{!!$s->province!!}</td>
					<td>{!!$s->country!!}</td>
  
				</tr>
                @endforeach
                @endif
			</tbody>
		</table>
</div>
	</div> 

</div>

@endsection



