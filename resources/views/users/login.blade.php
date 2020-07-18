@extends('layouts.login-layout')
@section('login-content')

<div class="account-content">
				<a href="job-list" class="btn btn-primary apply-btn">Apply Job</a>
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index"><img src="assets/img/logo2.png" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>
							
							<!-- Account Form -->
							<!-- <form action="javascript:void(0)" id="login-form" name="login-form"> -->
								{!! Form::open(array('url' => '', 'class' =>'login-form')) !!}
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="email" name="email" id="email">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="forgot-password.html">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" name="password" id="password">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit" id="submitbutton" name="submitbutton" onclick="login(); return false;">Login</button>
								</div>
								<div class="account-footer">
									<p>Don't have an account yet? <a href="register">Register</a></p>
								</div>
								{!! Form::close() !!}
							<!-- </form> -->
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
            </div>
            
@endsection

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
<script type="text/javascript">
	var baseUrl = '{{ URL::to('/') }}';
	function login() {
         $.ajax({
             //url: "{ url('admin_login') !!}",
             url: baseUrl+'/admin_login',
             type: "POST",
             data: $(".login-form").serialize(),
             container: ".login-form",
             messagePosition: "inline"
         });
     }
 /*var baseUrl = '{{ URL::to('/') }}';
$(document).ready(function(){
$('#submitbutton').click(function(e){
   e.preventDefault();
   
   Ajax Request Header setup
   $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });*/

   //$('#sign_up').html('');
   
   /* Submit form data using ajax*/
   /*$.ajax({
      url: "{{ url('admin_login') }}",
      method: 'post',
      data: $('#login-form').serialize(),
      success: function(response){
         //------------------------
         
            $('#submitbutton').html('Submit');
            //$('#res_message').show();
            $('#res_message').html(response.msg);
            //$('#msg_div').removeClass('d-none');
            window.location.replace(baseUrl+"/dashboard");
           
*/
            // document.getElementById("login_form").reset(); 
            // setTimeout(function(){
            // $('#res_message').hide();
            // $('#msg_div').hide();
            // },10000);
         //--------------------------
      //}
      // errors: function (response) {
      //           console.log(response);
      // });
      
   //});
//});
//});
</script>