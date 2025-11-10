<?php
include 'header.php';
include 'sidebar.php';
include 'connection.php';
?>

<div class="applied__job__info radius-16">
    <div class="job__filter">
        <div class="search__job">
            <div class="position-relative">
                <input type="text" id="search" placeholder="Find Top Employer" required="">
                <i class="fa-light fa-magnifying-glass"></i>
            </div>
        </div>
        <div class="filter__job">
            <div class="nice-select filter__select">
                <span class="current">All Category</span>
                <ul class="list">
                    <li data-value="Nothing" data-display="All Category" class="option selected focus">All Category</li>
                    <li data-value="1" class="option">Dhaka</li>
                    <li data-value="2" class="option">Part time</li>
                    <li data-value="3" class="option">Full Time</li>
                    <li data-value="4" class="option">Government</li>
                    <li data-value="5" class="option">NGO</li>
                    <li data-value="6" class="option">Private</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="candidate__job__alerts">
        <table class="table table-bordered t">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Alert</th>
                    <th scope="col">Job</th>
                    <th scope="col">Time</th>
                    <th scope="col" class="last__col">Action</th>
                </tr>
            </thead>
            <tbody class="rts__table__body">
                <?php
                $query = "SELECT * FROM job_alerts ORDER BY created_at DESC";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr class="single__data__table">
                            <th class="data__title" scope="row"><?php echo htmlspecialchars($row['title']); ?></th>
                            <td>
                                <div class="alert__info">
                                    <h6 class="font-20"><?php echo htmlspecialchars($row['alert_type']); ?></h6>
                                    <p><?php echo htmlspecialchars($row['location_salary']); ?></p>
                                </div>
                            </td>
                            <td>Jobs found <?php echo (int)$row['jobs_found']; ?></td>
                            <td><?php echo htmlspecialchars($row['frequency']); ?></td>
                            <td>
                                <div class="data__action">
                                    <div class="action">
                                        <!-- Edit Button -->
                                        <button class="action__btn" title="Edit">
                                            <svg>...</svg>
                                        </button>
                                        <!-- View Button -->
                                        <button class="action__btn" title="View">
                                            <svg>...</svg>
                                        </button>
                                        <!-- Delete Button -->
                                        <button class="action__btn" title="Delete">
                                            <svg>...</svg>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='5'>No job alerts found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="rts__pagination d-block mx-auto pt-40 max-content">
        <ul class="d-flex gap-2">
            <li><a href="#" class="inactive"><i class="rt-chevron-left"></i></a></li>
            <li><a class="active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="rt-chevron-right"></i></a></li>
        </ul>
    </div>
</div>

<?php include 'footer1.php'; ?>
