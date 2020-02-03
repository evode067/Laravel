<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert</title>
</head>
<body>
    <form action="store" method="post" enctype="multipart/form-data">
    	<label for="name">Name</label>
    	<input type="text" name="name" value="{{old('name')}}" id="name" autocomplete="off"><br>
    	<input type="hidden" name="_token" value="{{csrf_token()}}"><br>
    	<label for="email">Email</label>
    	<input type="text" name="email" value="{{old('name')}}" id="email" autocomplete="off">
    	<br>
        <br>
        Country&nbsp;&nbsp;&nbsp;<select name="country" id="country">
            <option value="USA">USA</option>
            <option value="ENGLAND">ENGLAND</option>
            <option value="JAPAN">JAPAN  </option>
            <option value="ITALY">ITALY</option>
        </select>
        <br>
        <br>
        Gender&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <br>
        <br>
        <input type="checkbox" name="favorite[]" value="south">South
        <input type="checkbox" name="favorite[]" value="north">North
        <input type="checkbox" name="favorite[]" value="east">East
        <input type="checkbox" name="favorite[]" value="west">West
        <br>
        <br>
        <input type="file" name="image">

    	<label for="submit"></label>
    	<input type="submit" name="submit" value="submit" id="submit">
    </form>


</body>
</html> 
@foreach($errors->all() as $error)
<ul>
    <li style="color:red;">{{$error}}</li>
</ul>
@endforeach