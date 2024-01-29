<?php
//soal logika no 3. Tahun ini SMK Wikrama menjadi tuan rumah dari lomba programming nasional
// yang diikuti oleh siswa smp dan/sma/smk/ma. Stiap perserta yang mendaftar 
//mendapatkan nomor peserta sesuai dengan ketentuan dan kategori mata lomba. 
//Terdapat 3 mata lomba dengan kodenya masing masing,yaitu: web app 01w, 
//android 02a, game 03g nomor peserta disusun dari 'urutan daftar ke - kategori 
//mata lomba - tingkat pendidikan p untuk smp, a untuk sma/smk/ma - 2 digit 
//terakhir tahun pelaksanaan (date('Y'), substr)' jika terdapat 121 peserta yang 
//sudah daftah dan tuan rumah menunjuk eko sebagai perwakilan di mata lomba web app,
//berapakah nomor peserta yang akan di dapatkan eko

function generateNomorPeserta($urutanDaftar, $kategoriMatalomba, $tingkatPendidikan) {
    $tahunPelaksanaan = date('Y');
    $nomorPeserta = $urutanDaftar . $kategoriMatalomba . $tingkatPendidikan . substr($tahunPelaksanaan, -2);
    return $nomorPeserta;
}
    $ekoNomorPeserta = generateNomorPeserta('121', '01w', 'a');
    echo "Nomor Peserta Eko: $ekoNomorPeserta";

?>