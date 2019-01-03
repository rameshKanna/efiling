@extends('layouts.blog')

@section('content') 
    
    <h2><center>Verify Deductor Profile:</center></h2>

                
                        <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Verify Deductor Profile</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">
                                <div class="col-md-6">
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Deductor Name:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->deductor_name}}
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Institute Name:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->institute_name}}
                                            </div>
                                        </div><br>                                    
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> TAN Number:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->tan}}
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Mobile Number:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->mobile_number}}
                                            </div>
                                        </div><br>

                                         <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Alternate Mobile Number:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->alternate_mobile_number}}
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Email:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->email}}
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Flat/Door No#:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->flat}}
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Premises/ Building/ Village:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->building}}
                                            </div>
                                        </div><br>                                    
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Road/ Street/ Post Office:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->street}}
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Area/ Locality/ Taluka:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->area}}
                                            </div>
                                        </div><br>

                                         <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Town/City/District:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->city}}
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> State:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->state}}
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Pincode:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$agent->pincode}}
                                            </div>
                                        </div><br>
                                    </div>
                                        
                                    
                                    
                            </div>
                        </div>                        
                    </div>
                    </div>


                    

                    <div class="row">
                      <div class="col-md-2 col-md-offset-2">            
                        <a href="{{ route('partnerProfile.edit', $agent->id) }}" class="btn btn-success btn-lg">Edit details</a>
                      </div>

                        <div class="col-md-4">
                        <a href="#" class="btn btn-success btn-lg">Submit</a>
                      </div>
                   </div>


                   

       @endsection



