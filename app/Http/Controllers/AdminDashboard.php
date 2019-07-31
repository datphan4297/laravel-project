<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
	public function index() {
		$test = 'Truyen bien vao view';
		
		return view('admin/page/dashboard', compact('test'));
	}

	public function goiKim () {
		echo 'alo alo Kim';
	}

	public function product () {
		return view('admin/page/product');
	}

}
