<?php include("includes/header.php") ?>

<div class="row">
    <div class="col-sm-6">
        <h3>Lista de Contactos</h3>
    </div> 
    <div class="col-sm-4 offset-2">
        <a href="create_contact.php" class="btn btn-success w-100"><i class="bi bi-plus-circle-fill"></i> Nuevo Contacto</a>
    </div>    
</div>
<div class="row mt-2 caja">
    <div class="col-sm-12">
            <table id="tblContacts" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th> 
                        <th>Categoría</th>                    
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a href="edit_contact.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a>
                            <a href="delete_contact.php" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Borrar</a>
                        </td>
                    </tr>
                    <tr>
                    <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a href="editar_contacto.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a>
                            <a href="borrar_contacto.php" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Borrar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a href="editar_contacto.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a>
                            <a href="borrar_contacto.php" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Borrar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>
                            <a href="editar_contacto.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Editar</a>
                            <a href="borrar_contacto.php" class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Borrar</a>
                        </td>
                    </tr>
                    
                                                        
                </tbody>       
            </table>
    </div>
</div>
<?php include("includes/footer.php") ?>

<script>
    $(document).ready( function () {
        $('#tblContacts').DataTable();
    });
</script>