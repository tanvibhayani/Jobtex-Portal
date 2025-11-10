<?php
include 'header.php';
include 'connection.php'; // database connection
?>

<!-- Custom Styles for blog -->
<style>
    .img-blog {
        width: 100%;
        height: 230px;
        object-fit: cover;
        border-radius: 8px;
        display: block;
    }

    .widget-blog-1 {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        height: 100%;
        margin-bottom: 30px;
        transition: all 0.3s ease;
    }

    .widget-blog-1:hover {
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    }

    .widget-blog-1 .content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        padding-top: 15px;
    }

    .widget-blog-1 .main-title a {
        font-size: 20px;
        font-weight: 600;
        color: #222;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .widget-blog-1 .main-title a:hover {
        color: #007bff;
    }

    .widget-blog-1 p {
        font-size: 15px;
        line-height: 1.6;
        margin: 10px 0;
        color: #555;
    }

    .widget-button-underline a {
        color: #007bff;
        text-decoration: underline;
        font-weight: 500;
        margin-top: auto;
    }

    .meta {
        list-style: none;
        padding: 0;
        margin: 0;
        font-size: 14px;
        color: #888;
        display: flex;
        gap: 15px;
    }

    .meta .icon-calendar {
        margin-right: 5px;
    }

    @media (min-width: 768px) {
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
    }
</style>

<section class="bg-f5">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <div class="widget-menu-link">
                        <ul>
                            <li><a href="home-01.php">Home</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="tf-container">
        <div class="blog wrap-blog stc">
            <div class="list-blog blog-grid">
                <?php
                $query = "SELECT * FROM blogs WHERE status = 'Approved' ORDER BY created_at DESC LIMIT 10";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $image = $row['image'];
                        $title = $row['title'];
                        $date = date('d M Y', strtotime($row['created_at']));
                        $description = substr(strip_tags($row['content']), 0, 100) . '...';
                ?>
                        <div class="widget-blog-1">
                            <img src="images/<?php echo $image; ?>" alt="blog image" class="img-blog">
                            <div class="content">
                                <h3 class="main-title">
                                    <a href="blog-detail.php?id=<?php echo $id; ?>"><?php echo $title; ?></a>
                                </h3>
                                <ul class="meta">
                                    <li class="time"><span class="icon-calendar"></span> <?php echo $date; ?></li>
                                </ul>
                                <p><?php echo $description; ?></p>
                                <div class="widget-button-underline">
                                    <a href="blog-detail.php?id=<?php echo $id; ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p>No approved blogs found.</p>";
                }
                ?>
            </div>

            <!-- Sidebar or Search -->
            <div class="widget-side-bar">
                <form role="search" method="get" action="#" class="widget-block-search-2">
                    <div class="widget-block-search-2-wrap">
                        <input type="search" class="widget-block-search-2-input" placeholder="Search" required>
                        <button type="submit" class="widget-block-search-2-button">
                            <span class="icon-search1"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
