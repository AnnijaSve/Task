<form action="/products/<?php echo $product->getId(); ?>" method="POST">

    <input type="hidden" name="_method" value="PUT">

    <div>
        <label for="name">Product name</label>
        <input type="text"
               name="name"
               id="name"
               style="display: block;"
               value="<?php echo $product->getName(); ?>">
    </div>
    <br>
    <div>
        <label for="quantity">Product quantity</label>
        <input type="text"
               name="quantity"
               id="quantity"
               style="display: block;"
               value="<?php echo $product->getQuantity(); ?>">
    </div>
    <br>
    <div>
        <label for="price">Product price</label>
        <input type="text"
               name="price"
               id="price"
               style="display: block;"
               value="<?php echo $product->getQuantity(); ?>">
    </div>
    <br>
    <button type="submit">Save</button>

</form>

<a href="/products">Back</a>