<h3><i>Cources</i></h3>

<form class="px-5" action="">
    <label for="card-title">Course Title: </label>
    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" id="card-title" placeholder="Course Title" aria-label="Username" aria-describedby="addon-wrapping">
    </div>
    <label for="floatingTextareas">Course Description: </label>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a course Description here" id="floatingTextareas"></textarea>
    </div>
    <label for="inputGroupFile02">Course Image/icon: </label>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02">
    </div>
    <label for="course-price">Course Price: </label>
    <div class="input-group flex-nowrap">
        <input type="number" class="form-control" id="course-price" placeholder="Course Price" aria-label="Username" aria-describedby="addon-wrapping">
    </div>

    <div class="py-3">
        <button type="submit" class="btn btn-primary" name="save">Save</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </div>
</form>
