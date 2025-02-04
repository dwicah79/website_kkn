<?php

namespace App\Http\Controllers;

use App\Models\dusun;
use App\Models\News;
use App\Models\Umkm;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datadusun = dusun::with('job_title')->get();
        $dataumkm = Umkm::paginate(10);
        $datanews = News::paginate(10);

        return $data = [
            'datadusun' => $datadusun,
            'dataumkm' => $dataumkm,
            'datanews' => $datanews,
        ];

        return view('/', $data);
    }
}
