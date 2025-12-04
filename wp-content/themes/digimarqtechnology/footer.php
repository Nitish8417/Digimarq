<style>
  /* Footer Styling */

  .footer {
    color: #fff;
    padding: 50px 0;
    background-image: radial-gradient(#2b2a29 2px, transparent 1px);
    background-size: 4px 5px;
    background-color: #343331;
}

  .footer-sub-block {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 100px;
    margin-bottom: 100px;
    flex-wrap: wrap;
  }

  .footer-logo {
    display: flex;
    width: max-content;
    align-items: center;
    justify-content: center;
  }

  .footer-logo img {
    margin-bottom: 0;
    width: 100%;
    max-width: 200px;
    display: flex;
    align-items: center;
    max-height: 90px;
    position: relative;
    z-index: 12;
  }

  .footer-subscribe {
    display: flex;
    gap: 30px;
    align-items: center;
    position: relative;
  }



  .footer-subscribe form {
    display: flex;
    align-items: center;
    max-width: 400px;
    width: 100%;
  }

  .footer-subscribe form .wpcf7-spinner {

    position: absolute;
    right: 0;
  }

  .footer-subscribe form p {
    display: flex;
    align-items: center;
  }

  .footer-subscribe form p .wpcf7-not-valid-tip {
    position: absolute;
  }

  .footer-subscribe .wpcf7 form.invalid .wpcf7-response-output,
  .footer-subscribe .wpcf7 form.unaccepted .wpcf7-response-output,
  .footer-subscribe .wpcf7 form.payment-required .wpcf7-response-output {
    border-color: #ffb900;
    position: absolute;
    top: 85px;
    right: 0;
    width: max-content;
    padding: 5px;
    margin: 0;
     bottom: auto;
  }


  .footer-subscribe .wpcf7 form.sent .wpcf7-response-output {
    position: absolute;
    top: 85px;
    right: 0;
    width: max-content;
    padding: 5px;
    margin: 0;
  }

  .footer-subscribe input {
    flex: 1;
    border: none;
    border-radius: 0;
  }

  .footer-subscribe input.wpcf7-form-control.wpcf7-submit {
    background-color: #e74c3c;
    border: none;
    cursor: pointer;
    height: 50px;
    padding: 0 20px;
    color: #fff;
    border-radius: 0;
  }

  .footer-sections {
    flex: 2;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .footer-about,
  .footer-location,
  .footer-contact {
    flex: 1;
    min-width: 200px;
  }

  .icon-footer {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
  }

  .footer-about p {
    font-size: 14px;
    line-height: 1.5;
  }

  .social-links {
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .social-links img {
    max-width: 20px;
    width: 100%;
    height: 20px;
    background-color: #e74b3c;
    padding: 15px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    object-fit: contain;
  }

  .footer-location p,
  .footer-contact p {
    font-size: 14px;
    margin-bottom: 10px;
  }

  .footer-contact a {
    color: #fff;
    text-decoration: none;
  }

  .footer-contact a:hover {
    text-decoration: underline;
  }

  .footer-copyright {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #aaa;
  }
</style>

<footer class="footer">
  <div class="container">
    <div class="footer-sub-block">
      <div class="footer-logo">
        <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
          </a>
        <?php endif; ?>
      </div>
      <div class="footer-subscribe">
        <p>Subscribe now to get the latest updates</p>
        <?php echo do_shortcode('[contact-form-7 id="a6f3c82" title="Subscribe"]'); ?>
      </div>
    </div>

    <div class="footer-sections">
      <div class="footer-about">
        <div class="icon-footer">
          <h3 class="font-30">ABOUT</h3>
        </div>
        <p>
        A comprehensive solution for all your business needs—efficient, affordable, and top-quality. We pride ourselves on timely delivery without compromising standards, offering innovative, end-to-end technology services. From ideation and design to development and deployment, we cover every stage to drive your business forward.
        </p>
        <div class="social-links">
          <a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/twitter1.svg" alt="Twitter" /></a>
          <a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/linkedin1.svg" alt="LinkedIn" /></a>
          <a href="https://www.instagram.com/digimarq_technology/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/instagram1.svg" alt="Instagram" /></a>
        </div>
      </div>
      
      <div class="footer-location">
        <div class="icon-footer">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/india.svg" alt="USA Flag" class="flag-icon">
          <h3 class="font-30">INDIA</h3><br>
          
        </div>
        <p>Ground Floor, E-14B, E Block, Sector 8, Noida, Uttar Pradesh 201301</p>
      </div>
      <div class="footer-contact">
        <div class="icon-footer">
          <h3 class="font-30">CONTACT</h3>
        </div>
        <p><a href="info@digimarqtechnology.com">info@digimarqtechnology.com</a></p>
        <p><a href="tel:+91 80101 22250">+91 8010122250</a></p>
      </div>
    </div>
    <div class="footer-copyright">
      <p>&copy; Copyright <?php echo date('Y'); ?> Powered by <span style="color: #ccffff;"><a style="color: #ccffff;" href="https://digimarqtechnology.com/">DigiMarq Technology</a></span></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<?php

if (isset($cachefile)) {
  $cached = fopen($cachefile, 'w');
  if ($cached) {
    fwrite($cached, ob_get_contents());
    fclose($cached);
  }
}
ob_end_flush();
?>