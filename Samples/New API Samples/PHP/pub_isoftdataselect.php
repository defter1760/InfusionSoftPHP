<?PHP
if (isset($_POST))
{
    require("./src/isdk.php");
    $api = new iSDK;
    $api->cfgCon("lq134","5b67531ca26e2b85911527484e60b3ca");
    
    ##
    #Test the Variables
    ##
    #    $fName = 'Kevin';
    #    $lName = 'Hutchings';
    #    $email = 'khonline@gmail.com';
    ##
    #
    ##
    $contacts_fields = array('Id', 'FirstName','LastName',
                             'Email','StreetAddress1','StreetAddress2','City',
                             'State','PostalCode','Country',
                             'Phone1','Phone2','Groups');
    if(isset($gID))
    {
        $gQuery['Id'] = $gID;
    }
    if(isset($gEmail))
    {
        $gQuery['Email'] = $gEmail;
    }
    //if(isset($email))
    //{
    //    $query['Email'] = '%'.$gEmail.'%';
    //}    
    $contacts = $api->dsQuery('Contact', 1000, 0,$gQuery, $contacts_fields);
##$contacts = $api->dsQuery('Contact', 1000, 0, array('Email' => "%"), $contacts_fields);
   
   #sprint_r($gQuery);
   $count=0;
   //echo $gID;
   //echo '<br><br>';
   //echo $gEmail;
   //echo '<br><br>';
   //print_r($contacts);
   
    if(is_array($contacts))
    {
        //echo $count;
        foreach ($contacts as $val0)
        {
            $count=$count+1;
            
        }
    }
    if(is_array($contacts))
    {
        if($count==1)
        {
            $idmatch = 'Y';
            foreach ($contacts as $val0)
            {
                $single_fName = $val0['FirstName'];
                $single_lName = $val0['LastName'];
                $single_email = $val0['Email'];
                $single_id = $val0['Id'];
            }

        }
    }

}

?>