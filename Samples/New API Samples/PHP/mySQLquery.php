<?PHP
require('mySQLconnect.php');

$PostID='2467';
if(isset($PostID))
{
    $PostLifePurpose='';
    
    $query = 'SELECT * FROM clients where ID='.$PostID;
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        echo $line["id"];
    }
    
    $LineID= $line["id"];
    
    if ($LineID = $PostID)
    {
    #    $query = 'UPDATE clients set where ID='.$PostID;
    #$result = mysql_query($query) or die('Query failed: ' . mysql_error());
    }
}
else
{
    #not a match as in there is no one in the db with this ID, so, let's add them
}
?>