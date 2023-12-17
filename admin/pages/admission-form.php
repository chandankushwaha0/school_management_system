<div class="adminssion-form py-5 px-5" style="background:#FFFFFF;">
    <form action="actions/add-student.php" method="POST" enctype="multipart/form-data">
        <p class="submit-msg"></p>
        <h5>Add New Student</h5>
        <div class="d-flex py-">
            <div class="">
                <lable>First Name *</lable>
                <input type="text"  name="fname" aria-label="First name" class="form-control py-2 px-4" required>
            </div>
            <div class="mx-3">
                <lable>Last Name *</lable>
                <input type="text"  name="lname" aria-label="Last name" required class="form-control  py-2 px-4">
            </div>
            <div class="mx-3">
                <lable>Gender *</lable><br>
                <input value="male" type="radio" name="gender" id="">Male
                <input value="female" type="radio" name="gender" id="">Female
                <input value="others" type="radio" name="gender" id="">Others
            </div>
            <div class="mx-">
                <lable>Date Of Birth *</lable>
                <input type="date"  name="dob" aria-label="dob" class="form-control py-2 px-4" required>
            </div>
        </div>
        <div class="d-flex py-3">
            <div class="">
                <lable>Roll *</lable>
                <input type="text"  name="roll" aria-label="roll" class="form-control py-2 px-4" required>
            </div>
            <div class="mx-5">
            <lable class="mx-3">Select Your Blood Group *</lable><br>
                <select name="blood" class="border border-light rounded py-2 px-3 mx-1" aria-label="Default select example" required>
                    <option selected class="text-light">Select Your Blood Group*</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="o+">O+</option>
                    <option value="o+">O-</option>
                </select>
            </div>
            <div class="">
                <lable>Religions *</lable><br>
                <select name="religion" class="border border-light rounded py-2 px-3" aria-label="Default select example" required>
                    <option selected class="text-light">Select Your Religion*</option>
                    <option value="Islam">Islam</option>
                    <option value="Cristian">Cristian</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="mx-5">
                <lable>Email *</lable>
                <input type="email"  name="email" aria-label="email" class="form-control py-2 px-1" required>
            </div>
        </div>
        <div class="d-flex py-3">
            <div class="">
                <lable>Adminssion ID *</lable>
                <input type="text"  name="admissionid" aria-label="admission id" class="form-control py-2 px-4" required>
            </div>
            <div class="mx-5">
            <lable class="mx-3">Class *</lable><br>
                <select name="class" class="border border-light rounded py-2 px-5 mx-1" aria-label="Default select example" required>
                    <option selected class="text-light">Select Your Class*</option>
                    <option value="BBA">BBA</option>
                    <option value="BCA">BCA</option>
                    <option value="BHM">BHM</option>
                    <option value="MBA">MBA</option>
                    <option value="Finance">Finance</option>
                </select>
            </div>
            <div class="">
                <lable>Section *</lable><br>
                <select name="section" class="border border-light rounded py-2 px-3" aria-label="Default select example" required>
                    <option selected class="text-light">Select Your Section*</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
            </div>
            <div class="mx-5">
                <lable>Phone *</lable>
                <input type="number"  name="phone" pattern="[0-9]*" inputmode="numeric" aria-label="phone" class="form-control py-2 px-1" required>
            </div>
        </div>
        <div class="d-flex pt-5 pb-3">
            <div class="">
                <label>Short BIO</label><br>
                <textarea cols="50" rows="10" name="shortbio"></textarea>
            </div>
        </div>
        <div>
            <button type="submit" name="save" class="save">Save</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</div>




    