@extends('layouts.app')

@section('content')
    
    <div class="container">
        @foreach ($magang as $mags)
             <div class="row">
                <div class="form-group">
                    <label for="full_name_id" class="control-label">Posisi Magang : </label>
                    <label>{{ $mags->magnama }}</label>
                </div>
                <div class="form-group">
                    <label for="street1_id" class="control-label">Lokasi : </label>
                    <label>{{ $mags->maglok }}</label>
                </div>				    
                <div class="form-group"> 
                    <label for="street2_id" class="control-label">Persyaratan : </label>
                    <label>{{ $mags->magdesk }}</label>
                </div>	  
                <div class="form-group"> 
                    <button type="submit" class="btn btn-primary"><a href="{{ url('/updatemag/'.$mags->idmag) }}">Edit</a></button>
                    <button type="submit" class="btn btn-primary"><a href="{{ url('/delmag/'.$mags->idmag) }}">Delete</a></button>
                </div>     
            </div>
        @endforeach
            <div class="row">
                <button type="submit"><a href="{{ url('/posmag') }}">Tambah Magang</a></button>
            </div>
    </div>

@endsection

@section('script')

@endsection