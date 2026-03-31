<div class="container">
    <h2>User List</h2>
    <a href="index.php?action=create">Add User</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $users->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $row['id'] ?>">Edit</a>
                    <a href="index.php?action=delete&id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>