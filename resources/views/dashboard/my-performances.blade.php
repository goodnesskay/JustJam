@extends('layouts.dashboard')

@section('content')
    <div class="be-content be-no-padding">
        <div class="main-content container-fluid">
            <div class="be-aside-header">
                <div class="row">
                    <div class="col-md-6">
                        <div class="be-aside-header-title">My Performances <span class="new-messages"></span></div>
                    </div>
                    <div class="col-md-6">
                        <div class="be-aside-header-search">
                            <div class="input-group input-search input-group-sm">
                                <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                      <button type="button" class="btn btn-default"><i class="icon mdi mdi-search"></i></button></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="be-aside-header-filters">
                <div class="be-aside-header-filters-left">
                    <div class="btn-group">
                        <a href="{{ url('add-performance') }}" class="btn btn-primary ">
                            <i class="mdi mdi-plus"></i> Add Performance
                        </a>
                    </div>
                </div>
                <div class="be-aside-header-filters-right"><span class="be-aside-pagination-indicator">1-50 of 253</span>
                    <div class="btn-group be-aside-pagination-nav">
                        <button type="button" class="btn btn-default"><i class="mdi mdi-chevron-left"></i></button>
                        <button type="button" class="btn btn-default"><i class="mdi mdi-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="row be-booking-promos">
                <div class="col-lg-6">
                    <div class="be-booking-promo">
                        <div class="be-booking-desc">
                            <h4 class="be-booking-desc-title">Performance Title</h4><span class="be-booking-desc-details">Lorem ipsum dolor sit amet, Pellen tesque sit amet odio Integer.</span>
                        </div>
                        <div class="be-booking-promo-price">
                            <div class="be-booking-promo-amount"><span class="currency">date here</span></div><a href="#" class="btn btn-primary be-booking-btn-price">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
