@extends('layout.app')

@section('contentcon')
<link href="{{asset('css/style.css')}}" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(function() {

$('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

});
</script>
<style>
body {
    padding-top: 90px;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
</style>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-4">
                            <a href="{{url('/')}}" class="" id="home-form-link">Home</a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" method="post" role="form" style="display: block;" action="{{route('login')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" tabindex="1" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control" tabindex="2" name="password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" action="" method="post" role="form" style="display: none;" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('typeuser') ? ' has-error' : '' }}">
                                    <label for="typeuser" class="col-md-4 control-label">typeuser</label>
                                    <div class="col-md-6">
                                        <select id="typeuser" name="typeuser" class="form-control">
                                            <option value="1">Pelanggan</option>
                                            <option value="2">Vendor</option>
                                        </select>
                                        @if ($errors->has('typeuser'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('typeuser') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Dengan ini, saya menyatakan setuju mengikuti Syarat dan Ketentuan terlampir</label>
                                    <div class="col-md-6"style="max-height:600px; overflow-y:scroll; background-color:white;">
                                        <div style="text-align:justify;">
                                            <p>Selamat datang uban.space</p>
                                            <p>Syarat dan ketentuan yang ditetapkan di bawah ini mengatur pemakaian jasa yang ditawarkan oleh Ubanspace terkait penggunaan situs uban.space. Pengguna disarankan membaca dengan seksama karena dapat berdampak kepada hak dan kewajiban Pengguna di bawah hukum.</p>
                                            <p>Dengan mendaftar dan/atau menggunakan situs uban.space, maka pengguna dianggap telah membaca, mengerti, memahami dan menyutujui semua isi dalam Syarat dan ketentuan. Syarat dan ketentuan ini merupakan bentuk kesepakatan yang dituangkan dalam sebuah perjanjian yang sah antara Pengguna dengan uban.space. Jika pengguna tidak menyetujui salah satu, sebagian, atau seluruh isi Syarat dan ketentuan, maka pengguna tidak diperkenankan menggunakan layanan di uban.space.</p>
                                            <p>A.	Definisi</p>
                                            <p>B.	Akun, Saldo uban.soace, Password dan Keamanan</p>
                                            <p>C.	Transaksi Pembelian</p>
                                            <p>D.	Transaksi Penjualan</p>
                                            <p>E.	Penataan Tampilan</p>
                                            <p>F.	Komisi</p>
                                            <p>G.	Harga</p>
                                            <p>H.	Konten</p>
                                            <p>I.	Penarikan Dana</p>
                                            <p>J.	Penolakan Jaminan Dan Batasan Tanggung Jawab</p>
                                            <p>K.	Pelepasan</p>
                                            <p>L.	Ganti Rugi</p>
                                            <p>M.	Pilihan Hukum</p>
                                            <p>N.	Pembaharuan</p>
                                            <p>________________________________________</p>
                                            <p>A. DEFINISI</p>
                                            <p>1.	Ubanspace adalah suatu startup yang menjalankan kegiatan usaha jasa web portal uban.space, yakni situs pencarian Perawat yang terdaftar. Selanjutnya disebut Ubanspace.</p>
                                            <p>2.	Situs Ubanspace adalah uban.space.</p>
                                            <p>3.	Syarat dan ketentuan adalah perjanjian antara Pengguna dan Ubanspace yang berisikan seperangkat peraturan yang mengatur hak, kewajiban, tanggung jawab pengguna dan Ubanspace, serta tata cara penggunaan sistem layanan Ubanspace.</p>
                                            <p>4.	Pengguna adalah pihak yang menggunakan layanan Ubanspace, termasuk namun tidak terbatas pada pelanggan, penyalur, perawat ataupun pihak lain yang sekedar berkunjung ke Situs Ubanspace.</p>
                                            <p>5.	Pelanggan adalah Pengguna terdaftar yang melakukan permintaan atas Jasa Perawat yang terdaftar oleh Penyalur dan atau Perawat di Situs Ubanspace.</p>
                                            <p>6.	Penyalur adalah Pengguna terdaftar yang melakukan tindakan pengaturan perawat untuk melakukan penawaran atas suatu jasa kepada para Pengguna Situs Ubanspace.</p>
                                            <p>7.	Perawat adalah Pengguna terdaftar baik melalui Penyalur atau pendaftaran individual untuk melakukan penawaran atas suatu jasa kepada para Pengguna Situs Ubanspace.</p>
                                            <p>8.	Ubanspace Website Feed adalah fitur pada Situs Ubanspace yang menampilkan promosi KOL terhadap Jasa Perawat tertentu.</p>
                                            <p>9.	Key Opinion Leaders atau KOL adalah pihak yang mempromosikan Jasa Perawat tertentu melalui Ubanspace Website Feed.</p>
                                            <p>10.	Rekening Resmi Ubanspace adalah rekening bersama yang disepakati oleh Ubanspace dan para pengguna untuk proses transaksi di Situs Ubanspace. Rekening resmi Ubanspace dapat ditemukan di halaman https://uban.space/bantuan/nomor-rekening-ubanspace/.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>B. AKUN, PASSWORD DAN KEAMANAN</p>
                                            <p>1.	Pengguna dengan ini menyatakan bahwa pengguna adalah orang yang cakap dan mampu untuk mengikatkan dirinya dalam sebuah perjanjian yang sah menurut hukum.</p>
                                            <p>2.	Ubanspace memungut biaya pendaftaran kepada Pengguna yang bertindak sebagai Penyalur dan Perawat.</p>
                                            <p>3.	Pengguna yang telah mendaftar berhak bertindak sebagai:</p>
                                            <p>o	- Pelanggan</p>
                                            <p>o	- Penyalur, dengan memanfaatkan layanan web.</p>
                                            <p>o	- Perawat, dengan memanfaatkan layanan web.</p>
                                            <p>4.	Pengguna yang akan bertindak sebagai Penyalur berhak melakukan pengaturan terhadap perawat-perawat yang akan ditampilkan di web.</p>
                                            <p>5.	Ubanspace tanpa pemberitahuan terlebih dahulu kepada Pengguna, memiliki kewenangan untuk melakukan tindakan yang perlu atas setiap dugaan pelanggaran atau pelanggaran Syarat dan ketentuan dan/atau hukum yang berlaku, yakni tindakan berupa perubahan informasi atas data perawat maupun data penyalur, pembatalan listing, suspensi akun, dan/atau penghapusan akun pengguna.</p>
                                            <p>6.	Ubanspace memiliki kewenangan untuk menutup akun Pengguna baik sementara maupun permanen apabila didapati adanya tindakan kecurangan dalam bertransaksi dan/atau pelanggaran terhadap syarat dan ketentuan Ubanspace.</p>
                                            <p>7.	Pengguna dilarang untuk menciptakan dan/atau menggunakan perangkat, software, fitur dan/atau alat lainnya yang bertujuan untuk melakukan manipulasi pada sistem Ubanspace, termasuk namun tidak terbatas pada : (i) manipulasi data perawat dan penyalur; (ii) kegiatan perambanan (crawling/scraping); (iii) kegiatan otomatisasi dalam transaksi, jual beli, promosi, dsb; (v) penambahan perawat ke wen; dan/atau (vi) aktivitas lain yang secara wajar dapat dinilai sebagai tindakan manipulasi sistem.</p>
                                            <p>8.	Ubanspace memiliki kewenangan untuk melakukan penyesuaian jumlah transaksi, penyesuaian jumlah reputasi, dan/atau melakukan proses moderasi/menutup akun Pengguna, jika diketahui atau diduga adanya kecurangan oleh Pengguna yang bertujuan memanipulasi data transaksi Pengguna demi meningkatkan reputasi pengguna (review dan atau jumlah transaksi). Contohnya adalah melakukan proses transaksi ke pengguna sendiri dengan menggunakan akun pribadi atau akun pribadi lainnya.</p>
                                            <p>9.	Ubanspace memiliki kewenangan untuk melakukan pembekuan saldo Ubanspace Pengguna apabila ditemukan / diduga adanya tindak kecurangan dalam bertransaksi dan/atau pelanggaran terhadap syarat dan ketentuan Ubanspace.</p>
                                            <p>10.	Penyalur atau Perawat dilarang melakukan duplikasi data perawat, atau tindakan-tindakan lain yang dapat diindikasikan sebagai usaha persaingan tidak sehat.</p>
                                            <p>11.	Pengguna tidak memiliki hak untuk mengubah nama akun, dann/atau domain Pengguna.</p>
                                            <p>12.	Pengguna bertanggung jawab secara pribadi untuk menjaga kerahasiaan akun dan password untuk semua aktivitas yang terjadi dalam akun Pengguna.</p>
                                            <p>13.	Ubanspace tidak akan meminta username, password maupun kode lainnya milik akun Pengguna untuk alasan apapun, oleh karena itu Ubanspace menghimbau Pengguna agar tidak memberikan data tersebut maupun data penting lainnya kepada pihak yang mengatasnamakan Ubanspace atau pihak lain yang tidak dapat dijamin keamanannya.</p>
                                            <p>14.	Pengguna setuju untuk memastikan bahwa Pengguna keluar dari akun di akhir setiap sesi dan memberitahu Ubanspace jika ada penggunaan tanpa izin atas sandi atau akun Pengguna.</p>
                                            <p>15.	Pengguna dengan ini menyatakan bahwa Ubanspace tidak bertanggung jawab atas kerugian atau kerusakan yang timbul dari penyalahgunaan akun Pengguna.</p>
                                            <p>16.	Pengguna dilarang mempromosikan jasanya secara langsung menggunakan fasilitas pesan pribadi, diskusi jasa, ulasan jasa yang dapat mengganggu kenyamanan Pengguna lain.</p>
                                            <p>kembali ke atas.</p>
                                            <p>________________________________________</p>
                                            <p>C. TRANSAKSI PEMBELIAN</p>
                                            <p>1.	Pelanggan wajib bertransaksi melalui prosedur transaksi yang telah ditetapkan oleh Ubanspace. Pelanggan melakukan pembayaran dengan menggunakan metode pembayaran yang sebelumnya telah dipilih oleh Pelanggan.</p>
                                            <p>2.	Saat melakukan pemesanan perawat, Pelanggan menyetujui bahwa:</p>
                                            <p>o	- Pelanggan bertanggung jawab untuk membaca, memahami, dan menyetujui informasi/deskripsi keseluruhan data Perawat dan atau Penyalur (termasuk didalamnya namun tidak terbatas pada pendidikan, kemampuan, pengalaman, dan lainnya) sebelum membuat tawaran atau komitmen untuk menggunakan jasa perawat.</p>
                                            <p>o	- Pelanggan mengakui bahwa informasi sebagaimana terlihat di situs Ubanspace tergantung dari update informasi dari Perawat dan atau Penyalur. Ubanspace telah melakukan upaya terbaik untuk memastikan bahwa informasi yang disajikan beserta foto-foto yang ditampilkan di Situs Ubanspace sesuai kenyataan yang sebenarnya, tetapi tidak dapat menjamin bahwa penampilan informasi dan foto tersebut pada Situs Ubanspace akan akurat.</p>
                                            <p>o	- Pelanggan masuk ke dalam kontrak yang mengikat secara hukum untuk menggunakan Jasa Perawat ketika Pelanggan memesan Jasa Perawat kepada Perawat langsung atau melalui Penyalur.</p>
                                            <p>o	- Ubanspace tidak bertanggung jawab atas kesalahan informasi yang ditampilkan di situs Ubanspace oleh Perawat dan Penyalur atau pihak ketiga lainnya.</p>
                                            <p>3.	Pelanggan memahami dan menyetujui bahwa ketersediaan Jasa Perawat merupakan tanggung jawab Perawat dan atau Penyalur yang menawarkan Jasa tersebut. Terkait ketersediaan Perawat dapat berubah sewaktu-waktu, sehingga dalam keadaan Perawat sedang sibuk, maka Perawat dan Penyalur akan menolak order, dan pembayaran atas Jasa Perawat yang bersangkutan dikembalikan kepada Pelanggan kecuali atas pembayaran untuk bertemu dengan Perawat dan atau Penyalur.</p>
                                            <p>4.	Pelanggan memahami sepenuhnya dan menyetujui bahwa segala transaksi yang dilakukan antar Pelanggan dan Perawat serta Penyalur selain melalui Rekening Resmi Ubanspace dan/atau tanpa sepengetahuan Ubanspace (melalui fasilitas/jaringan pribadi, pengiriman pesan, pengaturan transaksi khusus diluar situs Ubanspace atau upaya lainnya) adalah merupakan tanggung jawab pribadi dari Pelanggan.</p>
                                            <p>5.	Ubanspace memiliki kewenangan sepenuhnya untuk menolak pembayaran tanpa pemberitahuan terlebih dahulu.</p>
                                            <p>6.	Pembayaran oleh Pelanggan wajib dilakukan segera (selambat-lambatnya dalam batas waktu 2 hari) setelah Pelanggan melakukan pemesanan. Jika dalam batas waktu tersebut pembayaran atau konfirmasi pembayaran belum dilakukan oleh pembeli, Ubanspace memiliki kewenangan untuk membatalkan transaksi dimaksud. Pelanggan tidak berhak mengajukan klaim atau tuntutan atas pembatalan transaksi tersebut.</p>
                                            <p>7.	Konfirmasi pembayaran dengan setoran tunai wajib disertai dengan berita pada slip setoran berupa nnama. Konfirmasi pembayaran dengan setoran tunai tanpa keterangan tidak akan diproses oleh Ubanspace.</p>
                                            <p>8.	Pelanggan menyetujui untuk tidak memberitahukan atau menyerahkan bukti pembayaran dan/atau data pembayaran kepada pihak lain selain Ubanspace. Dalam hal terjadi kerugian akibat pemberitahuan atau penyerahan bukti pembayaran dan/atau data pembayaran oleh Pelanggan kepada pihak lain, maka hal tersebut akan menjadi tanggung jawab Pelanggan.</p>
                                            <p>9.	Pelanggan wajib melakukan konfirmasi telah bertemu dengan Perawat dan atau Penyalur dan atau selesainya prestasi pekerjaan, setelah melakukan pemesanan. Jika dalam batas waktu 2 hari tidak ada konfirmasi atau klaim dari pihak Pelanggan, maka dengan demikian Pelanggan menyatakan menyetujui dilakukannya konfirmasi telah bertemu secara otomatis oleh sistem Ubanspace.</p>
                                            <p>10.	Setelah adanya konfirmasi telah bertemu dengan Perawat dan atau Penyalur, otomatis, maka dana pihak Pelanggan yang dikirimkan ke Rekening resmi Ubanspace akan di lanjut kirimkan ke pihak Perawat dan atau Penyalur (transaksi dianggap selesai).</p>
                                            <p>11.	Pelanggan memahami dan menyetujui bahwa setiap klaim yang dilayangkan setelah adanya konfirmasi / konfirmasi otomatis telah bertemunya Perawat dan atau Penyalur dan telah selesainya prestasi pekerjaan adalah bukan menjadi tanggung jawab Ubanspace. Kerugian yang timbul setelah adanya konfirmasi/konfirmasi otomatis telah selesainya prestasi pekerjaan menjadi tanggung jawab Pelanggan secara pribadi.</p>
                                            <p>12.	Pelanggan memahami dan menyetujui bahwa setiap masalah prestasi pekerjaan yang disebabkan keterlambatan pembayaran adalah merupakan tanggung jawab dari Pelanggan.</p>
                                            <p>13.	Pelanggan memahami dan menyetujui bahwa masalah keterlambatan proses pembayaran dan biaya tambahan yang disebabkan oleh perbedaan bank yang Pembeli pergunakan dengan bank Rekening resmi Ubanspace adalah tanggung jawab Pembeli secara pribadi.</p>
                                            <p>14.	Pengembalian dana dari Ubanspace kepada Pelanggan hanya dapat dilakukan jika dalam keadaan-keadaan tertentu berikut ini:</p>
                                            <p>o	- Kelebihan pembayaran dari Pelanggan atas Jasa Perawat,</p>
                                            <p>o	- Masalah prestasi pekerjaan telah teridentifikasi secara jelas dari Perawat dan atau Penyalur yang mengakibatkan pesanan Jasa Perawat tidak sesuai,</p>
                                            <p>o	- Perawat dan atau Penyalur tidak bisa menyanggupi order karena tidak ada Perawat yang bersedia maupun penyebab lainnya,</p>
                                            <p>o	- Perawat dan atau Penyalur sudah menyanggupi penerimaan order Jasa, tetapi setelah batas waktu yang ditentukan ternyata Perawat dan atau Penyalur tidak ada prestasi pekerjaan hingga batas waktu yang telah ditentukan.</p>
                                            <p>o	- Penyelesaian permasalahan melalui Ubanspace berupa keputusan untuk pengembalian dana kepada Pelanggan atau hasil keputusan dari pihak Ubanspace.</p>
                                            <p>15.	Apabila terjadi proses pengembalian dana, maka pengembalian akan dilakukan melalui rekening resmi yang terdaftar milik Pengguna sesuai dengan jumlah pengembalian dana.</p>
                                            <p>16.	Ubanspace berwenang mengambil keputusan atas permasalahan-permasalahan transaksi yang belum terselesaikan akibat tidak adanya kesepakatan penyelesaian, baik antara Pelanggan, Perawat, dan Penyalur, dengan melihat bukti-bukti yang ada. Keputusan Ubanspace adalah keputusan akhir yang tidak dapat diganggu gugat dan mengikat pihak Pelanggan, Perawat, dan Penyalur untuk mematuhinya.</p>
                                            <p>17.	Apabila Pelanggan memilih menggunakan metode pembayaran transfer bank, maka total pembayaran akan ditambahkan kode unik untuk mempermudah proses verifikasi. Dalam hal pembayaran telah diverifikasi maka kode unik tidak bisa diminta kembali.</p>
                                            <p>18.	Pembeli wajib melakukan pembayaran dengan nominal yang sesuai dengan jumlah tagihan beserta kode unik (apabila ada) yang tertera pada halaman pembayaran. Ubanspace tidak bertanggungjawab atas kerugian yang dialami Pelanggan apabila melakukan pembayaran yang tidak sesuai dengan jumlah tagihan yang tertera pada halaman pembayaran.</p>
                                            <p>19.	Ubanspace memiliki kewenangan melakukan perubahan status pemesanan menjadi "selesai" apabila tidak ada konfirmasi status prestasi pekerjaan dari pelanggan atas Jasa Perawat.</p>
                                            <p>20.	Pelanggan memahami sepenuhnya dan menyetujui bahwa tagihan yang diterbitkan adalah atas nama Ubanspace untuk kepentingan Ubanspance, Perawat dan Penyalur.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>D. TRANSAKSI PENJUALAN</p>
                                            <p>1.	Perawat dan Penyalur dilarang memanipulasi harga Jasa dengan tujuan apapun.</p>
                                            <p>2.	Perawat dan Penyalur dilarang melakukan penawaran jasa selain jasa perawat.</p>
                                            <p>3.	Perawat dan Penyalur wajib memberikan foto dan informasi dengan lengkap dan jelas sesuai dengan kondisi dan kualitas Perawat yang ditampilkan. Apabila terdapat ketidaksesuaian antara foto dan informasi Perawat yang diunggah oleh Perawat dan Penyalur dengan Jasa yang diterima oleh Pelanggan, maka Ubanspace berhak membatalkan/menahan dana transaksi.</p>
                                            <p>4.	Dalam menggunakan Fasilitas "Judul", "Foto", "Catatan" dan "Deskripsi", Penjual dilarang membuat peraturan bersifat klausula baku yang tidak memenuhi peraturan perundang-undangan yang berlaku di Indonesia, termasuk namun tidak terbatas pada (i) tidak menerima komplain, (ii) tidak menerima penggantian Perawat, (iii) tidak menerima refund (pengembalian dana), (iv) pengalihan tanggung jawab (termasuk tidak terbatas pada penanggungan biaya perawat). Jika terdapat pertentangan antara catatan dan/atau deskripsi Perawat dengan Syarat dan Ketentuan Ubanspace, maka peraturan yang berlaku adalah Syarat dan Ketentuan Ubanspace.</p>
                                            <p>5.	Perawat dan Penyalur wajib memberikan balasan untuk menerima atau menolak pesanan Jasa Perawat pihak Pelanggan dalam batas waktu 2 hari terhitung sejak adanya notifikasi pesanan Jasa Perawat dari Ubanspace. Jika dalam batas waktu tersebut tidak ada balasan dari Perawat dan atau Penyalur maka secara otomatis pesanan dianggap dibatalkan.</p>
                                            <p>6.	Ubanspace memiliki kewenangan untuk menahan pembayaran dana di Rekening Resmi Ubanspace sampai waktu yang tidak ditentukan apabila terdapat permasalahan dan klaim dari pihak Pelanggan terkait proses pekerjaan Jasa Perawat. Pembayaran baru akan dilanjut kirimkan kepada Perawat dan atau Penyalur apabila permasalahan tersebut telah selesai dan/atau Jasa Prestasi Pekerjaan telah diterima oleh Pelanggan.</p>
                                            <p>7.	Ubanspace berwenang untuk membatalkan dan/atau menahan dana transaksi dalam hal: (i) Perawat yang dipekerjaan oleh Penyalur atau Perawat yang bekerja secara individual tidak sesuai dan/atau diduga tidak sesuai dengan transaksi yang terjadi di Situs Ubanspace; (ii) Perawat dan atau Penyalur mengalihkan Jasa Perawat kepada pihak lain; (iii) jika ditemukan adanya manipulasi transaksi.</p>
                                            <p>8.	Perawat dan Penyalur memahami dan menyetujui bahwa Pajak Penghasilan Perawat dan Penyalur akan dilaporkan dan diurus sendiri oleh masing-masing Perawat dan Penyalur sesuai dengan ketentuan pajak yang berlaku di peraturan perundang-undangan di Indonesia.</p>
                                            <p>9.	Ubanspace berwenang mengambil keputusan atas permasalahan-permasalahan transaksi yang belum terselesaikan akibat tidak adanya kesepakatan penyelesaian, baik antara Perawat dan atau Penyalur bersama Pelanggan, dengan melihat bukti-bukti yang ada. Keputusan Ubanspace adalah keputusan akhir yang tidak dapat diganggu gugat dan mengikat pihak Perawat dan Penyalur serta Pelanggan untuk mematuhinya.</p>
                                            
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>E. PENATAAN TAMPILAN</p>
                                            <p>1.	Perawat dan Penyalur dilarang mempergunakan tampilan (termasuk dan tidak tebatas pada informasi perawat dan penyalur) sebagai media untuk beriklan atau melakukan promosi ke halaman situs lain diluar situs Ubanspace.</p>
                                            <p>2.	Perawat dan Penyalur dilarang memberikan data kontak pribadi dengan maksud untuk melakukan transaksi secara langsung kepada Pelanggan.</p>
                                            <p>3.	Perawat dan Penyalur dilarang memberikan keterangan (informasi Perawat dan Penyalur) selain/diluar daripada keterangan Perawat dan Penyalur yang bersangkutan.</p>
                                            <p>4.	Ubanspace memiliki kewenangan mengambil-alih sub-domain Perawat dan Penyalur jika akun Perawat dan Penyalur sudah tidak aktif lebih dari 3 bulan, dan/atau pemilik merek dagang resmi (sesuai dengan Daftar Umum Merek di Indonesia) dengan nama yang sama dengan sub-domain Perawat dan Penyalur melakukan klaim terhadapnya dikarenakan mereka ingin menggunakan sub-domain tersebut.</p>
                                            <p>5.	Ubanspace memiliki kewenangan untuk mengubah nama dan/atau memakai nama Perawat dan Penyalur dan/atau domain Pengguna untuk kepentingan internal Ubanspace.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>F. KOMISI</p>
                                            <p>1.	Ubanspace memberlakukan sistem komisi untuk setiap transaksi yang dilakukan melalui Rekening Resmi Ubanspace.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>G. HARGA</p>
                                            <p>1.	Harga Jasa Perawat yang terdapat dalam situs Ubanspace adalah harga yang ditetapkan oleh Perawat dan atau Penyalur. Perawat dan Penyalur dilarang memanipulasi harga Jasa dengan cara apapun.</p>
                                            <p>2.	Pelanggan memahami dan menyetujui bahwa kesalahan keterangan harga dan informasi lainnya yang disebabkan tidak terbaharuinya halaman situs Ubanspace dikarenakan browser/ISP yang dipakai Pelanggan adalah tanggung jawab Pelanggan.</p>
                                            <p>3.	Perawat dan Penyalur memahami dan menyetujui bahwa kesalahan ketik yang menyebabkan keterangan harga atau informasi lain menjadi tidak benar/sesuai adalah tanggung jawab Perawat dan Penyalur. Perlu diingat dalam hal ini, apabila terjadi kesalahan pengetikan keterangan harga Jasa Perawati yang tidak disengaja, Perawat dan Penyalur berhak menolak pesanan Jasa Perawat yang dilakukan oleh Pelanggan.</p>
                                            <p>4.	Pengguna memahami dan menyetujui bahwa setiap masalah dan/atau perselisihan yang terjadi akibat ketidaksepahaman antara Perawat dan Penyalur bersama Pelanggan tentang harga bukanlah merupakan tanggung jawab Ubanspace.</p>
                                            <p>5.	Dengan melakukan pemesanan melalui Ubanspace, Pengguna menyetujui untuk membayar total biaya yang harus dibayarkan sebagaimana tertera dalam halaman pembayaran, yang terdiri dari harga Jasa Perawat, ongkos negosiasi, dan biaya-biaya lain yang mungkin timbul dan akan diuraikan secara tegas dalam halaman pembayaran. Pengguna setuju untuk melakukan pembayaran melalui metode pembayaran yang telah dipilih sebelumnya oleh Pengguna.</p>
                                            <p>6.	Situs Ubanspace untuk saat ini hanya melayani transaksi dalam mata uang Rupiah.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>H. KONTEN</p>
                                            <p>1.	Dalam menggunakan setiap fitur dan/atau layanan Ubanspace, Pengguna dilarang untuk mengunggah atau mempergunakan kata-kata, komentar, gambar, atau konten apapun yang mengandung unsur SARA, diskriminasi, merendahkan atau menyudutkan orang lain, vulgar, bersifat ancaman, atau hal-hal lain yang dapat dianggap tidak sesuai dengan nilai dan norma sosial. Ubanspace berhak melakukan tindakan yang diperlukan atas pelanggaran ketentuan ini, antara lain penghapusan konten, perubahan informasi akun, pemblokiran akun, dan lain-lain.</p>
                                            <p>2.	Penguna dengan ini memahami dan menyetujui bahwa penyalahgunaan foto/gambar yang di unggah oleh Pengguna adalah tanggung jawab Pengguna secara pribadi.</p>
                                            <p>3.	Perawat dan Penyalur tidak diperkenankan untuk mempergunakan foto/gambar Perawat dan Penyalur sebagai media untuk beriklan atau melakukan promosi ke situs-situs lain diluar Situs Ubanspace, atau memberikan data kontak pribadi untuk melakukan transaksi secara langsung kepada Pelanggan.</p>
                                            <p>4.	Ketika Pengguna menggungah ke Situs Ubanspace dengan konten atau posting konten, Pengguna memberikan Ubanspace hak non-eksklusif, di seluruh dunia, secara terus-menerus, tidak dapat dibatalkan, bebas royalti, disublisensikan ( melalui beberapa tingkatan ) hak untuk melaksanakan setiap dan semua hak cipta, publisitas , merek dagang , hak basis data dan hak kekayaan intelektual yang Pengguna miliki dalam konten, di media manapun yang dikenal sekarang atau di masa depan. Selanjutnya , untuk sepenuhnya diizinkan oleh hukum yang berlaku , Anda mengesampingkan hak moral dan berjanji untuk tidak menuntut hak-hak tersebut terhadap Ubanspace.</p>
                                            <p>5.	Pengguna menjamin bahwa tidak melanggar hak kekayaan intelektual dalam mengunggah konten Pengguna kedalam situs Ubanspace. Setiap Pengguna dengan ini bertanggung jawab secara pribadi atas pelanggaran hak kekayaan intelektual dalam mengunggah konten di Situs Ubanspace.</p>
                                            <p>6.	Meskipun kami mencoba untuk menawarkan informasi yang dapat diandalkan, kami tidak bisa menjanjikan bahwa informasi jasa Perawat dan Penyalur akan selalu akurat dan terbarui, dan Pengguna setuju bahwa Pengguna tidak akan meminta Ubanspace bertanggung jawab atas ketimpangan dalam informasi Perawat dan Penyalur. Informasi Perawat dan Penyalur mungkin termasuk hak cipta, merek dagang atau hak milik lainnya.</p>
                                            <p>7.	Konten atau materi yang akan ditampilkan atau ditayangkan pada Situs Ubanspace melalui Ubanspace Website Feed akan tunduk pada Ketentuan Situs, peraturan hukum, serta etika pariwara yang berlaku.</p>
                                            <p>8.	KOL bertanggungjawab terhadap konten atau materi yang ditampilkan melalui program Ubanspace Website Feed.</p>
                                            <p>9.	Ubanspace berhak untuk sewaktu-waktu menurunkan konten atau materi yang terdapat pada Ubanspace Website Feed yang dianggap melanggar Syarat dan Ketentuan Situs, peraturan hukum yang berlaku, serta etika pariwara yang berlaku.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>I. PENARIKAN DANA</p>
                                            <p>1.	Untuk penarikan dana prestasi pekerjaan jasa perawat atau pengembalian dana dengan tujuan nomor rekening di luar bank Ubanspance apabila ada biaya tambahan akan menjadi tanggungan dari Pengguna.</p>
                                            <p>2.	Dalam hal ditemukan adanya dugaan pelanggaran terhadap Syarat dan Ketentuan Ubanspace, kecurangan, manipulasi atau kejahatan, Pengguna memahami dan menyetujui bahwa Ubanspace berhak melakukan tindakan pemeriksaan, pembekuan, penundaan dan/atau pembatalan terhadap penarikan dana yang dilakukan oleh Pengguna.</p>
                                            <p>3.	Pemeriksaan, pembekuan atau penundaan penarikan dana sebagaimana dimaksud dalam poin 2 dapat dilakukan dalam jangka waktu selama yang diperlukan oleh pihak Ubanspace.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>J. PENOLAKAN JAMINAN DAN BATASAN TANGGUNG JAWAB</p>
                                            <p>Ubanspace adalah portal web dengan model Business to Customer Marketplace, yang menyediakan layanan kepada Pengguna untuk dapat menjadi Perawat dan Penyalur maupun Pelanggan di website Ubanspace. Dengan demikian transaksi yang terjadi adalah transaksi antar member Ubanspace, sehingga Pengguna memahami bahwa batasan tanggung jawab Ubanspace secara proporsional adalah sebagai penyedia jasa portal web</p>
                                            <p>Ubanspace selalu berupaya untuk menjaga Layanan Ubanspace aman, nyaman, dan berfungsi dengan baik, tapi kami tidak dapat menjamin operasi terus-menerus atau akses ke Layanan kami dapat selalu sempurna. Informasi dan data dalam situs Ubanspace memiliki kemungkinan tidak terjadi secara real time.</p>
                                            <p>Pengguna setuju bahwa Anda memanfaatkan Layanan Ubanspace atas risiko Pengguna sendiri, dan Layanan Ubanspace diberikan kepada Anda pada "SEBAGAIMANA ADANYA" dan "SEBAGAIMANA TERSEDIA".</p>
                                            <p>Sejauh diizinkan oleh hukum yang berlaku, Ubanspace (termasuk Induk Perusahaan, direktur, dan karyawan) adalah tidak bertanggung jawab, dan Anda setuju untuk tidak menuntut Ubanspace bertanggung jawab, atas segala kerusakan atau kerugian (termasuk namun tidak terbatas pada hilangnya uang, reputasi, keuntungan, atau kerugian tak berwujud lainnya) yang diakibatkan secara langsung atau tidak langsung dari :</p>
                                            <p>•	- Penggunaan atau ketidakmampuan Pengguna dalam menggunakan Layanan Ubanspace.</p>
                                            <p>•	- Harga atau petunjuk lain yang tersedia dalam layanan Ubanspace.</p>
                                            <p>•	- Keterlambatan atau gangguan dalam Layanan Ubanspace.</p>
                                            <p>•	- Kelalaian dan kerugian yang ditimbulkan oleh masing-masing Pengguna.</p>
                                            <p>•	- Kualitas Jasa Perawat.</p>
                                            <p>•	- Pelanggaran Hak atas Kekayaan Intelektual.</p>
                                            <p>•	- Perselisihan antar pengguna.</p>
                                            <p>•	- Pencemaran nama baik pihak lain.</p>
                                            <p>•	- Setiap penyalahgunaan Jasa Perawat yang sudah dibeli pihak Pengguna.</p>
                                            <p>•	- Kerugian akibat pembayaran tidak resmi kepada pihak lain selain ke Rekening Resmi Ubanspace, yang dengan cara apa pun mengatas-namakan Ubanspace ataupun kelalaian penulisan rekening dan/atau informasi lainnya dan/atau kelalaian pihak bank.</p>
                                            <p>•	- Virus atau perangkat lunak berbahaya lainnya (bot, script, automation tool selain fitur Gold Merchant, hacking tool) yang diperoleh dengan mengakses, atau menghubungkan ke layanan Ubanspace.</p>
                                            <p>•	- Gangguan, bug, kesalahan atau ketidakakuratan apapun dalam Layanan Ubanspace.</p>
                                            <p>•	- Kerusakan pada perangkat keras Anda dari penggunaan setiap Layanan Ubanspace.</p>
                                            <p>•	- Isi, tindakan, atau tidak adanya tindakan dari pihak ketiga, termasuk terkait dengan Produk yang ada dalam situs Ubanspace yang diduga palsu.</p>
                                            <p>•	- Tindak penegakan yang diambil sehubungan dengan akun Pengguna.</p>
                                            <p>•	- Adanya tindakan peretasan yang dilakukan oleh pihak ketiga kepada akun pengguna.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>K. PELEPASAN</p>
                                            <p>Jika Anda memiliki perselisihan dengan satu atau lebih pengguna, Anda melepaskan Ubanspace (termasuk Induk Perusahaan, Direktur, dan karyawan) dari klaim dan tuntutan atas kerusakan dan kerugian (aktual dan tersirat) dari setiap jenis dan sifatnya , yang dikenal dan tidak dikenal, yang timbul dari atau dengan cara apapun berhubungan dengan sengketa tersebut. Dengan demikian maka Pengguna dengan sengaja melepaskan segala perlindungan hukum (yang terdapat dalam undang-undang atau peraturan hukum yang lain) yang akan membatasi cakupan ketentuan pelepasan ini.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>L. GANTI RUGI</p>
                                            <p>Pengguna akan melepaskan Ubanspace dari tuntutan ganti rugi dan menjaga Ubanspace (termasuk Induk Perusahaan, direktur, dan karyawan) dari setiap klaim atau tuntutan, termasuk biaya hukum yang wajar, yang dilakukan oleh pihak ketiga yang timbul dalam hal Anda melanggar Perjanjian ini, penggunaan Layanan Ubanspace yang tidak semestinya dan/ atau pelanggaran Anda terhadap hukum atau hak-hak pihak ketiga.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>M. PILIHAN HUKUM</p>
                                            <p>Perjanjian ini akan diatur oleh dan ditafsirkan sesuai dengan hukum Republik Indonesia, tanpa memperhatikan pertentangan aturan hukum. Anda setuju bahwa tindakan hukum apapun atau sengketa yang mungkin timbul dari, berhubungan dengan, atau berada dalam cara apapun berhubungan dengan situs dan/atau Perjanjian ini akan diselesaikan secara eksklusif dalam yurisdiksi pengadilan Republik Indonesia.</p>
                                            <p>kembali ke atas</p>
                                            <p>________________________________________</p>
                                            <p>N. PEMBAHARUAN</p>
                                            <p>Syarat dan ketentuan mungkin di ubah dan/atau diperbaharui dari waktu ke waktu tanpa pemberitahuan sebelumnya. Ubanspace menyarankan agar anda membaca secara seksama dan memeriksa halaman Syarat dan ketentuan ini dari waktu ke waktu untuk mengetahui perubahan apapun. Dengan tetap mengakses dan menggunakan layanan Ubanspace, maka pengguna dianggap menyetujui perubahan-perubahan dalam Syarat dan ketentuan.</p>
                                            <p>kembali ke atas</p>
                                            <p>Pembaruan Terakhir : 22/04/2018 17:06</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 control-label">
                                        <input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 control-label">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
