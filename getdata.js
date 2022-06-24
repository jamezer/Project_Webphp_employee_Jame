  function delFunc(empData) {
      $.ajax({
          url: 'delDetail.php',
          type: 'post',
          data: {
              postData: empData
          },
          success: function(data) {
              location.reload();
          }
      })
  }

  function edtFunc(empData) {
      // console.log(empData);
      $.ajax({
          url: 'searchdata.php',
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
              var empdata = dataSet.emplist[empData];
              $('#edtempID').val(empdata['employeeID']);
              $('#edtempName').val(empdata['firstName']);
              $('#edtLName').val(empdata['lastName']);
              $('#edtisadmin').val(empdata['issAdmin']);
              $('#edtaddBy').val(empdata['addBy']);
              $('#edtdate').val(empdata['addDate']);

              console.log("Date = " + empdata['addDate']);
              console.log(empdata);
          }
      })
  }

  function SearchData() {
      $("#tableId > tbody").empty();

      var empId = $('#empId').val();
      var empName = $('#empName').val();
      var empLName = $('#empLName').val();
      var dataSet = [];
      $.ajax({
          url: 'searchdata.php',
          // url: 'http://localhost:8080/Employeelist',
          headers: {
              "accept": "application/json",
              "Access-Control-Allow-Origin": "*"
          },
          crossDomain: true,
          type: 'post',
          dataType: 'json',
          data: {
              postempId: empId,
              postempName: empName,
              postempLName: empLName
          },
          success: function(data) {
              dataSet = data;
              var Ttable = $('#tableId').DataTable();
              Ttable.clear();
              let textdata = [];

              for (let i = 0; i < dataSet.emplist.length;) {
                  var empdata = dataSet.emplist[i]
                  var row = i;
                  var tableSet = [
                      empdata['employeeID'],
                      empdata['firstName'],
                      empdata['lastName'],
                      empdata['issAdmin'],
                      empdata['addBy'],
                      empdata['addDate'],
                      "<a id='btnEdit' class='btn btn-sm btn-warning' data-toggle='collapse' data-target='#edtdemo' onclick='edtFunc(" + row + ")'><span class='glyphicon glyphicon-edit'></span> Edit</a>" +
                      "<a class='btn btn-sm btn-danger' id='deleteData' onclick='delFunc(" + empdata['employeeID'] + ")'><span class='glyphicon glyphicon-info-sign'></span> Delete</a>"
                  ];
                  textdata.push(tableSet);
                  i++;
                  // console.log(empdata);
              }
              Ttable.rows.add(textdata).draw();
          }
      })
  }

  function SearchEmp() {
      $("#tableId > tbody").empty();

      var EmpId = $('#empId').val();
      var EmpFirstname = $('#empName').val();
      var EmpLastname = $('#empLname').val();

      var dataSet = [];

      if (EmpId == '' && EmpFirstname == '' && EmpLastname == '') {
          SearchData();
      } else {
          $.ajax({
              url: 'backend/SearchDetail.php',
              type: 'post',
              dataType: "json",
              data: {
                  postEmpId: EmpId,
                  postEmpFirstname: EmpFirstname,
                  postEmpLastname: EmpLastname
              },
              success: function(data) {

                  dataSet = data;
                  var Ttable = $('#tableId').DataTable();
                  Ttable.clear();
                  let textdata = [];

                  for (let i = 0; i < dataSet.emplist.length;) {
                      var empdata = dataSet.emplist[i]
                      var row = i;
                      var tableSet = [
                          empdata['employeeID'],
                          empdata['firstName'],
                          empdata['lastName'],
                          empdata['issAdmin'],
                          empdata['addBy'],
                          empdata['addDate'],
                          "<a id='btnEdit' class='btn btn-sm btn-warning' data-toggle='collapse' data-target='#edtdemo' onclick='edtFunc(" + row + ")'><span class='glyphicon glyphicon-edit'></span> Edit</a>" +
                          "<a class='btn btn-sm btn-danger' id='deleteData' onclick='delFunc(" + empdata['employeeID'] + ")'><span class='glyphicon glyphicon-info-sign'></span> Delete</a>"
                      ];
                      textdata.push(tableSet);
                      i++;
                      // console.log(empdata);
                  }
                  Ttable.rows.add(textdata).draw();
              }
          })
      }
  }