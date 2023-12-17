<?php

// fetch all data from input field and chek valid input or not
if ( isset( $_POST['save'] ) ) {
	// assign in all variable null data
	$fname = $lname = $gender = $religion = $email = $address = $number = $shortbio = '';


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

	$fname = check_input( $_POST['fname'] );

	$lname = check_input( $_POST['lname'] );

	$gender = check_input( $_POST['gender'] );

	$religion = check_input( $_POST['religions'] );

	$email = check_input( $_POST['email'] );

	$address = check_input( $_POST['address'] );

	$number = check_input( $_POST['Phone'] );

	$shortbio = check_input( $_POST['shortbio'] );

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
		$sql = "INSERT INTO teachers(fname, lname, gender, religions, email, address, phone, shortbio )
    VALUES('{$fname}', '{$lname}', '{$gender}', '{$religion}', '{$email}', '{$address}', '{$number}', '{$shortbio}' )";



		$result = mysqli_query( $conn, $sql );
		if ( $result ) {    

			header( 'Location: http://localhost/college_project/admin/?content=item4' );
		} else {
			echo 'Data are not inserted!!!';
		}
	}
}
