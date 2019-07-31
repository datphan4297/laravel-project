<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function goiTrangChu() {
    	return view('theme/index');

    }

    public function goiSanPham() {
    	echo 'Day la trang sp';
    }
}
