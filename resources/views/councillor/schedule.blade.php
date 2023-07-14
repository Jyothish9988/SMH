@include('councillor.header');

<section class="ftco-intro img" style="background-image: url({{asset('user/images/bg_2.jpg')}});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Schedule Time</h2>						
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	
    </section>
    <br>
    <br>
    <div class="row justify-content-center">
<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
<!-- ------------------alert------------------------- -->
@if(session()->has('alert'))
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('alert')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="form-validation">
                       
                              <form class="form-valide" action="{{url('counciling_schedule_upload', [ 'bkey' => $bkey])}}"  method="POST">
                              @csrf
                                  <input type="hidden" name="hidden" value='h'>
                                  
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="val-username">Time <span class="text-danger">*</span>
                                      </label>
                                      <div class="col-lg-6">
                                          <input type="time" class="form-control"  value="$booking->time"id="val-username" name="time" placeholder="Enter Name.." >
                                      </div>
                                  </div>

                                                                   
                                  <div class="form-group row">
                                      <div class="col-lg-8 ml-auto">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                  </div>
                              </form>
                         





                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
<br>
<br>
<br>





@include('councillor.footer');