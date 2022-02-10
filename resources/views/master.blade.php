<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts._head')
</head>

<body>
    <div>
        <div class="Container">
            @include('layouts._navbar')

        </div>
        <div class="d-flex flex-row">
            <div class="sideBar">
                  @include('layouts._sidebar')

            </div>

            <div class="Container">
                @yield('login')
            </div>

        </div>


    </div>

</body>

</html>
