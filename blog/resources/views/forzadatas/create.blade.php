@extends('forzadatas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Forza Data</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('forzadatas.index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('forzadatas.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year:</strong>
                <input type="text" name="year" class="form-control" placeholder="Year">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Manufacturer:</strong>
                <input type="text" name="manufacturer" class="form-control" placeholder="Manufacturer">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Model:</strong>
                <input type="text" name="model" class="form-control" placeholder="Model">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Value:</strong>
                <input type="text" name="value" class="form-control" placeholder="Value">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Division:</strong>
                <input type="text" name="division" class="form-control" placeholder="Division">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pi:</strong>
                <input type="text" name="pi" class="form-control" placeholder="Pi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Engine:</strong>
                <input type="text" name="engine" class="form-control" placeholder="Engine">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Engine layout:</strong>
                <input type="text" name="engine_layout" class="form-control" placeholder="Engine_layout">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Drivetrain:</strong>
                <input type="text" name="drivetrain" class="form-control" placeholder="Drivetrain">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Power (KW):</strong>
                <input type="text" name="power_kw" class="form-control" placeholder="Power (KW)">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Touge (NM):</strong>
                <input type="text" name="touge_nm" class="form-control" placeholder="Touge (NM)">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Weight (KG):</strong>
                <input type="text" name="weight_kg" class="form-control" placeholder="Weight (KG)">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Top Speed (KPH):</strong>
                <input type="text" name="top_speed_kph" class="form-control" placeholder="Top Speed (KPH)">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lap Time:</strong>
                <input type="text" name="lap_time" class="form-control" placeholder="Lap Time">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection