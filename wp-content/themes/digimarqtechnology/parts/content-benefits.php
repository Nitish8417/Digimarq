<?php if (!empty($section_data)):
       $upload_image_ = $section_data['upload_image_'];
        $child_image_ = $section_data['child_image_'];
        $right_child_image = $section_data['right_child_image'];
       $heading = $section_data['heading'];
        $sub_heading = $section_data['sub_heading'];
        $discretion = $section_data['discretion'];
        $button_link = $section_data['button_link'];
        $button_title = $section_data['button_title'];
   
   ?>

<style>  

.content-wrapper {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    align-items: center;
    justify-content: center;
}

.left-section {
  flex: 1;
  max-width: 25%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.icon-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
}

.icon img {
  width: 50px;
  height: 50px;
  object-fit: cover;
}

.image-section {
    position: relative;
    margin-inline: auto;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.image-section img {
    width: 100%;
    border-radius: 50%;
    max-height: 500px;
    height: 100%;
    max-width: 500px;
    object-fit: cover;
    object-position: center right;
    box-shadow: 0 4px 0px 20px rgb(255 97 60 / 29%);
}

.overlay-image {
    position: absolute;
    bottom: 5%;
    left: 0%;
    max-width: 200px !important;
    max-height: 200px !important;
    box-shadow: 0 4px 0px 20px rgb(0 0 0 / 33%);
    object-fit: cover;
}
img.overlay-image-benefits {
    position: absolute;
    top: 5%;
    right: 5%;
    max-width: 200px !important;
    max-height: 200px !important;
    box-shadow: 0 4px 0px 20px rgb(0 0 0 / 33%);
    object-fit: cover;
}
.right-section {
    display: flex;
    flex-direction: column;
    gap: 20px;
}




</style>

 <section class="who-we-are">
    <div class="container">
      <div class="content-wrapper">
           <div class="right-section">
      
               <div class="info-block">
                    <span class="font-18 color-span"><?php echo $heading; ?></span>
                    <h2 class="font-40"><?php echo $sub_heading; ?></h2>
                </div>
          <p><?php echo $discretion; ?></p>

          <a href="<?php echo $button_link; ?>" class="btn"><?php echo $button_title; ?></a>
        </div>
        <div class="image-section">
        
          <img src="<?php echo esc_url($upload_image_['url']); ?>" alt="<?php echo esc_attr($upload_image_['alt']); ?>" />
           <img src="<?php echo esc_url($child_image_['url']); ?>" alt="<?php echo esc_attr($child_image_['alt']); ?>" class="overlay-image" />
           <img src="<?php echo esc_url($right_child_image['url']); ?>" alt="<?php echo esc_attr($right_child_image['alt']); ?>" class="overlay-image-benefits">
         
        </div>
       
      </div>
    </div>
  </section>
  
  <?php endif;?>