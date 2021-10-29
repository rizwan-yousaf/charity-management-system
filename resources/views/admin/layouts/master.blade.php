<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>

	@include('admin.layouts.header')

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed hold-transition sidebar-mini layout-fixed">
	<!-- Site wrapper -->
	<div class="wrapper">

		@include('admin.layouts.sidebar')

		
		@include('admin.layouts.navbar')
		

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

				
		@include('admin.layouts.footer')

	</div>
	<!-- ./wrapper -->	
			
	@include('admin.layouts.js')

</body>
</html>