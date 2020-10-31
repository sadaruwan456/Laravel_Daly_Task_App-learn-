<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
    <title>Tasks</title>
</head>
<body>
   <div class="container">
   <div class="text-center">
   <h1>Daily Task</h1>

   <div class="row">
   <div class="col-md-12">

@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
{{$error}}
</div>

@endforeach

   <form method="POST" action="/savetask">
   {{csrf_field()}}
   <input type="text" class="form-control" name="task" id="task" placeholder="Enter your Task here">
  </br>
  <input type="submit" class="btn btn-primary" value="Save">
  <input type="button" class="btn btn-warning" onclick="xx();" value="Clear">
   </form>
  
  </br>
  </bt>
  <table class="table table-dark">
  <th>ID</th>
  <th>Task</th>
  <th>Status</th>
  <th>Action</th>


@foreach($tasks as $task)
  <tr>
  <td>{{$task->id}}</td>
  <td>{{$task->task}}</td>
  <td>
  @if($task->status)
  <button class="btn btn-success" >Completed</button>
  @else

<button class="btn btn-warning">Not Completed</button>
@endif
  </td>

  <td>
  @if($task->status)
  <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-secondary">Mark As Not Completed</a>

  @else
  <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
 
  @endif
  <a href="/delete/{{$task->id}}" class="btn btn-danger">Delete</a>
  <a href="/update/{{$task->id}}" class="btn btn-info">Update</a>

  </td>
  </tr>
  @endforeach
  </table>

  <a href="/" class="btn btn-primary" style="float:Right;">Home</a>
   </div>
   </div>
   </div>
   </div> 
   <script>
   function xx(){
     document.getElementById("task").value="";
  


}
   </script>
</body>
</html>