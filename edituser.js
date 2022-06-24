function edtUserFunc() {
    var edtempID = $('#edtempID').val();
    var edtempName = $('#edtempName').val();
    var edtLName = $('#edtLName').val();
    var edtisadmin = $('#edtisadmin').val();
    var edtaddBy = $('#edtaddBy').val();
    var edtdate = $('#edtdate').val();
    var tempDate = new Date(edtdate);
    var formattedDate = [tempDate.getMonth() + 1, tempDate.getDate(), tempDate.getFullYear()].join('/');

    $.ajax({
        url: 'backend/updateEmp.php',
        type: 'post',
        dataType: "json",
        data: {
            postedtempID: edtempID,
            postedtempName: edtempName,
            postedtLName: edtLName,
            postedtisadmin: edtisadmin,
            postedtaddBy: edtaddBy,
            postedtdate: formattedDate
        },
        success: function(data) {
            console.log('success');
            // if (data == "บันทึกสเร็จ") {
            //     SearchData();
            // }
        }
    })
    SearchData();
    setTimeout(() => {
        location.reload();
    }, 500);
}