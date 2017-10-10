@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <form action="{{ url('/savemag')}}">
            <div class="form-group">
                <label for="full_name_id" class="control-label">Posisi Magang</label>
                <input type="text" class="form-control" id="magnama" name="magnama" value="{{ $magang->magnama }}" placeholder="Tugas Magang...">
            </div>
            <input type="hidden" class="form-control" id="mag_idp" name="mag_idp" value="{{ Auth::user()->id }}">	
            <input type="hidden" class="form-control" id="idmag" name="idmag" value="{{ $magang->idmag }}">	
            <div class="form-group">
                <label for="street1_id" class="control-label">Lokasi</label>
                <input type="text" class="form-control" id="maglok" name="maglok" placeholder="Alamat tempat magang..." value="{{ $magang->maglok }}">
            </div>				    
            <div class="form-group"> 
                <label for="street2_id" class="control-label">Persyaratan</label>
                <input type="text" class="form-control" id="magdesk" name="magdesk" placeholder="Pendidikan terakhir, Jurusan..." value="{{ $magang->magdesk }}">
            </div>	  
            <input type="hidden" class="form-control" id="mcreated_at" name="mcreated_at" value="">
            <input type="hidden" class="form-control" id="mupdated_at" name="mupdated_at" value="">
            <div class="form-group"> 
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="submit" class="btn btn-primary"><a href="{{ url('/magang') }}">Batal</a></button>
            </div>     
        </form>			
        </div>
    </div>
@endsection

@section('script')

@endsection