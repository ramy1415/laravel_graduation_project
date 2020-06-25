@extends('layouts.app')

  @section('styles')
  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('designerProfile/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('designerProfile/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('designerProfile/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('designerProfile/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('designerProfile/vendor/aos/aos.css') }}" rel="stylesheet">
  <style type="text/css">
    .dispInline{
      display: inline;
    }
  </style>
  <!-- Template Main CSS File -->
  <link href="{{ asset('designerProfile/css/style.css') }}" rel="stylesheet">
  @endsection

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  @section('content')
  <!-- ======= Header ======= -->
  <div class="row">
  <div id="header" class="col-lg-2" >
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('designerProfile/img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{$designer->name}}</a></h1>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#FeaturedDesigns"><i class="bx bx-home"></i> <span>Featured Designs</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#CurrentDesigns"><i class="bx bx-file-blank"></i> <span>Current Designs</span></a></li>
          <li><a href="#PreviousDesigns"><i class="bx bx-book-content"></i> Previous Designs</a></li>
          <li><a href="#Achievements"><i class="bx bx-book-content"></i> Achievements</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </div>

<div class="col-lg-10">
   <main id="main">

    <!-- Featured Designs -->
     <section id="FeaturedDesigns" class="FeaturedDesigns" >
      <div class="container" >
          <div class="section-title">
              <h2>Featured Designs</h2>
          </div>
          <div class="row" >
                      @foreach($featured_images as $fimage)
                        <div class="col-lg-3 col-sm-6">
                          <div class="product-item" >
                            <a href="{{route('design.show', ['design'=>$fimage->design_id])}}"><img style="width:250px;height:300px;" src="{{asset ('storage/'.$fimage->image) }}" alt=""></a>
                            @can('update',$designer)
                              @if($user->role == "designer"&& $fimage->design->featured )
                              <span class="glyphicon glyphicon-trash"id="{{$fimage->design_id}}"></span>
                              @endif
                            @endcan
                          </div>
                        </div>    
                            @endforeach
          </div>
      </div>
    </section>
    <!-- Featured Designs End -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>{{$about[0]->about}}</p>
          <div style="margin-top:20px;">
            <div class=" mr-3 info dispInline"> <i class="fa fa-envelope fa-sm fa-fw"></i>  <p class="dispInline" >{{$designer->email}}</p></div>
            <div class=" mr-3 info dispInline"> <i class="fa fa-phone fa-sm fa-fw"></i> <p class="dispInline">{{$designer->phone}}</p></div>
            <div class=" mr-3 info dispInline"> <i class="fa fa-home fa-sm fa-fw"> </i> <p class="dispInline">  {{$designer->address}}</p></div>
          </div>
            <div style="margin-top: 30px;">
              @can('update',$designer)
                @if($user->role == "designer")
                  <div  style="margin-right:15px;" class="dispInline" >
                    <a  href="{{ route('user.edit',$designer) }}" class="btn btn-dark edit" >Edit Profile</a>
                  </div> 
                @endif
              @endcan
                      
              @can('update',$designer)
                @if($user->role == "designer")
                  <div  class="dispInline" style="margin-right: 15px;" >
                    <a  href="{{ route('user.create',$designer) }}" class="btn btn-dark " style="    width: 140px;">Add Piography</a>
                  </div> 
                @endif
              @endcan

              @can('update',$designer)
                @if($user->role == "designer")
                  <div  class="dispInline" >
                    {!! Form::open(['route'=>['designer.destroy',$designer],'method'=>'delete' , 'class' =>array('dispInline','edit') ]) !!} 
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                    {!! Form::close() !!} 
                  </div>
                @endif
              @endcan
            </div>
          


        </div>


      </div>
    </section><!-- End About Section -->

    <!-- ======= CurrentDesigns Section ======= -->
    <section id="CurrentDesigns" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Current Designs</h2>
        </div>
        <div class="product-slider owl-carousel">
          @foreach($current_images as $cimage)
                <div class="product-item">
                <div class="pi-pic">
                  <a href="{{route('design.show', ['design' => $cimage->design_id])}}"><img style="width:250px;height:300px;"src="{{asset ('storage/'.$cimage->image) }}" alt=""></a>
                </div>
                </br>
                @can('update',$designer)
                @if($user->role == "designer"&& ! $cimage->design->featured )
                {{-- <a  href="{{ route('featuredesign',$cimage->design_id) }}" class="btn btn-info featured">Add as a Featured</a> --}}
                <button class="btn btn-info featured" id="{{$cimage->design_id}}">Add as a Featured</button>
                    {{-- @else
                      <button type="button" class="btn btn-danger"value="{{$cimage->design_id}}">x</button>
                    @endif --}}     
                @endif
                @endcan
              </div>      
          @endforeach
        </div>
       

      </div>
    </section><!-- End CurrentDesigns Section -->

    <!-- ======= PreviousDesigns Section ======= -->
    <section id="PreviousDesigns" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Previous Designs</h2>
          <div class="product-slider owl-carousel">
            @if($prev_img != null)  
              @foreach($prev_img as $pimage)
                <div class="product-item">
                  <div class="pi-pic">
                    <img style="height:300px;width:250px;"src="{{asset ('storage/'.$pimage->image) }}" alt="">
                  </div>
                  </br>
                </div>
              @endforeach
          </div>
            @else 
              <h3 style="text-align:center;color:navy;">There are no designs sold yet</h3>
            @endif
        </div>

      </div>
    </section><!-- End PreviousDesigns Section -->



    <!-- ======= Achievements Section ======= -->
    <section id="Achievements" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Achievements</h2>
          
        </div>
        <div>
          <h5 >Created Designs <p class="dispInline"> {{$design_count}} </p></h5>
          </br>
          <h5 >Sold Designs <p class="dispInline"> {{$prev_count}} </p></h5>
        </div>
        @can('update',$designer)
                      @if($user->role == "designer")
                        <a href="{{ route('design.create',$designer) }}" class="btn site-btn"style="margin-top:15px;">ADD NEW DESIGN</a>
                      @endif
                  @endcan
      </div>
    </section><!-- End Achievements Section -->

  </main><!-- End #main -->
</div>
</div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  @endsection
  @push('scripts')
      <!-- Vendor JS Files -->
      <script src="{{ asset('designerProfile/vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/php-email-form/validate.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/counterup/counterup.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/venobox/venobox.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/typed.js/typed.min.js') }}"></script>
      <script src="{{ asset('designerProfile/vendor/aos/aos.js') }}"></script>

      <!-- Template Main JS File -->
      <script src="{{ asset('designerProfile/js/main.js') }}"></script>
  @endpush
