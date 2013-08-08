<?PHP
require('mySQLconnect.php');

#$ID='2467';
if(isset($ID))
{
    
    $query = 'SELECT * FROM clients where ID='.$ID;
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
    {
#        $lifePurpose = $line['lifePurpose'];
   
    }
    
    $LineID= $line['id'];
    
    if ($LineID = $ID)
    {
        if(isset($fName))
        {
            $query = "UPDATE clients set fName='".$fName."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($lName))
        {
            $query = "UPDATE clients set lName='".$lName."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($email))
        {
            $query = "UPDATE clients set email='".$email."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($phone))
        {
            $query = "UPDATE clients set phone='".$phone."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($phone2))
        {
            $query = "UPDATE clients set phone2='".$phone2."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($specialInfo))
        {
            $query = "UPDATE clients set specialInfo='".$specialInfo."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($lifePurpose))
        {
            $query = "UPDATE clients set lifePurpose='".$lifePurpose."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($lifeSchoolWisdom))
        {
            $query = "UPDATE clients set lifeSchoolWisdom='".$lifeSchoolWisdom."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($lifeSchoolLove))
        {
            $query = "UPDATE clients set lifeSchoolLove='".$lifeSchoolLove."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($lifeSchoolService))
        {
            $query = "UPDATE clients set lifeSchoolService='".$lifeSchoolService."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($lifeSchoolPeace))
        {
            $query = "UPDATE clients set lifeSchoolPeace='".$lifeSchoolPeace."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($lifeLesson))
        {
            $query = "UPDATE clients set lifeLesson='".$lifeLesson."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($importantToClient))
        {
            $query = "UPDATE clients set importantToClient='".$importantToClient."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($lifeSchoolLesson))
        {
            $query = "UPDATE clients set lifeSchoolLesson='".$lifeSchoolLesson."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }
        if(isset($ahaMoment))
        {
            $query = "UPDATE clients set ahaMoment='".$ahaMoment."' where id='".$ID."'";
            $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        }             
    }
    else
    {
        echo "HEE";
        $query = "insert into clients (id,fName,lName,email,phone,phone2,specialInfo,lifePurpose,lifeLesson,lifeSchoolWisdom,lifeSchoolLove,lifeSchoolService,lifeSchoolPeace,importantToClient,ahaMoment,recordingMade,skypeName) values('".$ID."','".$fName."','".$lName."','".$email."','".$phone."','".$phone2."','".$specialInfo."','".$lifePurpose."','".$lifeLesson."','".$lifeSchoolWisdom."','".$lifeSchoolLove."','".$lifeSchoolService."','".$lifeSchoolPeace."','".$importantToClient."','".$ahaMoment."','".$recordingMade."','".$skypeName."')";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());    

    }
    $query2 = 'SELECT * FROM clients where ID='.$ID;
    $result2 = mysql_query($query2) or die('Query failed: ' . mysql_error());
    while ($line2 = mysql_fetch_array($result, MYSQL_ASSOC))
    {
        $specialInfo = $line2['specialInfo'];
        $lifePurpose = $line2['lifePurpose'];
        $lifeSchoolWisdom = $line2['lifeSchoolWisdom'];
        $lifeSchoolLove = $line2['lifeSchoolLove'];
        $lifeSchoolService = $line2['lifeSchoolService'];
        $lifeSchoolPeace = $line2['lifeSchoolPeace'];
        $lifeLesson = $line2['lifeLesson'];
        $importantToClient = $line2['importantToClient'];
        $lifeSchoolLesson = $line2['lifeSchoolLesson'];
        $ahaMoment = $line2['ahaMoment'];        
    }
    ##
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
    else
    {
        $query = "insert into clients (id,fName,lName,email,phone,phone2,specialInfo,lifePurpose,lifeLesson,lifeSchoolWisdom,lifeSchoolLove,lifeSchoolService,lifeSchoolPeace,importantToClient,ahaMoment,recordingMade,skypeName) values('".$ID."','".$fName."','".$lName."','".$email."','".$phone."','".$phone2."','".$specialInfo."','".$lifePurpose."','".$lifeLesson."','".$lifeSchoolWisdom."','".$lifeSchoolLove."','".$lifeSchoolService."','".$lifeSchoolPeace."','".$importantToClient."','".$ahaMoment."','".$recordingMade."','".$skypeName."')";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        
    }
    
}
?>