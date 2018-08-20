@extends('layouts.layout-1')

@section('styles')
    <link rel="stylesheet" href="{{ asset('/vendor/libs/bootstrap-sortable/bootstrap-sortable.css') }}">
@endsection

@section('scripts')
    <!-- Dependencies -->
    <script src="{{ asset('/vendor/libs/bootstrap-sortable/bootstrap-sortable.js') }}"></script>
@endsection

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">Market</h4>

    <div class="table-responsive">
    <table class="table table-bordered table-striped sortable">
        <thead>
            <tr>
                <th style="width: 20%">Rank</th>
                <th style="width: 20%">Name</th>
                <th style="width: 20%">Price</th>
                <th style="width: 20%">Market Cap</th>
                <th style="width: 20%">Volume(24h)</th>
                <th style="width: 20%">Circulating Supply</th>
                <th style="width: 20%">Change(24h)</th>
            </tr>
        </thead>
        <tbody>
          @foreach($obj['data'] as $i => $crypto)
              <tr>
                  <th scope="row">{{ $crypto['rank'] }}</th>
                  <td>{{ $crypto['name'] }}</td>
                  <td>${{ number_format($crypto['quotes']['USD']['price'], 2) }}</td>
                  <td>${{ number_format($crypto['quotes']['USD']['market_cap']) }}</td>
                  <td>${{ number_format($crypto['quotes']['USD']['volume_24h']) }}</td>
                  <td>{{ number_format($crypto['circulating_supply']) }}  {{ $crypto['symbol'] }}</td>
                  <td>{{ number_format($crypto['quotes']['USD']['percent_change_24h'], 2) }}%</td>
              </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection
