@include('partials.header')

<!--===== CASE AREA STARTS =======-->
<div class="case-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="case-header text-center heading2">
                    <h5>Case Study</h5>
                    <h2>Our Case Studies</h2>
                </div>
                <div class="space50 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="tabs-area text-center">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-ecommerce-tab" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button" role="tab" aria-controls="pills-ecommerce" aria-selected="false">Ecommerce</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-website-tab" data-bs-toggle="pill" data-bs-target="#pills-website" type="button" role="tab" aria-controls="pills-website" aria-selected="false">Website Dev</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-seo-tab" data-bs-toggle="pill" data-bs-target="#pills-seo" type="button" role="tab" aria-controls="pills-seo" aria-selected="false">SEO</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile" type="button" role="tab" aria-controls="pills-mobile" aria-selected="false">Mobile App</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-software-tab" data-bs-toggle="pill" data-bs-target="#pills-software" type="button" role="tab" aria-controls="pills-software" aria-selected="false">Software</button>
                      </li>
                    </ul>
                  </div>
            </div>
            <div class="col-lg-12">
                <div class="tabs-content-area">
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade active show" id="pills-all" role="tabpanel">
                        <div class="tabs-contents">
                          <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="case-inner-box">
                                    <div class="img1 image-anime">
                                        <img src="assets/img/all-images/case-img9.png" alt="">
                                    </div>
                                    <div class="content-area">
                                      <div class="link-area">
                                          <a href="{{route('premium-services')}}" class="tags">#Ecommerce</a>
                                          <a href="{{route('premium-services')}}" class="head">Shopify Store Development</a>
                                      </div>
                                      <div class="arrow">
                                        <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img10.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="{{route('premium-services')}}" class="tags">#Website Dev</a>
                                      <a href="{{route('premium-services')}}" class="head">Corporate Website Redesign</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img11.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="{{route('premium-services')}}" class="tags">#SEO</a>
                                      <a href="{{route('premium-services')}}" class="head">Local SEO Optimization</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img12.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="{{route('premium-services')}}" class="tags">#Mobile App</a>
                                      <a href="{{route('premium-services')}}" class="head">Food Delivery App Development</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img13.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Software</a>
                                      <a href="{{route('premium-services')}}" class="head">Inventory Management System</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img14.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Ecommerce, SEO</a>
                                      <a href="{{route('premium-services')}}" class="head">WooCommerce SEO Strategy</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img15.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Website Dev, SEO</a>
                                      <a href="{{route('premium-services')}}" class="head">Website Performance Optimization</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img16.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Mobile App, Software</a>
                                      <a href="{{route('premium-services')}}" class="head">Healthcare Mobile Application</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img17.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Software, Website Dev</a>
                                      <a href="{{route('premium-services')}}" class="head">Custom CRM Development</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-ecommerce" role="tabpanel">
                        <div class="tabs-contents">
                          <div class="row align-items-center">
                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                  <div class="img1 image-anime">
                                      <img src="assets/img/all-images/case-img9.png" alt="">
                                  </div>
                                  <div class="content-area">
                                    <div class="link-area">
                                        <a href="{{route('premium-services')}}" class="tags">#Ecommerce</a>
                                        <a href="{{route('premium-services')}}" class="head">Shopify Store Development</a>
                                    </div>
                                    <div class="arrow">
                                      <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                  </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img14.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Ecommerce, SEO</a>
                                      <a href="{{route('premium-services')}}" class="head">WooCommerce SEO Strategy</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-website" role="tabpanel">
                        <div class="tabs-contents">
                          <div class="row align-items-center">
                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img10.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="{{route('premium-services')}}" class="tags">#Website Dev</a>
                                      <a href="{{route('premium-services')}}" class="head">Corporate Website Redesign</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img15.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Website Dev, SEO</a>
                                      <a href="{{route('premium-services')}}" class="head">Website Performance Optimization</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img17.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Software, Website Dev</a>
                                      <a href="{{route('premium-services')}}" class="head">Custom CRM Development</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-seo" role="tabpanel">
                        <div class="tabs-contents">
                          <div class="row align-items-center">
                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img11.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="{{route('premium-services')}}" class="tags">#SEO</a>
                                      <a href="{{route('premium-services')}}" class="head">Local SEO Optimization</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img14.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Ecommerce, SEO</a>
                                      <a href="{{route('premium-services')}}" class="head">WooCommerce SEO Strategy</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img15.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Website Dev, SEO</a>
                                      <a href="{{route('premium-services')}}" class="head">Website Performance Optimization</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="pills-mobile" role="tabpanel">
                        <div class="tabs-contents">
                          <div class="row align-items-center">
                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img12.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="{{route('premium-services')}}" class="tags">#Mobile App</a>
                                      <a href="{{route('premium-services')}}" class="head">Food Delivery App Development</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img16.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Mobile App, Software</a>
                                      <a href="{{route('premium-services')}}" class="head">Healthcare Mobile Application</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane fade" id="pills-software" role="tabpanel">
                        <div class="tabs-contents">
                          <div class="row align-items-center">
                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img13.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Software</a>
                                      <a href="{{route('premium-services')}}" class="head">Inventory Management System</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img16.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Mobile App, Software</a>
                                      <a href="{{route('premium-services')}}" class="head">Healthcare Mobile Application</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-4">
                              <div class="case-inner-box">
                                <div class="img1 image-anime">
                                    <img src="assets/img/all-images/case-img17.png" alt="">
                                </div>
                                <div class="content-area">
                                  <div class="link-area">
                                      <a href="#" class="tags">#Software, Website Dev</a>
                                      <a href="{{route('premium-services')}}" class="head">Custom CRM Development</a>
                                  </div>
                                  <div class="arrow">
                                    <a href="{{route('premium-services')}}"><i class="fa-solid fa-arrow-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   </div>
            </div>
            <div class="col-lg-12">
              <div class="pagination-area">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
        </div>
    </div>
</div>
<!--===== CASE AREA ENDS =======-->


{{-- Bottom of the page --}}
@include('partials.footer')