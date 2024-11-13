<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="row g-0 ">
        
        <div class="col-md-2 d-flex flex-column p-3 text-white bg-dark" style="height: 100vh;">
            <a class="d-flex align-items-center text-white text-decoration-none"><i class="bi bi-border-style me-2"></i><span class="fs-4 fw-bold ">Freaky library</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white" id="masterBtn"><i class="bi bi-house me-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="service.php" class="nav-link text-white" id="servicesBtn"><i class="bi bi-tools me-2"></i>Services</a>
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
            <div class="container-fluid" id="content-area">
                <div class="row">
                    <h1 class="mt-3 ps-5" style="font-weight: bold;">Home Library</h1>
                </div>
                <div class="row">
                    <div class="col-md-7 mt-3 ps-5 ">
                        <div class="card">
                            <div class="card-header">
                                <h6>Data Project</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-responsive">
                                    <thead>                                        
                                        <th>Project Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
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
                                        <a href="delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tbody> <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Add Project</h6>
                                </div>
                                <div class="card-body">
                                    <form action="create.php" method="POST">
                                        <label class="form-label">Project Name</label>
                                        <input type="text" name="project_n" id="project_n" class="form-control is-invalid" required>
                                        <label class="form-label">Description</label>
                                        <textarea name="descrip_add" id="descrip_add" class="form-control"></textarea>
                                        <label class="form-label">Project Picture</label>
                                        <input type="file" class="form-control"><br>

                                        <input class="btn btn-success" type="submit" value="Simpan">
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>