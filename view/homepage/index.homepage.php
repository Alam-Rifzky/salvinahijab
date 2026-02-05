<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="<?= $data['base_url'] ?>assets/homepage/landingpage.css">
</head>
<body>
    <!-- Navbar -->
    <?php include_once $data['homedir'] . 'view/fragments/nav/top-nav.homepage.php'; ?>

    <!-- Alert Banner -->
    <div class="alert alert-banner text-center mb-0" role="alert">
        <i class="bi bi-clock-history"></i> Max payment 24 hours after order. Happy shopping, Salvinia!
    </div>

    <!-- Hero Carousel -->
    <div class="container-fluid hero-carousel px-0">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="4"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="5"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="6"></button>
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="7"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1764818134301-Cover_shopee_resized256-jpg.webp" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1764649001790-Cover-shoope_1_resized256-jpg.webp" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1760153875526-Cover-shoope_resized256-jpg.webp" alt="Banner 3">
                </div>
                <div class="carousel-item">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1754972180027-Cover-web-shoope_3_resized256-jpg.webp" alt="Banner 4">
                </div>
                <div class="carousel-item">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1747105971616-cover--web-shoppee_3_resized256-jpg.webp" alt="Banner 5">
                </div>
                <div class="carousel-item">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1740015686404-cover--web-shoppee-copy_resized256-jpg.webp" alt="Banner 6">
                </div>
                <div class="carousel-item">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1736414554440-selaras-cover--web-shoppee_resized256-jpg.webp" alt="Banner 7">
                </div>
                <div class="carousel-item">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1735871723829-rayana-cover--web-shoppee_resized256-jpg.webp" alt="Banner 8">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container" id="products">
        <div class="section-header">
            <h2>Featured Products</h2>
            <p>Discover our premium hijab collection</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card product-card">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendor/171/product/Cover-shoope_1_1753498771295_resized512-jpg.webp" alt="Yura Series">
                    <div class="card-body">
                        <h5 class="product-title">[Ready Stock] Yura Series</h5>
                        <p class="product-price">Rp 105,000</p>
                        <a href="#" class="btn btn-primary w-100" style="background: var(--primary-color); border: none;">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card product-card">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendor/171/product/COVER-WEB-profil_7_1745291040175_resized512-jpg.webp" alt="Allura Signature">
                    <div class="card-body">
                        <h5 class="product-title">[Ready Stock] Allura Signature</h5>
                        <p class="product-price">Rp 195,000</p>
                        <a href="#" class="btn btn-primary w-100" style="background: var(--primary-color); border: none;">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card product-card">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendor/171/product/COVER-WEB-profil_5_1740038041649_resized512-jpg.webp" alt="Symphony Essentials Kids">
                    <div class="card-body">
                        <h5 class="product-title">[Kids Dress-Koko] Symphony Essentials</h5>
                        <p class="product-price">Rp 135,000</p>
                        <a href="#" class="btn btn-primary w-100" style="background: var(--primary-color); border: none;">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card product-card">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendor/171/product/COVER-WEB-profil_5_1740037813113_resized512-jpg.webp" alt="Symphony Essentials Mom-Dad">
                    <div class="card-body">
                        <h5 class="product-title">[Mom - Dad] Symphony Essentials</h5>
                        <p class="product-price">Rp 75,000</p>
                        <a href="#" class="btn btn-primary w-100" style="background: var(--primary-color); border: none;">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card product-card">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendor/171/product/COVER-WEB-profil_4_1735872988219_resized512-jpg.webp" alt="Rayana Luxury Kids">
                    <div class="card-body">
                        <h5 class="product-title">[Kids Dress-Koko] Rayana Luxury</h5>
                        <p class="product-price">Rp 130,000</p>
                        <a href="#" class="btn btn-primary w-100" style="background: var(--primary-color); border: none;">View Details</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card product-card">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendor/171/product/COVER-WEB-profil_4_1735872770000_resized512-jpg.webp" alt="Rayana Luxury Mom-Dad">
                    <div class="card-body">
                        <h5 class="product-title">[Mom - Dad] Rayana Luxury</h5>
                        <p class="product-price">Rp 85,000</p>
                        <a href="#" class="btn btn-primary w-100" style="background: var(--primary-color); border: none;">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <!-- About Column -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="https://d2kchovjbwl1tk.cloudfront.net/vendors/171/assets/image/1693878683040-Lowercase3_1_resized256-png.webp" alt="Salvina Hijab" class="footer-logo">
                    <p style="color: #e0e0e0; line-height: 1.8;">
                        Salvina Hijab offers premium quality hijabs and modest fashion for the modern Muslim woman. We combine style, comfort, and faith in every piece.
                    </p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-tiktok"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Best Sellers</a></li>
                        <li><a href="#">Sale</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <!-- Customer Service -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Customer Service</h5>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Size Guide</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>

                <!-- Contact Info & Newsletter -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Get In Touch</h5>
                    <div class="contact-info">
                        <i class="bi bi-geo-alt-fill"></i>
                        <div>
                            <strong>Address:</strong><br>
                            Jakarta, Indonesia
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="bi bi-envelope-fill"></i>
                        <div>
                            <strong>Email:</strong><br>
                            info@salvinahijab.com
                        </div>
                    </div>
                    <div class="contact-info">
                        <i class="bi bi-phone-fill"></i>
                        <div>
                            <strong>Phone:</strong><br>
                            +62 812-3456-7890
                        </div>
                    </div>

                    <h5 class="mt-4">Newsletter</h5>
                    <p style="color: #e0e0e0;">Subscribe for exclusive offers!</p>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email address" required>
                            <button class="btn" type="submit">Subscribe</button>
                        </div>
                    </form>

                    <div class="payment-methods">
                        <div class="payment-icon"><i class="bi bi-credit-card"></i> Visa</div>
                        <div class="payment-icon"><i class="bi bi-credit-card"></i> Master</div>
                        <div class="payment-icon"><i class="bi bi-wallet2"></i> OVO</div>
                        <div class="payment-icon"><i class="bi bi-wallet2"></i> GoPay</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2025 Salvina Hijab. All rights reserved. | Designed with <i class="bi bi-heart-fill" style="color: var(--secondary-color);"></i> for you</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
