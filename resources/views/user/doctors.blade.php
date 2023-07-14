<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Our Qualified Councillors</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        		</div>	
				

				@if(!$dr)
				<center>
				<marquee><h2 class="mb-4">No Counseling Dates Available on Upcomming Days</h2>   </marquee>
				
</center>   
		
   
@else
<div class="row">
                    
				@foreach($dr as $d)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/uploads/{{$d->image}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr.{{$d->name}}</h3>
								<!-- <span class="position mb-2">Neurologist</span> -->
								<div class="faded">
									<p>{{$d->category_name}}</p>
									<ul class="ftco-social text-center">
                                                    <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
		                            </ul>
		                            <p><a href="{{ url('book_now',$d->id) }}" class="btn btn-primary">Book now</a></p>
	                             </div>
							</div>
						</div>
					</div>
				@endforeach
@endif
					
					
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>




		
		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(user/images/dept-1.jpg);"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
					@foreach($category as $d)
    					<div class="col-md-4">
							<a href="{{ url('view_more',$d->category_name) }}">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="{{ url('view_more',$d->category_name) }}">{{$d->category_name}}</a></h3>
    								<p>{{ Illuminate\Support\Str::limit($d->description, $limit = 75, $end = '...') }}</p>
    							</div>
    						</div>
							</a>
    					</div>
						@endforeach
    					

    					
    				</div>
    			</div>
    		</div>
    	</div>
    </section>