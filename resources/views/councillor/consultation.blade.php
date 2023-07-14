@include('councillor.header');
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
    }
</style>

<section class="ftco-intro img" style="background-image: url(user/images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Consultation Time</h2>
						
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
                       
                              <form class="form-valide" action="{{url('add_consultation')}}"  method="POST">
                              @csrf
                                  <input type="hidden" name="hidden" value='h'>
                                  
                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="val-username">Day <span class="text-danger">*</span>
                                      </label>
                                      <div class="col-lg-6">
                                          <input type="date" class="form-control" id="val-username" name="date" placeholder="Enter Name.." >
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="val-username">From <span class="text-danger">*</span>
                                      </label>
                                      <div class="col-lg-6">
                                          <input type="time" class="form-control" id="val-username" name="from"  placeholder="Enter Address.." >
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="val-username">To <span class="text-danger">*</span>
                                      </label>
                                      <div class="col-lg-6">
                                          <input type="time" class="form-control" id="val-username" name="to"  placeholder="Enter Address.." >
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="val-username">Slots <span class="text-danger">*</span>
                                      </label>
                                      <div class="col-lg-6">
                                          <input type="number" class="form-control" id="val-username" name="slots"  placeholder="Enter Patient Limits.." >
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label class="col-lg-4 col-form-label" for="val-username">Fee <span class="text-danger">*</span>
                                      </label>
                                      <div class="col-lg-6">
                                          <input type="number" class="form-control" id="val-username" name="fee"  placeholder="Enter Payment Amount.." >
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
<table align="center" class="order-table">
    <tr>
        <th>Day</th>
        <th>Time</th>
        <th>Slots</th>
        <th>Slots Available</th>
        <th>Bookings</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($data as $d)
    <tr>
        <td>{{$d->date}}</td>
        <td>{{$d->from}} to {{$d->to}}</td>
        <td>{{$d->slots}}</td>
        <td>{{$d->slots_available}}</td>
        <td><a href="{{ url('bookings_view',$d->id) }}" class="btn btn-info"><span>Bookings</span></a></td>
        <td><a href="{{ url('booking_edit',$d->id) }}" class="btn btn-warning"><span>Edit</span></a></td>
        <td><a href="{{ url('booking_delete',$d->id) }}" class="btn btn-danger"><span>Delete</span></a></td>
      
    </tr>
    @endforeach
</table>


<br>
<br>
<br>
<br>
                              

                            
     


@include('councillor.footer');