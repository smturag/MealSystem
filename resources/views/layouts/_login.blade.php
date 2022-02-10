@extends('authentication')
@section('login')

<body style="background-color: rgb(238, 241, 233)">
    <div class="container col d-flex  justify-content-center">
        <div class="card" style="width: 30rem; padding:2px;">
            <div class="card-body " style="padding:2px;">
                <h5 class="card-title text-center" style="padding:2px;">Login</h5>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" id="mail" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Passwor bh</label>d</label>
                        <input type="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="text-center">
                        <button type="button" onclick="login()" class="btn btn-primary"
                            style="margin-top: 5px; padding:5px">Submit</button>
                    </div>
                    <div class="text-center p-1">
                        <a href="{{url('/Registration')}}"> <p><u>Havn't any account </u></p> </a>
                        <p><u>Forget passwrod </u></p>
                        <p id="abc"></p>

                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

@endsection
