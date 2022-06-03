<!DOCTYPE html>
<html lang="en">
<?php header('Access-Control-Allow-Origin: *');?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="getdata.js"></script>
    <script src="edituser.js"></script>
    <script src="insertFunc.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- ---------------------------------------------Modal---------------------------------------------------- -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
        type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"
        type="text/javascript"></script>

    <!-- ---------------------------------------------DataTable---------------------------------------------------- -->
    <script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
</head>
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
    color: #ffffcc;
}
</style>
<header>
    <nav class="navbar">
        <ul class="menu">
            <li class="menu-item" type="button">Home</li>
            <li class="menu-item" type="button">User Management</li>
            <li class="menu-item" type="button">Login</li>
        </ul>
    </nav>
</header>

<body>
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
            <!-- <button id="btnadduser" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add User</button> -->
            <!-- <a href="adduser.php"><button type="button" data-toggle="collapse" data-target="#demo" class="btn btn-warning">Add User</button></a> -->
            <a><button type="button" data-toggle="collapse" data-target="#demo" class="btn btn-warning">Add
                    User</button></a>
        </div>
        <div class="col-md-1" style="display: inline-block;">
            <button type="button" id="Searchbtn" onclick="SearchData()"
                class="form-control btn btn-warning">Search</button>
        </div>
        <!-- --------------------------------------- card collapse-card Add user ------------------------------------------ -->

        <div style="margin-left: 50px;" id="demo" class="collapse">
            <form action="insert.php" method="post">
                <div class="row" style="margin-top: 10px;">
                    <label for=""></label>
                    Username : <input type="text" id="username" name="userName" style="margin-left: 20px;"
                        class="form-control col-md-4" placeholder="Username">
                </div>
                <div class="row" style="margin-top: 10px;">
                    Password : <input type="text" id="password" name="passWord" style="margin-left: 25px;"
                        class="form-control col-md-4" placeholder="Password">
                </div>
                <div class="row" style="margin-top: 10px;">
                    EmployeeID : <input type="text" id="employeeId" name="empID" style="margin-left: 7px;" class="form-control col-md-4"
                        placeholder="EmployeeID">
                </div>
                <div class="row" style="margin-top: 10px;">
                    First Name : <input type="text" id="empFirstName" name="empName" style="margin-left: 15px;"
                        class="form-control col-md-4" placeholder="First name">
                </div>
                <div class="row" style="margin-top: 10px;">
                    Last Name : <input type="text" id="empLastName" name="LName" style="margin-left: 17px;" class="form-control col-md-4"
                        placeholder="Last Name">
                </div>
                <div class="row" style="margin-top: 10px;">
                    Add By : <input type="text" id="addBy" name="addBy" style="margin-left: 40px;" class="form-control col-md-4"
                        placeholder="Add By">
                </div>
                <div class="row" style="margin-top: 10px;">
                    Date : <input type="date" id="addDate" name="date" style="margin-left: 57px;" class="form-control col-md-4"
                        placeholder="Date">
                </div>
                <br>
                <div class="row col-md-4" style="margin-left: 400px;">
                    <!-- <input type="submit" value="Submit" class="btn btn-primary" onclick="InsertUserFunc()"> -->
                    <button type="button" class="btn btn-primary" onclick="InsertUserFunc()">Submit</button>
                </div>
            </form>
        </div>
        <!-- --------------------------------------- / card collapse-card Add user ------------------------------------------ -->
        <!-- --------------------------------------- card collapse-card Edit ------------------------------------------ -->
        <div style="margin-left: 50px;" id="edtdemo" class="collapse">
            <div class="row" style="margin-top: 10px;">
                EmployeeID : <input type="text" id="edtempID" style="margin-left: 7px;" class="form-control col-md-4"
                    placeholder="EmployeeID">
            </div>
            <div class="row" style="margin-top: 10px;">
                First Name : <input type="text" id="edtempName" style="margin-left: 15px;" class="form-control col-md-4"
                    placeholder="First name">
            </div>
            <div class="row" style="margin-top: 10px;">
                Last Name : <input type="text" id="edtLName" style="margin-left: 17px;" class="form-control col-md-4"
                    placeholder="Last Name">
            </div>
            <div class="row" style="margin-top: 10px;">
                Is Admin : <input type="text" id="edtisadmin" style="margin-left: 30px;" class="form-control col-md-4"
                    placeholder="Is Admin">
            </div>
            <div class="row" style="margin-top: 10px;">
                Add By : <input type="text" id="edtaddBy" style="margin-left: 40px;" class="form-control col-md-4"
                    placeholder="Add By">
            </div>
            <div class="row" style="margin-top: 10px;">
                Date : <input type="date" id="edtdate" style="margin-left: 57px;" class="form-control col-md-4">
            </div>
            <br>
            <div class="row col-md-4" style="margin-left: 400px;">
                <!-- <input type="submit" value="Submit" class="btn btn-primary"> -->
                <button type="button" class="btn btn-primary" id="empUpdatebtn" onclick="edtUserFunc()">Submit</button>
            </div>
        </div>
        <!-- ---------------------------------------/ card collapse-card Edit ------------------------------------------ -->
    </div>
    <br>
    <!--------------------------------- Display Editter --------------------------------------------------->
    <br>
    <div id="Edtdisplay" class="container" style="display: none;">
        <p>Edit User</p>

    </div>

    <!--------------------------------- Modal Editter ----------------------------------------------------->
    <div id="Modal" class="modal" role="dialog" style="display: none" ;>
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------- Modal Add User ----------------------------------------------------->

    <!-- <div id="ModalAddUser" class="modal fade" role="dialog">
  		<div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
			  <h4 class="modal-title">Add User</h4>
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			  </div>
			  <div class="modal-body">
                <form action="insert.php" method="post">
                <div class="row">
			  		Username : <input type="text" name="userName" style="" class="form-control col-md-6" placeholder="Username">
			  	</div>
                  <div class="row">
			  		Password : <input type="text" name="passWord" style="" class="form-control col-md-6" placeholder="Password">
			  	</div>
			  	<div class="row">
			  		EmployeeID : <input type="text" name="empID" style="" class="form-control col-md-6" placeholder="EmployeeID">
			  	</div>
			  	<div class="row">
			  		First Name : <input type="text" name="empName" style="" class="form-control col-md-6" placeholder="First name">
			  	</div>
			  	<div class="row">
			  		Last Name : <input type="text" name="LName" style="" class="form-control col-md-6" placeholder="Last Name">
			  	</div>
			  	<div class="row">
			  		Add By : <input type="text" name="addBy" style="" class="form-control col-md-6" placeholder="Add By">
			  	</div>
			  	<div class="row">
			  		Date : <input type="date" name="date" style="" class="form-control col-md-6" placeholder="Date">
			  	</div>
                  <input type="submit" value="Submit" class="btn btn-successs">
                </form>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		</div>
	</div> -->
    <br>
    <div style="display:block">
        <table id="tableId" style="width:100%" class="table">
            <!-- <thead class="thead-dark"> -->
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
            <?php
        // require_once('dbconnect.php');
        // $sql = "SELECT * FROM EMPLOYEE";
        // $result = mysqli_query($conn, $sql);
        // $numrows = mysqli_num_rows($result);
        // while ($row = mysqli_fetch_assoc($result)) {
        //     $empID = $row['EMPLOYEE_ID'];
        //     $empName = $row['FIRST_NAME'];
        //     $LName = $row['LAST_NAME'];
        //     $Isadmin = $row['ISADMIN'];
        //     $AddBy = $row['ADD_BY'];
        //     $AddDate = $row['ADD_DATE'];
        //     echo "<tr>
        //     <td>$empID</td>
        //     <td>$empName</td>
        //     <td>$LName</td>
        //     <td>$Isadmin</td>
        //     <td>$AddBy</td>
        //     <td>$AddDate</td>
        //     <td><div class='btn-group' role='group' aria-label='Basic example'>
        //     <a id='btnEdit' class='btn btn-sm btn-warning' onclick='edtFunc($empID)'><span class='glyphicon glyphicon-edit'></span> Edit</a>
        //     <a class='btn btn-sm btn-danger' id='deleteData' onclick='delFunc($empID)'><span class='glyphicon glyphicon-info-sign'></span> Delete</a>
        //     </div></td>
        //     </tr>";
        // }
        // mysqli_free_result($result);
        // mysqli_close($conn);
?>
        </table>
    </div>

</body>
<script>
$(document).ready(function() {
    $('#tableId').DataTable();

    $('.date').datepicker({
        language: 'th-th',
        format: 'dd MM yyyy',
    });

    // $('#myModal').on('shown.bs.modal', function() {
    //     $('#myInput').trigger('focus')
    // })
    SearchData();
    
});

// $('#btnEdit').on( "click", function() {
//     console.log('display');
//     $('#Edtdisplay').css('display', 'block');
// });

// $('#btnadduser').on( "click", function() {
// 	   $('#ModalAddUser').modal('show');
// });
</script>

</html>