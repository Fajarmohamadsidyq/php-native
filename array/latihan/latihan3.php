<?php

$data = [
    [
        "namaMahasiswa" => "abdul",
        "matkul" => [
            ["nama"=>"fisika"],
            ["nama"=>"kimia"],
            ["nama"=>"biologi"]
        ],
        "hobi" => [
            ["nama"=>"mancing"],
            ["nama"=>"Maen Game"]
        ],
        "namaDosen" => "aceng fikri"
    ],

    [
        "namaMahasiswa" => "ahmad",
        "matkul" => [
            ["nama"=>"fisika"],
            ["nama"=>"mtk"],
            ["nama"=>"indo"]
        ],
        "hobi" => [
            ["nama"=>"Maen layangan"],
            ["nama"=>"Balapan"]
        ],
        "namaDosen" => "aceng fikri"
    ],

    [
        "namaMahasiswa" => "acep",
        "matkul" => [
            ["nama"=>"PAI"],
            ["nama"=>"IPA"],
            ["nama"=>"fisika"]
        ],
        "hobi" => [
            ["nama"=>"Maen PS"],
            ["nama"=>"Maen Warnet"]
        ],
        "namaDosen" => "aceng fikri"
    ],

    [
        "namaMahasiswa" => "alex",
        "matkul" => [
            ["nama"=>"IPA"],
            ["nama"=>"MTK"],
            ["nama"=>"fisika"]
        ],
        "hobi" => [
            ["nama"=>"Ngaji"],
            ["nama"=>"Balapan"]
        ],
        "namaDosen" => "ujang betok"
    ],

    [
        "namaMahasiswa" => "marquez",
        "matkul" => [
            ["nama"=>"fisika"],
            ["nama"=>"mtk"],
            ["nama"=>"indo"]
        ],
        "hobi" => [
            ["nama"=>"Balapan"],
            ["nama"=>"Joging"]
        ],
        "namaDosen" => "ujang betok"
    ],

    [
        "namaMahasiswa" => "Pol Espagaro",
        "matkul" => [
            ["nama"=>"fisika"],
            ["nama"=>"IPA"],
            ["nama"=>"PAI"]
        ],
        "hobi" => [
            ["nama"=>"DJ"],
            ["nama"=>"Musikan"]
        ],
        "namaDosen" => "ujang betok"
    ]
    ];


?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
    </style>
    </head>
    <body>
        <table border="3" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
            </tr>
        

            <tr> <?php $no =1; ?>
                <?php foreach($data as $menu){
                    ?>
                <td><?php echo $no++;?></td>
                <td><?php echo $menu['namaMahasiswa'];?></td>
                <td><?php echo $menu['namaDosen'];?></td>
                <td><?php foreach($menu['matkul'] as $matkul){?>
                    <ul>
                    <li><?php echo $matkul['nama'];?></li>
                    <?php } ?>
                </ul>
                </td>

                <td>
                    <ul>
                    <?php foreach($menu['hobi'] as $hobi){?>
                    <li><?php echo $hobi['nama'];?></li>
                    <?php }?>
               </ul> 
            </td>
            
            </tr>
            <?php }?>

        </table>
    </body>
    </html>