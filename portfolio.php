<?php include 'init.php'; ?>

<section class="portfolio">
    <div style="background-color: #f5f6f6; padding: 30px 10px 10px; margin-top: -16px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 id="get-qoute-title">Portfolio</h2>
                </div>
                <div class="col-lg-9">
                    <nav aria-label="breadcrumbs">
                        <ol class="breadcrumbs" dir="rtl">
                            <li class="breadcrumbs-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumbs-item active" aria-current="page"> Portfolio </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <div class="row">
    <div class="content">
        <div class="elementor-divider" style="width: 5%; margin: 0 auto;"></div>
        <h2 class="subtitle mt-3">Portfolio</h2>
        <h1 class="subtitle">
            Check out our projects completed this year
        </h1>
        <p class="paragraph" style="text-align: center;">
            Every day we work on different objects all over the USA. During our history we have created hundreds of
            buildings and have provided many corresponding servives. Below are our best projects of 2017.
        </p>
    </div>
    </div>
    </div>

    <div class="container mt-4">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" data-target="#all">
                <div class="nav-link active" role="tab" aria-controls="all" aria-selected="true">ALL</div>
            </li>
            <li class="nav-item" data-target="#building">
                <div class="nav-link" role="tab" aria-controls="building" aria-selected="false">BUILDING</div>
            </li>
            <li class="nav-item" data-target="#interior">
                <div class="nav-link" role="tab" aria-controls="interior" aria-selected="false">INTERIOR</div>
            </li>
            <li class="nav-item" data-target="#office">
                <div class="nav-link" role="tab" aria-controls="office" aria-selected="false">OFFICE</div>
            </li>
            <li class="nav-item" data-target="#consulting">
                <div class="nav-link" role="tab" aria-controls="consulting" aria-selected="false">CONSULTING</div>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">

                <div class="container">
                    <div class="row">
                        <?php
        // JSON string
        $json = '[
                {
                   "url": "https://static01.nyt.com/images/2023/09/21/multimedia/21sp-cli-home-01-cqhz/21sp-cli-home-01-cqhz-videoSixteenByNineJumbo1600.jpg",
                    "alt": "Image 1",
                    "title": "Card Title 1",
                    "description": "This is a description for the first card."
                },
                {
                    "url": "https://content.jdmagicbox.com/comp/karimnagar/n8/9999px878.x878.130808170055.v1n8/catalogue/mikhul-projects-boiwada-karimnagar-commercial-builders-qkmk9lu3ij.jpg",
                    "alt": "Image 2",
                    "title": "Card Title 2",
                    "description": "This is a description for the second card."
                },
                {
                     "url": "https://content.jdmagicbox.com/comp/patna/n8/0612px612.x612.160308110220.t8n8/catalogue/s-s-construction-and-consultancy-dak-bunglow-road-patna-interior-designers-6vdr6o.jpg",
                    "alt": "Image 3",
                    "title": "Card Title 3",
                    "description": "This is a description for the third card."
                },
                            {
                "url": "https://i.pinimg.com/originals/4e/42/d2/4e42d2f44d508f6474a92c5802d7beaf.jpg",
                "alt": "Image 1",
                "title": "Card Title 1",
                "description": "This is a description for the first card."
            },
            {
                "url": "https://foyr.com/learn/wp-content/uploads/2019/03/commercial-interior-design.jpg",
                "alt": "Image 2",
                "title": "Card Title 2",
                "description": "This is a description for the second card."
            },
            {
                "url": "https://vlkarchitects.com/assets/projects/SCM_Bios_5.jpg",
                "alt": "Image 3",
                "title": "Card Title 3",
                "description": "This is a description for the third card."
            },
                        {
                "url": "https://media.architecturaldigest.com/photos/55f9df5c00a69f791feb21fc/16:9/w_1280,c_limit/dam-images-architecture-2014-02-buzzworthy-buildings-01-heydar-aliyev-center-h670-search.jpg",
                "alt": "Image 1",
                "title": "Card Title 1",
                "description": "This is a description for the first card."
            },
            {
                "url": "https://qph.cf2.quoracdn.net/main-qimg-94b6fed8e142f6100bfda0fa97f3e679-lq",
                "alt": "Image 2",
                "title": "Card Title 2",
                "description": "This is a description for the second card."
            },
            {
                "url": "https://media.womanmagazine.co.nz/wp-content/uploads/2023/02/Zaha-Hadid-New-zealand.jpeg?strip=all&lossy=1&quality=88&webp=85&sharp=1&ssl=1",
                "alt": "Image 3",
                "title": "Card Title 3",
                "description": "This is a description for the third card."
            },
                        {
                "url": "https://www.energy.gov/sites/default/files/styles/full_article_width/public/2022-03/bto-ze-offices.jpg",
                "alt": "Image 1",
                "title": "Card Title 1",
                "description": "This is a description for the first card."
            },
            {
                "url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbqhVp9s8Es3vSM5gxSGIRUSHplUm6BosO4w&s",
                "alt": "Image 2",
                "title": "Card Title 2",
                "description": "This is a description for the second card."
            },
            {
                "url": "https://t3.ftcdn.net/jpg/05/70/80/44/360_F_570804488_WkCUIDZpZH5ftOWk1n4XLITu1UjX0T0c.jpg",
                "alt": "Image 3",
                "title": "Card Title 3",
                "description": "This is a description for the third card."
            }
        ]';

        // Decode the JSON string into a PHP array
        $images = json_decode($json, true);

        // Check if decoding was successful
        if (is_array($images)) {
            // Loop through the array and display each image in a Bootstrap card
            foreach ($images as $image) {
                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                    <a target="_blank" href="' . htmlspecialchars($image['url']) . '">
                    <div class="content">
                        <img src="' . htmlspecialchars($image['url']) . '" class="card-img-top" alt="' . htmlspecialchars($image['alt']) . '" >
                         <div class="middle">
                         <div class="look"><i class="bi bi-search mt-2"></i></div>
                        </div>
                       </div>
                      </a>
                    </div>
                </div>';
            }
        } else {
            echo '<div class="alert alert-danger">Failed to decode JSON.</div>';
        }
        ?>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="building" role="tabpanel" aria-labelledby="building-tab">

                <div class="container mt-4">
                    <div class="row">
                        <?php

            // JSON string
            $json = '[
                {
                   "url": "https://static01.nyt.com/images/2023/09/21/multimedia/21sp-cli-home-01-cqhz/21sp-cli-home-01-cqhz-videoSixteenByNineJumbo1600.jpg",
                    "alt": "Image 1",
                    "title": "Card Title 1",
                    "description": "This is a description for the first card."
                },
                {
                    "url": "https://content.jdmagicbox.com/comp/karimnagar/n8/9999px878.x878.130808170055.v1n8/catalogue/mikhul-projects-boiwada-karimnagar-commercial-builders-qkmk9lu3ij.jpg",
                    "alt": "Image 2",
                    "title": "Card Title 2",
                    "description": "This is a description for the second card."
                },
                {
                     "url": "https://content.jdmagicbox.com/comp/patna/n8/0612px612.x612.160308110220.t8n8/catalogue/s-s-construction-and-consultancy-dak-bunglow-road-patna-interior-designers-6vdr6o.jpg",
                    "alt": "Image 3",
                    "title": "Card Title 3",
                    "description": "This is a description for the third card."
                }
            ]';
    
            // Decode the JSON string into a PHP array
            $images = json_decode($json, true);
    
            // Check if decoding was successful
            if (is_array($images)) {
                // Loop through the array and display each image in a Bootstrap card
                foreach ($images as $image) {
                    echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                    <a target="_blank" href="' . htmlspecialchars($image['url']) . '">
                    <div class="content">
                        <img src="' . htmlspecialchars($image['url']) . '" class="card-img-top" alt="' . htmlspecialchars($image['alt']) . '" >
                         <div class="middle">
                         <div class="look"><i class="bi bi-search mt-2"></i></div>
                        </div>
                       </div>
                      </a>
                    </div>
                </div>';
                }
            } else {
                echo '<div class="alert alert-danger">Failed to decode JSON.</div>';
            }
            ?>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="interior" role="tabpanel" aria-labelledby="interior-tab">
                <div class="container mt-4">
                    <div class="row">
                        <?php
        // JSON string
        $json = '[
            {
                "url": "https://i.pinimg.com/originals/4e/42/d2/4e42d2f44d508f6474a92c5802d7beaf.jpg",
                "alt": "Image 1",
                "title": "Card Title 1",
                "description": "This is a description for the first card."
            },
            {
                "url": "https://foyr.com/learn/wp-content/uploads/2019/03/commercial-interior-design.jpg",
                "alt": "Image 2",
                "title": "Card Title 2",
                "description": "This is a description for the second card."
            },
            {
                "url": "https://vlkarchitects.com/assets/projects/SCM_Bios_5.jpg",
                "alt": "Image 3",
                "title": "Card Title 3",
                "description": "This is a description for the third card."
            }
        ]';

        // Decode the JSON string into a PHP array
        $images = json_decode($json, true);

        // Check if decoding was successful
        if (is_array($images)) {
            // Loop through the array and display each image in a Bootstrap card
            foreach ($images as $image) {
                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                    <a target="_blank" href="' . htmlspecialchars($image['url']) . '">
                    <div class="content">
                        <img src="' . htmlspecialchars($image['url']) . '" class="card-img-top" alt="' . htmlspecialchars($image['alt']) . '" >
                         <div class="middle">
                         <div class="look"><i class="bi bi-search mt-2"></i></div>
                        </div>
                       </div>
                      </a>
                    </div>
                </div>';
            }
        } else {
            echo '<div class="alert alert-danger">Failed to decode JSON.</div>';
        }
        ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">

                <div class="container mt-4">
                    <div class="row">
                        <?php
        // JSON string
        $json = '[
            {
                "url": "https://media.architecturaldigest.com/photos/55f9df5c00a69f791feb21fc/16:9/w_1280,c_limit/dam-images-architecture-2014-02-buzzworthy-buildings-01-heydar-aliyev-center-h670-search.jpg",
                "alt": "Image 1",
                "title": "Card Title 1",
                "description": "This is a description for the first card."
            },
            {
                "url": "https://qph.cf2.quoracdn.net/main-qimg-94b6fed8e142f6100bfda0fa97f3e679-lq",
                "alt": "Image 2",
                "title": "Card Title 2",
                "description": "This is a description for the second card."
            },
            {
                "url": "https://media.womanmagazine.co.nz/wp-content/uploads/2023/02/Zaha-Hadid-New-zealand.jpeg?strip=all&lossy=1&quality=88&webp=85&sharp=1&ssl=1",
                "alt": "Image 3",
                "title": "Card Title 3",
                "description": "This is a description for the third card."
            }
        ]';

        // Decode the JSON string into a PHP array
        $images = json_decode($json, true);

        // Check if decoding was successful
        if (is_array($images)) {
            // Loop through the array and display each image in a Bootstrap card
            foreach ($images as $image) {
                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                    <a target="_blank" href="' . htmlspecialchars($image['url']) . '">
                    <div class="content">
                        <img src="' . htmlspecialchars($image['url']) . '" class="card-img-top" alt="' . htmlspecialchars($image['alt']) . '" >
                         <div class="middle">
                         <div class="look"><i class="bi bi-search mt-2"></i></div>
                        </div>
                       </div>
                      </a>
                    </div>
                </div>';
            }
        } else {
            echo '<div class="alert alert-danger">Failed to decode JSON.</div>';
        }
        ?>
                    </div>
                </div>


            </div>
            <div class="tab-pane fade" id="consulting" role="tabpanel" aria-labelledby="v-tab">
                <div class="container mt-4">
                    <div class="row">
                        <?php
        // JSON string
        $json = '[
            {
                "url": "https://www.energy.gov/sites/default/files/styles/full_article_width/public/2022-03/bto-ze-offices.jpg",
                "alt": "Image 1",
                "title": "Card Title 1",
                "description": "This is a description for the first card."
            },
            {
                "url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbqhVp9s8Es3vSM5gxSGIRUSHplUm6BosO4w&s",
                "alt": "Image 2",
                "title": "Card Title 2",
                "description": "This is a description for the second card."
            },
            {
                "url": "https://t3.ftcdn.net/jpg/05/70/80/44/360_F_570804488_WkCUIDZpZH5ftOWk1n4XLITu1UjX0T0c.jpg",
                "alt": "Image 3",
                "title": "Card Title 3",
                "description": "This is a description for the third card."
            }
        ]';

        // Decode the JSON string into a PHP array
        $images = json_decode($json, true);

        // Check if decoding was successful
        if (is_array($images)) {
            // Loop through the array and display each image in a Bootstrap card
            foreach ($images as $image) {
                echo '
                <div class="col-md-4">
                    <div class="card mb-4">
                    <a target="_blank" href="' . htmlspecialchars($image['url']) . '">
                    <div class="content">
                        <img src="' . htmlspecialchars($image['url']) . '" class="card-img-top" alt="' . htmlspecialchars($image['alt']) . '" >
                         <div class="middle">
                         <div class="look"><i class="bi bi-search mt-2"></i></div>
                        </div>
                       </div>
                      </a>
                    </div>
                </div>';
            }
        } else {
            echo '<div class="alert alert-danger">Failed to decode JSON.</div>';
        }
        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> <br>

<?php include $tpl . 'lists.php'; ?>

<?php include $tpl . 'footer.php'; ?>