<?php
//membuat class
class mahasiswa {
    //menuliskan property
    var $nim;
    var $nama;
    Var $alamat;

    function __construct() {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "</br>";
    }

    function __destruct() {
        echo "Politeknik Negeri Cilacap";
    }

    //method untuk menampilkan nama 
    function tampil_nama() {
        //isi method
        return "Nama saya adalah Fariani";
    }

    function tampil_mahasiswa() {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
    }

    //method untuk menampilkan alamat
    function tampil_alamat() {
        //isi method
        return "Alamat saya Perum Tegal Asri, Cilacap";
    }
}

// class dosen {
//     var $nidn;
//     var $nama;
//     Var $prodi;

//     function tampil_nama() {
//         return "Nama saya adalah Vinita";
//     }

//     function tampil_prodi() {
//         return "Prodi saya D3 - Teknik Informatika";
//     }
// }    

//membuat objek nama mahasiswa
    $nama_mahasiswa=new mahasiswa();
    // $nama_dosen=new dosen();

    //menampilkan objek ke layar
    echo $nama_mahasiswa->tampil_nama(); 
    echo "</br>";
    // echo $nama_dosen->tampil_nama(); 
    // echo "</br>";
    echo $nama_mahasiswa->tampil_mahasiswa();

?>