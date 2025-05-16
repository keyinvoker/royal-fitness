<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.app.head />
</head>
<body>

    <x-layouts.app.header />

    <main>
        @yield('content')
    </main>

    <x-layouts.app.footer />

</body>
</html>
