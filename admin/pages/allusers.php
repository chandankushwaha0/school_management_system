<div class="search-box py-3">
    <input type="text" id="" onkeyup="searchByName()" class="p-2 searchName" placeholder="search by Name...">
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

$sql = "SELECT * FROM users LIMIT {$offsets}, {$limit}";
// echo $sql;

$result = mysqli_query( $conn, $sql );

if( mysqli_num_rows( $result ) > 0 ) {



?>

<table id="smsTable" class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>

    </tr>
    <?php
    while ( $row = mysqli_fetch_assoc($result ) ) {
    ?>
        <tr class="fs-1">
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['role']; ?></td>
        </tr>
    <?php
    }
}
    ?>
</table>

<div class="pagination py-5 text-center">
    <nav aria-label="Page navigation example mx-auto">
        <?php

        $sql1 = "SELECT * FROM users";

        $result1 = mysqli_query( $conn, $sql1 );   

        if( mysqli_num_rows( $result1  ) > 0 ) {
            $total_records = mysqli_num_rows( $result1 );

            $total_pages = ceil( $total_records / $limit );
            ?>
            <ul class="pagination justify-content-center">
            
                <?php
                if( $page > 1 ) {
                    ?>
                    <li class="page-item"><a class="page-link" href="http://localhost/college_project/admin/dashboard.php?content=allusers&&page= <?php echo $page - 1 ; ?>">Prev</a></li>
                    <?php
                }
                for( $i = 1; $i <= $total_pages; $i++ ) {
                    if( $i == $page ) {
                        $active = 'active';
                    } else {
                        $active = '';
                    }
                    ?>
                    <li class="page-item <?php echo $active; ?>"><a class="page-link" href="http://localhost/college_project/admin/dashboard.php?content=allusers&&page= <?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                }
                if( $total_pages > $page ) {
                    ?>
                    <li class="page-item"><a class="page-link" href="http://localhost/college_project/admin/dashboard.php?content=allusers&&page= <?php echo $page + 1 ; ?>">Next</a></li>
                    <?php
                }
                ?>
            </ul>
                <?php
        }
        ?>
        
           

