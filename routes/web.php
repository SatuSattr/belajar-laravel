<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});


Route::get('/blog/{id}', function ($id) {
    dd($id);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blogs',
        'posts' => [
            [
                'id' => 1,
                'title' => 'Tips Produktivitas di Era Digital',
                'author' => 'Satria Nugraha',
                'body' => 'Di tengah gempuran notifikasi dan media sosial, menjaga fokus menjadi tantangan tersendiri. Artikel ini membahas bagaimana teknik seperti time blocking, penggunaan aplikasi to-do list yang efektif, serta pentingnya menjaga kebiasaan pagi dapat membantu meningkatkan produktivitas harian tanpa harus merasa kewalahan.',
                'release_date' => '21 Juli 2025',
                'img' => 'post1.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Panduan Singkat Belajar Laravel',
                'author' => 'Indah Pratiwi',
                'body' => 'Laravel merupakan framework PHP modern yang memudahkan pengembangan aplikasi web dengan sintaks yang elegan. Dalam artikel ini, kamu akan belajar tentang struktur folder Laravel, cara kerja routing, controller, hingga integrasi dengan Blade untuk membuat tampilan yang dinamis dan mudah dirawat.',
                'release_date' => '19 Juli 2025',
                'img' => 'post2.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Pentingnya Desain UI/UX di Web Modern',
                'author' => 'Rizky Maulana',
                'body' => 'Desain antarmuka bukan hanya soal estetika, tapi juga tentang bagaimana pengguna merasa nyaman saat menggunakan aplikasi. Dengan pendekatan UI/UX yang tepat, pengunjung akan lebih mudah memahami fungsi, menemukan informasi, dan cenderung bertahan lebih lama di website kamu. Artikel ini membahas prinsip desain dasar hingga tools yang umum digunakan.',
                'release_date' => '17 Juli 2025',
                'img' => 'post3.jpg'
            ]
        ]
    ]);
});
