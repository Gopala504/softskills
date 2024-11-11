<?
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','gopal');
if($conn->connect_error){
    die('Connection Faild :'.$conn->connect_error);

}else{
   $stmt = $conn->prepare("insert into sai(username,email,password)values(?,?,?)");
   $stmt->bind_param("sss",$username,$email,$password);
   $stmt->execute();
   echo"sign-up successfully....";
   $stmt->close();
   $conn->close(); 
}
?>