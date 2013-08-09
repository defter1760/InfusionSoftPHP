<?PHP
require('head.php');
require('posttovars.php');
require('isoftdataservice.php');
##Search box for First Name, Last Name, ID
###
?>
<body>
<table style="border:1px solid black;">
    <tr>
	<td>
	
	    <h1>Nadia Tumas -> Infusionsoft API
	    </h1>
<a href=forms.php>Back to Add or Modify</a>
<br><br>Use % for wildcard, like H%tchin%s if needed.<br><br>No results found? Use this, click <a href=forms.php>Here.</a><br><br>
<form action="lookup.php" method="POST" class="form">
<table style="border:1px solid black;">

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
<td>
	    Email
	</td>
	<td >
	    <input type="text" name="email"
		<?PHP
		    if(isset($email))
		    {
			echo 'value="'.$email.'"';
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

    echo '<table border-collapse:collapse;>';
        echo '<tr style="border:1px solid black;">';
            echo '<th style="border:1px solid black;">';
                echo "ID";
            echo "</th>";
            echo '<th style="border:1px solid black;">';
                echo "FirstName";
            echo "</th>";
            echo '<th style="border:1px solid black;">';
                echo "LastName";
            echo "</th>";
            echo '<th style="border:1px solid black;">';
                echo "Email";
            echo "</th>";
            echo '<th style="border:1px solid black;">';
                echo "Street1";
            echo "</th>";
            echo '<th style="border:1px solid black;">';
                echo "City";
            echo "</th>";
            echo '<th style="border:1px solid black;">';
                echo "State";
            echo "</th>";
        echo "</tr>";
    if(is_array($contacts_array))
    {
        foreach ($contacts_array as $val)
        {
            echo '<tr style="border:1px solid black;">';
                echo '<td style="border:1px solid black;">';
                echo '<form action="forms.php" method="POST" class="form">';
                echo '<input type="submit" value="';
                    echo $val['Id'];
                    echo '" class="submit" name="ID" />';
                echo '</form>';
                echo "</td>";
                echo '<td style="border:1px solid black;">';
                    echo $val['FirstName'];
                echo "</td>";
                echo '<td style="border:1px solid black;">';
                    echo $val['LastName'];
                echo "</td>";
                echo '<td style="border:1px solid black;">';
                    echo $val['Email'];
                echo "</td>";
                echo '<td style="border:1px solid black;">';
                    echo $val['StreetAddress1'];
                echo "</td>";
                echo '<td style="border:1px solid black;">';
                    echo $val['City'];
                echo "</td>";
                echo '<td style="border:1px solid black;">';
                    echo $val['State'];
                echo "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
    
}
?>
        </td>
    </tr>
</table>
</body>