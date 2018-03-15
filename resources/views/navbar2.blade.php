<link rel="icon" href="ind/fav.png" type="image/png" >
<script type="text/javascript" src="js/intro.min.js"></script>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/introjs.min.css"  media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/autocomplete.css">
<script src="js/autocomplete.js"></script>
<style type="text/css">
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
	background-color: #17A2B8;
}
.dropdown-menu{
	top: 60px;
	right: 0px;
	left: unset;
	width: 460px;
	box-shadow: 0px 5px 7px -1px #c1c1c1;
	padding-bottom: 0px;
	padding: 0px;
}
.dropdown-menu:before{
	content: "";
	position: absolute;
	top: -20px;
	right: 12px;
	border:10px solid #343A40;
	border-color: transparent transparent #343A40 transparent;
}
.head{
	padding:5px 15px;
	border-radius: 3px 3px 0px 0px;
}
.notification-box{
	padding: 10px 0px; 
}
.bg-gray{
	background-color: #eee;
}
@media (max-width: 640px) {
	.dropdown-menu{
		top: 50px;
		left: -16px;  
		width: 290px;
	} 
	.nav{
		display: block;
	}
	.nav .nav-item,.nav .nav-item a{
		padding-left: 0px;
	}
	.message{
		font-size: 13px;
	}
}
</style>
@if (session('Error'))
<script type="text/javascript">
	alert('Error:'.session('message'));
</script>

@endif


<nav class="navbar navbar-expand-sm navbar-light bg-dark" style="height: 86px; opacity: 0.7;">
	<a class="navbar-brand text-light" href="http://www.sac.iitkgp.ac.in"><img height="90" width="250" src="sac.png" alt="someimg"/></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: unset !important;">
		
		<ul class="nav nav-pills mr-auto justify-content-end">
			<li class="nav-item">

				<form action="search/" method="POST" class="form-inline">
					{{ csrf_field() }}
					<div class="form-group" >
						<input type="text" name="search" required="required" id="search" class="form-control" placeholder="Search your friend here">
					</div>
					<div class="form-group" style="margin-left: 8px;">
						<button type="submit" class="btn btn-default" style="margin-top: 0px;">Search</button>
					</div>
				</form>
			</li>
			<li class="nav-item active">
				<a class="nav-link text-light" href="/home">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link text-light" href="/trending">Trending <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link text-light" href="/profile_index">
					{{Auth::user()->name}}
				</a>			
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-cog"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right" >
					<li class="head text-dark bg-light">
						<a class="nav-link text-dark" href="/details">Edit Details</a>
					</li>
					<li class="head text-dark bg-light">
						<a class="nav-link text-dark" href="/send">Change Password </a>
					</li>
					<li class="head text-dark bg-light">
						<a class="nav-link text-dark" href="/logout">Logout </a>
					</li>

				</ul>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link text-light" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >
					
					@if(count($notifications))
					<i class="fa fa-bell" style="color: blue;">
						<span lass="badge" style="position: relative; top: 6px; left: -6px;color: white; font-size: 19px;">{{count($notifications)}}</span>
					</i>
					@else
					<i class="fa fa-bell"></i>
					@endif

				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li class="head text-light bg-dark">
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-12">
								<span>Notifications ({{count($notifications)}})</span>

							</div>
						</li>
						@foreach($notifications as $notification)
						<a href="/read/{{$notification['id']}}">
							<li class="notification-box">
								<div class="row">
									@php
									$pic = App\User::where('name',$notification['user'])->pluck('pro_pic');
									@endphp  
									<div class="col-lg-3 col-sm-3 col-3 text-center">
										<img src="{{$pic[0]}}" class="w-50 rounded-circle">
									</div> 
									<div class="col-lg-8 col-sm-8 col-8">
										<strong class="text-info">{{$notification['user']}}</strong>
										<div>
											{{$notification['views']}}
										</div>
										<small class="text-warning">{{$notification['created_at']}}</small>
									</div>    
								</div>
							</li>
						</a>
						@endforeach						
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<script type="text/javascript">
		var user = <?php echo $user;?>;
		//console.log(user[0].name);
		var names = [];
		for (var i = 0; i < user.length; i++) {
			names[i] = user[i].name;
		}
		//console.log('names',names);
		
		$(function() {
			$("#search").autocomplete({
				source:[names]
			}); 
		});
	</script>