<?PHP
if (isset($_POST))
{
    
    ##
    #Testing some Variables
    ##
#    $ID = 285;
#    $City = 'Chatsworth';
    ##
    #
    ##
    if(!class_exists(iSDK))
    {
       require("../../../src/isdk.php"); 
    }
   
    $api = new iSDK;
    $api->cfgCon("lq134","5b67531ca26e2b85911527484e60b3ca");
    
    if(isset($fName))
    {
        $query2['FirstName'] = $fName;
    }
    if(isset($lName))
    {
        $query2['LastName'] = $lName;
    }
    if(isset($email))
    {
        $query2['Email'] = $email;
    }
    if(isset($StreetAddress1))
    {
        $query2['StreetAddress1'] = $StreetAddress1;
    }
    if(isset($StreetAddress2))
    {
        $query2['StreetAddress2'] = $StreetAddress2;
    }
    if(isset($City))
    {
        $query2['City'] = $City;
    }
    if(isset($_POST['State']))
    {
        $query2['State'] = $_POST['State'];
    }
    if(isset($PostalCode))
    {
        $query2['PostalCode'] = $PostalCode;
    }
    if(isset($Country))
    {
        $query2['Country'] = $Country;
    }
    if(isset($phone))
    {
        $query2['Phone1'] = $phone;
    }
    if(isset($phone2))
    {
        $query2['Phone2'] = $phone2;
    }
    $updatecon = $api->updateCon($ID,$query2);
    echo "<pre>";
    echo $City;
#    print_r($_POST);
   print_r($query2);
    echo "</pre>";
}
else
{
    echo "Nothing Posted, Nothing to see here.";
}
?>