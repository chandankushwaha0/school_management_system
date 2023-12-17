<?php

if( isset( $_POST['save'] ) ) {

    $file_name = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];

  

    $folder = 'uploads/' . $file_name;
    // echo $folder;
    
    $images = move_uploaded_file( $tmp_name, $folder );

    include_once 'config.php';

    $sql = "INSERT INTO home_logo( image ) VALUES('{$file_name}') ";

    $result = mysqli_query( $conn, $sql );

    if( $result ) {
        ?>
        <script>
            alert("Logo Inserted Successfully!!!");
        </script>
        <?php
    }

}

?>
