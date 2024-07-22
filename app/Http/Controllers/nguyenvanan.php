<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nguyenvanan extends Controller
{
    public function showthongtin(){
        $sinhvien = [
            [
                'tensinhvien' => 'Nguyễn Văn An',
                'tuoi' => '20',
                'msv' => 'PH39043',
                'quequan' => 'Hà Nội',
                'chuyennganh' =>'Lập Trình Web',
                'Email' =>'annvph39043@fpt.edu.vn'
            ]
            
        ];
        return view('thong-tin-sv')->with([
            'sinhvien'=>$sinhvien
        ]);
    }
}
