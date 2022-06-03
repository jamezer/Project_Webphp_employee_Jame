function InsertUserFunc() {
    var username = $('#username').val();
    var password = $('#password').val();
    var employeeId = $('#employeeId').val();
    var empFirstName = $('#empFirstName').val();
    var empLastName = $('#empLastName').val();
    var addBy = $('#addBy').val();
    var addDate = $('#addDate').val();
    console.log(addDate);

    if ($("input[id='IsnotAdmin']:checked").val()) {
        var isAdmin = '0';
    } else {
        var isAdmin = '1';
    }

    $.ajax({
        url: 'backend/insertDel.php',
        type: 'post',
        data: {
            postusername: username,
            postpassword: password,
            postemployeeId: employeeId,
            postempFirstName: empFirstName,
            postempLastName: empLastName,
            postisAdmin: isAdmin,
            postaddBy: addBy,
            postaddDate: addDate
        },
        success: function(data) {
            // location.reload();
        }
    })
}