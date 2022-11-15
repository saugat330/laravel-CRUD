<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
       
</head>
<body>

    <h1>TODO app</h1>
    <form action="{{route('saveTodo')}}" method="POST"> 
                                                                                                                                                                                                                 
        @csrf
        <input type="text" name="todo" placeholder="enter todo here"><br><br>
        <button type="submit">submit</button><br><br>

         
    </form>
 

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Todo</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach($list as $data)
        <tr>

            <td>{{$data->id}}</td>
            <td>{{$data->title}}</td>
            <td>
                <a href="{{url('edit/'.$data->id)}}">EDIT</a>

    


            </td>
            <td><a href="{{url('delete/'.$data->id)}}">DELETE</a></td>
                    
        </tr>
                
        @endforeach
    </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>