<?php
require_once ("includes/configs.php");
require_once ("includes/session.php");
require_once("includes/funcs.php");
require_once("includes/database.php");

if (!$session->is_logged_in()) { redirect_to("login.php"); }
$username = $_SESSION['user_name'];
$userid = $_SESSION['user_id'];

if (isset($_GET['id'])){
$id = $_GET['id'];
$sql = " DELETE FROM CUSTOMERS WHERE id = {$id}";
$database->query($sql);
}


if (isset($_POST['save'])) {
        # Save-button was clicked
        //header( 'Location: index.php') ;
 echo "<pre>";
print_r($_POST);
echo "</pre>";
//$name = htmlentities($_POST['name']);
$name = mysql_real_escape_string($_POST['name']);
$surname = mysql_real_escape_string($_POST['surname']);
$birthdate = $_POST['birthdate'];
$address = mysql_real_escape_string($_POST['address']);
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$email = mysql_real_escape_string($_POST['email']);
$facebook = mysql_real_escape_string($_POST['facebook']);
$gender = mysql_real_escape_string($_POST['gender']);
$categories = mysql_real_escape_string($_POST['categories']);
$comments = mysql_real_escape_string($_POST['comments']);
$region = mysql_real_escape_string($_POST['region']);
$ContactPerson = mysql_real_escape_string($_POST['ContactPerson']);
$advChannel = mysql_real_escape_string($_POST['advChannel']);
$profession = mysql_real_escape_string($_POST['profession']);
$zipcode = mysql_real_escape_string($_POST['zipcode']);
$birthdate = preg_replace('#(\d{2})-(\d{2})-(\d{4})#', '$3-$2-$1', $birthdate);
   
    

//if (isset($_POST['id']) ) {
if (empty($_POST['id']) ) {

 $sql =   "insert into customers(name, surname, birthdate,"
             ." address, phone1, phone2, email, gender, "
             ." categories, comments, facebook, region, ContactPerson, advChannel,  profession, zipcode ) VALUES  "
			 ."  ('{$name}'  , '{$surname}', '{$birthdate}' , '{$address}',   '{$phone1}', '{$phone2}'   ,   "
			 ."   '{$email}', '{$gender}' , '{$categories}', '{$comments}' ,   "
			 ."    '{$facebook}'   ,   '{$region}' , '{$ContactPerson}'  , '{$advChannel}'  , '{$profession}' , '{$zipcode}' ) ";
//            
//print($sql)	;
$database->query($sql);

}
else{
     $id =  $_POST['id'];
    $sql = "update customers set  name = '{$name}', surname = '{$surname}' , birthdate = '{$birthdate}' ,  address =  '{$address}' ,   "
	." phone1=  '{$phone1}', phone2 =   '{$phone2}' ,  email =  '{$email}' ,  gender =  '{$gender}' ,  facebook = '{$facebook}' ,  region = '{$region}' ,  ContactPerson = '{$ContactPerson}' , "
	." advChannel = '{$advChannel}' ,  categories =  '{$categories}' , comments = '{$comments}' , profession = '{$profession}',  zipcode =  '{$zipcode}'   "
	." where id = {$id}";
	print($sql)	;
    $database->query($sql);
	   }
}
 header( 'Location: index.php') ; 