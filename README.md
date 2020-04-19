# What Is
Wrapper/Library for NowDB - The Simplest Database Service Ever!

If you’re not familiar with nowdb, please read about it here http://nowdb.net/docs. Execute sample.php for trying CRUD sample.

Instruction: Check Curl installation on your engine, since it’s needed for this library. Do uncomment and comment to check if each script works properly. Please note that this sample script uses dummy data made by author. When you change it with your own data, don’t forget to chance credential settings in php nowdb class, such as appid, project, etc. If the data is empty, it’s possible that another user is trying delete sample at the same time. In that case, please execute nowdb insert script first.

For now, this sample is available on native PHP only. For trying it out on a framework, read its library integration instruction.

### Usage

Just include NowDB class in your environment.

```php
include_once ( APPPATH . 'libraries/php_nowdb.php' );

$NowDB = new NowDB();
print_r($NowDB->select('users', 10));
```
	
That's it!