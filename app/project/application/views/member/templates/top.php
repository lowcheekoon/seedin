<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark double-nav  fixed-top scrolling-navbar">

	<!-- SideNav slide-out button -->
	<div class="float-left">
		<a href="#" data-activates="slide-out" class="button-collapse">
			<i class="fa fa-bars"></i>
		</a>
	</div>

	<!-- Breadcrumb-->
	<div class="breadcrumb-dn mr-auto">
		<p></p>
	</div>

	<!-- Links -->
	<ul class="nav navbar-nav nav-flex-icons ml-auto">
		<? /*
		<li class="nav-item">
			<a class="nav-link">
				<i class="fa fa-envelope"></i>
				<span class="clearfix d-none d-sm-inline-block">Contact</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link">
				<i class="fa fa-gear"></i>
				<span class="clearfix d-none d-sm-inline-block">Settings</span>
			</a>
		</li>
		*/ ?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-user"></i>
				<span class="clearfix d-none d-sm-inline-block">Member</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				<!--a class="dropdown-item" href="<?= site_url('admin/change_password') ?>">Change Password</a-->
				<a class="dropdown-item" href="<?= site_url('member/logout') ?>">Log Out</a>
			</div>
		</li>
	</ul>

</nav>
<!--/.Navbar-->