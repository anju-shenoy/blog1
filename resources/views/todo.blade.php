<html>
<head>
<title> TODO </title>
</head>
<body>
<div>
<label>To-do</label></br>
<form method="post"action="{{url('/todo')}}">

<input type ="text" name ="title" align:centre></br>
<input type ="submit" value="show">
{{ csrf_field() }}
</form>

</div>
</body>
</html>