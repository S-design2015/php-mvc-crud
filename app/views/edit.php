<div class="container">
    <h2>Edit User</h2>
    <form method="POST">
        <input type="text" name="name" value="<?= $user['name'] ?>" required>
        <input type="email" name="email" value="<?= $user['email'] ?>" required>
        <button type="submit">Update</button>
    </form>
</div>

<!-- <div class="container">
    <h2>Edit User</h2>

    <?php if (!empty($user)) { ?>
        <form method="POST">
            <input type="text" name="name" value="<?= $user['name'] ?>" required>
            <input type="email" name="email" value="<?= $user['email'] ?>" required>
            <button type="submit">Update</button>
        </form>
    <?php } else { ?>
        <p>User not found</p>
    <?php } ?>

</div> -->