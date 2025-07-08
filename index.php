<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-dark text-white">
    <div class="container mb-5">
        <h4 class="text-center">DelphianLogic in Action</h4>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo</p>
        <form id="sliderForm" enctype="multipart/form-data">
            <input type="hidden" name="id" id="sliderId">
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="tab_name" id="tabName" class="form-control" placeholder="Tab Name"
                        required>
                </div>
                <div class="col-md-4">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="col-md-4">
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="col-12">
                    <textarea name="description" id="description" class="form-control"
                        placeholder="Description"></textarea>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" id="resetForm">Clear</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid px-md-5">
        <div class="row d-none d-md-flex">
            <div class="col-md-3">
                <div class="tab-container" id="tabList"></div>
            </div>
            <div class="col-md-5">
                <div id="sliderContent" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" id="carouselInner"></div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#sliderContent"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#sliderContent"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img id="previewImage" src="images/default.jpg" class="img-fluid border rounded"
                    style="aspect-ratio: 1 / 1;" />
            </div>
        </div>

        <div class="d-block d-md-none">
            <div class="accordion" id="mobileAccordion"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>