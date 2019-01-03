@extends('layouts.blog')

@section('content') 
  
  <h2><center>Submit eTDS Details:</center></h2>
        
        {!!Form::model($tds,['route'=>['tds.update',$tds->id],'method'=>'PUT']) !!}

            <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Submit eTDS Request</div>
                            <div style="background-color:lavender;">
                            <div class="panel-body">

                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Select Quarter: </label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" name="quarter" value="{{ $tds->quarter }}" id="quarter" required data-width="90%">
                                              <option value="">Select Quarter</option>    
                                              <option value='FY-2018-19-Q3' <?php if ($tds->quarter == 'FY-2018-19-Q3') {echo 'selected';} ?>>FY-2018-19-Q3</option>
                                              <option value='FY-2018-19-Q2'<?php if ($tds->quarter == 'FY-2018-19-Q2') {echo 'selected';} ?> >FY-2018-19-Q2</option>
                                              <option value='FY-2018-19-Q1'<?php if ($tds->quarter == 'FY-2018-19-Q1') {echo 'selected';} ?> >FY-2018-19-Q1</option>                                                             
                                            </select>     
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Number of Enries:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" name="entries" value="{{ $tds->entries }}" id="entries" required data-width="90%">
                                              <option value="">Select Number of Entries</option>    
                                              <option value='1 - 100 Entries' <?php if ($tds->entries == '1 - 100 Entries') {echo 'selected';} ?> >1 - 100 Entries</option>
                                              <option value='101 - 1000 Entries' <?php if ($tds->entries == '101 - 1000 Entries') {echo 'selected';} ?>>101 - 1000 Entries</option>
                                              <option value='1001 Entries and above' <?php if ($tds->entries == '1001 Entries and above') {echo 'selected';} ?>>1001 Entries and above</option>                                                             
                                            </select>
                                            </div>
                                        </div><br>                                    
                                      <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Filing Type:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <select class="form-control" name="filing_type" value="{{ $tds->filing_type }}" id="filing_type" required data-width="90%">
                                              <option value="">Select Filing Type</option>    
                                              <option value='24Q(Salary Details)' <?php if ($tds->filing_type == '24Q(Salary Details)') {echo 'selected';} ?>>24Q(Salary Details)</option>
                                              <option value='26Q(Non Salary Details)' <?php if ($tds->filing_type == '26Q(Non Salary Details)') {echo 'selected';} ?>>26Q(Non Salary Details)</option>
                                              <option value='24Q & 26Q(Salary and Non Salary Details)' <?php if ($tds->filing_type == '24Q & 26Q(Salary and Non Salary Details)') {echo 'selected';} ?>>24Q & 26Q(Salary and Non Salary Details)</option>                                                             
                                            </select>
                                            </div>
                                        </div><br>
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Mobile Number:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <input type="text" name="mobile_number" value="{{ $tds->mobile_number }}" minlength="10" maxlength="10" class="form-control input-mini" placeholder="Enter Mobile Number">                       
                                            </div>
                                        </div><br>                                         
                                        <div class="row span12"> 
                                            <div class="col-lg-3"><label class="control-label"> Comments:</label>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-8">
                                            <textarea class="form-control" name="comments" id="comments">{{ $tds->comments }}</textarea>
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



