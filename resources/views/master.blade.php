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
               
                @yield('profile')
                @yield('add_member')
                @yield('_viewChart')
                @yield('_addSheet')
            </div>

        </div>


    </div>

</body>

</html>
