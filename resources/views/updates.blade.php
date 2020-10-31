<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Update Task</title>
</head>
<body>
    <div class="container">
    <form action="/updateData" method="POST">
    {{csrf_field()}} 
    </br>
    </br>
    <input type="text" class="form-control" name="task" value="{{$taskdata->task}}">
    <input type="hidden" name="id"  value="{{$taskdata->id}}">

    </br>  
    <input type="submit" class="btn btn-warning" value="Update">
    
    &nbsp;
    <input type="button" class="btn btn-danger" value="cancel">

    </form>
    </div>
</body>
</html>