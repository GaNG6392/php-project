<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-dark">

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


    <form action="{{$url}}" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                {{$title}}
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{$customers->name }}">
                    <span class=" text-danger" @error('name') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" value="{{$customers->email}}">
                    <span class="text-danger" @error('email') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                    <span class="text-danger" @error('password') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" id="" class="form-control">
                    <span class="text-danger" @error('confirm_password') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Country</label>
                    <input type="text" name="country" id="" class="form-control" value="{{$customers->country}}">
                    <span class="text-danger" @error('country') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">State</label>
                    <input type="text" name="state" id="" class="form-control" value="{{$customers->state}}">
                    <span class="text-danger" @error('state') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Address</label>
                    <input type="text" name="address" id="" class="form-control" value="{{$customers->address}}">
                    <span class="text-danger" @error('address') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Gender</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="M" {{$customers->gender == "M" ? "checked" : ""}} />
                        <label for="male" class="form-chech-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" id="female" value="F" class="form-check-input" {{$customers->gender == "F" ? "checked" : ""}} />
                        <label for="female" class="form-chech-label">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="gender" id="other" value="O" class="form-check-input" {{$customers->gender == "O" ? "checked" : ""}} />
                        <label for="other" class="form-chech-label">Other</label>
                    </div>



                    <!-- <input type="text" name="gender" id="" class="form-control">
                    <span class="text-danger" @error('gender') {{$message}} @enderror </span> -->
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Date of birth</label>
                    <input type="calendar" name="dob" id="" class="form-control" value="{{$customers->DOB}}">
                    <span class="text-danger" @error('dob') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <button class=" btn btn-primary p-15">Submit</button>
                </div>

            </div>

        </div>

    </form>

</body>

</html>