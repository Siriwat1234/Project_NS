@include ('layouts/frontend/head')

@include ('layouts/frontend/header')

<body>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Ns Game Shop</span></h1>
          <h2>ซื้อขาย ID Game Online สะดวก ปลอดภัย 100%</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">เลือกซื้อสินค้า</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
        </div>

      </div>
    </div>

    
  </section><!-- End Hero -->
  

  

  {{-- <section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>สินค้าแนะนำ</h2>
        <p>ไอดีเกมแนะนำ</p>
      </div>

      <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('project/img/2img.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>ไอดีแนะนำ</h3>
                <div class="price">
                  <p><span>12,000 บาท</span></p>
                </div>
                <p class="fst-italic">
            ไอดีเกมแนะนำ สกินแรร์ๆแน่นๆ สวยเป็นพิเศษ Kirito Asuna Violet Dimension Breaker
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> สกินแรร์ๆ แน่นๆ ฮีโร่ 108</li>
                  <li><i class="bi bi-check-circled"></i> มีรูนพร้อมเล่น</li>
                  <li><i class="bi bi-check-circled"></i>อดีตกลอเรียส แรงค์คอน 9SS</li>
                </ul>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('project/img/3img.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>ไอดีแนะนำ</h3>
                <div class="price">
                  <p><span>14,900 บาท</span></p>
                </div>
                <p class="fst-italic">
                  ไอดีเกมแนะนำ สกินแรร์ๆแน่นๆ สวยเป็นพิเศษ Kirito Asuna Violet Dimension Breaker
                      </p>
                      <ul>
                        <li><i class="bi bi-check-circled"></i> สกินแรร์ๆ แน่นๆ ฮีโร่ 108</li>
                        <li><i class="bi bi-check-circled"></i> มีรูนพร้อมเล่น</li>
                        <li><i class="bi bi-check-circled"></i>อดีตกลอเรียส แรงค์คอน 9SS</li>
                </ul>
              </div>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('project/img/4img.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>ไอดีแนะนำ</h3>
                <div class="price">
                  <p><span>2,399 บาท</span></p>
                </div>
                <p class="fst-italic">
                  ไอดีเกมแนะนำ สกินแรร์ๆแน่นๆ สวยเป็นพิเศษ Kirito Asuna Violet Dimension Breaker
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> สกินแรร์ๆ แน่นๆ ฮีโร่ 108</li>
                  <li><i class="bi bi-check-circled"></i> มีรูนพร้อมเล่น</li>
                  <li><i class="bi bi-check-circled"></i>อดีตกลอเรียส แรงค์คอน 9SS</li>
                </ul>
              </div>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Events Section --> --}}

<div class="container">
  <div class="swiper-slide">
    <div class="row event-item">

      {{-- <div class="col-lg-6 pt-4 pt-lg-0 content">
        <div class="mt-5" > <h3>ไอดีแนะนำ</h3> </div>
        <p class="fst-italic">
          มีไอดีให้เลือกมากมายหลายรูปแบบตามที่คุณต้องการหรือตามรูปแบบของสินค้านั้นๆมีความปลอดภัยมีรับประกันหลังการซื้อขาย
        </p>
        <ul>
          <li><i class="bi bi-check-circle"></i>  รับประกันความปลอดภัย 100%</li>
          <li><i class="bi bi-check-circle"></i>  ราคาไอดีเกมทางร้านราคาไม่แพง</li>
          <li><i class="bi bi-check-circle"></i>  มีฐานลูกค้าและเครดิตผ่าน Facebook </li>
        </ul>
       <p>
          เริ่มต้นมาจากการขายเกมใน Facebook มาระยะเวลานึงแต่การหาลูกค้ามันหาได้มากกว่าใน Facebook จึงทำเพจขึ้นมา เพื่อกระจายฐานลูกค้า ให้ทั่วถึง และเข้าถึงได้ง่ายมากยิ่งขึ้น ทางร้านมีเครดิตจากการซื้อขายมากมาย โดยผ่าน Facebook ที่มีชื่อ Nomsodkub ทางร้านไม่ได้มีแค่ไอดีเกมเกมเดียว มีหลากหลายเกม แต่เกมหลักๆ คือ Rov โดยเฉพาะ Rov จะมีฐานข้อมูลที่ใหญ่มาก และไม่ได้มีแค่ไอดีเกมอย่างเดียว ยังรับทำชื่อสีอีกด้วย
      </p>
      </div>
      <div class="col-lg-6" >
        <img src="{{asset('project/img/4img.jpg')}}" class="img-fluid" alt="">
      </div>
    </div>
  </div><!-- End testimonial item --> --}}

</div>
</div>




  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2"  data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('project/img/4img.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" >
            <h3>Ns Game Shop</h3>
            <p class="fst-italic">
              มีไอดีให้เลือกมากมายหลายรูปแบบตามที่คุณต้องการหรือตามรูปแบบของสินค้านั้นๆมีความปลอดภัยมีรับประกันหลังการซื้อขาย
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>  รับประกันความปลอดภัย 100%</li>
              <li><i class="bi bi-check-circle"></i>  ราคาไอดีเกมทางร้านราคาไม่แพง</li>
              <li><i class="bi bi-check-circle"></i>  มีฐานลูกค้าและเครดิตผ่าน Facebook </li>
            </ul>
            <p>
                เริ่มต้นมาจากการขายเกมใน Facebook มาระยะเวลานึงแต่การหาลูกค้ามันหาได้มากกว่าใน Facebook จึงทำเพจขึ้นมา เพื่อกระจายฐานลูกค้า ให้ทั่วถึง และเข้าถึงได้ง่ายมากยิ่งขึ้น ทางร้านมีเครดิตจากการซื้อขายมากมาย โดยผ่าน Facebook ที่มีชื่อ Nomsodkub ทางร้านไม่ได้มีแค่ไอดีเกมเกมเดียว มีหลากหลายเกม แต่เกมหลักๆ คือ Rov โดยเฉพาะ Rov จะมีฐานข้อมูลที่ใหญ่มาก และไม่ได้มีแค่ไอดีเกมอย่างเดียว ยังรับทำชื่อสีอีกด้วย
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Content Section -->
   <!-- ======= Events Section ======= -->
   <section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>สินค้าแนะนำ</h2>
        <p>ไอดีเกมแนะนำ</p>
      </div>

      <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          @foreach ($content as $content1s)
          <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('/admin/img/'.$content1s->image)}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>ไอดีแนะนำ</h3>
                <div class="price">
                  <p><span>{{$content1s->price}} บาท</span></p>
                </div>
                <p class="fst-italic">
                  {{$content1s->description}}                </p>
                
              </div>
            </div>
          </div>
          @endforeach
          
          <!-- End testimonial item -->

          {{-- <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('project/img/3img.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>ไอดีแนะนำ</h3>
                <div class="price">
                  <p><span>14,900 บาท</span></p>
                </div>
                <p class="fst-italic">
                  ไอดีเกมแนะนำ สกินแรร์ๆแน่นๆ สวยเป็นพิเศษ Kirito Asuna Violet Dimension Breaker
                      </p>
                      <ul>
                        <li><i class="bi bi-check-circled"></i> สกินแรร์ๆ แน่นๆ ฮีโร่ 108</li>
                        <li><i class="bi bi-check-circled"></i> มีรูนพร้อมเล่น</li>
                        <li><i class="bi bi-check-circled"></i>อดีตกลอเรียส แรงค์คอน 9SS</li>
                </ul>
              </div>
            </div>
          </div><!-- End testimonial item --> --}}

          {{-- <div class="swiper-slide">
            <div class="row event-item">
              <div class="col-lg-6">
                <img src="{{asset('project/img/4img.jpg')}}" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h3>ไอดีแนะนำ</h3>
                <div class="price">
                  <p><span>2,399 บาท</span></p>
                </div>
                <p class="fst-italic">
                  ไอดีเกมแนะนำ สกินแรร์ๆแน่นๆ สวยเป็นพิเศษ Kirito Asuna Violet Dimension Breaker
                </p>
                <ul>
                  <li><i class="bi bi-check-circled"></i> สกินแรร์ๆ แน่นๆ ฮีโร่ 108</li>
                  <li><i class="bi bi-check-circled"></i> มีรูนพร้อมเล่น</li>
                  <li><i class="bi bi-check-circled"></i>อดีตกลอเรียส แรงค์คอน 9SS</li>
                </ul>
              </div>
            </div>
          </div><!-- End testimonial item --> --}}

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Events Section -->
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>รายการสินค้า</h2>
          <p>ID Rov</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              {{-- <li data-filter=".filter-starters">ราคาไม่เกิน 1,000</li>
              <li data-filter=".filter-salads">ราคาไม่เกิน 10,000</li>
              <li data-filter=".filter-specialty">ราคาไม่เกิน 100,000</li> --}}
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($recommend as $products)

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('/admin/img/'.$products->image)}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">{{$products->name}}</a><span>{{$products->price}}</span>
            </div>
            <div class="menu-ingredients">
              {{$products->description}}
            </div>
          </div>

          @endforeach


          {{-- <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('project/img/menu/1img.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ไอดี Rov</a><span>14,000 บาท</span>
            </div>
            <div class="menu-ingredients">
              ID game Rov
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('project/img/menu/1img.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ไอดี Rov</a><span>750 บาท</span>
            </div>
            <div class="menu-ingredients">
              ID game Rov
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('project/img/menu/1img.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ไอดี Rov</a><span>3,500 บาท</span>
            </div>
            <div class="menu-ingredients">
              ID game Rov
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('project/img/menu/1img.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ไอดี Rov</a><span>24,000 บาท</span>
            </div>
            <div class="menu-ingredients">
              ID game Rov
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="{{asset('project/img/menu/1img.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ไอดี Rov</a><span>850 บาท</span>
            </div>
            <div class="menu-ingredients">
              ID game Rov
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('project/img/menu/1img.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ไอดี Rov</a><span>1,300 บาท</span>
            </div>
            <div class="menu-ingredients">
              ID game Rov
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="{{asset('project/img/menu/1img.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ไอดี Rov</a><span>4,200 บาท</span>
            </div>
            <div class="menu-ingredients">
              ID game Rov
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="{{asset('project/img/menu/1img.jpg')}}" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ไอดี Rov</a><span>32,000 บาท</span>
            </div>
            <div class="menu-ingredients">
              ID game Rov
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>ราคาพิเศษ</h2>
          <p>สินค้า Special ลดราคาพิเศษ</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">ไอดี Rov ราคาพิเศษ</a>
              </li>
              
            </ul>
          </div>
          
          @foreach ($content2 as $content2s)
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>{{$content2s->name}}</h3>
                    <p class="fst-italic">{{$content2s->price}} </p>
                    <p>{{$content2s->description}}</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{asset('project/img/specials-1.jpg'.$content2s->image)}}" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>


      </div>
    </section><!-- End Specials Section -->
    @include ('layouts/frontend/footer')


</body>

</html>