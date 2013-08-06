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
    ##
    #This person is in the system, let's update their information
    ##
    #    $query = 'UPDATE clients set where ID='.$PostID;
    #$result = mysql_query($query) or die('Query failed: ' . mysql_error());
    }
}
else
{
    ##
    #not a match as in there is no one in the db with this ID, so, let's add them
    ##
    $query = 'insert into clients (id,fName,lName,email,phone,phone2,specialInfo,lifePurpose,lifeLesson,lifeSchoolWisdom,lifeSchoolLove,lifeSchoolService,lifeSchoolPeace,importantToClient,ahaMoment,recordingMade,skypeName)
                values('.$PostID.','.$fName.','.$lName.','.$email.','.$phone.','.$phone2.','.$specialInfo.','.$lifePurpose.','.$lifeLesson.','.$lifeSchoolWisdom.','.$lifeSchoolLove.','.$lifeSchoolService.',
                '.$lifeSchoolPeace.','.$importantToClient.','.$ahaMoment.','.$recordingMade.','.$skypeName.')';
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
}
?>