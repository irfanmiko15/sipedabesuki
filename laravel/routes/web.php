<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


//auth
Route::get('/signin', 'AuthController@index')->name('signin');
Route::post('/login', 'AuthController@authenticate')->name('login');
Route::get('logout', 'AuthController@logout')->name('logout');
Route::get('pengumuman','PengumumanController@index')->name('pengumuman');
Route::post('cari-pengumuman', 'PengumumanController@search')->name('pencarian-pengumuman');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('ganti-password','PasswordController@index')->name('ganti-password');
Route::patch('update-password', 'PasswordController@update')->name('update-password');
//dashboard
Route::group(['middleware'=>['auth','CekAttempt:admin']],function(){
    Route::get('/dashboard', 'DashboardController@indexadmin')->name('dashboard');

   
    //master berkas
    Route::get('/master-berkas', 'MasterBerkasController@index')->name('master-berkas');
    Route::post('/tambah-master-berkas', 'MasterBerkasController@create')->name('tambah-master-berkas');
    Route::get('/master-berkas/delete/{id}', 'MasterBerkasController@delete')->name('delete-master-berkas');
    Route::get('/master-berkas/view/{id}', 'MasterBerkasController@show')->name('detail-master-berkas');

    //master sekolah
    Route::get('/master-sekolah', 'MasterSekolahController@index')->name('master-sekolah');
    Route::post('/tambah-master-sekolah', 'MasterSekolahController@create')->name('tambah-master-sekolah');
    Route::get('/master-sekolah/delete/{id}', 'MasterSekolahController@delete')->name('delete-master-sekolah');
    Route::get('/master-sekolah/view/{id}', 'MasterSekolahController@show')->name('detail-master-sekolah');
    Route::post('/master-sekolah/update/{id}', 'MasterSekolahController@update')->name('update-master-sekolah');

    //master user
    Route::get('/master-user-sma', 'MasterUserController@indexsma')->name('master-user-sma');
    Route::get('/master-user-s1', 'MasterUserController@indexs1')->name('master-user-s1');
    Route::post('/tambah-master-user', 'MasterUserController@create')->name('tambah-master-user');
    Route::post('/master-user/update/{id}', 'MasterUserController@update')->name('update-master-user');
    Route::get('/master-user/delete/{id}', 'MasterUserController@delete')->name('delete-master-user');
    Route::get('/master-user/aktif/{id}', 'MasterUserController@aktif')->name('aktif-user');
    Route::get('/master-user/nonaktif/{id}', 'MasterUserController@nonaktif')->name('nonaktif-user');

    //master jurusan
    Route::get('/master-jurusan', 'JurusanController@index')->name('master-jurusan');
    Route::post('/tambah-master-jurusan', 'JurusanController@create')->name('tambah-master-jurusan');
    Route::post('/master-jurusan/update/{id}', 'JurusanController@update')->name('update-master-jurusan');
    Route::get('/master-jurusan/delete/{id}', 'JurusanController@delete')->name('delete-master-jurusan');

    //data seleksi administrasi
    Route::get('/seleksi-administrasi-s1', 'SeleksiAdministrasiController@indexs1')->name('seleksi-administrasi-s1');
    Route::get('/seleksi-administrasi-sma', 'SeleksiAdministrasiController@indexsma')->name('seleksi-administrasi-sma');
    Route::get('/seleksi-administrasi-sma/view/{id}', 'SeleksiAdministrasiController@showsma')->name('detail-seleksi-administrasi-sma');
    Route::get('/seleksi-administrasi-s1/view/{id}', 'SeleksiAdministrasiController@shows1')->name('detail-seleksi-administrasi-s1');
    Route::get('/seleksi-administrasi-s1/lolos/{id}', 'SeleksiAdministrasiController@loloss1')->name('lolos-seleksi-administrasi-s1');
    Route::get('/seleksi-administrasi-s1/tidak-lolos/{id}', 'SeleksiAdministrasiController@tidakloloss1')->name('tidak-lolos-seleksi-administrasi-s1');
    Route::get('/seleksi-administrasi-sma/lolos/{id}', 'SeleksiAdministrasiController@lolossma')->name('lolos-seleksi-administrasi-sma');
    Route::get('/seleksi-administrasi-sma/tidak-lolos/{id}', 'SeleksiAdministrasiController@tidaklolossma')->name('tidak-lolos-seleksi-administrasi-sma');
    Route::post('/tambah-nilai-akhir', 'SeleksiAdministrasiController@insertnilai')->name('tambah-nilai-akhir');
    Route::post('/nilai-akhir/update/{id}', 'SeleksiAdministrasiController@updatenilai')->name('update-nilai-akhir');


    //data seleksi wawancara
    Route::get('/seleksi-wawancara-s1', 'SeleksiWawancaraController@indexs1')->name('seleksi-wawancara-s1');
    Route::get('/seleksi-wawancara-sma', 'SeleksiWawancaraController@indexsma')->name('seleksi-wawancara-sma');
    Route::get('/seleksi-wawancara-sma/view/{id}', 'SeleksiWawancaraController@showsma')->name('detail-seleksi-wawancara-sma');
    Route::get('/seleksi-wawancara-s1/view/{id}', 'SeleksiWawancaraController@shows1')->name('detail-seleksi-wawancara-s1');
    Route::post('/jadwal-wawancara/update/{id}', 'SeleksiWawancaraController@jadwal')->name('update-jadwal-wawancara');


    //seleksi akhir
    Route::get('/seleksi-akhir-s1', 'SeleksiAkhirController@indexs1')->name('seleksi-akhir-s1');
    Route::get('/seleksi-akhir-sma', 'SeleksiAkhirController@indexsma')->name('seleksi-akhir-sma');
    Route::get('/seleksi-akhir-s1/lolos/{id}', 'SeleksiAkhirController@loloss1')->name('lolos-seleksi-akhir-s1');
    Route::get('/seleksi-akhir-s1/tidak-lolos/{id}', 'SeleksiAkhirController@tidakloloss1')->name('tidak-lolos-seleksi-akhir-s1');
    Route::get('/seleksi-akhir-sma/lolos/{id}', 'SeleksiAkhirController@lolossma')->name('lolos-seleksi-akhir-sma');
    Route::get('/seleksi-akhir-sma/tidak-lolos/{id}', 'SeleksiAkhirController@tidaklolossma')->name('tidak-lolos-seleksi-akhir-sma');
});

//user
Route::group(['middleware'=>['auth','CekAttempt:S1,SMA']],function(){
    Route::get('/dashboard-user', 'DashboardController@indexuser')->name('dashboard-user');
    Route::get('/download-berkas/{id}', 'DashboardController@downloadfile')->name('download-berkas');

        
    //ukt
    Route::get('/ukt', 'UKTController@index')->name('ukt');
    Route::post('/tambah-berkas-ukt', 'UKTController@create')->name('tambah-berkas-ukt');
    Route::get('/berkas-ukt/delete/{id}', 'UKTController@delete')->name('delete-berkas-ukt');

    //form pendaftaran
    Route::get('/form-pendaftaran', 'FormPendaftaranController@index')->name('form-pendaftaran');
    Route::post('/tambah-form-pendaftaran', 'FormPendaftaranController@create')->name('tambah-form-pendaftaran');
    Route::get('/form-pendaftaran/delete/{id}', 'FormPendaftaranController@delete')->name('delete-form-pendaftaran');

    //identitas
    Route::get('/identitas', 'IdentitasController@index')->name('identitas');
    Route::post('/tambah-berkas-identitas', 'IdentitasController@create')->name('tambah-berkas-identitas');
    Route::get('/identitas/delete/{id}', 'IdentitasController@delete')->name('delete-berkas-identitas');


    //bukti penerimaan universitas
    Route::get('/bukti-penerimaan', 'BuktiPenerimaanController@index')->name('bukti-penerimaan');
    Route::post('/tambah-bukti-penerimaan', 'BuktiPenerimaanController@create')->name('tambah-bukti-penerimaan');
    Route::get('/bukti-penerimaan/delete/{id}', 'BuktiPenerimaanController@delete')->name('delete-bukti-penerimaan');

    //foto rumah
    Route::get('/foto-rumah', 'FotoRumahController@index')->name('foto-rumah');
    Route::post('/tambah-foto-rumah', 'FotoRumahController@create')->name('tambah-foto-rumah');
    Route::get('/foto-rumah/delete/{id}', 'FotoRumahController@delete')->name('delete-foto-rumah');


    //foto diri
    Route::get('/foto-diri', 'FotoDiriController@index')->name('foto-diri');
    Route::post('/tambah-foto-diri', 'FotoDiriController@create')->name('tambah-foto-diri');
    Route::get('/foto-diri/delete/{id}', 'FotoDiriController@delete')->name('delete-foto-diri');

    //SKTM
    Route::get('/sktm', 'SKTMController@index')->name('sktm');
    Route::post('/tambah-berkas-sktm', 'SKTMController@create')->name('tambah-berkas-sktm');
    Route::get('/sktm/delete/{id}', 'SKTMController@delete')->name('delete-berkas-sktm');

    //Tagihan
    Route::get('/tagihan', 'TagihanController@index')->name('tagihan');
    Route::post('/tambah-berkas-tagihan', 'TagihanController@create')->name('tambah-berkas-tagihan');
    Route::get('/tagihan/delete/{id}', 'TagihanController@delete')->name('delete-berkas-tagihan');

    //bansos
    Route::get('/bansos', 'BansosController@index')->name('bansos');
    Route::post('/tambah-berkas-bansos', 'BansosController@create')->name('tambah-berkas-bansos');
    Route::get('/bansos/delete/{id}', 'BansosController@delete')->name('delete-berkas-bansos');

    //ijazah skhu
    Route::get('/ijazah-skhu', 'IjazahSkhuController@index')->name('ijazah-skhu');
    Route::post('/tambah-berkas-ijazah-skhu', 'IjazahSkhuController@create')->name('tambah-berkas-ijazah-skhu');
    Route::get('/ijazah-skhu/delete/{id}', 'IjazahSkhuController@delete')->name('delete-berkas-ijazah-skhu');

    //Penghasilan
    Route::get('/penghasilan', 'PenghasilanController@index')->name('penghasilan');
    Route::post('/tambah-berkas-penghasilan', 'PenghasilanController@create')->name('tambah-berkas-penghasilan');
    Route::get('/penghasilan/delete/{id}', 'PenghasilanController@delete')->name('delete-berkas-penghasilan');

    //rapor
    Route::get('/rapor', 'RaporController@index')->name('rapor');
    Route::post('/tambah-berkas-rapor', 'RaporController@create')->name('tambah-berkas-rapor');
    Route::get('/rapor/delete/{id}', 'RaporController@delete')->name('delete-berkas-rapor');

    //surat pernyataan
    Route::get('/surat-pernyataan', 'SuratPernyataanController@index')->name('surat-pernyataan');
    Route::post('/tambah-berkas-surat-pernyataan', 'SuratPernyataanController@create')->name('tambah-berkas-surat-pernyataan');
    Route::get('/surat-pernyataan/delete/{id}', 'SuratPernyataanController@delete')->name('delete-berkas-surat-pernyataan');

    //orang tua
    Route::get('/orang-tua', 'OrangTuaController@index')->name('orang-tua');
    Route::post('/tambah-data-orang-tua', 'OrangTuaController@create')->name('tambah-data-orang-tua');
    Route::get('/orang-tua/delete/{id}', 'OrangTuaController@delete')->name('delete-data-orang-tua');

    //Saudara
    Route::get('/saudara', 'SaudaraController@index')->name('saudara');
    Route::post('/tambah-saudara', 'SaudaraController@create')->name('tambah-saudara');
    Route::get('/saudara/delete/{id}', 'SaudaraController@delete')->name('delete-saudara');
    Route::post('/saudara/update/{id}', 'SaudaraController@update')->name('update-saudara');

    //Tanggungan
    Route::get('/tanggungan', 'TanggunganController@index')->name('tanggungan');
    Route::post('/tambah-tanggungan', 'TanggunganController@create')->name('tambah-tanggungan');
    Route::get('/tanggungan/delete/{id}', 'TanggunganController@delete')->name('delete-tanggungan');
    Route::post('/tanggungan/update/{id}', 'TanggunganController@update')->name('update-tanggungan');

    //prestasi
    Route::get('/prestasi', 'PrestasiController@index')->name('prestasi');
    Route::post('/tambah-prestasi', 'PrestasiController@create')->name('tambah-prestasi');
    Route::get('/prestasi/delete/{id}', 'PrestasiController@delete')->name('delete-prestasi');

    //nilai
    Route::get('/nilai-rapor', 'NilaiRaporController@index')->name('nilai-rapor');
    Route::get('/nilai-us', 'NilaiRaporController@indexus')->name('nilai-us');
    Route::get('/nilai-un', 'NilaiRaporController@indexun')->name('nilai-un');
    Route::post('/tambah-nilai-us', 'NilaiRaporController@createus')->name('tambah-nilai-us');
    Route::post('/tambah-nilai-un', 'NilaiRaporController@createun')->name('tambah-nilai-un');
    Route::post('/tambah-nilai-rapor', 'NilaiRaporController@create')->name('tambah-nilai-rapor');
    Route::post('/nilai/update/{id}', 'NilaiRaporController@update')->name('update-nilai');
    Route::get('/nilai-rapor/delete/{id}', 'NilaiRaporController@delete')->name('delete-nilai-rapor');

    //riwayat pendidikan
    Route::get('/riwayat-pendidikan', 'RiwayatPendidikanController@index')->name('riwayat-pendidikan');
    Route::post('/tambah-riwayat-pendidikan', 'RiwayatPendidikanController@create')->name('tambah-riwayat-pendidikan');
    Route::get('/riwayat-pendidikan/delete/{id}', 'RiwayatPendidikanController@delete')->name('delete-riwayat-pendidikan');

    //pendidikan s1
    Route::get('/pendidikan-s1', 'PendidikanS1Controller@index')->name('pendidikan-s1');
    Route::post('/tambah-pendidikan-s1', 'PendidikanS1Controller@create')->name('tambah-pendidikan-s1');
    Route::get('/pendidikan-s1/delete/{id}', 'PendidikanS1Controller@delete')->name('delete-pendidikan-s1');
    Route::post('/pendidikan-s1/update/{id}', 'PendidikanS1Controller@update')->name('update-pendidikan-s1');

    //data-diri

    Route::get('/data-diri', 'DataDiriController@index')->name('data-diri');
    Route::post('/data-diri/update/{id}', 'DataDiriController@update')->name('update-data-diri');

    //data rumah
    Route::get('/data-rumah', 'DataRumahController@index')->name('data-rumah');
    Route::post('/tambah-data-rumah', 'DataRumahController@create')->name('tambah-data-rumah');
    Route::post('/data-rumah/update/{id}', 'DataRumahController@update')->name('update-data-rumah');

    //finalisasi
    Route::get('/finalisasi-data', 'ValidasiController@index')->name('finalisasi-data');
    Route::get('/validasi', 'ValidasiController@submit')->name('validasi-data');
});



