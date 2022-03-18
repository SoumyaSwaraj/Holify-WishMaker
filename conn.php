
<?php
$host = 'localhost';
$user = '';
$pass = '';
$db   = '';
$connection=mysqli_connect($host, $user, $pass, $db);
if(!$connection){
 echo "Database Connection Failed";
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>