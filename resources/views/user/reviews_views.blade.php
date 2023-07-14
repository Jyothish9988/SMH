@include('user.header');
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this ?');
    }
    </script>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->

<table class="table table-striped table-bordered">
    <tr>
        <th>Date</th>
        <th>Content</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    
    @foreach($reviews as $d)
    <form action="{{url('reviews_edit',$d->id)}}" method="POST" class="appointment-form ftco-animate">
        @csrf
        <tr>
            <td>{{$d->created_at}}</td>
            <td>
                <textarea id="" cols="50" rows="4" class="form-control" name="content" placeholder="Blog Content">{{$d->content}}</textarea>
            </td>
            <td>
            <input type="submit" value="Edit" class="btn btn-primary py-3 px-4">
            </td>
            <td>
                <a href="{{url('reviews_delete',$d->id)}}" class="btn btn-danger py-3 px-4" onclick="return confirmDelete()" >Delete</a>
            </td>
        </tr>
    </form>
@endforeach

    


</table>


@include('user.footer');