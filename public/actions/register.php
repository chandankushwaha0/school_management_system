<?php
    if(isset($_POST['submit'])){
      include("config.php");
      //fetch the data from from one by one and keep secure, put in related variable
      $mname          = mysqli_real_escape_string( $conn, $_POST['mname']);
      $lname          = mysqli_real_escape_string( $conn, $_POST['lname']);
      $phnumber       = mysqli_real_escape_string( $conn, $_POST['pnumber']);
      $fathername     = mysqli_real_escape_string( $conn, $_POST['fathername']);
      $email          = mysqli_real_escape_string( $conn, $_POST['email']);
      $pass           = mysqli_real_escape_string( $conn, md5($_POST['pass']));
      $cources        = mysqli_real_escape_string( $conn, $_POST['cource']);
      $fname          = mysqli_real_escape_string( $conn, $_POST['fname']);
      $gender         = mysqli_real_escape_string( $conn, $_POST['gender']);
      $paddress       = mysqli_real_escape_string( $conn, $_POST['paddress']);
      //inserted data into new_register_student table
      $sql = "INSERT INTO new_register_student( fname, mname, lname, email, password, father_name, phnumber, cources, gender, per_address )
      VALUES( '{$fname}', '{$mname}', '{$lname}', '{$email}', '{$pass}', '{$fathername}', '{$phnumber}', '{$cources}', '{$gender}', '{$paddress}' )";

      $result = mysqli_query( $conn, $sql );
      
      if( $result ) {
        header("Location:http://localhost/sms/templates/thankyou.php");
      } else {
        echo "<div class='alert alert-danger'>Your data is not Submitted due to some error!!!</div>";
      }

    }
    
?>

