
<head>
    @extends('authentication')
    @section('registration')
</head>

<body style="background-color: rgb(26, 31, 17)">
    <div class="container col d-flex  justify-content-center">
        <div class="card" style="width: 30rem; padding:2px;">
            <div class="card-body " style="padding:2px;">
                <h5 class="card-title text-center" style="padding:2px;">Registration</h5>
                <form>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" id="txtWord" class="form-control" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>RePassword</label>
                        <input type="password" id="repass" class="form-control"  placeholder="RePassword">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="mail" class="form-control" placeholder="Enter email">

                    </div>
                    <div class="text-center">
                      <button type="button" onclick="submitForm()" class="btn btn-primary" style="margin-top: 5px; padding:5px">Submit</button>
                    </div>
                    <div class="text-center p-1">
                        <a href="{{url('/Login')}}"> <p><u>Already have an account </u></p> </a>
                        <p id="abc"></p>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

@endsection


