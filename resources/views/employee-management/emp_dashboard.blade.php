@extends('layouts.admin-layout')
@section('admin-content')
<div class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome-box">
                            <div class="welcome-img">
                                <img alt="" src="img/profiles/avatar-02.jpg">
                            </div>
                            <div class="welcome-det">
                                <h3>Welcome, Employee</h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <section class="dash-section">
                            <h1 class="dash-sec-title">Today</h1>
                            <div class="dash-sec-content">
                                <div class="dash-info-list">
                                    <a href="#" class="dash-card text-danger">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon">
                                                <i class="fa fa-hourglass-o"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <p></p>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <div class="e-avatar"><img src="img/profiles/avatar-09.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="dash-info-list">
                                    <a href="#" class="dash-card">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon">
                                                <i class="fa fa-suitcase"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <p></p>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <div class="e-avatar"><img src="img/profiles/avatar-02.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="dash-info-list">
                                    <a href="#" class="dash-card">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon">
                                                <i class="fa fa-building-o"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <p></p>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <div class="e-avatar"><img src="img/profiles/avatar-02.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </section>

                        <section class="dash-section">
                            <h1 class="dash-sec-title">Tomorrow</h1>
                            <div class="dash-sec-content">
                                <div class="dash-info-list">
                                    <div class="dash-card">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon">
                                                <i class="fa fa-suitcase"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <p>2 people will be away tomorrow</p>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <a href="#" class="e-avatar"><img src="img/profiles/avatar-04.jpg" alt=""></a>
                                                <a href="#" class="e-avatar"><img src="img/profiles/avatar-08.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="dash-section">
                            <h1 class="dash-sec-title">Next seven days</h1>
                            <div class="dash-sec-content">
                                <div class="dash-info-list">
                                    <div class="dash-card">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon">
                                                <i class="fa fa-suitcase"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <p>2 people are going to be away</p>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <a href="#" class="e-avatar"><img src="img/profiles/avatar-05.jpg" alt=""></a>
                                                <a href="#" class="e-avatar"><img src="img/profiles/avatar-07.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash-info-list">
                                    <div class="dash-card">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon">
                                                <i class="fa fa-user-plus"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <p>Your first day is going to be  on Thursday</p>
                                            </div>
                                            <div class="dash-card-avatars">
                                                <div class="e-avatar"><img src="img/profiles/avatar-02.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dash-info-list">
                                    <a href="" class="dash-card">
                                        <div class="dash-card-container">
                                            <div class="dash-card-icon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <div class="dash-card-content">
                                                <p>It's Spring Bank Holiday  on Monday</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="dash-sidebar">
                            <section>
                                <h5 class="dash-title">Projects</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="time-list">
                                            <div class="dash-stats-list">
                                                <h4>71</h4>
                                                <p>Total Tasks</p>
                                            </div>
                                            <div class="dash-stats-list">
                                                <h4>14</h4>
                                                <p>Pending Tasks</p>
                                            </div>
                                        </div>
                                        <div class="request-btn">
                                            <div class="dash-stats-list">
                                                <h4>2</h4>
                                                <p>Total Projects</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <h5 class="dash-title">Your Leave</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="time-list">
                                            <div class="dash-stats-list">
                                                <h4>4.5</h4>
                                                <p>Leave Taken</p>
                                            </div>
                                            <div class="dash-stats-list">
                                                <h4>12</h4>
                                                <p>Remaining</p>
                                            </div>
                                        </div>
                                        <div class="request-btn">
                                            <a class="btn btn-primary" href="#">Apply Leave</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <h5 class="dash-title">Your time off allowance</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="time-list">
                                            <div class="dash-stats-list">
                                                <h4>5.0 Hours</h4>
                                                <p>Approved</p>
                                            </div>
                                            <div class="dash-stats-list">
                                                <h4>15 Hours</h4>
                                                <p>Remaining</p>
                                            </div>
                                        </div>
                                        <div class="request-btn">
                                            <a class="btn btn-primary" href="#">Apply Time Off</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <h5 class="dash-title">Upcoming Holiday</h5>
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h4 class="holiday-title mb-0">Mon 20 May 2019 - Ramzan</h4>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>
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
	<script src="http://localhost/hrms_system/assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="http://localhost/hrms_system/assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
		<script src="http://localhost/hrms_system/assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="http://localhost/hrms_system/assets/plugins/morris/morris.min.js"></script>
		<script src="http://localhost/hrms_system/assets/plugins/raphael/raphael.min.js"></script>
		<script src="http://localhost/hrms_system/assets/js/chart.js"></script>
		
		<!-- Custom JS -->
		<script src="http://localhost/hrms_system/assets/js/app.js"></script>
@endsection