# php-nowdb
NowDB Wrapper/Library for NowDB - The Simplest Database Service Ever!

Jika anda belum mengetahui apa itu nowdb silahkan buka link http://nowdb.net/docs

Silahkan eksekusi sample.php jika ingin mencoba sample CRUD. 

Petunjuk :
Untuk mencoba, periksa dulu installasi Curl di mesin. Karena library ini membutuhkannya.
Uncomment dan comment untuk mengecek satu persatu apakah skrip bekerja. 
Skrip contoh ini masih menggunakan sample data dummy yang author buat. 
Jika ingin menggantinya dengan data sendiri, jangan lupa ganti credential di file php nowdb class, seperti appid, project, dsb. 
Jika data kosong barangkali ada user yang sedang sama-sama mencoba sample delete, silahkan eksekusi skrip nowdb insert.

Sementara ini, sample yang ada hanya dalam native PHP. Jika ingin mencobanya di suatu framework. 
Silahkan baca kembali dokumentasi petunjuk integrasi library masing-masing framework.

1. Sample untuk Codeigniter, taruh lib php nowdb di folder libraries dan load di controller :
		
		your_controller.php
		
		...
		include_once ( APPPATH.'libraries/php_nowdb.php' );
		$php_nowdb = new php_nowdb();
		print_r($php_nowdb->select('users', 10));
		...
		
2. Sample untuk Panada framework, taruh lib php nowdb di libraries, tambahkan namespace libraries name di dalam class php nowdb :
		
		php_nowdb.php
		
		...
		namespace Libraries;
		
		class php_nowdb {
	
			// Credential
			var $app_id = '54fbd4b28d909e3423aae9ff'; // Change with yours
			var $token = '537ce7758d909ee80509f015'; // Change with yours
			
		...
		
		your_controller.php
		
		...
		$this->php_nowdb = new Libraries\php_nowdb;
		print_r($php_nowdb->select('users', 10));
		...

Jika ada pertanyaan silahkan kirim email ke ahmadoriza@gmail.com 

Selamat mengulik !
