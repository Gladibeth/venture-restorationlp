
<footer class="main-footer main-content__large bg-primary__blue">
    <div class="main-content__medium">
      <div class="main-footer__content">
        <div class="main-footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.png" alt="Venture Restoration">
        </div>
        <div class="flex-end">
          <div class="main-footer__menu">
            <ul>
              <li>
                <a href="#">
                  About us
                </a>
              </li>
              <li>
                <a href="#">
                  Services
                </a>
              </li>
              <li>
                <a href="#">
                  Projects
                </a>
              </li>
              <li>
                <a href="#">
                  Testimonials
                </a>
              </li>
            </ul>
          </div>
          <p class="main-footer__copy">
            © 2023 created <a href="#">Gladibeth Franco</a>
          </p>
        </div>

        
    </div>
  </footer>

  
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://kenwheeler.github.io/slick/slick/slick.min.js"></script>

 <script>

  const hamburgerButton = document.querySelector('.hamburger');
  const menu = document.querySelector('.main-header__nav');
  const htmlHide = document.querySelector('html');
  hamburgerButton.addEventListener('click', showMenuMobile);

  function showMenuMobile(){
    hamburgerButton.classList.toggle('is-active');
    menu.classList.toggle('active-menu');
    htmlHide.classList.toggle('overlay-hidden');
  }

  $(document).ready(function() {
      $('.slider-three').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: true,
          arrows: true,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                centerMode: true,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
              }
            }
          ]
      });
  });
 
 </script>
</body>
</html>