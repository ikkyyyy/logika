<?php
$waktu_sekarang = new DateTime();
$jam_sekarang = $waktu_sekarang->format('Hi');

if ($jam_sekarang <= '07:00' && $jam_sekarang < '11:30' ) {
    echo "saat ini adalah waktu kerja.";
} elseif ($jam_sekarang <= '11:30' && $jam_sekarang < '12:15') {
    echo "saat ini adalah waktu istirahat.";
} elseif ($jam_sekarang <= '12:15' && $jam_sekarang <'16:00') {
    echo "saat ini adalah waktu kerja.";
}else {
    echo "saat ini bukan waktu kerja";
}


?>