<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><h2>S . A . S Admin </h2></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Attendance</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="../public/attendances.php"> <i class="menu-icon fa fa-laptop"></i>List of Attendances</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="../public/attendants.php"> <i class="menu-icon fa fa-table"></i>List of Attendants</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="../public/events.php"> <i class="menu-icon fa fa-th"></i>List of Events</a>
                    </li>


                    <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="user-register">Register a new User</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="users-forget">Change Password</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="users">Users List</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->