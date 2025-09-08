<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        // Data sejarah Universitas Singaperbangsa Karawang
        $universityHistory = [
            'name' => 'Universitas Singaperbangsa Karawang',
            'acronym' => 'UNSIKA',
            'established' => '1982',
            'founder' => 'Yayasan Singaperbangsa',
            'location' => 'Karawang, Jawa Barat, Indonesia',
            'vision' => 'Menjadi universitas unggul dalam pengembangan ilmu pengetahuan, teknologi, dan seni yang berlandaskan nilai-nilai keislaman.',
            'mission' => [
                'Menyelenggarakan pendidikan tinggi yang berkualitas',
                'Mengembangkan penelitian yang inovatif',
                'Melaksanakan pengabdian kepada masyarakat',
                'Membangun kerjasama dengan berbagai pihak'
            ],
            'history' => [
                [
                    'year' => '1982',
                    'event' => 'Universitas Singaperbangsa Karawang didirikan oleh Yayasan Singaperbangsa dengan nama awal Universitas Karawang.'
                ],
                [
                    'year' => '1986',
                    'event' => 'Mendapat status terdaftar dari Kopertis Wilayah IV Jawa Barat dan Banten.'
                ],
                [
                    'year' => '1995',
                    'event' => 'Berubah nama menjadi Universitas Singaperbangsa Karawang (UNSIKA).'
                ],
                [
                    'year' => '2005',
                    'event' => 'Memperoleh akreditasi institusi dari Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT).'
                ],
                [
                    'year' => '2010',
                    'event' => 'Melakukan pengembangan infrastruktur dan fasilitas kampus yang modern.'
                ],
                [
                    'year' => '2020',
                    'event' => 'Mengimplementasikan sistem pembelajaran digital dan hybrid learning.'
                ]
            ],
            'faculties' => [
                'Fakultas Teknik',
                'Fakultas Ilmu Komputer',
                'Fakultas Ekonomi dan Bisnis',
                'Fakultas Keguruan dan Ilmu Pendidikan',
                'Fakultas Pertanian',
                'Fakultas Hukum',
                'Fakultas Ilmu Sosial dan Ilmu Politik',
                'Fakultas Ilmu Kesehatan',
                'Fakultas Agama Islam'
            ],
            'achievements' => [
                'Terakreditasi B oleh BAN-PT',
                'Memiliki program studi yang terakreditasi A',
                'Aktif dalam penelitian dan pengabdian masyarakat',
                'Kerjasama dengan universitas dalam dan luar negeri'
            ]
        ];

        return view('home', compact('universityHistory'));
    }
}