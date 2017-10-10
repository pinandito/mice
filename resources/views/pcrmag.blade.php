@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
        <p>Ketik pada kotak Cari sesuai preferensi pekerjaan.</p>

    <input style="width:20.5%;" class="w3-input w3-border w3-padding" type="text" placeholder="Cari Posisi.." id="myInput" onkeyup="myFunction()">
    <input style="width:12.5%;" class="w3-input w3-border w3-padding" type="text" placeholder="Cari Lokasi.." id="myInputa" onkeyup="myFunctiona()">
    <input style="width:12%;" class="w3-input w3-border w3-padding" type="text" placeholder="Cari Perush.." id="myInputb" onkeyup="myFunctionb()">
    <table class="w3-table-all w3-margin-top" id="myTable">
        <tr>
            <th style="width:25%;">Posisi Magang</th>
            <th style="width:15%;">Lokasi</th>
            <th style="width:15%;">Perusahaan</th>
            <th style="width:20%;">Deskripsi</th>
            <th style="width:15%;">Dibuka</th>
            <th style="width:15%;">Diupdate</th>
        </tr>
        <tr>
            <td>Staf Akuntansi</td>
            <td>Karawang</td>
            <td>Wika</td>
            <td>Min 18 Tahun</td>
            <td>8 Oktober 2017</td>
            <td>8 Oktober 2017</td>
        </tr>
        <tr>
            <td>Staf PPIC</td>
            <td>Jakarta</td>
            <td>WB</td>
            <td>Min 18 Tahun</td>
            <td>8 Oktober 2017</td>
            <td>8 Oktober 2017</td>
        </tr>
        <tr>
            <td>Staf Akuntansi</td>
            <td>Karawang</td>
            <td>WG</td>
            <td>Min 18 Tahun</td>
            <td>8 Oktober 2017</td>
            <td>8 Oktober 2017</td>
        </tr>
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