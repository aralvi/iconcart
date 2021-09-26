
<style>
  .lds-facebook {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 8px;
  width: 8px;
  background: #000;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 8px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
  left: 32px;
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
  left: 56px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 8px;
    height: 64px;
  }
  50%, 100% {
    top: 24px;
    height: 32px;
  }
}

</style>
<div class="modal modal_3MX0r fade" id="exampleModalSignup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelSignup"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" bis_skin_checked="1">
     <span tabindex="0"></span>
     <div id="modalAuthSignup___BV_modal_content_" tabindex="-1" class="modal-content" bis_skin_checked="1">
        <header id="modalAuthSignup___BV_modal_header_" class="modal-header">
           <div bis_skin_checked="1">
              <h4 class="h2 mb-2">Create Account</h4>
              <p class="text-secondary text-center mb-0 font-size-sm">
                 Invite your friends and earn $2 on every signup. You can use this credit to purchase Pro Plans.
              </p>
           </div>
        </header>
        <div id="modalAuthSignup___BV_modal_body_" class="modal-body" bis_skin_checked="1">
           <div class="row justify-content-center" bis_skin_checked="1">
              <div class="col-md-11" bis_skin_checked="1">
                 <div class="social_ivHiy" bis_skin_checked="1">
                    <a
                    href="{{ route('login.google') }}"
                       class="btn btn-block btn-google"><span class="icon">
                         <img
                       src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHZpZXdCb3g9IjAgMCAxOCAxOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0xNy42NCA5LjIwNWMwLS42MzktLjA1Ny0xLjI1Mi0uMTY0LTEuODQxSDl2My40ODFoNC44NDRhNC4xNCA0LjE0IDAgMCAxLTEuNzk2IDIuNzE2djIuMjU5aDIuOTA4YzEuNzAyLTEuNTY3IDIuNjg0LTMuODc1IDIuNjg0LTYuNjE1eiIgZmlsbD0iIzQyODVGNCIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+PHBhdGggZD0iTTkgMThjMi40MyAwIDQuNDY3LS44MDYgNS45NTYtMi4xOGwtMi45MDgtMi4yNTljLS44MDYuNTQtMS44MzcuODYtMy4wNDguODYtMi4zNDQgMC00LjMyOC0xLjU4NC01LjAzNi0zLjcxMUguOTU3djIuMzMyQTguOTk3IDguOTk3IDAgMCAwIDkgMTh6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iPjwvcGF0aD48cGF0aCBkPSJNMy45NjQgMTAuNzFBNS40MSA1LjQxIDAgMCAxIDMuNjgyIDljMC0uNTkzLjEwMi0xLjE3LjI4Mi0xLjcxVjQuOTU4SC45NTdBOC45OTYgOC45OTYgMCAwIDAgMCA5YzAgMS40NTIuMzQ4IDIuODI3Ljk1NyA0LjA0MmwzLjAwNy0yLjMzMnoiIGZpbGw9IiNGQkJDMDUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPjxwYXRoIGQ9Ik05IDMuNThjMS4zMjEgMCAyLjUwOC40NTQgMy40NCAxLjM0NWwyLjU4Mi0yLjU4QzEzLjQ2My44OTEgMTEuNDI2IDAgOSAwQTguOTk3IDguOTk3IDAgMCAwIC45NTcgNC45NThMMy45NjQgNy4yOUM0LjY3MiA1LjE2MyA2LjY1NiAzLjU4IDkgMy41OHoiIGZpbGw9IiNFQTQzMzUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBoMTh2MThIMHoiPjwvcGF0aD48L2c+PC9zdmc+"
                       height="20" width="20"></span>
                    Sign Up with Google
                    </a>
                    <a  href="{{ route('login.facebook') }}"
                       class="btn btn-block btn-facebook">
                       <span class="icon">
                          <svg version="1.1" viewBox="0, 0, 20, 20"
                             class="svg-icon svg-fill" style="width: 20px; height: 20px;">
                             <path pid="0"
                                d="M18.62 20H1.38A1.38 1.38 0 0 1 0 18.62V1.38C0 .617.618 0 1.38 0h17.24C19.383 0 20 .618 20 1.38v17.24A1.38 1.38 0 0 1 18.62 20zM16.898 3.448h-3.449a4.15 4.15 0 0 0-3.793 4.138v2.07H6.897v3.447h2.758V20h3.448v-6.897h3.449V9.655h-3.449V7.586a.69.69 0 0 1 .69-.69h3.104V3.449z"
                                fill-rule="nonzero" fill="#FFF"></path>
                          </svg>
                       </span>
                       Sign Up with Facebook
                    </a>
                    <!---->
                 </div>
                 <div class="form-row mt-5 mb-5" bis_skin_checked="1">
                    <div class="col" bis_skin_checked="1">
                       <hr>
                    </div>
                    <div class="col-auto or_KAbip" bis_skin_checked="1">or</div>
                    <div class="col" bis_skin_checked="1">
                       <hr>
                    </div>
                 </div>
<div class="loader-bar justify-content-center d-none">

              <div class="lds-facebook"><div></div><div></div><div></div></div>
            </div>
                 <form method="POST" action="{{ route('register') }}" id="register-form">
                   {{ csrf_field() }}

                    <fieldset class="form-group" id="__BVID__630">
                       <!---->
                       <div tabindex="-1" role="group" class="bv-no-focus-ring" bis_skin_checked="1">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                             type="text" placeholder="Name" >
                             {{-- @error('name') --}}
                              <span class="invalid-feedback" role="alert">
                                       <strong id="register-name-message"></strong>
                                    </span>
                              {{-- @enderror --}}
                       </div>
                       <div tabindex="-1" role="group" class="bv-no-focus-ring" bis_skin_checked="1">
                          <input name="email"
                             type="text" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror">
                             {{-- @error('email') --}}
                              <span class="invalid-feedback" role="alert">
                                       <strong id="register-email-message"></strong>
                                    </span>
                              {{-- @enderror --}}
                       </div>
                       <!---->
                       <div tabindex="-1" role="group" class="bv-no-focus-ring" bis_skin_checked="1">
                          <input name="password"
                             type="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror">
                             {{-- @error('password') --}}
                           <span class="invalid-feedback" role="alert">
                                    <strong id="register-password-message"></strong>
                                 </span>
                           {{-- @enderror --}}
                       </div>
                       <div tabindex="-1" role="group" class="bv-no-focus-ring" bis_skin_checked="1">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" id="__BVID__633">
                       </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary btn-block"  onclick="forSubmit('#register-form','register')">
                    Sign Up
                    </button>
                 </form>
                 <div class="m-5 container_Pmirf" bis_skin_checked="1">
                    By creating an account, you agree to Iconscout
                    <a href="#" class="" target="_blank">
                    Terms of Use
                    </a>
                    &amp;
                    <a href="#" class="" target="_blank">Privacy Policy </a>.
                 </div>
              </div>
           </div>
        </div>
        <footer id="modalAuthSignup___BV_modal_footer_" class="modal-footer">

        </footer>
     </div>
     <span tabindex="0"></span>
  </div>
</div>


@section('scripts')
@parent

@if(count($errors) > 0)
    <script>
         $(document).ready(function(){
            $("#exampleModalSignup").modal("show");
         });
    </script>
@endif

@endsection