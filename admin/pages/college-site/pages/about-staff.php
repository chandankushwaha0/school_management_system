<h3><i>Staff</i></h3>

<form class="px-5" action="">
    <label for="staff-name">Staff Name: </label>
    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" id="staff-name" placeholder="Enter staff name" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <label for="about-satff">About Staff: </label>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave About Staff here" id="about-satff"></textarea>
    </div>
    <label for="staff-image">Staff Image/icon: </label>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="staff-image">
    </div>

    <div class="py-3">
        <button type="submit" class="btn btn-primary" name="save">Save</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</form>
