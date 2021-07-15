<section class="ftco-section-parallax">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2>Berlangganan ke Buletin kami</h2>
          <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-8">
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Masukkan alamat email">
                  <input type="submit" value="Langganan" class="submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="ftco-footer bg-light ftco-section">
  <div class="container">
    <div class="row">
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
        </a>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">TEMANJAMU</h2>
          <p>Sinergi Antara Jamu & Kopi Menghasilkan Minuman yang Menyehatkan. Laiknya Minuman yang lain, Jamu dan Kopi ini Bisa dinikmati dalam Keadaan Panas Maupun Dingin.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Menu</h2>
          <ul class="list-unstyled">
            <li><a href="daftar_produk.php" class="py-2 d-block">Daftar Produk</a></li>
            <li><a href="tentang_kami.php" class="py-2 d-block">Tentang Kami</a></li>
            <li><a href="blog.php" class="py-2 d-block">Blog</a></li>
            <li><a href="kontak.php" class="py-2 d-block">Kontak</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Bantuan</h2>
          <div class="d-flex">
            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
              <li><a href="#" class="py-2 d-block">Informasi Pengiriman </a></li>
              <li><a href="#" class="py-2 d-block">Pengembalian & Pertukaran</a></li>
              <li><a href="#" class="py-2 d-block">Syarat & Ketentuan</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">JL. Jembatan Merah No.84C, Condongcatur, Sleman, Yogyakarta</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 6287 888 777 787</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@temanjamu.id</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
      <div class="col-md-12 text-center">
        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
        </div>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<script>
  $(document).ready(function(){

  var quantitiy=0;
     $('.quantity-right-plus').click(function(e){

          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());

          // If is not undefined

              $('#quantity').val(quantity + 1);


              // Increment

      });

       $('.quantity-left-minus').click(function(e){
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($('#quantity').val());

          // If is not undefined

              // Increment
              if(quantity>0){
              $('#quantity').val(quantity - 1);
              }
      });

  });
</script>

</body>
</html>
