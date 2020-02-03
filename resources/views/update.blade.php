<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update</title>
</head>
<body>
<form action="update/{{$user->id}}" method="post" enctype="multipart/form-data">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" value="{{$user->name}}">
	<br>
	{{method_field('patch')}}
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<br>
	<label for="email">Email</label>
	<input type="text" name="email" id="email" value="{{$user->email}}">
	<br>
	<br>
 	<input type="radio" name="gender" value="male" <?php if($user->gender=="male"): echo 'checked'; ?>>Male
 	<?php endif; ?>
 	<input type="radio" name="gender" value="female" <?php if($user->gender=="male"): echo 'checked'; ?><?php endif; ?>>Female
 	<br>
 	<br>

 	<select name="country" id="country">
 		<?php if($user->country=='USA'): ?>
 		<option value="USA">{{$user->country}}</option>
 		<option value="ENGLAND">ENGLAND</option>
 		<option value="JAPAN">JAPAN</option>
 		<option value="ITALY">ITALY</option>
 		<?php elseif ($user->country=='ENGLAND'): ?> 
 		<option value="ENGLAND">{{$user->country}}</option>
 		<option value="USA">USA</option>
 		<option value="JAPAN">JAPAN</option>
 		<option value="ITALY">ITALY</option>
 		<?php elseif ($user->country=='JAPAN'): ?> 
 		<option value="JAPAN">{{$user->country}}</option>
 		<option value="USA">USA</option>
 		<option value="ENGLAND">ENGLAND</option>
 		<option value="ITALY">ITALY</option>
 	<?php elseif ($user->country=='ITALY'): ?> 
 		<option value="ITALY">{{$user->country}}</option>
 		<option value="USA">USA</option>
 		<option value="ENGLAND">ENGLAND</option>
 		<option value="JAPAN">JAPANS</option>
 	<?php endif  ?>
 	</select>
 	<br><br>
 	<?php $result = explode(', ', $user->favorite);
 	?>
 	<input type="checkbox" name="favorite[]" value="south" <?php if(in_array('south', $result)): echo "checked"; ?>>South
 	<?php endif; ?>
 	<input type="checkbox" name="favorite[]" value="north" <?php if(in_array('north', $result)): echo "checked"; ?>>North
 	<?php endif; ?>
 	<input type="checkbox" name="favorite[]" value="east" <?php if(in_array('east', $result)): echo "checked"; ?>>East
 	<?php endif; ?>
 	<input type="checkbox" name="favorite[]" value="west" <?php if(in_array('south', $result)): echo "checked"; ?>>West
 <?php endif; ?>
 <input type="file" name="image">
 <br>
 <br>
 <img src="{{URL::to('/image/'.$user->image)}}" alt="" width="100px" height="100px">
 	<br>
 	<br>
	<label></label>
	<input type="submit" name="submit" id="submit" value="submit">

</form>
</body>
</html>