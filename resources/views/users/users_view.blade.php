    <style>
 
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @extends('layouts.app')
    @section('content')
    <div class="container">
       
		
		 <div class="row">
		 <div class="col-md-4">
		<h3>Users</h3>
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
				<input type="hidden" value="{{csrf_token()}}" name="_token" id="token">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
								 <th>Status</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody> </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
	
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script type="text/javascript">       
		$(function() {			
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.index') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                }, {
                    data: 'first_name',
                    name: 'first_name'
                }, {
                    data: 'email',
                    name: 'email'
                }, {
                    data: 'status',
                    name: 'status',render:function(data, type, row)
					{
					if(row.status==0){ 
					var status="<input type='checkbox'data-toggle='toggle'value='1' data-userid='"+row.id+"'class='chengestatus' name='my-checkbox'>";	
					}else{
					var status="<input type='checkbox'value='0'data-toggle='toggle'data-userid='"+row.id+"'class='chengestatus' name='my-checkbox' checked>";		
					}
					$(function() { $("[data-toggle='toggle']").bootstrapToggle('destroy')                 
					$("[data-toggle='toggle']").bootstrapToggle({
					size          :   "small",
					on            :   "Active",
					off           :   "Inactive",
					onstyle       :   "primary",
					offstyle      :   "warning"
					});
					});
					return status;
				}
                }, {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }, ]
            });
        });	
       

	$(document).on('change', ".chengestatus", function() 
	{
	
		var userid = $(this).data("userid");
		var status = $(this).val();
		var token = $("#token").val();
		$.ajax({          
		url: "{{URL::to('user-status')}}",  
		type: "POST",
		data: {_token:token,userid:userid,status:status},
		dataType: 'json' ,  
		success:function(data) 
		{	    
			if(data.status==1){
			alert("User Account Activated");
			}else{
			alert("User Account Blocked");
			}						
        }	 
			});
	});

    </script>  
  
    @endsection


