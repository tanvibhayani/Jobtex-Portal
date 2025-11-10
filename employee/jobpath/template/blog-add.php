<?php
include 'header.php';
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $employer_id = $_SESSION['employer_id'];

    // Upload image
    $image = '';
    if ($_FILES['image']['name'] != '') {
        $image = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], '../../../images/' . $image);
    }

    mysqli_query($con, "INSERT INTO blogs (employer_id, title, content, image) 
        VALUES ('$employer_id', '$title', '$content', '$image')");
    echo "<script>window.location.href='blog-manage.php';</script>";
}
?>

<div class="main-content container mt-50 py-5">
    <div class="card shadow rounded-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fas fa-pen-nib me-2"></i>Post a New Blog</h5>
        </div>
        <div class="card-body p-4">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Blog Title <span class="text-danger">*</span></label>
                    <input type="text" name="title" class="form-control rounded-pill px-4" placeholder="Enter blog title" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-semibold">Blog Content <span class="text-danger">*</span></label>
                    <textarea name="content" class="form-control rounded-3 px-3" rows="6" placeholder="Write something interesting..." required></textarea>
                </div>
                
                <div class="mb-3">
                    <label class="form-label fw-semibold">Featured Image</label>
                    <input type="file" name="image" class="form-control rounded-pill">
                    <small class="text-muted">Recommended size: 800x400px</small>
                </div>
                
                <div class="text-end">
                    <button type="submit" class="btn btn-success rounded-pill px-4">
                        <i class="fas fa-upload me-1"></i> Publish Blog
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
