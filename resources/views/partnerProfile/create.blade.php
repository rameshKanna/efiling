@extends('layouts.blog')

@section('content') 
	
	<h2><center>Update Deductor Profile:</center></h2>

				{!! Form::open(array('route' => 'partnerProfile.store' , 'id' => 'login')) !!}

						<div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Update Deductor Profile</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">

                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Deductor Name</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="deductor_name" class="form-control input-mini" placeholder="Deductor Name">                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Institute Name</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="institute_name" class="form-control input-mini" placeholder="Institute Name">                       
                                            </div>
                                        </div><br>                                    
                                    	<div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> TAN Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="tan" minlength="10" maxlength="10" class="form-control input-mini" placeholder="Enter TAN Number">                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Mobile Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="mobile_number" minlength="10" maxlength="10" class="form-control input-mini" placeholder="Enter Mobile Number">                       
                                            </div>
                                        </div><br>

                                         <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Alternate Mobile Number</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="alternate_mobile_number"  minlength="10" maxlength="10" class="form-control input-mini" placeholder="Enter alternate Mobile Number" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Email</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="email"  class="form-control input-mini" placeholder="abc@gmail.com" required>                       
                                            </div>
                                        </div><br>
                                        
                                    
                                    
                            </div>
                        </div>                        
                    </div>
                    </div>


                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Address Details</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">

                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Flat/Door No#</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="flat" class="form-control input-mini" placeholder="Flat/Door Number">                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Premises/ Building/ Village</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="building" class="form-control input-mini" placeholder="Premises/ Building/ Village">                       
                                            </div>
                                        </div><br>                                    
                                    	<div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Road/ Street/ Post Office</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="street"  class="form-control input-mini" placeholder="Road/ Street/ Post Office">                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Area/ Locality/ Taluka</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="area"  class="form-control input-mini" placeholder="Area/ Locality/ Taluka">                       
                                            </div>
                                        </div><br>

                                         <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Town/City/District</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="city"  class="form-control input-mini" placeholder="Town/City/District" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> State</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="state"  class="form-control input-mini" placeholder="State" required>                       
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Pincode</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="pincode"  class="form-control input-mini" placeholder="Pincode" required>                       
                                            </div>
                                        </div><br>
                                        
                                    
                                    
                            </div>
                        </div>                        
                    </div>
                    </div>



                                <div class="row">  
                                    <div class="col-xs-12 col-md-5 col-sm-6 col-md-offset-5">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg"> 
                                </div>


                    {!! Form::close() !!}

       @endsection



