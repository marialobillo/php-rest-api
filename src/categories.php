<?php include("includes/header.php") ?>

<div class="row">
    <div class="col-sm-6">
        <h3>Category List</h3>
    </div> 
    <div class="col-sm-4 offset-2">
        <a href="create_category.php" class="btn btn-success w-100"><i class="bi bi-plus-circle-fill"></i>New Category</a>
    </div>    
</div>
<div class="row mt-2 caja">
    <div class="col-sm-12">
            <table id="tblCategorias" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created At</th>                       
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a>                                                
                    </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td><a href="editar_categoria.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                    </tr>                                          
                </tbody>       
            </table>
    </div>
</div>
<?php include("includes/footer.php") ?>

<script>
    $(document).ready( function () {
        $('#tblCategorias').DataTable();
    });
</script>