<?php
    $data = [
        [
            "dosen" => "Aceng Fikri", 
            "submenu" => [
                
            [ 
                "nama" => "Kai",
                "mapel" => [
                    ["mapel" => "MTK"],
                    ["mapel" => "IPA"],
                    ["mapel" => "IPS"]
            ],

            'daftarHobi' => [
                ['namaHobi' => 'Nonton Youtube'],
                ['namaHobi' => 'TIdur'],
            ]
        ],

            [
                "nama" => "Baekhyun",
                "mapel" => [
                    ["mapel" => "PAI"],
                    ["mapel" => "Sejarah"],
                    ["mapel" => "MTK"]
                ],
                'daftarHobi' => [
                    ['namaHobi' => 'Nonton Youtube'],
                    ['namaHobi' => 'TIdur'],
                ]
            
            ],

            [ 
                "nama" => "D.O",
                "mapel" => [
                    ["mapel" => "RPL"],
                    ["mapel" => "Manajemen"],
                    ["mapel" => "Administrasi"]
            ],
            'daftarHobi' => [
                ['namaHobi' => 'Nonton Youtube'],
                ['namaHobi' => 'TIdur'],
            ]

        ],
    ]

],

        [
            "dosen" => "Ujang Betok", 
            "submenu" => [
            [ 
                "nama" => "chen",
                "mapel" => [
                    ["mapel" => "Matematika"],
                    ["mapel" => "IPA"],
                    ["mapel" => "IPS"]
            ],
            'daftarHobi' => [
                ['namaHobi' => 'Nonton Youtube'],
                ['namaHobi' => 'TIdur'],
            ]
           
        ],

            [ 
                "nama" => "Suho",
                "mapel" => [
                    ["mapel" => "PPKN"],
                    ["mapel" => "Sejarah"],
                    ["mapel" => "KWU"]
            ],
            'daftarHobi' => [
                ['namaHobi' => 'Nonton Youtube'],
                ['namaHobi' => 'TIdur'],
            ]
            
        ],

            [ 
                "nama" => "Sehun",
                "mapel" => [
                    ["mapel" => "RPL"],
                    ["mapel" => "Manajemen"],
                    ["mapel" => "Administrasi"]
            ],
            'daftarHobi' => [
                ['namaHobi' => 'Nonton Youtube'],
                ['namaHobi' => 'TIdur'],
            ]
            
            ],
    ]
],
];

    
    $no = 1;
    foreach($data as $key => $val) {
        echo "<hr>";
        echo "Nama Wali Dosen  : ". $val['dosen']. "<br>";
        echo "Daftar Mahasiswa :";
        echo "<ul>";

        foreach($val['submenu'] as $menu) {
            echo "<li>Data Ke-". $no++. "</li>";
            echo "Nama Mahasiswa : ". $menu['nama'];
            echo "<br>Daftar Mata Kuliah :";
            echo "<ol>";

            foreach($menu['mapel'] as $sub) {
                echo "<li>". $sub['mapel']. "</li>";
            }
            echo "</ol>";
        
        
            echo "<li>Daftar Hobi</li>";
            echo "<ol>";
            foreach($menu['daftarHobi'] as $hobi){
                echo "<li>".$hobi['namaHobi']."</li>";
            }
            echo "</ol>";
            
        }
        
        echo "</ul>";
    }
?>