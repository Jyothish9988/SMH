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
                                <h1>Hello, <span>Edit Category Here</span></h1>
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



<form action="{{url('category_edit',$datas->id)}}" method="POST" >
@csrf
<table align="center">

    <tr>
        <th>Category Name</th><td><input type="text"  value="{{$datas->category_name}}" required="" class="form-control" name="category_name" ></td>
    </tr>

   
    <tr>
        <td><input type="submit"  class="btn btn-success"></td>
    </tr>

</table>

</form>


            </div>
        </div>
    </div>
</div>





    @include('admin.script')
</body>

</html>