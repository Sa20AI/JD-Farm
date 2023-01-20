<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JD Farm - Home </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Merienda', cursive;

        }


        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }


        input[type=number] {
            -moz-appearance: textfield;
        }

        .custom-bg {
            background-color: #2ec1ac;
        }

        .custom-bg:hover {
            background-color: #279e8c;
        }

        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/Carousel/Villa.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/Carousel/View.jpg" class="w-100 d-block" />
                </div>
                <div class=" swiper-slide">
                    <img src="images/Carousel/Nature.jpg" class="w-100 d-block" />
                </div>
                <div class=" swiper-slide">
                    <img src="images/Carousel/Night.jpg" class="w-100 d-block" />
                </div>
                <div class=" swiper-slide">
                    <img src="images/Carousel/pool.jpg" class="w-100 d-block" />
                </div>

            </div>
        </div>

    </div>
    </div>

    <!-- check Availability form -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availablity</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-l mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/Rooms/Room 1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Room 1</h5>
                        <h6 class="mb-4">₹1800 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Balcony
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                Hammocks
                            </span>
                        </div>
                        <div class="d-flex, justify-content-evenly, mb-1">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/Rooms/room 4.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Room 2</h5>
                        <h6 class="mb-4">₹1800 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Balcony
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                Hammocks
                            </span>
                        </div>
                        <div class="d-flex, justify-content-evenly, mb-1">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/Rooms/room 3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Room 3</h5>
                        <h6 class="mb-4">₹1800 per Night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Bathroom
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                1 Balcony
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                Wifi
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                AC
                            </span>
                            <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                Hammocks
                            </span>
                        </div>
                        <div class="d-flex, justify-content-evenly, mb-1">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none"> More details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Rooms</a>
        </div>
    </div>
    </div>

    <!-- Facilities -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Our Facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/Features/wifi-solid.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/Features/icons8-hammock-64.png" width="80px">
                <h5 class="mt-3">Hammocks</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/Features/icons8-swimming-pool-50.png" width="80px">
                <h5 class="mt-3">Swimming Pool</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/Features/speakers-svgrepo-com.svg" width="80px">
                <h5 class="mt-3">Speakers</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/Features/icons8-swimming-pool-50.png" width="80px">
                <h5 class="mt-3">Swimming Pool</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> TESTIMONIALS</h2>
    <div class="container">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/Features/wifi-solid" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Cumque ratione eligendi ipsam ea odio nesciunt at doloribus autem libero illo.
                        Assumenda facilis ex laborum voluptatum? Aliquam quidem inventore esse quaerat.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/Features/wifi-solid" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Cumque ratione eligendi ipsam ea odio nesciunt at doloribus autem libero illo.
                        Assumenda facilis ex laborum voluptatum? Aliquam quidem inventore esse quaerat.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/Features/wifi-solid" width="30px">
                        <h6 class="m-0 ms-2">Random User1</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Cumque ratione eligendi ipsam ea odio nesciunt at doloribus autem libero illo.
                        Assumenda facilis ex laborum voluptatum? Aliquam quidem inventore esse quaerat.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <?php ?>


        <!-- Reach Us -->


        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> Reach Us</h2>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100" rounded height="320" src="<?php echo $contact_r['iframe'] ?>"
                        loading="lazy"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white">
                        <h5>Call us</h5>
                        <a href="tel: <?php echo $contact_r['pn1'] ?>"
                            class="d-inline-block mb-2 text-decoration-none text-dark ">
                            <i class="bi bi-telephone-fill"></i> +
                            <?php echo $contact_r['pn1'] ?>
                        </a>
                        <br>
                        <?php
                        if ($contact_r['pn2'] != '') {
                            echo <<<data
                            <a href="tel: +$contact_r[pn2]" class="d-inline-block mb-2 text-decoration-none text-dark "> <i class="bi bi-telephone-fill"></i> +$contact_r[pn2]</a>
                            data;
                        }
                        ?>
                        <br>
                        <?php
                        if ($contact_r['pn3'] != '') {
                            echo <<<data
                            <a href="tel: +$contact_r[pn3]" class="d-inline-block mb-2 text-decoration-none text-dark "> <i class="bi bi-telephone-fill"></i> +$contact_r[pn3]</a>
                            data;
                        }
                        ?>
                        <br>
                        <?php
                        if ($contact_r['pn4'] != '') {
                            echo <<<data
                            <a href="tel: +$contact_r[pn4]" class="d-inline-block mb-2 text-decoration-none text-dark "> <i class="bi bi-telephone-fill"></i> +$contact_r[pn4]</a>
                            data;
                        }
                        ?>
                    </div>
                    <br>
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Mail us</h5>
                        <a href="mail: patildiksha017@gmail.com"
                            class="d-inline-block mb-2 text-decoration-none text-dark"> <i
                                class="bi bi-envelope-at-fill"></i>patildiksha017@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>

        <?php require('inc/footer.php'); ?>


        <!-- JavaScript Bundle with Popper -->
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".swiper-container", {
                spaceBetween: 30,
                effect: "fade",
                loop: true,
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                }
            });

            var swiper = new Swiper(".swiper-testimonials", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                slidesPerView: "3",
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 1,
                    },
                    1024: {
                        slidesPerView: 1,
                    },
                }
            });
        </script>
</body>

</html>