<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

  
    @include('admin.sidebar')

    @include('admin.navbar')




<div class="content-wrap">
    <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Add Doctors Here</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->



<form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
@csrf
<table align="center">

    <tr>
        <th>Doctor Name</th><td><input type="text" name="name" placeholder="Give a Name....." required="" class="form-control"></td>
    </tr>

    
    <tr>
        <th>Gender</th>
        <td>
        <select name="gender" class="form-control">
					<option>Select Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Other</option>
                    
        </select>
        </td>
    </tr>

    <tr>
        <th>D.O.B</th><td><input type="date" name="dob" placeholder="Give a D.O.B....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Address</th><td><input type="text" name="address" placeholder="Give a Address....." required="" class="form-control"></td>
    </tr>

    
    <tr>
        <th>Pin</th><td><input type="number" name="pin" placeholder="Give a Pin....." required="" class="form-control"></td>
    </tr>

   

    <tr>
        <th>Contact</th><td><input type="number" name="phone" placeholder="Give a Phone Number....." required="" class="form-control"></td>
    </tr>
    


    <tr>
        <th>Email</th><td><input type="email" name="email" placeholder="Give a Email....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Specilisation</th>
        <td>
        <select name="category" class="form-control">
					<option>Select category</option>
                    @foreach($category as $data)
					<option>{{$data->category_name}}</option>
					@endforeach

        </select>
        </td>
    </tr>

    <tr>
        <th>Dr Image</th><td><input type="file" name="file" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Certificate</th><td><input type="file" name="file1" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Id Proof</th><td><input type="file" name="file2" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>



<tr><td><input type="submit"  class="btn btn-success"></td></tr>

</table>

</form>





            </div>
        </div>
    </div>
</div>





    @include('admin.script')
</body>

</html>