<form method="post" action="/">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" style="display: block;"/>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" style="display: block;"/>
    </div>
    <p>
        <button type="submit">Login</button>
    </p>
    <?php foreach ($messages as $message): ?>
        <?php echo $message; ?>
    <?php endforeach; ?>
</form>
