@include('councillor.header');
@if (Route::has('login'))
                               
							   @auth  						   
    <section class="ftco-intro img" style="background-image: url(user/images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Your Health is Our Priority</h2>
						<p>We can manage your dream building A small river named Duden flows by their place</p>
						<!-- <p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p> -->
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	
    </section>
		
							   @else
							   <section class="hero-wrap js-fullheight" style="background-image: url('user/images/bg_3.jpg');" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<span class="subheading">Welcome to Mediplus</span>
	            <h1 class="mb-4">We are here <br>for your Care</h1>
	            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	@endif
	@endauth
	

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(user/images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">We Are <span>Mediplus</span> A Medical Clinic</h2>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			            <!-- <p><a href="#" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p> -->
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

  

		

		<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Qualified Councillors</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        		</div>	
				<div class="row">

                    
				@foreach($dr as $d)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/uploads/{{$d->image}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr.{{$d->name}}</h3>
								<span class="position mb-2">{{$d->category}}</span>
								<div class="faded">
									<!-- <p>{{$d->category}}</p> -->
									<ul class="ftco-social text-center">
                                                    <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
		                            </ul>
		                            <!-- <p><a href="{{ url('book_now',$d->id) }}" class="btn btn-primary">Book now</a></p> -->
	                             </div>
							</div>
						</div>
					</div>
				@endforeach
					
					
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="ftco-facts img ftco-counter" style="background-image: url(user/images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-5 heading-section heading-section-white">
						<span class="subheading">Fun facts</span>
						<h2 class="mb-4">Over 5,100 patients trust us</h2>
						<!-- <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Make an appointment</a></p> -->
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


    

    

    @include('councillor.footer');