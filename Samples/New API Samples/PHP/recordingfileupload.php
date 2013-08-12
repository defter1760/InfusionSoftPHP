<?PHP
$id= '285';
require('recordingfileuploadhead.php');

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


    <table border=1 width="300px">
        <tr>
            <td width="600">
                <label for="file">Recordings:</label>
            </td>
        </tr>
        <tr>
            <td>
                <?PHP echo '<form action="recordingfileupload.php?id='.$id;
                 echo '" method="post" enctype="multipart/form-data">';
echo 'Recording Description:<input type="text" name="recordingdescription">';
                        echo '<input type="file" name="recording" id="file"><br>';
                        echo '<input type="submit" name="submit" value="Submit">';  
                ?>
                </form>
            </td>



        <tr>
        </tr>
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
            if(is_dir("upload/".$id."/recordings"))
            {
                #$files1 = scandir("upload/".$id);
                $recordinlist = glob('upload/'.$id.'/recordings/*.{mp3,wav}', GLOB_BRACE);
                foreach($recordinlist as $valfile)
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
                mkdir("upload/".$id."/recordings",0777,true);
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>