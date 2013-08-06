<html>
<?PHP
require('head.php');
require('posttovars.php');
?>
<body>



<table style="border:1px solid black;">

    <tr><td>
<h1>Nadia Tumas -> Infusionsoft API</h1>
<table>
    <tr>
	<td>
    <?PHP
	require('ContactService-Sample.php');
    ?>
	</td>
    </tr>
    <tr>
	<td>
    <?PHP
    
	if (isset($_POST['fName']))
	{
	    echo '<form action="forms.php" method="POST" class="form">';
	    echo '<input type="submit" value="Reset!">';
	    echo '<input type=hidden name=reset value=reset>';
	    echo '</form>';
	}
    ?>
	</td>
    </tr>    
<form action="forms.php" method="POST" class="form">

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
    </tr>
    <tr>
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
    <tr>
	<td>
	    Email
	</td>
	<td>
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
	    Phone
	</td>
	<td>
	    <input type="text" name="phone" 
		<?PHP
		    if(isset($phone))
		    {
			echo 'value="'.$phone.'"';
		    }
		?>	   	   
	    />
	</td>
    </tr>
    <tr>
	<td>
	    Phone2
	</td>
	<td>
	    <input type="text" name="phone2" 
		<?PHP
		    if(isset($phone2))
		    {
			echo 'value="'.$phone2.'"';
		    }
		?>	   	   
	    />
	</td>
    </tr>    
    <tr>
	<td>
	    StreetAddress1
	</td>
	<td>
	    <input type="text" name="StreetAddress1" 
		<?PHP
		    if(isset($StreetAddress1))
		    {
			echo 'value="'.$StreetAddress1.'"';
		    }
		?>	   	   	    
	    />
	</td>
    </tr>
    <tr>
	<td>
	    StreetAddress2
	</td>
	<td>
	    <input type="text" name="StreetAddress2"
		<?PHP
		    if(isset($StreetAddress2))
		    {
			echo 'value="'.$StreetAddress2.'"';
		    }
		?>	    
	    />
	</td>
    </tr>
    <tr>
	<td>
	    City
	</td>
	<td>
	    <input type="text" name="City" 
		<?PHP
		    if(isset($City))
		    {
			echo 'value="'.$City.'"';
		    }
		?>	    
	    />
	</td>
    </tr>

    <tr>
	<td>
	    State
	</td>
	<td>
	    <select name="State">
		<?PHP
		    if(isset($State))
		    {
			echo '<option value="'.$State.'" selected="selected">'.$State.'</option>';
		    }
		?>
		<option value=""> </option>
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="DC">District of Columbia</option>
		<option value="FL">Florida</option>
		<option value="GA">Georgia</option>
		<option value="HI">Hawaii</option>
		<option value="ID">Idaho</option>
		<option value="IL">Illinois</option>
		<option value="IN">Indiana</option>
		<option value="IA">Iowa</option>
		<option value="KS">Kansas</option>
		<option value="KY">Kentucky</option>
		<option value="LA">Louisiana</option>
		<option value="ME">Maine</option>
		<option value="MD">Maryland</option>
		<option value="MA">Massachusetts</option>
		<option value="MI">Michigan</option>
		<option value="MN">Minnesota</option>
		<option value="MS">Mississippi</option>
		<option value="MO">Missouri</option>
		<option value="MT">Montana</option>
		<option value="NE">Nebraska</option>
		<option value="NV">Nevada</option>
		<option value="NH">New Hampshire</option>
		<option value="NJ">New Jersey</option>
		<option value="NM">New Mexico</option>
		<option value="NY">New York</option>
		<option value="NC">North Carolina</option>
		<option value="ND">North Dakota</option>
		<option value="OH">Ohio</option>
		<option value="OK">Oklahoma</option>
		<option value="OR">Oregon</option>
		<option value="PA">Pennsylvania</option>
		<option value="RI">Rhode Island</option>
		<option value="SC">South Carolina</option>
		<option value="SD">South Dakota</option>
		<option value="TN">Tennessee</option>
		<option value="TX">Texas</option>
		<option value="UT">Utah</option>
		<option value="VT">Vermont</option>
		<option value="VA">Virginia</option>
		<option value="WA">Washington</option>
		<option value="WV">West Virginia</option>
		<option value="WI">Wisconsin</option>
		<option value="WY">Wyoming</option>
	    </select>
	</td>
    </tr>
    <tr>
	<td>
	    PostalCode
	</td>
	<td>
	    <input type="text" name="PostalCode" 
		<?PHP
		    if(isset($PostalCode))
		    {
			echo 'value="'.$PostalCode.'"';
		    }
		?>	    
	    />
	</td>
    </tr>
    <tr>
	<td>
	    Country
	</td>
	<td>
	    <input type="text" name="Country"
		<?PHP
		    if(isset($Country))
		    {
			echo 'value="'.$Country.'"';
		    }
		    else
		    {
			echo 'value="United States"';			
		    }
		    
		?>	 
	    />
	</td>
    </tr>
    <tr height='60'>
	<td>
	</td>
    </tr>
</table>
<table>
    <tr>
	<td>
	    
	</td>
    </tr>
    <tr>
    	<td>
	    Special Information about client:
	</td>
	<td>
	    <textarea rows="0" cols="70" name="specialInfo"><?PHP if(isset($specialInfo))
		    {
			echo $specialInfo;
		    }
		?></textarea>
	</td>
    </tr>
    <tr>
	<td>
	    
	</td>
    </tr>
    <tr>
    	<td>
	    Life Purpose:
	</td>
	<td>
	    <textarea rows="0" cols="70" name="lifePurpose"><?PHP if(isset($lifePurpose))
		    {
			echo $lifePurpose;
		    }
		?></textarea>
	</td>
    </tr>
    <tr>
    	<td>
	    Life School:
	</td>
    	<td>
	    <table>
		<tr>
		    <td align=left>
			<input type="checkbox" name="wisdom" /> Wisdom
		    </td>
		    <td align=left>
			<input type=checkbox name="love" /> Love
		    </td>
		    <td align=left>
			<input type=checkbox name="service" /> Service
		    </td>
		    <td align=left>
			<input type=checkbox name="peace" /> Peace
		    </td>
		</tr>
	    </table>
	</td>	
    </tr>
    <tr>
    	<td>
	    Life Lesson:
	</td>
	<td>
	    <textarea rows="0" cols="70" name="lifeLesson"><?PHP if(isset($lifeLesson))
		    {
			echo $lifeLesson;
		    }
		?></textarea>
	</td>
    </tr>
    <tr>
	<td>
	    
	</td>
    </tr>
    <tr>
    	<td>
	    What is important to the client:
	</td>
	<td>
	    <textarea rows="0" cols="70" name="lifeLesson"><?PHP if(isset($importantToClient))
		    {
			echo $importantToClient;
		    }
		?></textarea>
	</td>
    </tr>
    <tr>
	<td>
	    
	</td>
    </tr>
    <tr>
    	<td>
	    What was their "AHA" moment?
	</td>
	<td>
	    <textarea rows="0" cols="70" name="lifeLesson"><?PHP if(isset($ahaMoment))
		    {
			echo $ahaMoment;
		    }
		?></textarea>
	</td>
    </tr>    
        <tr>
    	<td>
	    Recording Made?
	</td>
    	<td>
	    <table>
		<tr>
		    <td align=left>
			<input type="checkbox" name="recordingbyus" /> By us
		    </td>
		    <td align=left>
			<input type=checkbox name="recordingbyclient" /> By Client
		    </td>
		    <td align=left>
			<input type=checkbox name="norecording" /> No recording
		    </td>
		</tr>
	    </table>
	</td>	
    </tr>
</table>

<table>
    <tr>
	<td>
	    Next step for Client:
	</td>
    </tr>
    <tr>
	<td>
	    <input type="checkbox" name="207"
	    
	    />
		Send Print Kit
	</td>
	<td>
	    <input type=checkbox name="213"
	    />
		Complimentary Session
	</td>
	<td>
	    <input type=checkbox name="215"
	    
	    />
		FHA With Paypal Request
	</td>
	<td>
	    <input type=checkbox name="219"
		
	    />
		Fingerprint With Paypal Request
	</td>
    </tr>
<tr><td><input type="checkbox" name="209" /> Send Gift</td><td><input type=checkbox name="news2" /> Coaching Session</td><td><input type=checkbox name="217" /> FHA Info Only</td><td><input type=checkbox name="221" /> Fingerprint Info Only</td></tr>
<tr><td><input type="checkbox" name="135" /> Send Thank you card</td><td><input type=checkbox name="news2" /> HA Intensive</td><td><input type=checkbox name="news2" /> Family Analysis</td><td><input type=checkbox name="news2" /> Long Term Follow up</td></tr>
<tr><td><input type="checkbox" name="187" /> Print Kit - Sent</td><td><input type=checkbox name="news2" /> HA Yearlong</td><td><input type=checkbox name="news2" /> Couples Analysis</td><td><input type=checkbox name="news2" /> Do not re-contact</td></tr>
<tr><td><input type="checkbox" name="211" /> Gift - Sent</td><td><input type=checkbox name="news2" /> Annual Hand Print Review</td></tr>
<tr><td><input type="checkbox" name="139" /> Thank you card - Sent</td></tr>
<tr><td><input type="checkbox" name="161" /> FHA with Paypal Sent</td><td><input type=checkbox name="news2" /> Fingerprint with Paypal sent</td></tr>
<tr><td><input type="checkbox" name="165" /> FHA without Paypal Sent</td><td><input type=checkbox name="news2" /> Fingerprint without Paypal sent</td></tr>
<tr><td><input type="checkbox" name="197" /> No response to Comp Session:Coaching</td><td><input type=checkbox name="225" /> No response to Comp Session:Other</td></tr>
<tr><td><input type="checkbox" name="223" /> Long Term Followup</td></tr>


<tr><td><input type="submit" value="Submit" class="submit"/></td></tr>
</table>
</td></tr>
</table>
</form>

</body>
</html>