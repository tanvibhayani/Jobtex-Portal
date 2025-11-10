<?php
include 'header.php';
include 'connection.php';
session_start();

$user_id = $_SESSION['user_id'] ?? 0;

// ✅ Base query
$query = "SELECT * FROM jobs WHERE 1";

// ✅ Search filter
if (!empty($_GET['search'])) {
    $search = mysqli_real_escape_string($con, $_GET['search']);
    $query .= " AND (job_title LIKE '%$search%' OR company_name LIKE '%$search%')";
}

// ✅ Country filter
if (!empty($_GET['country'])) {
    $country = mysqli_real_escape_string($con, $_GET['country']);
    $query .= " AND country = '$country'";
}

// ✅ Experience filter
if (!empty($_GET['experience'])) {
    $exp = mysqli_real_escape_string($con, $_GET['experience']);
    $query .= " AND experience = '$exp'";
}

// ✅ Order by latest
$query .= " ORDER BY post_date DESC";

// ✅ Run query
$jobs = mysqli_query($con, $query);
?>

<!-- ✅ Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- ✅ Custom Styling -->
<style>
    body {
        background-color: #f8f9fa;
    }

    .job-card {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.05);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.1);
    }

    .job-card .card-body {
        padding: 20px;
    }

    .job-card h4 {
        color: #333;
    }

    .job-card h6 {
        color: #28a745;
    }

    .job-card p,
    .job-card li {
        color: #555;
    }

    .apply-btn {
        background-color: #28a745;
        color: white;
        padding: 10px 25px;
        border: none;
        border-radius: 50px;
        font-weight: 500;
        font-size: 16px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
    }

    .apply-btn:hover {
        background-color: #218838;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }

    .view-btn {
        background-color: rgb(131, 138, 146);
        color: white;
        padding: 10px 25px;
        border: none;
        border-radius: 50px;
        font-weight: 500;
        font-size: 16px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .view-btn:hover {
        background-color: rgb(53, 99, 92);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }

    .save-btn {
        background-color: rgb(159, 247, 151);
        color: white;
        padding: 10px 25px;
        border: none;
        border-radius: 50px !important;
        font-weight: 500;
        height: 50px;
        width: 80px;
        font-size: 16px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .save-btn:hover {
        background-color: rgb(53, 99, 92);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }

    .like-btn {
        background-color: transparent;
        border: none;
        color: #aaa;
        font-size: 20px;
        transition: color 0.3s ease;
    }

    .like-btn.liked {
        color: red;
    }

    /* ✅ Filter Form Styling */
    form .form-control {
        border-radius: 8px;
        padding: 10px;
    }
    form .btn-success {
        border-radius: 8px;
        padding: 10px;
        font-weight: 500;
    }
    /* ✅ Common Button Style */
.action-btn {
    color: white;
    padding: 10px 25px;
    border: none;
    border-radius: 50px;
    font-weight: 500;
    font-size: 16px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    height: 50px;
    min-width: 100px; /* ✅ sabka size same */
    text-align: center;
}

/* ✅ Different Colors */
.view-btn {
    background-color: #6c757d; /* Gray */
}
.view-btn:hover {
    background-color: #545b62;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.3);
}

.save-btn {
    background-color: #28a745; /* Green */
}
.save-btn:hover {
    background-color: #218838;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.3);
}

.apply-btn {
    background-color: #007bff; /* Blue */
}
.apply-btn:hover {
    background-color: #0069d9;
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.3);
}
/* ✅ Filter Button */
.filter-btn {
    background: #28a745;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    width: 100%;
    height: 48px;          /* ✅ same as input */
    line-height: 1.5;
    transition: 0.3s ease;
}
.filter-btn:hover {
    background: #218838;
    transform: translateY(-2px);
}

/* ✅ Reset Button */
.reset-btn {
    background: #6c757d;         /* Gray */
    color: #fff;
    border: none;
    padding: 10px 28px;
    border-radius: 8px;
    font-weight: 600;
    margin-left: 8px;
    transition: 0.3s ease;
    text-decoration: none;       /* Remove underline */
    display: inline-block;
}
.reset-btn:hover {
    background: #5a6268;         /* Darker gray */
    transform: translateY(-2px);
}


</style>

<!-- ✅ HTML Layout -->
<div class="container mt-5">
    <h2 class="text-success mb-4 text-center">Latest Jobs</h2>

    <!-- ✅ Filter + Search Form -->
<!-- ✅ Filter + Search Form -->
<form method="GET" class="mb-4 filter-form">
    <div class="row">
        
        <!-- Search Box -->
        <div class="col-md-4">
            <input type="text" name="search" class="form-control" 
                placeholder="Search job title, company..." 
                value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
        </div>

        <!-- Country Filter -->
        <div class="col-md-3">
            <select name="country" class="form-control">
                <option value="">All Countries</option>
                <?php
                $countries = mysqli_query($con, "SELECT DISTINCT country FROM jobs");
                while ($c = mysqli_fetch_assoc($countries)) {
                    $selected = (isset($_GET['country']) && $_GET['country'] == $c['country']) ? 'selected' : '';
                    echo "<option value='{$c['country']}' $selected>{$c['country']}</option>";
                }
                ?>
            </select>
        </div>

        <!-- Experience Filter -->
        <div class="col-md-3">
            <select name="experience" class="form-control">
                <option value="">Any Experience</option>
                <?php
                $exp = mysqli_query($con, "SELECT DISTINCT experience FROM jobs");
                while ($e = mysqli_fetch_assoc($exp)) {
                    $selected = (isset($_GET['experience']) && $_GET['experience'] == $e['experience']) ? 'selected' : '';
                    echo "<option value='{$e['experience']}' $selected>{$e['experience']}</option>";
                }
                ?>
            </select>
        </div>
<div class="col-md-2">
            <button type="submit" class="filter-btn w-50">Filter</button>
        </div>
    </div>
            </form>



    <div class="row">
        <?php 
        if (mysqli_num_rows($jobs) > 0) {
            while ($row = mysqli_fetch_assoc($jobs)) { ?>
                <div class="col-md-6 mb-4">
                    <div class="card job-card h-100">
                        <img src="images/<?php echo $row['image']; ?>" class="card-img-top p-3" alt="Job Image" style="height: 180px; object-fit: contain;">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['job_title']; ?></h4>
                            <h6><?php echo $row['company_name']; ?> — <?php echo $row['country'] . ', ' . $row['state']; ?></h6>
                            <p class="card-text"><?php echo substr($row['job_description'], 0, 100); ?>...</p>
                            <ul class="list-unstyled">
                                <li><strong>Salary:</strong> ₹<?php echo $row['salary_min']; ?> - ₹<?php echo $row['salary_max']; ?> / <?php echo $row['salary_type']; ?></li>
                                <li><strong>Experience:</strong> <?php echo $row['experience']; ?></li>
                                <li><strong>Qualification:</strong> <?php echo $row['qualification']; ?></li>
                            </ul>
                        </div>

                        <div class="card-footer bg-white border-0 text-end">
                                                    <div class="d-flex justify-content-end gap-2">
                            <!-- View Button -->
                            <a href="jobs-details.php?id=<?php echo $row['id']; ?>" class="action-btn view-btn">View</a>

                            <!-- Save Button -->
                            <form action="save-jobs.php" method="post">
                                <input type="hidden" name="job_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="save_job" class="action-btn save-btn">Save</button>
                            </form>

                            <!-- Apply Button -->
                            <form action="apply_job.php" method="post">
                                <input type="hidden" name="job_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="apply_job" class="action-btn apply-btn">Apply</button>
                            </form>

                            <!-- Like Button -->
                            <button type="button" class="like-btn" onclick="toggleLike(this)">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>

                        </div>

                    </div>
                </div>
        <?php }
        } else {
            echo "<p class='text-center text-danger'>No jobs found matching your search/filter.</p>";
        } ?>
    </div>
</div>

<!-- ✅ JavaScript for Like Toggle -->
<script>
    function toggleLike(btn) {
        btn.classList.toggle('liked');
    }
</script>

<?php include 'footer.php'; ?>
