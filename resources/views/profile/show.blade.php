@extends('layouts.app')

@section('content')
 
{{-- @foreach ( $profiles as $profilee ) --}}
    {{-- {{
    $profilee= App\Models\profile::where('token',request('token'))->first();
    }} --}}
   
@if ($profilee != null)
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
                                                        @if ($profilee->blood_type == 'A Positive')
                                                            <div class="col-lg-2 col-md-2">
                                                                <div class="avatar-md profile-user-wid mb-4">
                                                                    <img src="{{ asset('images/blood/Ap.png') }}" alt="" class="img-fluid">
                                                                </div>
                                                            </div>
                                                        @elseif($profilee->blood_type == 'A Negative')
                                                        <div class="col-lg-2 col-md-2">
                                                            <div class="avatar-md profile-user-wid mb-4">
                                                                <img src="{{ asset('images/blood/An.png') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        @elseif($profilee->blood_type == 'B Positive')
                                                        <div class="col-lg-2 col-md-2">
                                                            <div class="avatar-md profile-user-wid mb-4">
                                                                <img src="{{ asset('images/blood/Bp.png') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        @elseif($profilee->blood_type == 'B Negative')
                                                        <div class="col-lg-2 col-md-2">
                                                            <div class="avatar-md profile-user-wid mb-4">
                                                                <img src="{{ asset('images/blood/Bn.png') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        @elseif($profilee->blood_type == 'AB Positive')
                                                        <div class="col-lg-2 col-md-2">
                                                            <div class="avatar-md profile-user-wid mb-4">
                                                                <img src="{{ asset('images/blood/ABp.png') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        @elseif($profilee->blood_type == 'AB Negative')
                                                        <div class="col-lg-2 col-md-2">
                                                            <div class="avatar-md profile-user-wid mb-4">
                                                                <img src="{{ asset('images/blood/ABn.png') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        @elseif($profilee->blood_type == 'O Positive')
                                                        <div class="col-lg-2 col-md-2">
                                                            <div class="avatar-md profile-user-wid mb-4">
                                                                <img src="{{ asset('images/blood/Op.png') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        @elseif($profilee->blood_type == 'O Negative')
                                                        <div class="col-lg-2 col-md-2">
                                                            <div class="avatar-md profile-user-wid mb-4">
                                                                <img src="{{ asset('images/blood/On.png') }}" alt="" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        @endif
                                                            {{-- <h4 style="color :red">
                                                                Blood type: {{ $profilee->blood_type}}
                                                            </h4> --}}
                                                                <div class="profile-img-1 d-flex  justify-content-center">
                                                                    <img src="{{asset('logo.png')}}" alt="img">
                                                                </div>
                                                                    <div class="text-dark ">
                                                                        <h3 class="h3 mb-2 d-flex  justify-content-center">{{$profilee->name}}</h3> 
                                                                </div>
                                                           
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
                                                    {!! '<'.'?xml version="1.0"?>' !!} <!-- to make the qr code work -->
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
                                                    {{-- {!! QrCode::size(100)
                                                    ->format('svg')
                                                    ->size(200)
                                                    ->errorCorrection('H')
                                                    ->style('dot')
                                                    ->eye('square')
                                                    ->generate(Request::url()); !!} --}}

                                                    {{-- generate QrCode  --}}

                                                </div>                                                




                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-xl-9">
                                        
                                        <div class="card border p-0 shadow-none">
                                            <div class="card-body">
                                                <h3 class="d-flex  justify-content-center">Accounts</h3>
                                                <div class="row mb-3">
                                                    
                                                    @if ($profilee->email != null)
                                                       <div class="col-lg-6 col-md-12 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-inbox "></i>
                                                            </div>
                                                            <a href="mailto:{{$profilee->email}}" target="_blank"  class="form-control"  > {{$profilee->email}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profilee->phone != null)
                                                       <div class="col-lg-6 col-md-12 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-phone"></i>
                                                            </div>
                                                            <a href="{{$profilee->phone}}" target="_blank"  class="form-control"  > {{$profilee->phone}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profilee->facebook != null)
                                                       <div class="col-lg-6 col-md-12 mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-facebook "></i>
                                                            </div>
                                                            <a href="{{$profilee->facebook}}" target="_blank"  class="form-control"  > {{$profilee->facebook}}</a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    
                                                    @if ($profilee->Whatsapp != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-whatsapp"></i>                                                </div>
                                                                <a href="https://wa.me/{{$profilee->Whatsapp}}"target="_blank"  class="form-control"  > {{$profilee->Whatsapp}}</a>
                                                            </div>
                                                    </div> 
                                                    @endif                         
                                              
                                                    @if ($profilee->linkedin != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-linkedin "></i>
                                                            </div>
                                                            <a href="{{$profilee->linkedin}}" target="_blank"   class="form-control"  > {{$profilee->linkedin}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profilee->Snapchat != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-snapchat"></i>
                                                            </div>
                                                            <a href="{{$profilee->Snapchat}}" target="_blank"   class="form-control"  > {{$profilee->Snapchat}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profilee->twitter != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-twitter "></i>
                                                            </div>
                                                            <a href="{{$profilee->twitter}}" target="_blank"  class="form-control"  > {{$profilee->twitter}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profilee->github != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-github"></i>
                                                            </div>
                                                            <a href="{{$profilee->github}}" target="_blank"   class="form-control"  > {{$profilee->github}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profilee->Instagram != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-brands fa-instagram"></i>
                                                            </div>
                                                            <a href="{{$profilee->Instagram}}" target="_blank"  class="form-control"  > {{$profilee->Instagram}}</a>
                                                        </div>
                                                    </div>
                                                    @endif
                                              
                                                    @if ($profilee->web1 != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-globe"></i>
                                                            </div>
                                                            <a href="{{$profilee->web1}}" target="_blank"   class="form-control"  > {{$profilee->web1}}</a>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    @if ($profilee->web2 != null)
                                                    <div class="col-lg-6 col-md-12  mb-2">
                                                        <div class="input-group">
                                                            <div class="input-group-text">
                                                                <i class="fa-solid fa-globe"></i></div>
                                                                <a href="{{$profilee->web2}}" target="_blank"  class="form-control"  > {{$profilee->web2}}</a>
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
<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 25.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 800 600" style="enable-background:new 0 0 800 600;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#60A0CC;}
	.st1{fill:#72ABD2;}
	.st2{fill:#83B5D7;}
	.st3{fill:#95C0DD;}
	.st4{fill:#A7CAE3;}
	.st5{fill:#B8D5E8;}
	.st6{fill:#CADFEE;}
	.st7{fill:#DCEAF4;}
	.st8{fill:#EDF4F9;}
	.st9{fill:#FFFFFF;}
	.st10{fill:#CC6262;}
	.st11{fill:#1C4E60;}
	.st12{fill:#356272;}
	.st13{fill:#4E7583;}
	.st14{fill:#688995;}
	.st15{fill:#819DA7;}
	.st16{fill:#9AB0B8;}
	.st17{fill:#B3C4CA;}
	.st18{fill:#CDD8DC;}
	.st19{fill:#E6EBED;}
	.st20{fill:#4F4AA8;}
	.st21{fill:#635EB2;}
	.st22{fill:#7672BB;}
	.st23{fill:#8A86C5;}
	.st24{fill:#9D9ACF;}
	.st25{fill:#B1AFD8;}
	.st26{fill:#C4C3E2;}
	.st27{fill:#D8D7EC;}
	.st28{fill:#EBEBF5;}
	.st29{fill:#D17171;}
	.st30{fill:#D68181;}
	.st31{fill:#DA9090;}
	.st32{fill:#DFA0A0;}
	.st33{fill:#E4AFAF;}
	.st34{fill:#E9BFBF;}
	.st35{fill:#EDCECE;}
	.st36{fill:#F2DEDE;}
	.st37{fill:#F7EDED;}
	.st38{opacity:0.5;fill:#356272;}
	.st39{fill:none;stroke:#123E51;stroke-width:1.8219;stroke-miterlimit:10;}
	.st40{fill:#BC5555;}
	.st41{fill:none;stroke:#123E51;stroke-width:1.8219;stroke-linecap:round;stroke-miterlimit:10;}
	
		.st42{fill:none;stroke:#123E51;stroke-width:1.8219;stroke-linecap:round;stroke-miterlimit:10;stroke-dasharray:1.6548,9.9285,6.619,1.6548;}
	
		.st43{fill:none;stroke:#123E51;stroke-width:1.8219;stroke-linecap:round;stroke-miterlimit:10;stroke-dasharray:9.9285,6.619,1.6548,9.9285,6.619,1.6548;}
	.st44{fill:#123E51;}
	.st45{fill:none;stroke:#123E51;stroke-width:3.6438;stroke-miterlimit:10;}
	.st46{fill:none;stroke:#123E51;stroke-width:3.997;stroke-miterlimit:10;}
	
		.st47{fill:none;stroke:#123E51;stroke-width:1.8219;stroke-linecap:round;stroke-miterlimit:10;stroke-dasharray:3.6438,4.5547,1.8219;}
	
		.st48{fill:none;stroke:#123E51;stroke-width:1.8219;stroke-linecap:round;stroke-miterlimit:10;stroke-dasharray:10.9313,7.2875,1.8219;}
	.st49{font-family:'Montserrat-Bold';}
	.st50{font-size:28.7615px;}
	.st51{fill:none;stroke:#CADFEE;stroke-width:1.8219;stroke-miterlimit:10;stroke-dasharray:10.9313,7.2875,1.8219;}
	.st52{fill:none;stroke:#DFA0A0;stroke-width:0.9109;stroke-miterlimit:10;stroke-dasharray:10.9313,7.2875,1.8219;}
	.st53{fill:none;stroke:#DFA0A0;stroke-width:1.8302;stroke-miterlimit:10;stroke-dasharray:21.9626,14.6417,3.6604;}
	.st54{fill:none;stroke:#DFA0A0;stroke-width:0.737;stroke-miterlimit:10;stroke-dasharray:8.8442,5.8961,1.474;}
	.st55{opacity:0.35;fill:#EDF4F9;}
</style>
<rect x="874.62" y="89.74" class="st0" width="14.12" height="14.12"/>
<rect x="874.62" y="103.86" class="st1" width="14.12" height="14.12"/>
<rect x="874.62" y="117.99" class="st2" width="14.12" height="14.12"/>
<rect x="874.62" y="132.11" class="st3" width="14.12" height="14.12"/>
<rect x="874.62" y="146.24" class="st4" width="14.12" height="14.12"/>
<rect x="874.62" y="160.36" class="st5" width="14.12" height="14.12"/>
<rect x="874.62" y="174.49" class="st6" width="14.12" height="14.12"/>
<rect x="874.62" y="188.61" class="st7" width="14.12" height="14.12"/>
<rect x="874.62" y="202.74" class="st8" width="14.12" height="14.12"/>
<rect x="874.62" y="216.86" class="st9" width="14.12" height="14.12"/>
<rect x="893" y="89.74" class="st10" width="14.12" height="14.12"/>
<rect x="913.19" y="89.74" class="st11" width="14.12" height="14.12"/>
<rect x="913.19" y="103.86" class="st12" width="14.12" height="14.12"/>
<rect x="913.19" y="117.99" class="st13" width="14.12" height="14.12"/>
<rect x="913.19" y="132.11" class="st14" width="14.12" height="14.12"/>
<rect x="913.19" y="146.24" class="st15" width="14.12" height="14.12"/>
<rect x="913.19" y="160.36" class="st16" width="14.12" height="14.12"/>
<rect x="913.19" y="174.49" class="st17" width="14.12" height="14.12"/>
<rect x="913.19" y="188.61" class="st18" width="14.12" height="14.12"/>
<rect x="913.19" y="202.74" class="st19" width="14.12" height="14.12"/>
<rect x="913.19" y="216.86" class="st9" width="14.12" height="14.12"/>
<rect x="856.33" y="89.74" class="st20" width="14.12" height="14.12"/>
<rect x="856.33" y="103.86" class="st21" width="14.12" height="14.12"/>
<rect x="856.33" y="117.99" class="st22" width="14.12" height="14.12"/>
<rect x="856.33" y="132.11" class="st23" width="14.12" height="14.12"/>
<rect x="856.33" y="146.24" class="st24" width="14.12" height="14.12"/>
<rect x="856.33" y="160.36" class="st25" width="14.12" height="14.12"/>
<rect x="856.33" y="174.49" class="st26" width="14.12" height="14.12"/>
<rect x="856.33" y="188.61" class="st27" width="14.12" height="14.12"/>
<rect x="856.33" y="202.74" class="st28" width="14.12" height="14.12"/>
<rect x="856.33" y="216.86" class="st9" width="14.12" height="14.12"/>
<rect x="893" y="103.86" class="st29" width="14.12" height="14.12"/>
<rect x="893" y="117.99" class="st30" width="14.12" height="14.12"/>
<rect x="893" y="132.11" class="st31" width="14.12" height="14.12"/>
<rect x="893" y="146.24" class="st32" width="14.12" height="14.12"/>
<rect x="893" y="160.36" class="st33" width="14.12" height="14.12"/>
<rect x="893" y="174.49" class="st34" width="14.12" height="14.12"/>
<rect x="893" y="188.61" class="st35" width="14.12" height="14.12"/>
<rect x="893" y="202.74" class="st36" width="14.12" height="14.12"/>
<rect x="893" y="216.86" class="st37" width="14.12" height="14.12"/>
<text transform="matrix(1 0 0 1 -681.0209 430.9933)" class="st7" style="font-family:'Exo-Bold'; font-size:191.7177px;">404</text>
<g>
	<path class="st5" d="M219.53,388.75h-56.58l-4.89-12.22l41.91-89.59h26.37l-37.55,79.81h30.74V341.6l5.06-14.84h20.78v39.99h13.27
		v17.81l-13.27,4.19V416h-25.85V388.75z"/>
	<path class="st5" d="M280.48,408.31c-5.82-5.7-8.73-13.97-8.73-24.8v-62.87c0-11.18,3-19.76,8.99-25.76
		c5.99-5.99,14.35-8.99,25.06-8.99h26.9c10.71,0,18.86,3.03,24.45,9.08c5.59,6.06,8.38,14.61,8.38,25.67v62.87
		c0,10.71-2.88,18.95-8.65,24.71c-5.76,5.76-13.83,8.65-24.19,8.65h-27.07C294.68,416.87,286.3,414.02,280.48,408.31z
		 M325.71,393.64c9.31,0,13.97-4.66,13.97-13.97v-56.58c0-9.31-4.31-13.97-12.92-13.97h-15.89c-4.31,0-7.6,1.19-9.87,3.58
		c-2.27,2.39-3.41,5.85-3.41,10.39v56.41c0,9.43,4.72,14.15,14.15,14.15H325.71z"/>
	<path class="st5" d="M440.62,388.75h-56.58l-4.89-12.22l41.91-89.59h26.37l-37.55,79.81h30.74V341.6l5.07-14.84h20.78v39.99h13.27
		v17.81l-13.27,4.19V416h-25.85V388.75z"/>
</g>
<g>
	<path class="st7" d="M216.01,386.03h-56.58l-4.89-12.22l41.91-89.59h26.37l-37.55,79.81h30.74v-25.15l5.06-14.84h20.78v39.99h13.27
		v17.81l-13.27,4.19v27.24h-25.85V386.03z"/>
	<path class="st7" d="M276.96,405.59c-5.82-5.7-8.73-13.97-8.73-24.8v-62.87c0-11.18,3-19.76,8.99-25.76
		c5.99-5.99,14.35-8.99,25.06-8.99h26.9c10.71,0,18.86,3.03,24.45,9.08c5.59,6.06,8.38,14.61,8.38,25.67v62.87
		c0,10.71-2.88,18.95-8.65,24.71c-5.76,5.76-13.83,8.65-24.19,8.65H302.1C291.16,414.14,282.78,411.29,276.96,405.59z
		 M322.19,390.92c9.31,0,13.97-4.66,13.97-13.97v-56.58c0-9.31-4.31-13.97-12.92-13.97h-15.89c-4.31,0-7.6,1.19-9.87,3.58
		c-2.27,2.39-3.41,5.85-3.41,10.39v56.41c0,9.43,4.72,14.15,14.15,14.15H322.19z"/>
	<path class="st7" d="M437.1,386.03h-56.58l-4.89-12.22l41.91-89.59h26.37l-37.55,79.81h30.74v-25.15l5.07-14.84h20.78v39.99h13.27
		v17.81l-13.27,4.19v27.24H437.1V386.03z"/>
</g>
<path class="st7" d="M488.85,176.71l72.69-21.09c41.69-12.09,82.38,20.62,72.68,58.45l-15.1,58.9
	c-9.02,35.18-55.99,50.55-88.75,29.03l-57.59-37.81C436.03,240.06,445.35,189.33,488.85,176.71z"/>
<path class="st9" d="M581.4,208.1c-15.26-3.42-17.08,12.41-17.08,12.41c-5.12-8.2-1.94-14.92-1.94-14.92
	c-18.9-7.06-19.02-30.74-19.02-30.74c-10.25,8.88-27.33,3.42-27.33,3.42c-9.38,8.69-21.38,9.74-31.11,7.56l-0.01,0.01
	c0,0-2.1,33.66-1.34,44.44c0.76,10.78-1.06,39.93,28.09,44.48c29.15,4.55,57.09-19.74,58.6-38.11c0,0,11.39,3.49,17-13.21
	C590.62,212.5,581.4,208.1,581.4,208.1z"/>
<path class="st7" d="M512.42,238.62c-4.71,0-9.02,1.53-12.37,4.05c-2.72,2.98-4.35,6.8-4.35,10.95c0,1.38,0.18,2.73,0.53,4.02
	c0.62,2.32,2.75,3.92,5.16,3.92h27.14c0.75,0,1.48-0.17,2.14-0.46c0.2-0.36,0.37-0.74,0.48-1.15c0.34-1.29,0.53-2.63,0.53-4.02
	C531.67,246.37,523.05,238.62,512.42,238.62z"/>
<path class="st6" d="M459.99,392.79v42.7c0,2.26,1.84,4.1,4.1,4.1h57.42l2.11-50.9h-59.53
	C461.82,388.69,459.99,390.53,459.99,392.79z"/>
<path class="st7" d="M521.5,435.59h-57.42c-2.26,0-4.1-1.84-4.1-4.1v4.01c0,2.26,1.84,4.1,4.1,4.1h57.42l2.11-50.9h-0.17
	L521.5,435.59z"/>
<path class="st2" d="M459.99,392.79v18.9h62.67l0.96-23h-59.53C461.82,388.69,459.99,390.53,459.99,392.79z"/>
<path class="st11" d="M623.64,331.3v0.68c0,0-42.36,5.01-63.2-0.68l-35.87,34.27l-3.07,74.01h23l3.19-64.22l27.56-26.87l21.75-0.34
	l-2.85,30.52l2.85,60.92h24.14l-2.96-60.69l2.96-34.62C621.14,344.29,626.15,339.05,623.64,331.3z"/>
<polygon class="st38" points="591.98,346.63 592,346.49 570.25,346.83 542.69,373.7 539.5,437.92 544.59,437.92 547.69,375.37 
	575.25,348.5 577.8,348.46 579.47,346.83 "/>
<path class="st38" d="M623.64,331.3v0.68c0,0-3.43,0.41-8.82,0.85c1.44,6.89-2.91,11.44-2.91,11.44l-2.96,34.62l2.96,60.69h9.22
	l-2.96-60.69l2.96-34.62C621.14,344.29,626.15,339.05,623.64,331.3z"/>
<path class="st9" d="M492.02,366.31v2.87c0,0-5.25,0.38-6.01,3.04c-0.76,2.66,3,3.72,3,3.72s-0.2,11.08,11.04,10.86
	c9.34-0.23,10.63-5.39,8.65-8.81c0,0,3.24-3.44,1.62-8.09L492.02,366.31z"/>
<path class="st7" d="M508.71,377.99c0,0,3.24-3.44,1.62-8.09l-18.31-3.58v2.87c0,0-5.25,0.38-6.01,3.04c-0.76,2.66,3,3.72,3,3.72
	S498.71,366.09,508.71,377.99z"/>
<path class="st39" d="M508.71,377.99c0,0,3.24-3.44,1.62-8.09l-18.31-3.58v2.87c0,0-5.25,0.38-6.01,3.04c-0.76,2.66,3,3.72,3,3.72
	S498.71,366.09,508.71,377.99z"/>
<path class="st7" d="M584.42,393.23c-5.9-0.68-10.36-5.68-10.36-11.62v-7.03h-3.48v11.36c0,5.94,4.45,10.94,10.36,11.62
	c2.26,0.26,4.54-0.14,6.57-1.16c0.79-0.39,1.29-1.2,1.29-2.09v-1.41C587.38,393.28,585.9,393.4,584.42,393.23z"/>
<path class="st10" d="M576.2,236.45C576.2,236.45,576.19,236.45,576.2,236.45c-3.33,0.98-5.92,0.19-5.92,0.19
	c-1.52,18.37-29.45,42.66-58.6,38.11c-0.89-0.14-1.74-0.3-2.57-0.48l0,0L490.42,366l21.71,4.25l15.07-70.71
	c16.17,17.76,33.25,21.29,33.25,21.29v10.48c20.84,5.69,63.2,0.68,63.2,0.68V283.9C623.64,257.7,602.4,236.45,576.2,236.45z"/>
<path class="st29" d="M513.02,274.92c-0.45-0.06-0.9-0.1-1.35-0.17c-0.89-0.14-1.74-0.3-2.57-0.48c0,0,0,0,0,0L490.42,366
	l11.96,2.34h0l-2.62-3.58c-2.64-3.61-3.62-8.16-2.72-12.54l16-77.27C513.03,274.93,513.03,274.93,513.02,274.92z"/>
<polygon class="st40" points="525.03,286.29 535.08,278.21 550.33,284.07 550.33,274.29 535.46,275.48 526.37,278.56 "/>
<path class="st31" d="M522,275.2c0,0,0,0.01-0.01,0.01l3.04,9.34l9.19-11.63l15.94,9.74l7.67-23.76c0,0-0.01,0-0.01,0
	C548.84,267.51,535.93,274.3,522,275.2z"/>
<path class="st39" d="M522,275.2c0,0,0,0.01-0.01,0.01l3.04,9.34l9.19-11.63l15.94,9.74l7.67-23.76c0,0-0.01,0-0.01,0
	C548.84,267.51,535.93,274.3,522,275.2z"/>
<path class="st40" d="M522,303.58l-6.27,49.76l0,0l11.46-53.8c0.55,0.61,1.11,1.2,1.67,1.78l-3.36-4.45l-4.91-6.88L522,303.58z"/>
<path class="st40" d="M519.34,286.36c-0.17,1.21,3.95,9.33,7.23,16.11l0.62-2.93c1.31,1.44,2.63,2.78,3.95,4.04l1.34-7.92
	C525.51,295.65,519.34,286.36,519.34,286.36z"/>
<path class="st29" d="M623.64,331.99V283.9c0-26.2-21.24-47.45-47.45-47.45c0,0,0,0,0,0c-0.97,0.29-1.88,0.42-2.69,0.47
	c4.73,0.71,16.83,4.68,25.07,12.19c15.46,14.1,19.87,23.8,16.64,83.7C620.38,332.37,623.64,331.99,623.64,331.99z"/>
<polygon class="st40" points="560.45,320.83 566.49,270.9 568.32,332.86 560.45,331.3 "/>
<path class="st4" d="M581.4,208.1c0,0,15.66-62.51-38.46-65.62c-3.16,0.16-6.52,0.49-10.09,1.02c-0.35,0.05-0.71,0.05-1.06,0
	c-0.65-0.1-1.9-0.3-3.57-0.51c-1.49,0.17-3,0.36-4.56,0.59c0,0-6.92-1.21-15.48-1.56c-13.14,0.61-26.12,4.44-22.82,17.82
	c0.41,1.65-0.44,3.34-1.99,4.05c-3.33,1.54-8.2,4.8-7.21,10.52c0.83,4.82,10.3,10.86,21.69,12.15c6.3-0.74,12.68-3.2,18.17-8.28
	c0,0,2.9,0.93,7.02,1.4c0.1-0.08,0.2-0.15,0.3-0.23c0.85-0.7,1.97-0.96,3.04-0.7c1.26,0.3,3.15,0.69,5.38,0.94
	c4.03-0.51,8.18-1.87,11.58-4.82c0,0,0.01,1.65,0.37,4.2c2.93-0.75,5.8-2.05,8.28-4.2c0,0,0.1,21.75,16.75,29.78
	c1.32,0.64,2.16,1.97,2.06,3.44c-0.01,0.08-0.01,0.16-0.02,0.24c-0.02,0.36,0.01,0.7,0.09,1.03
	C573.38,207.81,576.76,207.06,581.4,208.1z"/>
<path class="st7" d="M543.37,174.85c-8.28,7.18-21.02,4.99-25.61,3.88c-1.07-0.26-2.2,0-3.05,0.7c-0.34,0.28-0.68,0.53-1.02,0.79
	c0.87,0.32,1.82,0.68,2.52,0.99c0,0,13.35,6.57,20.45,2.22c0,0-0.25,6.14,10.39,9.71c0.46,0.15,0.92,0.23,1.37,0.24
	C543.42,184.55,543.37,174.85,543.37,174.85z"/>
<circle class="st7" cx="519.95" cy="225.08" r="3.74"/>
<path class="st7" d="M570.28,236.64c-2.32-1.48-5.42-0.51-6.47,2.03c-2.84,6.93-9.46,19.23-22.35,25.14
	c-18.52,8.5-43.56,13.54-56.16-15.06c2.35,11.32,8.61,23.22,26.37,25.99C540.82,279.31,568.76,255.01,570.28,236.64L570.28,236.64z"
	/>
<path class="st7" d="M492.2,212.46c0.04-0.58,0.65-1.08,1.47-1.35c2.55-0.85,10.1-3.53,16.98,0.05c2.86,1.49-5.72,6.86-10.07,5.73
	C496.85,215.92,492.07,214.39,492.2,212.46z"/>
<path class="st7" d="M525.06,211.96c0.04-0.64,0.65-1.19,1.47-1.49c2.55-0.94,9.74-3.03,16.98,0.06c9.01,3.85-5.72,7.59-10.07,6.34
	C529.71,215.8,524.93,214.09,525.06,211.96z"/>
<path class="st7" d="M526.26,188.66c0,0-0.15,10.32,8.27,11.31c8.43,0.99,16.56-7.06,10.27-5.97
	C534.89,195.72,526.26,188.66,526.26,188.66z"/>
<path class="st7" d="M507.49,191.4c0,0,0.14,9.13-7.31,10c-7.45,0.87-14.64-6.24-9.08-5.28C499.86,197.64,507.49,191.4,507.49,191.4
	z"/>
<g>
	<path class="st7" d="M587.28,223.43c3.34-10.93-5.88-15.33-5.88-15.33c-9.77-2.19-14.03,3.52-15.83,7.9c0,0,5.41-5.44,11.12-3.24
		c4.55,1.94,7.56,15.3-6.41,23.87C570.28,236.64,581.66,240.13,587.28,223.43z"/>
</g>
<path class="st39" d="M581.4,208.1c-15.26-3.42-17.08,12.41-17.08,12.41c-5.12-8.2-1.94-14.92-1.94-14.92
	c-18.9-7.06-19.02-30.74-19.02-30.74c-10.25,8.88-27.33,3.42-27.33,3.42c-9.38,8.69-21.38,9.74-31.11,7.56l-0.01,0.01
	c0,0-2.1,33.66-1.34,44.44c0.76,10.78-1.06,39.93,28.09,44.48c29.15,4.55,57.09-19.74,58.6-38.11c0,0,11.39,3.49,17-13.21
	C590.62,212.5,581.4,208.1,581.4,208.1z"/>
<path class="st39" d="M576.2,236.45C576.2,236.45,576.19,236.45,576.2,236.45c-3.33,0.98-5.92,0.19-5.92,0.19
	c-1.52,18.37-29.45,42.66-58.6,38.11c-0.89-0.14-1.74-0.3-2.57-0.48l0,0L490.42,366l21.71,4.25l15.07-70.71
	c16.17,17.76,33.25,21.29,33.25,21.29v10.48c20.84,5.69,63.2,0.68,63.2,0.68V283.9C623.64,257.7,602.4,236.45,576.2,236.45z"/>
<g>
	<g>
		<path class="st41" d="M632.88,289.66c0.22-1.82,0.36-3.64,0.4-5.45"/>
		<path class="st42" d="M633.07,277.59c-0.58-6.44-2.27-12.64-4.94-18.28"/>
		<path class="st43" d="M627.76,258.57c-5.26-10.62-14.08-19.13-25.75-23.25"/>
		<path class="st41" d="M601.22,235.05c-1.7-0.57-3.46-1.04-5.28-1.41"/>
	</g>
</g>
<path class="st39" d="M623.64,331.3v0.68c0,0-42.36,5.01-63.2-0.68l-35.87,34.27l-3.07,74.01h23l3.19-64.22l27.56-26.87l21.75-0.34
	l-2.85,30.52l2.85,60.92h24.14l-2.96-60.69l2.96-34.62C621.14,344.29,626.15,339.05,623.64,331.3z"/>
<polyline class="st10" points="566.48,270.61 569.56,374.57 591.19,374.57 590.51,294.07 "/>
<polyline class="st39" points="566.48,270.61 569.56,374.57 591.19,374.57 590.51,294.07 "/>
<path class="st39" d="M570.58,374.57v11.36c0,5.94,4.45,10.94,10.36,11.62l0,0c2.26,0.26,4.54-0.14,6.57-1.16l0,0
	c0.79-0.39,1.29-1.2,1.29-2.09v-19.74H570.58z"/>
<path class="st39" d="M492.02,366.31v2.87c0,0-5.25,0.38-6.01,3.04c-0.76,2.66,3,3.72,3,3.72s-0.2,11.08,11.04,10.86
	c9.34-0.23,10.63-5.39,8.65-8.81c0,0,3.24-3.44,1.62-8.09L492.02,366.31z"/>
<path class="st10" d="M522.65,439.59l-11.76,8.91c-0.44,0.34-0.71,0.89-0.71,1.47l0,0c0,0.99,0.74,1.8,1.66,1.8h32.66
	c0.82,0,1.58-0.42,2.07-1.13v0c0.52-0.76,0.65-1.77,0.34-2.65l-2.97-8.4H522.65z"/>
<path class="st29" d="M546.91,448l-2.97-8.4h-4.42l2.38,6.73c0.31,0.89,0.19,1.89-0.34,2.65c-0.49,0.71-1.25,1.13-2.07,1.13h-29.29
	c0.06,0.93,0.77,1.67,1.65,1.67h32.66c0.82,0,1.58-0.42,2.07-1.13C547.1,449.89,547.23,448.88,546.91,448z"/>
<path class="st39" d="M522.65,439.59l-11.76,8.91c-0.44,0.34-0.71,0.89-0.71,1.47l0,0c0,0.99,0.74,1.8,1.66,1.8h32.66
	c0.82,0,1.58-0.42,2.07-1.13v0c0.52-0.76,0.65-1.77,0.34-2.65l-2.97-8.4H522.65z"/>
<path class="st10" d="M600.26,439.59l-12.76,8.91c-0.42,0.34-0.68,0.89-0.68,1.47l0,0c0,0.99,0.71,1.8,1.59,1.8h31.12
	c0.78,0,1.51-0.42,1.97-1.13v0c0.5-0.76,0.62-1.77,0.32-2.65l-2.83-8.4H600.26z"/>
<path class="st29" d="M621.83,448l-2.83-8.4h-5.51l1.96,5.82c0.3,0.89,0.18,1.89-0.32,2.65c-0.46,0.71-1.2,1.13-1.97,1.13h-26.17
	c-0.1,0.24-0.16,0.51-0.16,0.78c0,0.99,0.71,1.8,1.59,1.8h31.12c0.78,0,1.51-0.42,1.97-1.13C622.01,449.89,622.13,448.88,621.83,448
	z"/>
<path class="st39" d="M600.26,439.59l-12.76,8.91c-0.42,0.34-0.68,0.89-0.68,1.47l0,0c0,0.99,0.71,1.8,1.59,1.8h31.12
	c0.78,0,1.51-0.42,1.97-1.13v0c0.5-0.76,0.62-1.77,0.32-2.65l-2.83-8.4H600.26z"/>
<path class="st39" d="M459.99,392.79v42.7c0,2.26,1.84,4.1,4.1,4.1h57.42l2.11-50.9h-59.53
	C461.82,388.69,459.99,390.53,459.99,392.79z"/>
<line class="st39" x1="464.15" y1="411.69" x2="488.29" y2="411.69"/>
<line class="st39" x1="510.79" y1="411.69" x2="520.63" y2="411.69"/>
<path class="st10" d="M501.08,416.17h-4.86c-2.08,0-3.76-1.68-3.76-3.76l0,0c0-2.08,1.68-3.76,3.76-3.76h4.86
	c2.08,0,3.76,1.68,3.76,3.76l0,0C504.84,414.49,503.16,416.17,501.08,416.17z"/>
<path class="st29" d="M501.08,408.66h-3.76c2.08,0,3.76,1.68,3.76,3.76c0,2.08-1.68,3.76-3.76,3.76h3.76c2.08,0,3.76-1.68,3.76-3.76
	C504.84,410.34,503.16,408.66,501.08,408.66z"/>
<path class="st39" d="M501.08,416.17h-4.86c-2.08,0-3.76-1.68-3.76-3.76l0,0c0-2.08,1.68-3.76,3.76-3.76h4.86
	c2.08,0,3.76,1.68,3.76,3.76l0,0C504.84,414.49,503.16,416.17,501.08,416.17z"/>
<path class="st41" d="M444.55,234.15c0.22-5.15-3.83-9.51-9.06-9.74c-4.48-0.19-8.36,2.73-9.52,6.81c-0.55-0.09-1.11-0.17-1.69-0.19
	c-6.2-0.27-11.4,3.69-11.63,8.84c-0.18,4.16,2.95,7.82,7.42,9.22c-0.19,6.59,5.02,12.13,11.71,12.42
	c6.76,0.29,12.47-4.87,12.76-11.54"/>
<line class="st41" x1="450.64" y1="237.55" x2="463.39" y2="239.68"/>
<line class="st41" x1="462.63" y1="249.24" x2="451.55" y2="249.24"/>
<path class="st44" d="M489.58,195.35c0,0,11.01-0.61,15.76-4.67c4.01-3.43,2.08,4.82-1.41,6.79c-3.49,1.97-10.55,1.44-12.6,0.84
	S486.7,196.33,489.58,195.35z"/>
<path class="st44" d="M543.44,195.37c0,0-11.01-0.64-15.75-4.71c-4-3.44-2.09,4.81,1.39,6.8s10.55,1.47,12.6,0.87
	C543.74,197.72,546.32,196.37,543.44,195.37z"/>
<path class="st41" d="M519.95,188.21c0,0,0.53,7.06,5.16,9.87"/>
<path class="st41" d="M511.37,190.26c0,0-0.61,5.54-4.18,6.83"/>
<g>
	<path class="st45" d="M493.65,211.36c4.72,5.52,13.25,5.52,17.97,0"/>
</g>
<g>
	<path class="st45" d="M526.73,211.36c4.72,5.52,13.25,5.52,17.97,0"/>
</g>
<path class="st31" d="M517.95,235.95c-4.71,0-9.02,1.53-12.37,4.05c-2.72,2.98-4.35,6.8-4.35,10.95c0,1.38,0.18,2.73,0.53,4.02
	c0.62,2.32,2.75,3.92,5.16,3.92h27.14c0.75,0,0.61-1.96,1.28-2.25c0.2-0.36,0.55-0.86,0.66-1.27c0.34-1.29,0.95-0.96,0.95-2.34
	C536.95,243.46,528.58,235.95,517.95,235.95z"/>
<path class="st10" d="M514.86,235.95c-4.71,0-9.02,1.53-12.37,4.05c-2.72,2.98-4.35,6.8-4.35,10.95c0,1.38,0.18,2.73,0.53,4.02
	c0.62,2.32,2.75,3.92,5.16,3.92h27.14c0.75,0,1.48-0.17,2.14-0.46c0.2-0.36,0.37-0.74,0.48-1.15c0.34-1.29,0.53-2.63,0.53-4.02
	C534.11,243.69,525.49,235.95,514.86,235.95z"/>
<path class="st39" d="M530.96,258.88c2.4,0,4.53-1.6,5.16-3.92c0.34-1.29,0.53-2.63,0.53-4.02c0-9.56-8.62-17.31-19.25-17.31
	c-10.63,0-19.25,7.75-19.25,17.31c0,1.38,0.18,2.73,0.53,4.02c0.62,2.32,2.75,3.92,5.16,3.92H530.96z"/>
<path class="st32" d="M530.96,258.88c1.16,0,2.25-0.38,3.15-1.02c-3.32-5.22-9.55-8.74-16.72-8.74c-7.16,0-13.4,3.52-16.72,8.74
	c0.89,0.65,1.99,1.02,3.15,1.02H530.96z"/>
<path class="st31" d="M501.14,257.18h24.73c0.01,0,0.02,0,0.03,0c1.65-0.01,2.5-2.05,1.4-3.28c-1.6-1.79-3.59-3.29-5.85-4.39
	c-1.31-0.25-2.67-0.39-4.07-0.39C510.55,249.11,504.56,252.34,501.14,257.18z"/>
<path class="st39" d="M530.96,258.88c1.16,0,2.25-0.38,3.15-1.02c-3.32-5.22-9.55-8.74-16.72-8.74c-7.16,0-13.4,3.52-16.72,8.74
	c0.89,0.65,1.99,1.02,3.15,1.02H530.96z"/>
<path class="st9" d="M534.08,242.34c-3.32-5.19-9.54-8.7-16.68-8.7s-13.36,3.5-16.68,8.7H534.08z"/>
<path class="st7" d="M517.39,233.64c-0.8,0-1.59,0.05-2.36,0.14c6.14,0.68,11.37,3.95,14.33,8.56h4.72
	C530.76,237.14,524.54,233.64,517.39,233.64z"/>
<path class="st39" d="M534.08,242.34c-3.32-5.19-9.54-8.7-16.68-8.7s-13.36,3.5-16.68,8.7H534.08z"/>
<path class="st39" d="M527.2,299.54c0,0-5.73-6.72-7.86-13.55"/>
<path class="st2" d="M536.76,142.38c-3.87,0.09-8.04,0.45-12.55,1.11c-0.35,0.05-0.71,0.05-1.06,0
	c-5.45-0.88-52.39-7.76-46.43,16.34c0.41,1.65-0.44,3.34-1.99,4.05c-3.33,1.54-8.2,4.8-7.21,10.52c1.45,8.34,28.72,20.37,47.18,5.04
	c0.85-0.7,1.97-0.96,3.04-0.7c4.58,1.11,17.33,3.3,25.61-3.88c0,0,0.1,21.75,16.75,29.78c1.32,0.64,2.16,1.97,2.06,3.44
	c-0.01,0.08-0.01,0.16-0.02,0.24c-0.16,2.4,2.1,4.3,4.42,3.65c0.09-0.02,0.17-0.04,0.26-0.06c0.79-0.14,1.51-0.47,2.09-1.02
	c0.97-0.95,2.15-1.77,3.57-2.35c1.36-0.56,2.46-1.64,2.87-3.05c3.49-12.05,2.97-29.91-5.26-44.41
	C563.32,149.11,550.48,142.06,536.76,142.38z"/>
<path class="st39" d="M477.66,162.78c0,0-11.61,3.07-10.13,11.61c1.48,8.54,30.06,20.95,48.51,3.87c0,0,17.08,5.47,27.33-3.42
	c0,0,0.11,23.68,19.02,30.74c0,0-3.19,6.72,1.94,14.92c0,0,1.82-15.83,17.08-12.41c0,0,19.09-76.22-57.73-64.52
	C523.67,143.58,466.43,133.55,477.66,162.78z"/>
<path class="st41" d="M580.42,219.56c0,0,0.23,8.72-6.74,12.92"/>
<path class="st41" d="M519.22,216.44l-0.32,3.13c-0.17,1.67-1.17,3.09-2.55,4.04c-0.44,0.3-0.77,0.77-0.77,1.48
	c0,2.13,3.04,3.04,3.04,3.04"/>
<g>
	<polygon class="st21" points="543.61,279.71 534.42,274.09 530.66,278.85 530.66,278.85 533.12,285.35 529.56,357.99 
		538.44,366.19 546.86,358.22 542.82,284.49 	"/>
</g>
<path class="st22" d="M542.82,284.49l0.79-4.79l-3.34-2.04l-0.6,3.67l3.78,68.89c0.17,3.07-1.02,6.05-3.25,8.17l-4.91,4.64
	l-5.71-5.27l-0.01,0.23l8.88,8.2l8.43-7.97L542.82,284.49z"/>
<path class="st20" d="M543.61,279.71l-9.19-5.61l-3.76,4.76l2.46,6.5c0,0,6.27,0.92,9.7-0.85L543.61,279.71z"/>
<g>
	<polygon class="st39" points="543.61,279.71 534.42,274.09 530.66,278.85 530.66,278.85 533.12,285.35 529.56,357.99 
		538.44,366.19 546.86,358.22 542.82,284.49 	"/>
</g>
<path class="st39" d="M533.12,285.35c0,0,5.21,1.37,9.7-0.85"/>
<path class="st46" d="M482.28,388.69v-8.13c0-2.4,1.46-4.34,3.25-4.34h23.5c1.79,0,3.25,1.94,3.25,4.34v8.13"/>
<path class="st7" d="M489.02,375.94c0,0-0.2,11.08,11.04,10.86c9.34-0.23,10.63-5.39,8.65-8.81
	C498.71,366.09,489.02,375.94,489.02,375.94z"/>
<path class="st9" d="M505.81,383.54c1.95-1.85,1.91-4.4,0.77-6.37c-1.9-2.26-3.79-3.74-5.61-4.64c-6.35-1.78-11.36,2.83-11.9,3.36
	c0.56,3.19,2.7,8.96,10.84,8.8C502.45,384.62,504.37,384.19,505.81,383.54z"/>
<path class="st39" d="M489.02,375.94c0,0-0.2,11.08,11.04,10.86c9.34-0.23,10.63-5.39,8.65-8.81
	C498.71,366.09,489.02,375.94,489.02,375.94z"/>
<line class="st47" x1="557.03" y1="378.4" x2="564.38" y2="372.11"/>
<line class="st41" x1="645.47" y1="451.78" x2="486.03" y2="451.78"/>
<line class="st48" x1="612.55" y1="458.08" x2="545.37" y2="458.08"/>
<text transform="matrix(1 0 0 1 267.2456 250.0835)" class="st31 st49 st50">OOPS!</text>
<line class="st51" x1="179.6" y1="299.54" x2="154.53" y2="351.38"/>
<polyline class="st51" points="194.66,395.84 208.35,395.84 208.35,408.66 "/>
<line class="st51" x1="402.17" y1="299.54" x2="377.11" y2="351.38"/>
<polyline class="st51" points="417.23,395.84 430.92,395.84 430.92,408.66 "/>
<path class="st51" d="M303.2,352.47v-28.81c0-4.46,3.62-8.08,8.08-8.08h18.33"/>
<path class="st51" d="M370.9,385.45v10.48c0,14.59-11.83,26.42-26.42,26.42h0"/>
<circle class="st52" cx="367.91" cy="221.34" r="3.92"/>
<circle class="st53" cx="258.65" cy="254" r="7.87"/>
<polygon class="st54" points="307.11,242.19 303.76,244.01 300.51,242.02 300.61,238.22 303.96,236.4 307.21,238.38 "/>
<polygon class="st54" points="282.54,242.19 279.19,244.01 275.94,242.02 276.04,238.22 279.39,236.4 282.64,238.38 "/>
<path class="st55" d="M1323.04,313.79c0,0-140.51,23.93-205.35,186.59s-89.16,139.47-264.73-13.93s-159.1,110.36-367.66,84.77
	C276.74,545.64,25.66,355.81-97.24,561.01s1230.97,710.78,1444.55,385S1639.25,161.45,1323.04,313.79z"/>
<path class="st55" d="M1349.04,313.79c0,0-140.51,23.93-205.35,186.59s-89.16,139.47-264.73-13.93s-159.1,110.36-367.66,84.77
	C302.74,545.64,51.66,355.81-71.24,561.01s1230.97,710.78,1444.55,385S1665.25,161.45,1349.04,313.79z"/>
</svg>

@endif

{{-- @endforeach --}}

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

