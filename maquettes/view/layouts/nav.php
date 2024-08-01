<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Navigation links on the left -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-user-circle fa-2x user-icon"></i> <!-- User icon with class -->
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User info -->
                <li class="user-header bg-info text-center">
                    <i class="fas fa-user-circle fa-3x user-icon-large"></i> <!-- Larger user icon -->
                    <p>
                        User
                        <small>Member since 28/12/2023</small>
                    </p>
                </li>
                <!-- Menu items -->
                <li class="dropdown-item">
                    <a href="#"><i class="fas fa-cog"></i> Settings</a>
                </li>
                <li class="dropdown-item">
                    <a href="#"><i class="fas fa-user"></i> Profile</a>
                </li>
                <li class="dropdown-item">
                    <a href="#"><i class="fas fa-bell"></i> Notifications</a> <!-- Additional item -->
                </li>
                <li class="dropdown-item">
                    <a href="/index.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>

<style>
    /* Styling for the user icon in the navbar */
    .user-menu .nav-link i.user-icon {
        color: #007bff; /* Icon color */
        line-height: 1; /* Prevents vertical misalignment */
        display: inline-flex; /* Ensures icon is vertically centered */
        align-items: center; /* Centers icon vertically */
    }

    /* Styling for the larger user icon in the dropdown */
    
    

    /* Dropdown menu styling */
    .dropdown-menu {
        border-radius: 6px; /* Smaller rounded corners for dropdown */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        padding: 0; /* Remove default padding */
    }

    /* Styling for each dropdown item */
    .dropdown-item {
        padding: 8px 16px; /* Adjust padding for better spacing */
        border-radius: 4px; /* Smaller rounded corners for each item */
        transition: background-color 0.3s, color 0.3s; /* Smooth transition */
    }

    .dropdown-item a {
        color: #333; /* Text color */
        text-decoration: none; /* Remove underline */
        display: flex; /* Align icon and text */
        align-items: center; /* Center icon and text vertically */
    }

    .dropdown-item a i {
        margin-right: 8px; /* Space between icon and text */
    }

    /* Hover effect for dropdown items */
    .dropdown-item:hover {
        background-color: #007bff; /* Background color on hover */
        color: #ffffff; /* Text color on hover */
    }
</style>
