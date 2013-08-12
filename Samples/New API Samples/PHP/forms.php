<html>
<?PHP
require('head.php');
require('posttovars.php');

    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
?>
<body>



<table style="border:1px solid black;">
    <tr>
	<td>
	
	    <h1>Nadia Tumas -> Infusionsoft API
	    </h1>
	    <table>
		<tr>
		    <td>
				    If this is a new client, fill out this form. <br>Or if this is an existing client, click <a href=lookup.php>Here.</a> <br>Not sure? Click <a href=lookup.php>Here.</a> 

		<?PHP
		#print_r($_POST);
		    require('isoftdataservice.php');
		    require('ContactService-Sample.php');
		    require('mySQLquery.php');
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
			StreetAddress1
		    </td>
		    <td>
			<input type="text" name="StreetAddress1" 
			    <?PHP
				if(isset($_POST['StreetAddress1']))
				{
				    echo 'value="'.$_POST['StreetAddress1'].'"';
				}
				else
				{
				    if(isset($StreetAddress1))
				    {
					echo 'value="'.$StreetAddress1.'"';
				    }
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
				if(isset($_POST['StreetAddress2']))
				{
				    echo 'value="'.$_POST['StreetAddress2'].'"';
				}
				else
				{
				    if(isset($StreetAddress2))
				    {
					echo 'value="'.$StreetAddress2.'"';
				    }
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
				if(isset($_POST['City']))
				{
				    echo 'value="'.$_POST['City'].'"';
				}
				else
				{
				    if(isset($City))
				    {
					echo 'value="'.$City.'"';
				    }
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
			<input type="text" name="State" 
			    <?PHP
				if(isset($_POST['State']))
				{
				    echo 'value="'.$_POST['State'].'"';
				}
				else
				{
				    if(isset($State))
				    {
					echo 'value="'.$State.'"';
				    }
				}
			    ?>	    
			/>
	    
		    </td>
		</tr>
		<tr>
		    <td>
			PostalCode
		    </td>
		    <td>
			<input type="text" name="PostalCode" 
			    <?PHP
				if(isset($_POST['PostalCode']))
				{
				    echo 'value="'.$_POST['PostalCode'].'"';
				}
	    			else
				{
				    if(isset($PostalCode))
				    {
					echo 'value="'.$PostalCode.'"';
				    }
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
				if(isset($_POST['phone']))
				{
				    echo 'value="'.$_POST['phone'].'"';
				}
	    			else
				{
				    if(isset($phone))
				    {
					echo 'value="'.$phone.'"';
				    }
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
				if(isset($_POST['phone2']))
				{
				    echo 'value="'.$_POST['phone2'].'"';
				}
	    			else
				{
				    if(isset($phone2))
				    {
					echo 'value="'.$phone2.'"';
				    }
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
			<table style="border-collapse:collapse;" style="border:1px solid grey;">
			    <tr align=left style="border:1px solid grey;">
				<td >
				    Wisdom<br><br>
				</td>
				<td >
				    Y<input type="radio" name="lifeSchoolWisdom" value="y"
					<?PHP if(isset($lifeSchoolWisdom))
					{
					
					    if($lifeSchoolWisdom == 'y')
					    {
						echo 'checked';    
					    }
					}
					?>
				    />
				    <br>N<input type="radio" name="lifeSchoolWisdom" value="n"
					<?PHP if(isset($lifeSchoolWisdom))
					{
					
					    if($lifeSchoolWisdom == 'n')
					    {
						echo 'checked';    
					    }
					}
					?>
				    />
				</td>
			    </tr>
			    <tr align=left style="border:1px solid #F5F5F5;">
				<td align=left>
				    Love<br><br>
				</td>
				<td align=left >
				    Y<input type="radio" name="lifeSchoolLove" value="y"
					<?PHP if(isset($lifeSchoolLove))
					{
					
					    if($lifeSchoolLove == 'y')
					    {
						echo 'checked';    
					    }
					}
					?>
				    />
				    <br>N<input type="radio" name="lifeSchoolLove" value="n"
					<?PHP if(isset($lifeSchoolLove))
					{
					
					    if($lifeSchoolLove == 'n')
					    {
						echo 'checked';    
					    }
					}
					?>
				    /> 
				</td>
			    </tr>
			    <tr align=left style="border:1px solid grey;">
				<td align=left>
				    Service<br><br>
				</td>
				<td>
				    Y<input type="radio" name="lifeSchoolService" value="y"
					<?PHP if(isset($lifeSchoolService))
					{
					
					    if($lifeSchoolService == 'y')
					    {
						echo 'checked';    
					    }
					}
					?>
				    />
				    <br>N<input type="radio" name="lifeSchoolService" value="n"
					<?PHP if(isset($lifeSchoolService))
					{
					
					    if($lifeSchoolService == 'n')
					    {
						echo 'checked';    
					    }
					}
					?>
				    />
				</td>
			    </tr>
			    <tr align=left style="border:1px solid #F5F5F5;">
				<td align=left>
				    Peace<br><br>
				</td>
				<td>
				    Y<input type="radio" name="lifeSchoolPeace" value="y"
					<?PHP if(isset($lifeSchoolPeace))
					{
					
					    if($lifeSchoolPeace == 'y')
					    {
						echo 'checked';    
					    }
					}
					?>
				    />
				    <br>N<input type="radio" name="lifeSchoolPeace" value="n"
					<?PHP if(isset($lifeSchoolPeace))
					{
					
					    if($lifeSchoolPeace == 'n')
					    {
						echo 'checked';    
					    }
					}
					?>
				    />
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
			<textarea rows="0" cols="70" name="importantToClient"><?PHP if(isset($importantToClient))
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
			<textarea rows="0" cols="70" name="ahaMoment"><?PHP if(isset($ahaMoment))
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
	    <!--<table border=1>
		<tr>
		    <td>
			<table >
			    <tr>
				<td>
				    <bold>Actions, We need to:</bold>
				</td>
			    </tr>
			</table>
			<table border=1>
			    <tr>
				<th>
				    Send
				</td>
				<th>
				    Follow up
				</th> 
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>Print Kit
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>Print Kit Sent
							    
				</td>
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>Gift
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>Gift Sent
							    
				</td>
			    </tr>
			</table>
	    	    </td>
		    <td>
			<table >
			    <tr>
				<td>
				    <bold>2nd Actions, We need to:</bold>
				</td>
			    </tr>
			</table>
			<table border=1>
			    <tr>
				<th>
				    Send
				</td>
				<th>
				    Follow up
				</th> 
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info Sent
							    
				</td>
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal Sent
							    
				</td>
			    </tr>
			</table>
	    	    </td>
		</tr>
		<tr>
		<td>
			<table >
			    <tr>
				<td>
				    <bold>3rd Actions, We need to:</bold>
				</td>
			    </tr>
			</table>
			<table border=1>
			    <tr>
				<th>
				    Send
				</td>
				<th>
				    Follow up
				</th> 
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info Sent
							    
				</td>
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal Sent
							    
				</td>
			    </tr>
			</table>
	    	    </td>
		    <td>
			<table >
			    <tr>
				<td>
				    <bold>4th Actions, We need to:</bold>
				</td>
			    </tr>
			</table>
			<table border=1>
			    <tr>
				<th>
				    Send
				</td>
				<th>
				    Follow up
				</th> 
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info Sent
							    
				</td>
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal Sent
							    
				</td>
			    </tr>
			</table>
	    	    </td>
		</tr>
		<tr>
		<td>
			<table >
			    <tr>
				<td>
				    <bold>5th Actions, We need to:</bold>
				</td>
			    </tr>
			</table>
			<table border=1>
			    <tr>
				<th>
				    Send
				</td>
				<th>
				    Follow up
				</th> 
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info Sent
							    
				</td>
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal Sent
							    
				</td>
			    </tr>
			</table>
	    	    </td>
		    <td>
			<table >
			    <tr>
				<td>
				    <bold>6th Actions, We need to:</bold>
				</td>
			    </tr>
			</table>
			<table border=1>
			    <tr>
				<th>
				    Send
				</td>
				<th>
				    Follow up
				</th> 
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info Sent
							    
				</td>
			    </tr>
			    <tr>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal
							    
				</td>
				<td>
				    Y:<input type="radio" name="_test_207" value="y"/>
				    N:<input type="radio" name="_test_207" value="n"/>FHA Info w/Paypal Sent
							    
				</td>
			    </tr>
			</table>
	    	    </td>
		</tr>

	    </table>-->
	    <table>
		<tr>
		    <td>
			<bold>Next step for Client:</bold>
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
		<tr>
		    <td>
			<input type="checkbox" name="209" /> Send Gift
		    </td>
		    <td>
			<input type=checkbox name="news2" /> Coaching Session
		    </td>
		    <td>
			<input type=checkbox name="217" /> FHA Info Only
		    </td>
		    <td>
			<input type=checkbox name="221" /> Fingerprint Info Only
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="135" /> Send Thank you card
		    </td>
		    <td>
			<input type=checkbox name="news2" /> HA Intensive
		    </td>
		    <td>
			<input type=checkbox name="news2" /> Family Analysis
		    </td>
		    <td>
			<input type=checkbox name="news2" /> Long Term Follow up
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="187" /> Print Kit - Sent
		    </td>
		    <td>
			<input type=checkbox name="news2" /> HA Yearlong
		    </td>
		    <td>
			<input type=checkbox name="news2" /> Couples Analysis
		    </td>
		    <td>
			<input type=checkbox name="news2" /> Do not re-contact
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="211" /> Gift - Sent
		    </td>
		    <td>
			<input type=checkbox name="news2" /> Annual Hand Print Review
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="139" /> Thank you card - Sent
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="161" /> FHA with Paypal Sent
		    </td>
		    <td>
			<input type=checkbox name="news2" /> Fingerprint with Paypal sent
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="165" /> FHA without Paypal Sent
		    </td>
		    <td>
			<input type=checkbox name="news2" /> Fingerprint without Paypal sent
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="197" /> No response to Comp Session:Coaching
		    </td>
		    <td>
			<input type=checkbox name="225" /> No response to Comp Session:Other
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="223" /> Long Term Followup
		    </td>
		</tr>
		<tr>
		    <td>
			<bold>Binders:
			</bold>
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="227" /> Binder 10
		    </td>
		    <td>
			<input type="checkbox" name="229" /> Binder 09
		    </td>
		    <td>
			<input type="checkbox" name="231" /> Binder 08
		    </td>
		    <td>
			<input type="checkbox" name="233" /> Binder 07
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="235" /> Binder 06
		    </td>
		    <td>
			<input type="checkbox" name="237" /> Binder 05
		    </td>
		    <td>
			<input type="checkbox" name="239" /> Binder 04
		    </td>
		    <td>
			<input type="checkbox" name="241" /> Binder 03
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="checkbox" name="243" /> Binder 02
		    </td>
		    <td>
			<input type="checkbox" name="245" /> Binder 01
		    </td>
		</tr>
		<tr>
		    <td>
			<input type="submit" value="Submit" class="submit"/>
		    </td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
</form>
<table>
    <tr>
	<td>
	   <?PHP
		echo '<iframe seamless=seamless src="./blandfileupload.php?id='.$ID.'" height="800" width="1300" ></iframe>';
	    ?>
	</td>
    </tr>
</table>
<table>
    <tr>
	<td>
	   <?PHP
		echo '<iframe seamless=seamless src="./recordingfileupload.php?id='.$ID.'" height="800" width="1300" ></iframe>';
	    ?>
	</td>
    </tr>
</table>
</body>
</html>