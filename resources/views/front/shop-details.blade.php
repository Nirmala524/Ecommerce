  @extends('front.index')
  @section('content')
      <!-- Breadcrumb Begin -->
      <div class="breadcrumb-option">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="breadcrumb__text">
                          <h2>Product detail</h2>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="breadcrumb__links">
                          <a href="{{ url('/') }}">Home</a>
                          <a href="{{ url('/shop') }}">Shop</a>
                          <span>Sweet autumn leaves</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Breadcrumb End -->

      <!-- Shop Details Section Begin -->
      <section class="product-details spad">
          <div class="container">
              <div class="row">
                  @php
                      $images = json_decode($data->image);

                  @endphp
                  <div class="col-lg-6">
                      <div class="product__details__img">
                          <div class="product__details__big__img">
                              <img class="big_img" src="{{ asset('image/product/' . $images[0]) }}" alt="">
                          </div>
                          <div class="product__details__thumb">
                              @foreach ($images as $value)
                                  <div class="pt__item active">
                                      <img data-imgbigurl="{{ asset('image/product/' . $value) }}"
                                          src="{{ asset('image/product/' . $value) }}" alt="">
                                  </div>
                              @endforeach
                          </div>

                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="product__details__text">
                       
                          <input type="hidden" id="" name="id" value="{{$data->id}}">
                          <div class="product__label">{{ $data->name }}</div>
                          <h4>{{ $data->title }}</h4>
                          <h5>{{ $data->price }}</h5>
                          <p>{{ $data->desc }}</p>
                          <ul>
                              <li>SKU: <span>17</span></li>
                              <li>Category: <span>{{ $data->CategoryName->category }}</span></li>
                              @php
                                  $tags = json_decode($data->tag);
                              @endphp
                              <li>Tags:

                                  @foreach ($tags as $singletag)
                                      @php
                                          $tagdata = App\Models\tag::find($singletag);
                                      @endphp
                                      <span>{{ $tagdata->tag }}</span>
                                  @endforeach
                              </li>
                          </ul>
                          <div class="product__details__option">
                              <input type="hidden" id="product_id" value="{{$data->id}}">
                              <div class="quantity">
                                  <div class="pro-qty">
                                      <input type="text" value="2" id="product_quantity">
                                  </div>
                              </div>
                              <button id="addcart" class="primary-btn" >Add to Cart</button>

                              <a href="#" class="heart__btn"><span class="icon_heart_alt"></span></a>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="product__details__tab">
                  <div class="col-lg-12">
                      <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Additional information</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Previews(1)</a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane active" id="tabs-1" role="tabpanel">
                              <div class="row d-flex justify-content-center">
                                  <div class="col-lg-8">
                                      <p>This delectable Strawberry Pie is an extraordinary treat filled with sweet and
                                          tasty chunks of delicious strawberries. Made with the freshest ingredients, one
                                          bite will send you to summertime. Each gift arrives in an elegant gift box and
                                          arrives with a greeting card of your choice that you can personalize online!</p>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-2" role="tabpanel">
                              <div class="row d-flex justify-content-center">
                                  <div class="col-lg-8">
                                      <p>This delectable Strawberry Pie is an extraordinary treat filled with sweet and
                                          tasty chunks of delicious strawberries. Made with the freshest ingredients, one
                                          bite will send you to summertime. Each gift arrives in an elegant gift box and
                                          arrives with a greeting card of your choice that you can personalize online!2
                                      </p>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-3" role="tabpanel">
                              <div class="row d-flex justify-content-center">
                                  <div class="col-lg-8">
                                      <p>This delectable Strawberry Pie is an extraordinary treat filled with sweet and
                                          tasty chunks of delicious strawberries. Made with the freshest ingredients, one
                                          bite will send you to summertime. Each gift arrives in an elegant gift box and
                                          arrives with a greeting card of your choice that you can personalize online!3
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Shop Details Section End -->

      <!-- Related Products Section Begin -->
      <section class="related-products spad">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <div class="section-title">
                          <h2>Related Products</h2>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="related__products__slider owl-carousel">
                      

                      @foreach ($shop as $shops)
                          <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="product__item">
                                  <a href="{{ url('shopdetails/' . $shops->id) }}">
                                      <div class="product__item__pic set-bg"
                                          data-setbg="{{ asset('image/product/' . $shops->thumbnail) }}">
                                          <div class="product__label">
                                              <span>{{ $shops->name }}</span>
                                          </div>
                                      </div>
                                  </a>
                                  <div class="product__item__text">
                                      <h6><a href="{{ url('shopdetails/' . $shops->id) }}">{{ $shops->title }}</a></h6>
                                      <div class="product__item__price">{{ $shops->price }}</div>
                                      <div class="cart_add">
                                          <a href="#">Add to cart</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach

                  </div>
              </div>
          </div>
      </section>
      <!-- Related Products Section End -->
  @endsection
