<?PHP
require('posttovars.php');
require('isoftdataservice.php');
##Search box for First Name, Last Name, ID
###
?>

<form action="lookup.php" method="POST" class="form">

    <tr>
	<td>
	    Unique ID
	</td>
	<td >
	    <input type="text" name="ID"
		<?PHP
		    if(!isset($conID))
		    {
			if(isset($ID))
			{
			    echo 'value='.$ID;
			}
		    }
		    else
		    {
			echo 'value='.$conID;
		    }
		?>
	    />
	</td>
    </tr>
    <tr>
	<td>
	    First Name
	</td>
	<td>
	    <input type="text" name="fName" 
		<?PHP
		    if(isset($fName))
		    {
			echo 'value="'.$fName.'"';
		    }
		?>
	    />
	</td>

	<td>
	    Last Name
	</td>
	<td>
	    <input type="text" name="lName" 
		<?PHP
		    if(isset($lName))
		    {
			echo 'value="'.$lName.'"';
		    }
		?>
	    />
	</td>
        <td>
            <input type="submit" value="Look up" class="submit"/>
        </td>
    </tr>
</table>
</form>
<?PHP
if(isset($contacts))
{
        $contacts_array = $contacts;
    
    echo "<pre>";
#    print_r($contacts_array);
    echo "</pre>";

    echo "<table border=1>";
        echo "<tr>";
            echo "<th>";
                echo "ID";
            echo "</th>";
            echo "<th>";
                echo "FirstName";
            echo "</th>";
            echo "<th>";
                echo "LastName";
            echo "</th>";
            echo "<th>";
                echo "Email";
            echo "</th>";
            echo "<th>";
                echo "Street1";
            echo "</th>";
            echo "<th>";
                echo "City";
            echo "</th>";
            echo "<th>";
                echo "State";
            echo "</th>";
        echo "</tr>";
    
    foreach ($contacts_array as $val)
    {
        echo "<tr>";
            echo "<td>";
            echo '<form action="forms.php" method="POST" class="form">';
            echo '<input type="submit" value="';
                echo $val['Id'];
                echo '"" class="submit" name="ID" style="border: 0px; background-color: #fff;"/>';
            echo '</form>';
            echo "</td>";
            echo "<td>";
                echo $val['FirstName'];
            echo "</td>";
            echo "<td>";
                echo $val['LastName'];
            echo "</td>";
            echo "<td>";
                echo $val['Email'];
            echo "</td>";
            echo "<td>";
                echo $val['StreetAddress1'];
            echo "</td>";
            echo "<td>";
                echo $val['City'];
            echo "</td>";
            echo "<td>";
                echo $val['State'];
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
}
?>
    