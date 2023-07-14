@include('user.header');



	  @if (Route::has('login'))
                               
							   @auth  
							   
    <section class="ftco-intro img" style="background-image: url(user/images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
					<span class="subheading">Welcome to Smart Mental Health Helpline</span>

						<h2>Your Health is Our Priority</h2>
						<p>A smart mental health helpline is a helpline or hotline service that incorporates artificial intelligence (AI) technology to provide support and assistance for mental health concerns. These helplines often use chatbot or voice recognition systems to interact with individuals seeking help.</p>
					</div>
				</div>
			</div>
		</section>

		 <!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->

		<!-- <section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(user/images/dept-1.jpg);"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Neurology</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Surgical</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Dental</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Opthalmology</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Cardiology</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Traumatology</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Nuclear Magnetic</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">X-ray</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Cardiology</a></h3>
    								<p>Far far away, behind the word mountains</p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section> -->
		
							   @else
							   <section class="hero-wrap js-fullheight" style="background-image: url('user/images/bg_3.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<span class="subheading">Welcome to Smart Mental Health Helpline</span>
	            <h1 class="mb-4">We are here <br>for your Care</h1>
	            <p class="mb-4">A smart mental health helpline is a helpline or hotline service that incorporates artificial intelligence (AI) technology to provide support and assistance for mental health concerns. These helplines often use chatbot or voice recognition systems to interact with individuals seeking help.</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	@endif
	@endauth
	

	@include('user.doctors');

	

		<section class="ftco-facts img ftco-counter" style="background-image: url(user/images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-5 heading-section heading-section-white">
					@if (Route::has('login'))
                               
							   @auth
						


						<form action="{{url('upload_review')}}" method="POST" class="appointment-form ftco-animate">
          @csrf
		        		
		    				
		  <h2 class="mb-4">Reviews & Feedbacks</h2>
<!-- ------------------alert------------------------- -->
@if(session()->has('messageee'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('messageee')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
		    				<div class="">
		    					<div class="form-group">
			              <textarea  id="" cols="30" rows="2" class="form-control" name="content" placeholder="Plese enter your feedback"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="Upload" class="btn btn-secondary py-3 px-4">
			            </div>
		    				</div>
		    </form>
					@else

					<span class="subheading">Fun facts</span>
						<h2 class="mb-4">Join Us</h2>
						<!-- <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Make an appointment</a></p> -->
					
			@endauth
          @endif
					</div>
					<div class="col-md-7">
						<div class="row pt-4">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Happy Patients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="84">0</strong>
		                <span>Number of Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Number of Staffs</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>


   <br>
   <br>
   <br>

   

   @include('user.footer');