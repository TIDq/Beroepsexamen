@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column">
            <h1 id="h1" class="title has-padding-top-15" style="text-align: center;">
                Bestellingen
            </h1>
        </div>
    </div>

    <div class="columns has-margin-top-50">
        @forelse($orders as $order)
            @if($loop->index >= 2 && $loop->index % 3 == 0)</div><div class="columns">@endif
        <div class="column is-one-third">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Bestelling #{{ $order->id }}
                    </p>
                </header>
                <div class="card-content">
                    <div class="content">
                        @if($order->getTotal() >= 200)
                            Verzendkosten: &euro;0,00<br/>
                            Totaal: &euro; {{ $order->getTotal() }}
                        @else
                            Verzendkosten: &euro;12,50<br/>
                            Totaal: &euro; {{ $order->getTotal() + 12.50 }}

                        @endif
                    </div>
                </div>
                <div class="card-content">
                    <div class="content">
                        Status: {{ $order->status }}
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="{{ route('order.show', $order->id) }}" class="card-footer-item button is-info">Lees
                        meer</a>
                </footer>
            </div>
        </div>
        @empty
            <div class="column">
                <h3 style="text-align: center;" class="title">Geen Bestellingen gevonden</h3>
            </div>
        @endforelse
    </div>
@endsection
