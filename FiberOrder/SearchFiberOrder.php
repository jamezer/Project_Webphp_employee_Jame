<?php 

$NumOrder = $_POST['postNumOrder'];
 //Data, connection, auth
//  $dataFromTheForm = $_POST['fieldName']; // request data from the form
 $soapUrl = "http://10.50.25.179:7105/axis2/services/OM4QUERYService?wsdl"; // asmx URL of WSDL

 // xml post structure

 $xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:typ="http://oss.zsmart.ztesoft.com/om/webmonitor/types/">
                        <soapenv:Header/>
                        <soapenv:Body>
                            <typ:queryFTTHCustomerOrder>
                                <QUERY_METHOD>1</QUERY_METHOD>
                                <QUERY_CONDITION>'.$NumOrder.'</QUERY_CONDITION>
                            </typ:queryFTTHCustomerOrder>
                        </soapenv:Body>
                    </soapenv:Envelope>';   // data from the form, e.g. some ID number

    $headers = array(
                 "Content-type: text/xml;charset=\"utf-8\"",
                 "Accept: text/xml",
                 "Cache-Control: no-cache",
                 "Pragma: no-cache",
                //  "SOAPAction: http://connecting.website.com/WSDL_Service/GetPrice", 
                 "Content-length: ".strlen($xml_post_string),
             ); //SOAPAction: your op URL

     $url = $soapUrl;

     // PHP cURL  for https connection with auth
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //  curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

     // converting
     $response = curl_exec($ch); 
    //  print_r($response);
    //  echo $response;
     curl_close($ch);

     // converting
     $response1 = str_replace("<soap:Body>","",$response);
     $response2 = str_replace("</soap:Body>","",$response1);
    //  echo $response2;
     echo $response2;

    //  $xml = new SimpleXMLElement($response2);
    // //  echo $response2;
    //  $result = $xml->xpath('PRODUCT_NAME');

    //  echo $result;

     // convertingc to XML
     $parser = simplexml_load_string($response2);
    //  echo $parser;
     // user $parser to get your data out of XML response and to display it. 
 ?>