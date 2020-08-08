@extends('layouts.login-layout')
@section('login-content')

<div class="account-content">
				<a href="{{ url('login-admin') }}" class="btn btn-primary admin-btn">Manager</a>
				<a href="" class="btn btn-primary apply-btn">Apply Job</a>
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index"><img src="assets/img/tag_logo.png" alt="Tags Softwares"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>
							@if(Session::has('flash_message_error'))
			                <div class="alert alert-sm alert-danger" role="alert">
			                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                        <span aria-hidden="true">&times;</span>
			                    </button>
			                    <strong>{!!session('flash_message_error')  !!}</strong>
			                </div>
			                @endif

			                @if(Session::has('flash_message_success'))
			                <div class="alert alert-sm alert-success alert-block" role="alert">
			                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                        <span aria-hidden="true">&times;</span>
			                    </button>
			                    <strong>{!! session('flash_message_success') !!}</strong>
			                </div>
			                @endif
							<!-- Account Form -->
							<form action="javascript:void(0)" id="login-form" name="login-form">
								<!-- {!! Form::open(array('url' => '', 'class' =>'login-form')) !!} -->
								<!-- @if ($errors->any())
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
								@endif -->

		
								<div class="form-group">
									<label>Email</label>
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
									<button class="btn btn-primary account-btn" type="submit" id="submitbutton" name="submitbutton">Login</button>
								</div>
								<div class="account-footer">
									<p>Don't have an account yet? <a href="register">Register</a></p>
								</div>

								<!-- {!! Form::close() !!} -->
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
            </div>
            
@endsection

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript">
	
 var baseUrl = '{{ URL::to('/') }}';
$(document).ready(function(){
$('#submitbutton').click(function(e){
   e.preventDefault();
   
   /*Ajax Request Header setup*/
   $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
   
   /* Submit form data using ajax*/
   $.ajax({
      url: "{{ url('employee-dashboard') }}",
      method: 'post',
      data: $('#login-form').serialize(),
      success: function(response){
         //------------------------
         	
            /*$('#submitbutton').html('Submit');
            //$('#res_message').show();
            $('#res_message').html(response.msg);*/
            //$('#msg_div').removeClass('d-none');

            if(response == 1)
            {
            	window.location.replace(baseUrl+"/emp_dashboard/");
            }
            else
            {
            	alert(response);
            	//window.location.replace(baseUrl+"/");
            }

            //
      }
      
  });
});
});
</script>