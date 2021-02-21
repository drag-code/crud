<div class="container mt-3">
    <div class="form-group">
        <label for="id">Id producto</label>
        <span class="form-control disabled"><?php echo ($this->product[0]->id) ?></span>
    </div>
    <div class="form-group">
        <label for="productName">Producto</label>
        <input type="text" name="productName" id="productName" class="form-control disabled" value="<?php echo ($this->product[0]->productName) ?>">
    </div>
    <div class="form-group">
        <label for="units">Cantidad</label>
        <input type="text" name="units" id="units" class="form-control disabled" value="<?php echo ($this->product[0]->units) ?>">
    </div>
    <div class="form-group">
        <label for="category">Categoría</label>
        <span class="form-control disabled"><?php echo ($this->product[0]->categoryName) ?></span>
    </div>
</div>