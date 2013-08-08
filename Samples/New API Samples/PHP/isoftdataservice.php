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
    $contacts_fields = array('Id', 'FirstName','LastName','Email','StreetAddress1','City','State');
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
#    print_r($contacts_array);
    echo "</pre>";

    echo "<table border=1>";
        echo "<tr>";
            echo "<th>";
                echo "ID";
            echo "</th>";
            echo "<th>";
                echo "FirstName";
            echo "</th>";
            echo "<th>";
                echo "LastName";
            echo "</th>";
            echo "<th>";
                echo "Email";
            echo "</th>";
            echo "<th>";
                echo "Street1";
            echo "</th>";
            echo "<th>";
                echo "City";
            echo "</th>";
            echo "<th>";
                echo "State";
            echo "</th>";
        echo "</tr>";
    
    foreach ($contacts_array as $val)
    {
        echo "<tr>";
            echo "<td>";
            echo '<form action="forms.php" method="POST" class="form">';
            echo '<input type="submit" value="';
                echo $val['Id'];
                echo '"" class="submit" name= "id" style="border: 0px; background-color: #fff;"/>';
            echo '</form>';
            echo "</td>";
            echo "<td>";
                echo $val['FirstName'];
            echo "</td>";
            echo "<td>";
                echo $val['LastName'];
            echo "</td>";
            echo "<td>";
                echo $val['Email'];
            echo "</td>";
            echo "<td>";
                echo $val['StreetAddress1'];
            echo "</td>";
            echo "<td>";
                echo $val['City'];
            echo "</td>";
            echo "<td>";
                echo $val['State'];
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "Nothing Posted, Nothing to see here.";
}
?>