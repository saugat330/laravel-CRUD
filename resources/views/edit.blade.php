<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EDIT on this page</h1>
    <form action="{{route('updateTodo')}}" method='POST'>
        @csrf
        <input type="text" name="todo" value="{{$data->title}}">
        <input type="hidden" name="id" value="{{$data->id}}" >
        <button type="submit">update</button>
  </form>
</body>
</html>



