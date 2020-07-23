@extends('layouts.admin-layout')

@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new employee</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" id="regForm" name="regForm" action="javascript:void(0)" enctype="multipart/form-data">
                

                        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <span class="fa fa-user"></span>
          </span>                    
        </div>
        
        <input type="text" name="name" id="name" class="form-control" placeholder="First Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>

         
      </div>
        </div>

        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-paper-plane"></i>
          </span>                    
        </div>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
               <span class="text-danger">{{ $errors->first('email') }}</span>

      </div>
        </div>

                        <!-- <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        <!-- <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        <!-- <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                            <label for="middlename" class="col-md-4 control-label">Middle Name</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}" required>

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        <!-- <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <select class="form-control js-country" name="country_id">
                                    <option value="-1">Please select your country</option>
                                    
                                </select>
                            </div>
                        </div> -->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-6">
                                <select class="form-control js-states" name="state_id">
                                    <option value="-1">Please select your state</option>
                                    {{--  @foreach ($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach  --}}
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group">

            <i class="fa fa-paper-plane"></i>
          
                            <label class="col-md-4 control-label">Roles</label>
                            <div class="col-md-6">
                                <select class="form-control js-cities" name="role">
                                    <option value="-1">Please select your Role</option>
                                    
                                        <option value=""></option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="fa fa-lock"></i>
          </span>                    
        </div>
        <input type="password" name="password" id="password" class="form-control" placeholder="password">
                <span class="text-danger">{{ $errors->first('password') }}</span>

      </div>
        </div>

                        <!-- <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Zip</label>

                            <div class="col-md-6">
                                <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" required>

                                
                            </div>
                        </div> -->
                        <!-- <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-4 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control" name="age" value="{{ old('age') }}" required>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        
                          
                        <!-- <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Department</label>
                            <div class="col-md-6">
                                <select class="form-control" name="department_id">
                                    
                                </select>
                                 @if ($errors->has('department_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        
                        <!-- <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Picture</label>
                            <div class="col-md-6">
                                <input type="file" id="picture" name="picture" required >
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
            <button type="submit" id="sign_up" class="btn btn-primary btn-lg">Create</button>
        </div>
    </div>
                        <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script>
//-----------------
var baseUrl = '{{ URL::to('/') }}';

$(document).ready(function(){
$('#sign_up').click(function(e){
   e.preventDefault();
   /*Ajax Request Header setup*/
   $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

   //$('#sign_up').html('');
   
   /* Submit form data using ajax*/
   $.ajax({
      url: "{{ url('users_register') }}",
      method: 'post',
      data: $('#regForm').serialize(),
      success: function(response){
              $('#sign_up').html('Submit');

              if(response.status){
              $('#res_message').html(response.msg);
              $('#msg_div').removeClass('alert-danger');
              $('#msg_div').addClass('alert-success');
              $('#msg_div').show();
              $('#res_message').show();
              window.location.replace(baseUrl+"/");
          }else{
              $('#res_message').html(response.msg);
              $('#msg_div').removeClass('alert-success');
              $('#msg_div').addClass('alert-danger');
              $('#msg_div').show();
              $('#res_message').show();
          }
         //------------------------
            
            // $('#res_message').show();
            // $('#res_message').html(response.msg);
            // $('#msg_div').removeClass('d-none');

            document.getElementById("regForm").reset(); 
            setTimeout(function(){
            $('#res_message').hide();
            $('#msg_div').hide();
            },10000);
         //--------------------------
      }
      // error: function(response){
      //   $('#res_message').show();
      //       $( '#res_message').html(response.msg);
      //       $('#msg_div').removeClass('d-none');
      // }
    });
      
   });
});
//-----------------
</script> 
