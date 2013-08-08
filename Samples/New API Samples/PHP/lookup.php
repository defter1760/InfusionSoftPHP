<?PHP

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
    </tr>