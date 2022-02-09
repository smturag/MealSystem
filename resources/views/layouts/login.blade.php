<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/reg.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/registration.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-color: rgb(26, 31, 17)">
    <div class="container col d-flex  justify-content-center">
        <div class="card" style="width: 30rem; padding:2px;">
            <div class="card-body " style="padding:2px;">
                <h5 class="card-title text-center" style="padding:2px;">Registration</h5>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="mail" class="form-control" placeholder="Enter email">

                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="text-center">
                        <button type="submit" onclick="login()" class="btn btn-primary"
                            style="margin-top: 5px; padding:5px">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
