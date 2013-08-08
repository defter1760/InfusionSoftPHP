<?PHP
if (isset($_POST))
{
    require("../../../src/isdk.php");
    $api = new iSDK;
    $api->cfgCon("lq134","5b67531ca26e2b85911527484e60b3ca");
    
    ##
    #Test the Variables
    ##
    #    $fName = 'Kevin';
    #    $lName = 'Hutchings';
    #    $email = 'khonline@gmail.com';
    ##
    #
    ##
    $contacts_fields = array('Id', 'FirstName','LastName', 'Email');
    if(isset($fName))
    {
        $query['FirstName'] = '%'.$fName.'%';
    }
    if(isset($lName))
    {
        $query['LastName'] = '%'.$lName.'%';
    }
    if(isset($email))
    {
        $query['Email'] = '%'.$email.'%';
    }
    $contacts = $api->dsQuery('Contact', 1000, 0,$query, $contacts_fields);
##$contacts = $api->dsQuery('Contact', 1000, 0, array('Email' => "%"), $contacts_fields);
   
    
    $contacts_array = $contacts;
    
    echo "<pre>";
    print_r($contacts_array);
    echo "</pre>";

    echo "<table>";
        echo "<tr>";
            echo "<th>";
                echo "ID";
            echo "</th>";
            echo "<th>";
                echo "FirstName";
            echo "</th>";
            
    
    foreach ($contacts_array as $val)
    {
        echo '<br><br>';
        echo $val['Id'];
        echo '<br><br>';
    }
}
else
{
    echo "Nothing Posted, Nothing to see here.";
}
?>