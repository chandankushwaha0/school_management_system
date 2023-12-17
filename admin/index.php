<?php

include_once 'templates/header.php';

include_once 'config.php';

$sql = "SELECT * FROM users";

$result = mysqli_query( $conn, $sql );

if( mysqli_num_rows( $result ) > 0 ) {
    while( $row = mysqli_fetch_assoc( $result ) ) {
        if( isset( $_POST['login'] ) ) {
            $current_email = $_POST['email'];
            $current_password = md5( $_POST['password'] );

            if( $current_email === 'admin@gmail.com' && $current_password == '827ccb0eea8a706c4c34a16891f84e7b' ) {
                session_start();
                $_SESSION['admin'] = $current_email;
                $_SESSION['admin_name'] = 'Admin';
                header( 'Location: http://localhost/college_project/admin/dashboard.php' );
            } else {
                ?>
                <script>
                    alert("Username and Password are not matched!!!");
                </script>
                <?php
            }
                $stored_email = array( $row['email'] );
            if ( is_array( $stored_email ) && ! empty( $stored_email ) ) {
                foreach ( $stored_email as $email ) {
                    if( $email === $current_email ) {
                        $sql2 = "SELECT password FROM users WHERE email = '{$email}'";
                        $stored_password = $row['password'];

                        if( $current_password === $stored_password ) {
                            session_start();
                            $_SESSION['role'] = $row['role'];
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['username'] = $row['email'];
                            header('Location: http://localhost/college_project/admin/dashboard.php');
                            
                        } else {
                            ?>
                            <script>
                                alert('Email and password are not matched!!!');
                            </script>
                            <?php
                        }
                    }
                }
            }

            
        }
    }   
}



?>

<div class="main-login">
    <div class="login-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="" method="POST">
                        <h4>Login</h4>
                        <div class="email my-4">
                            </i><input type="email" name="email" placeholder="Enter Your Email">
                        </div>
                        <div class="email my-4">
                            <input type="password" name="password" placeholder="Enter Your Password">
                        </div>
                        <div>
                            <a href="">Forget Password</a>
                        </div>
                        <div class="">
                            <button class="btn login-btn my-5" type="submit" name="login">Login</button>
                        </div>
                        <div>
                            <p>Don't have an account ? <a href="">Signup now</a></p>
                        </div>
                    </form> 
                </div>

                <div class="col-lg-6 left-login-image">
                <div class="image-container">
                        <img src="images/login.jpg" alt="">
                    <div class="overlay">
                        <p>Education is the most powerful weapon which you can use to change the world.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once "templates/footer.php" ?>
