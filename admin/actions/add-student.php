<?php

// fetch all data from input field and chek valid input or not
if ( isset( $_POST['save'] ) ) {
	// assign in all variable null data
	$fname = $lname = $gender = $dob = $blood = $religion = $email = $admissionid = $section = $number = $shortbio = $class = '';


	/**
	 * Remove all tags and scripts and return as a string
	 *
	 * @param [any] $data
	 * @return string
	 */
	function check_input( $data ) {
		$data = trim( $data );
		$data  = stripslashes( $data );
		$data  = htmlspecialchars( $data );
		return $data;
	}


	$fname = check_input( $_POST['fname'] );

	$lname = check_input( $_POST['lname'] );

	$gender = check_input( $_POST['gender'] );

	$dob = check_input( $_POST['dob'] );

	$blood = check_input( $_POST['blood'] );

	$religion = check_input( $_POST['religion'] );

	$email = check_input( $_POST['email'] );

	$admissionid = check_input( $_POST['admissionid'] );

	$section = check_input( $_POST['section'] );

	$number = check_input( $_POST['phone'] );

	$shortbio = check_input( $_POST['shortbio'] );

	$class = check_input( $_POST['class'] );

	$errors = array(); // assign all errors in this array

	// check valid email or not
	if ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$errors[] = 'Please Enter Valid Email.';
	}


	// check valid date or not
	if ( strtotime( $dob ) === false ) {
		$errors[] = 'Your date is not Valid.';
	}

	// for valid year
	$dateparts = explode( '-', $dob );
	$year      = $dateparts[0];
	if ( strlen( $year ) !== 4 ) {
		$errors[] = 'Invalid Your Year Formate';
	}

	// for valid month
	$month = $dateparts[1];
	if ( $month < 1 && $month > 13 ) {
		$errors[] = 'Invalid Your Month formate';
	}

	// for valid day
	$day = $dateparts[2];
	if ( $day < 1 && $day > 33 ) {
		$errors[] = 'Invalid day';
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
		$sql = "INSERT INTO students(fname, lname, gender, dob, blood, religion, email, admissionid, section, shortbio, Phone, class)
    VALUES('{$fname}', '{$lname}', '{$gender}', '{$dob}', '{$blood}', '{$religion}', '{$email}', '{$admissionid}', '{$section}', '{$shortbio}', '{$number}', '{$class}' )";


		$result = mysqli_query( $conn, $sql );
		if ( $result ) {
            header( 'Location: http://localhost/college_project/admin/?content=item2');
		} else {
			echo 'Data are not inserted.';
		}
	}
}
