
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/template/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/template/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/template/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/template/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/template/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/template/vendors/styles/style.css" />


		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
        @stack('stylesheets')
	</head>
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				<div class="loader-logo">
					<img src="/template/vendors/images/deskapp-logo.svg" alt="" />
				</div>
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					<form>
						<div class="form-group mb-0">
							<i class="dw dw-search2 search-icon"></i>
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
						</div>
					</form>
				</div>
			</div>
			<div class="header-right">
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<img src="/template/vendors/images/photo1.jpg" alt="" />
							</span>
							<span class="user-name">Ross C. Lopez</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-user1"></i> Profile</a
							>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
							<button class="dropdown-item"
								><i class="dw dw-logout"></i> Logout</button
							>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-white active"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-light"
							>White</a
						>
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="home">
					<img src="/template/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
					<img
						src="/template/vendors/images/deskapp-logo-white.svg"
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
			<div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<li>
							<a href="home" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-house"></span
								><span class="mtext">Home</span>
							</a>
						</li>
                        <li>
							<div class="dropdown-divider"></div>
						</li>
                        <li>
							<div class="sidebar-small-cap">Master</div>
						</li>
                        <li>
							<a href="kategori" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-list"></span
								><span class="mtext">Kategori</span>
							</a>
						</li>
						<li>
							<a href="produk" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-box"></span
								><span class="mtext">Produk</span>
							</a>
						</li>
						<li>
							<a href="member" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-textarea-resize"></span
								><span class="mtext">Member</span>
							</a>
						</li>
						<li>
							<a href="supplier" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-truck"></span
								><span class="mtext">Supplier</span>
							</a>
						</li>
                        <li>
							<div class="dropdown-divider"></div>
						</li>
                        <li>
							<div class="sidebar-small-cap">Transaksi</div>
						</li>
                        <li>
							<a href="pengeluaran" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-cash"></span
								><span class="mtext">Pengeluaran</span>
							</a>
						</li>
						<li>
							<a href="pembelian" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-box-arrow-in-right"></span
								><span class="mtext">Pembelian</span>
							</a>
						</li>
						<li>
							<a href="penjualan" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-box-arrow-in-left"></span
								><span class="mtext">Penjualan</span>
							</a>
						</li>
                        <li>
							<div class="dropdown-divider"></div>
						</li>
                        <li>
							<div class="sidebar-small-cap">Report</div>
						</li>
                        <li>
							<a href="javascript:;" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-file-earmark-text"></span
								><span class="mtext">Laporan</span>
							</a>
						</li>
                        <li>
							<div class="dropdown-divider"></div>
						</li>
                        <li>
							<div class="sidebar-small-cap">Pengaturan</div>
						</li>
                        <li>
							<a href="javascript:;" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-person"></span
								><span class="mtext">User</span>
							</a>
						</li>
                        <li>
							<a href="javascript:;" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-gear"></span
								><span class="mtext">Setting</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mobile-menu-overlay"></div>

        @yield('content')

		<!-- js -->
		<script src="/template/vendors/scripts/core.js"></script>
		<script src="/template/vendors/scripts/script.min.js"></script>
		<script src="/template/vendors/scripts/process.js"></script>
		<script src="/template/vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="vendors/scripts/apexcharts-setting.js"></script>

        @stack('scripts')
    </body>
</html>
