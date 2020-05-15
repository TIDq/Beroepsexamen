@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column">
            <h1 id="h1" class="title has-padding-top-15" style="text-align: center;">
                Bestelling
            </h1>
        </div>
    </div>
    <div class="columns has-margin-top-50 is-centered">
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
    <div class="columns has-margin-top-50 is-centered">
        <div class="columns">
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                          {{--  {{ $product->name }} --}}
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            Prijs: &euro; {{--{{ $product->price }} --}}
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            @if($order->paid > 200 + 0 )
                            Totaal: &euro; {{ $order->paid }}
                                @else
                                Totaal: &euro; {{ $order->paid + 12.50 }}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
