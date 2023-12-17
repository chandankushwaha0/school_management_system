<?php

// fetch all data from input field and chek valid input or not
if ( isset( $_POST['save'] ) ) {
	// assign in all variable null data
	$name = $email = $password = $role = '';


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


	$name = check_input( $_POST['name'] );

	$email = check_input( $_POST['email'] );

	$password = check_input( md5( $_POST['password'] ) );

	$role = check_input( $_POST['role'] );

	$errors = array(); // assign all errors in this array

	// check valid email or not
	if ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		$errors[] = 'Please Enter Valid Email.';
	}

    if( strlen( $password ) < 8 ) {
        $errors[] = 'Please password must be more than 8 characters';
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
		$sql = "INSERT INTO users(name, email, password, role )
    VALUES('{$name}', '{$email}', '{$password}', '{$role}' )";


		$result = mysqli_query( $conn, $sql );
		if ( $result ) {
            header( 'Location: http://localhost/college_project/admin/?content=item0');
		} else {
			echo 'Data are not inserted.';
		}
	}
}
