<?php
require_once ("includes/configs.php");
require_once ("includes/session.php");
require_once("includes/funcs.php");
require_once("includes/database.php");

if (!$session->is_logged_in()) { redirect_to("login.php"); }

$username = $_SESSION['user_name'];
$id = $_SESSION['user_id'];
//$psw = $_SESSION['user_psw'];
//print_r($_SESSION); 


//$sql = "SELECT id, name ,surname,DATE_FORMAT(birthdate,'%d-%m-%Y') as birthdate ,address,phone1,phone2,phone3, gender FROM customers";

$sql = "SELECT id, name ,surname,DATE_FORMAT(birthdate,'%d-%m-%Y') as birthdate ,address,phone1,phone2,email, gender , "
          ." IF(DATE_FORMAT(birthDate,'%m-%d') = DATE_FORMAT(NOW(),'%m-%d'), 1, 0) as bday, "
          ." IF(GENDER = 'Γυναίκα',1,0) as isfemale, "
          ." IF(GENDER = 'Γυναίκα',0,1) as ismale "
          ." FROM customers ;";

$result_set = $database->query($sql);
$MultiDimArray = array();
while ($row = mysql_fetch_assoc($result_set)) 
			{
                         $MultiDimArray[] = array ( 'id' => $row['id'],
                                                    'name' => $row['name'],
                                                    'surname'=>$row['surname'],
                                                    'birthdate'=>$row['birthdate'],
                                                    'address'=>$row['address'],
                                                    'phone1'=>$row['phone1'],
                                                    'phone2'=>$row['phone2'],
													'email'=>$row['email'],
													'gender'=>$row['gender'],
													'bday'=>$row['bday'],
													'isfemale' => $row['isfemale'],
                                                    'ismale' => $row['ismale'],
                             );
			}

$customerno = 0;
$bdayno = 0;
$maleno = 0;
$femaleno = 0;

foreach($MultiDimArray as $result){
    $bdayno = $bdayno + $result['bday'];
    $customerno +=1;
	$maleno = $maleno + $result['ismale'];
	$femaleno = $femaleno + $result['isfemale'];
	
    
    }      


$template = $twig->loadTemplate('index.html');  
        echo $template->render(array('username' => $username,
                                     'customerno' =>$customerno,
									 'bdayno' => $bdayno,
						              'maleno' => $maleno,
									  'femaleno' => $femaleno,
                                     'res'=>$MultiDimArray,
                                    
                                    ));

?>
