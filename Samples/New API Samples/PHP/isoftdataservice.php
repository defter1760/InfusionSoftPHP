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
    if(isset($ID))
    {
        $query['Id'] = $ID;
    }
    if(isset($fName))
    {
        $query['FirstName'] = '%'.$fName.'%';
    }
    if(isset($lName))
    {
        $query['LastName'] = '%'.$lName.'%';
    }
    if(isset($email))
    {
        $query['Email'] = '%'.$email.'%';
    }
    $contacts = $api->dsQuery('Contact', 1000, 0,$query, $contacts_fields);
##$contacts = $api->dsQuery('Contact', 1000, 0, array('Email' => "%"), $contacts_fields);
   
   
   $count=0;
    if(is_array($contacts))
    {
        foreach ($contacts as $val0)
        {
            $count=$count+1;
        }
    }
    if(is_array($contacts))
    {
        if($count==1)
        {
            foreach ($contacts as $val0)
            {
                $fName = $val0['FirstName'];
                $lName = $val0['LastName'];
                $email = $val0['Email'];
                $StreetAddress1 = $val0['StreetAddress1'];
                $StreetAddress2 = $val0['StreetAddress2'];
                $City = $val0['City'];
                $State = $val0['State'];
                $PostalCode = $val0['PostalCode'];
                $Country = $val0['Country'];
                $phone = $val0['Phone1'];
                $phone2 = $val0['Phone2'];
                $State = $val0['State'];
                $Country = $val0['Country'];
                $Groups = $val0['Groups'];
            }
    #        echo "Narrowed it down to a single bloke!";
        }
    }
#   echo $count;

}
else
{
    echo "Nothing Posted, Nothing to see here.";
}
require('series.php');
function array_search_key( $needle_key, $array ) {
  foreach($array AS $key=>$value){
    if($key == $needle_key) return $value;
    if(is_array($value)){
      if( ($result = array_search_key($needle_key,$value)) !== false)
        return $result;
    }
  }
  return false;
}


if(isset($Groups))
{
    $Group = explode(",",$Groups);
    #print_r($Group);
    foreach($GroupSeries as $groupkey => $groupval)
    {
        $match= array_search_key($groupkey,$Group);
        if($GroupSeries[$match] != 'Group0')
        {
            $$GroupSeries[$match] = 'y';
        }
    }
}
?>