<?php
/*
Template Name: Clients
*/
get_header(); ?>

<style>
/* Grid Style for Desktop */

.logo-slider {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    justify-items: center;
}
.logo-item {
    display: flex;
    justify-content: center;
    background-color: #fff;
    transition: transform 0.3s ease;
    min-height: 80px;
    max-height: 100px;
    height: auto;
    box-shadow: 0 0 1px;
    padding: 15px;
    max-width: 180px;
    width: 100%;
}
.logo-item a {
    display: flex;
    border-radius: 20px;
    align-items: center;
    justify-content: center;
}

.logo-item img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.logo-item:hover {
    transform: scale(1.05);
}

/* Swiper Styles for Mobile */
.swiper {
    display: none;
}
.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}
.swiper-pagination {
    margin-top: 10px;
}
.swiper-button-prev, .swiper-button-next {
    color: #333;
}

/* Media Query for Mobile View */
@media (max-width: 768px) {
    .logo-slider {
        display: none;
    }
 
    .swiper {
        display: block;
    }
    .swiper-button-next, .swiper-button-prev {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }
    .swiper-wrapper {
    min-height: 120px;
        padding: 5px;
}
    .swiper:hover .swiper-button-next,
    .swiper:hover .swiper-button-prev {
        opacity: 1;
    }
    .swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction {
        bottom: var(--swiper-pagination-bottom, -5px);
    }
    .swiper-pagination-bullet {
        background-color: var(--primary-color);
        transition: background-color 0.3s ease;
    }
    .swiper-pagination-bullet-active {
        background-color: var(--primary-color);
    }
}
</style>

<section class="section-p list-logo-data">
  <div class="container">
     <div class="top-main-heading">
      <span class="font-18 color-span">whom we are working for</span>
      <h2 class="font-40">Our prominent clients are</h2>
    </div>

    <?php if( have_rows('logo_lists') ): ?>
      <!-- Grid View for Desktop -->
      <div class="logo-slider">
        <?php while( have_rows('logo_lists') ): the_row(); 
          $image = get_sub_field('logo');
          $website_link = get_sub_field('website_link');
        ?>
          <div class="logo-item">
             <a href="<?php echo $website_link; ?>">
               <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
          </div>
        <?php endwhile; ?>
      </div>
      <?php reset_rows(); ?>
      <!-- Slider for Mobile -->
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php while( have_rows('logo_lists') ): the_row(); 
            $image = get_sub_field('logo');
            $website_link = get_sub_field('website_link');
           
          ?>
            <div class="swiper-slide">
              <div class="logo-item">
                  <a href="<?php echo $website_link; ?>">
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  </a>
                
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <!-- Swiper Pagination and Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    <?php endif; ?>
  </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.swiper', {
        slidesPerView: 1.5, // Default for small screens
        spaceBetween: 20,   // Default spacing
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000, // 3 seconds delay between slides
            disableOnInteraction: false, // Autoplay continues after interaction
        },
        breakpoints: {
            768: {
                slidesPerView: 3, // Show 3 slides on screens >= 768px
                spaceBetween: 15, // Adjust spacing for medium screens
            },
        },
    });
});

</script>

<?php get_footer(); ?>
