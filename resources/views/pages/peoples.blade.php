@extends('layouts.master')
@section('content')


<div class="row row-grid">
    @foreach ( $persons as $key=> $person)
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="card widget-profile pat-widget-profile">
                <div class="card-body">
                    <div class="pro-widget-content">
                        <div class="profile-info-widget">
                            <a href="" class="booking-doc-img">
                                <img src="assets/img/patients/patient.jpg" alt="User Image">
                            </a>
                            <div class="profile-det-info">
                                <h3><a href=""> {{$person->name}}</a></h3>
                                
                                <div class="patient-details">
                                    <h5><b>Gender :</b> {{$person->gender}}</h5>
                                    <h5 class="mb-0"><b>Home World :</b> {{$homeworlds[$key]}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="patient-info">
                        <ul>
                            <li>Films <span>{{count($person->films)}}</span></li>
                            <li>Star ships <span>{{count($person->starships)}}</span></li>
                        </ul>
                    </div>
                    <div class="patient-info text-center">
                        <a href="{{route('people.showDetails',GetIdFromUrl($person->url))}}" class="btn btn-sm bg-success-light">
                            <i class="fa fa-link" aria-hidden="true"></i> Load More Information (Films and Star ships) 
                        </a>
                    </div>
                   
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
