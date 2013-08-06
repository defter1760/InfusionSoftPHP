<?php

include("xmlrpc-2.0/lib/xmlrpc.inc");
$client = new xmlrpc_client("https://lq134.infusionsoft.com/api/xmlrpc");
$client->return_type = "phpvals";
$client->setSSLVerifyPeer(FALSE);
$key = "5b67531ca26e2b85911527484e60b3ca";

require('functions.php');
if(!isset($_POST['ID']))
{#wrap everything with a condition::Only ADD if there was not an ID posted##END
	################################################################
	###We only want to run the API script if there is posted data###
	################################################################
	if (isset($_POST['fName'],$_POST['lName'],$_POST['email'])) {
		if ($_POST['fName'] == "" || $_POST['lName'] == "" || $_POST['email'] == "") {
			//ABORT
			echo "<script>alert('You must fill out the required fields!');</script>";
		} else {
			
	###Build a Key-Value Array to store a contact###
	$contact = array(
			"FirstName" => 	$_POST['fName'],
			"LastName" => 	$_POST['lName'],
			"Email" => 		$_POST['email'],
			"Phone1" => 		$_POST['phone'],
			"Phone2" => 		$_POST['phone2'],
				"StreetAddress1" => 		$_POST['StreetAddress1'],
				"StreetAddress2" => 		$_POST['StreetAddress2'],
				"City" => 		$_POST['City'],
				"State" => 		$_POST['State'],
				"PostalCode" => 		$_POST['PostalCode'],
				"Country" => 		$_POST['Country'],
		);
	
	
	###Set up the call###
	$call = new xmlrpcmsg("ContactService.add", array(
			php_xmlrpc_encode($key), 		#The encrypted API key
			php_xmlrpc_encode($contact)		#The contact array
		));
	
	
	###Send the call###
		$result = $client->send($call);
		
	
	
		
	###Check the returned value to see if it was successful and set it to a variable/display the results###
		if(!$result->faultCode()) {
			$conID = $result->value();
			print "Contact added was " . $conID;
			print "<BR>";
		} else {
			print $result->faultCode() . "<BR>";
			print $result->faultString() . "<BR>";
		}
	
	##########################################################
	###Check to see what newsgroups/campaigns were selected###
	##########################################################
		if(isset($_POST['215'])) {
			addGrp($conID,215);
		}
		if(isset($_POST['161'])) {
			addGrp($conID,161);
		}
		if(isset($_POST['165'])) {
			addGrp($conID,165);
		}
		if(isset($_POST['197'])) {
			addGrp($conID,197);
		}
		if(isset($_POST['225'])) {
			addGrp($conID,225);
		}
		if(isset($_POST['223'])) {
			addGrp($conID,223);
		}
	}
	###Finally, lets alert them if they didnt post the required fields###
	$email = $_POST['email'];
	$reason = $_POST['fName']." ".$_POST['lName'];
	optIn($reason, $email);
	} else {
	## echo "<script>alert('Be sure to fill out all required fields.');</script>"; 
	}

}#wrap everything with a condition::Only ADD if there was not an ID posted##END
else
{
	echo 'We posted an ID, nothing done!';
}
?>