@extends('dashboard.layout')

@section('section')
<h3><i class="fa-solid fa-user-group me-3"></i>Evenement</h3>
<div>
    <a href="{{ route('evenement.create') }}"> Ajouter un Evenement</a>
</div>

@foreach($datas as $data)
<div class="event-list">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
            <div class="main-card mt-4">
                <div class="contact-list">
                    <div class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                        <div class="d-md-flex align-items-center event-top-info">
                            <div class="card-event-img">
                                <img src="{{ Asset('asset/images/event-imgs/img-7.jpg') }}" alt="">
                            </div>
                            <div class="card-event-dt">
                                <h5>{{ $data->nom }}</h5>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="option-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            <div class="dropdown-menu dropdown-menu-right" style="">
                                <a href="{{ route('evenement.edit',$data->id) }}" class="dropdown-item delete-event"><i class="fa-solid fa-plus me-3"></i>Ajouter un ticket</a>
                                <a href="{{ route('evenement.edit',$data->id) }}" class="dropdown-item delete-event"><i class="fa-solid fa-pen me-3"></i>Modifier</a>
                                <a href="#" class="dropdown-item delete-event"><i class="fa-solid fa-trash-can me-3"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                        <div class="icon-box ">
                            <span class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <p>lieu</p>
                            <h6 class="coupon-status">{{ $data->lieu }}</h6>
                        </div>
                        <div class="icon-box">
                            <span class="icon">
                                <i class="fa-solid fa-calendar-days"></i>
                            </span>
                            <p>Date</p>
                            <h6 class="coupon-status">{{ $data->date }}</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
