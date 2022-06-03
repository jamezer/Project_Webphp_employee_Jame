function edtUserFunc() {
    var edtempID = $('#edtempID').val();
    var edtempName = $('#edtempName').val();
    var edtLName = $('#edtLName').val();
    var edtisadmin = $('#edtisadmin').val();
    var edtaddBy = $('#edtaddBy').val();
    var edtdate = $('#edtdate').val();
    console.log("edtdate" + edtdate);

    $.ajax({
        url: 'backend/insertDel.php',
        // url: 'http://localhost:8080/EmployeeUpdate',
        type: 'post',
        data: {
            postedtempID: edtempID,
            postedtempName: edtempName,
            postedtLName: edtLName,
            postedtisadmin: edtisadmin,
            postedtaddBy: edtaddBy,
            postedtdate: edtdate
        },
        success: function(data) {
            // location.reload();
        }
    })
}