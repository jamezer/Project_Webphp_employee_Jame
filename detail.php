
<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="soadtheme/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="soadtheme/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="soadtheme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="soadtheme/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="soadtheme/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="soadtheme/plugins/raphael/raphael.min.js"></script>
<script src="soadtheme/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="soadtheme/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS 
<script src="soadtheme/plugins/chart.js/Chart.min.js"></script>-->

<!-- AdminLTE for demo purposes -->
<script src="soadtheme/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->

<script src="soadtheme/js/index.js"></script>
<script src="./getdata.js" type='text/javascript'></script>

<script type="text/javascript" src="soadtheme/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="soadtheme/datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script src="soadtheme/plugins/bootstrap/js/bootstrap-autocomplete.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="soadtheme/dist/jquery-3.6.0.min.js"></script>

<script type="text/javascript" src="js/actionjs/login.js"></script>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="soadtheme/plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="soadtheme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="soadtheme/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="soadtheme/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="soadtheme/dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="soadtheme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- summernote -->
<link rel="stylesheet" href="soadtheme/plugins/summernote/summernote-bs4.min.css">
<!-- Tempusdominus Bootstrap 4 
<link rel="stylesheet" href="soadtheme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>

<head >
<style>
	header {
		align-items: left;
		background-color: #3A3838;
		display: flex;
		height: 75px;
		justify-content: left;
		transition: background 0.3s ease;
	
		&.modal-open {
			background-color: #ffffff;
		}
	}
	
	.menu {
		align-items: center;
		display: flex;
		justify-content: center;
		list-style: none;
	}
	
	.menu-item {
		margin-right: 25px;
	}
</style>
</head>
<body>
	<header>
	<nav class="navbar">
		<ul class="menu">
			<li class="menu-item" type="button" style="text-color=FFFFFF">Home</li>
			<li class="menu-item" type="button">User Management</li>
			<li class="menu-item" type="button">Login</li>
		</ul>
	</nav>
</header>
<br>
	<div class="col-md-12" style="display: inline-block;">
		<div class="col-md-2" style="display: inline-block;">
			<input type="text" id="empId" class="form-control" placeholder="Employee ID">
		</div>
		<div class="col-md-3" style="display: inline-block;">
			<input type="text" id="empName" class="form-control" placeholder="First name">
		</div>
		<div class="col-md-2" style="display: inline-block;">
			<input type="text" id="empLname" class="form-control" placeholder="Last name">
		</div>
		<div class="col-md-2" style="display: inline-block;">
			isAdmin
			<input type="radio" id="IsnotAdmin" name="CheckAdmin"> N
			<input type="radio" id="IsAdmin" name="CheckAdmin"> Y
		</div>
		<div class="col-md-1" style="display: inline-block;">
			<button id="btnadduser" type="button" class="form-control btn btn-warning">Add User</button>
		</div>
		<div class="col-md-1" style="display: inline-block;">
			<button type="button" id="Searchbtn" class="form-control btn btn-warning">Search</button>
		</div>
	</div>
	
	<div class="row" th:fragment="contentPage">
	<br>
	<br>
		<div class="container">
	
			<table id="table_id" class="table display" style="width:100%">
			  <thead>
			    <tr>
			      <th>EmployeeID</th>
			      <th>First Name</th>
			      <th>Last Name</th>
			      <th>IsAdmin</th>
			      <th>Add By</th>
			      <th>Add Date</th>
			      <th>Button</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td></td>
			      <td>
					<div class="btn-group" role="group" aria-label="Basic example">
			        <a id="btnEdit" class="btn btn-sm btn-warning" href="#Modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
			        <a class="btn btn-sm btn-danger" href=""><span class="glyphicon glyphicon-info-sign"></span> Delete</a>
					</div>
			      </td>
			    </tr>
			  </tbody>
			</table>
			</div>
	</div>
	<!--------------------------------- Modal Editter ----------------------------------------------------->
	<div id="Modal" class="modal fade" role="dialog">
  		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			  <h4 class="modal-title">Edit Data</h4>
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
			    <p>Some text in the modal.</p>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		</div>
	</div>
	
	<!--------------------------------- Modal Add User ----------------------------------------------------->
	<div id="ModalAddUser" class="modal fade" role="dialog">
  		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
			  <h4 class="modal-title">Add User</h4>
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
			  	<div class="row">
			  		EmployeeID : <input type="text" style="" class="form-control col-md-6" placeholder="EmployeeID">
			  	</div>
			  	<div class="row">
			  		First Name : <input type="text" style="" class="form-control col-md-6" placeholder="First name">
			  	</div>
			  	<div class="row">
			  		Last Name : <input type="text" style="" class="form-control col-md-6" placeholder="Last Name">
			  	</div>
			  	<div class="row">
			  		Add By : <input type="text" style="" class="form-control col-md-6" placeholder="Add By">
			  	</div>
			  	<div class="row">
			  		Date : <input type="date" style="" class="form-control col-md-6" placeholder="Date">
			  	</div>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		</div>
	</div>
	<!-- <div th:replace="fragment/content.html :: contentPage"></div> -->
</body> 
<script>
var data = [{
	  "EmployeeID": "000001",
	  "First Name": "Watcharin",
	  "last Name": "Burdok",
	  "IsAdmin": "1",
	  "Add By": "Watcharin",
	  "Add Date": "2022-05-06",
	  "button": ""
	},{
		"EmployeeID": "000002",
		  "First Name": "James",
		  "last Name": "Zer",
		  "IsAdmin": "0",
		  "Add By": "Watcharin",
		  "Add Date": "2022-05-08",
		  "button": ""
	}];
	
	$(document).ready(function () {
		var cols = [];
		  
		  var exampleRecord = data[0];
		  
		  //get keys in object. This will only work if your statement remains true that all objects have identical keys
		  var keys = Object.keys(exampleRecord);
		  
		  //for each key, add a column definition
		  keys.forEach(function(k) {
		    cols.push({
		      title: k,
		      data: k
		      //optionally do some type detection here for render function
		    });
		  });
		  
		  //initialize DataTables
		  var table = $('#table_id').DataTable({
		    columns: cols
		  });
		  
		  //add data and draw
		  table.rows.add(data).draw();
	});	
</script>
<script type="text/javascript">
	
	$('a[href$="#Modal').on( "click", function() {
		   $('#Modal').modal('show');
	});
	
	$('#btnadduser').on( "click", function() {
		   $('#ModalAddUser').modal('show');
	});

    $("#Searchbtn").click(function() {
    // alert( "Handler for .click() called." );
    var EmpId = $('#empId').val();
    var EmpName = $('#empName').val();
    var EmpLname = $('#empLname').val();

		console.log(EmpId,EmpName,EmpLname);
    $.ajax({
        url: "/backend/getDetail.php"
        type: "post",
        dataType: "json",
        data: {
            postEmpId: EmpId
        },
        success: function(data) {
			var dataset = [];

			var row = [

			];
			dataset.push(row);


        },
        
    }).fail(function() {});
  });
</script>


<!-- ./wrapper -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

</html>