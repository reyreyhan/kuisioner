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
    <li><a href="#tab4" data-toggle="tab">Lorem</a></li>
    <li><a href="#tab5" data-toggle="tab">Ipsum</a></li>
    <li><a href="#tab6" data-toggle="tab">Dolor</a></li>
</ul>

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
          <input type="radio" name="jeniskelamin">Perempuan
        </label>
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
          <textarea class="form-control" name="alamatkerja" required=""></textarea>
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

      <br>
      <div class="col-md-12">
        <a class="btn btn-primary btnNext" >Next</a>
      </div>
    </div>
    <!-- Identitas -->

    <div class="tab-pane" id="tab2">

    <!-- Riwayat Pendidikan -->
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
        <label>12. Tahun Lulus*</label><br>
        <div class="form-group">
          <input class="form-control" placeholder="Tahun Lulus" name="tahunlulus" type="number" required="">
        </div>
      </div>

      <div class="col-md-12">
        <label>13. Setelah Lulus di PENS apakah anda studi lanjut ? *</label><br>
        <label class="radio-inline">
          <input type="radio" name="lanjutstudi" value="1">Ya
        </label>
        <label class="radio-inline">
          <input type="radio" name="lanjutstudi" value="0">Tidak
        </label>
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
    <!-- Riwayat Pendidikan -->
    </div>

    <div class="tab-pane" id="tab3">
      <div class="col-md-12">
        <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
      </div>
    </div>

    <div class="tab-pane" id="tab4">
      <div class="col-md-12">
        <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
      </div>
    </div>

    <div class="tab-pane" id="tab5">
      <div class="col-md-12">
        <a class="btn btn-primary btnNext" >Next</a>
        <a class="btn btn-primary btnPrevious" >Previous</a>
      </div>
    </div>

    <div class="tab-pane" id="tab6">
      <div class="col-md-12">
        <a class="btn btn-primary btnPrevious" >Previous</a>
        <button type="submit" class="btn btn-danger" >Submit</button>
      </div>
    </div>
</div>

</body>
</html>
