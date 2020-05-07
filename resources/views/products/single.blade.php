@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column">
            <h1 id="h1" class="title has-padding-top-15" style="text-align: center;">
                {{ $product->name }}
            </h1>
        </div>
    </div>

    <div class="columns has-margin-top-50 is-centered">
        <div class="column is-6">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        {{ $product->name }}
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        Prijs: &euro; {{ $product->price }}
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="{{ url('/cart') }}" class="card-footer-item button is-primary">Bestel</a>
                </footer>
            </div>
        </div>
    </div>
@endsection

