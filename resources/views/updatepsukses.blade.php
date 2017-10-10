@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <button type="submit"><p> Data telah disave </p></button>
                <button type="submit"><a href="{{ url('/home') }}">Balik</a></button>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
