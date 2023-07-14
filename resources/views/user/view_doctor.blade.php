@include('user.header');
<section class="ftco-intro img" style="background-image: url({{asset('user/images/bg_2.jpg')}});">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Our Councillors Of {{$category_name}}</h2>
						<!-- <p>We can manage your dream building A small river named Duden flows by their place</p> -->
						<!-- <p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p> -->
					</div>
				</div>
			</div>
		</section>
        <br>
        <br>
        <br>
        <section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
			@if(!$doctor)
				<center>
				<marquee><h2 class="mb-4">No Counseling Dates Available on Upcomming Days</h2>   </marquee>
				
</center>   
@else
		
		<div class="row">

                    
				@foreach($doctor as $d)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/uploads/{{$d->image}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr.{{$d->name}}</h3>
								<!-- <span class="position mb-2">Neurologist</span> -->
								<div class="faded">
									<p>{{$d->category}}</p>
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

@include('user.footer');