<?php
//session_start();

require_once('dbconfig.php');  //include 'dbconnect.php'
$conn = mysqli_connect("localhost", "root", "", "database", "3306", "ini_get('mysqli.default_socket')");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $typeofuser = $_POST['usertype'];

// To protect MySQL injection  )

//$username = stripslashes($username);
//$password = stripslashes($password);


//$username = mysqli_real_escape_string($conn,$username);
//$password = mysqli_real_escape_string($conn,$password);

    $encpass = md5($password);
    // TO server side check wheter the the login inputs are empty or not

    //If empty .....
    if (empty($username) || empty($encpass)) {
        echo "<font color='red'>Username and Password  have to be filled</font>";
    } else { // This code will be excuted


        $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_name = '$username' AND user_password='$encpass' AND user_id = '$typeofuser'");
        $stmt->execute(array(":user_name" => $username));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();
        if ($row['user_password'] == $encpass) {



            if ($row['user_id'] == '2') {
                header('Location: studenthome.html');

            } else if ($row['user_id'] == '1') {

                header('Location: admin.html');
            }
            

            echo "ok"; // log in
        } else {
            echo "Check your category, user or password!"; // wrong details
        }

    }
}

?>