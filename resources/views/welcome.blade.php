@extends('layouts.app')
@section('title') analytics:: @parent @stop
@section('content')



    <div class="row">
        <div class="page-header">
            <h2>Welcome to analytics</h2>
        </div>

    </div>
    <div id="stock-div"></div>

    {!! \Lava::render('LineChart', 'Stocks', 'stock-div') !!}

@endsection


