<?php
     include 'init.php'; ?>

<div style="background-color: #f5f6f6; padding: 30px 10px 10px; margin-top: -16px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 id="get-qoute-title">Project V1</h2>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumbs">
                    <ol class="breadcrumbs" dir="rtl">
                        <li class="breadcrumbs-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumbs-item active" aria-current="page">Project V1</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div><br>



<div class="container project">
    <h1 class="mb-3">Long-term Parking, Miami</h1>
    <div class="row v1">
        <div class="col-lg-9">
            <img src="images/project/project1.jpg" class="img-fluid mb-4" alt="...">
            <img src="images/project/project2.jpg" class="img-fluid mb-4" alt="...">
            <img src="images/project/project3.jpg" class="img-fluid mb-4" alt="...">
            <img src="images/project/project4.jpg" class="img-fluid mb-4" alt="...">
            <img src="images/project/project5.jpg" class="img-fluid mb-4" alt="...">
        </div>
        <div class="col-lg-3">
            <div class="fixed-right-div">
                <h3 class="subtitle">Description</h3>
                <div class="mb-3" style="background: #ffe718; text-align: left; width:30px; height: 5px;"></div>
                <p class="paragraph">
                    This landmark project, a 27-story tower in Portland’s downtown core houses five levels of
                    underground
                    parking, two levels of retail space, a 10-screen cinema.
                </p>
                <h3 class="subtitle">
                    Project details
                </h3>
                <div class="mb-3" style="background: #ffe718; text-align: left; width:30px; height: 5px;"></div>
                <p class="fst-italic paragraph">Client: Port of miami
                    Location: Miami, FL</p>

                <h3 class="subtitle">
                    Project skills
                </h3>
                <div class="mb-3" style="background: #ffe718; text-align: left; width:30px; height: 5px;"></div>

                <div class="progress-container">
                    Using eco materials <span class="progress-text">45%</span>
                    <div class="progress mb-3" role="progressbar" aria-label="Warning example" aria-valuenow="45"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated"
                            style="width: 45%; background-color: #ffe718 !important;">
                        </div>
                    </div>
                </div>

                <div class="progress-container">
                    Design variations <span class="progress-text">45%</span>
                    <div class="progress mb-3" role="progressbar" aria-label="Warning example" aria-valuenow="45"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated"
                            style="width: 45%; background-color: #ffe718 !important;">
                        </div>
                    </div>
                </div>

                <div class="progress-container mb-4">
                    Extra man-hours <span class="progress-text">45%</span>
                    <div class="progress mb-3" role="progressbar" aria-label="Warning example" aria-valuenow="45"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar  progress-bar-striped progress-bar-animated"
                            style="width: 45%; background-color: #ffe718 !important;">
                        </div>
                    </div>
                </div>

                <a href="singleteam.php" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-link" viewBox="0 0 16 16">
  <path d="M6.354 5.5H4a3 3 0 0 0 0 6h3a3 3 0 0 0 2.83-4H9q-.13 0-.25.031A2 2 0 0 1 7 10.5H4a2 2 0 1 1 0-4h1.535c.218-.376.495-.714.82-1z"/>
  <path d="M9 5.5a3 3 0 0 0-2.83 4h1.098A2 2 0 0 1 9 6.5h3a2 2 0 1 1 0 4h-1.535a4 4 0 0 1-.82 1H12a3 3 0 1 0 0-6z"/>
</svg> Project link</a>
            </div>
        </div>
    </div>
</div>



<?php
     include $tpl . 'lists.php'; ?>

<?php
     include $tpl . 'footer.php'; ?>