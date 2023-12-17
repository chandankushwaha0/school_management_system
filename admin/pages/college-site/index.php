

<div class="container college-index bg-dark">
    <div class="row">
        <?php
        ?>
        <div class="col-12">
            <div>
                <ul class="d-flex justify-content-around pt-3">
                    <div class="text-center">
                        <li><h4>Logo</h4></li>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-house"></i>
                        <li><a href="http://localhost/college_project/admin/dashboard.php?content=college-website&&page=home">Home</a></li>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-address-card"></i>
                        <li><a href="http://localhost/college_project/admin/dashboard.php?content=college-website&&page=about">About</a></li>
                    </div>
                    <div class="text-center">
                        <i class="fa-brands fa-discourse"></i>
                        <li><a href="http://localhost/college_project/admin/dashboard.php?content=college-website&&page=cources">cources</a></li>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-address-book"></i>
                        <li><a href="http://localhost/college_project/admin/dashboard.php?content=college-website&&page=contact">contact</a></li>
                    </div>
                    <div class="text-center">
                        <i class="fa-solid fa-users"></i>
                        <li><a href="http://localhost/college_project/admin/dashboard.php?content=college-website&&page=staff">staff</a></li>
                    </div>
                    <div class="text-center">
                        <i class="fa-brands fa-envira"></i>
                        <li><a href="http://localhost/college_project/admin/dashboard.php?content=college-website&&page=gallery">gallery</a></li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    <?php
    include_once 'init.php';
    // In your main file where you get $_GET['page']:
    $data = $_GET['page'];
    $init = new Init($data);
    ?>
    <div class="d-flex py-2">
        <div class="webpage-side-menu">
            <ul id="menu">
                <?php
                $menu_items = $init->load_menu();
                    if ( is_array( $menu_items ) && ! empty( $menu_items ) ) {
                        foreach ( $menu_items as $menu_item ) {
                            ?>
                            <li class="py-2"><a href="http://localhost/college_project/admin/pages/college-site/pages/<?php echo $menu_item . '.php'; ?>"><?php echo $menu_item; ?></a></li>
                            <?php
                        }
                    }
                ?>
            </ul>
        </div>
        <div class="webpage-index-content bg-light" id="content-container"></div>
        <script>
        
</script>
        </div>
    </div>
</div>
