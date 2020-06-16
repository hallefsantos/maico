<div class="section-full p-tb80 inner-page-padding">
   <div class="container">

      <!-- TITLE START -->
      <div div class="section-head">
         <div class="sx-separator-outer separator-left">
            <div class="sx-separator bg-white bg-moving bg-repeat-x"
               style="background-image:url(<?php bloginfo('template_url')?>/images/background/cross-line2.png)">

               <?php if(is_page('arquitetura-sensorial')): ?>
                  <h3 class="sep-line-one">Projetos de Arquitetura Sensorial</h3>
               <?php else:  ?>
                  <h3 class="sep-line-one">Últimos Projetos</h3>
               <?php endif;  ?>
            </div>
         </div>
      </div>
      <!-- TITLE END -->

      <!-- GALLERY CONTENT START -->
      <ul class="masonry-outer mfp-gallery work-grid row clearfix list-unstyled projetos">

         <?php 
            $m_query = new WP_Query(array(
               'posts_per_page' => 4,
               'post_type' => 'projeto',
               'orderby'   => 'rand'
            ));

            if($m_query->have_posts()):
               while($m_query->have_posts()):
                  $m_query->the_post();
                  $terms = get_the_terms( $m_query->ID , 'categoria' );

                  ?>

         <!-- POST BEGIN -->
         <li class="masonry-item <?= $terms[0]->slug; ?> col-xl-3  col-lg-4 col-md-6 col-sm-12 m-b30">

            <?php the_content(); ?>
            <a href="#" class="sx-box image-hover-block">
               <div class="sx-thum-bx">
                  <?php the_post_thumbnail( 'full', array('class'=>'post_thumb')); ?>
               </div>
               <div class="sx-info  p-t20 text-white">
                  <h4 class="sx-tilte m-t0"><?php the_title(); ?></h4>
                  <p class="m-b0"><?php the_field('local'); ?> <?= $terms[0]->name; ?></p>
               </div>
            </a>
         </li>

         <!-- POST END -->
         <?php endwhile; wp_reset_postdata(); endif; ?>

      </ul>
      <!-- GALLERY CONTENT END -->

      <div class="text-center">
         <a href="<?php bloginfo('url'); ?>/projetos" class="site-button btn-half"><span>Ver todos Projetos</span></a>
      </div>

   </div>
</div>