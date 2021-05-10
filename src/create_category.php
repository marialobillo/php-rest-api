<?php include("includes/header.php") ?>
<div class="row">
        <div class="col-sm-6">
            <h3>Create New Category</h3>
        </div>            
    </div>
    <div class="row">
        <div class="col-sm-6 offset-3">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Type here your category...">               
            </div>          

            <button type="submit" name="createCategory" class="btn btn-primary w-100">New Category</button>
            </form>
        </div>
    </div>
<?php include("includes/footer.php") ?>
       