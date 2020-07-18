
<!DOCTYPE html>
<html lang="en">
@include('elements.admin.head')
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		@include('elements.admin.header')
		
			
		
        <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
                        <li class="">
        <a  href="{{url('dashboard')}}"><i class="la la-home"></i> <span>Back to Home</span>  </a></li>

							
							<li class="menu-title">Settings</li>

                            <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/settings"><i class="la la-building"></i><span>Company Settings</span>  </a></li>

        <li class="active">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/localization"><i class="la la-clock-o"></i><span>Localization</span>  </a></li>

        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/theme-settings"><i class="la la-photo"></i><span>Theme Settings</span>  </a></li>
        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/roles-permissions"><i class="la la-key"></i> <span>Roles & Permissions</span>  </a></li>
        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/email-settings"><i class="la la-at"></i><span>Email Settings</span>  </a></li>
		<li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/invoice-settings"><i class="la la-pencil-square"></i><span>Invoice Settings</span>  </a></li>
        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/salary-settings"><i class="la la-money"></i> <span>Salary Settings</span>  </a></li>
		<li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/notifications-settings"><i class="la la-globe"></i><span>Notifications</span>  </a></li>
		<li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/change-password"><i class="la la-lock"></i><span>Change Password</span>  </a></li>
		<li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-purple/public/leave-type"><i class="la la-cogs"></i> <span>Leave Type </span>  </a></li>	
						</ul>
					</div>
                </div>
            </div>
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
            <div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
						
							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Basic Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->
							
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Default Country</label>
											<select class="select">
												<option selected="selected">USA</option>
												<option>United Kingdom</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Date Format</label>
											<select class="select">
												<option value="d/m/Y">15/05/2016</option>
												<option value="d.m.Y">15.05.2016</option>
												<option value="d-m-Y">15-05-2016</option>
												<option value="m/d/Y">05/15/2016</option>
												<option value="Y/m/d">2016/05/15</option>
												<option value="Y-m-d">2016-05-15</option>
												<option value="M d Y">May 15 2016</option>
												<option selected="selected" value="d M Y">15 May 2016</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Timezone</label>
											<select class="select">
												<option>(UTC +5:30) Antarctica/Palmer</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Default Language</label>
											<select class="select">
												<option selected="selected">English</option>
												<option>French</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Currency Code</label>
											<select class="select">
												<option selected="selected">USD</option>
												<option>Pound</option>
												<option>EURO</option>
												<option>Ringgit</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Currency Symbol</label>
											<input class="form-control" readonly value="$" type="text">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="submit-section">
											<button class="btn btn-primary submit-btn">Save</button>
										</div>
									</div>
								</div>
                            </form>
						</div>
					</div>
                </div>

            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		
		<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
		<!-- Bootstrap Core JS -->
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