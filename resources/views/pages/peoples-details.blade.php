@extends('layouts.master')
@section('content')



<div class="container">

    <!-- People Widget -->
    <div class="card">
        <div class="card-body">
            <div class="doctor-widget">
                <div class="doc-info-left">
                    <div class="doctor-img">
                        <img src="{{asset('assets/img/patients/patient.jpg')}}" class="img-fluid" alt="User Image">
                    </div>
                    <div class="doc-info-cont">
                        <h4 class="doc-name">{{$person->name}}</h4>
                        <div class="clinic-details">
                            <ul>
                                <li><b>Height:</b> {{$person->height}}</li><br>
                                <li><b>Mass:</b> {{$person->mass}}</li><br>
                                <li><b>Hair Color:</b> {{$person->hair_color}}</li><br>
                                <li><b>Gender:</b> {{$person->gender}}</li><br>
                            </ul>

                        </div>



                    </div>
                </div>
                <div class="doc-info-right">
                    
                    <ul>
                        <li><b>Gender:</b> {{$person->gender}}</li>
                        <li><b>Skin Color:</b> {{$person->skin_color}}</li>
                        <li><b>Eye Color:</b> {{$person->eye_color}}</li>
                        <li><b>Birth Year:</b> {{$person->birth_year}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /People Widget -->

    <!-- People Details Tab -->
    <div class="card">
        <div class="card-body pt-0">

            <!-- Tab Menu -->
            <nav class="user-tabs mb-4">
                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#films" data-toggle="tab">Films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#starships" data-toggle="tab">Star Ships</a>
                    </li>
                    
                </ul>
            </nav>
            <!-- /Tab Menu -->

            <!-- Tab Content -->
            <div class="tab-content pt-0">

                <!-- Overview Content -->
                <div role="tabpanel" id="films" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-md-12 col-lg-9">

                           

                            <!-- Education Details -->
                            <div class="widget education-widget">
                                <h4 class="widget-title">Films</h4>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        @foreach ($films as $film)  
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a  class="name">{{$film}}</a>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- /Education Details -->

                        </div>
                    </div>
                </div>
                <!-- /Overview Content -->

                <!-- Locations Content -->
                <div role="tabpanel" id="starships" class="tab-pane fade">

                    <div class="row">
                        <div class="col-md-12 col-lg-9">

                           

                            <!-- Education Details -->
                            <div class="widget education-widget">
                                <h4 class="widget-title">Star Ships</h4>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        @foreach ($starships as $starship)  
                                        <li>
                                            <div class="experience-user">
                                                <div class="before-circle"></div>
                                            </div>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <a  class="name">{{$starship}}</a>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- /Education Details -->

                        </div>
                    </div>

                </div>
                <!-- /Locations Content -->

                

            </div>
        </div>
    </div>
    <!-- /People Details Tab -->

</div>


@endsection