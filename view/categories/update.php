<div class="container mt-3">
    <form action="<?php echo(constant('URL')); ?>category/update" class="form" method="POST">
        <input type="hidden" name="id" value="<?php echo($this->category[0]->id) ?>">
        <div class="form-group">
            <label for="categoryName">Categoría</label>
            <input type="text" name="category" id="category" class="form-control" value="<?php echo($this->category[0]->categoryName) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>