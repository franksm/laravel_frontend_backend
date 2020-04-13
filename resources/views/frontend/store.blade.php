@extends('frontend.layouts.master')
@section('title','Store')
@section('nav_store', 'active');
@section('content')
    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">We're Open</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Sunday
                  @if ($store->sun_open == $store->sun_close)
                    <span class="ml-auto">Closed</span>
                  @else
                <span class="ml-auto">{{ date('g:i A', strtotime($store->sun_open)) }} to {{ date('g:i A', strtotime($store->sun_close)) }}</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Monday
                  @if ($store->mon_open == $store->mon_close)
                    <span class="ml-auto">Closed</span>
                  @else
                    <span class="ml-auto">{{ date('g:i A', strtotime($store->mon_open)) }} to {{ date('g:i A', strtotime($store->mon_close)) }}</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Tuesday
                  @if ($store->tue_open == $store->tue_close)
                    <span class="ml-auto">Closed</span>
                  @else
                    <span class="ml-auto">{{ date('g:i A', strtotime($store->tue_open)) }} to {{ date('g:i A', strtotime($store->tue_close)) }}</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Wednesday
                  @if ($store->wed_open == $store->wed_close)
                    <span class="ml-auto">Closed</span>
                  @else
                    <span class="ml-auto">{{ date('g:i A', strtotime($store->wed_open)) }} to {{ date('g:i A', strtotime($store->wed_close)) }}</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Thursday
                  @if ($store->thu_open == $store->thu_close)
                    <span class="ml-auto">Closed</span>
                  @else
                    <span class="ml-auto">{{ date('g:i A', strtotime($store->thu_open)) }} to {{ date('g:i A', strtotime($store->thu_close)) }}</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Friday
                  @if ($store->fri_open == $store->fri_close)
                    <span class="ml-auto">Closed</span>
                  @else
                    <span class="ml-auto">{{ date('g:i A', strtotime($store->fri_open)) }} to {{ date('g:i A', strtotime($store->fri_close)) }}</span>
                  @endif
                </li>
                <li class="list-unstyled-item list-hours-item d-flex">
                  Saturday
                  @if ($store->sat_open == $store->sat_close)
                    <span class="ml-auto">Closed</span>
                  @else
                    <span class="ml-auto">{{ date('g:i A', strtotime($store->sat_open)) }} to {{ date('g:i A', strtotime($store->sat_close)) }}</span>
                  @endif
                </li>
              </ul>
              <p class="address mb-5">
                {{ $store->address }}
              </p>
              <p class="mb-0">
                <small>
                  <em>Call Anytime</em>
                </small>
                <br> {{ $store->phone }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
