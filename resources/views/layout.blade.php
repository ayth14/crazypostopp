<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('favicon.ico') }}" />

    {{-- <link rel="icon" href="images/favicon.ico" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>CrazyPostOpp | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48 h-screen">
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-14" src="{{ asset('images/crazyPostOpp.png') }}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer
    class=" w-full flex items-center justify-between font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
>
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    <a
        href="create.html"
        class="flex items-center bg-black text-white py-2 px-5"
        >Post Job</a
    >
</footer>
</body>
</html>
