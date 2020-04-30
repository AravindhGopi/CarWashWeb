@extends('layouts.app')

@section('content')

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="container">
		<form method="POST" action="{{ url('storedriver') }}"enctype="multipart/form-data">
                @csrf
										<div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="driver_name">Driver name</label> <small class="req"> *</small> 
                                               
                                                <input onkeypress="return valialphabet(event)"id="driver_name" name="driver_name" type="text" class="form-control"  value=""  onkeypress="return valinumber(event)"/>

                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group date">
                                                <label for="dob">Date Of Birth</label> 
                                                <input id="dob" name="dob" type="text" class="form-control datepicker"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
										
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="age">Age</label><small class="req"> *</small> 
                                              <input id="age" name="age" onkeypress="return valinumber(event)"  minlength="1" maxlength="3" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="mobile">Mobile Number</label><small class="req"> *</small> 
                                                <input id="mobile" name="mobile" onkeypress="return valinumber(event)" minlength="1" maxlength="10" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="other_mobile">Other Mobile</label> <small class="req"> *</small> 
                                               
                                                <input autofocus="" id="other_mobile"onkeypress="return valinumber(event)" name="other_mobile" minlength="1" maxlength="10" type="text" class="form-control"  value=""  onkeypress="return valinumber(event)"/>

                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="licence_type">Licence Type</label> 
                                                <input id="licence_type" name="licence_type" placeholder=""  minlength="1" maxlength="10" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="licence_no">Licence Number</label><small class="req"> *</small> 
                                              <input id="licence_no" name="licence_no" placeholder=""  minlength="1" maxlength="20" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="licence_exp_date">Licence Expiry Date</label><small class="req"> *</small> 
                                                <input id="licence_exp_date" name="licence_exp_date"type="text" class="form-control datepicker"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                    </div>	
									<div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="year_of_exp">Year Of Experience</label> <small class="req"> *</small> 
                                               
                                                <input onkeypress="return valinumber(event)"minlength="2" maxlength="2" id="year_of_exp" name="year_of_exp" type="text" class="form-control"  value=""  onkeypress="return valinumber(event)"/>

                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="dob">Address</label> 
												<textarea rows="1"id="address"name="address"class="form-control"></textarea>                                                                                      
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adhar_no">Adhar Card No:</label><small class="req"> *</small> 
                                              <input id="adhar_no" name="adhar_no" onkeypress="return valinumber(event)"  minlength="1" maxlength="15" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
										 <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adhar_back_photo">Adhar Front photo:</label><small class="req"> *</small>
												<div id="adhar_front"class="fileupload" onclick="adhar_front_getFile()">Adhar Front photo:</div>
												<div style='height: 0px;width: 0px; overflow:hidden;'>
                                              <input id="adhar_front_photo"onchange="adhar_front(this)" name="adhar_front_photo"type="file"  />
                                                </div>
                                            </div>
                                        </div>
										
                                    </div>
									<div class="row">
										 <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="adhar_back_photo">Adhar Back photo:</label><small class="req"> *</small>
											   <div id="adhar_back" class="fileupload" onclick="adhar_back_getFile()">Adhar Back photo:</div>
											    <div style='height: 0px;width: 0px; overflow:hidden;'>
                                              <input id="adhar_back_photo"onchange="adhar_back(this)" name="adhar_back_photo"type="file" />
											  </div>                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="vehicle_type">Vehicle Type</label><small class="req"> *</small> 
                                                <input id="vehicle_type" name="vehicle_type" minlength="1" maxlength="10" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="vehicle_no">Vehicle Number</label> <small class="req"> *</small> 
                                               
                                                <input id="vehicle_no" name="vehicle_no" placeholder="" type="text" class="form-control"  value="" />

                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
										    <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="vehicle_photo">Vehicle Photo</label> <small class="req"> *</small> 
                                               <div id="vehicle_pic" class="fileupload" onclick="vehicle_pic_getFile()">Adhar Back photo:</div>
											    <div style='height: 0px;width: 0px; overflow:hidden;'>
                                                <input id="vehicle_photo"onchange="vehicle_pic(this)" name="vehicle_photo" type="file"/>
												</div>
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
									<div class="row">
										 <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="insurance_no">Vehicle Insurance Number</label> 
                                                <input id="insurance_no" name="insurance_no"  minlength="1" maxlength="20" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
										<div class="col-md-3">
                                            <div class="form-group">
                                                <label for="rc_no">Vehicle Rc Number</label><small class="req"> *</small> 
                                              <input id="rc_no" name="rc_no" placeholder=""  minlength="1" maxlength="20" type="text" class="form-control"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="insurance_exp_date">Insurance Expiry Date</label><small class="req"> *</small> 
                                                <input id="insurance_exp_date" name="insurance_exp_date"type="text" class="form-control datepicker"  value="" />
                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="rc_exp_date">RC Expiry Date</label> <small class="req"> *</small> 
                                               
                                                <input autofocus="" id="rc_exp_date" name="rc_exp_date" type="text" class="form-control datepicker"  value=""/>

                                                <span class="text-danger"></span>
                                            </div>
                                        </div>
                                       
                                       
                                       
                                    </div>
									<input type="submit"class="btn btn-primary"name="store"value="store">
            </form>					
	
</div>

@endsection
