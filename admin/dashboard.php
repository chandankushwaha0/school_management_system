
<?php

// if(  empty( $_SESSION['admin'] ) || empty( $_SESSION['username'] ) )  {
//     exit;
// }

include('templates/header.php'); ?>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Dashboard</h3>
                <?php

                session_start();
                
                
                ?>
            </div>

            <ul class="list-unstyled components">
            <li class="">
                    <a href="#homeSubmenuddsdfd" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Users</a>
                    <ul class="collapse list-unstyled" id="homeSubmenuddsdfd">
                        <li>
                            <a href="?content=allusers">All Users</a>
                        </li>
                        <?php
                        if( isset( $_SESSION['admin'] ) ) {
                        ?>
                        <li>
                        <a href="?content=item0">Add New Users</a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <a href="?content=college-website">College Website</a>
                </li>
                <li class="">
                    <a href="#homeSubmenudd" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Student</a>
                    <ul class="collapse list-unstyled" id="homeSubmenudd">
                        <li>
                            <a href="?content=item1">All Student</a>
                        </li>
                        <?php
                        if( isset( $_SESSION['admin'] ) ) {
                        ?>
                        <li>
                        <a href="?content=item2">Add Students</a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                
                <li>
                    
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teachers</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="?content=item3">All Teacher</a>
                        </li>
                        <?php
                        if( isset( $_SESSION['admin'] ) ) {
                        ?>
                        <li>
                            <a href="?content=item4">Add Teachers</a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <a href="?content=item6">Class Routine</a>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Parent</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="?content=item7">All Parents</a>
                        </li>
                        <?php
                        if( isset( $_SESSION['admin'] ) ) {
                        ?>
                        <li>
                            <a href="?content=item8">Add Parent</a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Liberary</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="?content=item10">All Book</a>
                        </li>
                        <?php
                        if( isset( $_SESSION['admin'] ) ) {
                        ?>
                        <li>
                            <a href="?content=item11">Add New Book</a>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Account</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li>
                            <a href="?content=item12">All Fee Collection</a>
                        </li>
                        <li>
                            <a href="?content=item13">Add Expenses</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="?content=item14">Notice</a>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Class</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu5">
                        <li>
                            <a href="?content=item15">All Classes</a>
                        </li>
                        <?php
                        if( isset( $_SESSION['admin'] ) ) {
                        ?>
                        <li>
                            <a href="?content=item16">Add New Classes</a>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </li>
                <li>
                    <a href="?content=item17">Message</a>
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Exam</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu6">
                        <li>
                            <a href="?content=item18">Exam Schedule</a>
                        </li>
                        <li>
                            <a href="?content=item19">Exam Grades </a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="?content=item20">Map</a>
                </li>
            </ul>

        
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link mx-5 user-name" href="#"><i class="fa-solid fa-user"></i><span class="px-2"><?php echo $_SESSION['admin_name']; ?></span></a>
                            </li>

                            <!-- Popup for user settings -->
                            <div class="user-popup">
                                <div class="user-popup-item">
                                    <ul>
                                        <!-- <li><h6>Name</h6></li> -->
                                        <li class="my-profile-btn"><a href="" >My pofile</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link message-section" href="#"><i class="fa-solid fa-message"></i></a>

                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link notification-section" href="#"><i class="fa-solid fa-bell"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="main-content">
                <div class="content-container">
                    <?php include('content.php'); ?>

                    <!-- <h1>Welcome to admin dashboard</h1> -->
                </div>
        </div>
        
    </div>


    <div class="message-popup">
        <div>
            <ul>
                <li><h5><span class="px-2">01</span>Messages</h5></li>
                <?php 
                function text_limit( $text, $limit) {
                    if( strlen( $text > $limit ) ) {
                        $text = substr( $text, 0, $limit ) . "..." ;
                    }
                    return $text;
                }
                for( $i = 1; $i < 20; $i++ ) { ?>
                <li class="py-2"><a href="" class="d-flex">
                    <div class="px-3">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h6>Name</h6>
                        <?php  
                        $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum iusto corrupti dolorem odit quos, error possimus dignissimos.";
                        $limit_text = text_limit( $text, 70 );
                        ?>
                        <p class=""><?php echo $limit_text ; ?> </p>
                    </div>
                </a></li>
                <hr>
                <?php } ?>
            </ul>
        </div>
    </div>


    <div class="notification-popup">
        <div>
            <ul>
                <li><h5><span class="px-2">01</span>Notification</h5></li>
                <?php 
                for( $i = 1; $i < 20; $i++ ) { ?>
                <li class="py-2"><a href="" class="d-flex">
                    <div class="px-3">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div>
                        <h6>Name</h6>
                        <?php  
                        $text = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum iusto corrupti dolorem odit quos, error possimus dignissimos.";
                        $limit_text = text_limit( $text, 70 );
                        ?>
                        <p class=""><?php echo $limit_text ; ?> </p>
                    </div>
                </a></li>
                <hr>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php
    

        
    ?>
    <div class="profile-popup">
            <div class="d-flex justify-content-between">
                <h4>Your Profile</h4>
                <h6 class="close-profile-popup mb-5"><span>X</span></h6>
            </div>
            <div class="d-flex">
                <div class="profile-image mr-5"><img src="" alt="insert image here"></div>
                <div><h2><input type="text" value="Admin" name="name" readonly></h2></div>
            </div>
            <div>
                <label for=""><h5>Username:</h5></label>
                <input type="text" name="prof-username" value="<?php echo $_SESSION['admin'] ?>" readonly/></br>
                <label for=""><h5>Bio:</h5></label>
                <textarea name="prof-bio" id="" cols="70" rows="10" readonly><?php  ?></textarea></br>
                <button class="btn btn-primary edit-my-profile" name="edit">Edit profile</button>
            </div>
    </div>


        <div class="edit-profile-section">
            <div class="d-flex justify-content-between px-5 pt-4 border-bottom border-dark">
                <h3 class="">Edit Profile</h3>
                <h5 class="text-danger"><span class="cancel-edit">X</span></h5>
            </div>
            
            <?php
            if( isset( $_POST['save-profile'] ) ) {
                $username = $_POST['username'];
                $name = $_POST['name'];
                $bio = $_POST['pr-bio'];

                $file_name = $_FILES['pr-image']['name'];
                $tmp_name = $_FILES['pr-image']['tmp_name'];

                $folder = 'uploads/' . $file_name;

                $images = move_uploaded_file( $tmp_name, $folder );

                include_once 'config.php';

                $sql = "INSERT INTO profile(username, name, bio, image) VALUES( '{$username}', '{$name}', '{$bio}', '{$file_name}') ";

                $result = mysqli_query( $conn, $sql );

                if( $result ) {
                    ?>
                    <script type="text/javascript">
                        alert('Edit successfully!!!')l;
                    </script>
                    <?php
                }

            }
            ?>


            <form action="" method="POST" class="py-4 edit-profile-form" enctype="multipart/form-data">
                <div class="d-flex justify-content-between py-3">
                    <label for="" class="">Profile Photo</label>
                    <input type="file" name="pr-image">
                </div>
                <div class="d-flex justify-content-between py-3">
                    <label for="">Name</label>
                    <input type="text" name="name">
                </div>
                <div class="d-flex justify-content-between py-3">
                    <label for="">Bio</label>
                    <textarea name="pr-bio" id="" cols="62" rows="5"></textarea>
                </div>
                <p id="profile-msg" class="text-primary"></p>
                <div class="d-flex justify-content-end">
                
                    <button name="save-profile" class="btn btn-primary">Save</button>
                   
                </div>
            </form>
        </div>
    <?php include('templates/footer.php'); ?>
