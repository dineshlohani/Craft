@extends('layouts.app')

@section('title', 'WholeSeller-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier')

@section('content')


    <!-- Portfolio Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title title-icon-both">What You Need To Know As a WholeSeller</h2>
            </div>
            <!-- Section Title End -->
            <!-- Section Content Start -->
                <div class="col-xl-12 pb-2">
                    <p>{!! $wholesale_info->desc !!}</p>
                </div>
            <p style="font-style: italic;">Please feel free to contact us if you have any further queries or would fix and appointment for an information session.</p>
                <!-- Section Contact End -->
        </div>
    </div>

@endsection
