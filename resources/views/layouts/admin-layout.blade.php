
<!DOCTYPE html>
<html lang="en">
@include('elements.admin.head')
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		@include('elements.admin.header')
		
			
		
        @include('elements.admin.sidebar')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
            @yield('admin-content')

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		

		<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
		<!-- Bootstrap Core JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
		<!-- <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script> -->
		<!-- Bootstrap Core JS -->
		<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js" ></script>


        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{ asset('assets/js/jquery.slimscroll.min.js')}}"></script>
		<!-- Select2 JS -->
		<script src="{{ asset('assets/js/select2.min.js')}}"></script>

		<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
		<script src="{{ asset('js/jquery.ui.touch-punch.min.js')}}"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{ asset('assets/js/moment.min.js')}}"></script>
		<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
		
		<!-- Calendar JS -->
		<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('assets/js/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.fullcalendar.js')}}"></script>

		<!-- Multiselect JS -->
		<script src="{{ asset('assets/js/multiselect.min.js')}}"></script>

		<!-- Datatable JS -->
		<script src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js')}}"></script>

		<!-- Summernote JS -->
		<script src="{{ asset('assets/plugins/summernote/dist/summernote-bs4.min.js')}}"></script>
		
			
		<script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>

		<!-- Task JS -->
		<script src="{{ asset('assets/js/task.js')}}"></script>

		<!-- Dropfiles JS
		<script src="js/dropfiles.js"></script> -->

		<!-- Custom JS -->
		<script src="{{ asset('assets/js/app.js')}}"></script>
        
		
		<!-- Bootstrap Core JS -->
        
		<!-- Slimscroll JS -->
		<script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Chart JS -->
		<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
		<script src="{{asset('assets/js/chart.js')}}"></script>
		
		<!-- Custom JS -->
	
		
    </body>
</html>