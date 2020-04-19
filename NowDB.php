<?php

/**
 * Simple Interface for NowDB.
 * 
 * Nowdb is REST api based database. We can call it Dbaas (Database as a service)
 * Nowdb use MongoDB as its engine.
 * 
 * @author Gemblue
 * @package Main
 */

class NowDB {
	
	// Credentials
	public $app_id = '54fbd4b28d909e3423aae9ff'; // Change with yours
	public $token = '537ce7758d909ee80509f015'; // Change with yours
	public $project = 'codepolitan_records'; // Change with yours
	
	// API Url
	public $select_url = 'http://io.nowdb.net/operation/select_all';
	public $insert_url = 'http://io.nowdb.net/operation/insert';
	public $update_by_id_url = 'http://io.nowdb.net/operation/update_id';
	public $delete_by_id_url = 'http://io.nowdb.net/operation/delete_id';
	public $select_where_like_url = 'http://io.nowdb.net/operation/select_wherelike';
	
	// Select
	public function select($table, $limit = 5)
	{	
		$param = array(
			'appid' => $this->app_id, 
			'token' => $this->token, 
			'project' => $this->project, 
			'collection' => $table,
			'limit' => $limit
		);

		$operation = $this->http_request($this->select_url, $param);
		return $operation;
	}	
	
	// Select where like
	public function select_where_like($table, $fields)
	{	
		$param = array(
			'appid' => $this->app_id, 
			'token' => $this->token, 
			'project' => $this->project, 
			'collection' => $table
		);
		
		$param = array_merge($fields, $param);

		$operation = $this->http_request($this->select_where_like_url, $param);
		return $operation;
	}	
	
	// Insert
	public function insert($table, $fields)
	{	
		$param = array(
			'appid' => $this->app_id, 
			'token' => $this->token, 
			'project' => $this->project, 
			'collection' => $table
		);
		
		$param = array_merge($fields, $param);

		$operation = $this->http_request($this->insert_url, $param);
		return $operation;
	}	
	
	// Update by id
	public function update_by_id($table, $fields)
	{	
		$param = array(
			'appid' => $this->app_id, 
			'token' => $this->token, 
			'project' => $this->project, 
			'collection' => $table
		);
		
		$param = array_merge($fields, $param);

		$operation = $this->http_request($this->update_by_id_url, $param);
		
		if ($operation->status == 1 && $operation->message == 'Record Updated')
		{
			return true;
		}
		else
		{
			return false;
		}
	}	
	
	// Delete by id
	public function delete_by_id($table, $id)
	{	
		$param = array(
			'appid' => $this->app_id, 
			'token' => $this->token, 
			'project' => $this->project, 
			'collection' => $table,
			'id' => $id
		);
		
		$operation = $this->http_request($this->delete_by_id_url, $param);
		
		if ($operation->status == 1 && $operation->message == 'Record Removed')
		{
			return true;
		}
		else
		{
			return false;
		}
	}	
	
	private function http_request($url, $param)
	{
		$param = http_build_query($param);
		
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_URL, $url);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $param);
		curl_setopt($curl_handle, CURLOPT_HEADER, 0);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_TIMEOUT,30);
		curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

		$results = curl_exec($curl_handle);
		
		curl_close($curl_handle);
		
		return json_decode($results);
	}
}
