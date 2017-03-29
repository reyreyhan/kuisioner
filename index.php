<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tracer Study Alumni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
    $(document).ready(function() {
      $(function(){
        $('a[title]').tooltip();
      });

     $('input:radio[name=bidangusaha]').change(function() {
        if (this.value == 'Pendidikan / Institusi' || this.value == 'Instansi Pemerintah' || this.value == 'Desain Grafis / Animasi' || this.value == 'Fotografi / Vidio' || this.value == 'Programming' || this.value == 'Broadcasting') {
            $("#bidangusaha_lainnya_val").attr('disabled','disabled');
        } else {
          $("#bidangusaha_lainnya_val").removeAttr('disabled');
        }
      });

     $('input:radio[name=jabatan]').change(function() {
        if (this.value == 'Direktur (Owner)' || this.value == 'Manager' || this.value == 'System Analyst' || this.value == 'Asisten Manager' || this.value == 'Dosen' || this.value == 'Karyawan PNS' || this.value == 'Kepala Teknis' || this.value == 'Programmer' || this.value == 'Teknisi') {
            $("#jabatan_lainnya_val").attr('disabled','disabled');
        } else {
          $("#jabatan_lainnya_val").removeAttr('disabled');
        }
      });

      $('input:radio[name=alasanya]').change(function() {
         if (this.value == 'Ingin cepat kerja dan membantu orang tua' || this.value == 'Sudah bekerja sesuai bidang' || this.value == 'Sudah bekerja dengan gaji yang lumayan besar dan tidak ingin kuliah lagi') {
             $("#alasanya_lainnya_val").attr('disabled','disabled');
         } else {
           $("#alasanya_lainnya_val").removeAttr('disabled');
         }
       });

       $('input:radio[name=alasantidak]').change(function() {
          if (this.value == 'Anjuran orang tua' || this.value == 'Daripada nganggur' || this.value == 'Syarat pekerjaan' || this.value == 'Ada kesempatan' || this.value == 'Agar level pekerjaan lebih tinggi' || this.value == 'Pekerjaan tidak sesuai') {
              $("#alasantidak_lainnya_val").attr('disabled','disabled');
          } else {
            $("#alasantidak_lainnya_val").removeAttr('disabled');
          }
        });

        $('input:radio[name=aktivitassekarang]').change(function() {
           if (this.value == 'Kerja Tetap / Full time' || this.value == 'Kontrak 1 tahun atau lebih' || this.value == 'Wiraswasta' || this.value == 'Baru diterima kerja tetap / Full time' || this.value == 'Sedang studi lanjut' || this.value == 'Kerja part time dan mencari pekerjaan yang tetap ' || this.value == 'Kerja part time dan tidak mencari kerja tetap ') {
               $("#aktivitas_lainnya_val").attr('disabled','disabled');
           } else {
             $("#aktivitas_lainnya_val").removeAttr('disabled');
           }
         });


      function bidangusahafunc(){
        var x = $("#bidangusaha_lainnya_val").value;
        $("#bidangusaha_lainnya").value = x;
      }
    });

    </script>
</head>
<body>
<section style="background:#efefe9;">
        <div class="container">
            <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#identitas" data-toggle="tab" title="Identitas">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-user"></i>
                      </span>
                  </a></li>

                  <li><a href="#riwayatpendidikan" data-toggle="tab" title="Riwayat Pendidikan">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-education"></i>
                     </span>
           </a>
                 </li>
                 <li><a href="#riwayatpekerjaan" data-toggle="tab" title="Riwayat Pekerjaan">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-briefcase"></i>
                     </span> </a>
                     </li>

                     <li><a href="#pengalamanpembelajaran" data-toggle="tab" title="Pengalaman Pembelajaran">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-list-alt"></i>
                         </span>
                     </a></li>

                     <li><a href="#saranuntukPENS" data-toggle="tab" title="Saran untuk PENS">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
                     </li>

                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="identitas">
                          <p class="narrow">
                             Kuesioner Tracer Studi Alumni Prodi Teknologi Multimedia Broadcasting - PENS
                          </p>
                          <h3 class="head text-center">A. Identitas</h3>
                          <div class="col-md-12">

                            <div class="form-group">

                              <form action="proses.php" method="POST">
                              <label>Tahun Pengisian</label>
                              <input class="form-control" placeholder="Tahun Pengisian" name="tahunpengisian" type="text" required="">
                              <br>

                              <label>1. Nama Lengkap*</label>
                              <input class="form-control" placeholder="Nama Lengkap" name="nama" type="text" required="">
                              <br>

                              <label>2. Jenis Kelamin : </label>
                                <br>
                                <input type="radio" name="jeniskelamin" value="L"> Laki - Laki
                                <br>
                                <input type="radio" name="jeniskelamin" value="P"> Perempuan
                                <br><br>

                              <label>3. Nomor HP atau Telepon yang Bisa dihubungi*</label>
                              <input class="form-control" placeholder="Contact" name="nomor" type="number" required="">
                              <br>

                              <label>4. Alamat Email*</label>
                              <input class="form-control" placeholder="Email" name="email" type="text" required="">
                              <br>

                              <label>5. Alamat Sosial Media (Facebook)*</label>
                              <input class="form-control" placeholder="Facebook" name="fb" type="text" required="">
                              <br>

                              <label>6. Nama Perusahaan Tempat Bekerja Sekarang*</label>
                              <input class="form-control" placeholder="Nama Perusahaan" name="tempatkerja" type="text" required="">
                              <br>

                              <label>7. Alamat Pekerjaan Sekarang*</label>
                              <textarea placeholder="Alamat Perkerjaan" class="form-control" name="alamatkerja" required=""></textarea>
                              <br>

                              <label>8. Bidang Usaha*</label><br>
                                <input type="radio" name="bidangusaha" value="Pendidikan / Institusi"> Pendidikan / Institusi
                                <br />
                                <input type="radio" name="bidangusaha" value="Instansi Pemerintah"> Instansi Pemerintah
                                <br />
                                <input type="radio" name="bidangusaha" value="Desain Grafis / Animasi"> Desain Grafis / Animasi
                                <br />
                                <input type="radio" name="bidangusaha" value="Fotografi / Vidio"> Fotografi / Vidio
                                <br />
                                <input type="radio" name="bidangusaha" value="Programming"> Programming
                                <br />
                                <input type="radio" name="bidangusaha" value="Broadcasting"> Broadcasting
                                <br />
                                <input id="bidangusaha_lainnya" type="radio" style="float: left;" name="bidangusaha" value=""><span style="float: left; margin-left: 5px;">Yang lainnya : </span>
                                <div class="col-md-11" style="float: left;">
                                  <input id="bidangusaha_lainnya_val" class="form-control" onchange="bidangusahafunc()" placeholder="Yang Lain" type="text" disabled="">
                                </div><br />


                                <label>9. Jabatan*</label><br />
                                <input type="radio" name="jabatan" value="Direktur (Owner)"> Direktur (Owner)
                                <br />
                                <input type="radio" name="jabatan" value="Manager"> Manager
                                <br />
                                <input type="radio" name="jabatan" value="System Analyst"> System Analyst
                                <br />
                                <input type="radio" name="jabatan" value="Asisten Manager"> Asisten Manager
                                <br />
                                <input type="radio" name="jabatan" value="Dosen"> Dosen
                                <br />
                                <input type="radio" name="jabatan" value="Karyawan PNS"> Karyawan PNS
                                <br />
                                <input type="radio" name="jabatan" value="Kepala Teknis"> Kepala Teknis
                                <br />
                                <input type="radio" name="jabatan" value="Programmer"> Programmer
                                <br />
                                <input type="radio" name="jabatan" value="Teknisi"> Teknisi
                                <br />
                                <input id="jabatan_lainnya" type="radio" style="float: left;" name="jabatan" value=""><span style="float: left; margin-left: 5px;">Yang lainnya : </span>
                                <div class="col-md-11" style="float: left;">
                                  <input class="form-control" placeholder="Yang Lain" type="text" id="jabatan_lainnya_val" disabled="">
                                </div><br />

                            </div>

                          </div>


                          <p class="text-center">
                              <a href="#riwayatpendidikan" data-toggle="tab" class="btn btn-success btn-outline-rounded green"> next </a>
                          </p>
                      </div>
                      <div class="tab-pane fade" id="riwayatpendidikan">
                          <h3 class="head text-center">B. Riwayat Pendidikan</h3>
                          <div class="col-md-12">
                            <label>10. Jenjang*</label><br>
                              <input type="radio" name="jenjang" value="D3"> D3
                              <br>
                              <input type="radio" name="jenjang" value="D4"> D4
                              <br><br>
                            <label>11. Prodi Saat di PENS*</label><br>
                              <input type="radio" name="prodi" value="Elka"> Elka
                              <br>
                              <input type="radio" name="prodi" value="Telkom"> Telkom
                              <br>
                              <input type="radio" name="prodi" value="Elin"> Elin
                              <br>
                              <input type="radio" name="prodi" value="TI"> TI
                              <br>
                              <input type="radio" name="prodi" value="Meka"> Meka
                              <br>
                              <input type="radio" name="prodi" value="Tekkom"> Tekkom
                              <br>
                              <input type="radio" name="prodi" value="MMB"> MMB
                              <br>
                              <input type="radio" name="prodi" value="SPE"> SPE
                              <br>
                              <input type="radio" name="prodi" value="GT"> GT
                            <br /><br>
                            <label>12. Tahun Lulus*</label><br>
                            <div class="form-group">
                              <input class="form-control" placeholder="Tahun Lulus" name="tahunlulus" type="number" required="">
                            </div>
                            <label>13. Setelah Lulus di PENS apakah anda studi lanjut ? *</label><br>

                              <input type="radio" name="lanjutstudi" value="Ya">Ya
                            </label>

                              <input type="radio" name="lanjutstudi" value="Tidak">Tidak
                            </label>
                            <br><br>
                          </div>
                          <div class="col-md-12">
                              <label>14. Jika no.13 menjawab "Ya", apa alasan utamanya ?</label><br>
                              <input type="radio" name="alasanya" value="Anjuran orang tua"> Anjuran orang tua
                              <br />
                              <input type="radio" name="alasanya" value="Daripada nganggur"> Daripada nganggur
                              <br />
                              <input type="radio" name="alasanya" value="Syarat pekerjaan"> Syarat pekerjaan
                              <br />
                              <input type="radio" name="alasanya" value="Ada kesempatan"> Ada kesempatan
                              <br />
                              <input type="radio" name="alasanya" value="Agar level pekerjaan lebih tinggi"> Agar level pekerjaan lebih tinggi
                              <br />
                              <input type="radio" name="alasanya" value="Pekerjaan tidak sesuai"> Pekerjaan tidak sesuai
                              <br />
                              <input id="alasanya_lainnya" type="radio" style="float: left;" name="alasanya" value=""><span style="float: left; margin-left: 5px;">Yang lainnya : </span>
                              <div class="col-md-11" style="float: left;">
                                <input id="alasanya_lainnya_val" class="form-control" onchange="alasanyafunc()" placeholder="Yang Lain" type="text" disabled="">
                              </div><br />
                          </div>

                          <div class="col-md-12">
                            <label>15. Jika no.13 menjawab "Tidak", apa alasan utamanya ?</label><br>
                            <input type="radio" name="alasantidak" value="Ingin cepat kerja dan membantu orang tua"> Ingin cepat kerja dan membantu orang tua<br />
                            <input type="radio" name="alasantidak" value="Sudah bekerja sesuai bidang"> Sudah bekerja sesuai bidang<br />
                            <input type="radio" name="alasantidak" value="Sudah bekerja dengan gaji yang lumayan besar dan tidak ingin kuliah lagi"> Sudah bekerja dengan gaji yang lumayan besar dan tidak ingin kuliah lagi<br />
                            <input id="alasantidak_lainnya" type="radio" style="float: left;" name="alasantidak" value=""><span style="float: left; margin-left: 5px;">Yang lainnya : </span>
                            <div class="col-md-11" style="float: left;">
                              <input id="alasantidak_lainnya_val" class="form-control" onchange="alasantidakfunc()" placeholder="Yang Lain" type="text" disabled="">
                            </div><br />
                          </div>
                          <p class="text-center">
                              <a href="#identitas" data-toggle="tab" class="btn btn-success btn-outline-rounded green"> previous </a>
                              <a href="#riwayatpekerjaan" data-toggle="tab" class="btn btn-success btn-outline-rounded green"> next </a>
                          </p>
                      </div>
                      <div class="tab-pane fade" id="riwayatpekerjaan">
                          <h3 class="head text-center">C. Riwayat Pekerjaan</h3>
                           <div class="col-md-12">
                            <label>16. Jenis Aktivitas Sekarang*</label><br>

                              <input type="radio" name="aktivitassekarang" value="Kerja Tetap / Full time"> Kerja Tetap / Full time
                            <br />

                              <input type="radio" name="aktivitassekarang" value="Kontrak 1 tahun atau lebih"> Kontrak 1 tahun atau lebih
                            <br />

                              <input type="radio" name="aktivitassekarang" value="Wiraswasta"> Wiraswasta
                            <br />

                              <input type="radio" name="aktivitassekarang" value="Baru diterima kerja tetap / Full time"> Baru diterima kerja tetap / Full time
                            <br />

                              <input type="radio" name="aktivitassekarang" value="Sedang studi lanjut"> Sedang studi lanjut
                            <br />

                              <input type="radio" name="aktivitassekarang" value="Kerja part time dan mencari pekerjaan yang tetap"> Kerja part time dan mencari pekerjaan yang tetap
                            <br />

                              <input type="radio" name="aktivitassekarang" value="Kerja part time dan tidak mencari kerja tetap"> Kerja part time dan tidak mencari kerja tetap
                            <br />
                            <input id="aktivitas_lainnya" type="radio" style="float: left;" name="aktivitassekarang" value=""><span style="float: left; margin-left: 5px;">Yang lainnya : </span>
                            <div class="col-md-11" style="float: left;">
                              <input id="aktivitas_lainnya_val" class="form-control" onchange="aktivitasfunc()" placeholder="Yang Lain" type="text" disabled="">
                            </div><br />
                          </div>

                          <div class="col-md-12">
                            <label>17. Berapa lama anda menunggu setelah saudara lulus dari PENS sampai mendapat pekerjaan ? *</label><br>

                              <input type="radio" name="berapalama" value="Kerja sebelum wisuda"> Kerja sebelum wisuda
                            <br />

                              <input type="radio" name="berapalama" value="Langsung kerja setelah wisuda"> Langsung kerja setelah wisuda
                            <br />

                              <input type="radio" name="berapalama" value="Kurang dari 1 bulan"> Kurang dari 1 bulan
                            <br />

                              <input type="radio" name="berapalama" value="Antara 1 s/d 3 bulan"> Antara 1 s/d 3 bulan
                            <br />

                              <input type="radio" name="berapalama" value="Lebih dari 3 s/d 6 bulan"> Lebih dari 3 s/d 6 bulan
                            <br />

                              <input type="radio" name="berapalama" value="Lebih dari 6 s/d 12 bulan (1 tahun)"> Lebih dari 6 s/d 12 bulan (1 tahun)
                            <br />

                              <input type="radio" name="berapalama" value="Lebih dari 1 tahun s/d 2 tahun"> Lebih dari 1 tahun s/d 2 tahun
                            <br />

                              <input type="radio" name="berapalama" value="Lebih dari 2 tahun s/d 3 tahun"> Lebih dari 2 tahun s/d 3 tahun
                            <br />

                              <input type="radio" name="berapalama" value="Lebih dari 3 tahun"> Lebih dari 3 tahun
                            <br />
                          </div>

                          <div class="col-md-12">
                            <label></label>
                          </div>

                          <div class="col-md-12">
                            <label>18. Apakah pekerjaan saudara sekarang sesuai dengan bidang keilmuan saat kuliah ? *</label><br>

                              <input type="radio" name="sesuai" value="Ya"> Ya
                            <br />

                              <input type="radio" name="sesuai" value="Tidak"> Tidak
                            <br />
                          </div>

                          <div class="col-md-12">
                            <label></label>
                          </div>

                          <div class="col-md-12">
                            <label>19. Sudah berapa kali saudara pindah bekerja ? (termasuk pekerjaan yang sekarang) *</label><br>

                              <input type="radio" name="xpindahkerja" value="Belum pernah pindah (Sejak lulus dari PENS)"> Belum pernah pindah (Sejak lulus dari PENS)
                            <br />

                              <input type="radio" name="xpindahkerja" value="Sekali"> Sekali
                            <br />

                              <input type="radio" name="xpindahkerja" value="2 kali"> 2 kali
                            <br />

                              <input type="radio" name="xpindahkerja" value="3 kali"> 3 kali
                            <br />

                              <input type="radio" name="xpindahkerja" value="Lebih dari 3 kali"> Lebih dari 3 kali
                            <br />
                          </div>
                          <p class="narrow text-center"><br /><br /> Jika pernah berpindah pekerjaan, isilah pertanyaan nomor 20 sampai nomor 22 berikut ini</p>
                          <br />
                          <div class="col-md-12">
                            <label>20. Apa alasan utama anda berpindah kerja ? (Pilih salah satu)</label><br>

                              <input type="radio" name="alasanpindah" value="Tidak relevan antara pengalaman kerja dengan gaji yang didapatkan"> Tidak relevan antara pengalaman kerja dengan gaji yang didapatkan
                            <br />

                              <input type="radio" name="alasanpindah" value="Cari pengalaman / tantangan baru"> Cari pengalaman / tantangan baru
                            <br />

                              <input type="radio" name="alasanpindah" value="Cari gaji yang lebih besar"> Cari gaji yang lebih besar
                            <br />

                              <input type="radio" name="alasanpindah" value="Cari partner / lingkungan kerja yang cocok"> Cari partner / lingkungan kerja yang cocok
                            <br />

                              <input type="radio" name="alasanpindah" value="Keluarga"> Keluarga
                            <br />

                              <input type="radio" name="alasanpindah" value="Lain - lain"> Lain - lain
                            <br />

                              <input type="radio" name="alasanpindah" value="Tidak"> Tidak
                            <br />
                          </div>

                          <div class="col-md-12">
                            <label></label>
                          </div>

                          <div class="col-md-12">
                            <label>21. Apakah Saudara sempat menganggur saat berpindah - pindah pekerjaan ?</label><br>

                              <input type="radio" name="sempatmenganggur" value="Tidak">Tidak
                            <br />

                              <input type="radio" name="sempatmenganggur" value="Ya, Kurang dari 3 bulan"> Ya, Kurang dari 3 bulan
                            <br />

                              <input type="radio" name="sempatmenganggur" value="Ya, 3 s/d 6 bulan"> Ya, 3 s/d 6 bulan
                            <br />

                              <input type="radio" name="sempatmenganggur" value="Ya, lebih dari 6 bulan"> Ya, lebih dari 6 bulan
                            <br />
                          </div>

                          <div class="col-md-12">
                            <label></label>
                          </div>

                          <div class="col-md-12">
                            <label>22. Apakah saudara masih ingin pindah kerja lagi ?</label><br>

                              <input type="radio" name="inginkerjalagi" value="Ya"> Ya
                            <br />

                              <input type="radio" name="inginkerjalagi" value="Tidak"> Tidak
                            <br />
                          </div>

                          <p class="text-center">
                              <a href="#riwayatpendidikan" data-toggle="tab" class="btn btn-success btn-outline-rounded green"> previous </a>
                              <a href="#pengalamanpembelajaran" data-toggle="tab" class="btn btn-success btn-outline-rounded green"> next </a>
                          </p>
                      </div>
                      <div class="tab-pane fade" id="pengalamanpembelajaran">
                          <h3 class="head text-center">D. Pengalaman Pembelajaran</h3>
                          <br>
                          <div class="col-md-12">
                            Pengalaman yang memberikan kontribusi dalam dunia kerja<br>
                            1. Tidak Penting<br>
                            2. Kurang Penting<br>
                            3. Penting<br>
                            4. Sangat Penting
                          </div>
                          <br>

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

                                        <input type="radio" name="dikelas" value="Tidak Penting"><label></label>
                                      <br />
                                    </td>
                                    <td>

                                        <input type="radio" name="dikelas" value="Kurang Penting"><label></label>
                                      <br />
                                    </td>
                                    <td>

                                        <input type="radio" name="dikelas" value="Penting"><label></label>
                                      <br />
                                    </td>
                                    <td>

                                        <input type="radio" name="dikelas" value="Sangat Penting"><label></label>
                                      <br />
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>24. Di Laboratorium</td>
                                    <td>

                                        <input type="radio" name="dilaboratorium" value="Tidak Penting"><label></label>
                                      <br />
                                    </td>
                                    <td>

                                        <input type="radio" name="dilaboratorium" value="Kurang Penting"><label></label>
                                      <br />
                                    </td>
                                    <td>

                                        <input type="radio" name="dilaboratorium" value="Penting"><label></label>
                                      <br />
                                    </td>
                                    <td>

                                        <input type="radio" name="dilaboratorium" value="Sangat Penting"><label></label>
                                      <br />
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>25. Di Organisasi</td>
                                    <td>

                                        <input type="radio" name="diorganisasi" value="Tidak Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="diorganisasi" value="Kurang Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="diorganisasi" value="Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="diorganisasi" value="Sangat Penting"><label></label>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>26. Di Perusahaan (KP)</td>
                                    <td>

                                        <input type="radio" name="diperusahaan" value="Tidak Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="diperusahaan" value="Kurang Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="diperusahaan" value="Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="diperusahaan" value="Sangat Penting"><label></label>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>27. Dalam Pergaulan</td>
                                    <td>

                                        <input type="radio" name="dalampergaulan" value="Tidak Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="dalampergaulan" value="Kurang Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="dalampergaulan" value="Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="dalampergaulan" value="Sangat Penting"><label></label>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>28. Mandiri</td>
                                    <td>

                                        <input type="radio" name="mandiri" value="Tidak Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="mandiri" value="Kurang Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="mandiri" value="Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="mandiri" value="Sangat Penting"><label></label>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>29. Di Lingkungan Masyarakat</td>
                                    <td>

                                        <input type="radio" name="lingkunganmasyarakat" value="Tidak Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="lingkunganmasyarakat" value="Kurang Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="lingkunganmasyarakat" value="Penting"><label></label>
                                    </td>
                                    <td>

                                        <input type="radio" name="lingkunganmasyarakat" value="Sangat Penting"><label></label>
                                    </td>
                                  </tr>
                                </table>
                          </div>
                          </div>
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

                      <input type="radio" name="pengetahuanumum" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanumum" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanumum" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanumum" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>31. Pengetahuan Teoritis Jurusan / Prodi</td>
                  <td>

                      <input type="radio" name="pengetahuanteori" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanteori" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanteori" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanteori" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>32. Pengetahuan Praktis Jurusan / Prodi</td>
                  <td>

                      <input type="radio" name="pengetahuanpraktis" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanpraktis" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanpraktis" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanpraktis" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>33. Bahasa Inggris</td>
                  <td>

                      <input type="radio" name="bahasainggris" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="bahasainggris" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="bahasainggris" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="bahasainggris" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>34. Ilmu Desain</td>
                  <td>

                      <input type="radio" name="ilmudesain" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="ilmudesain" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="ilmudesain" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="ilmudesain" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>35. Programming</td>
                  <td>

                      <input type="radio" name="programming" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="programming" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="programming" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="programming" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>36. Broadcasting</td>
                  <td>

                      <input type="radio" name="broadcasting" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="broadcasting" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="broadcasting" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="broadcasting" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>37. Foto, Audio, dan Video</td>
                  <td>

                      <input type="radio" name="fav" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="fav" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="fav" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="fav" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>38. Keterampilan Komunikasi Lisan (Presentasi, Diskusi, dll)</td>
                  <td>

                      <input type="radio" name="lisan" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="lisan" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="lisan" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="lisan" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>39. Keterampilan Komunikasi Tertulis (Membuat Laporan)</td>
                  <td>

                      <input type="radio" name="laporan" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="laporan" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="laporan" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="laporan" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>40. Kepemimpinan</td>
                  <td>

                      <input type="radio" name="kepemimpinan" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kepemimpinan" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kepemimpinan" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kepemimpinan" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>41. Manajemen Organisasi</td>
                  <td>

                      <input type="radio" name="organisasi" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="organisasi" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="organisasi" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="organisasi" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>42. Kerjasama Tim</td>
                  <td>

                      <input type="radio" name="kerjasamatim" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kerjasamatim" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kerjasamatim" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kerjasamatim" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>43. Memecahkan Masalah</td>
                  <td>

                      <input type="radio" name="memecahkanmasalah" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="memecahkanmasalah" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="memecahkanmasalah" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="memecahkanmasalah" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>44. Mengolah dan Menganalisa Data</td>
                  <td>

                      <input type="radio" name="data" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="data" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="data" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="data" value="Sangat Penting"><label></label>
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

                      <input type="radio" name="pengetahuanumum2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanumum2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanumum2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanumum2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>46. Pengetahuan Teoritis Jurusan / Prodi</td>
                  <td>

                      <input type="radio" name="pengetahuanteori2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanteori2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanteori2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanteori2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>47. Pengetahuan Praktis Jurusan / Prodi</td>
                  <td>

                      <input type="radio" name="pengetahuanpraktis2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanpraktis2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanpraktis2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="pengetahuanpraktis2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>48. Bahasa Inggris</td>
                  <td>

                      <input type="radio" name="bahasainggris2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="bahasainggris2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="bahasainggris2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="bahasainggris2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>49. Ilmu Desain</td>
                  <td>

                      <input type="radio" name="ilmudesain2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="ilmudesain2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="ilmudesain2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="ilmudesain2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>50. Programming</td>
                  <td>

                      <input type="radio" name="programming2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="programming2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="programming2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="programming2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>51. Broadcasting</td>
                  <td>

                      <input type="radio" name="broadcasting2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="broadcasting2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="broadcasting2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="broadcasting2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>52. Foto, Audio, dan Video</td>
                  <td>

                      <input type="radio" name="fav2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="fav2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="fav2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="fav2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>53. Keterampilan Komunikasi Lisan (Presentasi, Diskusi, dll)</td>
                  <td>

                      <input type="radio" name="lisan2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="lisan2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="lisan2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="lisan2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>54. Keterampilan Komunikasi Tertulis (Membuat Laporan)</td>
                  <td>

                      <input type="radio" name="laporan2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="laporan2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="laporan2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="laporan2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>55. Kepemimpinan</td>
                  <td>

                      <input type="radio" name="kepemimpinan2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kepemimpinan2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kepemimpinan2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kepemimpinan2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>56. Manajemen Organisasi</td>
                  <td>

                      <input type="radio" name="organisasi2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="organisasi2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="organisasi2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="organisasi2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>57. Kerjasama Tim</td>
                  <td>

                      <input type="radio" name="kerjasamatim2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kerjasamatim2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kerjasamatim2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="kerjasamatim2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>58. Memecahkan Masalah</td>
                  <td>

                      <input type="radio" name="memecahkanmasalah2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="memecahkanmasalah2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="memecahkanmasalah2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="memecahkanmasalah2" value="Sangat Penting"><label></label>
                  </td>
                </tr>

                <tr>
                  <td>59. Mengolah dan Menganalisa Data</td>
                  <td>

                      <input type="radio" name="data2" value="Tidak Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="data2" value="Kurang Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="data2" value="Penting"><label></label>
                  </td>
                  <td>

                      <input type="radio" name="data2" value="Sangat Penting"><label></label>
                  </td>
                </tr>


              </table>
            </div>
          </div>
          </div>
                          <p class="text-center">
                              <a href="#riwayatpekerjaan" data-toggle="tab" class="btn btn-success btn-outline-rounded green"> previous </a>
                              <a href="#saranuntukPENS" data-toggle="tab" class="btn btn-success btn-outline-rounded green"> next </a>
                          </p>
                      </div>
                      <div class="tab-pane fade" id="saranuntukPENS">
                        <div class="text-center">
                            <i class="img-intro icon-checkmark-circle"></i>
                        </div>
                        <h3 class="head text-center">E. Saran untuk PENS</h3>
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
                              <p class="text-center">
                                  <a href="#pengalamanpembelajaran" data-toggle="tab" class="btn btn-success btn-outline-rounded green"> previous </a>
                                  <input type="submit" class="btn btn-success btn-outline-rounded green" value="submit">
                              </p>
                              </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </body>
</html>
