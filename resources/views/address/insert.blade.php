@extend('layouts.master')
@section('content')
<div class="panel panel-default">
	<div class="panel-heading">New</div>
	<div class="panel-body">
	<div class="row">
			 <form action="{{ URL::route('postInsert') }}" method="post">
			{!! csrf_field() !!}
			<div class="col-lg-6 col-md-6">
				<div class="form-group"><td><label>Cell</label></td>
					<td><input type="text" name="cel" class="form-control"></td></tr></div></div>
					<div class="col-lg-6 col-md-6">
				<tr><td><div class="form-group"><label>sector</label></td>
				<td><input type="text" name="sector" class="form-control"></td></div></div>
					<div class="col-lg-6 col-md-6">
				</tr><tr><td><div class="form-group"><label>District</label></td>
					<td><input type="text" name="district" class="form-control"></td></div></div>
					<tr><td><div class="form-group"><label>province</label></td><td>

					<input type="text" name="province" class="form-control"></td></tr>
						<td><div class="form-group"><label>country</label></td>
					<td><input type="text" name="c" class="form-control"></td></tr></div></div>
		
	</div></div></div class="footer">
<tr><td colspan="2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="" class="btn btn-primary" value="Save"></td></tr></div></form>

@endsection
