<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOPPÉ - Elevate Your Everyday Style</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- ลิงก์ไฟล์ CSS หลัก และ CSS ของ Slider ที่ถูกแปลงมาจาก SCSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">

    <!-- ฟอนต์ไอคอนจาก FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- ฟอนต์จาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ==================== 1. HEADER / NAVBAR ==================== -->
    <header class="header">
        <div class="container navbar">
            <a href="#" class="logo">SHOPPÉ</a>
            <nav aria-label="เมนูหลัก" class="nav-links">
                <ul>
                    <li><a href="#" class="active">HOME</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li><a href="#">CATEGORIES <i class="fa-solid fa-chevron-down"></i></a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
            <div class="nav-icons">
                <div class="search-bar">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search..." aria-label="ค้นหาสินค้า">
                </div>
                <button type="button" aria-label="รายการโปรด" class="icon-btn"><i class="fa-regular fa-heart"></i></button>
                <button type="button" aria-label="ตะกร้าสินค้า" class="icon-btn cart-icon">
                    <i class="fa-solid fa-bag-shopping"></i>
                    <span class="badge">2</span>
                </button>
                <a href="#" class="login-link"><i class="fa-regular fa-user"></i> Login</a>
            </div>
        </div>
    </header>

    <!-- ==================== 2. MAIN CONTENT ==================== -->
    <main>
        <!-- ======== SLIDER SECTION (จากที่ผู้ใช้แนบมา) ======== -->
        <div class="wrapper">
            <div class="content">
                <div class="bg-shape">
                    <!-- ขอใช้รูปภาพตามที่คุณแนบมาเพื่อให้ Layout แสดงผลถูกต้องที่สุดก่อนนะครับ -->
                    <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405214/starwars/logo.webp" alt="">
                </div>

                <div class="product-img">
                    <div class="product-img__item" id="img1">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405217/starwars/item-1.webp" alt="star wars" class="product-img__img">
                    </div>
                    <div class="product-img__item" id="img2">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405217/starwars/item-2.webp" alt="star wars" class="product-img__img">
                    </div>
                    <div class="product-img__item" id="img3">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405218/starwars/item-3.webp" alt="star wars" class="product-img__img">
                    </div>
                    <div class="product-img__item" id="img4">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405215/starwars/item-4.webp" alt="star wars" class="product-img__img">
                    </div>
                </div>

                <div class="product-slider">
                    <button class="prev disabled">
                        <span class="icon">
                            <svg class="icon icon-arrow-right">
                                <use xlink:href="#icon-arrow-left"></use>
                            </svg>
                        </span>
                    </button>
                    <button class="next">
                        <span class="icon">
                            <svg class="icon icon-arrow-right">
                                <use xlink:href="#icon-arrow-right"></use>
                            </svg>
                        </span>
                    </button>

                    <div class="product-slider__wrp swiper-wrapper">
                        <!-- Slide 4 -->
                        <div class="product-slider__item swiper-slide" data-target="img4">
                            <div class="product-slider__card">
                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405223/starwars/item-4-bg.webp" alt="star wars" class="product-slider__cover">
                                <div class="product-slider__content">
                                    <h1 class="product-slider__title">STORMTROPER <br>HELMET</h1>
                                    <span class="product-slider__price">$1.299,<sup>99</sup></span>
                                    <div class="product-ctr">
                                        <div class="product-labels">
                                            <div class="product-labels__title">HELMET SIZE</div>
                                            <div class="product-labels__group">
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type5"><span class="product-labels__txt">S</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type5" checked><span class="product-labels__txt">M</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type5"><span class="product-labels__txt">L</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type5"><span class="product-labels__txt">XL</span></label>
                                            </div>
                                        </div>
                                        <span class="hr-vertical"></span>
                                        <div class="product-inf">
                                            <div class="product-inf__percent">
                                                <div class="product-inf__percent-circle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                                        <defs>
                                                            <linearGradient id="gradient4" x1="0%" y1="0%" x2="0%" y2="100%">
                                                                <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                                                                <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                                                            </linearGradient>
                                                        </defs>
                                                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none" />
                                                    </svg>
                                                </div>
                                                <div class="product-inf__percent-txt">80%</div>
                                            </div>
                                            <span class="product-inf__title">DURABILITY RATE</span>
                                        </div>
                                    </div>
                                    <div class="product-slider__bottom">
                                        <button class="product-slider__cart">ADD TO CART</button>
                                        <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 1 -->
                        <div class="product-slider__item swiper-slide" data-target="img1">
                            <div class="product-slider__card">
                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405222/starwars/item-1-bg.webp" alt="star wars" class="product-slider__cover">
                                <div class="product-slider__content">
                                    <h1 class="product-slider__title">IMPERIAL ARMY’S <br> TIE FIGHTER</h1>
                                    <span class="product-slider__price">$9.999,<sup>99</sup></span>
                                    <div class="product-ctr">
                                        <div class="product-labels">
                                            <div class="product-labels__title">ENGINE UNIT</div>
                                            <div class="product-labels__group">
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type1" checked><span class="product-labels__txt">P-S4 TWIN</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type1"><span class="product-labels__txt">P-W401</span></label>
                                            </div>
                                        </div>
                                        <span class="hr-vertical"></span>
                                        <div class="product-inf">
                                            <div class="product-inf__percent">
                                                <div class="product-inf__percent-circle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                                        <defs>
                                                            <linearGradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
                                                                <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                                                                <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                                                            </linearGradient>
                                                        </defs>
                                                        <circle cx="50" cy="50" r="47" stroke-dasharray="225, 300" stroke="#cb2240" stroke-width="4" fill="none" />
                                                    </svg>
                                                </div>
                                                <div class="product-inf__percent-txt">75%</div>
                                            </div>
                                            <span class="product-inf__title">DURABILITY</span>
                                        </div>
                                    </div>
                                    <div class="product-slider__bottom">
                                        <button class="product-slider__cart">ADD TO CART</button>
                                        <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="product-slider__item swiper-slide" data-target="img2">
                            <div class="product-slider__card">
                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405222/starwars/item-2-bg.webp" alt="star wars" class="product-slider__cover">
                                <div class="product-slider__content">
                                    <h1 class="product-slider__title">KYLO REN'S <br> LIGHTSABER</h1>
                                    <span class="product-slider__price">$1.699,<sup>99</sup></span>
                                    <div class="product-ctr">
                                        <div class="product-labels">
                                            <div class="product-labels__title">VOLTAGE RANGE</div>
                                            <div class="product-labels__group">
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type3" checked><span class="product-labels__txt">2000 <sup>WATT</sup></span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type3"><span class="product-labels__txt">2800 <sup>WATT</sup></span></label>
                                            </div>
                                            <div class="product-labels__title">LASER SIZE</div>
                                            <div class="product-labels__group">
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type2"><span class="product-labels__txt">S</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type2" checked><span class="product-labels__txt">M</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type2"><span class="product-labels__txt">L</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type2"><span class="product-labels__txt">XL</span></label>
                                            </div>
                                        </div>
                                        <span class="hr-vertical"></span>
                                        <div class="product-inf">
                                            <div class="product-inf__percent">
                                                <div class="product-inf__percent-circle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                                        <defs>
                                                            <linearGradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%">
                                                                <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                                                                <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                                                            </linearGradient>
                                                        </defs>
                                                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none" />
                                                    </svg>
                                                </div>
                                                <div class="product-inf__percent-txt">80%</div>
                                            </div>
                                            <span class="product-inf__title">DURABILITY</span>
                                        </div>
                                    </div>
                                    <div class="product-slider__bottom">
                                        <button class="product-slider__cart">ADD TO CART</button>
                                        <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="product-slider__item swiper-slide" data-target="img3">
                            <div class="product-slider__card">
                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405215/starwars/item-3-bg.webp" alt="star wars" class="product-slider__cover">
                                <div class="product-slider__content">
                                    <h1 class="product-slider__title">IMPERIAL ARMY'S <br>DEATH STAR</h1>
                                    <span class="product-slider__price">$9.999,<sup>99</sup></span>
                                    <div class="product-ctr">
                                        <div class="product-labels">
                                            <div class="product-labels__title">HYPERDRIVE RATING</div>
                                            <div class="product-labels__group">
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type6" checked><span class="product-labels__txt">CLASS 4</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type6"><span class="product-labels__txt">CLASS 20</span></label>
                                            </div>
                                            <div class="product-labels__title">ARMANENT</div>
                                            <div class="product-labels__group">
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type7" checked><span class="product-labels__txt">SUPERLASER</span></label>
                                                <label class="product-labels__item"><input type="radio" class="product-labels__checkbox" name="type7"><span class="product-labels__txt">TURBOLASER</span></label>
                                            </div>
                                        </div>
                                        <span class="hr-vertical"></span>
                                        <div class="product-inf">
                                            <div class="product-inf__percent">
                                                <div class="product-inf__percent-circle">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                                        <defs>
                                                            <linearGradient id="gradient3" x1="0%" y1="0%" x2="0%" y2="100%">
                                                                <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                                                                <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                                                            </linearGradient>
                                                        </defs>
                                                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none" />
                                                    </svg>
                                                </div>
                                                <div class="product-inf__percent-txt">80%</div>
                                            </div>
                                            <span class="product-inf__title">DURABILITY RATE</span>
                                        </div>
                                    </div>
                                    <div class="product-slider__bottom">
                                        <button class="product-slider__cart">ADD TO CART</button>
                                        <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ==================== 3. FOOTER ==================== -->
    <footer class="footer">
        <div class="container footer-content">
            <div class="footer-brand">
                <h2><i class="fa-solid fa-bag-shopping"></i> SHOPPÉ</h2>
                <p>ร้านค้าของเรา คัดสรรสินค้าคุณภาพ ดีไซน์สวย ทันสมัย ในราคาที่คุ้มค่า จัดส่งรวดเร็ว ปลอดภัย 100%</p>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h3>เมนู</h3>
                <ul>
                    <li><a href="#">หน้าหลัก</a></li>
                    <li><a href="#">ร้านค้า</a></li>
                    <li><a href="#">หมวดหมู่สินค้า</a></li>
                    <li><a href="#">เกี่ยวกับเรา</a></li>
                    <li><a href="#">ติดต่อเรา</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>บริการลูกค้า</h3>
                <ul>
                    <li><a href="#">วิธีการสั่งซื้อ</a></li>
                    <li><a href="#">การชำระเงิน</a></li>
                    <li><a href="#">การจัดส่งสินค้า</a></li>
                    <li><a href="#">การรับประกันและคืนเงิน</a></li>
                    <li><a href="#">คำถามที่พบบ่อย (FAQ)</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>เกี่ยวกับเรา</h3>
                <ul>
                    <li><a href="#">เกี่ยวกับเรา</a></li>
                    <li><a href="#">ข่าวสารและกิจกรรม</a></li>
                    <li><a href="#">ร่วมงานกับเรา</a></li>
                    <li><a href="#">รีวิวจากลูกค้า</a></li>
                </ul>
            </div>
            <div class="footer-newsletter">
                <h3>รับข่าวสารและโปรโมชั่น</h3>
                <p>ไม่พลาดทุกข้อเสนอพิเศษและสินค้าใหม่ก่อนใคร</p>
                <form class="newsletter-form">
                    <label for="newsletter-email" class="sr-only">อีเมลของคุณ</label>
                    <input type="email" id="newsletter-email" placeholder="กรอกอีเมลของคุณ" required>
                    <button type="submit" aria-label="สมัครรับข่าวสาร"><i class="fa-solid fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>&copy; 2026 SHOPPÉ. All Rights Reserved.</p>
            <div class="payment-methods">
                <span>ช่องทางการชำระเงิน</span>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-solid fa-building-columns"></i>
                <i class="fa-brands fa-cc-paypal"></i>
            </div>
        </div>
    </footer>

    <!-- SVG สำหรับปุ่มลูกศร Slider -->
    <svg class="sr-only">
        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
            <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
        </symbol>
        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
            <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
        </symbol>
    </svg>

    <!-- jQuery and Swiper JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- ลิงก์ไฟล์ JavaScript หลัก -->
    <script src="assets/js/script.js"></script>
</body>

</html>