@include('user.header')

<style>
    .order-table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }

    .order-table th,
    .order-table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
    }

    .order-table th {
        background-color: #f2f2f2;
    }

    .order-table img {
        height: 150px;
        width: 150px;
        display: block;
        margin: 0 auto;
        margin-bottom: 10px;
    }
    
    .doctor-info {
    text-align: center;
}

.doctor-info img {
    height: 150px;
    width: 150px;
    display: block;
    margin: 0 auto;
    margin-bottom: 10px;
}

.doctor-info h3 {
    margin: 0;
    font-size: 24px;
}
</style>

<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('user/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-4">
                <h1 class="mb-3 bread">Appointment</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Appointment <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex">
            <br>
            <br>
            <!-- <div class="col-md-6 col-lg-5 d-flex"> -->
                <!-- <div class="img d-flex align-self-stretch align-items-center"> -->
                
                    
                  
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/uploads/{{ $data[0]->image }});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Dr.{{ $data[0]->name }}</h3>
								<!-- <span class="position mb-2">Neurologist</span> -->
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
                                                    <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
		                            </ul>
		                           
	                             </div>
							</div>
						</div>
					</div>
			
                <!-- </div> -->
                
            <!-- </div> -->
            <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                <div class="py-md-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                            <h2 class="mb-4"><span>Make Your Appoinment</span></h2>
                            <table align="center" class="order-table">
                                <tr>
                                    <th>Day</th>
                                    <th>Time</th>
                                    <th>Slots</th>
                                    <th>Slots Available</th>
                                    <th>Fee</th>
                                    <th>Bookings</th>
                                </tr>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->date }}</td>
                                    <td>{{ $d->from }} to {{ $d->to }}</td>
                                    <td>{{ $d->slots }}</td>
                                    <td>{{ $d->slots_available }}</td>
                                    <td>{{ $d->fee }}</td>
                                    <td><a href="{{ url('stripe', ['fee' => $d->fee, 'id' => $d->id]) }}" class="btn btn-primary py-3 px-4"><span>Make an appointment</span></a></td>

                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('User.footer')
