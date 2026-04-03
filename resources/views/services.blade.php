@extends('base.base')

@section('title', 'Our Services')

@section('content')
    <main class="flex-grow-1 py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-dark">Our Packages</h1>
                <p class="lead text-muted">Choose the perfect photobooth package for your special moment</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                @foreach ($packages as $package)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100
                        {{ $package['type'] == 'premium' ? 'border-warning shadow border-2' : 'border-0 shadow-sm' }}
                        {{ $package['type'] == 'basic' ? 'transition-transform' : '' }}">
                            <div class="card-header text-center py-3 
                                {{ $package['type'] == 'premium' ? 'bg-warning text-dark position-relative' : '' }}
                                {{ $package['type'] == 'basic' ? 'bg-secondary text-white' : '' }}
                                {{ $package['type'] == 'vip' ? 'bg-dark text-warning' : '' }}">

                                @if ($package['type'] == 'premium')
                                    <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark text-warning border border-warning px-3 py-2 shadow-sm">
                                        Most Popular
                                    </span>
                                @endif

                                <h4 class="my-0
                                {{ $package['type'] == 'premium' ? 'fw-bold mt-2' : 'fw-normal' }}">
                                    {{ $package['name'] }}
                                </h4>
                            </div>
                            <div class="card-body bg-white text-center d-flex flex-column">
                                <h1 class="card-title pricing-card-title h3">
                                    {{ $package['price'] }}<small class="text-muted fw-light">/{{ $package['duration'] }}</small>
                                </h1>

                                <ul class="list-unstyled mt-3 mb-4 text-start">
                                    @foreach ($package['features'] as $feature)
                                        <li class="py-2
                                        {{ !$loop->last ? 'border-bottom' : '' }}
                                        {{ $package['type'] == 'premium' ? 'text-dark fw-medium' : 'text-muted' }}">
                                            ✔️ {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>

                                <button type="button" class="w-100 btn btn-lg mt-auto
                                {{ $package['type'] == 'premium' ? 'btn-warning text-dark fw-bold shadow-sm' : 'btn-outline-dark' }}">
                                    Choose {{ $package['type'] == 'vip' ? 'VIP' : ucfirst($package['type']) }}
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

        </div>
    </main>
@endsection