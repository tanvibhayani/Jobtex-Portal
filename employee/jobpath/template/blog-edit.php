<?php
include 'header.php';
include 'connection.php';

$employer_id = $_SESSION['employer_id'];
$id = intval($_GET['id']);

$result = mysqli_query($con, "SELECT * FROM blogs WHERE id = $id AND employer_id = $employer_id");
if (mysqli_num_rows($result) == 0) {
    echo "Invalid Blog ID";
    exit;
}
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);

    $image = $row['image'];
    if ($_FILES['image']['name'] != '') {
        $image = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/blogs/' . $image);
    }

    mysqli_query($con, "UPDATE blogs SET title='$title', content='$content', image='$image' WHERE id = $id AND employer_id = $employer_id");
    echo "<script>window.location.href='blog-manage.php';</script>";
}
?>

<div class="main-content">
    <h4>Edit Blog</h4>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($row['title']) ?>" required>
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" rows="5" required><?= $row['content'] ?></textarea>
        </div>
        <div class="mb-3">
            <label>Image</label><br>
            <?php if ($row['image']) echo "<img src='uploads/blogs/{$row['image']}' width='120'><br>"; ?>
            <input type="file" name="image" class="form-control mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Update Blog</button>
    </form>
</div>

<?php include 'footer.php'; ?>
