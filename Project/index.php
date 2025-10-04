<?php
require 'db_aah.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['title'])) {
    $title = $mysqli->real_escape_string($_POST['title']);
    $mysqli->query("INSERT INTO items_aah (title) VALUES ('$title')");
    header("Location: index.php");
    exit;
}

if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $mysqli->query("DELETE FROM items_aah WHERE id=$id");
    header("Location: index.php");
    exit;
}

$result = $mysqli->query("SELECT id,title,created_at FROM items_aah ORDER BY created_at DESC LIMIT 10");

$count = $mysqli->query("SELECT COUNT(*) AS c FROM items_aah")->fetch_assoc()['c'];
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>MyList–aah</title>
    <style>
        body { font-family: Arial, sans-serif; direction: rtl; margin: 30px; background: #f9f9f9; }
        h1 { color: #333; }
        form { margin-bottom: 20px; }
        input { padding: 8px; width: 200px; }
        button { padding: 8px 12px; cursor: pointer; }
        table { border-collapse: collapse; margin-top: 20px; width: 60%; background: white; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background: #eee; }
        a { color: red; text-decoration: none; }
    </style>
</head>
<body>
<div class="container">

<h1>MyList–aah</h1>

<form method="POST">
    <input type="text" name="title" placeholder="عنوان آیتم" required>
    <button type="submit">افزودن</button>
</form>

<h2>۱۰ آیتم آخر:</h2>
<table>
    <tr><th>ID</th><th>Title</th><th>Created At</th><th>حذف</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><a href="?delete=<?= $row['id'] ?>">حذف</a></td>
        </tr>
    <?php endwhile; ?>
</table>

<p>تعداد کل آیتم‌ها: <?= $count?></p>

</div>
</body>

</html>