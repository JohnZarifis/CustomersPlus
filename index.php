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


$sql = "SELECT id, name ,surname,DATE_FORMAT(birthdate,'%d-%m-%Y') as birthdate ,address,phone1,phone2,phone3 FROM customers";


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
													'phone3'=>$row['phone3'],
                                                     
                             );
			}

$customerno = 0;
foreach($MultiDimArray as $result){
    
    $customerno +=1;
    
    }      


$template = $twig->loadTemplate('index.html');  
        echo $template->render(array('username' => $username,
                                     'customerno' =>$customerno,
                                     'res'=>$MultiDimArray,
                                    
                                    ));

?>
