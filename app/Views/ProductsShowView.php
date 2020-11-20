<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<h2>Product list</h2>
<table>
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price (EUR)</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <tr>
        <?php foreach ($products as $product): ?>
        <td><?php echo $product->getName(); ?></td>
        <td> <?php echo $product->getQuantity(); ?></td>
        <td><?php echo $product->getPrice(); ?></td>
        <td><a href="/products/<?= $product->getId(); ?>/edit">Edit product</a></td>
        <td>
            <form method="post" action="/products/<?php echo $product->getId(); ?>">
                <input type="hidden" name="_method" value="DELETE"/>
                <?php if (in_array($_SESSION['name'], $allowedUsersToDeleteProduct)): ?>
                    <button type="submit" onclick="return confirm('Sure?');">Delete</button>
                <?php else: echo "You are not allowed to delete something"; ?>
                <?php endif; ?>
            </form>
        </td>
    </tr>
    <tr>
        <?php endforeach; ?>
</table>

<hr>
<h3>Add new product</h3>
<form method="post" action="/products">
    <div>
        <label for="name">Product name</label>
        <input type="text" name="name" id="name" style="display: block;"/>
    </div>
    <div>
        <label for="quantity">Product quantity</label>
        <input type="text" name="quantity" id="quantity" style="display: block;"/>
    </div>
    <div>
        <label for="price">Product price (EUR)</label>
        <input type="text" name="price" id="price" style="display: block;"/>
    </div>
    <br>
    <button type="submit">Save</button>
</form>
