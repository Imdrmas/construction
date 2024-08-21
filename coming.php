<?php
     include 'init.php'; ?>

<div style="background-color: #f5f6f6; padding: 30px 10px 10px; margin-top: -16px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 id="get-qoute-title">Coming soon</h2>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumbs">
                    <ol class="breadcrumbs" dir="rtl">
                        <li class="breadcrumbs-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumbs-item active" aria-current="page">Coming soon</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="coming">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/coming.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption">
                    <img src="images/logo.jpg" width="180" height="42" style="margin: 0 auto;" class="img-fluid"
                        alt="logo">
                    <div class="mt-3 mb-3"
                        style="background: #ffe718; text-align: center; width:30px;  margin: 0 auto; height: 5px;">
                    </div>

                    <h1 class="d-md-block d-none d-sm-block">WE ARE COMING SOON</h1>
                    <div style="color: #ffffff;
  font-size: 22px;
  font-weight: 500;
  text-transform: none;
  font-style: normal;
  text-decoration: none;
  line-height: 1.44em;
     margin: 20px;
  letter-spacing: 0px;" class="d-md-block d-none d-sm-block">We are working very hard on the new version of our site.
                        <br> It will bring a lot of new features.
                       Stay tuned!</div>

                    <div class="content d-md-block d-none d-sm-block" style="width: 400px; margin: 0 auto;">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="content-time">
                                    <div class="zero">00 <span class="span">:</span></div>
                                    <p class="time">Days</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-time">
                                    <div class="zero">00 <span class="span">:</span></div>
                                    <p class="time">Hours</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-time">
                                    <div class="zero">00 <span class="span">:</span></div>
                                    <p class="time">Mintes</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="content-time">
                                    <div class="zero" style="margin-right: 30px;">00 </div>
                                    <p class="time">seconds</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="mobile mt-4"  style="padding: 10px; text-align: center; margin: 0 auto">
        <h1>WE ARE COMING SOON</h1>
        <p
            style="color: #040960; font-size: 20px; paddin: 10px; text-align: center; font-weight: 500; text-transform: none; font-style: normal; text-decoration: none; line-height: 1.44em; letter-spacing: 0px;">
            We are working very hard on the new version of our site. It will bring
            a lot of new features.
            Stay tuned!</p>

            <div class="container content-time">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3">
                            <div class="zero">00 <span class="span">:</span></div>
                            <p class="time">Days</p>
                            </div>
                            <div class="col-lg-3">
                            <div class="zero">00 <span class="span">:</span></div>
                            <p class="time">Hours</p>
                            </div>
                            <div class="col-lg-3">
                            <div class="zero">00 <span class="span">:</span></div>
                            <p class="time">Mintes</p>
                            </div>
                            <div class="col-lg-3">
                            <div class="zero">00 <span class="span">:</span></div>
                            <p class="time">seconds</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
            </div>
    </div>


</section>



<?php
     include $tpl . 'lists.php'; ?>

<?php
     include $tpl . 'footer.php'; ?>