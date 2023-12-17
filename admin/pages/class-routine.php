<div class="container-fluid">
    <?php
    if( isset( $_SESSION['admin'] ) ) {
    ?>
        <button class="add-routine btn btn-primary">Add New Routine</button>
    <?php } ?>

    <?php

    include_once 'config.php';
    
    // Retrieve the data from the database
    $sql = "SELECT * FROM routines";
    $result = mysqli_query($conn, $sql);
    
    if( mysqli_num_rows( $result ) > 0 ) {
        $i = 1;
        while( $row = mysqli_fetch_assoc( $result ) ) {
            $datas = $row['routine'];
            $deconde_data = json_decode( $datas );
   
    ?>
    <div class="routine-list my-5">
        <form action="">
            <div class="py-3 d-flex">
                <h2><?php echo $i++ ; ?></h2>
                <h3 class="">Routine of <span class="text-danger"><?php echo $row['class']; ?></span> Class</h3>
            </div>

            <div>
                <table border="1" align="center" cellspacing="0" cellpadding="">
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
                        <input type="text" value="<?php echo $row['id']; ?>" hidden>
                        <td><?php echo $day; ?></td>
                        <td><?php echo $schedule->{'1st'}; ?></td>
                        <td><?php echo $schedule->{'2nd'}; ?></td>
                        <td><?php echo $schedule->{'3rd'}; ?></td>
                        <td><?php echo $schedule->{'break'}; ?></td>
                        <td><?php echo $schedule->{'4th'}; ?></td>
                        <td><?php echo $schedule->{'5th'}; ?></td>
                    </tr>
                    <?php
                     }
                    ?>
                    
                </table>
            </div>
            <?php
            if( isset( $_SESSION['admin'] ) ) {
            ?>
                <div class="text-center">
                    <a href="actions/routine-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary my-3">Edit Routine</a>
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
<div class="main-routine">
    <div class="new-routine-area p-3">
        <form action="actions/routines.php" method="POST">
            <div class="py-3">
                <h5 class="text-center">Add Class Routine</h5>
                <h1 class="routine_close"><span>X</span></h1>
                <label for="">Enter class:</label>
                <input type="text" name="class_name" placeholder="enter classes here..." required><br>
            </div>

            <div>
                <table border="1" cellspacing="0" cellpadding="">
                    <tr class="bg-info">
                        <th>Days</th>
                        <th>1st period</th>
                        <th>2nd period</th>
                        <th>3rd period</th>
                        <th>Break</th>
                        <th>4th period</th>
                        <th>5th period</th>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td><input type="text" name="1st" placeholder="write sub.. name"></td>
                        <td><input type="text" name="2nd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="3rd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="sun_break" placeholder="enter break time.."></td>
                        <td><input type="text" name="4th" placeholder="write sub.. name"></td>
                        <td><input type="text" name="5th" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                      <td>Monday</td>
                        <td><input type="text" name="1st" placeholder="write sub.. name"></td>
                        <td><input type="text" name="2nd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="3rd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="mon_break" placeholder="enter break time.."></td>
                        <td><input type="text" name="4th" placeholder="write sub.. name"></td>
                        <td><input type="text" name="5th" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td><input type="text" name="1st" placeholder="write sub.. name"></td>
                        <td><input type="text" name="2nd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="3rd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="tue_break" placeholder="enter break time.."></td>
                        <td><input type="text" name="4th" placeholder="write sub.. name"></td>
                        <td><input type="text" name="5th" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td><input type="text" name="1st" placeholder="write sub.. name"></td>
                        <td><input type="text" name="2nd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="3rd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="wed_break" placeholder="enter break time.."></td>
                        <td><input type="text" name="4th" placeholder="write sub.. name"></td>
                        <td><input type="text" name="5th" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                        <td>Thrusday</td>
                        <td><input type="text" name="1st" placeholder="write sub.. name"></td>
                        <td><input type="text" name="2nd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="3rd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="thr_break" placeholder="enter break time.."></td>
                        <td><input type="text" name="4th" placeholder="write sub.. name"></td>
                        <td><input type="text" name="5th" placeholder="write sub.. name"></td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td><input type="text" name="1st" placeholder="write sub.. name"></td>
                        <td><input type="text" name="2nd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="3rd" placeholder="write sub.. name"></td>
                        <td><input type="text" name="fri_break" placeholder="enter break time.."></td>
                        <td><input type="text" name="4th" placeholder="write sub.. name"></td>
                        <td><input type="text" name="5th" placeholder="write sub.. name"></td>
                    </tr>
                </table>
            </div>
                <button class="btn btn-primary my-3 px-5" type="submit">Save</button>
        </form>
    </div>

</div>


