@extends('layouts.blog')

@section('content') 
	
	<h2><center>Submit eTDS Details:</center></h2>

				{!! Form::open(array('route' => 'tds.store','enctype' => 'multipart/form-data')) !!}

						<div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Submit eTDS Request</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">

                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Select Quarter: </label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" name="quarter" id="Quarter" required data-width="90%">
                                              <option value="">Select Quarter</option>    
                                              <option value='FY-2018-19-Q3'>FY-2018-19-Q3</option>
                                              <option value='FY-2018-19-Q2'>FY-2018-19-Q2</option>
                                              <option value='FY-2018-19-Q1'>FY-2018-19-Q1</option>                                                             
                                            </select>     
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Number of Enries:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" name="entries" id="entries" required data-width="90%">
                                              <option value="">Select Number of Entries</option>    
                                              <option value='1 - 100 Entries'>1 - 100 Entries</option>
                                              <option value='101 - 1000 Entries'>101 - 1000 Entries</option>
                                              <option value='1001 Entries and above'>1001 Entries and above</option>                                                             
                                            </select>
                                            </div>
                                        </div><br>                                    
                                    	<div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Filing Type:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" name="filing_type" id="filing_type" required data-width="90%">
                                              <option value="">Select Filing Type</option>    
                                              <option value='24Q(Salary Details)'>24Q(Salary Details)</option>
                                              <option value='26Q(Non Salary Details)'>26Q(Non Salary Details)</option>
                                              <option value='24Q & 26Q(Salary and Non Salary Details)'>24Q & 26Q(Salary and Non Salary Details)</option>                                                             
                                            </select>
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Mobile Number:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="mobile_number" minlength="10" maxlength="10" class="form-control input-mini" placeholder="Enter Mobile Number">                       
                                            </div>
                                        </div><br>

                                         <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> File Upload:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                                <input type="file" name="file"/>
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Comments:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <textarea class="form-control" id="comments" name="comments"></textarea>
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
                                </div>


                    {!! Form::close() !!}

       @endsection



