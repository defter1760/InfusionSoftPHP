<?PHP
$id= '285';
require('recordingfileuploadhead.php');
require('head.php');
?>
<body>


    <table width="400px">
        <tr border=2>
            <td width="600">
                <label for="file"><b>Upload Recordings:</b></label>
            </td>
        </tr>
        <tr>
            <td>
                <?PHP echo '<form action="recordingfileupload.php?id='.$id;
                 echo '" method="post" enctype="multipart/form-data">';
echo 'Recording Description:</td><td><input type="text" name="recordingdescription">';
                        echo '</tr><tr><td><input type="file" name="recording" id="file"><br>';
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
        Date uploaded
    </th>
        <th>
            Recording
        </th>
    </tr>
    
    <?PHP
        $queryRec = 'SELECT * FROM recordinglog where contactid="'.$id.'" order by idrecordinglog desc';
        $resultRec = mysql_query($queryRec) or die('Query failed: ' . mysql_error());
        while ($RecOut = mysql_fetch_array($resultRec, MYSQL_ASSOC))
        {
            if($RecOut['description'] != 'N')
            {
                $RecOutDesc= $RecOut['description'];
            }
            else
            {
                $RecOutDesc = $RecOut['date'];
            }
            echo '<tr>';
                echo '<td>';
                    echo $RecOut['date'];
                echo '</td>';
                echo '<td>';
                    echo '<a href="recordings/'.$RecOut['path'].'" target="parent">';
                    echo $RecOutDesc;
                    echo '</a>';
                echo '</td>';
            echo '</tr>';
        }



            ?>
        </td>
    </tr>
</table>
</body>
</html>