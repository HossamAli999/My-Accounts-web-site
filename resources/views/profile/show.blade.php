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
