<?php
Route::model('ruangan',Akademik\Ruangan::class);
Route::model('mapelkategori',Akademik\KategoriMataPelajaran::class);
Route::model('matapelajaran',Akademik\MataPelajaran::class);
Route::model('jurusan',Akademik\jurusan::class);
Route::model('kelas',Akademik\Kelas::class);
Route::model('tahunajaran',Akademik\TahunAjaran::class);
Route::model('kebutuhankhusus',Akademik\KebutuhanKhusus::class);
Route::model('pegawai',Akademik\Pegawai::class);
Route::model('tugas',Akademik\PegawaiTugas::class);
Route::model('guru',Akademik\Guru::class);
Route::model('hobi',Akademik\Hobi::class);
Route::model('ekskul',Akademik\Ekskul::class);
Route::model('ijazah',Akademik\Ijazah::class);
Route::model('akta',Akademik\Akta::class);
Route::model('golongan',Akademik\GolonganPegawai::class);
Route::model('pangkat',Akademik\PangkatPegawai::class);


Route::get('/', function () {
	return redirect()->route('sesi.login.form');
});
/**
 *  bagian login system
 */
Route::group(['prefix'=>'sesi','namespace'=>'sesi','as'=>'sesi.','middleware'=>'UserAccessControll:guest'],function ()
{
	Route::get('/',function ()
	{
		return redirect()->route('sesi.login.form');
	});
	Route::get('login',['as'=>'login.form','uses'=>'SesiController@form']);
	Route::post('login',['as'=>'login.send','uses'=>'SesiController@login']);
	Route::get('logout',['as'=>'logout','uses'=>'SesiController@logout']);
});
Route::get("do",['as'=>'pegawai.do',"middleware"=>"UserAccessControll:pegawai",'uses'=>'sesi\SesiController@pegawaiRole']);
Route::post("do",['as'=>'pegawai.do.go',"middleware"=>"UserAccessControll:pegawai",'uses'=>'sesi\SesiController@pegawaiRoleSelect']);
/**
 * bagian routing unutk pegawai
 */
	Route::group(['namespace'=>'Pegawai'],function()
	{
		/**
		 * bagian routing untuk Stuff tu
		 */
		Route::group(['prefix'=>'stafftu','namespace'=>'StaffTu','middleware'=>'UserAccessControll:pegawai,stafftu'],function (){
				Route::get('/',['as'=>'landing','uses'=>'Landing@page']);
				Route::group(['namespace'=>'Akademik','prefix'=>'akademik'],function ()
				{
					Route::get('/',['as'=>'stafftu.akademik.index','uses'=>function ()
					{
						return redirect()->route('stafftu.akademik.ruangan.index');
					}]);
					Route::resources([
						'ruangan'=>'RuanganController',
						'matapelajaran'=>'MataPelajaranController',
						'mapelkategori'=>'MataPelajaranKategoriController',
						'jurusan'=>'JurusanController',
						'kelas'=>'KelasController',
						'tahunajaran'=>'TahunAjaranController',
						'ekskul'=>'EkskulController',

						]);
				});
				Route::group(['namespace'=>'Kepegawaian','prefix'=>'kepegawaian'],function ()
				{
					Route::get('/',['as'=>'stafftu.kepegawaian.index','uses'=>function ()
					{
						return redirect()->route('stafftu.kepegawaian.pegawai.index');
					}]);
					Route::resources([
						'pegawai'=>'PegawaiController',
						'tugas'=>'TugasController',
						'guru'=>'GuruController',
						'diklat'=>'DiklatController',
						'pendidikan'=>'PendidikanController',
						'pekerjaan'=>'PekerjaanController',
						'masakerja'=>'MasaKerjaController',
						]);
					
				});
				Route::group(['namespace'=>'Siswa','prefix'=>'siswa'],function ()
				{
					Route::get('/',['as'=>'stafftu.siswa.index','uses'=>function ()
					{
						return redirect()->route('stafftu.siswa.siswa.index');
					}]);
					Route::resource('siswa','StudentController');
					Route::resource('siswahobi','SiswaHobiController');
				});

				Route::group(['namespace'=>'Pengaturan','prefix'=>'pengaturan'],function(){
					Route::get('/',['as'=>'stafftu.pengaturan.index','uses'=>function(){
						return redirect()->route('stafftu.pengaturan.hobi.index');

					}]);
					Route::resources([
						'hobi'=>'HobiController',
						'kebutuhankhusus'=>'KebutuhanKhususController',
						'ijazah'=>'IjazahController',
						'akta'=>'AktaController',
						'golongan'=>'GolonganController',
						'pangkat'=>'PangkatController',
					]);
				});
			}
		);
		/**
		 * routing untuk bagian guru
		 */
		Route::group(['prefix'=>'guru','namespace'=>'Guru','as'=>'guru.','middleware'=>'UserAccessControll:pegawai,guru'],function ()
		{
			Route::get('/',['as'=>'landing']);
		});
		/**
		 * routing untuk bagian walikelas
		 */
		Route::group(['prefix'=>'walikelas','namespace'=>'WaliKelas','as'=>'walikelas.','middleware'=>'UserAccessControll:pegawai,walikelas'],function ()
		{
			Route::get('/',['as'=>'landing']);
		});
		/**
		 * routing untuk bagian kepala sekolah
		 */
		Route::group(['prefix'=>'kepalasekolah','namespace'=>'KepalaSekolah','as'=>'kepalasekolah.','middleware'=>'UserAccessControll:pegawai,kepalasekolah'],function ()
		{
			Route::get('/',['as'=>'landing']);
		});
		/**
		 * routing untuk bagian administratif
		 */
		Route::group(['prefix'=>'administratif','namespace'=>'Administratif','as'=>'administratif.','middleware'=>'UserAccessControll:pegawai,administratif'],function ()
		{
			Route::get('/',['as'=>'landing']);
		});
	});
/**
 * 	routing untuk siswa
 */
Route::group(['namespace'=>'Siswa'],function ()
{
	
});