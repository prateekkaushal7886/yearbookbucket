<!DOCTYPE html>
<html>
<head>
	<title>YB|Details</title>
</head>
@include('navbar2')
<style>
@font-face {
	font-family: 'Century gothic';
	src: url('font.ttf');
}
body{
	background-color:#333;
	font-color: black;
	font-family: Century gothic;
}
</style>
<body>
	<div class="container-fluid">
		<br>
		<h1 style="text-align: center;color: white;" >Welcome to Yearbook'17</h1>
		<h4 style="text-align: center;color:#707070 ">Fill up your details to continue</h4>
		<div class="container" style="color: white;">
			<form class="form" method="post" action="/details">
				{{csrf_field()}}
				<div class="row" style="text-align: center;">
					<div class="col">
						<select name="department" style="width: 320px" id="department" required class="form-control">
							<option selected value="{{Auth::user()->department}}">@php
							if(!empty(Auth::user()->department))
								{
									echo Auth::user()->department;
								}
								else
								{
									echo 'Choose your department';
								}
								@endphp		
							</option>
							<option value="AE">AE</option>
							<option value="AG">AG</option>
							<option value="AR">AR</option>
							<option value="AT">AT</option>
							<option value="BM">BM</option>
							<option value="BT">BT</option>
							<option value="CE">CE</option>
							<option value="CH">CH</option>
							<option value="CL">CL</option>
							<option value="CR">CR</option>
							<option value="CS">CS</option>
							<option value="CY">CY</option>
							<option value="EC">EC</option>
							<option value="EE">EE</option>
							<option value="ET">ET</option>
							<option value="GG">GG</option>
							<option value="GS">GS</option>
							<option value="HS">HS</option>
							<option value="ID">ID</option>
							<option value="IM">IM</option>
							<option value="IP">IP</option>
							<option value="IT">IT</option>
							<option value="MA">MA</option>
							<option value="ME">ME</option>
							<option value="MI">MI</option> 
							<option value="MM">MM</option>
							<option value="MS">MS</option>
							<option value="MT">MT</option>
							<option value="NA">NA</option>
							<option value="PH">PH</option>
							<option value="RD">RD</option>
							<option value="RE">RE</option>
							<option value="RJ">RJ</option>
							<option value="RT">RT</option>
							<option value="TS">TS</option>
							<option value="WM">WM</option>
						</select>
					</div>
					<div class="col">
						<select name="HOR" style="width: 320px" id="HOR" required class="form-control">
							<option selected="selected" value="{{Auth::user()->HOR}}">@php
							if(!empty(Auth::user()->HOR))	
								{
									echo Auth::user()->HOR;
								}
								else
								{
									echo 'Choose your HALL';
								}
								@endphp	
							</option>
							<option value="SAM"> Ashutosh Mukherjee Hall </option>
							<option value="AZ"> Azad Hall </option>
							<option value="BCR"> B C Roy Hall </option>
							<option value="BRH"> B R Ambedkar Hall </option>
							<option value="GKH"> Gokhale Hall </option>
							<option value="HJB"> Homi Bhabha Hall </option>
							<option value="JCB"> J C Bose Hall </option>
							<option value="LLR"> Lala Lajpat Rai Hall </option>
							<option value="LBS"> Lalbahadur Sastry Hall </option>
							<option value="MMM"> Madan Mohan Malviya Hall </option>
							<option value="MS"> Megnad Saha Hall </option>
							<option value="MT"> Mother Teresa Hall </option>
							<option value="NH"> Nehru Hall </option>
							<option value="PH"> Patel Hall </option>
							<option value="RK"> Radha Krishnan Hall </option>
							<option value="RP">Rajendra Prasad Hall </option>
							<option value="RLB">Rani Laxmibai Hall </option>
							<option value="SN/IG">Sarojini Naidu/Indira Gandhi Hall</option> 
							<option value="NVH">Sister Nivedita Hall </option>
							<option value="VS">Vidyasagar Hall </option>
							<option value="VSRC">Vikram Sarabhai residential Complex </option>
							<option value="ZH">Zakir Hussain Hall </option>
							<option value="other">Other </option>
						</select>
					</div>
					<div class="col">
						<select name="course" style="width: 320px" required class="form-control">
							<option selected value="{{Auth::user()->course}}">@php 
							if(!empty(Auth::user()->course))
								{
									echo Auth::user()->course;
								}
								else
								{
									echo 'Choose your COURSE';
								}
								@endphp	
							</option>
							<option value="UG">UG</option>
							<option value="PG">PG</option>
							<option value="RS">RS</option>
						</select>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col">
						<i class="material-icons prefix">email</i>&nbsp;
						<label for="email">Email</label>
						<input name="email" value="{{Auth::user()->email}}"  class="form-control" type="email" required >
						
					</div>
					<div class="col">
						<i class="material-icons prefix">phone</i>&nbsp;
						<label for="phone">Phone no</label>
						<input name="phone" value="{{Auth::user()->phone}}" class="form-control"  type="number" size="10" required>	
					</div>

				</div>
				<br>
				<div class="row">

					<div class="col-5 offset-5">
						<button class="btn btn-success" type="submit" class="form-control"> Update </button>
					</div>
				</div>


			</form>
		</div>
	</div>
</body>
</html>