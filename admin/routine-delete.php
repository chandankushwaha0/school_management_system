<?php 
$id = $_GET['id'];

include_once 'config.php';
 $sql = "DELETE FROM routines WHERE id = $id ";

 $result = mysqli_query( $conn, $sql ) ;
    if( $result ) {
        header( 'Location: http://localhost/college_project/admin/?content=item6');
    } else {
        echo "Not Deleted";
    }
 
