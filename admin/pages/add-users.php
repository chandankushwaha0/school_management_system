<div class="adminssion-form py-5 px-5" style="background:#FFFFFF;">
    <form action="actions/add-users.php" method="POST" enctype="multipart/form-data">
        <h5>Add Users</h5>
        <div class="d-flex py-3">
            <div class="">
                <lable>Name *</lable>
                <input type="text"  name="name" aria-label="First name" class="form-control py-2 px-4" required>
            </div>

            <div class="mx-5">
                <lable>Email *</lable>
                <input type="text"  name="email" aria-label="First name" class="form-control py-2 px-4" required>
            </div>
            <div class="">
                <lable>Password *</lable>
                <input type="password"  name="password" aria-label="First name" class="form-control py-2 px-4" required>
            </div>
            
        </div>
        <div class="d-flex py-3">
        <div class="">
            <lable class="">Select Role *</lable><br>
                <select name="role" class="border border-light rounded py-2 px-3 mx-1" aria-label="Default select example" required>
                    <option selected class="text-light">Select Role</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teachers</option>
                    <option value="parent">Parents</option>
                </select>
            </div>
        </div>
        <div>
            <button type="submit" name="save">Save</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</div>
