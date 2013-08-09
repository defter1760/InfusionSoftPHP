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
    if(!class_exists('iSDK'))
    {
       require("./src/isdk.php"); 
    }
   
    $api = new iSDK;
    $api->cfgCon("lq134","5b67531ca26e2b85911527484e60b3ca");
    
    if(isset($_POST['fName']))
    {
        $query2['FirstName'] = $_POST['fName'];
    }
    if(isset($_POST['LastName']))
    {
        $query2['LastName'] = $_POST['lName'];
    }
    if(isset($_POST['Email']))
    {
        $query2['Email'] = $_POST['email'];
    }
    if(isset($_POST['StreetAddress1']))
    {
        $query2['StreetAddress1'] = $_POST['StreetAddress1'];
    }
    if(isset($_POST['StreetAddress2']))
    {
        $query2['StreetAddress2'] = $_POST['StreetAddress2'];;
    }
    if(isset($_POST['City']))
    {
        $query2['City'] = $_POST['City'];
    }
    if(isset($_POST['State']))
    {
        $query2['State'] = $_POST['State'];
    }
    if(isset($_POST['PostalCode']))
    {
        $query2['PostalCode'] = $_POST['PostalCode'];
    }
    if(isset($_POST['Country']))
    {
        $query2['Country'] = $_POST['Country'];
    }
    if(isset($_POST['phone']))
    {
        $query2['Phone1'] = $_POST['phone'];
    }
    if(isset($_POST['phone2']))
    {
        $query2['Phone2'] = $_POST['phone2'];
    }
    $updatecon = $api->updateCon($ID,$query2);
//    echo "<pre>";
#   echo $City;
//#    print_r($_POST);
#   print_r($query2);
#    echo "</pre>";
}
else
{
    echo "Nothing Posted, Nothing to see here.";
}
?>