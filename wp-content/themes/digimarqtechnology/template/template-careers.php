<?php
/*
Template Name: Carrers
*/
get_header(); ?>
<style>
    section.section-bg-img {
        background-repeat: no-repeat;
        background-position: right;
        background-size: contain;
    }

    .main-carrers-block {
        display: flex;
        gap: 50px;
        align-items: center;
    }

    .left-block-data {
        flex: 1;
    }

    .img-carrers img {
        max-width: 550px;
        max-height: 550px;
        width: 100%;
        height: 100%;
    }

    .section-bg-img .img-carrers {
        width: auto;
        border: 20px solid #ff613c;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto;
        max-width: fit-content;
    }
    

    .left-block-data {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .info-block {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .info-block:nth-last-child(-n + 1) {
        background-color: var(--background-color);
        height: 60px;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        border-left: 5px solid #ff613c;
        border-radius: 15px;
        padding: 0 20px;
        width: max-content;
        box-shadow: 0 0 2px;
    }
</style>
<section class="section-bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/chos1.png');">
    <div class="container">
        <div class="main-carrers-block">
            <div class="left-block-data">
                <div class="img-carrers">
                    <img src="http://localhost/intellious/wp-content/uploads/2024/11/carr.jpg" alt="">
                </div>
            </div>
            <div class="left-block-data">
                <div class="info-block">
                    <span class="font-18 color-span">Work with us</span>
                    <h2 class="font-40">Careers</h2>
                </div>
                <div class="info-block">
                    <h2 class="font-30">Let's grow together.</h2>
                    <p>We're always interested in hearing from thoughtful, friendly individuals that are aiming to innovate. To explore the possibility of joining the Intellious team.
                    </p>
                </div>
                <div class="info-block">
                    <p>Please share your profile with join@intellious.tech</p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>