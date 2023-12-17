<div class="container-fluid">
    <?php
    if( isset( $_SESSION['admin'] ) ) {
    ?>
        <button class="add-exam-routine btn btn-primary">Add Exam Routine</button>
    <?php } ?>


    <?php

    include_once 'config.php';
    
    // Retrieve the data from the database
    $sql = "SELECT * FROM exam_routine";
    $result = mysqli_query($conn, $sql);
    
    if( mysqli_num_rows( $result ) > 0 ) {
        $i = 1;
        while( $row = mysqli_fetch_assoc( $result ) ) {
            $datas = $row['schedule'];
            $deconde_data = json_decode( $datas );
            
    ?>
    <div class="routine-list my-5">
        <form action="">
            <div class="py-3 d-flex">
                <h2><?php echo $i++ ; ?></h2>
                <h3 class="">Routine of <span class="text-danger"><?php echo $row['class']; ?></span> Class</h3>
                
            </div>
            <h5 class="text-center">Exam time <span class="text-danger"><?php echo $row['time']; ?></span></h5>
            <div class="d-flex justify-content-center">
                <div class="mx-3">
                    <?php
                    foreach( $deconde_data->date as $date ) {
                        ?>
                        <h5><?php echo $date; ?></h5>
                        <hr>
                        <?php
                    }
                    ?>
                </div>
                <div class="mx-3">
                    <?php
                    foreach( $deconde_data->subject as $subject ) {
                        ?>
                        <h5><?php echo $subject; ?></h5>
                        <hr>
                        <?php
                    }
                    ?>
                </div>
            </div>
                    <?php
                    if( isset( $_SESSION['admin'] ) ) {
                    ?>
                        <div class="text-center">
                            <a href="routine-delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger my-3">Delete</a>
                        </div>
                    <?php } ?>
        </form>
    </div>
    <?php
         }
        }
        // Close the database connection
        $conn->close();
        ?>



<!-- routine area -->
<div class="exam-routine text-center">
    <div class="exam-routine-area p-3">
        <form action="actions/exam_schedule.php" method="POST">
            <div class="py-3">
                <h5 class="text-center">Add Exam Routine</h5>
                <h1 class="exam-routine-close"><span>X</span></h1>
                <label for="">Enter Class:</label>
                <input type="text" name="class_name" placeholder="enter classes here..." required><br>
                <label for="">Enter Time:</label>
                <input type="text" name="exam-time" placeholder="enter time here..." required><br>
            </div>

            <div>
                <table border="1" align="center" cellspacing="0" cellpadding="">
                    <tr class="bg-info">
                        <th>Date</th>
                        <th>Subjects</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="date1" placeholder="write time.."></td>
                        <td><input type="text" name="sub1" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="date2" placeholder="write time.."></td>
                        <td><input type="text" name="sub2" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="date3" placeholder="write time.."></td>
                        <td><input type="text" name="sub3" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="date4" placeholder="write time.."></td>
                        <td><input type="text" name="sub4" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="date5" placeholder="write time.."></td>
                        <td><input type="text" name="sub5" placeholder="write sub.. name"></td>
                    </tr>
                </table>
            </div>
                <button class="btn btn-primary my-3 px-5" type="submit">Save</button>
        </form>
    </div>

</div>


