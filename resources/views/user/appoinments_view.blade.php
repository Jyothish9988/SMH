@include('user.header');
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
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('user/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-4">
                <h1 class="mb-3 bread">Bookings</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Appointment <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<br>
<br>

<table class="order-table" align="center">

<tr>
    
    <th>Date</th>
    <th>Time</th>
    <th>URL</th>
    <th>Amount</th>
    <th>Status</th>
    

</tr>
@foreach($data as $p)
<tr>
    
   
    <td>{{$p->date}}</td>
    <td>{{$p->time}}</td>
    @if ($p->url == null)
    <td><a href="" class="btn btn-danger">Appoinment time not fixed</a></td>
    @else
    <td><a href="{{ url('user_videocall_join',['url' => $p->url]) }}" class="btn btn-primary">Join</a></td>
    @endif
    <td>{{$p->amount}}</td>
    <td>{{$p->status}}</td>
   


</tr>
@endforeach

</table>
<br>
<br>
<br>
@include('user.footer');