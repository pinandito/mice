@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row">
            @if ( Auth::user()->kategori == "pekerja")
            <!-- /.intro image -->
            <div class="col-md-6 intro-pic wow slideInLeft">
                <img src="{{ Auth::user()->foto }}" alt="ipad" class="img-responsive">
            </div>	

            <!-- /.intro content -->
            <div class="col-md-6 wow slideInRight">
                <div class="table-responsive">
                    <form action="{{ url('/savep')}}">
                    <table class="table">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" class="form-control" id="namalengkap" name="namalengkap" value="{{ Auth::user()->namalengkap }}"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}"></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td><input type="text" class="form-control" id="tglhr" name="tglhr" value="{{ Auth::user()->tglhr }}"></td>
                        </tr>
                        <tr>
                            <td>Alamat / Lokasi</td>
                            <td><input type="text" class="form-control" id="alamlok" name="alamlok" value="{{ Auth::user()->alamlok }}"></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td><input type="text" class="form-control" id="pendter" name="pendter" value="{{ Auth::user()->pendter }}"></td>
                            </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td><input type="text" class="form-control" id="jurus" name="jurus" value="{{ Auth::user()->jurus }}"></td>
                        </tr>
                        <tr>
                            <td>Institusi</td>
                            <td><input type="text" class="form-control" id="institusi" name="institusi" value="{{ Auth::user()->institusi }}"></td>
                        </tr>
                        <tr>
                            <td>No. Handphone</td>
                            <td><input type="text" class="form-control" id="telp" name="telp" value="{{ Auth::user()->telp }}"></td>
                        </tr>
                        <tr>
                            <td>Resume</td>
                            <td style="background-color: #f7639a;"><input type="text" class="form-control" id="resume" name="resume" value="{{ Auth::user()->resume }}"></td>
                        </tr>
                        <tr>
                            <td>
                                <p><input type="submit" value="Save"/></p>
                            </td>
                            <td>
                                <p><a href="{{ url('/home') }}">Cancel</a></p>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
            @else
<!-- /.intro image -->
            <div class="col-md-6 intro-pic wow slideInLeft">
                <img src="{{ Auth::user()->foto }}" alt="ipad" class="img-responsive">
            </div>	

            <!-- /.intro content -->
            <div class="col-md-6 wow slideInRight">
                <div class="table-responsive">
                    <form action="{{ url('/savep')}}">
                    <table class="table">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ Auth::user()->id }}">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" class="form-control" id="namalengkap" name="namalengkap" value="{{ Auth::user()->namalengkap }}"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}"></td>
                        </tr>
                        <tr>
                            <td>Berdiri pada tanggal</td>
                            <td><input type="text" class="form-control" id="tglhr" name="tglhr" value="{{ Auth::user()->tglhr }}"></td>
                        </tr>
                        <tr>
                            <td>Alamat / Lokasi</td>
                            <td><input type="text" class="form-control" id="alamlok" name="alamlok" value="{{ Auth::user()->alamlok }}"></td>
                        </tr>
                        <tr>
                            <td>Industri</td>
                            <td><input type="text" class="form-control" id="pendter" name="pendter" value="{{ Auth::user()->pendter }}"></td>
                            </tr>
                        <tr>
                            <td>Bidang Usaha</td>
                            <td><input type="text" class="form-control" id="jurus" name="jurus" value="{{ Auth::user()->jurus }}"></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Perusahaan</td>
                            <td><input type="text" class="form-control" id="gamb" name="gamb" value="{{ Auth::user()->gamb }}"></td>
                        </tr>
                        <tr>
                            <td>No. Telp</td>
                            <td><input type="text" class="form-control" id="telp" name="telp" value="{{ Auth::user()->telp }}"></td>
                        </tr>
                        <tr>
                            <td>No. Telp Lain</td>
                            <td><input type="text" class="form-control" id="telpa" name="telpa" value="{{ Auth::user()->telpa }}"></td>
                        </tr>
                        <tr>
                            <td>Akta Perusahaan</td>
                            <td style="background-color: #f7639a;"><input type="text" class="form-control" id="resume" name="resume" value="{{ Auth::user()->resume }}"></td>
                        </tr>
                        <tr>
                            <td>
                                <p><input type="submit" value="Save"/></p>
                            </td>
                            <td>
                                <p><a href="{{ url('/home') }}">Cancel</a></p>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
            @endif
        </div>			  
    </div>
</div>
@endsection
