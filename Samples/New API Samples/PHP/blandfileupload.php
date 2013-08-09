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
    width: 220px;
    height: 200px;
    margin-bottom: 15px;
    overflow-y: scroll;
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

    <form action="blandfileupload.php" method="post"
    enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                <label for="file">Left hand:</label>
                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" value="Submit">
                </form>
            </td>
            <td>
                <label for="file">Right hand:</label>
                <?PHP
                    #if (file_exists("upload/" . $_FILES["file"]["name"]))
                    if (file_exists("upload/285/right_hand.png"))
                    {
                        echo '<iframe seamless=seamless src=/zoom-master/zoom.php?id=285&hand=right" height="742" width="742" ';
                        echo '<label class="filter-type" for="filter">Right hand already uploaded.</label>';
                        echo '<input type="checkbox" id="filter">';
                            echo '<div class="sidebarlistscroll">';
                            echo '<ul>';
                                echo '<li>item 1</li>';
                                echo '<li>item 2</li>';
                                echo '<li>item 3</li>';
                    echo '</ul>';
                echo '</div>';
                    }
                ?>
                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" value="Submit">
                </form>
                
            </td>
        </tr>
    </table>
    


</body>
</html>