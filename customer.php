<?php
require_once ("includes/configs.php");
require_once ("includes/session.php");
require_once("includes/funcs.php");
require_once("includes/database.php");

if (!$session->is_logged_in()) { redirect_to("login.php"); }
$username = $_SESSION['user_name'];
$sessionid = $_SESSION['user_id'];
if (isset($_GET['id'])){
$id = $_GET['id'];
$sql = " SELECT id, name ,surname,DATE_FORMAT(birthdate,'%d-%m-%Y') as birthdate ,address,phone1,phone2,email,gender, categories "
         ." , comments "
		  ." , facebook,region,profession,zipcode, advChannel, ContactPerson  "
        . " FROM customers p "
        . " WHERE p.id = {$id}";

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
                         $email=$row['email'];
						 $gender=$row['gender'];
						 $categories = $row['categories'];
						 $facebook = $row['facebook'];
						 $region = $row['region'];
						 $profession = $row['profession'];
						 $zipcode = $row['zipcode'];
						 $advChannel = $row['advChannel'];
						  $ContactPerson = $row['ContactPerson'];
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
                                     'email' =>$email,
									 'gender' => $gender,
									'categories' => $categories,
									'facebook' => $facebook,
									'region' => $region,
									'profession' => $profession,
									'zipcode' => $zipcode,
									'comments' => $comments,
									'ContactPerson' => $ContactPerson,
									'advChannel' => $advChannel,
									
                                    ));

}
else{
$template = $twig->loadTemplate('customer.html');  
        echo $template->render(array('username' => $username,                                     
                                     
                                    
                                    ));


}

?>





