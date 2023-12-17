<?php


if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

    $class = $_POST['class_name'];

    //fetch routin subject name

    $array_data = array(
        'sunday'    => array(
            '1st'   => $_POST['1st'],
            '2nd'   => $_POST['2nd'],
            '3rd'   => $_POST['3rd'],
            'break' => $_POST['4th'],
            '4th'   => $_POST['sun_break'],
            '5th'   => $_POST['5th'],
        ),
        'monday'    => array(
            '1st'   => $_POST['1st'],
            '2nd'   => $_POST['2nd'],
            '3rd'   => $_POST['3rd'],
            'break' => $_POST['4th'],
            '4th'   => $_POST['mon_break'],
            '5th'   => $_POST['5th'],
        ),'tuesday' => array(
            '1st'   => $_POST['1st'],
            '2nd'   => $_POST['2nd'],
            '3rd'   => $_POST['3rd'],
            'break' => $_POST['4th'],
            '4th'   => $_POST['tue_break'],
            '5th'   => $_POST['5th'],
        ),
        'wednesday' => array(
            '1st'   => $_POST['1st'],
            '2nd'   => $_POST['2nd'],
            '3rd'   => $_POST['3rd'],
            'break' => $_POST['4th'],
            '4th'   => $_POST['wed_break'],
            '5th'   => $_POST['5th'],
        ),
        'thrusday'  => array(
            '1st'   => $_POST['1st'],
            '2nd'   => $_POST['2nd'],
            '3rd'   => $_POST['3rd'],
            'break' => $_POST['4th'],
            '4th'   => $_POST['thr_break'],
            '5th'   => $_POST['5th'],
        ),
        'friday'    => array(
            '1st'   => $_POST['1st'],
            '2nd'   => $_POST['2nd'],
            '3rd'   => $_POST['3rd'],
            'break' => $_POST['4th'],
            '4th'   => $_POST['fri_break'],
            '5th'   => $_POST['5th'],
        ),
    );



    //including config file

    include_once 'config.php';

    $data_json = json_encode( $array_data );

    $sql = "INSERT INTO routines ( class, routine ) VALUES( '{$class }', '$data_json' )";

    $result = mysqli_query( $conn, $sql );

    if( $result ) {
        header( 'Location: http://localhost/college_project/admin/?content=item6' );
    } else {
        echo 'Data are not inserted!!!';
    }

}

?>
