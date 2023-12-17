<div class="adminssion-form py-5 px-5" style="background:#FFFFFF;">
    <form action="actions/classes.php" method="POST" enctype="multipart/form-data">
        <h5>Add New Classes</h5>
        <div class="d-flex py-3">
            <div class="">
                <lable>Teacher Name *</lable>
                <input type="text"  name="tname" aria-label="First name" class="form-control py-2 px-4" required>
            </div>
            <div class="ml-5">
                <lable>Gender *</lable><br>
                <input type="radio" value="Male" name="gender" id="">Male
                <input type="radio" value="Female" name="gender" id="">Female
                <input type="radio" value="Others" name="gender" id="">Others
            </div>
            <div class="ml-5">
                <lable>Time *</lable>
                <input type="time"  name="time" aria-label="dob" class="form-control py-2 px-5" required>
            </div>
        </div>
        <div class="d-flex py-3">
        
            <div class="">
                <lable>Email *</lable>
                <input type="email"  name="email" aria-label="email" class="form-control py-2 px-1" required>
            </div>
            <div class="ml-5">
                <lable>Address *</lable>
                <input type="text"  name="address" aria-label="admission id" class="form-control py-2 px-4" required>
            </div>
            <div class="ml-5">
            <lable class="mx-3">Class *</lable><br>
                <select name="classes" class="border border-light rounded py-2 px-5 mx-1" aria-label="Default select example" required>
                    <option selected  class="text-light">Select Your Class*</option>
                    <option value="BBA">BBA</option>
                    <option value="BCA">BCA</option>
                    <option value="BHM">BHM</option>
                    <option value="MBA">MBA</option>
                    <option value="Finance">Finance</option>
                </select>
            </div>
        </div>
        <div class="d-flex py-3">
            
            <div class="">
                <lable>Section *</lable><br>
                <select naem="sections"  class="border border-light rounded py-2 px-3" aria-label="Default select example" required>
                    <option selected class="text-light">Select Your Section*</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>
            <div class="mx-5">
                <lable>Phone *</lable>
                <input type="number"  name="Phone" aria-label="phone" class="form-control py-2 px-1" required>
            </div>
        </div>
        <div>
            <button type="submit" name="save">Save</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</div>
