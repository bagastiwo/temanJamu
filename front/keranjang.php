<?php
$page="keranjang";
include 'header.php';
?>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>></span></p>
            <h1 class="mb-0 bread">keranjang</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Produk</th>
						        <th>Harga</th>
						        <th>Jumlah</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>

						        <td class="product-name">
						        	<h3>JAMU TEMULAWAK REMPAH</h3>
						        	<p>[Detail deskripsi produk]</p>
						        </td>

						        <td class="price">Rp.39.500</td>

						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
					          	</div>
					          </td>

						        <td class="total">Rp.79.000</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td>

						        <td class="product-name">
						        	<h3>JAMU ASAM JAWA</h3>
						        	<p>[Detail deskripsi produk]</p>
						        </td>

						        <td class="price">Rp.43.000</td>

						        <td class="quantity">
						        	<div class="input-group mb-3">
					             	<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
					          	</div>
					          </td>

						        <td class="total">Rp.43.000</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-center">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp.122.000</span>
    					</p>
    					<p class="d-flex">
    						<span>Pengiriman</span>
    						<span>Rp.15.000</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>Rp.7.000</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>Rp.100.000</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="pembayaran.php" class="btn btn-primary py-3 px-4">Proses ke Pembayaran</a></p>
    			</div>
    		</div>
			</div>
		</section>

<?php include 'footer.php'; ?>
