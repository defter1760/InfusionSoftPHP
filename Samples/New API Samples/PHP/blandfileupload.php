<?PHP
require('blandfileuploadhead.php');
?>

<html>
<head>
    <style>
        .filter-type {
    border-bottom: 1px dotted #666;
}

.sidebarlistscroll {
    width: 320px;
    height: 30px;
    margin-bottom: 15px;
    /*overflow-y: scroll;*/
    border: none;
    visibility: hidden;
}
#filter{display:none}
#filter:checked + .sidebarlistscroll{
    visibility: visible;
}
    </style>
</head>
<body>


    <table border=1 width="1200px">
        <tr>
            <td width="600">
                <label for="file">Left hand:</label>
            </td>
            <td width="600">
                <label for="file">Right hand:</label>
            </td>
        </tr>
        <tr>
            <td>
                <?PHP echo '<form action="blandfileupload.php?id='.$id;
                 echo '" method="post" enctype="multipart/form-data">';
                ?>
                <?PHP
                   ## if (file_exists("upload/" . $_FILES["file"]["name"]))
                    if (file_exists("upload/".$id."/".$id."_left_hand.jpg"))
                    {
                        echo '<label class="filter-type" for="filter">Left hand already uploaded. Click to replace.</label>';
                        echo '<input type="checkbox" id="filter">';
                            echo '<div class="sidebarlistscroll">';
                            echo '<ul>';
                echo '<input type="file" name="file2" id="file"><br>';
                echo '<input type="submit" name="submit" value="Submit">';
                    echo '</ul>';
                echo '</div>';                
                    }
                    else
                    {
                        echo '<input type="file" name="file2" id="file"><br>';
                        echo '<input type="submit" name="submit" value="Submit">';  
                    }
                ?>
                </form>
            </td>
            <td>
                <?PHP echo '<form action="blandfileupload.php?id='.$id;
                 echo '" method="post" enctype="multipart/form-data">';
                ?>
                <?PHP
                   ## if (file_exists("upload/" . $_FILES["file"]["name"]))
                    if (file_exists("upload/".$id."/".$id."_right_hand.jpg"))
                    {
                        echo '<label class="filter-type" for="filter">Right hand already uploaded. Click to replace.</label>';
                        echo '<input type="checkbox" id="filter">';
                            echo '<div class="sidebarlistscroll">';
                            echo '<ul>';
                echo '<input type="file" name="file" id="file"><br>';
                echo '<input type="submit" name="submit" value="Submit">';
                    echo '</ul>';
                echo '</div>';                
                    }
                    else
                    {
                        echo '<input type="file" name="file" id="file"><br>';
                        echo '<input type="submit" name="submit" value="Submit">';  
                    }
                ?>
                                </form>
            </td>
        </tr>
        <td>
            <?PHP
            ## if (file_exists("upload/" . $_FILES["file"]["name"]))
            if (file_exists("upload/".$id."/".$id."_left_hand.jpg"))
            {
                echo '<iframe seamless=seamless src="./zoom-master/zoom.php?id='.$id.'&hand=left" height="500" width="500" ></iframe>';
            }
            
            ?>
        </td>
        <td>
            <?PHP
            ## if (file_exists("upload/" . $_FILES["file"]["name"]))
            if (file_exists("upload/".$id."/".$id."_right_hand.jpg"))
            {
                echo '<iframe seamless=seamless src="./zoom-master/zoom.php?id='.$id.'&hand=right" height="500" width="500" ></iframe>';
            }
            
            ?>
        </td>
        
            
        </tr>


        <tr>

        </tr>
            
            

<!--                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" value="Submit">-->
                </form>
                
            </td>
        </tr>
    </table>
    

<table>
    <tr>
        <th>
            Files
        </th>
    </tr>
    
            <?PHP
            if(is_dir("upload/".$id))
            {
                $files1 = scandir("upload/".$id);
                foreach($files1 as $valfile)
                {
                    if($valfile != '.')
                    {
                        if($valfile != '..')
                        {
                            echo '<tr>';
                                echo '<td>';
                                    echo '<a href="upload/'.$id.'/'.$valfile.'" target="parent">'.$valfile.'</a>';
                                echo '</td>';
                            echo '</tr>';
                        }
                    }
                }
            }
            else
            {
                mkdir("upload/".$id);
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>