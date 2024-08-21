<?php
     include 'init.php'; ?>

<div style="background-color: #f5f6f6; padding: 30px 10px 10px; margin-top: -16px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 id="get-qoute-title">Carrelage</h2>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumbs">
                    <ol class="breadcrumbs" dir="rtl">
                        <li class="breadcrumbs-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumbs-item"><a href="service.php">Service</a></li>
                        <li class="breadcrumbs-item active" aria-current="page">Carrelage</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div><br>

<div class="container">
    <div class="row">
        <h2 class="title">Carrelage</h2>
        <p>
            Le carrelage est un revêtement de sol ou de mur très populaire pour les espaces intérieurs et extérieurs.
            Voici les étapes générales pour poser du carrelage :
        </p>
        <div class="social-icons mb-4">
            <?php
                 // Sample data
                 $pageURL = urlencode("https://yourwebsite.com"); // URL of the page to share
                 $pageTitle = urlencode("Your Page Title"); // Title of the page to share

                // Share links
                $facebookURL = "https://www.facebook.com/sharer.php?u={$pageURL}";
                $twitterURL = "https://twitter.com/intent/tweet?text={$pageTitle}&url={$pageURL}";
                $linkedinURL = "https://www.linkedin.com/shareArticle?mini=true&url={$pageURL}&title={$pageTitle}";
                $whatsappURL = "https://wa.me/?text={$pageTitle} {$pageURL}";
                $emailURL = "mailto:?subject={$pageTitle}&body=Check this out: {$pageURL}";
                ?>
            <a href="<?php echo $facebookURL; ?>" target="_blank" class="facebook" title="Share on Facebook"
                style="padding: 14px 18px"><i class="fab fa-facebook-f"></i></a>
            <a href="<?php echo $twitterURL; ?>" target="_blank" class="twitter" title="Share on Twitter"><i
                    class="fab fa-twitter"></i></a>
            <a href="<?php echo $linkedinURL; ?>" target="_blank" class="linkedin" title="Share on LinkedIn"><i
                    class="fab fa-linkedin-in"></i></a>
            <a href="<?php echo $whatsappURL; ?>" target="_blank" class="whatsapp" title="Share on WhatsApp"><i
                    class="fab fa-whatsapp"></i></a>
            <a href="<?php echo $emailURL; ?>" target="_blank" class="email" title="Share via Email"><i
                    class="fas fa-envelope"></i></a>
        </div>
        <img src="images/service/tiling1.avif" class="img-fluid img-thumbnail" alt="...">
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4">
            <ul class="list-group">
                <li class="list-group-item" style="background-color: #ffe718;">Matériaux et outils nécessaires :</li>
            </ul>
            <ol class="list-group list-group-flush">
                <li class="list-group-item">Carrelage (céramique, porcelaine, pierre naturelle, etc.)</li>
                <li class="list-group-item">Colle à carrelage (mortier-colle)</li>
                <li class="list-group-item">Croisillons (pour l'espacement des carreaux)</li>
                <li class="list-group-item">Niveau à bulle</li>
                <li class="list-group-item">Truelle crantée</li>
                <li class="list-group-item">Mètre ruban</li>
                <li class="list-group-item">Coupes-carreaux (manuel ou électrique)</li>
                <li class="list-group-item">Maillet en caoutchouc</li>
                <li class="list-group-item">Éponge</li>
                <li class="list-group-item">Joints pour carrelage</li>
                <li class="list-group-item">Mélangeur (pour le mortier)</li>
            </ol>
            <ul class="list-group mt-3">
                <li class="list-group-item" style="background-color: #ffe718;">Conseils supplémentaires :</li>
            </ul>
            <p class="paragraph mt-3">Vérifiez régulièrement l'alignement et le niveau des carreaux pour garantir une surface plane et esthétique.</p>
       <p class="paragraph">Portez des gants pour protéger vos mains lors de la manipulation de la colle et des carreaux coupants.</p>
       <p class="paragraph">Laissez le carrelage sécher correctement avant d'exposer la surface à de l'eau ou à des charges lourdes.</p>
        </div>
        <div class="col-lg-8">
        <h5 class="card-title mb-3">Étapes de la pose de carrelage :</h5>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="ml-3">Préparation de la surface :</h6>
                    <!-- Paragraph with margin-left -->
                    <p class="ml-5 paragraph" style="margin-left: 10px">
                    Assurez-vous que la surface à carreler soit propre, plane et sèche. Si nécessaire, appliquez un primaire d'accrochage pour améliorer l'adhérence.
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="ml-3">Planification du calepinage :</h6>
                    <!-- Paragraph with margin-left -->
                    <p class="ml-5 paragraph" style="margin-left: 10px">
                    Mesurez la surface et planifiez la disposition des carreaux pour minimiser les coupes et obtenir un résultat esthétique. Tracez des repères pour vous guider.
                    </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="ml-3">Application de la colle :</h6>
                    <!-- Paragraph with margin-left -->
                    <p class="ml-5 paragraph" style="margin-left: 10px">
                    Mélangez la colle à carrelage selon les instructions du fabricant. Appliquez une couche uniforme de colle sur la surface à l'aide de la truelle crantée.
                </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="ml-3">Pose des carreaux :</h6>
                    <!-- Paragraph with margin-left -->
                    <p class="ml-5 paragraph" style="margin-left: 10px">
                    Posez le premier carreau en suivant les repères. Placez des croisillons entre les carreaux pour assurer un espacement uniforme. Appuyez fermement chaque carreau pour bien l'ancrer dans la colle.
                </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="ml-3">Coupe des carreaux :</h6>
                    <!-- Paragraph with margin-left -->
                    <p class="ml-5 paragraph" style="margin-left: 10px">
                    Coupez les carreaux qui nécessitent une adaptation aux bords ou aux obstacles à l'aide du coupe-carreaux.
                </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="ml-3">Pose des joints :</h6>
                    <!-- Paragraph with margin-left -->
                    <p class="ml-5 paragraph" style="margin-left: 10px">
                    Une fois les carreaux bien fixés (généralement après 24 heures), retirez les croisillons. Préparez le mortier pour les joints et appliquez-le à l'aide d'une raclette en caoutchouc, en remplissant bien les espaces entre les carreaux.
                </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="ml-3">Nettoyage</h6>
                    <!-- Paragraph with margin-left -->
                    <p class="ml-5 paragraph" style="margin-left: 10px">
                    Essuyez l'excédent de mortier à joint avec une éponge humide avant qu'il ne sèche complètement. Une fois les joints secs, nettoyez les résidus de ciment sur les carreaux avec un chiffon sec.
                </p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h6 class="ml-3">Finitions</h6>
                    <!-- Paragraph with margin-left -->
                    <p class="ml-5 paragraph" style="margin-left: 10px">
                    Vérifiez l’uniformité des joints et apportez des retouches si nécessaire. Attendez que tout soit bien sec avant de marcher sur le carrelage.
                </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-5 tiling">
    <div class="row">
        <div class="col-lg-4">
            <h4 class="subtitle">Service overview</h4>
            <div class="elementor-divider"></div>
            <img src="images/service/service7.jpg" class="img-fluid" alt="..."><br>
            <p class="paragraph mt-4">Our team will project manage your renovation and remodeling projects from start to
                finish, so you can relax and do something far more interesting with your weekends instead! You will have
                no worries while we are working on your project.</p>
            <p class="paragraph">So, all you need to do is tell us what you want, agree a budget and timescales, sign on
                the line, and we’ll do the rest!</p>
        </div>
        <div class="col-lg-4">

            <h4 class="subtitle">The process</h4>
            <div class="elementor-divider"></div>


            <div class="container mt-4">
                <div class="d-flex align-items-start">
                    <!-- Icon on the left -->
                    <div class="me-3">
                        <div class="circle" style="padding: 12px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="black">
                                <path
                                    d="M33.84 47.4C33.82 47.4 33.79 47.4 33.77 47.4C33.75 47.4 33.72 47.4 33.7 47.4H13.5C12.88 47.4 12.4 46.9 12.4 46.3V43.6C12.4 42.98 12.88 42.5 13.5 42.5C14.12 42.5 14.6 42.98 14.6 43.6V45.2H32.74V38.03C32.74 37.33 33.46 36.79 34.11 36.96C34.14 36.96 34.16 36.96 34.18 36.96H45.1V23.8H29.9V28.97C29.9 29.57 29.4 30.07 28.8 30.07C28.2 30.07 27.7 29.57 27.7 28.97V27.07H23.28C22.68 27.07 22.18 26.59 22.18 25.97C22.18 25.35 22.68 24.87 23.28 24.87H27.68V22.71C27.68 22.11 28.18 21.61 28.78 21.61H45.11V14.81H29.9V17.91C29.9 18.51 29.4 19.01 28.8 19.01C28.2 19.01 27.7 18.51 27.7 17.91V14.81H14.6V24.89H17.95C18.55 24.89 19.05 25.39 19.05 25.99C19.05 26.59 18.55 27.09 17.95 27.09H14.6V36.99H27.7V34.24C27.7 33.64 28.18 33.14 28.8 33.14C29.42 33.14 29.9 33.64 29.9 34.24V38.07C29.9 38.7 29.35 39.21 28.7 39.17C28.66 39.17 28.6 39.17 28.56 39.17H13.5C12.88 39.17 12.4 38.67 12.4 38.07V13.7C12.4 13.1 12.88 12.6 13.5 12.6H46.2C46.8 12.6 47.3 13.1 47.3 13.7V38.06C47.3 38.66 46.82 39.16 46.2 39.16H34.95V46.3C34.95 46.9 34.45 47.4 33.85 47.4H33.84Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!-- Title on the right with small text below -->
                    <div class="text-container">
                        <h4>Design-project</h4>
                        <p class="paragraph mt-2">
                            Design-project preparation in accordance with clients requirements
                        </p>
                    </div>
                </div>
            </div>


            <div class="container mt-4">
                <div class="d-flex align-items-start">
                    <!-- Icon on the left -->
                    <div class="me-3">
                        <div class="circle" style="padding: 12px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="#222931">
                                <path
                                    d="M13.1 46.86H47.1C47.7 46.86 48.2 46.36 48.2 45.76V38.09C48.2 37.49 47.72 36.99 47.1 36.99H38.47V31.53H47.1C47.7 31.53 48.2 31.03 48.2 30.43V22.76C48.2 22.16 47.72 21.66 47.1 21.66H38.47V15.1C38.47 14.5 37.97 14 37.37 14H13.1C12.5 14 12 14.5 12 15.1V45.76C12 46.36 12.48 46.86 13.1 46.86ZM32.43 44.66H20.76V39.2H32.43V44.66ZM26.33 37V31.53H36.27V36.99H26.33V37ZM20.76 29.33V23.87H32.43V29.33H20.76V29.33ZM46.01 39.2V44.66H34.64V39.2H46H46.01ZM46.01 23.86V29.33H34.64V23.87H46L46.01 23.86ZM26.34 16.2H36.28V21.66H26.33V16.2H26.34ZM14.2 16.2H24.13V21.66H14.2V16.2V16.2ZM14.2 23.86H18.56V29.33H14.2V23.87V23.86ZM14.2 31.53H24.13V36.99H14.2V31.53V31.53ZM14.2 39.19H18.56V44.66H14.2V39.2V39.19Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!-- Title on the right with small text below -->
                    <div class="text-container">
                        <h4>Construction & renovation</h4>
                        <p class="paragraph mt-2">
                            The process of construction and renovation according to project
                        </p>
                    </div>
                </div>
            </div>


            <div class="container mt-4">
                <div class="d-flex align-items-start">
                    <!-- Icon on the left -->
                    <div class="me-3">
                        <div class="circle" style="padding: 12px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="#222931">
                                <path
                                    d="M32.03 16.97C31.46 16.97 31.01 17.43 31.01 17.99V24.07H25.56L20.51 13.97C20.33 13.62 19.98 13.41 19.59 13.41H11.59C11.03 13.41 10.57 13.87 10.57 14.43V37.93L10.44 38.03C9.41005 38.73 8.80005 39.86 8.80005 41.09C8.80005 43.12 10.44 44.79 12.47 44.79H47.14C47.41 44.79 47.6601 44.67 47.8601 44.49L51.41 40.93C51.81 40.53 51.81 39.88 51.41 39.48L40.76 28.82C40.56 28.62 40.3101 28.52 40.0401 28.52H36.9001L33.05 24.67V17.97C33.05 17.42 32.59 16.97 32.03 16.97V16.97ZM12.61 15.47H18.96L23.28 24.07H17.8C17.24 24.07 16.8 24.54 16.8 25.1V29.42H12.6V15.46L12.61 15.47ZM37.51 30.57H39.6101L49.26 40.21L46.7201 42.76H38.92L39.0801 42.34C39.2201 41.94 39.28 41.54 39.28 41.11C39.28 39.88 38.6801 38.74 37.6501 38.05L37.51 37.95V30.58V30.57ZM37.2401 41.1C37.2401 42 36.5 42.75 35.59 42.75H12.49C11.59 42.75 10.84 42.01 10.84 41.1C10.84 40.2 11.58 39.46 12.48 39.46H35.5801C36.5001 39.46 37.2401 40.19 37.2401 41.1ZM35.46 29.97V37.42H12.6V31.46H17.8C18.37 31.46 18.83 31 18.83 30.44V26.12H31.6L35.4501 29.97H35.46Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!-- Title on the right with small text below -->
                    <div class="text-container">
                        <h4>Budget approval</h4>
                        <p class="paragraph mt-2">
                            Budget analysis, corrections and approval with the client
                        </p>
                    </div>
                </div>
            </div>

            <div class="container mt-4">
                <div class="d-flex align-items-start">
                    <!-- Icon on the left -->
                    <div class="me-3">
                        <div class="circle" style="padding: 12px">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                fill="#222931">
                                <path
                                    d="M20.4875 27.5315C20.0575 27.0915 19.3675 27.0915 18.9375 27.5115L16.7775 29.6715C16.5775 29.8715 16.4475 30.1715 16.4475 30.4515C16.4475 30.7515 16.5675 31.0215 16.7775 31.2315L18.7975 33.2615C19.3975 33.8615 19.7775 34.2415 18.6275 35.9615C18.0275 36.8615 17.2275 37.1315 16.2275 37.4615C15.3275 37.7615 14.3275 38.0815 13.4475 38.9615C11.5175 40.8815 11.5175 44.0315 13.4475 45.9615C14.4175 46.9415 15.6875 47.4215 16.9475 47.4215C18.2275 47.4215 19.4975 46.9215 20.4675 45.9615C21.0275 45.4015 21.4375 44.7415 21.6675 43.9915C21.9175 43.2615 22.0475 42.7215 22.1375 42.3215C22.3375 41.5015 22.3375 41.5015 23.4575 40.7915C25.2275 39.6515 25.7275 40.1515 26.1775 40.5915L28.1975 42.6215C28.5975 43.0415 29.3375 43.0415 29.7575 42.6215L31.9175 40.4615C32.3475 40.0315 32.3475 39.3415 31.9175 38.9115L20.5175 27.5115L20.4875 27.5315ZM28.9575 40.3015L27.7075 39.0615C26.2075 37.5615 24.4575 37.5215 22.2375 38.9615C20.5575 40.0315 20.3075 40.4615 19.9775 41.8215C19.8975 42.1815 19.7775 42.6515 19.5775 43.3215C19.4275 43.7215 19.2075 44.0915 18.8975 44.4215C17.7975 45.4815 16.0575 45.4815 14.9775 44.4215C13.8975 43.3215 13.8975 41.5815 14.9775 40.5015C15.4775 40.0015 16.1275 39.8015 16.8775 39.5415C17.9975 39.1715 19.3975 38.7215 20.4275 37.1715C21.9675 34.8915 21.9475 33.3015 20.3275 31.6915L19.0875 30.4415L19.6875 29.8415L29.5275 39.6915L28.9275 40.2915L28.9575 40.3015ZM44.8375 28.5115C45.2575 28.1415 45.4975 27.6415 45.5375 27.0715C45.6375 25.3015 43.7075 23.0315 41.7375 20.8715C41.4775 20.5915 41.2675 20.3715 41.1375 20.2215C36.7175 14.8015 33.7975 12.5915 31.6875 13.0615C30.9875 13.2215 30.0875 13.7315 29.6375 15.2615L22.3375 23.7115C21.9175 23.4715 21.3875 23.5315 21.0375 23.8915C20.5975 24.3115 20.5975 25.0115 21.0375 25.4415L33.7775 38.1815C33.9775 38.3815 34.2775 38.5015 34.5475 38.5015C34.8475 38.5015 35.1175 38.3815 35.3275 38.1715C35.7275 37.7715 35.7675 37.1715 35.4275 36.7315L44.8475 28.4815L44.8375 28.5115ZM32.6175 19.4315C32.9975 19.1515 33.2375 18.7315 33.2775 18.2615C33.3575 17.3115 32.6775 16.4015 31.8775 15.5315C31.9775 15.3515 32.0775 15.2315 32.1775 15.2315C32.4575 15.1515 34.1575 15.1515 39.4475 21.6115C39.5875 21.7815 39.8175 22.0415 40.1075 22.3515C42.9075 25.4215 43.3475 26.5115 43.3275 26.9015L43.1675 27.0415C41.6675 24.0715 40.6975 22.8415 39.6875 22.5915C39.5675 22.5615 39.4375 22.5515 39.3175 22.5515C38.9875 22.5515 38.6775 22.6515 38.4175 22.8715C38.0375 23.1515 37.7675 23.0715 37.7175 23.0715C37.7375 23.0715 37.7175 23.0015 37.7875 22.8915C38.7875 20.8915 37.8875 20.0415 37.4375 19.7715C35.8375 18.7715 32.8375 20.4915 31.8975 21.7715C31.7475 21.9515 31.6275 21.9715 31.4975 21.9915C31.1975 22.0115 30.7975 21.7615 30.6375 21.5415C30.5375 21.4115 30.5375 21.3615 30.5375 21.3215C30.5675 21.2215 30.7575 20.6015 32.6075 19.4515L32.6175 19.4315ZM33.8775 35.1915L23.9275 25.2515L30.6575 17.4515C30.7775 17.6115 30.8875 17.7515 30.9575 17.8915C29.3975 18.9215 28.5775 19.8915 28.3975 20.9415C28.2775 21.6415 28.4575 22.3215 28.9275 22.9115C29.4075 23.5115 30.4275 24.2115 31.5575 24.1815C32.3975 24.1615 33.1575 23.7815 33.6575 23.0815C34.1075 22.4815 35.2175 21.9015 35.9175 21.7215C35.8775 21.7715 35.8475 21.8215 35.8175 21.8915C35.2975 22.9315 35.4975 24.0415 36.3175 24.7215C37.1175 25.3915 38.3175 25.4415 39.3175 24.8915C39.6375 25.2315 40.2875 26.1415 41.4675 28.5515L33.8675 35.2115L33.8775 35.1915ZM46.3175 36.0315C45.6575 35.0915 44.8175 33.9015 44.9175 32.0815C44.9475 31.5415 44.5675 31.0615 44.0375 30.9515C43.4975 30.8515 42.9675 31.1515 42.7875 31.6515C42.1575 33.4015 41.5175 34.6215 41.0475 35.5015C40.5175 36.5015 40.1475 37.2415 40.1475 38.0515C40.1475 39.7315 41.7175 41.1115 43.6675 41.1115C45.6175 41.1115 47.1975 39.7315 47.1975 38.0515C47.1975 37.3215 46.7975 36.7315 46.3175 36.0515V36.0315ZM43.6675 38.9115C42.8675 38.9115 42.3375 38.4515 42.3375 38.0515C42.3375 37.7815 42.6375 37.2015 42.9975 36.5315C43.1375 36.2515 43.2975 35.9515 43.4775 35.6115C43.8075 36.2815 44.1775 36.8415 44.5075 37.2915C44.6875 37.5915 44.9575 37.9715 44.9875 38.0515C44.9875 38.4515 44.4475 38.9115 43.6575 38.9115H43.6675Z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!-- Title on the right with small text below -->
                    <div class="text-container">
                        <h4>Handover</h4>
                        <p class="paragraph mt-2">
                            A full walk-through of the project with the client and the architect
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <h4 class="subtitle">Our brochures</h4>
            <div class="elementor-divider"></div>

            <div class="box-company mt-4">
                <div class="icon-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-file-pdf-fill" viewBox="0 0 16 16">
                        <path
                            d="M5.523 10.424q.21-.124.459-.238a8 8 0 0 1-.45.606c-.28.337-.498.516-.635.572l-.035.012a.3.3 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548m2.455-1.647q-.178.037-.356.078a21 21 0 0 0 .5-1.05 12 12 0 0 0 .51.858q-.326.048-.654.114m2.525.939a4 4 0 0 1-.435-.41q.344.007.612.054c.317.057.466.147.518.209a.1.1 0 0 1 .026.064.44.44 0 0 1-.06.2.3.3 0 0 1-.094.124.1.1 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256M8.278 4.97c-.04.244-.108.524-.2.829a5 5 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.5.5 0 0 1 .145-.04c.013.03.028.092.032.198q.008.183-.038.465z" />
                        <path fill-rule="evenodd"
                            d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m.165 11.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.6 11.6 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.86.86 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.84.84 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.8 5.8 0 0 0-1.335-.05 11 11 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.24 1.24 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a20 20 0 0 1-1.062 2.227 7.7 7.7 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103" />
                    </svg>
                    <h2>Company Broshure</h2>
                </div>
                <p>499 KB</p>
            </div> <br>

            <div class="box2" style="background-color: #f5f6f6;">
                <h2 class="subtitle">Do You Have any Questions?</h2>
                <div class="paragraph">
                    Submit a business inquiry online or visit the nearest BuildWall office.
                </div>
                <a type="button" class="btn mt-3" href="contact.php" style="padding: 10px 40px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                    </svg> Contact us
                </a>
            </div>

        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <h2 class="subtitle">Our Featured Content</h2>
            <div class="col-lg-4">
                <img src="images/consultation/consultation2.jpg" width="100%" height="400px" alt="Sample Image">
                <div class="text-overlay">Sandford stadium improvements</div>
            </div>
            <div class="col-lg-4">
                <img src="images/consultation/consultation3.jpg" width="100%" height="400px" alt="Sample Image">
                <div class="text-overlay">Rose Bowl Stadium Renovation</div>
            </div>
            <div class="col-lg-4">
                <img src="images/service/service7.jpg" width="100%" height="400px" alt="Sample Image">
                <div class="text-overlay">Standing down to safety</div>
            </div>
        </div>
    </div>
</section>


<?php
     include $tpl . 'lists.php'; ?>

<?php
     include $tpl . 'footer.php'; ?>