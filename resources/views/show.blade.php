<html>
<head>
<title> TO-DO DISPLAY </title>
</head>
<body>
<center>
<label>To-do display</label></br>
<form method="post"action="{{url('/show')}}">


<input type ="submit" value="button">
{{ csrf_field() }}
</form>
@if(isset($todos))
{{$todos}}
@endif
</center>

</body>
</html>