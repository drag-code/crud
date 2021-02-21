<div class="container">
    <div class="d-flex justify-content-center">
        <p class="h3">Agregue un nuevo producto</p>
    </div>
    <form action="<?php echo (constant('URL')); ?>main/save" class="form mb-3" method="POST">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="form-group">
                <input type="text" name="prodName" id="prodName" class="form-control text-center" placeholder="Nombre del producto" required>
            </div>
            <div class="form-group">
                <input type="text" name="units" id="units" class="form-control text-center" placeholder="Cantidad" required>
            </div>
            <div class="form-group">
                <select name="category" id="category" class="form-control" required>
                    <option disabled selected>Seleccione una categoría</option>
                    <?php
                    foreach ($this->categories as $category) {
                    ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->categoryName; ?>
                        <option>
                        <?php
                    }
                        ?>
                </select>
            </div>
            <button type="submit" id="create" class="btn btn-primary">Agregar</button>
        </div>
    </form>
    <div>
        <?php
        if ($this->products) {
        ?>
            <div class="d-flex justify-content-center">
                <p class="h3">Productos actuales</p>
            </div>
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th>Id</th>
                        <th>Nombre del producto</th>
                        <th>Categoría</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($this->products as $product) {
                    ?>
                        <tr>
                            <td><?php echo ($product->id) ?></td>
                            <td><?php echo ($product->productName) ?></td>
                            <td><?php echo ($product->categoryName) ?></td>
                            <td class="d-flex justify-content-center">
                                <div>
                                    <a class="btn btn-primary text-white" href="<?php echo (constant('URL')) ?>main/getOne?id=<?php echo ($product->id) ?>">Ver</a>
                                    <a class="btn btn-warning text-white" href="<?php echo (constant('URL')) ?>main/updateView?id=<?php echo ($product->id) ?>">Actualizar</a>
                                    <button class="btn btn-danger delete" id="<?php echo ($product->id) ?>">Eliminar</button>
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