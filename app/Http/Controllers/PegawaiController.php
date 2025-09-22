<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data contoh
        $name = "Muhammad Taufiq";
        $birthdate = "2006-09-05";
        $tgl_harus_wisuda = "2028-10-28";
        $current_semester = 3;
        $hobbies = ["Drifting"];
        $future_goal = "Menjadi Software Engineer";

        // Hitung umur
        $my_age = Carbon::parse($birthdate)->age;

        // Hitung sisa hari ke wisuda
        $time_to_study_left = Carbon::now()->diffInDays(Carbon::parse($tgl_harus_wisuda), false);

        // Tentukan motivasi
        if ($current_semester < 3) {
            $motivasi = "Masih Awal, Kejar TAK";
        } else {
            $motivasi = "Jangan main-main, kurang-kurangi main game!";
        }

        // Kirim data ke view
        return view('pegawai', compact(
            'name',
            'my_age',
            'hobbies',
            'tgl_harus_wisuda',
            'time_to_study_left',
            'current_semester',
            'motivasi',
            'future_goal'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
