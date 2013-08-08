<?PHP
require("../../../src/isdk.php");
$api = new iSDK;
$api->cfgCon("lq134","5b67531ca26e2b85911527484e60b3ca");


$user_fields = array('Id', 'FirstName','LastName', 'Email');

$users = $api->dsQuery('User', 1000, 0, array('Email' => "%"), $user_fields);

echo "<pre>";
print_r($users);
echo "</pre>";
?>