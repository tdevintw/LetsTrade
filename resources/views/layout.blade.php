<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>LetsTrade</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/logo2.png') }}">
</head>

<body>
    @once
        @include('includes.nav')
    @endonce
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script>
        // Initialization for ES Users
        import {
            Input,
            Ripple,
            initTWE,
        } from "tw-elements";

        initTWE({
            Input,
            Ripple
        });
    </script>
</body>

</html>
