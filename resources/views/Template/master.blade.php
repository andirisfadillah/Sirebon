<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>
<body>
    <div class="wrapper">
        @include('Template.sidebar')

        <div class="main-panel">
            @include('Template.navbar')
            <div class="content">
                @yield('content')
            </div>
            @include('Template.footer')
        </div>
    </div>
    @include('Template.script')
</body>
</html>
