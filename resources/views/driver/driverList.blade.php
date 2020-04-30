    <style>
 
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @extends('layouts.app')
    @section('content')
    <div class="container">
       
		
		 <div class="row">
		 <div class="col-md-4">
		<h3>Clients</h3>
		</div>
		<div class="col-md-4">
		@if(session('msg'))
			<h1>{{session('msg')}}</h1>
		@endif
		</div>
		<div class="col-md-4">
		<a href="{{url('add-drivers')}}" class="btn btn-lg btn-primary">Add Driver </a>
		</div>
		</div>
        <div class="col-md-12">
         <div class="modal fade" id="newcompanymodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
			
              <h4 class="modal-title">Add</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <form method="POST" action="{{ url('addclients') }}">
                @csrf
                <label for="company_name">Name</label>
                <div class="input-group mb-3">                 
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                 <input type="text"name="company_name"id="company_name"class="form-control"placeholder="Company Name">
                </div>
                <label for="company_phone_no">Type</label>
                <div class="input-group mb-3">                 
                   <div class="input-group-prepend">
                       <span class="input-group-text">@</span>
                     </div>
                <select name="register_type"id="register_type"class="form-control">
                <option value="individual">Individual</option>
                <option value="company">Company</option>
                <select>
               </div>
               <div class="drivers_add"style="display:none">
              
               <table class="driver_input">
                   <th>Driver Name</th>
                   <th>Driver Mobile</th>
                   <th>Driver Address</th>
               <tr> <td>
               <div class="form-group">                  
                  
               <input type="text"name="company_drivers[]"class="form-control"placeholder="Driver Name">
              </div>
            </td> <td>
                <div class="form-group">                  
                   
                <input type="text"name="drivers_mobile[]"class="form-control"placeholder="Driver Mobile">
               </div>
             </td> <td>
                <div class="form-group">                  
                   
                <input type="text"name="drivers_address[]"class="form-control"placeholder="Driver Address">
               </div>
             </td><td><span class="btn btn-danger"id="add_more_driver">Add</span></td></tr>
             <tbody id="clone_driver_data"></tbody>
            </table>
        </div>
                <label for="company_email">Email</label>
                 <div class="input-group mb-3">                  
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                 <input type="text"name="company_email"id="company_email"class="form-control"placeholder="Company Email">
                </div>
                <label for="company_password">Password</label>
                 <div class="input-group mb-3">                 
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                 <input type="text"name="company_password"id="company_password"class="form-control"placeholder="Company Password">
                </div>
                <label for="company_phone_no">Phone No</label>
                 <div class="input-group mb-3">                 
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                      </div>
                 <input type="text"name="company_phone_no"id="company_phone_no"class="form-control"placeholder="Company Phone No">
                </div>
               
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary"value="Store"name="store">
            </form>
            </div>
            
       
          </div>
        </div>
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
                                <th>Age</th>
                                <th>Mobile</th>
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
    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('drivers.index') }}",
				
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                }, {
                    data: 'name',
                    name: 'name'
                }, {
                    data: 'age',
                    name: 'age'
                },{
                    data: 'mobile',
                    name: 'mobile'
                },{
                    data: 'status',
                    name: 'status',render:function(data, type, row){
     if(row.status==0){ 
	 var status="<button class='btn btn-danger'>InActive</button>";
	 }else{
		var status="<button class='btn btn-success'>Active</button>";
	}
	
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
		
    </script>  

    @endsection


