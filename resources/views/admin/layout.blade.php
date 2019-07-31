<!DOCTYPE <!DOCTYPE html>
<html>

@include('admin.head')

<body>
	<div class="wrapper">
		@include('admin.sidebar')

		<div class="main-panel">
			<div class="content">
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
</body>
	<!--   Core JS Files   -->
    <script src="{{ asset('admin/js/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('admin/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('admin/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ asset('admin/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{ asset('admin/js/demo.js') }}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>