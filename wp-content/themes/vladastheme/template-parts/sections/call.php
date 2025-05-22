<?php
$call_background = get_field('call_background');
$phone = get_field('phone','options');
$call_title = get_field('call_title');
$call_text = get_field('call_text');
$call_button = get_field('call_button');
?>

<section class="m-call position-relative">
    <div class="overlay-1" style="background-image: url(<?php echo $call_background; ?>)"></div>
    <div class="container">
       <div class="row justify-content-between">
           <div class="col-md-5" data-aos="fade-right">
               <div class="text-center">
                   <div class="d-flex justify-content-center mb-3">
                       <i class="bi bi-telephone-fill fs-2 icon-box"></i>
                   </div>
                   <h4 class="text- uppercase text-white mb-2 text-uppercase lh-1">On-Call Service 24/7</h4>
                   <h1 class="lh-1">
                       <a class="text-white text-decoration-underline" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                   </h1>
               </div>
           </div>

           <div class="col-md-6 mt-5 mt-md-0 text-center text-md-start">
               <diV>
                   <h1 class="text-uppercase text-white lh-1 mb-4" data-aos="fade-left"><?php echo $call_title; ?></h1>
                   <p class="text-white mb-4 mb-md-5" data-aos="fade-left"><?php echo $call_text; ?></p>
                   <a href="<?php echo $call_button['url']; ?>" class="a-btn -primary" data-aos="fade-up"><?php echo $call_button['title']; ?></a>
               </diV>
           </div>
       </div>
    </div>

</section>