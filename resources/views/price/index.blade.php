    <style>
 
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @extends('layouts.app')
    @section('content')
    <div class="container">
       
		
		 <div class="row">
		 <div class="col-md-4">
		<h3>Price</h3>
		</div>
		<div class="col-md-4">
		@if(session('msg'))
			<h1>{{session('msg')}}</h1>
		@endif
		</div>
		<div class="col-md-4">
		
		</div>
		</div>
      
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody> </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    @endsection


