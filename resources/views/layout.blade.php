<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1"') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
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
    </style>

    <title>LetsTrade</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('storage/images/logo2.png') }}">
</head>

<body>

    @yield('content')

    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
    <script src="{{ asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1') }}" async></script>


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
    <script>
        $(document).ready(function() {
            $('#country_id').change(function() {
                var countryId = $(this).val();
    
                // AJAX request
                $.ajax({
                    url: '/getCities/' + countryId,
                    type: 'GET',
                    success: function(response) {
                        var citySelect = $('#city_id');
                        citySelect.empty();
                        $.each(response, function(id, name) {
                            citySelect.append($('<option></option>').attr('value', id).text(name));
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>
