<?php
     include 'init.php'; ?>

<div style="background-color: #f5f6f6; padding: 30px 10px 10px; margin-top: -16px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 id="get-qoute-title">Project V2</h2>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumbs">
                    <ol class="breadcrumbs" dir="rtl">
                        <li class="breadcrumbs-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumbs-item active" aria-current="page">Project V2</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div><br>


<div class="container project">
    <div class="row v2">
        <h1>Fox Tower, Portland</h1>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/project/carousel1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/project/carousel2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/project/carousel3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/project/carousel4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/project/carousel5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>

            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active">
                    <img src="images/project/carousel1.jpg" alt="img" class="img-thumbnail">
                </li>
                <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1">
                    <img src="images/project/carousel2.jpg" alt="img" class="img-thumbnail">
                </li>
                <li class="hidden-xs" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2">
                    <img src="images/project/carousel3.jpg" alt="img" class="img-thumbnail">
                </li>
                <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3">
                    <img src="images/project/carousel4.jpg" alt="img" class="img-thumbnail">
                </li>
                <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4">
                    <img src="images/project/carousel5.jpg" alt="img" class="img-thumbnail">
                </li>
            </ol>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <i class="bi bi-chevron-left" style="color:#000"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <i class="bi bi-chevron-right" style="color:#000"></i>
            </button>


        </div>
    </div>
</div>


<br><br>

<div class="container project2">
    <div class="row v2">
        <div class="col-lg-9">
            <h4 class="subtitle">Description</h4>
            <div class="mb-3" style="background: #ffe718; text-align: left; width:30px; height: 5px;"></div>
            <p class="paragraph">This project created a new parking garage and headquarters in a highly-secure
                environment at Miami International Airport. The sustainable building features.</p>
        </div>
        <div class="col-lg-3">
            <h3 class="subtitle">
                Project details
            </h3>
            <div class="mb-3" style="background: #ffe718; text-align: left; width:30px; height: 5px;"></div>
            <p class="fst-italic paragraph">Client: Port of miami
                Location: Miami, FL</p>
            <a href="singleteam.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                    fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
                    <path
                        d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9q-.13 0-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z" />
                    <path
                        d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4 4 0 0 1-.82 1H12a3 3 0 1 0 0-6z" />
                </svg> Project link</a>
        </div>
    </div>
</div>

<br>

<?php
     include $tpl . 'lists.php'; ?>

<?php
     include $tpl . 'footer.php'; ?>