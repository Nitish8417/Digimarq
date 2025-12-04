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
        <div class="image-section">
          <img src="https://saddlebrown-worm-782999.hostingersite.com/wp-content/uploads/2024/11/11-550x550-1.jpg" alt="Globe with Technology">
          <img src="https://saddlebrown-worm-782999.hostingersite.com/wp-content/uploads/2024/11/4-copy-550x550-1.jpg" alt="Laptop with Tech Icons" class="overlay-image">
           <img src="https://saddlebrown-worm-782999.hostingersite.com/wp-content/uploads/2024/11/bg6-copy-672x448-1.jpg" alt="Laptop with Tech Icons" class="overlay-image-benefits">
        </div>
        <div class="right-section">
      
           <div class="info-block">
                    <span class="font-18 color-span">Company Benefits <span class="line"></span></span>
                    <h2 class="font-30">Why Intellious?</h2>
                </div>
                <b>#openness #customer-centric  #vision #passion #dedication #adaptability</b>
          <p>At Intellious, we believe that every business challenge is an opportunity to innovate and grow. We strive to provide comprehensive OSS/BSS solutions that not only meet your needs but exceed your expectations. Our commitment to high-quality deliverables and efficient timelines reflects our passion for excellence. From ideation to deployment, we are dedicated to providing innovative technology services that drive your success.</p>

          <a href="#" class="btn">Discover More</a>
        </div>
      </div>
    </div>
  </section>