<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="modal-body">
        <form action="insert.php" method="post">
            <div class="row" style="margin-top: 10px;">
                <label for=""></label>
                Username : <input type="text" name="userName" style="margin-left: 20px;" class="form-control col-md-4"
                    placeholder="Username">
            </div>
            <div class="row" style="margin-top: 10px;">
                Password : <input type="text" name="passWord" style="margin-left: 25px;" class="form-control col-md-4"
                    placeholder="Password">
            </div>
            <div class="row" style="margin-top: 10px;">
                EmployeeID : <input type="text" name="empID" style="margin-left: 7px;" class="form-control col-md-4"
                    placeholder="EmployeeID">
            </div>
            <div class="row" style="margin-top: 10px;">
                First Name : <input type="text" name="empName" style="margin-left: 15px;" class="form-control col-md-4"
                    placeholder="First name">
            </div>
            <div class="row" style="margin-top: 10px;">
                Last Name : <input type="text" name="LName" style="margin-left: 17px;" class="form-control col-md-4"
                    placeholder="Last Name">
            </div>
            <div class="row" style="margin-top: 10px;">
                Add By : <input type="text" name="addBy" style="margin-left: 40px;" class="form-control col-md-4" placeholder="Add By">
            </div>
            <div class="row" style="margin-top: 10px;">
                Date : <input type="date" name="date" style="margin-left: 57px;" class="form-control col-md-4" placeholder="Date">
            </div>
            <br>
            <div class="row col-md-4" style="margin-left: 400px;">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
    <p><a href="index.php" target=""><button class="btn btn-warning">Back</button></a></p>
</body>

</html>