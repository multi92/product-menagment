<!-- validacija forme -->

<?php if (!empty($errors)): ?>

<div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
    <div><?php echo $error ?></div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<form method="post" enctype="multipart/form-data">
    <!-- ako produkt ima sliku i ona je postovana, putanja do slike je sledeca -->
    <?php if ($product['image']): ?>
    <img src="<?php echo $product['image'] ?>" class="product-img-view">
    <?php endif?>
    <!-- forma za sliku -->
    <div class="form-group">
        <label>Product image</label><br>
        <input type="file" name="image">
    </div>
    <!-- forma za naslov -->
    <div class="form-group">
        <label>Product title</label><br>
        <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
    </div>
    <!-- forma za opis -->
    <div class="form-group">
        <label>Product description</label><br>
        <textarea name="description" class="form-control"><?php echo $description ?></textarea>
    </div>
    <!-- forma za cenu -->
    <div class="form-group">
        <label>Product price</label><br>
        <input type="number" step='0.1' name="price" class="form-control" value="<?php echo $price ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>