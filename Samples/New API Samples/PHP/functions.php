<?PHP

###########################################
###Our Function to add people to a group###
###########################################


function optIn($reason, $email)
	{
		global $client, $key;
		$call = new xmlrpcmsg("APIEmailService.optIn", array(
			php_xmlrpc_encode($key), 		#The encrypted API key
			php_xmlrpc_encode($email),		#The contact ID
			php_xmlrpc_encode($reason),		#The Group ID
		));
		$result = $client->send($call);
		if(!$result->faultCode()) {
			print "Email Opted in ";
			print "<BR>";
		} else {
			print $result->faultCode() . "<BR>";
			print $result->faultString() . "<BR>";
		}
	}

function addGrp($CID, $GID)
	{
	###Set up global variables###
		global $client, $key;
	###Set up the call to add to the group###
		$call = new xmlrpcmsg("ContactService.addToGroup", array(
			php_xmlrpc_encode($key), 		#The encrypted API key
			php_xmlrpc_encode($CID),		#The contact ID
			php_xmlrpc_encode($GID),		#The Group ID
		));
	###Send the call###
		$result = $client->send($call);
	
		if(!$result->faultCode()) {
			print "Contact added to group " . $GID;
			print "<BR>";
		} else {
			print $result->faultCode() . "<BR>";
			print $result->faultString() . "<BR>";
		}
	}

##############################################
###Our Function to add people to a campaign###
##############################################
function addCamp($CID, $CMP)
	{
	###Set up global variables###
		global $client, $key;
		
	###Set up the call to add to the campaign###
		$call = new xmlrpcmsg("ContactService.addToCampaign", array(
			php_xmlrpc_encode($key), 		#The encrypted API key
			php_xmlrpc_encode($CID),		#The contact ID
			php_xmlrpc_encode($CMP),		#The Campaign ID
		));
	###Send the call###
		$result = $client->send($call);
	
		if(!$result->faultCode()) {
			print "Contact added to Campaign " . $CMP;
			print "<BR>";
		} else {
			print $result->faultCode() . "<BR>";
			print $result->faultString() . "<BR>";
		}
	}


?>