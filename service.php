<?php
include 'koneksi.php';
?>      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="row g-0 ">
        <div class="col-md-2 d-flex flex-column p-3 text-white bg-dark" style="height: 100vh;">
            <a class="d-flex align-items-center text-white text-decoration-none"><i class="bi bi-border-style me-2"></i><span class="fs-4 fw-bold ">Freaky mode</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white" id="masterBtn"><i class="bi bi-house me-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="service.php" class="nav-link text-white" id="servicesBtn"><i class="bi bi-tools me-2"></i>Service</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/6285704330669" class="nav-link text-white"><i class="bi bi-chat me-2"></i></i>Chat Me</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-2"></i><strong>Profile</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark text-small shadow show" aria-labelledby="dropdownUser1" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -33.6667px, 0px);" data-popper-placement="top-start">
                    <li><a class="dropdown-item" href="#">Cart</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Help</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
                </div>
        </div>
        <div class="col-md-10 bg-white">
                <h1 class="mt-3 ps-5" style="font-weight: bold;">Edit Data</h1>
                <div class="col-md-10 mt-3 ps-5">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Project Name</th>
                                <th scope="col">Description</th>
                                <th scope="col" class="text-center">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                        include 'koneksi.php';
                                                        $query = mysqli_query($connect, "SELECT * FROM data");
                                                        while ($data = mysqli_fetch_array($query)){
                                                            ?>
                                        <td><?php echo $data['project_n']?></td>                
                                        <td><?php echo $data['descrip_add']?></td>
                                        <td>
                                        <a href="edit.php?id=<?php echo $data['id']; ?>"class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        </td>
                        </tbody> <?php } ?>
                    </table>
                    <form class="mt-5 w-50">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"required></textarea>
                            <label for="floatingTextarea2">Critics and Suggestion</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>