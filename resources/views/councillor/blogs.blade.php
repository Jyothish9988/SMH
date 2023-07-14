@include('councillor.header');


<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this ?');
    }
    </script>
<section class="hero-wrap hero-wrap-2" style="background-image: url('user/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Blogs</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>



    <section class="ftco-section">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 ftco-animate">
                            <!-- ------------------alert------------------------- -->
@if(session()->has('message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>
@endif
<!-- -------------------------alert end--------------- -->
            <br>
            <br>
            <br>
          <form action="{{url('upload_blog')}}" method="POST" class="appointment-form ftco-animate">
          @csrf
		        		<h3>Blogs</h3>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" class="form-control" name="topic" placeholder="Enter Blog Title">
			    				</div>
			    				<!-- <div class="form-group">
			    					<input type="text" class="form-control" placeholder="Last Name">
			    				</div> -->
		    				</div>
		    				
		    				<div class="">
		    					<div class="form-group">
			              <textarea  id="" cols="30" rows="2" class="form-control" name="content" placeholder="Blog Content"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="Upload" class="btn btn-secondary py-3 px-4">
			            </div> 
		    				</div>
		    </form>
          


            
            
            


            <div class="pt-5 mt-5">
             
              <ul class="comment-list">
                <li class="comment">
                <div class="about-author d-flex p-4 bg-light">
                   
<table class="table table-striped table-bordered">
    <tr>
        <th>Date</th>
       
        <th>Topic</th>
        <th>Content</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    
    @foreach($myblogs as $d)
    <form action="{{url('upload_blog_edit',$d->id)}}" method="POST" class="appointment-form ftco-animate">
        @csrf
        <tr>
            <td>{{$d->created_at}}</td>
            <td>
                <input type="text" class="form-control" name="topic" placeholder="Enter Blog Title" value="{{$d->topic}}">
            </td>
            <td>
                <textarea id="" cols="50" rows="4" class="form-control" name="content" placeholder="Blog Content">{{$d->content}}</textarea>
            </td>
            <td>
            <input type="submit" value="Edit" class="btn btn-primary py-3 px-4">
            </td>
            <td>
                <a href="{{url('blog_delete',$d->id)}}" class="btn btn-danger py-3 px-4" onclick="return confirmDelete()" >Delete</a>
            </td>
        </tr>
    </form>
@endforeach

    


</table>

              <div class="bio mr-5">
               
              </div>
              <div class="desc">
                
              </div>
            </div>
                </li>

                

                
               
              </ul>
              <!-- END comment-list -->
              
              
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <!-- <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form> -->
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar">Categories</h3>
              <ul class="categories">
            
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
            @foreach($blogs as $e)
              <h3 class="heading-sidebar">{{$e->topic}}</h3>

              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('/uploads/{{$e->image}}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">{{$e->content}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{$e->created_at}}</a></div>
                    <div><a href="#"><span class="icon-person"></span>Dr. {{$e->name}}</a></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
         

            

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Paragraph</h3>
              <p>Contact Us to knmow more about.</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
		

    





@include('councillor.footer');