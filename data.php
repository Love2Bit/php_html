<?php
$data_siswa=[
    "reyhan"=>["Muhammad Reyhan Rizki Ferdiyan","Bondowoso", 24/05/2001,true],
    "bayu"=>["Raditya Fajar Bayu Pamungkas","Kendal",19/02/2003,false],
    "toba"=>["Toba Fathir Auladya","Kendal",04/04/2005,false],
    "sudiyono"=>["Sudiyono","kendal",10/05/2004,false],
    "dellas"=>["Aodellas Magosiang","Semarang",14/03/2004,false],
    "reza a"=>["Reza Andika Pratama","Sukorejo","08/06/2004",false],
    "matsna"=>["Matsna Hidayatur Rochman","Magelang",01/05/2004,false],
    "munif"=>["Munif Soleh","Magelang",18/01/2004,false],
    "rendi"=>["Rendi saputra","Magelang",01/04/2004,false],
    "yosafat"=>["Yosafat Restu Adi","Jepara","06/09/2003",false],
    "rohman"=>["Miftachul Rohman","Magelang","08/10/2003",false],
    "yuda"=>["kusuma yuda mubarok","Sukorejo",25/07/2004,false],
    "akbar"=>["muhammad akbar kurnia","Sukorejo",07/03/2004,false],
    "ahmad"=>["ahmad khaniful huda","Magelang",21/04/2002,false],
    "ferdi"=>["muhammad ferdiansyah","Jepara",14/07/2003,false],
    "udin"=>["Muhammad Zainuddin Basyar","Jepara","30/09/2003",false],
    "reza a_p"=>["Reza Aditya Pratama","Jepara",04/04/2004,false],
    "rimba"=>["Muhammad Rimba Abdillah","Jepara",02/07/2004,false],
    "anang"=>["Anang Syah Amirul Haqim","Jepara",20/10/2003,false],
    "reza f"=>["Reza Fatikhul Hidayat","Sukorejo","06/08/2004",false],
    "khoirudin"=>["Khoirudin","Sukorejo","05/09/2003",false],
];

foreach($data_siswa as $k=>$v)
{
    if($v[3])
    {
        echo "$v[0] \t sudah lulus \n";
    }else{
        echo "$v[0] \t belum lulus \n";
    }
    // echo $v[0]."\n";
}