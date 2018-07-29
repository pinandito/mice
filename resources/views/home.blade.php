@extends('layout.appd')

@section('content')
<div class="dashboard" data-wop="true">				
	<div class="profile__details">
		<div class="title_holder">
			<h3>Profile Details</h3>
		</div>
			<!-- PROFILE FORM -->
			<div class="directify_fn_profile_form">	
				<!-- MAIN SECTION -->
				<div class="directify_fn_profile_main_section">
					<div class="profile__image">
						<img src="directify/img/dashboard/profile-l.jpg" alt="" />
						<div class="changer">
							<label for="file-1">
								<span>Change Photo</span>
							</label>
						</div>
					</div>
					<div class="profile__name">
						<label>Your Name</label>
						<p>{{$user->name}}</p>
					</div>
					<div class="profile__email">
						<label>Email</label>
						<p>{{$user->email}}</p>
					</div>
					<div class="profile__number">
						<label>Phone</label>
						<p>{{$user->nokontak}}</p>
					</div>
					<div class="profile__description">
						<label>Description</label>
						<p></p>
					</div>
					<div class="profile__save-changes">
						<a href="{{url('/updateprof/'.$user->idus) }}">Update Profile</a>
					</div>
				</div>
				<!-- /MAIN SECTION -->
				
				<!-- SECURITY SECTION -->
				<div class="directify_fn_profile_security_section">
					<h3>Change Password</h3>
					<div class="security__pass-new">
						<label>New Password</label>
						<input type="password" id="security__pass-new" />
					</div>
					<div class="security__pass-new-confirm">
						<label>Confirm New Password</label>
						<input type="password" id="security__pass-new-confirm" />
					</div>
					<div class="security__pass-current">
						<label>Current Password</label>
						<input type="password" id="security__pass-current" />
					</div>
					<div class="profile__save-password">
						<input type="submit" value="Save Password" />
					</div>
				</div>
				<!-- /SECURITY SECTION -->
			</div>
			<!-- /PROFILE FORM -->
	</div>
</div>
@endsection