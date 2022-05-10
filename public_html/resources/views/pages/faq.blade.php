@extends('layouts.app')

@section('title', 'FAQs-CraftsManNepal-Cheapest With Best-Handicraft Manufacturer & Wholesale Supplier')

@section('content')

    <!-- Portfolio Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title title-icon-both">FAQs</h2>
            </div>
            <div class="col learts-mb-40">
                <div class="row">
                    <div class="col">
                        <div class="accordion" id="faq-toggles">
                        @foreach($faq_info as $key=>$row)
                        @if($row->id == 1)
                        <div class="card active">
                            <div class="card-header">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#faq-toggles-{{ $key+1 }}">{{ $key+1 }}. {{ $row->title }}</button>
                            </div>
                            <div id="faq-toggles-{{ $key+1 }}" class="collapse show">
                                <div class="card-body">
                                    <p>{!! $row->description !!}</p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="card">
                            <div class="card-header">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq-toggles-{{ $key+1 }}">{{ $key+1 }}. {{ $row->title }}</button>
                            </div>

                            <div id="faq-toggles-{{ $key+1 }}" class="collapse">
                                <div class="card-body">
                                    <p>{!! $row->description !!}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
