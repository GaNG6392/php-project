<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
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
                        <button class="btn btn-primary">Active</button>
                        @else
                        <button class="btn btn-danger"> Inactive</button>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>