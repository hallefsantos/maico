<div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5"
   style="background-image:url(<?php the_field('banner')?>);">
   <div class="overlay-main bg-black opacity-07"></div>
   <div class="container">
      <div class="sx-bnr-inr-entry">
         <div class="banner-title-outer">
            <div class="banner-title-name">
               <h2 class="m-tb0"><?php the_title(); ?></h2>
               <p><?php the_field('linha'); ?></p>
            </div>
         </div>
         <!-- BREADCRUMB ROW -->

         <div>
            <!-- <ul class="sx-breadcrumb breadcrumb-style-2">
               <li><a href="javascript:void(0);">Home</a></li>
               <li>Contact us</li>
            </ul> -->

            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>

         </div>

         <!-- BREADCRUMB ROW END -->
      </div>
   </div>
</div>