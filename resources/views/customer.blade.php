<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-dark">
    <form action="{{url('/')}}/customer" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                Customer Registration
            </h3>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control">
                    <span class="text-danger" @error('name') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control">
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
                    <input type="text" name="country" id="" class="form-control">
                    <span class="text-danger" @error('country') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">State</label>
                    <input type="text" name="state" id="" class="form-control">
                    <span class="text-danger" @error('state') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Address</label>
                    <input type="text" name="address" id="" class="form-control">
                    <span class="text-danger" @error('address') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Gender</label>
                    <input type="text" name="gender" id="" class="form-control">
                    <span class="text-danger" @error('gender') {{$message}} @enderror </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="">Date of birth</label>
                    <input type="calendar" name="dob" id="" class="form-control">
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