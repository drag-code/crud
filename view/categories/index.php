<div class="container">
    <div class="d-flex justify-content-center">
        <p class="h3">Agregue una nueva categoría</p>
    </div>
    <form action="<?php echo (constant('URL')); ?>category/save" class="form mb-3" method="POST">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="form-group">
                <input type="text" name="category" id="category" class="form-control text-center" placeholder="Nombre de la categoría" required>
            </div>
            <button type="submit" id="create" class="btn btn-primary">Agregar</button>
        </div>
    </form>
    <div>
        <?php
        if ($this->categories) {
        ?>
            <div class="d-flex justify-content-center">
                <p class="h3">Categorías actuales</p>
            </div>
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>Id</th>
                        <th>Categoría</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->categories as $category) {
                        echo "<tr>
                            <td>{$category->id}</td>
                            <td>{$category->categoryName}</td>
                            <td class='d-flex justify-content-center'>
                                <div>
                                    <button class='btn btn-warning'>Actualizar</button>
                                    <button class='btn btn-danger'>Eliminar</button>
                                </div>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>
</div>