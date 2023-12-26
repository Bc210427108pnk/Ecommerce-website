<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
  </head>
  <body>
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  
      @foreach($users as $user)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      
                    

          
                    <td>
                      <a href="" class="btn btn-info btn-sm">Edit</a>|
                      <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')">Delete</a>

                    </td>
                  </tr>
                 @endforeach
    </tr>
   
  </tbody>
</table>

  </body>
</html>