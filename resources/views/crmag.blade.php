@extends('layouts.appweb')

@section('content')
<div class="container">
	<div class="row">
        <p>Ketik pada kotak Cari sesuai preferensi pekerjaan.</p>

    <input style="width:23%;" class="w3-input w3-border w3-padding" type="text" placeholder="Cari Posisi.." id="myInput" onkeyup="myFunction()">
    <input style="width:14%;" class="w3-input w3-border w3-padding" type="text" placeholder="Cari Lokasi.." id="myInputa" onkeyup="myFunctiona()">
    <input style="width:14%;" class="w3-input w3-border w3-padding" type="text" placeholder="Cari Perush.." id="myInputb" onkeyup="myFunctionb()">
    <table class="w3-table-all w3-margin-top" id="myTable">
        <tr>
            <th style="width:15%;">Posisi Magang</th>
            <th style="width:15%;">Lokasi</th>
            <th style="width:25%;">Perusahaan</th>
            <th style="width:25%;">Deskripsi</th>
            <th style="width:10%;">Dibuka</th>
            <th style="width:10%;">Diupdate</th>
        </tr>
        @foreach ($magang as $mags)
        <tr>
            <td><a href="{{ url('/magang/'.$mags->idmag) }}">{{ $mags-> magnama }}</a></td>
            <td>{{ $mags-> maglok }}</td>
            <td>{{ $mags->user->name }}</td>
            <td>{{ $mags-> magdesk }}</td>
            <td>{{ $mags-> mcreated_at }}</td>
            <td>{{ $mags-> mupdated_at }}</td>
        <tr>
        @endforeach
    </table>
    </div>
</div>
@endsection

@section('script')
<script>
function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }
    }
    }
    function myFunctiona() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInputa");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }
    }
    }
    function myFunctionb() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInputb");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }
    }
    }    
</script>
@endsection