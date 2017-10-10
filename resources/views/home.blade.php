@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
        @if ( Auth::user()->kategori == "pekerja")
        <div class="row">
            <!-- /.intro image -->
            <div class="col-md-6 intro-pic wow slideInLeft">
                <img src="{{ Auth::user()->foto }}" alt="ipad" class="img-responsive">
            </div>	

            <!-- /.intro content -->
            <div class="col-md-6 wow slideInRight">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>{{ Auth::user()->namalengkap }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>32 Tahun, {{ Auth::user()->tglhr }}</td>
                        </tr>
                        <tr>
                            <td>Alamat / Lokasi</td>
                            <td>{{ Auth::user()->alamlok }}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>{{ Auth::user()->pendter }}</td>
                            </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>{{ Auth::user()->jurus }}</td>
                        </tr>
                        <tr>
                            <td>Institusi</td>
                            <td>{{ Auth::user()->institusi }}</td>
                        </tr>
                        <tr>
                            <td>No. Handphone</td>
                            <td>{{ Auth::user()->telp }}</td>
                        </tr>
                        <tr>
                            <td>No. Handphone 2</td>
                            <td>{{ Auth::user()->telpa }}</td>
                        </tr>
                        <tr>
                            <td>Resume</td>
                            <td style="background-color: #f7639a;"><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Check Out My Resume">Resume.pdf</a></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit"><a href="{{ url('/updatep/'.Auth::user()->id) }}">Update</a></button>
                            <td>
                        </tr>
                    </table>
				</div>
            </div>
        </div>
        @else
        <div class="row">
            <!-- /.intro image -->
            <div class="col-md-6 intro-pic wow slideInLeft">
                <img src="{{ Auth::user()->foto }}" alt="ipad" class="img-responsive">
            </div>	

            <!-- /.intro content -->
            <div class="col-md-6 wow slideInRight">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>{{ Auth::user()->namalengkap }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <td>Berdiri pada tanggal</td>
                            <td>{{ Auth::user()->tglhr }}</td>
                        </tr>
                        <tr>
                            <td>Alamat / Lokasi</td>
                            <td>{{ Auth::user()->alamlok }}</td>
                        </tr>
                        <tr>
                            <td>Industri</td>
                            <td>{{ Auth::user()->pendter }}</td>
                        </tr>
                        <tr>
                            <td>Bidang Usaha</td>
                            <td>{{ Auth::user()->jurus }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td>{{ Auth::user()->telp }}</td>
                        </tr>
                        <tr>
                            <td>No. Telp lain</td>
                            <td>{{ Auth::user()->telpa }}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi Perusahaan</td>
                            <td>{{ Auth::user()->gamb }}</td>
                        </tr>
                        <tr>
                            <td>Akta Perusahaan</td>
                            <td style="background-color: #f7639a;"><a href="#" target="_blank" data-toggle="tooltip" data-placement="top" title="Check Out My Resume">Resume.pdf</a></td>
                        </tr>
                        <tr>
                            <td>
                                <p><a href="{{ url('/updatep/'.Auth::user()->id) }}">Update</a></p>
                            </td>
                        </tr>
                    </table>
				</div>
            </div>
        </div>
        @endif			  
    </div>
</div>
@endsection