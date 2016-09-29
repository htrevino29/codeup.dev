<?php
    require 'parks_controller.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>National Parks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Date Established</th>
                    <th>Area In Acres</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($parks as $park): ?>
                <tr>
                    <td><?= $park['name']; ?></td>
                    <td><?= $park['location']; ?></td>
                    <td><?= $park['date_established']; ?></td>
                    <td><?= $park['area_in_acres']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="row text-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php if($page != 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="/national_parks.php?page=<?= $page - 1; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php for($i = 1; $i <= $max_page; $i++): ?>
                    <li class="page-item <?= ($page == $i) ? 'active' : ''; ?>">
                        <a class="page-link" href="/national_parks.php?page=<?= $i; ?>"><?= $i; ?></a>
                    </li>
                    <?php endfor; ?>
                    <?php if($page != $max_page): ?>
                    <li class="page-item">
                        <a class="page-link" href="/national_parks.php?page=<?= $page + 1; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form method="POST">
                    <div class="form-group">
                        <label for="name">Park Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Park Name">
                    </div>
                    <div class="form-group">
                        <label for="location">Park Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Park Location">
                    </div>
                    <div class="form-group">
                        <label for="date_established">Date Established</label>
                        <input type="text" class="form-control" name="date_established" id="date_established" placeholder="Date Established">
                    </div>
                    <div class="form-group">
                        <label for="area_in_acres">Area In Acres</label>
                        <input type="text" class="form-control" name="area_in_acres" id="area_in_acres" placeholder="Area In Acres">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" name="description" id="description" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Save Park</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>