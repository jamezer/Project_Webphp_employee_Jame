function CheckLogin() {
    var Logusername = $('#Logusername').val();
    var Logpassword = $('#Logpassword').val();

    var dataSet = [];

    $.ajax({
        url: 'backend/checkLogin.php',
        type: 'post',
        dataType: "json",
        data: {
            postLogusername: Logusername,
            postLogpassword: Logpassword
        },
        success: function(data) {
            if (data.status == "LoginSuccess00") {
                window.location.href = "http://localhost/Project_Employee/usermangement.php";
            } else {
                $('#alertinfo').css('display', 'block');
            }
        }
    })
}

function LoginFunc() {
    // console.log(empData);
    $.ajax({
        url: 'backend/getResponseLogin.php',
        headers: {
            "accept": "application/json",
            "Access-Control-Allow-Origin": "*"
        },
        crossDomain: true,
        type: 'post',
        dataType: 'json',
        data: {},
        success: function(data) {
            dataSet = data;
            console.log('data teesty');
            // var empdata = dataSet.emplist[empData];
            // $('#edtempID').val(empdata['employeeID']);
            // $('#edtempName').val(empdata['firstName']);
            // $('#edtLName').val(empdata['lastName']);
            // $('#edtisadmin').val(empdata['issAdmin']);
            // $('#edtaddBy').val(empdata['addBy']);
            // $('#edtdate').val(empdata['addDate']);

            // console.log("Date = " + empdata['addDate']);
            // console.log(empdata);
        }
    })
}