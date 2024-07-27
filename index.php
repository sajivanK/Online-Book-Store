<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library</title>

    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.remixicon.com/releases/v1.2.2/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">


</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="" class="nav_logo">
                <i class="ri-book-3-line"></i> E-Book
            </a>

            <div class="nav_menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active-link">
                            <i class="ri-home-line"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#featured" class="nav_link">
                            <i class="ri-book-line"></i>
                            <span>Books</span>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#discount" class="nav_link">
                            <i class="ri-price-tag-3-line"></i>
                            <span>Discount</span>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#new" class="nav_link">
                            <i class="ri-bookmark-line"></i>
                            <span>New Books</span>
                        </a>
                    </li>

                    <li class="nav_item">
                        <a href="#testimonial" class="nav_link">
                            <i class="ri-message-3-line"></i>
                            <span>Testimonial</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="nav_action">
                <!--search button-->
                <i class="ri-search-line search-button" id="search-button"></i>

                <!--Login button-->
                <a href="login.html">
                    <i class="ri-user-line login-button" id="login-button"></i>
                </a>

                <!--Theme button-->
                <i class="ri-moon-clear-line theme" id="theme-button"></i>
            </div>
        </nav>
    </header>

    <!--**********************SEARCH********************-->
    <div class="search" id="search-content">
        <form action="search.php" class="search_form">
            <input type="search" placeholder="Enter book title" class="search_input" name="title">
            <button class="search_button" onclick="searchBook()">Search</button>
        </form>
        <i class="ri-close-line search_close" id="search-close"></i>
    </div>


    <main class="main">
        <!--===========================HOME===============================-->

        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_data">
                    <h1 class="home_title">
                        Brows & <br>
                        Select E-Books
                    </h1>

                    <p class="home_description">
                        Find the best e-book from your favorite
                        writers, explore hundreds of books with all 
                        possible categories, take advantages of the 
                        50% discount and much more..
                    </p>

                    <a href="#" class="button">Explore Now</a>
                </div>

                <div class="home_images">
                    <div class="home_swiper swiper">
                        <div class="swiper-wrapper">
                            <article class="home_article swiper-slide">
                                <img src="image/home-book1.png" alt="image" class="home_image">
                            </article>

                            <article class="home_article swiper-slide">
                                <img src="image/home-book2.png" alt="image" class="home_image">
                            </article>

                            <article class="home_article swiper-slide">
                                <img src="image/home-book3.png" alt="image" class="home_image">
                            </article>

                            <article class="home_article swiper-slide">
                                <img src="image/home-book4.png" alt="image" class="home_image">
                            </article>

                            <article class="home_article swiper-slide">
                                <img src="image/home-book5.png" alt="image" class="home_image">
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services section">
            <div class="services_container container grid">
                <article class="services_card">
                    <i class="ri-truck-line"></i>
                    <h3 class="services_title">Free shipping</h3>
                    <p class="services_description">Order more than $100</p>
                </article>

                <article class="services_card">
                    <i class="ri-lock-2-line"></i>
                    <h3 class="services_title">Secure Payment</h3>
                    <p class="services_description">100% Secure Payment</p>
                </article>

                <article class="services_card">
                    <i class="ri-customer-service-2-line"></i>
                    <h3 class="services_title">24/7 Support</h3>
                    <p class="services_description">Call us anytime</p>
                </article>
            </div>
        </section>


        <section class="featured section" id="featured">
            <h2 class="section_title">
                Featured Books
            </h2>

            <div class="featured_container container">
                <div class="featured_swiper swiper">
                    <div class="swiper-wrapper">
                        <article class="featured_card swiper-slide">
                            <img src="image/book1.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book2.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book3.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book4.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book5.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book6.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book7.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book8.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book9.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>

                        <article class="featured_card swiper-slide">
                            <img src="image/book10.jpg" alt="" class="featured_img">

                            <h2 class="featured_title">Featured Book</h2>
                            <div class="featured_prices">
                                <span class="featured_discount">$11.99</span>
                                <span class="featured_price">$19.99</span>
                            </div>


                            <button class="button">Add to Cart</button>
                            <div class="featured_actions">
                                <button><i class="ri-search-line"></i></button>
                                <button><i class="ri-heart-3-line"></i></button>
                                <button><i class="ri-eye-line"></i></button>
                            </div>
                        </article>
                    </div>

                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </div>
            </div>
        </section>

        <section class="discount section" id="discount">
            <div class="discount_container container grid">
                <div class="discount_data">
                    <h2 class="discount_title section_title">
                        Up to 50% Discount
                    </h2>

                    <p class="discount_description">
                        Take advantage of discount days we
                        have for you, buy books from your favorite
                        writers, the more you buy, the more
                        discount we have for you.
                    </p>

                    <a href="#" class="button">Shop Now</a>
                </div>

                <div class="discount_images">
                    <img src="image/book9.jpg" alt="" class="discount_img-1">
                    <img src="image/book11.jpg" alt="" class="discount_img-2">
                </div>
            </div>
        </section>


        <section class="new section" id="new">
            <h2 class="section_title">
                New Books
            </h2>

            <div class="new_container container">

                <div class="new_swiper swiper">
                    <div class="swiper-wrapper">
                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book5.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book6.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book4.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book7.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book3.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book8.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book2.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book9.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book1.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book11.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="new_swiper swiper">
                    <div class="swiper-wrapper">
                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book1.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book1.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book2.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book2.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book3.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book3.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book4.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book4.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/home-book5.png" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="new_card swiper-slide">
                            <img src="image/book6.jpg" alt="new-image" class="new_img">


                            <div>
                                <h2 class="new_title">New Book</h2>
                                <div class="new_prices">
                                    <span class="new_discount">$7.99</span>
                                    <span class="new_price">$14.99</span>
                                </div>

                                <div class="new_star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-half-fill"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="join section">
            <div class="join_container">

                <img src="image/join-bg.jpg" alt="join_background" class="join_bg">
                <div class="join_data container grid">
                    <h2 class="join_title section_title">
                        Subscribe To Receive <br>
                        The Latest Updates
                    </h2>

                    <form action="" class="join_form">
                        <input type="email" placeholder="Enter email" class="join_input">
                        <button type="submit" class="join_button button">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>

        <section class="testimonial section" id="testimonial">
            <h2 class="section_title">
                Customer Opinions
            </h2>

            <div class="testimonial_container container">
                <div class="testimonial_swiper swiper">
                    <div class="swiper-wrapper">
                        <article class="testimonial_card swiper-slide">
                            <img src="image/testimonial-perfil-1.png" alt="image" class="testimonial_img">

                            <h2 class="testimonial_title">Rial Loz</h2>
                            <p class="testimonial_description">
                                The best website to buy books, the purchase
                                is very easy to make has great discounts.
                            </p>

                            <div class="testimonial_stars">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </article>

                        <article class="testimonial_card swiper-slide">
                            <img src="image/testimonial-perfil-2.png" alt="image" class="testimonial_img">

                            <h2 class="testimonial_title">Rial Loz</h2>
                            <p class="testimonial_description">
                                The best website to buy books, the purchase
                                is very easy to make has great discounts.
                            </p>

                            <div class="testimonial_stars">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </article>

                        <article class="testimonial_card swiper-slide">
                            <img src="image/testimonial-perfil-3.png" alt="image" class="testimonial_img">

                            <h2 class="testimonial_title">Rial Loz</h2>
                            <p class="testimonial_description">
                                The best website to buy books, the purchase
                                is very easy to make has great discounts.
                            </p>

                            <div class="testimonial_stars">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </article>

                        <article class="testimonial_card swiper-slide">
                            <img src="image/testimonial-perfil-4.png" alt="image" class="testimonial_img">

                            <h2 class="testimonial_title">Rial Loz</h2>
                            <p class="testimonial_description">
                                The best website to buy books, the purchase
                                is very easy to make has great discounts.
                            </p>

                            <div class="testimonial_stars">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-half-fill"></i>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <footer class="footer">
        <div class="footer_container container grid">

            <div>
                <a href="#" class="footer_logo">
                    <i class="ri-book-3-line"></i> E-Book
                </a>

                <p class="footer_description">
                    Find and explore the best <br>
                    eBooks from all your <br>
                    favorite writer
                </p>
            </div>

            <div class="footer_data grid">
                <div>
                    <h3 class="footer_title">About</h3>

                    <ul class="footer_links">
                        <li>
                            <a href="#" class="footer_link"> Awards</a>
                        </li>

                        <li>
                            <a href="#" class="footer_link">FAQs</a>
                        </li>

                        <li>
                            <a href="#" class="footer_link"> Privacy policy</a>
                        </li>
                         
                        <li>
                            <a href="#" class="footer_link"> Terms of services
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer_title">Company</h3>

                    <ul class="footer_links">
                        <li>
                            <a href="#" class="footer_link"> Blogs</a>
                        </li>

                        <li>
                            <a href="#" class="footer_link">Community</a>
                        </li>

                        <li>
                            <a href="#" class="footer_link">Our team</a>
                        </li>
                         
                        <li>
                            <a href="#" class="footer_link">Help center</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer_title">Contact</h3>

                    <ul class="footer_links">
                        <li>
                            <address class="footer_info">
                                Av. Hacienda <br>
                                Lima 4321, Peru
                            </address>
                        </li>

                        <li>
                            <address class="footer_info">
                                e.book@email.com <br>
                                0987-654-321
                            </address>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer_title">Social</h3>
                    <div class="footer_social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer_social_link">
                            <i class="ri-facebook-circle-line"></i>
                        </a>

                        <a href="https://www.instagram.com/" target="_blank" class="footer_social_link">
                            <i class="ri-instagram-line"></i>
                        </a>

                        <a href="https://twitter.com/                        " target="_blank" class="footer_social_link">
                            <i class="ri-twitter-x-line"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <span class="footer_copy">
            &#169; All Rights Reserved By E-Book
        </span>
    </footer>

    <!--=====================Scroll Up===============-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>
    
    <script src="swiper-bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>