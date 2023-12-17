<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
    <style>
        .edit-routine{
    /* display: none; */
    position: absolute;
    overflow-y: hidden;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background-color: rgb(22, 2, 2);
    padding: 0px 100px;
    z-index: 9999;
}
.edit-routine-area td{
    background: #e0e6e6;
}
.edit-routine-area input{
    width: 90%;
    padding: 11px 5px;
    background: #e0e6e6;
    border: none;
}
.edit-routine-area{
    color: #000;
    background: #fcfcfc;
    border-radius: 10px;
}

    </style>
  </head>
  <body>
    <?php
    include_once 'config.php';
    $id = $_GET['id'];
    // Retrieve the data from the database
    $sql = "SELECT * FROM routines WHERE id = $id ";
    $result = mysqli_query($conn, $sql);
    
    if( mysqli_num_rows( $result ) > 0 ) {
        $i = 1;
        while( $row = mysqli_fetch_assoc( $result ) ) {
            $datas = $row['routine'];
            $deconde_data = json_decode( $datas );
    ?>
  <div class="edit-routine">
    <div class="edit-routine-area p-3">
        <form action="" method="POST">
            <div class="py-3">
                <h5 class="text-center">Edit Class Routine</h5>
                <label for="">Enter class:</label>
                <input type="text" name="class_name" value="<?php echo $row['class']; ?>" required><br>
            </div>

            <div>
                <table border="1" cellspacing="0" cellpadding="9">
                    <tr class="bg-info">
                        <th>Days</th>
                        <th>1st period</th>
                        <th>2nd period</th>
                        <th>3rd period</th>
                        <th>Break</th>
                        <th>4th period</th>
                        <th>5th period</th>
                    </tr>
                    <?php
                     foreach ($deconde_data as $day => $schedule) {
                    ?>
                    <tr>
                        <td><?php echo $day; ?></td>
                        <td><input type="text" name="1st" value="<?php echo $schedule->{'1st'}; ?>"></td>
                        <td><input type="text" name="2nd" value="<?php echo $schedule->{'2nd'}; ?>"></td>
                        <td><input type="text" name="3rd" value="<?php echo $schedule->{'3rd'}; ?>"></td>
                        <td><input type="text" name="tue_break" value="<?php echo $schedule->{'break'}; ?>"></td>
                        <td><input type="text" name="4th" value="<?php echo $schedule->{'4th'}; ?>"></td>
                        <td><input type="text" name="5th" value="<?php echo $schedule->{'5th'}; ?>"></td>
                    </tr>

                        
                    <?php
                     }
                    ?>
                    
                </table>
                <?php 
        }
    }
    ?>
            </div>
                <button class="btn btn-primary my-3 px-5" type="submit">Update</button>

                <h3 class="text-primary text-center text-italic message"></h3>
        </form>
    </div>

</div>


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

    $sql = "UPDATE routines SET class = '{$class }', routine = '$data_json' WHERE id = $id";

    $result = mysqli_query( $conn, $sql );

    if( $result ) {
        ?>
        <script>
            const message =document.querySelector('.message');
            message.textContent = 'Update successfully!!!';
            setTimeout(() => {
                message.textContent = '';
            }, 3000);
        </script>
        <?php
    } else {
        echo 'Data are not inserted!!!';
    }

}

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>





