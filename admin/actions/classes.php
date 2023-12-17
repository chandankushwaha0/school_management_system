
<?php

// fetch all data from input field and chek valid input or not
if ( isset( $_POST['save'] ) ) {
	// assign in all variable null data
	$tname = $gender = $time = $email = $address = $classes = $sections = $Phone = '';


	/**
	 * Remove all tags and scripts and return as a string
	 *
	 * @param [any] $data
	 * @return string
	 */
	function check_input( $data ) {
		$data = trim( $data );
		$data = stripslashes( $data );
		$data = htmlspecialchars( $data );
		return $data;
	}

	$tname = check_input( $_POST['tname'] );

	$gender = check_input( $_POST['gender'] );

	$time = check_input( $_POST['time'] );

	$email = check_input( $_POST['email'] );

	$address = check_input( $_POST['address'] );

	$classes = check_input( $_POST['classes'] );

	$sections = check_input( $_POST['sections'] );

    $Phone = check_input( $_POST['Phone'] );

	$errors = array(); // assign all errors in this array


	// check valid email or not
	if ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$errors[] = 'Please Enter Valid Email.';
	}


	// check error field is empty or have some error
	if ( ! empty( $errors ) ) {
		foreach ( $errors as $error ) {
			echo $error;
		}
	}


	// Error field is emtpty the insert valid data
	if ( empty( $errors ) ) {
		include_once 'config.php';

		// print_r( $conn );
		$sql = "INSERT INTO classes(tname, gender, time, email, address, classes, sections, Phone )
    VALUES('{$tname}', '{$gender}', '{$time}', '{$email}', '{$address}', '{$classes}', '{$sections}', '{$Phone}' )";



		$result = mysqli_query( $conn, $sql );
		if ( $result ) {    

			header( 'Location: http://localhost/college_project/admin/?content=item16' );
		} else {
			echo 'Data are not inserted!!!';
		}
	}
}
