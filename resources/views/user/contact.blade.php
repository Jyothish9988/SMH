


	@include('user.header');


  <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('user/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-4">
                <h1 class="mb-3 bread">Contact</h1>
                <p class="breadcrumbs">
                    <!-- <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> -->
                    <!-- <span>Appointment <i class="ion-ios-arrow-forward"></i></span> -->
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">

<div class="container">
    <!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
<div class="row d-flex">

<div class="col-md-7 py-5">
    <div class="py-lg-5">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section ftco-animate">
            <h2 class="mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
              <div class="media-body pl-md-4">
                <h3 class="heading mb-3">Emergency Services</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
              <div class="media-body pl-md-4">
                <h3 class="heading mb-3">Qualified Doctors</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
              <div class="media-body pl-md-4">
                <h3 class="heading mb-3">Outdoors Checkup</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-24-hours"></span></div>
              <div class="media-body pl-md-4">
                <h3 class="heading mb-3">24 Hours Service</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
  </div>
  <div class="col-md-5 d-flex">

    <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
    <form action="{{url('uploadcontact')}}" method="POST" enctype="multipart/form-data" class="appointment-form ftco-animate">
                                @csrf
        
            <h3>Free Consultation</h3>
                <div class="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Id Optional" value="ID Optional" name="id">
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                        <div class="form-field">
                      <div class="select-wrap">
              <div class="icon"><span class="ion-ios-arrow-down"></span></div>
              <select name="category" id="" class="form-control">

                  <option value="">Select Your Services</option>
                  @foreach($category as $d)
                <option value="">{{$d->category_name}}</option>
                
                @endforeach
              </select>

            </div>
              </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
                        <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="email" class="form-control" placeholder="Date" name="email">
                </div>
                    </div>
                    <div class="form-group">
                        <div class="input-wrap">
                    <div class="icon"><span class="ion-ios-clock"></span></div>
                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                    </div>
                </div>
                <div class="">
                    <div class="form-group">
              <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enquire Now" class="btn btn-secondary py-3 px-4">
            </div>
                </div>
            </form>
        </div>
</div>
</div>
</div>
</section>
@include('user.footer');