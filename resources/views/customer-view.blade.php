<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" style="color: white" href="#">Ramm_Web_Dev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-1">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: white" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white" href="{{url('/register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: white" href="{{url('/customer')}}">Customer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <a href="{{route('customer.create')}}">
            <button class="btn btn-primary mt-2 d-inline-block float-right">Add</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->password}}</td>
                    <td>
                        @if($data->gender == "M")
                        Male
                        @elseif($data->gender == "F")
                        Female
                        @else
                        Other
                        @endif
                    </td>
                    <td>{{$data->DOB}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->country}}</td>
                    <td>{{$data->state}}</td>
                    <td>
                        @if($data->status == '1')
                        <a href="">
                            <button class="btn btn-success">Active</button>
                        </a>
                        @else
                        <a href="">
                            <button class="btn btn-secondary"> Inactive</button>
                        </a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('customer.delete',['id' => $data -> customer_id])}}">
                            <button class="btn btn-danger">Delete</button>
                        </a>

                    </td>
                    <td><a href="{{route('customer.edit',['id' => $data -> customer_id])}}">
                            <button class="btn btn-primary">Edit</button>
                        </a></td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>