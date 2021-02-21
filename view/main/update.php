<div class="container mt-3">
    <form action="<?php echo(constant('URL')); ?>main/update" class="form" method="POST">
        <input type="hidden" name="id" value="<?php echo($this->product[0]->id) ?>">
        <div class="form-group">
            <label for="id">Id producto</label>
            <span class="form-control disabled"><?php echo($this->product[0]->id) ?></span>
        </div>
        <div class="form-group">
            <label for="productName">Producto</label>
            <input type="text" name="productName" id="productName" class="form-control" value="<?php echo($this->product[0]->productName) ?>">
        </div>
        <div class="form-group">
            <label for="units">Cantidad</label>
            <input type="text" name="units" id="units" class="form-control" value="<?php echo($this->product[0]->units) ?>">
        </div>
        <div class="form-group">
            <label for="category">Categoría</label>
            <select name="category" id="category" class="form-control">
                <option selected value="<?php echo($this->product[0]->categoryId) ?>"><?php echo($this->product[0]->categoryName) ?></option>
                <?php
                foreach ($this->categories as $category) {
                    echo "<option value='{$category->id}'>{$category->categoryName}<option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>