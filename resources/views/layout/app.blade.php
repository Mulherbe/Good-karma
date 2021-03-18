<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title> Good karma</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/timelinecss.css') }}" />
<link rel="stylesheet" href="{{ asset('css/app.css')}}" />

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel='icon' href='' type='image/png' sizes="10x16" />


</head>



    <!-- Header -->
<header class="header_style">

                    <div class="logo"> Good Karma</div>

                            {{-- Bar NAV  --}}

                         @yield('nav')
</header>

<body>
    @yield('content')

    @yield('content2')
</body>

<footer class="footer_style "> Footer
</footer>
</html>
