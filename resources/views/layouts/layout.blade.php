<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <title>Treasure Trade</title>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1"') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/css/splide.min.css">
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/256/4148/4148650.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <style>
        #dropdownAvatar {
            position: fixed;
            top: calc(100% + 3px);
            /* Adjust as needed */
            right: 0;
            /* Adjust as needed */
            z-index: 50;
            /* Ensure dropdown is above other content */
        }

        @media (max-width: 1024px) {
            #dropdownAvatar {
                right: 60%;
                /* Adjust as needed */
            }

            #dropdownUserAvatarButton {
                padding-left: 16px;
            }
        }

        body {
            background-color: #fff0e5;
        }

        @media (max-width: 500px) {
            #Treasure-Trade {
                font-size: 15px;
                margin: 0;
            }

            #Treasure-Trade-image {
                width: 40px;
            }

        }
    </style>
</head>

<body>
    @once
        @include('includes.navigation')
    @endonce
    @yield('content')
    @once
        @include('includes.footer')
    @endonce

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the button that triggers the dropdown toggle
            const dropdownToggleButton = document.getElementById("dropdownUserAvatarButton");

            // Get the dropdown menu
            const dropdownMenu = document.getElementById("dropdownAvatar");

            // Check if the elements exist before adding event listeners
            if (dropdownToggleButton && dropdownMenu) {
                // Add a click event listener to the button
                dropdownToggleButton.addEventListener("click", function() {
                    // Toggle the visibility of the dropdown menu
                    dropdownMenu.classList.toggle("hidden");
                });
            }
        });
    </script>
    <script src="{{ asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('#splide').mount();
        });
    </script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            "50": "#eff6ff",
                            "100": "#dbeafe",
                            "200": "#bfdbfe",
                            "300": "#93c5fd",
                            "400": "#60a5fa",
                            "500": "#3b82f6",
                            "600": "#2563eb",
                            "700": "#1d4ed8",
                            "800": "#1e40af",
                            "900": "#1e3a8a",
                            "950": "#172554"
                        }
                    }
                },
                fontFamily: {
                    'body': [
                        'Inter',
                        'ui-sans-serif',
                        'system-ui',
                        '-apple-system',
                        'system-ui',
                        'Segoe UI',
                        'Roboto',
                        'Helvetica Neue',
                        'Arial',
                        'Noto Sans',
                        'sans-serif',
                        'Apple Color Emoji',
                        'Segoe UI Emoji',
                        'Segoe UI Symbol',
                        'Noto Color Emoji'
                    ],
                    'sans': [
                        'Inter',
                        'ui-sans-serif',
                        'system-ui',
                        '-apple-system',
                        'system-ui',
                        'Segoe UI',
                        'Roboto',
                        'Helvetica Neue',
                        'Arial',
                        'Noto Sans',
                        'sans-serif',
                        'Apple Color Emoji',
                        'Segoe UI Emoji',
                        'Segoe UI Symbol',
                        'Noto Color Emoji'
                    ]
                }
            }
        }
    </script>
</body>

</html>
