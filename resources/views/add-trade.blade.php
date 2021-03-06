@extends('layouts.layout-1')

@section('content')
    <h1 align="center">Add Coin</h1>
    <br><br>
    <form action="{{ route('add.trade') }}" method="post">
        <div class="form-group" align="center">
            <div class="form-group">
                <label>Coin</label>
                <input  name="currency">
            </div>
        </div>
        <div class="form-group" align="center">
            <div class="form-group">
                <label>Quantity</label>
                <input name="quantity">
            </div>
        </div>
        <div class="form-group" align="center">
            <div class="form-group">
                <label>Price</label>
                <input name="price">
            </div>
            <div class="form-group" align="center">
                <div class="form-group">
                    <label>Type</label>
                    <input name="type">
                </div>
            <div class="form-group" align="center">
                <div class="form-group">
                    <label>Description(optional)</label>
                    <input name="description">
                </div>
        <div class="form-group" align="center">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </div>
    </form>
@endsection
