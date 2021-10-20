@extends('layouts.vendor')
@section('title', 'Profile | ')

@section('content')

<!-- CONTAINER FLUID -->
<div class="container ">

	<!-- ROW 1 -->
    <div class="row  bg-light" style="border-radius: 10px;padding:10px;">
    	<div class="col-md-12">
    		@if ($profile->avatar != '')
	    		<img src="{{ asset('public/'.$profile->avatar)}}" id="avatar" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
	    	@else
	    		<img src="{{ asset('uploads/images/user/avatars/default.jpg')}}" id="avatar" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
	    	@endif
	        <h2 class="text-capitalize" style="margin-top: 10px; padding:10px;">{{ $profile->name }}'s Profile</h2>
	        <form autocomplete="off"  action="{{ url('vendor/profile/change_avatar') }}" method="POST" enctype="multipart/form-data" style="margin-top: -15px;">
	        	@csrf
	        	<label>Update Profile Image</label>
	        	<br />
	        	<input type="file" name="avatar" accept="image/png, image/jpg, image/jpeg" onchange="readURL(this,'avatar');">
	        	<button style="float: right;" type="submit" class="btn btn-primary robotoMedium bg-2184cb white-space-now-wrap pl-4 pr-4 pt-1 pb-1">Update Image</button>
	        </form>
	    </div>
    </div>
    <!-- END ROW 1 -->
    <br />

	<div class="card">
		<div class="card-body">
			<form autocomplete="off"  action="{{ url('vendor/profile/'.$profile->id) }}" method="POST">
                @csrf
                @method('put')
				<div class="form-group">
				  	<label for="user_name">User Name*</label>
				  	<input id="user_name" name="name" type="text" class="form-control" value="{{ old('name') ?? $profile->name }}" autocomplete="user_name" placeholder="Enter User Name">

				</div>
				<div class="form-group">
				  	<label for="email">Email*</label>
				  	<input id="email" name="email" readonly type="text" class="form-control" value="{{ old('email') ?? $profile->email }}" autocomplete="email" placeholder="Enter Email">

				</div>
                <button type="submit" class="btn btn-primary robotoMedium bg-2184cb white-space-now-wrap pl-4 pr-4 pt-1 pb-1"> Save Changes</button>
			</form>
		</div>
	</div>
	{{-- END CARD --}}
	<!-- ROW 1 -->
    <div class="row mt-3">
    	<div class="col-md-6">
	        <h2 style="margin-top:4px;">Change Password</h2>
	    </div>
    </div>
    <!-- END ROW 1 -->
    <br />

	<div class="card">
		<div class="card-body">
			<form autocomplete="off"  action="{{ url('vendor/password') }}" method="POST">
				@csrf
				<div class="form-group">
				  	<label for="old_password">Old Password*</label>
				  	<input id="old_password" name="old_password" type="password" class="form-control " value="{{ old('old_password') }}" autocomplete="first_name" placeholder="Enter Old Password">

				</div>
				<div class="form-group">
				  	<label for="new_password">New Password*</label>
				  	<input id="new_password" name="new_password" type="password" class="form-control" value="{{ old('new_password') }}" placeholder="Enter New Password" autocomplete="new-password">

				</div>
				<div class="form-group">
				  	<label for="password-confirm">Confirm New Password*</label>
                	<input id="password-confirm" type="password" class="form-control" name="new_password_confirmation" placeholder="Re-Type New Password" autocomplete="new-password">
				</div>
                <button type="submit" class="btn btn-primary robotoMedium bg-2184cb white-space-now-wrap pl-4 pr-4 pt-1 pb-1"> Save Changes</button>
			</form>
		</div>
	</div>
	<br><br><br>
	{{-- END CARD --}}
</div>
<!--END CONTAINER FLUID-->

@endsection
@push('scripts')
    <script>
        function readURL(input, id) {
    for (let index = 0; index <= input.files.length - 1; index++) {
        var size = input.files[index].size; // this is in bytes
        if (size > 2000000) {
            $(input).parent().parent().siblings("p").html('Image size is more than required');
            $(input).val(null);
        } else {
            if (id == null) {
                $('.progress').removeClass('d-none');
                $('#fileName').html(input.files[index].name + ' file uploaded successfuly!');
            }
            var reader = new FileReader();
            reader.onload = function(e) {

                $("#" + id).attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[index]);
        }
    }
}
    </script>
@endpush