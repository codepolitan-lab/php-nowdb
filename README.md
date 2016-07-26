# php-nowdb
Wrapper/Library for NowDB - The Simplest Database Service Ever!

If you’re not familiar with nowdb, please read about it here http://nowdb.net/docs. Execute sample.php for trying CRUD sample.

Instruction: Check Curl installation on your engine, since it’s needed for this library. Do uncomment and comment to check if each script works properly. Please note that this sample script uses dummy data made by author. When you change it with your own data, don’t forget to chance credential settings in php nowdb class, such as appid, project, etc. If the data is empty, it’s possible that another user is trying delete sample at the same time. In that case, please execute nowdb insert script first.

For now, this sampe is available on native PHP only. For trying it out on a framework, read its library integration instruction.

Sample for Codeigniter framework, paste lib php nowdb in libraries folder and load it in controller.

	your_controller.php

	...
	include_once ( APPPATH.'libraries/php_nowdb.php' );
	$php_nowdb = new php_nowdb();
	print_r($php_nowdb->select('users', 10));
	...
	
Sample for Panada framework, place lib php nowdb in libraries, add libraries name namespace in class php nowdb.
php_nowdb.php

	...
	namespace Libraries;

	class php_nowdb {

		// Credential
		public $app_id = '54fbd4b28d909e3423aae9ff'; // Change with yours
		public $token = '537ce7758d909ee80509f015'; // Change with yours

	...

	your_controller.php

	...
	$this->php_nowdb = new Libraries\php_nowdb;
	print_r($this->php_nowdb->select('users', 10));
	...

Happy coding!
