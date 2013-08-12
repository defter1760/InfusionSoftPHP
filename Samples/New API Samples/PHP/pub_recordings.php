<head>
<!--<link rel="stylesheet" type="text/css" media="all" href="http://www.nadiatumas.com/wp/wp-content/themes/twentyten/style.css" />
<link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
-->
<style type="text/css">
body {background:none transparent;
}
</style></head>
<body>
<?PHP
require('mySQLconnect.php');
?>
<?PHP
if(isset($_GET['id']))
{
    if(isset($_GET['email']))
    {
        $gID = $_GET['id'];
        $gEmail = $_GET['email'];
        #echo $gID;
        #echo $gEmail;
        if(!empty($gEmail))
        {
           if(!empty($gID))
           {
            require('pub_isoftdataselect.php');
            #echo $single_email;
                #check to see if ID matches email
                if($single_id == $gID)
                {
//echo $single_id;
//echo $single_fName;
                #echo '<h1>Recordings for '.$single_fName.' '.$single_lName.'</h1>';
                echo '<table CELLSPACING=10 width=400px>';
                    echo '<tr>';
                        echo '<th width=200px align=center>';
                            echo'Date uploaded';
                        echo '</th>';
                        echo '<th width=200px>';
                            echo 'Recording - Click to play';
                        echo '</th>';
                    echo '</tr>';
                    
                    $queryRec = 'SELECT * FROM recordinglog where contactid="'.$gID.'" order by idrecordinglog desc';
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
                            echo '<td align=center>';
                                echo $RecOut['date'];
                            echo '</td>';
                            echo '<td>';
                                echo '<a href="recordings/'.$RecOut['path'].'" target="parent">';
                                echo $RecOutDesc;
                                echo '</a>';
                            echo '</td>';
                        echo '</tr>';

                    }
                    
            //        echo '</td>';
            //    echo '</tr>';
            //echo '</table>';
                        

                }
                else
                {
                    echo 'Please use the correct link from your email.';
                }
           }
           else
           {
                echo 'Please use the correct link from your email.';
           }
        }
        else
        {
            echo 'Please use the correct link from your email.';
        }
        
    }
    else
    {
        echo 'Please use the correct link from your email.';
    }
}
else
{
    echo 'Please use the correct link from your email.';
}

            ?>
            
</body>
