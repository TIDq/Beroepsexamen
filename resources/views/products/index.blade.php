@extends('layouts.app')

@section('content')
    <div class="columns">
        <div class="column">
            <h1 id="h1" class="title has-padding-top-15" style="text-align: center;">
                Winkel
            </h1>
        </div>
    </div>

    <div class="columns has-margin-top-50">
        @forelse($products as $product)
            @if($loop->index >= 2 && $loop->index % 3 == 0)</div><div class="columns">@endif
        <div class="column is-one-third">
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
                    <a href="{{ url('/products/') }}" class="card-footer-item button is-info">Lees
                        meer</a>
                </footer>
            </div>
        </div>
        @empty
            <div class="column">
                <h3 style="text-align: center;" class="title">Geen producten gevonden</h3>
            </div>
        @endforelse
    </div>
@endsection
