@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column">
            <h1 id="h1" class="title has-padding-top-15" style="text-align: center;">
                Bestelling
            </h1>
        </div>
    </div>
    <div class="columns has-margin-top-50">
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            Klant: {{ $order->user }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <h1 id="h1" class="title has-padding-top-15" style="text-align: center;">
                Producten
            </h1>
        </div>
    </div>
    <div class="columns has-margin-top-50">
        <div class="columns">
            <div class="column">
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
                    <div class="card-content">
                        <div class="content">
                            Totaal: &euro; {{ $order->paid }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
