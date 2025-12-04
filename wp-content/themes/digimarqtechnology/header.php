<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
   
 
</head>

<body <?php body_class(); ?>>
    
    
    <div id="header">
        <header>
            <div class="sub-block-header">
                <div class="container">
                    <div class="main-header-block">
                        <div class="site-logo">
                            <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php bloginfo('name'); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="header-right">
                            <nav class="nav primary-nav" aria-label="<?php esc_attr_e('Primary menu', 'digimarqtechnology'); ?>">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary-menu',
                                    'container' => false,
                                    'menu_class' => 'menu primary-menu-list',
                                    'fallback_cb' => '__return_empty_string',
                                    'depth' => 3,
                                ));
                                ?>
                            </nav>
                        </div>
                        <div class="contact-btn">
                            <a href="/contact" class="btn contact-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/email.svg" alt="Email Icon">
                                Contact
                            </a>
                            <a href="/contact" class="mobile">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                                    </svg>

                            </a>

                        </div>
                        <div class="hamburger-menu">
                                <button class="hamburger-menu-icon" type="button" aria-label="<?php esc_attr_e('Toggle menu', 'digimarqtechnology'); ?>" aria-expanded="false">
                                    <span class="show" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                            </svg>
                                    </span>
                                    <span class="close" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                        </svg>

                                    </span>
                                </button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu" aria-label="<?php esc_attr_e('Mobile menu', 'digimarqtechnology'); ?>">
                    <div class="container">
                        <nav class="nav mobile-nav">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container' => false,
                                'menu_class' => 'menu mobile-menu-list',
                                'fallback_cb' => '__return_empty_string',
                                'depth' => 3,
                            ));
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <?php if (is_front_page()) : ?>
        
        <style>
            .slick-slide {
    height: 100vh !important;
    background-size: cover;
    background-repeat: no-repeat;
}
div#header {
    position: relative;
    height: 100vh;
}

ul.menu li a {
   
    color: #fff;
    
    
}
.banner-slider {

    overflow: hidden;
}
div#header {
   
    overflow: hidden;
}
/* Hero Decorative Elements */
.hero-decoration {
  position: absolute;
  border-radius: 50%;
  background: linear-gradient(135deg, #FF6B6B 0%, #FFE66D 100%);
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
  animation: float 8s ease-in-out infinite;
  z-index: 0;
  opacity: 0.7;
}

.hero-decoration-1 {
  width: 220px;
  height: 220px;
  top: 8%;
  left: -3%;
  animation-delay: 0s;
  background: linear-gradient(45deg, #4ECDC4 0%, #FFE66D 100%);
}

.hero-decoration-2 {
  width: 380px;
  height: 380px;
  top: 65%;
  right: -8%;
  animation-delay: 1.5s;
  background: linear-gradient(135deg, #FF6B6B 0%, #4ECDC4 100%);
}

.hero-decoration-3 {
  width: 160px;
  height: 160px;
  top: 5%;
  right: 8%;
  animation-delay: 3s;
  background: linear-gradient(90deg, #FFE66D 0%, #FF6B6B 100%);
}

.hero-decoration-4 {
  width: 100px;
  height: 100px;
  bottom: 25%;
  left: 15%;
  animation-delay: 4.5s;
  background: linear-gradient(180deg, #4ECDC4 0%, #FF6B6B 100%);
}

@keyframes float {
  0%, 100% {
    transform: translateY(0) scale(1) rotate(0deg);
  }
  50% {
    transform: translateY(-25px) scale(1.05) rotate(180deg);
  }
}

/* Animations for Content */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes slideInLeft {
  from {
    opacity: 0;
    transform: translateX(-40px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .hero-decoration-1 {
    width: 150px;
    height: 150px;
    top: 5%;
    left: -10%;
  }
  .hero-decoration-2 {
    width: 250px;
    height: 250px;
    top: 60%;
    right: -15%;
  }
  .hero-decoration-3 {
    width: 120px;
    height: 120px;
    top: 10%;
    right: 5%;
  }
  .hero-decoration-4 {
    width: 70px;
    height: 70px;
    bottom: 20%;
    left: 10%;
  }
}

        </style>
      <?php
if (have_rows('banner_slider')) : ?>
    <div class="banner-slider">
        <div class="banner-slider-wrapper">
            <?php
            // Loop through the repeater field rows
            while (have_rows('banner_slider')) : the_row();
                $background_image = get_sub_field('background_image');
                $banner_heading = get_sub_field('banner_heading');
                $banner_sub_heading = get_sub_field('banner_sub_heading');
                $button_text = get_sub_field('button_text');
                $button_link = get_sub_field('button_link');
                ?>
                <div class="banner-slide" style="background-image: url('<?php echo esc_url($background_image['url']); ?>');">
                    <div class="container">
                         <div class="banner-content">
                        <h1 class="font-80"><?php echo esc_html($banner_heading); ?></h1>
                        <p class="font-16"><?php echo esc_html($banner_sub_heading); ?></p>
                        <?php if ($button_text && $button_link) : ?>
                            <a href="<?php echo esc_url($button_link); ?>" class="btn"><?php echo esc_html($button_text); ?></a>
                        <?php endif; ?>
                    </div>
                    </div>
                   
                </div>
            <?php endwhile; ?>
        </div>
        
        
    </div>

    <!-- Include Slick Slider CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Initialize Slick Slider -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.banner-slider-wrapper').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 5000,
                fade: true,
                cssEase: 'linear'
            });
        });
    </script>
	
<?php endif; ?>

        <?php else : ?>
            <style>
                #header {
                    width: 100%;
                    position: relative;
                    padding: 0;
                    /*overflow: hidden;*/
                    display: flex;
                    flex-direction: column;
                }

               .main-banner {
                position: relative;
                overflow: hidden;
                max-height: 300px;
                height: 100%;
                display: flex;
                flex-direction: column;
            }

                .main-banner img {
                    object-fit: cover;
                    max-height: 300px;
                    height: 100%;
                }

                .main-banner:before {
                    content: "";
                    position: absolute;
                    width: 100%;
                    height: 100%;
                       background: linear-gradient(90deg, rgba(29, 35, 39, 0.8925945378151261) 0%, rgb(153 144 255 / 50%) 100%);
                }
            </style>
            <?php
            $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div class="main-banner">

                <?php if ($featured_image_url) : ?>
                    <img src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>" />
                <?php else : ?>
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/carrers.jpg')" alt="">
                <?php endif;  ?>

               
                <div class="container">
                    <div class="sub-banner-info">

                        <h1 class="main-banner-text animated slideInDown"><?php the_title(); ?></h1>
                        <nav aria-label="breadcrumb" class="animated slideInDown">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="color-w" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                                </li>/
                                <li class="breadcrumb-item color-w active" aria-current="page"><?php the_title(); ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>