<!DOCTYPE html>
<html>
<head>
<title>Kuisioner</title>
<?php include "koneksi.php" ?>
</head>

<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/move.js"></script>

<ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Identitas</a></li>
    <li><a href="#tab2" data-toggle="tab">Riwayat Pendidikan</a></li>
    <li><a href="#tab3" data-toggle="tab">Riwayat Pekerjaan</a></li>
    <li><a href="#tab4" data-toggle="tab">Pengalaman Pembelajaran</a></li>
    <li><a href="#tab5" data-toggle="tab">Saran Untuk PENS</a></li>
</ul>

<form action="proses.php" method="POST" >
<div class="tab-content">
  <!-- Identitas -->
    <div class="tab-pane active" id="tab1">

      <br>
      <div class="col-md-12">
        <div class="form-group">
          <label>1. Nama Lengkap*</label>
          <input class="form-control" placeholder="Nama Lengkap" name="nama" type="text" required="">
        </div>
      </div>

      <div class="col-md-12">
        <label>2. Jenis Kelamin</label><br>
        <label class="radio-inline">
          <input type="radio" name="jeniskelamin" value="L">Laki - Laki
        </label>
        <label class="radio-inline">
          <input type="radio" name="jeniskelamin" value="P">Perempuan
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label>3. Nomor HP atau Telepon yang Bisa dihubungi*</label>
          <input class="form-control" placeholder="Contact" name="nomor" type="number" required="">
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label>4. Alamat Email*</label>
          <input class="form-control" placeholder="Email" name="email" type="text" required="">
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label>5. Alamat Sosial Media (Facebook)*</label>
          <input class="form-control" placeholder="Facebook" name="fb" type="text" required="">
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label>6. Nama Perusahaan Tempat Bekerja Sekarang*</label>
          <input class="form-control" placeholder="Nama Perusahaan" name="tempatkerja" type="text" required="">
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label>7. Alamat Pekerjaan Sekarang*</label>
          <textarea placeholder="Alamat Perkerjaan" class="form-control" name="alamatkerja" required=""></textarea>
        </div>
      </div>

      <div class="col-md-12">
        <label>8. Bidang Usaha*</label><br>
        <label class="radio-inline">
          <input type="radio" name="bidangusaha" value="Pendidikan / Institusi">Pendidikan / Institusi
        </label>
        <label class="radio-inline">
          <input type="radio" name="bidangusaha" value="Instansi Pemerintah">Instansi Pemerintah
        </label>
        <label class="radio-inline">
          <input type="radio" name="bidangusaha" value="Desain Grafis / Animasi">Desain Grafis / Animasi
        </label>
        <label class="radio-inline">
          <input type="radio" name="bidangusaha" value="Fotografi / Vidio">Fotografi / Vidio
        </label>
        <label class="radio-inline">
          <input type="radio" name="bidangusaha" value="Programming">Programming
        </label>
        <label class="radio-inline">
          <input type="radio" name="bidangusaha" value="Broadcasting">Broadcasting
        </label>
        <div class="form-group">
          <input class="form-control" placeholder="Yang Lain" name="bidangusaha" type="text">
        </div>
      </div>

      <div class="col-md-12">
        <label>9. Jabatan*</label><br>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="Direktur (Owner)">Direktur (Owner)
        </label>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="Manager">Manager
        </label>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="System Analyst">System Analyst
        </label>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="Asisten Manager">Asisten Manager
        </label>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="Dosen">Dosen
        </label>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="Karyawan PNS">Karyawan PNS
        </label>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="Kepala Teknis">Kepala Teknis
        </label>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="Programmer">Programmer
        </label>
        <label class="radio-inline">
          <input type="radio" name="jabatan" value="Teknisi">Teknisi
        </label>
        <div class="form-group">
          <input class="form-control" placeholder="Yang Lain" name="jabatan" type="text">
        </div>
      </div>


      <div class="col-md-12">
        <a class="btn btn-primary btnNext">Next</a>
      </div>

      <div class="col-md-12">
        <label></lebel>
      </div>

    </div>
    <!-- Identitas -->

    <!-- Riwayat Pendidikan -->
    <div class="tab-pane" id="tab2">

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>10. Jenjang Program*</label><br>
        <label class="radio-inline">
          <input type="radio" name="jenjang" value="D3">D3
        </label>
        <label class="radio-inline">
          <input type="radio" name="jenjang" value="D4">D4
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>11. Prodi Saat di PENS*</label><br>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="Elka">Elka
        </label>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="Telkom">Telkom
        </label>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="Elin">Elin
        </label>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="TI">TI
        </label>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="Meka">Meka
        </label>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="Tekkom">Tekkom
        </label>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="MMB">MMB
        </label>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="SPE">SPE
        </label>
        <label class="radio-inline">
          <input type="radio" name="prodi" value="GT">GT
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>12. Tahun Lulus*</label><br>
        <div class="form-group">
          <input class="form-control" placeholder="Tahun Lulus" name="tahunlulus" type="number" required="">
        </div>
      </div>

      <div class="col-md-12">
        <label>13. Setelah Lulus di PENS apakah anda studi lanjut ? *</label><br>
        <label class="radio-inline">
          <input type="radio" name="lanjutstudi" value="Ya">Ya
        </label>
        <label class="radio-inline">
          <input type="radio" name="lanjutstudi" value="Tidak">Tidak
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>14. Jika no.13 menjawab "Ya", apa alasan utamanya ?</label><br>
        <label class="radio-inline">
          <input type="radio" name="alasanya" value="Anjuran orang tua">Anjuran orang tua
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanya" value="Daripada nganggur">Daripada nganggur
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanya" value="Syarat pekerjaan">Syarat pekerjaan
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanya" value="Ada kesempatan">Ada kesempatan
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanya" value="Agar level pekerjaan lebih tinggi">Agar level pekerjaan lebih tinggi
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanya" value="Pekerjaan tidak sesuai">Pekerjaan tidak sesuai
        </label>
        <div class="form-group">
          <input class="form-control" placeholder="Yang Lain" name="alasanya" type="text">
        </div>
      </div>

      <div class="col-md-12">
        <label>15. Jika no.13 menjawab "Tidak", apa alasan utamanya ?</label><br>
        <label class="radio-inline">
          <input type="radio" name="alasantidak" value="Ingin cepat kerja dan membantu orang tua">Ingin cepat kerja dan membantu orang tua
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasantidak" value="Sudah bekerja sesuai bidang">Sudah bekerja sesuai bidang
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasantidak" value="Sudah bekerja dengan gaji yang lumayan besar dan tidak ingin kuliah lagi">Sudah bekerja dengan gaji yang lumayan besar dan tidak ingin kuliah lagi
        </label>
        <div class="form-group">
          <input class="form-control" placeholder="Yang Lain" name="alasantidak" type="text">
        </div>
      </div>

      <div class="col-md-12">
        <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
      </div>

      <div class="col-md-12">
        <label></lebel>
      </div>
    </div>
    <!-- Riwayat Pendidikan -->

    <!-- Riwayat Pekerjaan -->
    <div class="tab-pane" id="tab3">

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>16. Jenis Aktivitas Sekarang*</label><br>
        <label class="radio-inline">
          <input type="radio" name="aktivitassekarang" value="Kerja Tetap / Full time">Kerja Tetap / Full time
        </label>
        <label class="radio-inline">
          <input type="radio" name="aktivitassekarang" value="Kontrak 1 tahun atau lebih">Kontrak 1 tahun atau lebih
        </label>
        <label class="radio-inline">
          <input type="radio" name="aktivitassekarang" value="Wiraswasta">Wiraswasta
        </label>
        <label class="radio-inline">
          <input type="radio" name="aktivitassekarang" value="Baru diterima kerja tetap / Full time">Baru diterima kerja tetap / Full time
        </label>
        <label class="radio-inline">
          <input type="radio" name="aktivitassekarang" value="Sedang studi lanjut">Sedang studi lanjut
        </label>
        <label class="radio-inline">
          <input type="radio" name="aktivitassekarang" value="Kerja part time dan mencari pekerjaan yang tetap">Kerja part time dan mencari pekerjaan yang tetap
        </label>
        <label class="radio-inline">
          <input type="radio" name="aktivitassekarang" value="Kerja part time dan tidak mencari kerja tetap">Kerja part time dan tidak mencari kerja tetap
        </label>
        <div class="form-group">
          <input class="form-control" placeholder="Yang Lain" name="aktivitassekarang" type="text">
        </div>
      </div>

      <div class="col-md-12">
        <label>17. Berapa lama anda menunggu setelah saudara lulus dari PENS sampai mendapat pekerjaan ? *</label><br>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Kerja sebelum wisuda">Kerja sebelum wisuda
        </label>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Langsung kerja setelah wisuda">Langsung kerja setelah wisuda
        </label>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Kurang dari 1 bulan">Kurang dari 1 bulan
        </label>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Antara 1 s/d 3 bulan">Antara 1 s/d 3 bulan
        </label>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Lebih dari 3 s/d 6 bulan">Lebih dari 3 s/d 6 bulan
        </label>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Lebih dari 6 s/d 12 bulan (1 tahun)">Lebih dari 6 s/d 12 bulan (1 tahun)
        </label>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Lebih dari 1 tahun s/d 2 tahun">Lebih dari 1 tahun s/d 2 tahun
        </label>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Lebih dari 2 tahun s/d 3 tahun">Lebih dari 2 tahun s/d 3 tahun
        </label>
        <label class="radio-inline">
          <input type="radio" name="berapalama" value="Lebih dari 3 tahun">Lebih dari 3 tahun
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>18. Apakah pekerjaan saudara sekarang sesuai dengan bidang keilmuan saat kuliah ? *</label><br>
        <label class="radio-inline">
          <input type="radio" name="sesuai" value="Ya">Ya
        </label>
        <label class="radio-inline">
          <input type="radio" name="sesuai" value="Tidak">Tidak
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>19. Sudah berapa kali saudara pindah bekerja ? (termasuk pekerjaan yang sekarang) *</label><br>
        <label class="radio-inline">
          <input type="radio" name="xpindahkerja" value="Belum pernah pindah (Sejak lulus dari PENS)">Belum pernah pindah (Sejak lulus dari PENS)
        </label>
        <label class="radio-inline">
          <input type="radio" name="xpindahkerja" value="Sekali">Sekali
        </label>
        <label class="radio-inline">
          <input type="radio" name="xpindahkerja" value="2 kali">2 kali
        </label>
        <label class="radio-inline">
          <input type="radio" name="xpindahkerja" value="3 kali">3 kali
        </label>
        <label class="radio-inline">
          <input type="radio" name="xpindahkerja" value="Lebih dari 3 kali">Lebih dari 3 kali
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>


      <div class="col-md-12">
        <center>
          <h3>Jika pernah berpindah pekerjaan, isilah pertanyaan nomor 20 sampai nomor 22 berikut ini</h3>
        </center>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>20. Apa alasan utama anda berpindah kerja ? (Pilih salah satu)</label><br>
        <label class="radio-inline">
          <input type="radio" name="alasanpindah" value="Tidak relevan antara pengalaman kerja dengan gaji yang didapatkan">Tidak relevan antara pengalaman kerja dengan gaji yang didapatkan
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanpindah" value="Cari pengalaman / tantangan baru">Cari pengalaman / tantangan baru
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanpindah" value="Cari gaji yang lebih besar">Cari gaji yang lebih besar
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanpindah" value="Cari partner / lingkungan kerja yang cocok">Cari partner / lingkungan kerja yang cocok
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanpindah" value="Keluarga">Keluarga
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanpindah" value="Lain - lain">Lain - lain
        </label>
        <label class="radio-inline">
          <input type="radio" name="alasanpindah" value="Tidak">Tidak
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>21. Apakah Saudara sempat menganggur saat berpindah - pindah pekerjaan ?</label><br>
        <label class="radio-inline">
          <input type="radio" name="sempatmenganggur" value="Tidak">Tidak
        </label>
        <label class="radio-inline">
          <input type="radio" name="sempatmenganggur" value="Ya, Kurang dari 3 bulan">Ya, Kurang dari 3 bulan
        </label>
        <label class="radio-inline">
          <input type="radio" name="sempatmenganggur" value="Ya, 3 s/d 6 bulan">Ya, 3 s/d 6 bulan
        </label>
        <label class="radio-inline">
          <input type="radio" name="sempatmenganggur" value="Ya, lebih dari 6 bulan">Ya, lebih dari 6 bulan
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <label>22. Apakah saudara masih ingin pindah kerja lagi ?</label><br>
        <label class="radio-inline">
          <input type="radio" name="inginkerjalagi" value="Ya">Ya
        </label>
        <label class="radio-inline">
          <input type="radio" name="inginkerjalagi" value="Tidak">Tidak
        </label>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>


      <div class="col-md-12">
        <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

    </div>
    <!-- Riwayat Pekerjaan -->

    <!-- Pengalaman Pembelajaran -->
    <div class="tab-pane" id="tab4">

      <div class="col-md-12">
        <label></label>
      </div>


    <div class="col-md-12">
      <div class="col-md-12">
        <h2>Pengalaman Belajar*</h2>
      </div>

      <div class="col-md-12">
      Pengalaman yang memberikan kontribusi dalam dunia kerja<br>
      1. Tidak Penting<br>
      2. Kurang Penting<br>
      3. Penting<br>
      4. Sangat Penting
      </div>
    </div>

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
        <div class="table-responsive">
		      <div class="sixteen wide computer column">
            <table class="table">
              <tbody>
                <tr class="title">
                <th width="30%"></th>
                <th width="15%">1</th>
                <th width="15%">2</th>
                <th width="15%">3</th>
                <th width="15%">4</th>
                </tr>
              </tbody>

              <tr>
                <td>23. Di Kelas</td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dikelas" value="Tidak Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dikelas" value="Kurang Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dikelas" value="Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dikelas" value="Sangat Penting"><label></label>
                  </label>
                </td>
              </tr>

              <tr>
                <td>24. Di Laboratorium</td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dilaboratorium" value="Tidak Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dilaboratorium" value="Kurang Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dilaboratorium" value="Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dilaboratorium" value="Sangat Penting"><label></label>
                  </label>
                </td>
              </tr>

              <tr>
                <td>25. Di Organisasi</td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="diorganisasi" value="Tidak Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="diorganisasi" value="Kurang Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="diorganisasi" value="Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="diorganisasi" value="Sangat Penting"><label></label>
                  </label>
                </td>
              </tr>

              <tr>
                <td>26. Di Perusahaan (KP)</td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="diperusahaan" value="Tidak Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="diperusahaan" value="Kurang Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="diperusahaan" value="Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="diperusahaan" value="Sangat Penting"><label></label>
                  </label>
                </td>
              </tr>

              <tr>
                <td>27. Dalam Pergaulan</td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dalampergaulan" value="Tidak Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dalampergaulan" value="Kurang Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dalampergaulan" value="Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="dalampergaulan" value="Sangat Penting"><label></label>
                  </label>
                </td>
              </tr>

              <tr>
                <td>28. Mandiri</td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="mandiri" value="Tidak Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="mandiri" value="Kurang Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="mandiri" value="Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="mandiri" value="Sangat Penting"><label></label>
                  </label>
                </td>
              </tr>

              <tr>
                <td>29. Di Lingkungan Masyarakat</td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="lingkunganmasyarakat" value="Tidak Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="lingkunganmasyarakat" value="Kurang Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="lingkunganmasyarakat" value="Penting"><label></label>
                  </label>
                </td>
                <td>
                  <label class="radio-inline">
                    <input type="radio" name="lingkunganmasyarakat" value="Sangat Penting"><label></label>
                  </label>
                </td>
              </tr>
            </table>
          </div>
        </div>

        <div class="col-md-12">
          <label></label>
        </div>

        <div class="col-md-12">
          <h2>Kompetensi*</h2>
        </div>

        <div class="col-md-12">
        Penguasaan Kompetensi Saat Lulus Kuliah di PENS<br>
        1. Tidak Penting<br>
        2. Kurang Penting<br>
        3. Penting<br>
        4. Sangat Penting
        </div>

        <div class="col-md-12">
          <label></label>
        </div>

        <div class="col-md-12">
          <div class="table-responsive">
  		      <div class="sixteen wide computer column">
              <table class="table">
                <tbody>
                  <tr class="title">
                  <th width="30%"></th>
                  <th width="15%">1</th>
                  <th width="15%">2</th>
                  <th width="15%">3</th>
                  <th width="15%">4</th>
                  </tr>
                </tbody>

                <tr>
                  <td>30. Pengetahuan Umum</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanumum" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanumum" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanumum" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanumum" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>31. Pengetahuan Teoritis Jurusan / Prodi</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanteori" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanteori" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanteori" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanteori" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>32. Pengetahuan Praktis Jurusan / Prodi</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanpraktis" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanpraktis" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanpraktis" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanpraktis" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>33. Bahasa Inggris</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="bahasainggris" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="bahasainggris" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="bahasainggris" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="bahasainggris" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>34. Ilmu Desain</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="ilmudesain" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="ilmudesain" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="ilmudesain" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="ilmudesain" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>35. Programming</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="programming" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="programming" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="programming" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="programming" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>36. Broadcasting</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="broadcasting" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="broadcasting" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="broadcasting" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="broadcasting" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>37. Foto, Audio, dan Video</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="fav" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="fav" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="fav" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="fav" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>38. Keterampilan Komunikasi Lisan (Presentasi, Diskusi, dll)</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="lisan" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="lisan" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="lisan" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="lisan" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>39. Keterampilan Komunikasi Tertulis (Membuat Laporan)</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="laporan" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="laporan" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="laporan" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="laporan" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>40. Kepemimpinan</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kepemimpinan" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kepemimpinan" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kepemimpinan" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kepemimpinan" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>41. Manajemen Organisasi</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="organisasi" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="organisasi" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="organisasi" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="organisasi" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>42. Kerjasama Tim</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kerjasamatim" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kerjasamatim" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kerjasamatim" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kerjasamatim" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>43. Memecahkan Masalah</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="memecahkanmasalah" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="memecahkanmasalah" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="memecahkanmasalah" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="memecahkanmasalah" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>44. Mengolah dan Menganalisa Data</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="data" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="data" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="data" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="data" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>


              </table>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <label></label>
        </div>

        <div class="col-md-12">
          <h2>Kompetensi*</h2>
        </div>

        <div class="col-md-12">
        Kompetensi yang Diperlukan Dalam Dunia Kerja<br>
        1. Tidak Penting<br>
        2. Kurang Penting<br>
        3. Penting<br>
        4. Sangat Penting
        </div>

        <div class="col-md-12">
          <label></label>
        </div>

        <div class="col-md-12">
          <div class="table-responsive">
  		      <div class="sixteen wide computer column">
              <table class="table">
                <tbody>
                  <tr class="title">
                  <th width="30%"></th>
                  <th width="15%">1</th>
                  <th width="15%">2</th>
                  <th width="15%">3</th>
                  <th width="15%">4</th>
                  </tr>
                </tbody>

                <tr>
                  <td>45. Pengetahuan Umum</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanumum2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanumum2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanumum2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanumum2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>46. Pengetahuan Teoritis Jurusan / Prodi</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanteori2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanteori2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanteori2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanteori2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>47. Pengetahuan Praktis Jurusan / Prodi</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanpraktis2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanpraktis2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanpraktis2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="pengetahuanpraktis2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>48. Bahasa Inggris</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="bahasainggris2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="bahasainggris2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="bahasainggris2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="bahasainggris2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>49. Ilmu Desain</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="ilmudesain2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="ilmudesain2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="ilmudesain2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="ilmudesain2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>50. Programming</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="programming2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="programming2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="programming2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="programming2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>51. Broadcasting</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="broadcasting2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="broadcasting2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="broadcasting2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="broadcasting2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>52. Foto, Audio, dan Video</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="fav2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="fav2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="fav2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="fav2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>53. Keterampilan Komunikasi Lisan (Presentasi, Diskusi, dll)</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="lisan2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="lisan2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="lisan2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="lisan2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>54. Keterampilan Komunikasi Tertulis (Membuat Laporan)</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="laporan2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="laporan2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="laporan2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="laporan2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>55. Kepemimpinan</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kepemimpinan2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kepemimpinan2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kepemimpinan2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kepemimpinan2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>56. Manajemen Organisasi</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="organisasi2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="organisasi2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="organisasi2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="organisasi2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>57. Kerjasama Tim</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kerjasamatim2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kerjasamatim2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kerjasamatim2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="kerjasamatim2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>58. Memecahkan Masalah</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="memecahkanmasalah2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="memecahkanmasalah2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="memecahkanmasalah2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="memecahkanmasalah2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>

                <tr>
                  <td>59. Mengolah dan Menganalisa Data</td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="data2" value="Tidak Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="data2" value="Kurang Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="data2" value="Penting"><label></label>
                    </label>
                  </td>
                  <td>
                    <label class="radio-inline">
                      <input type="radio" name="data2" value="Sangat Penting"><label></label>
                    </label>
                  </td>
                </tr>


              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
      </div>

      <div class="col-md-12">
        <label></label>
      </div>

    </div>
    <!-- Pengalaman Pembelajaran-->

    <div class="tab-pane" id="tab5">

      <div class="col-md-12">
        <label></label>
      </div>

      <div class="col-md-12">
              <div class="form-group">
                <label>60. Menurut Saudara komptensi / mata kuliah yang telah ditempuh apa yang sangat bermanfaat untuk membantu dalam bidang kerja Saudara ? (Bisa disebutkan lebih dari 1 dan pisahkan dengan tanda koma) *</label>
                <textarea placeholder="Isi Saran" class="form-control" name="satu" required=""></textarea>
              </div>
      </div>

      <div class="col-md-12">
              <div class="form-group">
                <label>61. Kompetensi / mata kuliah apa yang perlu ditambah yang sesuai dengan bidang kerja di perusahaan saudara ? (Bisa disebutkan lebih dari 1 dan pisahkan dengan tanda koma) *</label>
                <textarea placeholder="Isi Saran" class="form-control" name="dua" required=""></textarea>
              </div>
      </div>


      <div class="col-md-12">
              <div class="form-group">
                <label>62. Mata kuliah / kompetensi apa yang kurang sesuai dengan bidang kerja Saudara saat ini ? (Bisa disebutkan lebih dari 1 dan pisahkan dengan tanda koma) *</label>
                <textarea placeholder="Isi Saran" class="form-control" name="tiga" required=""></textarea>
              </div>
      </div>

      <div class="col-md-12">
        <a class="btn btn-primary btnPrevious" >Previous</a>
        <button type="submit" class="btn btn-danger" >Submit</button>
      </div>
    </div>
</div>

</form>

</body>
</html>
