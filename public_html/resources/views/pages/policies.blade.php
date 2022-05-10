@extends('layouts.app')

@section('title', 'Our Policies-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier')

@section('content')


    <!-- Portfolio Section Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title2 text-center">
            <h2 class="title title-icon-both">Privacy Policy</h2>
        </div>
        <!-- Section Title End -->
        @foreach($policy_info as $key=>$row)
        <!-- Section Content Start -->
        <div class="col-xl-12 pb-4">
            <h2 class="title title" style="font-size: 25px;">{{ $key +1 }}. {{ $row->title }}</h2>
            <p>{!! $row->desc !!}</p>
        </div>
        <!-- Section Contact End -->
            @endforeach
    </div>
</div>

@endsection
