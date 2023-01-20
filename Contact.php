<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JD Farm - Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <?php require('inc/links.php'); ?>
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark">
            <!-- <p class="text-center mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.Non maiores dicta suscipit sunt quia incidunt aliquid in. Expedita, ex</p>
        </div> -->
        </div>




        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 ">
                        <iframe class="w-100 rounded mb-4" rounded height="320" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
                        <h5>Address</h5>
                        <a href="<?php echo $contact_r['gmap'] ?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                            <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address'] ?>
                        </a>
                        <h5 class="mt-4">Call us</h5>
                        <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark "> <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?></a>
                        <a href="tel: +<?php echo $contact_r['pn2'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark "> <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn2'] ?></a>
                        <a href="tel: +<?php echo $contact_r['pn3'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark "> <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn3'] ?></a>
                        <a href="tel: +<?php echo $contact_r['pn4'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark "> <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn4'] ?></a>
                        <h5 class="mt-4">Mail us</h5>
                        <a href="mail: <?php echo $contact_r['email'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark"> <i class="bi bi-envelope-at-fill"></i><?php echo $contact_r['email'] ?></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 px-4">
                    <div class="bg-white rounded shadow p-4 ">
                        <form method="POST">
                            <h5>Send a Message</h5>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Name</label>
                                <input name="name" required type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Email</label>
                                <input name="email" required type="email" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Subject</label>
                                <input name="subject" required type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="form-label" style="font-weight: 500;">Message</label>
                                <textarea name="message" required class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                            </div>
                            <button type="submit" name="send" class="btn text-white custom-bg mt-3"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php 
        
         if(isset($_POST['send']))
         {
            $frm_data = filteration($_POST);

            $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
            $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

            $res = insert($q, $values, 'ssss');
            if($res==1){
                alert('success', 'Mail sent!');
            }
            else{
                alert('error', 'Server Down! Try again later');
            }
           
           
         }
        ?>

        <?php require('inc/footer.php'); ?>



</body>

</html>