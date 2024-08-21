<?php
     include 'init.php'; ?>

<div class="container"><br>
    <div class="row">
        <div class="col-lg-3">
            <h2 id="get-qoute-title">Get a Quote</h2>
        </div>
        <div class="col-lg-9">
            <nav aria-label="breadcrumbs">
                <ol class="breadcrumbs" dir="rtl">
                    <li class="breadcrumbs-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumbs-item active" aria-current="page"> Get a Quote</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div id="carouselExampleDark" class="carousel carousel-dark slide company">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/img-company.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                    class="bi bi-three-dots" viewBox="0 0 16 16" style="color: #ffe718;">
                    <path
                        d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3" />
                </svg>
                <h5 style="color: #fff !important;">CONTACT WITH US</h5>
                <h1>Get a Quote</h1>
                <p style="color: #fff">Send us your project details today to get a quote from our experts team. If you have your project’s
                    details in PDF or another format, please attach your file in the form below. </p>
            </div>
        </div>
    </div>
</div><br>


<div class="container company">
    <div class="row">
        <div class="col-lg-8 form">
            <h2 class="title">Get a Quote Form</h2>
            <div class="elementor-divider"></div><br>

            <p class="subtitle">Call or submit our online form to request an estimate or for general questions about
                Certified Contractors and our services. We look forward to serving you! </p>
            <br>

            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name <svg xmlns="http://www.w3.org/2000/svg" width="10"
                            height="10" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                        </svg></label>
                    <input type="text" class="form-control" id="name" placeholder="Plase enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your E-mail <svg xmlns="http://www.w3.org/2000/svg" width="10"
                            height="10" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                        </svg></label>
                    <input type="email" class="form-control" id="email" placeholder="Plase enter your email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Your Phone <svg xmlns="http://www.w3.org/2000/svg" width="10"
                            height="10" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                        </svg></label>
                    <input type="tel" class="form-control" id="phone" placeholder="Plase enter your phone">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Your Company <svg xmlns="http://www.w3.org/2000/svg"
                            width="10" height="10" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                        </svg></label>
                    <input type="text" class="form-control" id="company" placeholder="Plase enter your company name">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Quote subject <svg xmlns="http://www.w3.org/2000/svg"
                            width="10" height="10" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                        </svg></label>
                    <input type="text" class="form-control" id="subject" placeholder="Plase enter quote subject">
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Select your country <svg xmlns="http://www.w3.org/2000/svg"
                            width="10" height="10" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                        </svg></label>
                    <select class="form-select" id="country" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">USA</option>
                        <option value="2">France</option>
                        <option value="3">Germany</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Best Time to Call <svg xmlns="http://www.w3.org/2000/svg"
                            width="10" height="10" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                        </svg></label>
                    <select class="form-select" id="time" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">08h00-10h00</option>
                        <option value="2">10h00-12h00</option>
                        <option value="3">12h00-14h00</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="service" class="form-label">Type Service <svg xmlns="http://www.w3.org/2000/svg"
                            width="10" height="10" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                            <path
                                d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1" />
                        </svg></label>
                    <select class="form-select" id="service" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">Construction</option>
                        <option value="2">Land Analysis</option>
                        <option value="3">House Renovation</option>
                        <option value="1">Home Design</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your message</label>
                    <textarea class="form-control" id="message" rows="3"
                        placeholder="Please enter your message"></textarea>
                </div>
            </form><br>

            <button type="button" class="btn btn-warning" style="background-color: #ffe718;"> Submit </button>
        </div>
        <div class="col-lg-4">
            <h2 class="subtitle">OUR BROCHURES​</h2>
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
            </div><br><br>

            <h2 class="subtitle">WORKING TIME​</h2>
            <div class="elementor-divider"></div>

            <p class="paragraph">Our support available to help you 24 hours a day, seven days a week.</p>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                    </svg>Mon–Fri: 08:00–18:00
                </li>
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                    </svg>Sat: 08:00–14:00
                </li>
                <li class="list-group-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                    </svg>Sun: Closed
                </li>
            </ul><br><br>

            <img src="images/img-company2.jpg" class="rounded mx-auto d-block" alt="...">
            <div class="box2">
                <h3 style="color: #fff">Do You Have any Questions?</h3>
                <div class="paragraph mt-3">
                    Submit a business inquiry online or visit the nearest BuildWall office.
                </div> 
                <a type="button" class="btn btn-light" href="contact.php">
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

<?php
     include $tpl . 'footer.php'; ?>

