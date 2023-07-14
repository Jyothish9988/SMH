@include('user.header');
<section class="ftco-intro img" style="background-image: url(user/images/bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Your Profile</h2>
                        <br>
                        <br>
			  @if (Route::has('login'))
                                @auth
                                    
                                    <a href="{{url('/redirect')}}" class="btn btn-white px-4 py-3">Home</a></p>
                                @else
                                <p class="mb-0">
                                <a href="{{url('/')}}" class="btn btn-white px-4 py-3">Home</a></p>
                                    
                                @endauth
                                @endif
			
						
						
					</div>
				</div>
			</div>
		</section>
        
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
            <br>
        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                @foreach($data as $users)
                                    <form class="form-valide" action="{{url('add_profile',$users->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <input type="hidden" name="hidden" value='h'>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" value="{{$users->name}}"name="name" placeholder="Enter Name.." >
                                            </div>
                                        </div>

                                       

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Address <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="address" value="{{$users->address}}" placeholder="Enter Address.." >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Pin <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-username" name="pin" value="{{$users->pin}}" placeholder="Enter Pin.." >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Phone <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="val-username" name="phone" value="{{$users->phone}}" placeholder="Enter Pin.." >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">D.O.B <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="val-username" name="dob" value="{{$users->dob}}" placeholder="Enter Pin.." >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Gender <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                            <select name="gender" class="form-control">
                                            <option>{{$users->gender}}</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                    
                                             </select>
                                              
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Profile Image <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                            <img src="/uploads/{{$users->image}}" alt="Product image" heigh="150px" width="150px" class="product-image"><br>
                                                <input type="file" class="form-control" id="val-username" name="file"  placeholder="Enter Pin.." >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Id <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                            <img src="/uploads/{{$users->image1}}" alt="Product image" heigh="150px" width="150px" class="product-image"><br>
                                                <input type="file" class="form-control" id="val-username" name="file1"  placeholder="Enter Pin.." >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Medical Certificate <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                            <img src="/uploads/{{$users->image2}}" alt="Product image" heigh="150px" width="150px" class="product-image"><br>
                                                <input type="file" class="form-control" id="val-username" name="file2"  placeholder="Enter Pin.." >
                                            </div>
                                        </div>
                                     
                                        
                                        
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                 @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<br>

<x-app-layout>
  

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

  


























        <br>
        <br>
        <br>    
@include('user.footer');