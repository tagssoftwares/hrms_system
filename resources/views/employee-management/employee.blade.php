@extends('layouts.admin-layout')
<style>
.form-focus .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #676767;
    font-size: 14px;
    font-weight: normal;
    line-height: 38px;
}
.form-focus .select2-container .select2-selection--single .select2-selection__rendered {
    padding-right: 30px;
    padding-left: 12px;
    padding-top: 10px;
}
</style>
@section('admin-content')
  <!-- Page Wrapper -->

            <!-- Page Content -->
            <div class="content container-fluid" id="msg">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Employee</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                <li class="breadcrumb-item active">Employee</li>
                            </ul>
                        </div>
                        <!-- <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i> Add Employee</a>
                            
                        </div> -->
                    </div>
                </div>
                <!-- /Page Header -->
                
                <!-- Search Filter -->
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">  
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Employee ID</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">  
                        <div class="form-group form-focus">
                            <input type="text" class="form-control floating">
                            <label class="focus-label">Employee Name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3"> 
                        <div class="form-group form-focus select-focus">
                            <select class="select floating" > 
                                <option >Select Role</option>
                                 @foreach ($rolename as $role)
                                <option value="{{$role->name}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">  
                        <a href="#" class="btn btn-success btn-block"> Search </a>  
                    </div>
                </div>
                <!-- Search Filter -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                      <th>Sr.No.</th>
                                        <th>Employee Name</th>
                                        <th>Employee ID</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1;  ?>
                                  @foreach ($employees as $employee)
                                    <tr>
                                      <td><?php echo $i;?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <!-- <a href="profile" class="avatar"><img alt="" src="img/profiles/avatar-09.jpg"></a> -->
                                                <a href="{{ url('/employee_edit_profile',['id' => $employee->id ]) }}">{{ $employee->name }} <span></span></a>
                                                
                                            </h2>
                                        </td>
                                        <td>{{ $employee->employeeID }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->role }}</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-purple"></i> New
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-purple"></i> New</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-info"></i> Pending</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{ url('/employee/edit',['id' => $employee->id ]) }}" data-id="{{ $employee->id }}" data-toggle="modal" data-target="#edit_employee_{{$employee->id}}"><i class="fa fa-pencil m-r-5" style="color:green"></i> Edit</a>

                                                    <a class="dropdown-item" href="{{ url('/employee_edit_profile',['id' => $employee->id ]) }}" class="empProfile" id="edit_employeeprofile_"><i class="fa fa-eye" style="color:blue"></i> &nbsp;View</a>

                                                    <a class="dropdown-item" href="{{ url('/employee_delete',['id' => $employee->id ]) }}" data-toggle="modal"  data-target="#delete_employee_{{$employee->id}}"><i class="fa fa-trash-o m-r-5" style="color:red"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                       <!-- <td>
                    <a href="{{ url('/employee_edit',['id' => $employee->id ]) }}" data-toggle="modal" data-target="#edit_employee_{{ $employee->id }}"><button type="button" data-id="{{ $employee->id }}" class="btn btn-warning  btn-sm"  value=""><i class="fa fa-pencil m-r-5"></i>Edit</button></a>
                    &nbsp; | &nbsp;
                    <a href="{{ url('/employee_edit',['id' => $employee->id ]) }}" data-toggle="modal" data-target="#edit_employee_{{ $employee->id }}"><button type="button" data-id="{{ $employee->id }}" class="btn btn-warning  btn-sm"  value=""><i class="fa fa-pencil m-r-5"></i>Edit</button></a>
                    &nbsp; | &nbsp;
                    <button type="button" id="" class="btn btn-danger btn-sm" data-toggle="modal" value="" data-target="#delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </td> -->
                                    </tr>
                                    <?php $i++;?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                

                
                <div class="row staff-grid-row">
                    <!-- <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                        <div class="profile-widget">
                          
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            
                        </div>
                    </div> -->
                           
                    
                <div id="add_employee" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Middel Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Last Name</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                            <input class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Password</label>
                                            <input class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Confirm Password</label>
                                            <input class="form-control" type="password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">  
                                        <div class="form-group">
                                            <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">  
                                        <div class="form-group">
                                            <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label class="control-label col-md-3">{{ trans('dob')}}</label>

                                    <div class="col-md-3">
                                        <div class="input-group input-medium date date-picker"
                                             data-date-format="dd-mm-yyyy"
                                             data-date-viewmode="years">
                                            <input type="text" class="form-control" name="date_of_birth" readonly
                                                   value="{{ old('date_of_birth')}}">
                                            <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i>
                                        </button>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">{{ trans('Gender')}}</label>

                                    <div class="col-md-9">
                                        {!! Form::select('gender', ['male' => __('male'), 'female' => __('female')], old('gender'),['class'=>'form-control']) !!}
                                    </div>
                                </div>
                              </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Mobile No. </label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Company</label>
                                            <select class="select">
                                                <option value="">Global Technologies</option>
                                                <option value="1">Delta Infotech</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Department <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select Department</option>
                                                <option>Web Development</option>
                                                <option>IT Management</option>
                                                <option>Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select Designation</option>
                                                <option>Web Designer</option>
                                                <option>Web Developer</option>
                                                <option>Android Developer</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- <div class="table-responsive m-t-15">
                                    <table class="table table-striped custom-table">
                                        <thead>
                                            <tr>
                                                <th>Module Permission</th>
                                                <th class="text-center">Read</th>
                                                <th class="text-center">Write</th>
                                                <th class="text-center">Create</th>
                                                <th class="text-center">Delete</th>
                                                <th class="text-center">Import</th>
                                                <th class="text-center">Export</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Holidays</td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Leaves</td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Clients</td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Projects</td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tasks</td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Chats</td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Assets</td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Timing Sheets</td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input checked="" type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> -->
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($employees as $employee)
            <div id="edit_employee_{{ $employee->id }}" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <div class="modal-body">
                            
                            <form class="form" method="POST" action="{{ url('/employee/update',['id' => $employee->id ]) }}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                            <input class="form-control" id="first_name" name="first_name" value="{{ $employee->first_name }}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Last Name</label>
                                            <input class="form-control" id="last_name" name="last_name" value="{{ $employee->last_name }}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                            <input class="form-control" id="username" name="" value="{{ $employee->email }}" type="email" readonly class="form-control floating">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                            <input class="form-control" id="email" name="" value="{{ $employee->email }}" type="email" readonly class="form-control floating">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Password</label>
                                            <input class="form-control" id="password" name="password" value="{{ $employee->password }}" type="password" readonly class="form-control floating">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Confirm Password</label>
                                            <input class="form-control" name="confirm_password" id="confirm_password" value="{{ $employee->confirm_password }}" type="password" readonly class="form-control floating">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">  
                                        <div class="form-group">
                                            <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                            <input type="text" value="{{ $employee->employeeID }}" name="employeeID" id="employeeID" readonly class="form-control floating">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">  
                                        <div class="form-group">
                                            <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Phone </label>
                                            <input class="form-control" value="9876543210" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Company</label>
                                            <select class="select">
                                                <option>Global Technologies</option>
                                                <option>Delta Infotech</option>
                                                <option selected>International Software Inc</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Department <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select Department</option>
                                                <option>Web Development</option>
                                                <option>IT Management</option>
                                                <option>Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select Designation</option>
                                                <option>Web Designer</option>
                                                <option>Web Developer</option>
                                                <option>Android Developer</option>
                                            </select>
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
            @endforeach
            <!-- /Edit Employee Modal -->
            
            <!-- Delete Employee Modal -->
            @foreach($employees as $employee)
            <div id="delete_employee_{{ $employee->id }}" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Employee</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{ url('/employee_delete',['id' => $employee->id ]) }}" data-id="{{ $employee->id }}" id="deleteRecord" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            <!-- /Delete Employee Modal -->
            
        </div>

        
        <!-- /Page Wrapper -->
 <!-- jQuery -->
 

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

    <script>
     $(document).ready(function(){

    



        // Read value on page load
        $("#result b").html($("#customRange").val());

        // Read value on change
        $("#customRange").change(function(){
            $("#result b").html($(this).val());
        });
    });        
    $(".header").stick_in_parent({
      
    });
    // This is for the sticky sidebar    
    $(".stickyside").stick_in_parent({
      offset_top: 60
    });
    $('.stickyside a').click(function() {
      $('html, body').animate({
        scrollTop: $($(this).attr('href')).offset().top - 60
      }, 500);
      return false;
    });
    // This is auto select left sidebar
    // Cache selectors
    // Cache selectors
    var lastId,
      topMenu = $(".stickyside"),
      topMenuHeight = topMenu.outerHeight(),
      // All list items
      menuItems = topMenu.find("a"),
      // Anchors corresponding to menu items
      scrollItems = menuItems.map(function() {
        var item = $($(this).attr("href"));
        if (item.length) {
          return item;
        }
      });

    // Bind click handler to menu items


    // Bind to scroll
    $(window).scroll(function() {
      // Get container scroll position
      var fromTop = $(this).scrollTop() + topMenuHeight - 250;

      // Get id of current scroll item
      var cur = scrollItems.map(function() {
        if ($(this).offset().top < fromTop)
          return this;
      });
      // Get the id of the current element
      cur = cur[cur.length - 1];
      var id = cur && cur.length ? cur[0].id : "";

      if (lastId !== id) {
        lastId = id;
        // Set/remove active class
        menuItems
          .removeClass("active")
          .filter("[href='#" + id + "']").addClass("active");
      }
    });
    $(function () {
      $(document).on("click", '.btn-add-row', function () {
        var id = $(this).closest("table.table-review").attr('id');  // Id of particular table
        console.log(id);
        var div = $("<tr />");
        div.html(GetDynamicTextBox(id));
        $("#"+id+"_tbody").append(div);
      });
      $(document).on("click", "#comments_remove", function () {
        $(this).closest("tr").prev().find('td:last-child').html('<button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button>');
        $(this).closest("tr").remove();
      });
      function GetDynamicTextBox(table_id) {
        $('#comments_remove').remove();
        var rowsLength = document.getElementById(table_id).getElementsByTagName("tbody")[0].getElementsByTagName("tr").length+1;
        return '<td>'+rowsLength+'</td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' + '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="fa fa-trash-o"></i></button></td>'
      }
    });
    </script>
  
  

  
<script type="text/javascript">

        $(document).ready(function(){
          $("body").on("click","#deleteRecord",function(e){
            e.preventDefault();
            /*var inputData = $('#deleteEmp').serialize(); 
             var dataId = $(this).attr('data-id');*/
             //var id = $(this).data("id");
             var id = $(this).data('id');
             console.log(id);
             var token = $("meta[name='csrf-token']").attr("content");
             console.log(token);
           // 
            //var vid = $( "#edit_employeeprofile_" ).val();

            /**/
            //var id =($(this).attr("id"));
            $.ajax({
                 url: "/employee_delete/"+id,
                 type: 'POST',
                 data: {
                    _token: token,
                    id: id
        },
        //dataType: 'json',

        success: function(response){
            console.log(response);
            alert(response);
                //url:  '{{ url('/employee_delete') }}' + '/' + dataId,
               //url: "/employee_delete/",
               /*method:'POST',
               data : inputData,*/
              // dataType: 'json',
               //data:{id:$("#delete_employee_").val()}, 
               
               /*success:function(data) {
                alert(data);
                 console.log(data);*/
                  //$("#msg").html(data);
               }
            });
            return false;
          });
        });
         
</script>

         
    
    
    @endsection