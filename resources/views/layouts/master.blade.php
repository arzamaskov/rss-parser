<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')
<body>
    <header>

        @include ('layouts.nav')

    </header>

    <main>

        @yield ('content')

    </main>

    @include ('layouts.footer')

    @include ('layouts.scripts')

</body>
</html>
