<?PHP

if (isset($_POST['ID'])) $ID = $_POST['ID'];
if (empty($ID)) unset($ID);

if (isset($_POST['fName'])) $fName = $_POST['fName'];
if (empty($fName)) unset($fName);

if (isset($_POST['lName'])) $lName = $_POST['lName'];
if (empty($lName)) unset($lName);

if (isset($_POST['email'])) $email = $_POST['email'];
if (empty($email)) unset($email);

if (isset($_POST['phone'])) $phone = $_POST['phone'];
if (empty($phone)) unset($phone);

if (isset($_POST['StreetAddress1'])) $StreetAddress1 = $_POST['StreetAddress1'];
if (empty($StreetAddress1)) unset($StreetAddress1);

if (isset($_POST['StreetAddress2'])) $StreetAddress2 = $_POST['StreetAddress2'];
if (empty($StreetAddress2)) unset($StreetAddress2);

if (isset($_POST['City'])) $City = $_POST['City'];
if (empty($City)) unset($City);

if (isset($_POST['State'])) $State = $_POST['State'];
if (empty($State)) unset($State);

if (isset($_POST['PostalCode'])) $PostalCode = $_POST['PostalCode'];
if (empty($PostalCode)) unset($PostalCode);

if (isset($_POST['Country'])) $Country = $_POST['Country'];
if (empty($Country)) unset($Country);
?>