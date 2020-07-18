<!DOCTYPE html>
<html lang="en">
@include('elements.admin.head')
	
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		@include('elements.admin.header')
		
			<!-- sidebar -->
		
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
                        <li class="">
        <a  href="{{url('dashboard')}}"><i class="la la-home"></i> <span>Back to Home</span>  </a></li>

							
							<li class="menu-title">Settings</li>

                            <li class="active">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/settings"><i class="la la-building"></i><span>Company Settings</span>  </a></li>

        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/localization"><i class="la la-clock-o"></i><span>Localization</span>  </a></li>

        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/theme-settings"><i class="la la-photo"></i><span>Theme Settings</span>  </a></li>
        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/roles-permissions"><i class="la la-key"></i> <span>Roles & Permissions</span>  </a></li>
        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/email-settings"><i class="la la-at"></i><span>Email Settings</span>  </a></li>
		<li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/invoice-settings"><i class="la la-pencil-square"></i><span>Invoice Settings</span>  </a></li>
        <li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/salary-settings"><i class="la la-money"></i> <span>Salary Settings</span>  </a></li>
		<li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/notifications-settings"><i class="la la-globe"></i><span>Notifications</span>  </a></li>
		<li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/change-password"><i class="la la-lock"></i><span>Change Password</span>  </a></li>
		<li class="">
        <a  href="https://smarthr.dreamguystech.com/smarthr-laravel/smarthr-orange/public/leave-type"><i class="la la-cogs"></i> <span>Leave Type </span>  </a></li>	
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
                                    <h3 class="page-title">Company Settings</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->
                        
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Company Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="Dreamguy's Technologies">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Contact Person</label>
                                        <input class="form-control " value="Daniel Porter" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control " value="3864 Quiet Valley Lane, Sherman Oaks, CA, 91403" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control select">
                                            <option>USA</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input class="form-control" value="Sherman Oaks" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>State/Province</label>
                                        <select class="form-control select">
                                            <option>California</option>
                                            <option>Alaska</option>
                                            <option>Alabama</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input class="form-control" value="91403" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" value="danielporter@example.com" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input class="form-control" value="818-978-7102" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input class="form-control" value="818-635-5579" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input class="form-control" value="818-978-7102" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Website Url</label>
                                        <input class="form-control" value="https://www.example.com" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
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