<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View All Customers</title>
	<style>
	table,th,tr, td{
		border: 1px solid black;
		border-collapse: collapse;
	}

	</style>
</head>
<body>
	<a href="insert">Insert Customer</a>
	<br>
	<br>
	<br>
<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Country</th>
		<th>Gender</th>
		<th>Favorite</th>
		<th>Image</th>
		<th>Show By Id</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	<tbody>
		@foreach($user as $users)
		<tr>
		<td>{{$users->name}}</td>
		<td>{{$users->email}}</td>
		<td>{{$users->country}}</td>
		<td>{{$users->gender}}</td>
		<td>{{$users->favorite}}</td>
		<td><img src="{{URL::to('/image/'.$users->image)}}" alt="" width="70px" height="70px"></td>
		<td><a href="customer/{{$users->name}}">View by id</a></td>
		<td><a href="edit/{{$users->name}}">Update</a></td>
		<td><a href="delete/{{$users->id}}">Delete customer</a></td>
		@endforeach
	</tbody>
</table>
</body>
</html>