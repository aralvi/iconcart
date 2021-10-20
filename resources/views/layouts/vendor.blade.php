<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="preload" href="https://cdna.iconscout.com/22ac2ee851a14b862c59.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/930495dde68f9d3416ff.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/f51356780f6ce8554751.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/d0db570a934980aececf.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/69859511713f20bfb92d.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/a06294929bcfa9225c1e.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/7c096954f6b3893f2a8b.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/628e95c0aa28fb863316.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/9cf569ecd7ed528e7afa.js" as="script">
  <link rel="preload" href="https://cdna.iconscout.com/12c5f2d3b2627c775d3f.js" as="script">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  </head>
<body id="body">
<div class="container-fluid topheader-vendor">
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="{{asset('assets/images/iconscout-logo.color.ae9f9fd.svg')}}" alt="">
        <span class="spantop">Contributors</span>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 topvend-c2">
        <div class="dropdown show">
        <a class="topvrna1" href="{{url('contributer-terms')}}">Contributor Terms</a>
  <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="{{asset('assets/images/91.jpg')}}" class="imgventop" alt="">
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="{{url('vendor/profile')}}">Profile</a>
    <button role="menuitem" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit()" type="button" class="dropdown-item">
                          Log Out
                          </button>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
  </div>
</div>
    </div>
</div>
</div>
<div class="container" style="max-width: 1450px;">
            <nav class="gn-menu-wrapper gn-menu-main gn-open-part">
                <div class="gn-scroller">
                    <ul id="myDIV" class="gn-menu ">

                        <li class="active"><a href="{{url('home')}}" class="gn-icon fa fa-home"></a>
                        </li>
                        <li><a href="{{url('vendor/icon')}}" class="gn-icon  fa fa-eercast"></a>
                        </li>
                        <li><a href="{{url('vendor/photo')}}" class="gn-icon fa fa-ravelry"></a>
                        </li>
                        <li><a href="{{url('vendor/illustration')}}" class="gn-icon fa fa-cube"></a>
                        </li>
                        <li><a href="{{url('vendor/stats')}}" class="gn-icon fa fa-bar-chart"></a>
                        </li>
                        <li><a href="{{url('vendor/cashout')}}" class="gn-icon fa fa-money"></a>
                        </li>
                        <li><a class="gn-icon fa fa-id-badge"></a>
                        </li>
                        <li><a href="{{url('vendor/contributorterms')}}" class="gn-icon gn-icon-help"></a>
                        </li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="gn-icon fa fa-power-off">
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </a>
                        </li>



                    </ul>
                </div>
                <!-- /gn-scroller -->
            </nav>

        @yield('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
     <script src="assets/js/main.js"></script>


     <script type="text/javascript">

//$('.gn-icon-menu').hover(function(){
  //$('.gn-menu-wrapper').toggleClass('gn-open-part');
//});

//$('.gn-menu-wrapper').hover(function(){
  //$(this).toggleClass('gn-open-all');
//});
$('.gn-icon-menu').click(function(){
  $('.gn-menu-wrapper').toggleClass('gn-open-all');
})


// Dropzone.options.dropzoneForm = {
//     autoProcessQueue : false,
//     acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

//     init:function(){
//       var submitButton = document.querySelector("#submit-all");
//       myDropzone = this;

//       submitButton.addEventListener('click', function(){
//         myDropzone.processQueue();
//       });

//       this.on("complete", function(){
//         if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
//         {
//           var _this = this;
//           _this.removeAllFiles();
//         }
//         load_images();
//       });

//     }

//   };


    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    @stack('scripts')
  </body>
</html>