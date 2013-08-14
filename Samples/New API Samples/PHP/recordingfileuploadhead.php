<?PHP
require('mySQLconnect.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    if(isset($_POST['recordingdescription']))
    {
        $Pdescription = $_POST['recordingdescription'];
        if (empty($Pdescription)) $Pdescription= 'N';
    }
    $email = $_GET['email'];
}
$filedate= date("m".'_'."d".'_'."y".'_'."G".'_'."i".'_'."s");

if(isset($_FILES["recording"]))
{
    $allowedExts = array("mp3", "wav");
    $temp = explode(".", $_FILES["recording"]["name"]);
    $extension = end($temp);
    if(isset($temp))
    {
        if ($_FILES["recording"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["recording"]["error"] . "<br>";
        }
        else
        {
        $query = 'SELECT * FROM recordinglog where contactid="'.$id.'"';
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
        
        $recordingcount=0;
        
        while ($rec = mysql_fetch_array($result, MYSQL_ASSOC))
        {
            
            if(isset($rec['contactid']))
            {
                $recordingcount= $rec['idcount']+1;
                $RecID= $rec['contactid'];
            }
    
        }
    
    if($recordingcount == 0)
    {
        $recordingcount = 1;
    }
    #echo $recordingcount;
    
    if (empty($uniqueid)) 
    {
        require_once("./hashgen/class.chip_password_generator.php");
	$args = array(
	    'length'                =>   18,
	    'alpha_upper_include'   =>   TRUE,
	    'alpha_lower_include'   =>   FALSE,
	    'number_include'        =>   TRUE,
	    'symbol_include'        =>   FALSE,
	    );
	$object = new chip_password_generator( $args );
	$password = $object->get_password();

	$uniqueid = $password;
    }
$RecPath= $id."_".$recordingcount."_".$uniqueid.".mp3";
#echo $RecPath;
    
            #echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            //if(is_dir("upload/".$id."/recordings"))
            //{
            //    #do something if the directory does exist
            //}
            //else
            //{
            //    mkdir("upload/".$id."/recordings",0777,true);
            //}
            //if (file_exists("upload/".$id."/".$id."_right_hand.jpg"))
            //{
            //    rename("upload/".$id."/".$id."_right_hand.jpg", "upload/".$id."/".$id."_right_hand_".$filedate.".jpg");
            //}

            move_uploaded_file($_FILES["recording"]["tmp_name"],
            "recordings/".$id."_".$recordingcount."_".$uniqueid.".mp3");
            
        $query = "INSERT into recordinglog (date,contactid,path,description,idcount,uniqueid) values('".date("m".'-'."d".'-'."Y")."','".$id."','".$RecPath."','".$Pdescription."','".$recordingcount."','".$uniqueid."')";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
                    
        }
    }
    else
      {
      #echo "No new file added.";
      }
  }

?>