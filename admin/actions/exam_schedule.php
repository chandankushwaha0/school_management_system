<?php


if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

    $class = $_POST['class_name'];
    $exam_time = $_POST['exam-time'];

    //fetch routin subject name

    $array_data = array(
        'date'    => array(
            $_POST['date1'],
            $_POST['date2'],
            $_POST['date3'],
            $_POST['date4'],
            $_POST['date5'],
        ),
        'subject'    => array(
            $_POST['sub1'],
            $_POST['sub2'],
            $_POST['sub3'],
            $_POST['sub4'],
            $_POST['sub5'],
        ),
    );



    //including config file

    include_once 'config.php';

    $data_json = json_encode( $array_data );

    $sql = "INSERT INTO exam_routine ( class, schedule, time ) VALUES( '{$class }', '$data_json', '{$exam_time}' )";

    $result = mysqli_query( $conn, $sql );

    if( $result ) {
        header( 'Location: http://localhost/college_project/admin/?content=item18' );
    } else {
        echo 'Data are not inserted!!!';
    }

}

?>
