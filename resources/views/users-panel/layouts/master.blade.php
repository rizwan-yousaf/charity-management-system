<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>

	@include('users-panel.layouts.header')

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed hold-transition sidebar-mini layout-fixed">
	<!-- Site wrapper -->
	<div class="wrapper">

		@include('users-panel.layouts.sidebar')

		
		@include('users-panel.layouts.navbar')
		

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
				<!-- Main content -->
		    <section class="content">
		      <div class="container-fluid">
		        <div class="row">
		          <div class="col-12">
		            <div class="content">

		                @yield('content')

		            </div>
		          </div>
		        </div>
		      </div>
		    </section>
		    <!-- /.content -->
		</div>
		<!-- /Content Wrapper. Contains page content -->

				
		@include('users-panel.layouts.footer')

	</div>
	<!-- ./wrapper -->	
			
	@include('users-panel.layouts.js')

</body>
</html>