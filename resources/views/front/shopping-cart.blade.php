 @extends('front.index')

 @section('content')
     <!-- Breadcrumb Begin -->
     <div class="breadcrumb-option">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="breadcrumb__text">
                         <h2>Shopping cart</h2>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="breadcrumb__links">
                         <a href="{{ url('/') }}">Home</a>
                         <span>Shopping cart</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Breadcrumb End -->

     <!-- Shopping Cart Section Begin -->
     <section class="shopping-cart spad">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="shopping__cart__table">
                         <table>
                             <thead>
                                 <tr>
                                     <th>Product</th>
                                     <th>Quantity</th>
                                     <th>Total</th>
                                     <th></th>
                                 </tr>
                             </thead>
                             <tbody id="content">
                                 @php
                                     $fimalTotal = 0;
                                 @endphp
                                 @foreach ($data as $item)
                                     <tr>
                                         <td class="product__cart__item">
                                             <div class="product__cart__item__pic">
                                                 <img style="width:100px;" src="{{ asset('image/product/' . $item->productName->thumbnail) }}"
                                                     alt="">
                                             </div>
                                             <div class="product__cart__item__text">
                                                 <h6>{{ $item->productName->title }}</h6>
                                                 <h5>${{ $item->productName->price }}</h5>
                                             </div>
                                         </td>
                                         <td class="quantity__item">
                                             <div class="quantity">
                                                 <div class="pro-qty">
                                                     <input type="text" value="{{ $item->quantity }}">
                                                 </div>
                                             </div>
                                         </td>
                                         @php
                                             $total = $item->productName->price * $item->quantity;
                                             $fimalTotal += $total;
                                         @endphp
                                         <td class="cart__price">$ {{ $total }}</td>
                                         <td class="cart__close"><span class="icon_close"></span></td>
                                     </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div>
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-6">
                             <div class="continue__btn">
                                 <a href="#">Continue Shopping</a>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6">
                             <div class="continue__btn update__btn">
                                 <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="cart__discount">
                         <h6>Discount codes</h6>
                         <form action="#">
                             <input type="text" placeholder="Coupon code">
                             <button type="submit">Apply</button>
                         </form>
                     </div>
                     <div class="cart__total">
                         <h6>Cart total</h6>
                         <ul>
                             <li>Subtotal <span>${{ $fimalTotal }}</span></li>
                             <li>Total <span>$ {{ $fimalTotal }}</span></li>
                         </ul>
                         <a href="#" class="primary-btn">Proceed to checkout</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>


     <!-- Shopping Cart Section End -->
 @endsection
