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
                    ?>
                        <tr>
                            <td><?php echo ($category->id) ?></td>
                            <td><?php echo ($category->categoryName) ?></td>
                            <td class="d-flex justify-content-center">
                                <div>
                                    <a class="btn btn-warning text-white" href="<?php echo (constant('URL')) ?>category/updateView?id=<?php echo ($category->id) ?>">Actualizar</a>
                                    <button class="btn btn-danger">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>
</div>