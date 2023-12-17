<div class="search-box py-3">
    <input type="text" onkeyup="searchByName()" class="p-2 searchName" placeholder="search by Name...">
</div>

<?php
include('config.php');

$limit = 3;

if( isset( $_GET['page'] ) ) {
    $page = $_GET['page'];
} else {
    $page = 1;
}


$offsets = ( $page - 1 ) * $limit;

$sql = "SELECT * FROM students LIMIT {$offsets}, {$limit}";
// echo $sql;

$result = mysqli_query( $conn, $sql );

if( mysqli_num_rows( $result ) > 0 ) {



?>

<table id="smsTable" class="table table-striped table-hover">
    <tr>
        <th> Roll</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>Blood</th>
        <th>Religion</th>
        <th>Email</th>
        <th>Section</th>
        <th>Shortbio</th>
        <th>Class</th>
        <th>Phone</th>

    </tr>
    <?php
    while ( $row = mysqli_fetch_assoc($result ) ) {
    ?>
        <tr class="fs-1">
            <td><?php echo $row['admissionid']; ?></td>
            <td><?php echo $row['fname'] . " " . $row['lname']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><?php echo $row['blood']; ?></td>
            <td><?php echo $row['religion']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['section']; ?></td>
            <td><?php echo $row['shortbio']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
    <?php
    }
}
    ?>
</table>

<div class="pagination py-5 text-center">
    <nav aria-label="Page navigation example mx-auto">
        <?php

        $sql1 = "SELECT * FROM students";

        $result1 = mysqli_query( $conn, $sql1 );   

        if( mysqli_num_rows( $result1  ) > 0 ) {
            $total_records = mysqli_num_rows( $result1 );

            $total_pages = ceil( $total_records / $limit );
            ?>
            <ul class="pagination justify-content-center">
            
                <?php
                if( $page > 1 ) {
                    ?>
                    <li class="page-item"><a class="page-link" href="http://localhost/college_project/admin/?content=item1&&page= <?php echo $page - 1 ; ?>">Prev</a></li>
                    <?php
                }
                for( $i = 1; $i <= $total_pages; $i++ ) {
                    if( $i == $page ) {
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    ?>
                    <li class="page-item <?php echo $active; ?>"><a class="page-link" href="http://localhost/college_project/admin/?content=item1&&page= <?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                }
                if( $total_pages > $page ) {
                    ?>
                    <li class="page-item"><a class="page-link" href="http://localhost/college_project/admin/?content=item1&&page= <?php echo $page + 1 ; ?>">Next</a></li>
                    <?php
                }
                ?>
            </ul>
                <?php
        }
        ?>
        



