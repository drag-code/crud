<div class="container">
    <div class="d-flex justify-content-center">
        <p class="h3">Agregue una nueva categoría</p>
    </div>
    <form action="<?php echo (constant('URL')); ?>main/save" class="form mb-3" method="POST">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="form-group">
                <input type="text" name="prodName" id="prodName" class="form-control text-center" placeholder="Nombre del producto" required>
            </div>
            <div class="form-group">
                <input type="text" name="units" id="units" class="form-control text-center" placeholder="Unidades" required>
            </div>
            <div class="form-group">
                <select name="category" id="category" class="form-control" required>
                    <option disabled selected>Seleccione una categoría</option>
                    <?php
                    foreach ($this->categories as $category) {
                        echo "<option value='{$category->id}'>{$category->categoryName}<option>";
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
                <p class="h3">Categorías actuales</p>
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
                        echo "<tr>
                            <td>{$product->id}</td>
                            <td>{$product->productName}</td>
                            <td>{$product->categoryName}</td>
                            <td class='d-flex justify-content-center'>
                                <div>
                                    <a class='btn btn-primary text-white'>Ver</a>
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