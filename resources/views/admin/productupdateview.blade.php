<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                                <h1>Hello, <span>Add Products Here</span></h1>
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



<form action="{{url('updateproduct',$data->id)}}" method="POST" enctype="multipart/form-data">
@csrf
<table align="center">

    <tr>
        <th>Product Title</th><td><input type="text" name="title" value="{{$data->title}}" required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Price</th><td><input type="number" name="price" value="{{$data->price}}" required="" class="form-control"></td>
    </tr>

    <tr>
        <th>MRP</th><td><input type="number" name="mrp"  value="{{$data->mrp}}"placeholder="Give a Product M R P....." required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Description</th><td><input type="text" name="description" value="{{$data->description}}" required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Category</th><td><input type="text" name="category" value="{{$data->category}}" required="" class="form-control"></td>
    </tr>
    
    <tr>
        <th>Size</th>
        <td>
        <select name="size" class="form-control" value=>

					<option readonly>{{$data->size}}</option>
					<option>XS</option>
					<option>S</option>
					<option>M</option>
                    <option>XL</option>
                    <option>XXL</option>

        </select>
        </td>
    </tr>

    <tr>
        <th>Quantity</th><td><input type="number" name="quantity" value="{{$data->quantity}}" required="" class="form-control"></td>
    </tr>

    <tr>
        <th>Main Image</th>
        <td><img src="/productimage/{{$data->image}}" alt="Product image" heigh="150px" width="150px" class="product-image"></td>
        <td><input type="file" name="file" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Image left</th>
        <td><img src="/productimage/{{$data->image1}}" alt="Product image" heigh="150px" width="150px" class="product-image"></td>
        <td><input type="file" name="file1" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Image Right</th>
        <td><img src="/productimage/{{$data->image2}}" alt="Product image" heigh="150px" width="150px" class="product-image"></td>
        <td><input type="file" name="file2" placeholder="Give a Product Image....."  class="form-control"></td>
    </tr>

    <tr>
        <th>Image Back</th>
        <td><img src="/productimage/{{$data->image3}}" alt="Product image" heigh="150px" width="150px" class="product-image"></td>
        <td><input type="file" name="file3" placeholder="Give a Product Image....."  class="form-control"></td>
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