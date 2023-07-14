
@include('user.header');
<style>
    /* Blog post styles */
.block-21 {
  display: flex;
}

.blog-img {
  width: 150px;
  height: 150px;
  background-size: cover;
  background-position: center;
}

.text {
  flex: 1;
}

.heading {
  font-size: 20px;
  margin-bottom: 10px;
}

.meta {
  margin-top: 10px;
}

.meta div {
  display: inline-block;
  margin-right: 10px;
}

.icon-calendar:before,
.icon-person:before,
.icon-like:before,
.icon-dislike:before {
  margin-right: 5px;
}

/* Icon styles - Replace with appropriate icon library */
.icon-calendar:before {
  content: "\f073"; /* Replace with the code for the calendar icon */
}

.icon-person:before {
  content: "\f007"; /* Replace with the code for the person icon */
}

.icon-like:before {
  content: "\f164"; /* Replace with the code for the like icon */
}

.icon-dislike:before {
  content: "\f165"; /* Replace with the code for the dislike icon */
}

    </style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('user/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">About Us</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">About Smart Mental Health Helpline</h2>
            <p>A smart mental health helpline is a helpline or hotline service that incorporates artificial intelligence (AI) technology to provide support and assistance for mental health concerns. These helplines often use chatbot or voice recognition systems to interact with individuals seeking help.</p>
            <p>
              <img src="user/images/image_3.jpg" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3">Benefits of utilizing these services</h2>
            <p>
              <img src="user/images/image_4.jpg" alt="" class="img-fluid">
            </p>

            <ol>
                <li><p>
           <b> Accessibility:</b> Smart mental health helplines and online counseling services are available 24/7, allowing individuals to seek help whenever they need it, regardless of their location.
</p>
        </li>
<li>

<b>Anonymity and privacy: </b>Some people may feel more comfortable discussing their mental health concerns online rather than face-to-face. These services prioritize confidentiality, providing a safe space to express yourself openly.
</li>
<li>
<b>Flexibility: </b>Online counseling eliminates the need for travel and offers flexible scheduling options, accommodating your availability and making it easier to fit therapy sessions into your routine.
</li>
<li>
<b>Cost-effectiveness:</b> In many cases, online counseling can be more affordable compared to traditional in-person therapy, making mental health support more accessible to a wider range of individuals.           </li>
</ol>
            
            
            


            <div class="pt-5 mt-5">
              <h3 class="mb-5">Feedbacks & Reviews</h3>
              @foreach($reviews as $e)
              <ul class="comment-list">


       
        <li class="comment">
                <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="/uploads/{{$e->image}}" heigh="150px" width="150px"  class="img-fluid mb-4 rounded-circle">
              </div>
              <div class="desc">
                <h3>{{$e->name}}</h3>
                <p>{{$e->content}}</p>
              </div>
            </div>
        </li>

  
                

                
               
              </ul>
              @endforeach
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
              @foreach($category as $d)
                <li><a href="{{ url('view_more',$d->category_name) }}">{{$d->category_name}}</a></li>
              @endforeach
                
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Recent Blog</h3>



              @foreach($blogs as $e)
    <h3 class="heading-sidebar">{{$e->topic}}</h3>

    <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url('/uploads/{{$e->image}}');"></a>
        <div class="text">
            <h3 class="heading"><a href="#">{{$e->content}}</a></h3>
            <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> {{$e->created_at}}</a></div>
                <div><a href="#"><span class="icon-person"></span> Dr. {{$e->name}}</a></div>
                <!-- <div>
                    <a href="#"><span class="icon-like"></span> Like</a>
                    <a href="#"><span class="icon-dislike"></span> Dislike</a>
                </div> -->
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
		

    
    @include('user.footer');