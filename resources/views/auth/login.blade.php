<div class="modal modal_3MX0r fade" id="exampleModalLogin" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabelLogin" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" bis_skin_checked="1"><span tabindex="0"></span>
    <div id="modalAuthLogin___BV_modal_content_" tabindex="-1" class="modal-content" bis_skin_checked="1">
      <header id="modalAuthLogin___BV_modal_header_" class="modal-header">
        <div bis_skin_checked="1">
          <h4 class="h2 mb-2">Log In</h4>
        </div>
        @include('flash-message')
      </header>
      <div id="modalAuthLogin___BV_modal_body_" class="modal-body" bis_skin_checked="1">
        <div class="row justify-content-center" bis_skin_checked="1">
          <div class="col-md-11" bis_skin_checked="1">
            <div class="social_ivHiy" bis_skin_checked="1">
            <a
            href="{{ route('login.google') }}"
                class="btn btn-block btn-google"><span class="icon"><img
                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHZpZXdCb3g9IjAgMCAxOCAxOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0xNy42NCA5LjIwNWMwLS42MzktLjA1Ny0xLjI1Mi0uMTY0LTEuODQxSDl2My40ODFoNC44NDRhNC4xNCA0LjE0IDAgMCAxLTEuNzk2IDIuNzE2djIuMjU5aDIuOTA4YzEuNzAyLTEuNTY3IDIuNjg0LTMuODc1IDIuNjg0LTYuNjE1eiIgZmlsbD0iIzQyODVGNCIgZmlsbC1ydWxlPSJub256ZXJvIj48L3BhdGg+PHBhdGggZD0iTTkgMThjMi40MyAwIDQuNDY3LS44MDYgNS45NTYtMi4xOGwtMi45MDgtMi4yNTljLS44MDYuNTQtMS44MzcuODYtMy4wNDguODYtMi4zNDQgMC00LjMyOC0xLjU4NC01LjAzNi0zLjcxMUguOTU3djIuMzMyQTguOTk3IDguOTk3IDAgMCAwIDkgMTh6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iPjwvcGF0aD48cGF0aCBkPSJNMy45NjQgMTAuNzFBNS40MSA1LjQxIDAgMCAxIDMuNjgyIDljMC0uNTkzLjEwMi0xLjE3LjI4Mi0xLjcxVjQuOTU4SC45NTdBOC45OTYgOC45OTYgMCAwIDAgMCA5YzAgMS40NTIuMzQ4IDIuODI3Ljk1NyA0LjA0MmwzLjAwNy0yLjMzMnoiIGZpbGw9IiNGQkJDMDUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPjxwYXRoIGQ9Ik05IDMuNThjMS4zMjEgMCAyLjUwOC40NTQgMy40NCAxLjM0NWwyLjU4Mi0yLjU4QzEzLjQ2My44OTEgMTEuNDI2IDAgOSAwQTguOTk3IDguOTk3IDAgMCAwIC45NTcgNC45NThMMy45NjQgNy4yOUM0LjY3MiA1LjE2MyA2LjY1NiAzLjU4IDkgMy41OHoiIGZpbGw9IiNFQTQzMzUiIGZpbGwtcnVsZT0ibm9uemVybyI+PC9wYXRoPjxwYXRoIGQ9Ik0wIDBoMTh2MThIMHoiPjwvcGF0aD48L2c+PC9zdmc+"
                    height="20" width="20"></span>
                Log In with Google
              </a>
              <a href="{{ route('login.facebook') }}"
                class="btn btn-block btn-facebook"><span class="icon"><svg version="1.1" viewBox="0, 0, 20, 20"
                    class="svg-icon svg-fill" style="width: 20px; height: 20px;">
                    <path pid="0"
                      d="M18.62 20H1.38A1.38 1.38 0 0 1 0 18.62V1.38C0 .617.618 0 1.38 0h17.24C19.383 0 20 .618 20 1.38v17.24A1.38 1.38 0 0 1 18.62 20zM16.898 3.448h-3.449a4.15 4.15 0 0 0-3.793 4.138v2.07H6.897v3.447h2.758V20h3.448v-6.897h3.449V9.655h-3.449V7.586a.69.69 0 0 1 .69-.69h3.104V3.449z"
                      fill-rule="nonzero" fill="#FFF"></path>
                  </svg></span>
                Log In with Facebook
              </a>
               <a href="#"
                class="btn btn-block btn-twitter"><span class="icon"><svg version="1.1" viewBox="0, 0, 17, 20"
                    class="svg-icon svg-fill" style="width: 20px; height: 20px;">
                    <path pid="0"
                      d="M9.816 4.354v.563C5.689 4.17 3.626 3.05 1.387.703c-1.339 2.59.125 4.784 1.756 5.97-1.091 0-1.987-.157-2.691-.77-.053-.047-.137 0-.118.068.612 2.166 2.63 3.742 4.214 4.213-1.43 0-2.4.214-3.401-.43-.058-.038-.132.019-.11.083.759 2.13 2.307 2.806 4.565 2.806-1.123.826-2.617 1.693-5.476 1.753-.115.003-.172.147-.081.22 1.08.87 3.666 1.538 7.313 1.538 6.017 0 10.886-5.34 10.886-11.94v-.35c.936-.35 1.486-1.189 1.753-2.03.015-.047-.031-.09-.078-.075l-1.976.682c-.045.016-.076-.041-.04-.071.828-.682 1.484-1.52 1.743-2.32.01-.03-.023-.058-.053-.046-.948.398-1.852.772-2.566.994a.446.446 0 0 1-.354-.04C16.205.696 14.848-.016 13.951 0c-2.32.043-4.135 2.034-4.135 4.354z"
                      fill-rule="nonzero" fill="#FFF"></path>
                  </svg></span>
                Log In with Twitter
              </a></div>
            <div class="form-row mt-5 mb-5" bis_skin_checked="1">
              <div class="col" bis_skin_checked="1">
                <hr>
              </div>
              <div class="col-auto or_KAbip" bis_skin_checked="1">or</div>
              <div class="col" bis_skin_checked="1">
                <hr>
              </div>
            </div>

            <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
              <fieldset class="form-group" id="__BVID__645">

                <div tabindex="-1" role="group" class="bv-no-focus-ring" bis_skin_checked="1">
                  <input name="email" id="email"
                    type="email" placeholder="Email Address" class="form-control  @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </fieldset>
              <fieldset class="form-group" id="__BVID__647">

                <div tabindex="-1" role="group" class="bv-no-focus-ring" bis_skin_checked="1">
                  <input name="password"
                    type="password" placeholder="Password" class="form-control  @error('password') is-invalid @enderror">
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div>
              </fieldset> <button type="submit" class="btn btn-primary btn-block">
                Log In
              </button>
            </form>
          </div>
          <div class="text-center mt-4" bis_skin_checked="1"><a href="{{route('password.request')}}"
              class="text-secondary font-size-sm btnForgotPassword_13tFG">Forgot Password?</a></div>
        </div>
      </div>
      <footer id="modalAuthLogin___BV_modal_footer_" class="modal-footer">

      </footer>
    </div><span tabindex="0"></span>
  </div>
</div>



@section('scripts')
@parent

@if(count($errors) > 0)
    <script>
         $(document).ready(function(){
            $("#exampleModalLogin").modal("show");
         });
    </script>
@endif
@endsection