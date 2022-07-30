@extends('layouts.app')

@section('content')


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
                                                    <div class="col-lg-6 col-md-12 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-facebook "></i>
                                                            </div>
                                                            <a href="{{$profile->facebook}}" name="facebook" class="form-control"  > {{$profile->facebook}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-whatsapp"></i>                                                </div>
                                                                <a href="https://wa.me/{{$profile->Whatsapp}}" name="facebook" class="form-control"  > {{$profile->Whatsapp}}</a>
                                                            </div>
                                                    </div>
                                                </div>                                    
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-linkedin "></i>
                                                            </div>
                                                            <a href="{{$profile->linkedin}}" name="facebook" class="form-control"  > {{$profile->linkedin}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-snapchat"></i>
                                                            </div>
                                                            <a href="{{$profile->Snapchat}}" name="facebook" class="form-control"  > {{$profile->Snapchat}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-globe"></i>
                                                            </div>
                                                            <a href="{{$profile->web1}}" name="facebook" class="form-control"  > {{$profile->web1}}</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-globe"></i></div>
                                                                <a href="{{$profile->web2}}" name="facebook" class="form-control"  > {{$profile->web2}}</a>
                                                            </div>
                                                    </div>
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



@endsection
