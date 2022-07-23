@extends('Layout.master')



@section('content')

	
		<!--Page Header Start-->
		<section class="page-header clearfix"
			style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
			<div class="container">
				<div class="page-header__inner text-center clearfix">
					<ul class="thm-breadcrumb">
						<li><a href="index-main.html">Home</a></li>
						<li><a href="shop.html">Shop</a></li>
						<li>Checkout</li>
					</ul>
					<h2>Checkout</h2>
				</div>
			</div>
		</section>
		<!--Page Header End-->





		<section class="checkout-page">
			<div class="auto-container">
				<p class="checkout-page__returning">Returning Customer? <a href="login.html">Click here to Login</a></p>
				<div class="row">
					<div class="col-lg-6">
						<h3 class="checkout__title">Billing Details</h3><!-- /.checkout__title -->
						<div class="comment-one__form">
							<div class="row">
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<select name="country" class="custom-select-box">
											<option value="USA">USA</option>
											<option value="Canada">Canada</option>
											<option value="Australia">Australia</option>
										</select>
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="First Name">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Last Name">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Company">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Address">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Appartment, Unit, etc. (optional)">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Town / City">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="State">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Zip Code">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Email Address">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Phone">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box field-checkbox">
										<input type="checkbox" id="create-account">
										<label for="create-account">Create an Account?</label>
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->

							</div><!-- /.row -->
						</div><!-- /.comment-one__form -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="checkout__checkbox">
							<input type="checkbox" checked id="different-address">
							<label for="different-address" class="checkout__title">Ship to a different address</label>
						</div><!-- /.checkout__checkbox -->
						<div class="comment-one__form">
							<div class="row">
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<select name="country" class="custom-select-box">
											<option value="USA">USA</option>
											<option value="Canada">Canada</option>
											<option value="Australia">Australia</option>
										</select>
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="First Name">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Last Name">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Company">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Address">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Appartment, Unit, etc. (optional)">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Town / City">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="State">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Zip Code">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Email Address">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-6">
									<div class="comment-form__input-box">
										<input type="text" placeholder="Phone">
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
								<div class="col-md-12">
									<div class="comment-form__input-box">
										<textarea placeholder="Notes About Your Order"></textarea>
									</div><!-- /.comment-form__input-box -->
								</div><!-- /.col-md-12 -->
							</div><!-- /.row -->
						</div><!-- /.comment-one__form -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
				<h3 class="checkout__title">Your order</h3><!-- /.checkout__title -->
				<div class="row">
					<div class="col-lg-6">
						<div class="table-responsive">
							<table class="table checkout__table">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Product Name</td>
										<td>$10.99</td>
									</tr>
									<tr>
										<td>Subtotal</td>
										<td>$10.99</td>
									</tr>
									<tr>
										<td>Shipping</td>
										<td>$00.00</td>
									</tr>
									<tr>
										<td>Total</td>
										<td>$20.98</td>
									</tr>
								</tbody>
							</table>
						</div><!-- /.table-responsive -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="checkout__payment">
							<div class="checkout__payment__item checkout__payment__item--active">
								<h3 class="checkout__payment__title">Direct Bank Transfer</h3>
								<div class="checkout__payment__content">
									Make your payment directly into our bank account. Please
									use your Order ID as the payment reference. Your order
									wont be shipped until the funds have cleared.
								</div><!-- /.checkout__payment__content -->
							</div><!-- /.checkout__payment__item -->
							<div class="checkout__payment__item">
								<h3 class="checkout__payment__title">Paypal payment <img
										src="assets/images/update-14-09-2021/shop/paypal-1-1.png" alt=""></h3>
								<div class="checkout__payment__content">
									Make your payment directly into our bank account. Please
									use your Order ID as the payment reference. Your order
									wont be shipped until the funds have cleared.
								</div><!-- /.checkout__payment__content -->
							</div><!-- /.checkout__payment__item -->
						</div><!-- /.checkout__payment -->
						<div class="text-right d-flex justify-content-end">

							<a class="thm-btn" href="checkout.html">
								Place your order
							</a>
						</div><!-- /.text-right -->

					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.checkout-page -->



	@endsection
