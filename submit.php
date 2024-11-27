<?php require_once('app/loader.php');
if(isset($_POST['register'])){
       $names = $_POST['names'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       if ($dbConnection->Check("SELECT * FROM users WHERE email like ? ",["$email"])){
        echo "<script>alert('user already exists!');document.location='auth/register.php'</script>";
       } 
       else{
    if($dbConnection->InsertData("INSERT INTO `users` (`names`,`email`,`password`) VALUES (?,?,?)",["$names","$email",hash("sha256","$password")])){
        header("Location: ".SITEROOT."auth/login.php");
            }else{
                echo "failed to save";
            }
        }
    }
function loginUser($email,$password){
    global $dbConnection;
   
    $password = hash("sha256",$password);
    
    if($user = $dbConnection->GetRow("SELECT * FROM users WHERE users.email = ? AND users.password = ? ",["$email","$password"])){
     
        $_SESSION['type'] = $user['role'];
        $_SESSION['userEmail'] = $user['email'];
        $_SESSION['userId'] = $user['id'];
        $_SESSION['userType'] = $user['role'];
        $_SESSION['userPassword'] = "true";
        redirect($email,"true",$user['role']);

    }else{
        echo "<script>alert('Invalid Email or Password.'); document.location = 'auth/login.php';</script>";
    }
}

if(isset($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
 $email = $_POST['email'];
 $password = $_POST['password'];
    
    if($email){
        loginUser($email,$password);
    }else{
        echo "<script>alert('Not Valid Email.'); document.location = 'auth/login.php';</script>";
    }
}




?>