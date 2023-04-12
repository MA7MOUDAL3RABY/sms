<!--=================================
 header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	<!-- logo -->
	<div class="text-left navbar-brand-wrapper">
		<a class="navbar-brand brand-logo" href="index.html"><img src="{{URL::asset('assets/images/logo-dark.png')}}" alt=""></a>
		<a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{URL::asset('assets/images/logo-icon-dark.png')}}" alt=""></a>
	</div>
	<!-- Top bar left -->
	<ul class="nav navbar-nav mr-auto">
		<li class="nav-item">
			<a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i
					class="zmdi zmdi-menu ti-align-right"></i></a>
		</li>
		<li class="nav-item">
			<div class="search">
				<a class="search-btn not_click" href="javascript:void(0);"></a>
				<div class="search-box not-click">
					<input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
					<button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
				</div>
			</div>
		</li>
	</ul>
	<!-- top bar right -->
	<ul class="nav navbar-nav ml-auto">
		<li class="nav-item dropdown d-flex align-items-center">
			<a class="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
				<span class="text-black"> {{ LaravelLocalization::getCurrentLocaleName() }}</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
				@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
				<a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
					href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
					{{ $properties['native'] }}
				</a>
				@endforeach
			</div>
		</li>
		<li class="nav-item dropdown ">
			<a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
				aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
			<div class="dropdown-menu dropdown-menu-right dropdown-big">
				<div class="dropdown-header">
					<strong>Quick Links</strong>
				</div>
				<div class="dropdown-divider"></div>
				<div class="nav-grid">
					<a href="#" class="nav-grid-item"><i class="ti-files text-primary"></i>
						<h5>New Task</h5>
					</a>
					<a href="#" class="nav-grid-item"><i class="ti-check-box text-success"></i>
						<h5>Assign Task</h5>
					</a>
				</div>
				<div class="nav-grid">
					<a href="#" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i>
						<h5>Add Orders</h5>
					</a>
					<a href="#" class="nav-grid-item"><i class="ti-truck text-danger "></i>
						<h5>New Orders</h5>
					</a>
				</div>
			</div>
		</li>
		<li class="nav-item dropdown mr-30">
			<a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
				aria-expanded="false">
				<img src="{{URL::asset('assets/images/profile-avatar.jpg')}}" alt="avatar">
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<div class="dropdown-header">
					<div class="media">
						<div class="media-body">
							<h5 class="mt-0 mb-0">Michael Bean</h5>
							<span>michael-bean@mail.com</span>
						</div>
					</div>
				</div>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>Activity</a>
				<a class="dropdown-item" href="#"><i class="text-success ti-email"></i>Messages</a>
				<a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
				<a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Projects <span
						class="badge badge-info">6</span> </a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
				<a class="dropdown-item" href="#"><i class="text-danger ti-unlock"></i>Logout</a>
			</div>
		</li>
	</ul>
</nav>

<!--=================================
 header End-->
