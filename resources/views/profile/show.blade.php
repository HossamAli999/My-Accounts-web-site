@extends('layouts.app')

@section('content')
 
@foreach ( $profile as $profile )
    
@if ($profile->token == request('token'))
    


            <!--app-content open-->
            <div class="container">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Profile</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row" id="user-profile">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="wideget-user mb-2">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="row">
                                                            
                                                                <div class="profile-img-1 d-flex  justify-content-center">
                                                                    <img src="{{asset('logo.png')}}" alt="img">
                                                                </div>
                                                                    <div class="text-dark ">
                                                                        <h3 class="h3 mb-2 d-flex  justify-content-center">Percy Kewshun</h3>                                                                    </div>
                                                           
                                                    </div>
                                                    
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body ">
                                                <h3 class="d-flex  justify-content-center">QR code</h3>
                                                <div class="d-flex  justify-content-center" >
                                                    {{-- <img src="data:image/png;base64,{{ base64_encode( QrCode::format('png')->size(200)->merge(public_path('logo.jpg'),0.3,true)->style('dot')->generate(Request::url()))}}" alt="" srcset=""> --}}
                                                    <img src="data:image/png;base64,{{ 
                                                    base64_encode( QrCode::format('png')
                                                    ->size(200)
                                                    ->errorCorrection('H')
                                                    ->merge(public_path('logo.jpg'),0.3,true)
                                                    ->style('dot')
                                                    ->eye('square')
                                                    ->generate(Request::url()))
                                                    }}" alt="" srcset="">
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xl-9">
                                        
                                        <div class="card border p-0 shadow-none">
                                            <div class="card-body">
                                                <h3 class="d-flex  justify-content-center">Accounts</h3>
                                                <div class="row mb-3">
                                                    
                                                    @if ($profile->email != null)
                                                       <div class="col-lg-6 col-md-12 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-email "></i>
                                                            </div>
                                                            <a href="{{$profile->email}}" class="form-control"  > {{$profile->email}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profile->facebook != null)
                                                       <div class="col-lg-6 col-md-12 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-facebook "></i>
                                                            </div>
                                                            <a href="{{$profile->facebook}}" class="form-control"  > {{$profile->facebook}}</a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    
                                                    @if ($profile->Whatsapp != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-whatsapp"></i>                                                </div>
                                                                <a href="https://wa.me/{{$profile->Whatsapp}}" class="form-control"  > {{$profile->Whatsapp}}</a>
                                                            </div>
                                                    </div> 
                                                    @endif                         
                                              
                                                    @if ($profile->linkedin != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-linkedin "></i>
                                                            </div>
                                                            <a href="{{$profile->linkedin}}"  class="form-control"  > {{$profile->linkedin}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profile->Snapchat != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-snapchat"></i>
                                                            </div>
                                                            <a href="{{$profile->Snapchat}}"  class="form-control"  > {{$profile->Snapchat}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profile->twitter != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-twitter "></i>
                                                            </div>
                                                            <a href="{{$profile->twitter}}"  class="form-control"  > {{$profile->twitter}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profile->github != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-github"></i>
                                                            </div>
                                                            <a href="{{$profile->github}}"  class="form-control"  > {{$profile->github}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profile->Instagram != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </div>
                                                            <a href="{{$profile->Instagram}}"  class="form-control"  > {{$profile->Instagram}}</a>
                                                        </div>
                                                    </div>
                                                    @endif
                                              
                                                    @if ($profile->web1 != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-globe"></i>
                                                            </div>
                                                            <a href="{{$profile->web1}}"  class="form-control"  > {{$profile->web1}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profile->web2 != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-globe"></i></div>
                                                                <a href="{{$profile->web2}}"  class="form-control"  > {{$profile->web2}}</a>
                                                            </div>
                                                    </div>
                                                    @endif

                                                </div>
                                             </div>
                                         </div>
                                       
                                    </div>
                                   
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content closed-->
        </div>
@else

@endif
@endforeach

@endsection
{{-- 
@if ($profile->facebook != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-facebook "></i>
     </div>
     <a href="{{$profile->facebook}}" class="form-control"  > {{$profile->facebook}}</a>
 </div>
</div>
@endif

@if ($profile->twitter != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-twitter "></i>
     </div>
     <a href="{{$profile->twitter}}" class="form-control"  > {{$profile->twitter}}</a>
 </div>
@endif

@if ($profile->instagram != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-instagram "></i>
     </div>
     <a href="{{$profile->instagram}}" class="form-control"  > {{$profile->instagram}}</a>
 </div>
@endif

@if ($profile->linkedin != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-linkedin "></i>
     </div>
     <a href="{{$profile->linkedin}}" class="form-control"  > {{$profile->linkedin}}</a>
 </div> 

@endif

@if ($profile->youtube != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-youtube "></i>
     </div>
     <a href="{{$profile->youtube}}" class="form-control"  > {{$profile->youtube}}</a>
 </div>
 
@endif
@if ($profile->website != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-website "></i>
     </div>
     <a href="{{$profile->website}}" class="form-control"  > {{$profile->website}}</a>
 </div>
 
@endif
@if ($profile->email != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-envelope "></i>
     </div>
     <a href="{{$profile->email}}" class="form-control"  > {{$profile->email}}</a>
 </div>
 
@endif
@if ($profile->phone != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-phone "></i>
     </div>
     <a href="{{$profile->phone}}" class="form-control"  > {{$profile->phone}}</a>
 </div>
 
@endif
@if ($profile->address != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-map-marker "></i>
     </div>
     <a href="{{$profile->address}}" class="form-control"  > {{$profile->address}}</a>
 </div>
 
@endif
@if ($profile->about != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-info-circle "></i>
     </div>
     <a href="{{$profile->about}}" class="form-control"  > {{$profile->about}}</a>
 </div>
 
@endif
@if ($profile->birthday != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-birthday-cake "></i>
     </div>
     <a href="{{$profile->birthday}}" class="form-control"  > {{$profile->birthday}}</a>
 </div>
 
@endif
@if ($profile->religion != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-star "></i>
     </div>
     <a href="{{$profile->religion}}" class="form-control"  > {{$profile->religion}}</a>
 </div>
 
@endif
@if ($profile->blood_type != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-tint "></i>
     </div>
     <a href="{{$profile->blood_type}}" class="form-control"  > {{$profile->blood_type}}</a>
 </div>
 
@endif
@if ($profile->hobby != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-heart "></i>
     </div>
     <a href="{{$profile->hobby}}" class="form-control"  > {{$profile->hobby}}</a>
 </div>
 
@endif
@if ($profile->interest != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-heart "></i>
     </div>
     <a href="{{$profile->interest}}" class="form-control"  > {{$profile->interest}}</a>
 </div>
 
@endif
@if ($profile->favorite_food != null)
<div class="col-lg-6 col-md-12 mb-2">
 <div class="input-group">
     <div class="input-group-text">
         <i class="fa-brands fa-heart "></i>
     </div>
     <a href="{{$profile->favorite_food}}" class="form-control"  > {{$profile->favorite_food}}</a>
 </div>
 
@endif --}}

