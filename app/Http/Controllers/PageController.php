<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Nampilin halaman login
    public function login()
    {
        return view('login');
    }

    // nampilin dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');

        return view('dashboard', compact('username'));
    }

    // nampilin profil
    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');

        return view('profile', compact('username'));
    }

    // nampilin data dummy
    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');

        // Data dummy
        $events = [
            [
                'id' => 1,
                'nama_event' => 'Belajar Dasar-Dasar Artificial Intelligence',
                'pemateri' => 'Prof. Andrew Goldstein Silalahi',
                'kategori' => 'Pemula',
                'kuota' => 200,
                'status' => 'Dibuka',
                'foto_acara' => 'images/acara/acara_BelajarDasarArtificialIntelligence.jpg',
                'foto_pemateri' => 'images/pembicara/pembicara_AndrewGoldsteinSilalahi.jpg'
            ],
            [
                'id' => 2,
                'nama_event' => 'Belajar Etika Dalam Prompting',
                'pemateri' => 'Prof. Dinar Atha Dwi Novelian',
                'kategori' => 'Pemula',
                'kuota' => 140,
                'status' => 'Dibuka',
                'foto_acara' => 'images/acara/acara_BelajarEtikaDalamPrompting.jpg',
                'foto_pemateri' => 'images/pembicara/pembicara_DinarAthaDwiNovelian.jpg'
            ],
            [
                'id' => 3,
                'nama_event' => 'Prompt Engineering Dalam Startup',
                'pemateri' => 'Prof. Robby Ibrahimovic Wibowo',
                'kategori' => 'Expert',
                'kuota' => 50,
                'status' => 'Penuh',
                'foto_acara' => 'images/acara/acara_PromptEngineeringDalamStartup.jpg',
                'foto_pemateri' => 'images/pembicara/pembicara_RobbyIbrahimovicWibowo.jpg'
            ],
            [
                'id' => 4,
                'nama_event' => 'Mengenal Lebih Luas Tentang LLM',
                'pemateri' => 'Prof. Bima Tri Kunriawan',
                'kategori' => 'Pemula',
                'kuota' => 130,
                'status' => 'Dibuka',
                'foto_acara' => 'images/acara/acara_MengenalLebihLuasTentangLLM.png',
                'foto_pemateri' => 'images/pembicara/pembicara_BimaTriKurniawan.jpg'
            ],
        ];

        return view('pengelolaan', compact('events', 'username'));
    }
}

