<?PHP
require('mySQLconnect.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
$filedate= date("m".'_'."d".'_'."y".'_'."G".'_'."i".'_'."s");

if(isset($_FILES["recording"]))
{
    $allowedExts = array("mp3", "wav");
    $temp = explode(".", $_FILES["recording"]["name"]);
    $extension = end($temp);
    if ((($_FILES["recording"]["type"] == "image/mp3")
    || ($_FILES["recording"]["type"] == "image/wav"))
    && ($_FILES["recording"]["size"] < 20000000)
    && in_array($extension, $allowedExts))
    {
        if ($_FILES["recording"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            #echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            if(is_dir("upload/".$id."/recordings"))
            {
                #do something if the directory does exist
            }
            else
            {
                mkdir("upload/".$id."/recordings",0777,true);
            }
            //if (file_exists("upload/".$id."/".$id."_right_hand.jpg"))
            //{
            //    rename("upload/".$id."/".$id."_right_hand.jpg", "upload/".$id."/".$id."_right_hand_".$filedate.".jpg");
            //}

            //move_uploaded_file($_FILES["file"]["tmp_name"],
            //"upload/".$id."/".$id."_right_hand.jpg");
            //#echo "Stored in: " . "upload/".$id."/".$id."_left_hand.jpg";
            //
        }
    }
    else
      {
      #echo "No new file added.";
      }
  }

?>