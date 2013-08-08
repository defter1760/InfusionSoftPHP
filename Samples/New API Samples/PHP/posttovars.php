<?PHP
## POST Vars for Contact fields and ID
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

if (isset($_POST['phone2'])) $phone2 = $_POST['phone2'];
if (empty($phone2)) unset($phone2);

if (isset($_POST['StreetAddress1'])) $StreetAddress1 = $_POST['StreetAddress1'];
if (empty($StreetAddress1)) unset($StreetAddress1);

if (isset($_POST['StreetAddress2'])) $StreetAddress2 = $_POST['StreetAddress2'];
if (empty($StreetAddress2)) unset($StreetAddress2);

if (isset($_POST['City'])) $City = $_POST['City'];
if (empty($City)) unset($City);

if (isset($_POST['State'])) $State = $_POST['State'];
if (empty($State)) unset($State);
echo "Shitty State:".$State;

if (isset($_POST['PostalCode'])) $PostalCode = $_POST['PostalCode'];
if (empty($PostalCode)) unset($PostalCode);

if (isset($_POST['Country'])) $Country = $_POST['Country'];
if (empty($Country)) unset($Country);

if (isset($_POST['specialInfo'])) $specialInfo = $_POST['specialInfo'];
if (empty($specialInfo)) unset($specialInfo);

if (isset($_POST['lifePurpose'])) $lifePurpose = $_POST['lifePurpose'];
if (empty($lifePurpose)) unset($lifePurpose);

if (isset($_POST['lifeLesson'])) $lifeLesson = $_POST['lifeLesson'];
if (empty($lifeLesson)) unset($lifeLesson);

if (isset($_POST['lifeSchoolWisdom'])) $lifeSchoolWisdom = 'y';
if (empty($lifeSchoolWisdom)) unset($lifeSchoolWisdom);

if (isset($_POST['lifeSchoolLove'])) $lifeSchoolLove  = 'y';
if (empty($lifeSchoolLove)) unset($lifeSchoolLove);

if (isset($_POST['lifeSchoolService'])) $lifeSchoolService  = 'y';
if (empty($lifeSchoolService)) unset($lifeSchoolService);

if (isset($_POST['lifeSchoolPeace'])) $lifeSchoolPeace  = 'y';
if (empty($lifeSchoolPeace)) unset($lifeSchoolPeace);

if (isset($_POST['importantToClient'])) $importantToClient = $_POST['importantToClient'];
if (empty($importantToClient)) unset($importantToClient);

if (isset($_POST['ahaMoment'])) $ahaMoment = $_POST['ahaMoment'];
if (empty($ahaMoment)) unset($ahaMoment);

if (isset($_POST['recordingMade'])) $recordingMade = $_POST['recordingMade'];
if (empty($recordingMade)) unset($recordingMade);

if (isset($_POST['$skypeName'])) $skypeName = $_POST['$skypeName'];
if (empty($skypeName)) unset($skypeName);


?>