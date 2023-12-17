<div class="container-fluid py-5">
    <div class="row">
        <div class="col-lg-3 py-4" style="background-color: #FFF;">
            <form>
                <h5 class="pb-3">Create a Notice</h5>
                <div class="">
                    <lable>Title </lable>
                    <input style="background-color: #F0F1F3" type="text" name="subject_name" aria-label="Subject name" class="form-control py-2 px-4">
                </div>
                <div class="py-4">
                    <lable>Details</lable><br>
                    <textarea class="py-2 px-2" name="details" id="" cols="25" rows="10"></textarea>
                </div>
                <div class="py-4">
                    <lable>Posted By</lable><br>
                    <input style="background-color: #F0F1F3" type="text" name="posted-by" aria-label="Posted by" class="form-control py-2 px-4">
                    
                </div>
                <div class="py-4">
                    <lable>Date</lable><br>
                    <input style="background-color: #F0F1F3" type="date" name="date" aria-label="Date" class="form-control py-2 px-4">
                    
                </div>
                <div class="class-routine">
                    <button class="py-2 px-4"  style="background-color: #FFAE01; color: #fff; border:none; cursor:pointer;" type="submit" name="save">Save</button>
                    <button class="py-2 px-4"  style="background-color: #042954; color: #fff; border:  none; cursor: pointer" type="reset">Reset</button>
                </div>

            </form>
        </div>
        <div class="col-lg-8 ml-5" style="background: #FFFFFF;">
            <div class="search-box py-3">
                <form class="py-3 d-flex" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" target="_self">
                    <input type="text" value="" placeholder="Search by Date" name="date" class="px-5 py-1">
                    <input type="text" value="" placeholder="Search by Title" name="title" class="mx-2 px-5 py-1">
                    <button type="submit" name="save" class="btn btn-warning">Search</button>
                </form>
            </div>

            <?php

            if (isset($_POST['save'])) {
                $day = $_POST['date'];
                $class = $_POST['title'];

            }
            ?>
            <div style="height:800px; overflow: scroll;">
        <?php for( $i = 0; $i < 20; $i++ ) { ?>
            
            <div class="text-center">
                <p style="background: #40DFCD; width: 18%; border-radius: 30px; color: #FFFFFF; font-size: 16px; font-weight: 500" class="py-2">2 june, 2023</p>
            </div>
            <div>
                <a href="pages/notice-content.php"><p style="font-weight: 500; font-size: 17px">Great School Great School manag mene esom text of the printing Great School manag mene esom text of the printing manag mene esom text of the printing.</p></a>
                <p style="margin-top: -15px;">Author <span style="color: gray; ">/ 5 min ago</span></p>
            </div>
            <hr>
            
            <?php } ?>
            </div>
        </div>
    </div>
</div>
