<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\consultation;
use App\Models\category;
use App\Models\doctor;
use App\Models\booking;
use App\Models\contact;
use App\Models\blog;
use App\Models\review;
use App\Mail\BookingMailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;



class HomeController extends Controller
{
    


    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') 
        {
            $currentDate = date('Y-m-d');
            $category =DB::table('categories')->get();
           
            $dr = DB::table('doctors')
    ->join('consultations', 'doctors.lid', '=', 'consultations.lid')
    ->whereDate('consultations.date', '<=', $currentDate)
    ->get();
            return view('user.home', compact('dr','category'));
        } 
        elseif($usertype == '2')
        {
            $category =DB::table('categories')->get();
            $dr = doctor::all();
            return view('councillor.home', compact('dr','category'));
        }
        elseif($usertype == '0')
        {
            return view('admin.home');
        }
    }
    

    public function index()
    {
        
        $currentDate = date('Y-m-d');
        $dr = doctor::all();
            $category =DB::table('categories')->get();
            return view('user.home', compact('dr','category'));
      
    }

    public function consultation()
    {
        $lid = Auth::user()->id;
        $data= Consultation::where('lid', $lid)->get();
        return view('councillor.consultation', compact('data'));
      
    }

    public function add_consultation(Request $request)
    {
        $data = new consultation;
        $lid = Auth::user()->id;
        $data->date = $request->input('date');
        $data->from = $request->input('from');
        $data->to = $request->input('to');       
        $data->slots = $request->input('slots');
        $data->fee = $request->input('fee');
        $data->slots_available = $request->input('slots');
        $data->lid = $lid ;
        $data->save();
    
        return redirect()->back()->with('message', ' Added Successfully');
    }

    public function book_now($id)
    {
        if (Auth::check()) 
        {
            $user = Auth::user();

            // Check if any required fields are empty
            if (empty($user->address) || empty($user->pin) || empty($user->gender) || empty($user->dob) || empty($user->image2)) {
                return redirect('view_profile')->with('message', 'Please update your bio for booking slots');

            }


        $currentDate = date('Y-m-d');
        $data = DB::table('doctors')
        ->join('consultations', 'doctors.lid', '=', 'consultations.lid')
        ->where('doctors.id', '=', $id)
        ->where('consultations.date', '>=', $currentDate)
        ->get();
        }
        else
        {
            return redirect('login');
        }
       

    
        return view('user.slots', compact('data'));
   
    }

    public function bookings_view($id)
    {
        $data = DB::table('bookings')
                ->join('users', 'bookings.lid', '=', 'users.id')
                ->where('co_id', $id)
                ->get();
               
        return view('councillor.bookings_view',compact('data'));
    }

    public function stripe($fee,$id)
    {
        return view('user.stripe', compact('fee','id'));
    }


    public function stripePost(Request $request,$fee,$id)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    

        Stripe\Charge::create ([

                "amount" => $fee * 100,

                "currency" => "usd",

                "source" => $request->stripeToken,

                "description" => "Thanks for payment" 

        ]);

       

        $datas = DB::table('consultations')
                ->where('id', $id)
                ->first();
        
        $updatedSlots = $datas->slots_available - 1;

        $update = DB::table('consultations')
                    ->where('id', $id)
                    ->update(['slots_available' => $updatedSlots]);
     
                $data = new booking;

                $lid = Auth::user()->id;
                $name=  Auth::user()->name;
                $userEmail=  Auth::user()->email;

                $data->date = $datas->date;
                $data->bkey = uniqid();
                $data->dr_id = $datas->lid; 
                $data->lid = $lid;
                $data->co_id = $id;
                $data->amount = $fee;

                $data->save();
       

                    
        Session::flash('success', 'Payment successful!');

        Mail::to($userEmail)->send(new BookingMailer($name));

        return back();

    }


    public function view_profile()
    {
        $lid = Auth::user()->id;
        $data = DB::table('users')
        ->where('id', $lid)
        ->get();
       
        return view('user.profile',compact('data'));
    }

    public function booking_delete($id)
    {
        $data = Consultation::find($id);
        if ($data) 
        {
             $data->delete();
             return redirect()->back()->with('messagee', 'Deleted successfully');
        } 
        else 
        {
             return redirect()->back()->with('errore', 'Failed to delete ');
        }
    }

    public function add_profile(Request $request, $id)
    {
        $data = User::find($id);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imagename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imagename);
            $data->image = $imagename;
        }
    
       
        if ($request->hasFile('file1')) {
            $image1 = $request->file('file1');
            $imagename1 = uniqid() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('uploads'), $imagename1);
            $data->image1 = $imagename1;
        }
    
        
        if ($request->hasFile('file2')) {
            $image2 = $request->file('file2');
            $imagename2 = uniqid() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('uploads'), $imagename2);
            $data->image2 = $imagename2;
        }

       
        $data->name = $request->input('name');
        $data->address = $request->input('address');
        $data->pin = $request->input('pin');
        $data->phone = $request->input('phone');   
        $data->dob = $request->input('dob');
        $data->gender = $request->input('gender');
      
        $data->save();
    
        return redirect()->back()->with('message', 'Address Added Successfully');
    }


    public function counciling_schedule($bkey)
    {
       
       
        return view('councillor.schedule',compact('bkey'));
    }

    public function counciling_schedule_upload(Request $request, $bkey)
    {
        $booking = DB::table('Bookings')
          
            ->where('bkey', $bkey)
            ->first();
            // dd($booking);
    
        if ($booking) 
        {
            $time = $request->input('time');
            $url = $booking->url;
    
            if (!$url) {
                $roomHash = strval(rand(0, 999999));
                $roomName = 'observable-' . $roomHash;
                $url = $roomName;
            }
    
            Booking::
            where('bkey', $bkey)
            ->update(['time' => $time, 'url' => $url]);
        }
    
        return redirect()->back()->with('message', 'Counseling scheduled successfully',compact('booking'));
    }
    
    
    public function appoinments_view()
    {
        $lid = Auth::user()->id;
        $data = Booking::where('lid', $lid)  
            ->get();
        return view('user.appoinments_view',compact('data'));
    }
    
    public function user_videocall_join($url)
{
    return view('user.user_videocall_join', compact('url'));
}

public function videocall_join($url)
{
    return view('councillor.videocall_join', compact('url'));
}

public function view_more($category_name)
    {
        $doctor = Doctor::where('category_name', $category_name)  
        ->get();
        return view('user.view_doctor', compact('doctor','category_name'));
    }

    public function bookings_view_today()
    {

        $lid = Auth::user()->id;

        $date = date('Y-m-d');

        $data= DB::table('bookings')
                ->join('users', 'bookings.lid', '=', 'users.id')
               
                ->where('bookings.date','=', $date)
                ->get();

    

        return view('councillor.bookings_view',compact('data'));
    
    }

            public function contact()
        {
            $category =DB::table('categories')->get();
            return view('user.contact',compact('category'));
        }

        public function uploadcontact(Request $request)
        {
                $data = new contact;
                $data->name = $request->input('name');
                $data->email = $request->input('email');
                $data->category = $request->input('category');
                $data->lid = $request->input('id');
                $data->phone = $request->input('phone');
                $data->subject = $request->input('subject');
                $data->message = $request->input('message');
                $data->save();
                return redirect()->back()->with('message', 'Contact Added Successfully');
        }

        public function about()
        {
            
            
            $blogs=DB::table('blogs')
            ->join('doctors', 'blogs.lid', '=', 'doctors.lid')              
            ->get();

            $reviews = DB::table('reviews')
            ->join('users', 'reviews.lid', '=', 'users.id')
            ->orderBy('reviews.id', 'desc')
            ->limit(2)
            ->get();



            $category =DB::table('categories')->get();
            return view('user.about',compact('category','blogs','reviews'));
        }

        
        public function blogs()
        {
            $lid = Auth::user()->id;

            $blogs=DB::table('blogs')
            ->join('doctors', 'blogs.lid', '=', 'doctors.lid')              
            ->get();
    
            $myblogs=DB::table('blogs')->where('lid',$lid)->get();
            
            return view('councillor.blogs',compact('blogs','myblogs'));
        }

        public function upload_blog(Request $request)
        {
                $lid = Auth::user()->id;
                $data = new blog;
                
                $data->topic = $request->input('topic');
                $data->content = $request->input('content');
                $data->lid = $lid;
                
                $data->save();
                return redirect()->back()->with('message', 'Blog Added Successfully');
        }

        public function upload_blog_edit(Request $request,$id)
        {
                
            $data = blog::find($id);

                
                $data->topic = $request->input('topic');
                $data->content = $request->input('content');
                $data->save();
                return redirect()->back()->with('message', 'Blog Updated Successfully');
        }

        public function blog_delete($id)
    {
        $data = blog::find($id);

            if ($data) 
            {
                 $data->delete();
                 return redirect()->back()->with('message', 'Blog deleted successfully');
            } 
            else 
            {
                 return redirect()->back()->with('errore', 'Failed to delete blog');
            }
    }

    public function upload_review(Request $request)
        {
            $user = Auth::user();

            // Check if any required fields are empty
            if (empty($user->address) || empty($user->pin) || empty($user->gender) || empty($user->dob) || empty($user->image2)) {
                return redirect('view_profile')->with('message', 'Please update your bio for adding review');

            }
                
            $lid = Auth::user()->id;
                $data = new review;

                
                
                $data->content = $request->input('content');
                $data->lid = $lid;
                $data->save();
                return redirect()->back()->with('messageee', 'Review Updated Successfully');
        }

        public function reviews_view()
        {
            $lid = Auth::user()->id;

            
    
            $reviews=DB::table('reviews')->where('lid',$lid)->get();
            
            return view('user.reviews_views',compact('reviews'));
        }


        public function reviews_edit(Request $request,$id)
        {
                
            $data = review::find($id);

                
               
                $data->content = $request->input('content');
                $data->save();
                return redirect()->back()->with('message', 'Review Updated Successfully');
        }

        public function reviews_delete($id)
    {
        $data = review::find($id);

            if ($data) 
            {
                 $data->delete();
                 return redirect()->back()->with('message', 'Review deleted successfully');
            } 
            else 
            {
                 return redirect()->back()->with('errore', 'Failed to delete ');
            }
    }



    
    
    
}
