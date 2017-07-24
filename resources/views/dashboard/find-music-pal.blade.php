@extends('layouts.dashboard')
@section('optional_class')
    be-aside
@endsection

@section('content')
    <div class="be-content be-no-padding">
        <aside class="page-aside">
            <div class="be-scroller">
                <div class="aside-content">
                    <div class="content">
                        <div class="aside-header">
                            <button data-target=".aside-nav" data-toggle="collapse" type="button" class="navbar-toggle"><span class="icon mdi mdi-caret-down"></span></button><span class="title">Select Filter</span>
                            <p class="description">Service description</p>
                        </div>
                    </div>
                    <div class="aside-nav collapse">
                        <div class="content">
                            <div class="form-group">
                                <label>Origin
                                    <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group input-group-sm date datetimepicker">
                                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                                    </div>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Destination
                                    <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group input-group-sm date datetimepicker">
                                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                                    </div>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>People</label>
                                <input type="text" value="" class="bslider form-control">
                            </div>
                            <div class="form-group">
                                <label>Payment method</label>
                                <ul class="be-option-buttons">
                                    <li><a href="#" class="be-option-button"><i class="icon mdi mdi-favorite-outline"></i><span>Credit Card</span></a></li>
                                    <li><a href="#" class="be-option-button"><i class="icon mdi mdi-mood"></i><span>Cash</span></a></li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label>Place</label>
                                <select class="select2 input-sm">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Extras</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="be-checkbox">
                                            <input id="check1" type="checkbox" checked="">
                                            <label for="check1">First Class</label>
                                        </div>
                                        <div class="be-checkbox">
                                            <input id="check2" type="checkbox">
                                            <label for="check2">Bell boy</label>
                                        </div>
                                        <div class="be-checkbox">
                                            <input id="check3" type="checkbox">
                                            <label for="check3">Pillow</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="be-checkbox">
                                            <input id="check4" type="checkbox">
                                            <label for="check4">Lunch</label>
                                        </div>
                                        <div class="be-checkbox">
                                            <input id="check5" type="checkbox">
                                            <label for="check5">Wifi</label>
                                        </div>
                                    </div>
                                </div>
                            </div><a class="btn btn-lg btn-primary btn-block">Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="main-content container-fluid">
            <div class="be-aside-header">
                <div class="row">
                    <div class="col-md-6">
                        <div class="be-aside-header-title">Best Prices for You <span class="new-messages">(2 new sales)</span></div>
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
                        <button data-toggle="dropdown" type="button" class="btn btn-default dropdown-toggle">Order by <span class="caret"></span></button>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#">Date</a></li>
                            <li><a href="#">Price (lower to higher)</a></li>
                            <li><a href="#">Price (higher to lower)</a></li>
                            <li><a href="#">Items</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default"><i class="icon mdi mdi-view-list"></i></button>
                        <button type="button" class="btn btn-default"><i class="icon mdi mdi-view-module"></i></button>
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
                            <h4 class="be-booking-desc-title">Basic</h4><span class="be-booking-desc-details">Lorem ipsum dolor sit amet, Pellen tesque sit amet odio Integer.</span>
                        </div>
                        <div class="be-booking-promo-price">
                            <div class="be-booking-promo-amount"><span class="currency">$</span><span class="price">5</span><span class="frecuency">/mo</span></div><a href="#" class="btn btn-primary be-booking-btn-price">Get Started</a>
                        </div>
                    </div>
                    <div class="be-booking-promo be-booking-promo-success">
                        <div class="be-booking-desc">
                            <h4 class="be-booking-desc-title">Pro</h4><span class="be-booking-desc-details">Lorem ipsum dolor sit amet, Pellen tesque sit amet odio Integer.</span>
                        </div>
                        <div class="be-booking-promo-price">
                            <div class="be-booking-promo-amount"><span class="currency">$</span><span class="price">18</span><span class="frecuency">/mo</span></div><a href="#" class="btn btn-success be-booking-btn-price">Get Started</a>
                        </div>
                    </div>
                    <div class="be-booking-promo be-booking-promo-soldout">
                        <div class="be-booking-desc">
                            <h4 class="be-booking-desc-title">Deluxe</h4><span class="be-booking-desc-details">Lorem ipsum dolor sit amet, Pellen tesque sit amet odio Integer.</span>
                        </div>
                        <div class="be-booking-promo-price">
                            <div class="be-booking-promo-amount"><span class="currency">$</span><span class="price">15</span><span class="frecuency">/mo</span></div>
                        </div><span class="be-soldout-title">Sold Out</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="be-booking-promo be-booking-promo-warning">
                        <div class="be-booking-desc">
                            <h4 class="be-booking-desc-title">Premium</h4><span class="be-booking-desc-details">Lorem ipsum dolor sit amet, Pellen tesque sit amet odio Integer.</span>
                        </div>
                        <div class="be-booking-promo-price">
                            <div class="be-booking-promo-amount"><span class="currency">$</span><span class="price">12</span><span class="frecuency">/mo</span></div><a href="#" class="btn btn-warning be-booking-btn-price">Get Started</a>
                        </div>
                    </div>
                    <div class="be-booking-promo be-booking-promo-danger be-booking-promo-big">
                        <div class="be-booking-desc">
                            <h4 class="be-booking-desc-title">Premium</h4><span class="be-booking-desc-details">Lorem ipsum dolor sit amet, Pellen tesque sit amet odio Integer.</span>
                        </div>
                        <div class="be-booking-promo-price">
                            <div class="be-booking-promo-amount"><span class="currency">$</span><span class="price">20</span><span class="frecuency">/mo</span></div><a href="#" class="btn btn-danger be-booking-btn-price">Get Started</a>
                        </div><span class="be-promo-big-title icon mdi mdi-fire"></span>
                    </div>
                    <div class="be-booking-promo be-booking-promo-primary be-booking-promo-color">
                        <div class="be-booking-desc">
                            <h4 class="be-booking-desc-title">Team</h4><span class="be-booking-desc-details">Lorem ipsum dolor sit amet, Pellen tesque sit amet odio Integer.</span>
                        </div>
                        <div class="be-booking-promo-price">
                            <div class="be-booking-promo-amount"><span class="currency">$</span><span class="price">25</span><span class="frecuency">/mo</span></div><a href="#" class="btn btn-primary btn-outline be-booking-btn-price">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection