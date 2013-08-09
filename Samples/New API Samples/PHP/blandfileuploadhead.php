<?PHP
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
$filedate= date("m".'_'."d".'_'."y".'_'."G".'_'."i".'_'."s");

if(isset($_FILES["file"]))
{
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 2000000)
    && in_array($extension, $allowedExts))
    {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            #echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            if(is_dir("upload/".$id))
            {
                #do something if the directory does exist
            }
            else
            {
                mkdir("upload/".$id);
            }
            if (file_exists("upload/".$id."/".$id."_right_hand.jpg"))
            {
                rename("upload/".$id."/".$id."_right_hand.jpg", "upload/".$id."/".$id."_right_hand_".$filedate.".jpg");
            }

            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/".$id."/".$id."_right_hand.jpg");
            #echo "Stored in: " . "upload/".$id."/".$id."_left_hand.jpg";
        
        }
    }
    else
      {
      #echo "No new file added.";
      }
  }
  
if(isset($_FILES["file2"]))
{
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file2"]["name"]);
    $extension = end($temp);
    if ((($_FILES["file2"]["type"] == "image/gif")
    || ($_FILES["file2"]["type"] == "image/jpeg")
    || ($_FILES["file2"]["type"] == "image/jpg")
    || ($_FILES["file2"]["type"] == "image/pjpeg")
    || ($_FILES["file2"]["type"] == "image/x-png")
    || ($_FILES["file2"]["type"] == "image/png"))
    && ($_FILES["file2"]["size"] < 2000000)
    && in_array($extension, $allowedExts))
    {
        if ($_FILES["file2"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file2"]["error"] . "<br>";
        }
        else
        {
            #echo "Upload: " . $_FILES["file2"]["name"] . "<br>";
            if(is_dir("upload/".$id))
            {
                #do something if the directory does exist
            }
            else
            {
                mkdir("upload/".$id);
            }
            if (file_exists("upload/".$id."/".$id."_left_hand.jpg"))
            {
                rename("upload/".$id."/".$id."_left_hand.jpg", "upload/".$id."/".$id."_left_hand_".$filedate.".jpg");
            }

            move_uploaded_file($_FILES["file2"]["tmp_name"],
            "upload/".$id."/".$id."_left_hand.jpg");
            #echo "Stored in: " . "upload/".$id."/".$id."_left_hand.jpg";
        
        }
    }
    else
      {
      #echo "No new file added.";
      }
  }
?>