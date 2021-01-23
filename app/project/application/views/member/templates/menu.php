
<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav fixed sn-bg-4">
	<ul class="custom-scrollbar list-unstyled">
		<!-- Logo -->
		<li class="logo-sn waves-effect">
			<div class=" text-center">
				<a href="#" class="pl-0">
					<p class="text-center"><?= $this->online_admin->adminInformation->admin_username ?></p>
					<? /* <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class=""> */ ?>
				</a>
			</div>
		</li>
		<!--/. Logo -->
		<!--Search Form-->
		<? /*
		<li>
			<form class="search-form" role="search">
				<div class="md-form my-0 waves-light">
					<input type="text" class="form-control py-2" placeholder="Search">
				</div>
			</form>
		</li>
		*/ ?>
		<!--/.Search Form-->
		<!-- Side navigation links -->
		<li>
			<ul class="collapsible collapsible-accordion">
				<li>
					<a class="collapsible-header waves-effect arrow-r">
						<i class="fa fa-users"></i> Item
						<i class="fa fa-angle-down rotate-icon"></i>
					</a>
					<div class="collapsible-body">
						<ul>
							<li>
								<a href="<?= site_url("admin/item") ?>" class="waves-effect">List</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a class="collapsible-header waves-effect arrow-r">
						<i class="fa fa-user"></i> Client
						<i class="fa fa-angle-down rotate-icon"></i>
					</a>
					<div class="collapsible-body">
						<ul>
							<li>
								<a href="<?= site_url("client/listing") ?>" class="waves-effect">listing</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a class="collapsible-header waves-effect arrow-r">
						<i class="fa fa-briefcase"></i> Transaction
						<i class="fa fa-angle-down rotate-icon"></i>
					</a>
					<div class="collapsible-body">
						<ul>
							<li>
								<a href="#" class="waves-effect">Introduction</a>
							</li>
							<li>
								<a href="#" class="waves-effect">Monthly meetings</a>
							</li>
						</ul>
					</div>
				</li>
				
			<? if(false && $this->online_admin->adminInformation->admin_level=="1"): ?>	
				<li>
					<a class="collapsible-header waves-effect arrow-r">
						<i class="fa fa-user-circle"></i> Administrator
						<i class="fa fa-angle-down rotate-icon"></i>
					</a>
					<div class="collapsible-body">
						<ul>
							<li>
								<a href="<?= site_url("admin/listing") ?>" class="waves-effect">Listing</a>
							</li>
						</ul>
					</div>
				</li>
			<? endif; ?>
			
				<li>
					<a href="<?= site_url("admin/logout") ?>" class="waves-effect">
						<i class="fa fa-sign-out"></i> Log Out
					</a>
				</li>
			</ul>
		</li>
		<!--/. Side navigation links -->
	</ul>

	<!-- Mask -->
	<div class="sidenav-bg mask-strong"></div>

</div>
<!--/. Sidebar navigation -->
