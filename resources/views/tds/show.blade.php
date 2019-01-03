@extends('layouts.blog')

@section('content') 
	
	<h2><center>Verify Deductor Profile:</center></h2>

				
						<div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Verify Your TDS File</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">
                                <div class="col-md-6">
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Select Quarter: </label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$tds->quarter}}   
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Number of Enries:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$tds->entries}} 
                                            </div>
                                        </div><br>                                    
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Filing Type:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$tds->filing_type}} 
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Mobile Number:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$tds->mobile_number}} 
                                            </div>
                                        </div><br>                                         
                                        <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> Comments:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                            {{$tds->comments}} 
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="row span12"> 
                                            <div class="col-lg-6"><label class="control-label"> TDS File:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <a href="{{ url('tds_file/'.$tds->file_name) }}"><img src="{{ url('images/images.jpeg') }}" width="28" height="26"></a>
                                                {{$tds->file_name}}
                                            </div>
                                        </div><br>
                                    </div>
                                        
                                    
                                    
                            </div>
                        </div>                        
                    </div>
                    </div>


                    

                    <div class="row">
                      <div class="col-md-2 col-md-offset-2">            
                        <a href="{{ route('tds.edit', $tds->id) }}" class="btn btn-success btn-lg">Edit details</a>
                      </div>

                        <div class="col-md-4">
                        <a href="{{ url('/tds') }}" class="btn btn-success btn-lg">Submit</a>
                      </div>
                   </div>


                   

       @endsection



