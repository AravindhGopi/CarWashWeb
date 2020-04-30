@extends('layouts.app')
    @section('content')
    <div class="container">
        
		<div class="row">
		<div class="col-md-4">
		<h3>Edit Client</h3>
		</div><div class="col-md-4">
		
		</div><div class="col-md-4">
		
		</div>
		</div>
	  <form method="POST" action="{{ url('update_user') }}">
                @csrf
                <label for="user_name">User Name</label>
               
                <div class="input-group mb-3">                 
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                 <input type="hidden"name="user_id"value="{{$user->id}}">
                 <input type="text"name="user_name"value="{{$user->first_name}}"onkeypress="return valialphabet(event)"id="user_name"class="form-control">
                </div>
             
                <label for="user_email">User Email</label>
                 <div class="input-group mb-3">                  
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                 <input type="text"name="user_email"value="{{$user->email}}"id="user_email"class="form-control"readonly>
                </div>
                
                <label for="user_phone_no">User Phone No</label>
                 <div class="input-group mb-3">                 
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                 <input type="text"name="user_phone_no"value="{{$user->mobile}}" minlength="10" maxlength="10" id="user_phone_no"onkeypress="return valinumber(event)"class="form-control">
                </div>
               
                
                <input type="submit" class="btn btn-primary"value="Update"name="update">
            </form>
        

    </div>
  
    @endsection
