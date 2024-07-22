<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-green">
    <form action="{{url('/')}}/register" method="post">
        @csrf

        <div class="container">
            <h1>Registration</h1>

            <x-input type="text" name="name" label="Name" />
            <x-input type="email" name="email" label="Email" />
            <x-input type="password" name="password" label="Password" />
            <x-input type="password" name="password_confirmation" label="Confirm Password" />
            <button class="btn btn-promary">Submit</button>
        </div>
    </form>
</body>

</html>