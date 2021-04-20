@extends('forzadatas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Forza Data</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('forzadatas.create') }}"> Create New Forza Data</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Year</th>
        <th>Manufacturer</th>
        <th>Model</th>
        <th>Value</th>
        <th>Division</th>
        <th>Pi</th>
        <th>Engine</th>
        <th>Engine Layout</th>
        <th>Drivetrain</th>
        <th>Power (KW)</th>
        <th>Touge (NM)</th>
        <th>Weight (KG)</th>
        <th>Top Speed (KPH)</th>
        <th>Lap Time</th>
    </tr>
    @foreach ($forzadatas as $forzadata)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $forzadata->year }}</td>
        <td>{{ $forzadata->manufacturer }}</td>
        <td>{{ $forzadata->model }}</td>
        <td>{{ $forzadata->value }}</td>
        <td>{{ $forzadata->division }}</td>
        <td>{{ $forzadata->pi }}</td>
        <td>{{ $forzadata->engine }}</td>
        <td>{{ $forzadata->engine_layout }}</td>
        <td>{{ $forzadata->drivetrain }}</td>
        <td>{{ $forzadata->power_kw }}</td>
        <td>{{ $forzadata->touge_nm }}</td>
        <td>{{ $forzadata->weight_kg }}</td>
        <td>{{ $forzadata->top_speed_kph }}</td>
        <td>{{ $forzadata->lap_time }}</td>
        <td>
            <form action="{{ route('forzadatas.destroy',$forzadata->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('forzadatas.show',$forzadata->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('forzadatas.edit',$forzadata->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{!! $forzadatas->links() !!}
@endsection