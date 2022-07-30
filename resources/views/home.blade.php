@extends('layouts.app')

@section('content')

       
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    {{-- @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif --}}
                    @if ($message= session('error'))
                    @foreach($message as $messages)
                    <div class="alert alert-danger" role="alert">
                             {{$messages}} 
                    </div>
                    @endforeach
                    @endif  

                    <div class="container">
                        <h2 style="text-align: center">Create Your Profile</h2>
                        <br>
                        <div class="side-app">
                     <!-- ROW-1 OPEN -->
                     <div class="row">
                        
                        
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Your Details</h3>
                                </div>
                                <form action="{{route('profile.store')}}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputname">Your Name</label>
                                                <input type="text" class="form-control" id="exampleInputname" placeholder="Your Name" value="{{auth()->user()->name}}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputname1">Phone Number</label>
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12 mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-brands fa-facebook "></i>
                                                </div>
                                                <input type="text" name="facebook" class="form-control" placeholder="Your Facebook username" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12  mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-brands fa-whatsapp"></i>                                                </div>
                                                <input type="text" name="Whatsapp" class="form-control" placeholder="Your whatsapp Number" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12  mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-brands fa-linkedin "></i>
                                                </div>
                                                <input type="text" name="linkedin" class="form-control" placeholder="Your linkedin username" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12  mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-brands fa-snapchat"></i>
                                                </div>
                                                <input type="text" name="Snapchat" class="form-control" placeholder="Your Snapchat" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12  mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-brands fa-github "></i>
                                                </div>
                                                <input type="text" name="github" class="form-control" placeholder="Your github username" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12  mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </div>
                                                <input type="text" name="twitter" class="form-control" placeholder="Your twitter username" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12  mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-solid fa-globe"></i>
                                                </div>
                                                <input type="text" name="web1" class="form-control" placeholder="Your web url" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12  mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="fa-solid fa-globe"></i></div>
                                                <input type="text" name="web2" class="form-control" placeholder="Your web url" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-lg-6 col-md-12  mb-2">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    Blood type <br>
                                                </div>
                                                    <select name="blood_type" required autocomplete="blood_type">
                                                        <option value="Unknown">Unknown</option>
                                                        <option value="A Positive">A Positive</option>
                                                        <option value="A Negative">A Negative</option>
                                                        <option value="B Positive">B Positive</option>
                                                        <option value="B Negative">B Negative</option>
                                                        <option value="AB Positive">AB Positive</option>
                                                        <option value="AB Negative">AB Negative</option>
                                                        <option value="O Positive">O Positive</option>
                                                        <option value="O Negative">O Negative</option>
                                                    </select> 
                                                </div>
                                        </div>
                                    </div>
                                   
                                <div class="card-footer text-end">
                                    <input href="javascript:void(0)" type="submit" value="Save" class="btn btn-success my-1"/>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                    </div>
                    </div>


@endsection
