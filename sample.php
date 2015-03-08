<?php
include('php_nowdb.php');

$php_nowdb = new php_nowdb();

/*
// Sample insert
$field = array(
	'name' => 'Rizal Syahrizal',
	'address' => 'Jalan Kuning',
	'phone' => '872899999',
	'skill' => 'Android, Javascript'
);

$query = $php_nowdb->insert('users', $field);
echo '<pre>';
print_r($query);
echo '</pre>';
*/

/*
// Sample update by id
$field = array(
	'id' => '54fbd5908d909e6723aaea00',
	'skill' => 'Memacul, Memanah'
);

$query = $php_nowdb->update_by_id('users', $field);
if ($query)
{
	echo 'Berhasil mengupdate';
}
*/

/*
// Sample delete by id
$query = $php_nowdb->delete_by_id('users', '54fbe2ae8d909e8328aae9ff');

if ($query)
{
	echo 'Berhasil menghapus';
}
*/

/*
// Sample select where like, search.
$field = array(
	'like_field' => 'skill',
	'like_value' => 'Java'
);

$query = $php_nowdb->select_where_like('users', $field);

echo '<pre>';
print_r($query);
echo '</pre>';
*/

// Sample select
$query = $php_nowdb->select('users', 10);
echo '<pre>';
print_r($query);
echo '</pre>';