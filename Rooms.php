<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JD Farm - Rooms</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
       .row {
            display: flex;
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
        .column {
            flex: 50%;
            max-width: 50%;
        }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .column {
            flex: 100%;
            max-width: 100%;
        }
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark">
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">Filters</h4>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column mt-3 align-items-stretch" id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">Check Availablity</h5>
                                    <label class="form-label" style="font-weight: 500;">Check-in</label>
                                    <input type="date" class="form-control shadow-none">
                                    <label class="form-label" style="font-weight: 500;">Check-out</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none m-1">
                                        <label class="form-check-label" for="f1" style="font-weight: 500;">Facility 1</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none m-1">
                                        <label class="form-check-label" for="f2" style="font-weight: 500;">Facility 2</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none m-1">
                                        <label class="form-check-label" for="f3" style="font-weight: 500;">Facility 3</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none m-1">
                                        <label class="form-check-label" for="f4" style="font-weight: 500;">Facility 4</label>
                                    </div>
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <label class="form-label" style="font-weight: 500;">Adults</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div>
                                            <label class="form-label" style="font-weight: 500;">Children</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </nav>
                </div>

                <div class="col-lg-9 col-md-12 px-4">

                    <?php
                        $room_res = select("SELECT * FROM `rooms` WHERE `status`=?",[1],'i' );

                        while($room_data = mysqli_fetch_assoc($room_res))
                        {

                        $fea_q = mysqli_query($con,"SELECT f.name FROM `features` f 
                            INNER JOIN `room_features` rfea ON f.id = rfea.features_id 
                            WHERE rfea.room_id = '$room_data[id]';");                      

                        }
                    
                     ?>

                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/Rooms/room 7.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">Room 1</h5>
                                <div class="features mb-3">
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
                                <div class="facilities mb-3">
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
                                <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                        5 Adults
                                    </span>
                                    <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                       4 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <a href="admin/reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/Rooms/room 5.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">Room 2</h5>
                                <div class="features mb-3">
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
                                <div class="facilities mb-3">
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
                                 <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                        5 Adults
                                    </span>
                                    <span class="badge text-bg-light text-dark mb-3 text-wrap lh-base">
                                       4 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <a href="admin/reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            </div>
                        </div>
                    </div>

            </div>
        </div>

        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">Room Rate</h2>
            <div class="h-line bg-dark">
            </div>
            <table class="table" text-center align-items-center>
                <thead class="head" align-items-center>
                    <tr>
                    <th scope="col">Rooms</th>
                    <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>AC Room (Excluding Food)</td>
                    <td>₹3,500</td>
                    </tr>
                    <tr>
                    <td>Non-AC Room (Excluding Food)</td>
                    <td>₹3,000</td>
                    </tr>
                    <tr>
                    <td>Package (Group Discount Available, with food) </td>
                    <td>₹2,200 (Per Person, Per Day) </td>
                    </tr>
                    <tr>
                    <td>Full Bungalow (Excluding Food)</td>
                    <td>₹20,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">Gallery</h2>
            <div class="h-line bg-dark">
            </div>
        <div class="row">
            <div class="column">
                <img src="images/rooms/Home.jpg">
                <img src="images/rooms/Dining Hall.jpg">
                <img src="images/rooms/nature.jpg">
                
            </div>
            <div class="column">
                <img src="images/rooms/lighting.jpg">
                <img src="images/rooms/pool.jpg">
                <img src="images/rooms/room 6.jpg">
            </div>
            <div class="column">
                <img src="images/rooms/table tennis.jpg">
                <img src="images/rooms/img23.jpg">
                <img src="images/rooms/room 6.jpg">
            </div>
            <div class="column">
                <img src="images/rooms/Night View.jpg">
                <img src="images/rooms/View.jpg">
                <img src="images/rooms/img42.jpg">
            </div>
        </div>
            
        </div>
        <?php require('inc/footer.php'); ?>



</body>

</html>