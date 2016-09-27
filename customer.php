<?php
require_once ("includes/configs.php");
require_once ("includes/session.php");
require_once("includes/funcs.php");
require_once("includes/database.php");

if (!$session->is_logged_in()) { redirect_to("login.php"); }
$username = $_SESSION['user_name'];
$id = $_SESSION['user_id'];
if (isset($_GET['id'])){
$amka = $_GET['id'];
$sql = " SELECT id, name ,surname,DATE_FORMAT(birthdate,'%d-%m-%Y') as birthdate ,address,phone1,phone2,phone3,height,weight,bodyfat,measurments, categories "
         ." ,alcohol,alergies,smoking,diseases, comments "
        . "FROM customers p "
        . "WHERE p.id = {$id}";

//print_r($sql); // for debugging
//print_r($username);
//print_r($id);

$result_set = $database->query($sql);
while ($row = mysql_fetch_assoc($result_set)) 
			{
                         $id = $row['id'];                                               
                         $name = $row['name'];
                         $surname = $row['surname'];
                         $birthdate = $row['birthdate'];
                         $address= $row['address'];
                         $phone1 =$row['phone1'];
                         $phone2= $row['phone2'];
                         $phone3=$row['phone3'];
                         $height = $row['height'];
                         $weight = $row['weight'];
                         $bodyfat = $row['bodyfat'];
                         $measurments = $row['measurments'];
						 $categories = $row['categories'];
						 $alcohol = $row['alcohol'];
						 $alergies = $row['alergies'];
						 $smoking = $row['smoking'];
						 $diseases = $row['diseases'];
						 $comments = $row['comments'];
						 
			}
//echo($name);
//print_r($surname);
//print_r($birthdate);
        $template = $twig->loadTemplate('customer.html');  
        echo $template->render(array('username' => $username,                                     
                                     'id'=>$id,
                                     'name'=>$name,
                                     'surname'=>$surname,
									 'birthdate'=>$birthdate,
                                     'address'=>$address,
                                     'phone1'=>$phone1,
                                     'phone2' =>$phone2,
                                     'phone3' =>$phone3,
                                     'height' =>$height,
                                    'weight'=>$weight,
                                    'bodyfat'=>$bodyfat,
                                    'measurments'=>$measurments,
									'categories' => $categories,
									'alcohol' => $alcohol,
									'alergies' => $alergies,
									'smoking' => $smoking,
									'diseases' => $diseases,
									'comments' => $comments,
                                    ));

}
else{
$template = $twig->loadTemplate('customer.html');  
        echo $template->render(array('username' => $username,                                     
                                     
                                    
                                    ));


}

?>





