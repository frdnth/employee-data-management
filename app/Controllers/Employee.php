<?php

namespace App\Controllers;

class Employee extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Employee Data'
		];
		return view('pages/Employee', $data);
	}

	public function add()
	{
		$data = [
			'title' => 'Add Employee Data'
		];
		return view('pages/Add', $data);
	}

	public function edit()
	{
		$data = [
			'title' => 'Edit Employee Data'
		];
		return view('pages/Edit', $data);
	}

	public function set_status()
	{
		$data = [
			'title' => 'Set Employee Status'
		];
		return view('pages/SetStatus', $data);
	}

	public function download()
	{
		$data = [
			'title' => 'Download'
		];
		return view('pages/Download', $data);
	}
}
