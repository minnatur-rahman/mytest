<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyTest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <style>
        nav .w-5{
            display: none
        }
     </style>
</head>
  <body>


    <div class="container">

        <h1> All Users details list</h1>

        <a href="/newPlayer" class="btn btn-success btn-sm mb-5  ">Add New</a>

        <div class="row">
            <div class="col-7">
              <table class="table table-bordered table-striped">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

                @foreach ($data as $id => $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}} </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->city}}</td>
                        <td><a href=" {{route('view.player', $user->id )}} " class="btn btn-primary btn-sm">View</a></td>
                        <td><a href=" {{route('view.delete', $user->id )}} " class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="{{route('update.page', $user->id)}}" class="btn btn-warning btn-sm">Updade</a></td>
                    </tr>
                    @endforeach
              </table>
              <div class="mt-5">
                {{$data->links()}}
              </div>
              {{-- <div>
                Totat User: {{ $data->total() }}<br>
                Current Page : {{ $data->currentPage() }}
              </div> --}}
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>













