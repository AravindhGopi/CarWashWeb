@extends('layouts.app')
    @section('content')
	<style>
	.ye_exp{
		margin-right:16px;
	}
	</style>
    <div class="container">
		<div class="card">
		<div class="row">
		<div class="col-md-4">
		<h3>Driver's Profile</h3>
		</div><div class="col-md-4">
		</div><div class="col-md-4">
			
		<a href="{{url('edit_profile')}}?id={{$driverinfo->id}}" class="btn btn-lg btn-primary pull-right">Edit Client</a>
		</div>
		</div>		
		</div>
		<div class="card">
		<div class="row">
		<div class="col-md-6">
		<p class="text-left"><b>Name:</b>{{$driverinfo->name}}</p>
		<p class="text-left"><b>Date Of Birth:</b>{{$driverinfo->dob}}</p>
		<p class="text-left"><b>Age:</b>{{$driverinfo->age}}</p>
		<p class="text-left"><b>Mobile:</b>{{$driverinfo->mobile}}</p>
		<p class="text-left"><b>Other Mobile:</b>{{$driverinfo->other_mobile}}</p>
		</div>
		<div class="col-md-6">
		<p class="text-right"><img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png"width="100pz"height="100px">
		</p>
		<p class="text-right ye_exp"><b>Year Of Exp:</b>{{$driverinfo->year_of_experience}}</p>
		<p class="text-right ye_exp"><b>Address:</b>{{$driverinfo->	address}}</p>
		</div>
		</div>
		</div>
		<div class="card">
	<table class="table">				
	<tr><th>Licence Type:</th><td>{{$driverinfo->licence_type}}</td></tr>
	<tr><th>Licence No:</th><td>{{$driverinfo->licence_num}}</td></tr>
	<tr><th>Licence Expiry Date:</th><td>{{$driverinfo->licence_expiry_date}}</td></tr>
	<tr><th>Adharcard No:</th><td>{{$driverinfo->adharcard_num}}</td></tr>
	<tr><th>Vehicle Type:</th><td>{{$driverinfo->vehicle_type}}</td></tr>
	<tr><th>Vehicle No:</th><td>{{$driverinfo->vehicle_num}}</td></tr>
	<tr><th>Vehicle Insurance No:</th><td>{{$driverinfo->vehicle_insurance_num}}</td></tr>
	<tr><th>Vehicle Insurance Expiry Date:</th><td>{{$driverinfo->vehicle_insurance_exp_date}}</td></tr>
	<tr><th>Vehicle RC No:</th><td>{{$driverinfo->vehicle_rc_num}}</td></tr>
	<tr><th>Vehicle RC Expiry Date:</th><td>{{$driverinfo->vehicle_rc_exp_date}}</td></tr>
	<tr><th>Status :</th><td>Active</td></tr>
	</table>				
    </div>
	<div class="card">
		<h3>Attachments:</h3>
		<div class="row">
			<div class="col-md-4 adhar">
				<h5>Adhar Card Front</h5>
				<img src='{{url("$driverinfo->adharcard_front_copy")}}' alt="" width="200" height="200">
			</div>
			<div class="col-md-4 adhar">
				<h5>Adhar Card Back</h5>
				<img src='{{url("$driverinfo->adharcard_back_copy")}}' alt="" width="200" height="200">
			</div>
			<div class="col-md-4 adhar">
				<h5>Vehicle Photo</h5>
				<img src='{{url("$driverinfo->vehicle_photo")}}' alt="" width="200" height="200">
			</div>
		</div>
    </div>
    
	
	</div>

    @endsection
