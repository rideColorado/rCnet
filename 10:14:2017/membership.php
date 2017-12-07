<?PHP

require 'Mysql.php';

class Membership {
    
    function validate_user($email, $password) {
        $mysql = New Mysql();
        $ensure_credentials = $mysql->verify_Email_and_Password($email,$password);
    }                                 
    
    if($ensure_credentials) {
        $_SESSION['status'] = 'authorized';
        header("location: index.php");
    }    
     
    else return "Please enter a correct email and password.";
    }
}
?>