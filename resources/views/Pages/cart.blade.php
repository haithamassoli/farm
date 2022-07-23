@extends('Layout.master')

@section('content')

    <!--Page Header Start-->
    <section class="page-header clearfix"
        style="background-image: url('{{ asset('assets/images/backgrounds/page-header-bg.jpg') }}');">
        <div class="container">
            <div class="page-header__inner text-center clearfix">
                <ul class="thm-breadcrumb">
                    <li><a href="index-main.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li>Cart</li>
                </ul>
                <h2>Cart</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->


    <section class="cart-table">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                        @foreach ($cart as $id => $details)
                        {{-- dd($details); --}}
                            <?php  $total += $details->price * $details->product_quntity; ?>
                            <tr>
                                <td data-label="Item">
                                    <div class="cart-table__item">
                                        <img src="{{ asset('img/'.$details->product->product_image)}}" alt="">
                                        <h3 class="cart-table__item__title">{{ $details->name }}</h3>
                                        <!-- /.cart-table__item__title -->
                                    </div><!-- /.cart-table__item -->
                                </td>
                                <td data-label="Price">${{ $details->product->product_price }}</td>
                                <td data-label="Quantity">
                                    <div class="quantity-box">
                                        <button type="button" class="sub"><i class="fa fa-minus"></i></button>
                                        <input type="number" id="product-2" value="{{ $details->product_quntity }}" />
                                        <button type="button" class="add"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td data-label="Total">${{ $details->total }}</td>
                                <td data-label="Remove"><span class="cart-table__close"></span></td>
                            </tr>
                            {{-- <tr>
																	<td data-label="Item">
																		<div class="cart-table__item">
																			<img src="assets/images/update-14-09-2021/shop/cart-1-2.png" alt="">
																			<h3 class="cart-table__item__title">Broccoli</h3>
																			<!-- /.cart-table__item__title -->
																		</div><!-- /.cart-table__item -->
																	</td>
																	<td data-label="Price">$10.99</td>
																	<td data-label="Quantity">
																		<div class="quantity-box">
																			<button type="button" class="sub"><i class="fa fa-minus"></i></button>
																			<input type="number" id="product-1" value="1" />
																			<button type="button" class="add"><i class="fa fa-plus"></i></button>
																		</div>
																	</td>
																	<td data-label="Total">$10.99</td>
																	<td data-label="Remove"><span class="cart-table__close"></span></td>
																</tr> --}}
                        @endforeach
                </tbody>
            </table>
        </div><!-- /.container -->
    </section><!-- /.cart-table -->


    <section class="proceed-to-checkout">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="proceed-to-checkout__cupon">
                        <input type="text" placeholder="Enter Coupon Code">
                        <button type="submit" class="thm-btn">Apply coupon</button><!-- /.thm-btn -->
                    </div><!-- /.proceed-to-checkout__cupon -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <ul class="list-unstyled proceed-to-checkout__list">
                        <li>
                            <span>Subtotal</span>
                            {{-- <i>${{ $details['price'] * $details['quantity'] }}</i> --}}
                        </li>
                        <li>
                            <span>Shipping Cost</span>
                            <i>$00.00 USD</i>
                        </li>
                        <li>
                            <span>Total</span>
                            <i>{{ $total }}</i>
                        </li>

                    </ul><!-- /.list-unstyled proceed-to-checkout__list -->

                    <div class="proceed-to-checkout__buttons">
                        <a href="cart.html" class="thm-btn proceed-to-checkout__checkout-btn update-cart">Update</a>
                        <a href="/checkout" class="thm-btn ">Checkout</a>
                    </div><!-- /.proceed-to-checkout__buttons -->
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.proceed-to-checkout -->

@endsection
