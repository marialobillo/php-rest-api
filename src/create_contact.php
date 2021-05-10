<?php include("includes/header.php") ?>
    <div class="row">
        <div class="col-sm-6">
            <h3>Crear un Nuevo Contacto</h3>
        </div>            
    </div>
    <div class="row">
        <div class="col-sm-6 offset-3">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Here the name...">               
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname:</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Here the lastname...">               
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Here the phone number...">               
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Here the eMail...">               
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Category:</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="">--Select a Category--</option>
                    <option value="Familia">Family</option>
                    <option value="Trabajo">Work</option>               
                </select>
            </div>
            <br />
            <button type="submit" name="createContact" class="btn btn-primary w-100"><i class="bi bi-person-bounding-box"></i> Create New Contact</button>
            </form>
        </div>
    </div>
<?php include("includes/footer.php") ?>
       