<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Fiber Orders</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="FiberOrder/getOrder.js"></script>
</head>
<style>
header {
    align-items: left;
    background-color: #3A3838;
    display: flex;
    height: 75px;
    justify-content: left;
    transition: background 0.3s ease;

    /* &.modal-open {
        background-color: #ffffff;
    } */
}

.headerline {
    align-items: left;
    background-color: #3A3838;
    display: flex;
    height: 30px;
    justify-content: left;
    transition: background 0.3s ease;
}

.bodyline {
    align-items: left;
    background-color: #0099ff;
    display: flex;
    height: 30px;
    justify-content: left;
    transition: background 0.3s ease;
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

.textTitle {
    border: 2px solid #a3c2c2;
}

.bodyTitle {
    border: 2px solid #0099ff;
}
</style>

<body>
    <header>
        <nav class="navbar">
            <h1>
                <p class="menu-item" style="margin-left: 17px;"> Search Fiber Orders</p>
            </h1>
        </nav>
    </header>
    <div style="margin-top: 3px;" class="headerline"></div>
    <div class="textTitle">
        <h2 style="color: #3333ff;margin-left: 17px;">Follow Up Service Order(Fiber)</h2>
        <br>
        <div class="row">
            <div style="display: inline-block;margin-left: 47px;">HSI/FIBERTV/FLP Number : </div>
            <input type="text" id="inpNumberOrder" class="form-control"
                style="display: inline-block;width: 250px;margin-left: 17px;" value="9608587226">
            <button id="getOrderSearch" onclick="OrderSearch()" style="margin-left: 17px;" class="btn btn-primary">
                Search</button>
        </div>
        <br>
    </div>

    <div class="bodyline">
        <h4 style="color: #ffffff;">Service Order Information</h4>
    </div>
    <div class="bodyTitle">
        <div style="margin-left: 17px;" class="row">
            <div style="width: 200px;">order no. :</div>
            <div style="margin-left: 90px;color: #0099ff;" id="orderNo"></div>
        </div>
        <div style="margin-left: 17px;" class="row">
            <div style="width: 200px;">HSI Number :</div>
            <div style="margin-left: 90px;color: #0099ff;" id="HSINo"></div>
        </div>
        <div style="margin-left: 17px;" class="row">
            <div style="width: 200px;">FIBERTV Number :</div>
            <div style="margin-left: 90px;color: #0099ff;" id="FIBERTVNo"></div>
        </div>
        <div style="margin-left: 17px;" class="row">
            <div style="width: 200px;">FLP Number :</div>
            <div style="margin-left: 90px;color: #0099ff;" id="FLPNo"></div>
        </div>
        <div style="margin-left: 17px;" class="row">
            <div style="width: 200px;">Call Ver Status :</div>
            <div style="margin-left: 90px;color: #0099ff;" id="CallVerStatusNo"></div>
        </div>
        <div style="margin-left: 17px;" class="row">
            <div style="width: 200px;">Costomer Name :</div>
            <div style="margin-left: 90px;color: #0099ff;" id="CostomerName"></div>
        </div>
        <div style="margin-left: 17px;" class="row">
            <div style="width: 200px;">Installation Addres :</div>
            <div style="margin-left: 90px;color: #0099ff;" id="InstallationAddres"></div>
        </div>
        <br>
        <!-- ------------------------------------------------------------------------------------------ -->
        <div style="margin-left: 17px;" class="row col-md-12">
            <div class="col-md-6"><b style="text-decoration: underline;color: #005ce6;">Sales Information</b>
                <div>
                    <div style="width: 200px;display: inline-block;">Sales Org. :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpSalesOrg"></div>
                </div>
                <div>
                    <div style="width: 200px;display: inline-block;">Sales Man Name :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpSalesManName"></div>
                </div>
            </div>
            <div style="margin-top: 20px;" class="col-md-6">
                <div>
                    <div style="width: 200px;display: inline-block;">Sales Staff :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpSalesStaff"></div>
                </div>
                <div>
                    <div style="width: 200px;display: inline-block;">Sales Man Contact :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpSalesManContact"></div>
                </div>
            </div>
        </div>
        <br>
        <!-- ------------------------------------------------------------------------------------------ -->
        <div style="margin-left: 17px;" class="row col-md-12">
            <div class="col-md-6"><b style="text-decoration: underline;color: #005ce6;">Resource Information</b>
                <div>
                    <div style="width: 200px;display: inline-block;">DownloadLink Rate/UpLinkRate :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpDownloadLink"></div>
                </div>
                <div>
                    <div style="width: 200px;display: inline-block;">OLT PON PORT :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpOLTPONPORT"></div>
                </div>
                <div>
                    <div style="width: 200px;display: inline-block;">Splitter out port (Secondary) :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpSplitterSecondary">
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;" class="col-md-6">
                <div>
                    <div style="width: 200px;display: inline-block;">OLT Manufacturer :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpOLTManufacturer"></div>
                </div>
                <div>
                    <div style="width: 200px;display: inline-block;">Splitter out port(primary) :</div>
                    <div style="margin-left: 90px;color: #0099ff;display: inline-block;" id="inpSplitterPrimary"></div>
                </div>
            </div>
        </div>
        <br>
    </div>
</body>

</html>
<script>
function OrderSearch() {
    var NumOrder = $('#inpNumberOrder').val();

    // console.log(NumOrder);

    $.ajax({
        url: 'SearchFiberOrder.php',
        type: 'post',
        data: {
            postNumOrder: NumOrder
        },
        success: function(data) {
            // var bar = document.evaluate('//PROD_ORDER_LIST[0]/PRODUCT_NAME', document, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null );
            // console.log($(data).find('ACC_NBR').text())


            var str = $(data).find('ACC_NBR').text();
            var chunks = [];
            var chunkSize = 10;

            while (str) {
                if (str.length < chunkSize) {
                    chunks.push(str);
                    break;
                } else {
                    chunks.push(str.substr(0, chunkSize));
                    str = str.substr(chunkSize);
                }
            }

            // console.log(chunks);
            // console.log($(data).find('ACC_NBR').text());

            $('#orderNo').html($(data).find('CUST_ORDER_NO').text());
            // $('#HSINo').html($(data).find('ACC_NBR').text());
            $('#HSINo').html(chunks[0]);
            // $('#FIBERTVNo').html($(data).find('').text());
            $('#FIBERTVNo').html(chunks[1]);
            $('#FLPNo').html($(data).find('').text());
            $('#CallVerStatusNo').html($(data).find('').text());
            $('#CostomerName').html($(data).find('CUST_NAME').text());
            $('#InstallationAddres').html($(data).find('INSTALL_ADDR').text());

            $('#inpSalesOrg').html($(data).find('SUBMIT_ORG').text());
            $('#inpSalesManName').html($(data).find('SALES_NAME').text());
            $('#inpSalesStaff').html($(data).find('SUBMIT_STAFF').text());
            $('#inpSalesManContact').html($(data).find('SALES_CONTACT_TEL').text());

            $('#inpDownloadLink').html($(data).find('DOWN_LINK_RATE').text() + " / " + $(data).find(
                'UP_LINK_RATE').text());
            $('#inpOLTPONPORT').html($(data).find('OLT_PON_PORT').text());
            $('#inpSplitterSecondary').html($(data).find('L1_SPLITTER_OUT_PORT').text());
            $('#inpOLTManufacturer').html($(data).find('OLT_MFC').text());
            $('#inpSplitterPrimary').html($(data).find('L2_SPLITTER_OUT_PORT').text());

        }
    })
}
</script>