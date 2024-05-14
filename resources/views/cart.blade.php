@extends('index_main')
@section('csscontent')
@endsection
@section('content')

    <body class="custom-cursor">

        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>

        <div class="preloader">
            <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
        </div>
        <!-- /.preloader -->
        <div class="page-wrapper">

            <section class="cart-page section-space">
                <div class="container">
                    <div class="row gutter-y-50">
                        <div class="col-xl-8">
                            <div class="table-responsive">
                                <table class="table cart-page__table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Sub Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="cart-page__table__meta">
                                                    <div class="cart-page__table__meta__img">
                                                        <img src="assets/images/products/cart-1-1.jpg" alt="Penny Tiles">
                                                    </div>
                                                    <h3 class="cart-page__table__meta__title"><a
                                                            href="{{ Route('shop_details') }}">Penny Tiles</a>
                                                    </h3>
                                                </div>
                                            </td>
                                            <td class="cart-page__table__price">$15.00</td>
                                            <td>
                                                <div class="product-details__quantity">
                                                    <div class="quantity-box">
                                                        <button type="button" class="sub"><i
                                                                class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button type="button" class="add"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-page__table__total">$30.00</td>
                                            <td>
                                                <a href="{{ Route('cart') }}" class="cart-page__table__remove"><i
                                                        class="fas fa-times"></i> remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cart-page__table__meta">
                                                    <div class="cart-page__table__meta__img">
                                                        <img src="assets/images/products/cart-1-2.jpg" alt="Metal Tiles">
                                                    </div>
                                                    <h3 class="cart-page__table__meta__title"><a
                                                            href="{{ Route('shop_details') }}">Metal Tiles</a>
                                                    </h3>
                                                </div>
                                            </td>
                                            <td class="cart-page__table__price">$20.00</td>
                                            <td>
                                                <div class="product-details__quantity">
                                                    <div class="quantity-box">
                                                        <button type="button" class="sub"><i
                                                                class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button type="button" class="add"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-page__table__total">$40.00</td>
                                            <td>
                                                <a href="{{ Route('cart') }}" class="cart-page__table__remove"><i
                                                        class="fas fa-times"></i> remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cart-page__table__meta">
                                                    <div class="cart-page__table__meta__img">
                                                        <img src="assets/images/products/cart-1-3.jpg" alt="Cement Tiles">
                                                    </div>
                                                    <h3 class="cart-page__table__meta__title"><a
                                                            href="{{ Route('shop_details') }}">Cement Tiles</a>
                                                    </h3>
                                                </div>
                                            </td>
                                            <td class="cart-page__table__price">$25.00</td>
                                            <td>
                                                <div class="product-details__quantity">
                                                    <div class="quantity-box">
                                                        <button type="button" class="sub"><i
                                                                class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button type="button" class="add"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-page__table__total">$50.00</td>
                                            <td>
                                                <a href="{{ Route('cart') }}" class="cart-page__table__remove"><i
                                                        class="fas fa-times"></i> remove</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="cart-page__table__meta">
                                                    <div class="cart-page__table__meta__img">
                                                        <img src="assets/images/products/cart-1-4.jpg" alt="cleenhearts">
                                                    </div>
                                                    <h3 class="cart-page__table__meta__title"><a
                                                            href="{{ Route('shop_details') }}">Terracotta Tiles</a>
                                                    </h3>
                                                </div>
                                            </td>
                                            <td class="cart-page__table__price">$30.00</td>
                                            <td>
                                                <div class="product-details__quantity">
                                                    <div class="quantity-box">
                                                        <button type="button" class="sub"><i
                                                                class="fa fa-minus"></i></button>
                                                        <input type="text" value="1">
                                                        <button type="button" class="add"><i
                                                                class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-page__table__total">$60.00</td>
                                            <td>
                                                <a href="{{ Route('cart') }}" class="cart-page__table__remove"><i
                                                        class="fas fa-times"></i> remove</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-page__coupone">
                                <h5 class="cart-page__coupone__title">coupon:</h5>
                                <div class="cart-page__coupone__box">
                                    <form action="#" class="cart-page__coupone__form">
                                        <input type="text" placeholder="Enter coupon code"
                                            class="cart-cupon__coupone__input">
                                        <button type="submit"
                                            class="cart-page__coupone__btn cart-page__bottom-btn floens-btn">Apply
                                            code</button>
                                    </form>
                                    <a href="{{ Route('cart') }}"
                                        class="cart-page__update-btn cart-page__bottom-btn floens-btn">Update Cart</a>
                                </div><!-- /.cart-page__coupone__box -->
                            </div><!-- /.cart-page__coupone -->
                        </div><!-- /.col-xl-8 -->
                        <div class="col-xl-4">
                            <div class="cart-page__cart-checkout">
                                <ul class="cart-page__cart-total list-unstyled">
                                    <li><span>Subtotal</span><span class="cart-page__cart-total__amount">$999.00</span>
                                    </li>
                                    <li>
                                        <h4 class="cart-page__cart-total__address">Shipping Address</h4>
                                        <address class="cart-page__cart-total__address__text">2801 Lafayette Blvd, Norfolk,
                                            Vermont 23509, united state</address>
                                    </li>
                                    <li><span>Total</span><span class="cart-page__cart-total__amount">$999.00</span></li>
                                </ul>
                                <a href="{{ Route('checkout') }}" class="floens-btn cart-page__checkout-btn">
                                    <span>Procced to checkout</span>
                                    <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                        </div><!-- /.col-xl-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.cart-page -->

        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
