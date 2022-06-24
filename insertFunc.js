function InsertUserFunc() {
    var username = $('#username').val();
    var password = $('#password').val();
    var employeeId = $('#employeeId').val();
    var empFirstName = $('#empFirstName').val();
    var empLastName = $('#empLastName').val();
    var addBy = $('#addBy').val();
    var addDate = $('#addDate').val();
    var tempDate = new Date(addDate);
    var formattedDate = [tempDate.getMonth() + 1, tempDate.getDate(), tempDate.getFullYear()].join('/');
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
            postaddDate: formattedDate
        },
        success: function(data) {

        }
    })
    location.reload();
}