<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhtController extends Controller
{
    public function showInfo(Request $request)
    {
        
        $information = [
            [
                'name' => 'Hoàng Đình Cảnh',
                'birth' => '26/01/2001',
                'home' => 'Thôn 7, Xuân Lai, Thọ Xuân, Thanh Hóa',
                'email' => 'canhhdph31085@fpt.edu.vn',
                'phone' => '0867007603'
            ]
        ];
        return view('info', compact('information'));

    }
}
