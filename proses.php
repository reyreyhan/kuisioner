<?php
include "koneksi.php";
//echo "It's Work!!!";

$A1 = $_POST['nama'];
$A2 = $_POST['jeniskelamin'];
$A3 = $_POST['nomor'];
$A4 = $_POST['email'];
$A5 = $_POST['fb'];
$A6 = $_POST['tempatkerja'];
$A7 = $_POST['alamatkerja'];
$A8 = $_POST['bidangusaha'];
$A9 = $_POST['jabatan'];
$A10 = $_POST['tahunpengisian'];

$A = "INSERT INTO identitas (nama, jeniskelamin, nomor, email, fb, tempatkerja, alamatkerja, bidangusaha, jabatan, tahunpengisian)
VALUES ('$A1', '$A2', '$A3', '$A4', '$A5', '$A6', '$A7', '$A8', '$A9', '$A10');
";

$insert_A = mysqli_query($koneksi, $A);
if ($insert_A) {
	echo "data berhasil masuk(A)";
} else {
	echo "gagal bos(A)";
}

$B1 = $_POST['jenjang'];
$B2 = $_POST['prodi'];
$B3 = $_POST['tahunlulus'];
$B4 = $_POST['lanjutstudi'];
$B5 = $_POST['alasanya'];
$B6 = $_POST['alasantidak'];

$B = "INSERT INTO riwayatpendidikan (jenjang, prodi, tahunlulus, lanjutstudi, alasanya, alasantidak)
VALUES ('$B1', '$B2', '$B3', '$B4', '$B5', '$B6');
";

$insert_B = mysqli_query($koneksi, $B);
if ($insert_B) {
	echo "data berhasil masuk(B)";
} else {
	echo "gagal bos(B)";
}

$C1 = $_POST['aktivitassekarang'];
$C2 = $_POST['berapalama'];
$C3 = $_POST['sesuai'];
$C4 = $_POST['xpindahkerja'];
$C5 = $_POST['alasanpindah'];
$C6 = $_POST['sempatmenganggur'];
$C7 = $_POST['inginkerjalagi'];

$C = "INSERT INTO riwayatpekerjaan (aktivitassekarang, berapalama, sesuai, xpindahkerja, alasanpindah, sempatmenganggur, inginkerjalagi)
VALUES ('$C1', '$C2', '$C3', '$C4', '$C5', '$C6', '$C7');
";

$insert_C = mysqli_query($koneksi, $C);
if ($insert_C) {
	echo "data berhasil masuk(C)";
} else {
	echo "gagal bos(C)";
}

$D2 = $_POST['pengetahuanumum'];
$D3 = $_POST['pengetahuanteori'];
$D4 = $_POST['pengetahuanpraktis'];
$D5 = $_POST['bahasainggris'];
$D6 = $_POST['ilmudesain'];
$D7 = $_POST['programming'];
$D8 = $_POST['broadcasting'];
$D9 = $_POST['fav'];
$D10 = $_POST['lisan'];
$D11 = $_POST['laporan'];
$D12 = $_POST['kepemimpinan'];
$D13 = $_POST['organisasi'];
$D14 = $_POST['kerjasamatim'];
$D15 = $_POST['memecahkanmasalah'];
$D16 = $_POST['data'];

$D = "INSERT INTO kompetensisaatlulus (pengetahuanumum, pengetahuanteori, pengetahuanpraktis, bahasainggris, ilmudesain, programming, broadcasting, fav, lisan, laporan, kepemimpinan, organisasi, kerjasamatim, memecahkanmasalah, data)
VALUES ('$D2', '$D3', '$D4', '$D5', '$D6', '$D7', '$D8', '$D9', '$D10', '$D11', '$D12', '$D13', '$D14', '$D15', '$D16');";

$insert_D = mysqli_query($koneksi, $D);
if ($insert_D) {
	echo "data berhasil masuk(D)";
} else {
	echo "gagal bos(D)";
}

$E2 = $_POST['pengetahuanumum2'];
$E3 = $_POST['pengetahuanteori2'];
$E4 = $_POST['pengetahuanpraktis2'];
$E5 = $_POST['bahasainggris2'];
$E6 = $_POST['ilmudesain2'];
$E7 = $_POST['programming2'];
$E8 = $_POST['broadcasting2'];
$E9 = $_POST['fav2'];
$E10 = $_POST['lisan2'];
$E11 = $_POST['laporan2'];
$E12 = $_POST['kepemimpinan2'];
$E13 = $_POST['organisasi2'];
$E14 = $_POST['kerjasamatim2'];
$E15 = $_POST['memecahkanmasalah2'];
$E16 = $_POST['data2'];

$E = "INSERT INTO kompetensiduniakerja (pengetahuanumum2, pengetahuanteori2, pengetahuanpraktis2, bahasainggris2, ilmudesain2, programming2, broadcasting2, fav2, lisan2, laporan2, kepemimpinan2,organisasi2, kerjasamatim2, memecahkanmasalah2, data2)
VALUES ('$E2', '$E3', '$E4', '$E5', '$E6', '$E7', '$E8', '$E9', '$E10', '$E11', '$E12', '$E13', '$E14', '$E15', '$E16');";

$insert_E = mysqli_query($koneksi, $E);
if ($insert_E) {
	echo "data berhasil masuk(E)";
} else {
	echo "gagal bos(E)";
}


$F2 = $_POST['satu'];
$F3 = $_POST['dua'];
$F4 = $_POST['tiga'];

$F = "INSERT INTO saran (satu, dua, tiga)
VALUES ('$F2', '$F3', '$F4');
";

$insert_F = mysqli_query($koneksi, $F);
if ($insert_F) {
	echo "data berhasil masuk(F)";
} else {
	echo "gagal bos(F)";
}

$G1 = $_POST['dikelas'];
$G2 = $_POST['dilaboratorium'];
$G3 = $_POST['diorganisasi'];
$G4 = $_POST['diperusahaan'];
$G5 = $_POST['dalampergaulan'];
$G6 = $_POST['mandiri'];
$G7 = $_POST['lingkunganmasyarakat'];

$G = "INSERT INTO pengalamanbelajar (dikelas, dilaboratorium, diorganisasi, diperusahaan, dalampergaulan, mandiri, lingkunganmasyarakat)
VALUES ('$G1', '$G2', '$G3', '$G4', '$G5', '$G6', '$G7');";

$insert_G = mysqli_query($koneksi, $G);
if ($insert_G) {
	echo "data berhasil masuk(G)";
} else {
	echo "gagal bos(G)";
}

?>
