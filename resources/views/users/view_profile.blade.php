@extends('layouts.app')
    @section('content')
    <div class="container">
		<div class="row">
		<div class="col-md-4">
		<h3>Client's Profile</h3>
		</div><div class="col-md-4">
		</div><div class="col-md-4">
			
		<a href="{{url('edit_user')}}?id={{$clients->id}}" class="btn btn-lg btn-primary pull-right">Edit Client</a>
		</div>
		</div>
	<table class="table">				
	<tr><th>Company:</th><td>{{$clients->first_name}}</td></tr>
	<tr><th>Email:</th><td>{{$clients->email}}</td></tr>
	<tr><th>Mobile:</th><td>{{$clients->mobile}}</td></tr>
	<tr><th>Registered Date:</th><td>{{$clients->created_at}}</td></tr>
	<tr><th>Last Login:</th><td>{{$clients->created_at}}</td></tr>
	<tr><th>Status :</th><td>Active</td></tr>
	</table>
		<?php
		 if(!empty($drivers)) {  ?>
		 <table class="table">
			 <th>Driver ID</th>
			 <th>Driver Name</th>
			 <th>Driver Mobile</th>
			 <th>Driver Address</th>
			 <th>Joined On</th>
			 <tbody>
		<?php	foreach($drivers as $dri)
			{ ?>
			<tr><td>{{$dri->id}}</td>
				<td>{{$dri->driver_name}}</td>
				<td>{{$dri->driver_mobile}}</td>
				<td>{{$dri->driver_address}}</td>
				<td>{{$dri->created_at}}</td>
			</tr>
				 <?php }  ?>
		</tbody>
	</table>
<?php } ?>
		

    </div>

    @endsection
