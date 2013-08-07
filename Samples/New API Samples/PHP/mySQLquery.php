<?PHP
require('mySQLconnect.php');

#$ID='2467';
if(isset($ID))
{
    
    $query = 'SELECT * FROM clients where ID='.$ID;
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        echo $line["id"];
        echo "<br><br>";
        echo $line["lifePurpose"];
    }
    
    $LineID= $line["id"];
    
    if ($LineID = $ID)
    {
    ##
    #This person is in the system, let's update their information
    ##
        $query = "UPDATE clients set fName='".$fName."',lName='".$lName."',email='".$email."',phone='".$phone."',phone2='".$phone2."',specialInfo='".$specialInfo."',lifePurpose='".$lifePurpose."',lifeLesson='".$lifeLesson."',lifeSchoolWisdom='".$lifeSchoolWisdom."',lifeSchoolLove='".$lifeSchoolLove."',lifeSchoolService='".$lifeSchoolService."',lifeSchoolPeace='".$lifeSchoolPeace."',importantToClient='".$importantToClient."',ahaMoment='".$ahaMoment."',recordingMade='".$recordingMade."',skypeName='".$skypeName."' where id='".$ID."'";
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());

    
    }##
    #not a match as in there is no one in the db with this ID, so, let's add them
    ##
}
else
{    
    if(isset($conID))
    {

        $query = "insert into clients (id,fName,lName,email,phone,phone2,specialInfo,lifePurpose,lifeLesson,lifeSchoolWisdom,lifeSchoolLove,lifeSchoolService,lifeSchoolPeace,importantToClient,ahaMoment,recordingMade,skypeName) values('".$conID."','".$fName."','".$lName."','".$email."','".$phone."','".$phone2."','".$specialInfo."','".$lifePurpose."','".$lifeLesson."','".$lifeSchoolWisdom."','".$lifeSchoolLove."','".$lifeSchoolService."','".$lifeSchoolPeace."','".$importantToClient."','".$ahaMoment."','".$recordingMade."','".$skypeName."')";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    }
}
?>