<aside  class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home') }}">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li>
                <a href="">
                    <img style="width: 20px" src="https://cdn-icons-png.flaticon.com/256/25/25694.png" alt="">
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>

            </li>
        </ul>
        
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Organizer</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="">
                        <img style="width: 20px" src="https://cdn-icons-png.flaticon.com/256/2558/2558906.png">
                        <span class="ml-3 item-text">My Events</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link" href="">
                        <img style="width: 20px" src="https://cdn-icons-png.flaticon.com/256/992/992651.png">
                        <span class="ml-3 item-text">New Event</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link" href="">
                        <img style="width: 20px" src="https://cdn-icons-png.flaticon.com/256/10337/10337087.png">
                        <span class="ml-3 item-text">Reservations Requests</span>
                    </a>
                </li> 
       
                <li class="nav-item w-100">
                    <a class="nav-link" href="">
                        <img style="width: 20px" src="https://cdn-icons-png.flaticon.com/256/456/456283.png">
                        <span class="ml-3 item-text">My Profile</span>
                    </a>
                </li>
                <li class="nav-item w-100" id="dashboard-logout">
                    {{-- <a class="nav-link" href="{{ route('logout')}}">
                        
                        Logout
                    </a> --}}
                    <form method="POST" action="" class="nav-link">
                        @csrf
                        <img style="width: 20px" src="https://cdn-icons-png.flaticon.com/256/2529/2529508.png">
                        <span class="ml-3 item-text">
                        <a style="padding-left: 0;cursor:pointer;" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" style="padding: 0;">
                            {{ __('Log Out') }}
                        
                        </a>
                    </span>
                    </form>
                </li>
            </ul>
       


    </nav>
</aside>
