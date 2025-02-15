<!DOCTYPE html>
<html lang="en">

@include('siswa.components.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper bg-dark">



        @include('siswa.components.navbar')

        @include('siswa.components.sidebar')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-warning">Formulir</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#" class="text-warning">Home</a></li>
                                <li class="breadcrumb-item active">Formulir</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content  ">
                <!-- Notifikasi menggunakan flash session data -->

                @if (session('success'))
                    <div class="alert alert-success" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-error">
                        <div class="alert alert-danger" id="success-alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{ session('error') }}
                        </div>
                    </div>
                @endif
                <div>
                </div>
                <div class="container border border-warning">
                        <div class="container-fluid">
                            <center>
                                <div class="row mb-5">
                                    <div class="col text-center">
                                        <img src="{{ asset('public/assets/img/logo_sekolah.png') }}" alt=""
                                            width="100px">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="m-0 text-center" style="padding-top:15px">Isi Formulir Pendaftaran Ulang
                                            Siswa Baru</h2>
                                        <p>Silahkan mengisi Formulir di bawah ini</p>
                                    </div>
                                    <div class="col">
                                        {{-- <img src="{{ asset('public/assets/img/adiwiyata.png') }}" alt=""
                                            width="150px"> --}}
                                    </div>
                                </div>
                            </center>
                            <form action="/formulir_proses" enctype="multipart/form-data" method="POST">
                                @csrf
                                <input type="hidden" name="id_user_detail" />
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                         required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_panggilan">Nama Panggilan</label>
                                    <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" 
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="no_telp">No Telp</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" required >
                                </div>
                                <div class="form-group">
                                    <label for="sekolah_asal">Sekolah Asal</label>
                                    <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" 
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin : </label>
                                    <select name="jenis_kelamin" class="form-control" >
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" 
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" 
                                        id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_panggilan">Agama : </label>
                                    <select name="agama" id="agama" class="form-control" >
                                        <option>Kirsten</option>
                                        <option>Katholik</option>
                                        <option>Islam</option>
                                        <option>Budha</option>
                                        <option>Hindu</option>
                                        <option>Kong Hu Cu</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input type="text" class="form-control" id="kewarganegaraan"
                                        name="kewarganegaraan"  required>
                                </div>
                                <div class="form-group">
                                    <label for="nama_panggilan">Status Kekeluargaan : </label>
                                    <select name="status_kekeluargaan" id="status_kekeluargaan" class="form-control" >
                                        <option>Kandung</option>
                                        <option>Tiri</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="anak_ke">Anak Ke -</label>
                                    <input type="text" class="form-control" id="anak_ke" name="anak_ke" required 
                                        </div>
                                    <div class="form-group">
                                        <label for="saudara_kandung">Saudara Kandung</label>
                                        <input type="text" class="form-control" id="saudara_kandung" 
                                            name="saudara_kandung" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="saudara_tiri">Saudara Tiri</label>
                                        <input type="text" class="form-control" id="saudara_tiri" name="saudara_tiri"
                                            required >
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" id="alamat" name="alamat" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="rt_rw">RT/RW</label>
                                        <input type="text" class="form-control" id="rt_rw" name="rt_rw" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="kelurahan">Kelurahan</label>
                                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" 
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" 
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupaten">Kabupaten</label>
                                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" 
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi">Provinsi</label>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi" 
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_pos">Kode Pos</label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos" 
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ijazah">Ijazah</label>
                                        <input type="file" class="form-control" id="ijazah" name="ijazah" >
                                    </div>
                                    <input type="text" name="ijazah_old" id="ijazah_old"
                                         hidden>
                                    <div class="form-group">
                                        <label for="kk">Kartu Keluarga</label>
                                        <input type="file" class="form-control" id="kk" name="kk"  >
                                    </div>
                                    <input type="text" name="kk_old" id="kk_old"  hidden>
                                    <div class="form-group">
                                        <label for="akta_kelahiran">Akta Kelahiran</label>
                                        <input type="file" class="form-control" id="akta_kelahiran" 
                                            name="akta_kelahiran" >
                                    </div>
                                    <input type="text" name="akta_kelahiran_old" id="akta_kelahiran_old"
                                         hidden>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto" >
                                    </div>
                                    <input type="text" name="foto_old" id="foto_old" 
                                       >
                                    <div class="form-group">
                                        <label for="surat_keterangan_lulus">Surat Keterangan Lulus Sementara</label>
                                        <input type="file" class="form-control" id="surat_keterangan_lulus"
                                            name="surat_keterangan_lulus" >
                                    </div>
                                    <input type="text" name="surat_keterangan_lulus_old" id="surat_keterangan_lulus_old"
                                         hidden>
                                    

                                    <div class="form-group">
                                        <label for="jalur_pendaftaran">Jalur Pendaftaran : </label>
                                        <select name="jalur_pendaftaran" id="jalur_pendaftaran" class="form-control" >
                                            <option>Zonasi</option>
                                            <option>Prestasi</option>
                                        </select>
                                    </div>
                                    
                                    <br>
                                    <h3>Data Ayah Kandung/Tiri</h3>
                                    <br>
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama Ayah</label>
                                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" 
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir_ayah">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir_ayah" 
                                            name="tempat_lahir_ayah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir_ayah" 
                                            name="tanggal_lahir_ayah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama_ayah">Agama : </label>
                                        <select name="agama_ayah" id="agama_ayah" class="form-control" >
                                            <option>Kirsten</option>
                                            <option>Katholik</option>
                                            <option>Islam</option>
                                            <option>Budha</option>
                                            <option>Hindu</option>
                                            <option>Kong Hu Cu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan_ayah">Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan_ayah" 
                                            name="pendidikan_ayah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan_ayah">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan_ayah" 
                                            name="pekerjaan_ayah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="warga_negara_ayah">Kewarganegaraan</label>
                                        <input type="text" class="form-control" id="warga_negara_ayah" 
                                            name="warga_negara_ayah" value="Indonesia" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_telepon_ayah">Nomor Telepon Ayah</label>
                                        <input type="text" class="form-control" id="nomor_telepon_ayah" 
                                            name="nomor_telepon_ayah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendapatan_ayah">Pendapatan Ayah</label>
                                        <input type="text" class="form-control" id="pendapatan_ayah" 
                                            name="pendapatan_ayah" required>
                                    </div>
                                    <br>
                                    <h3>Data Ibu Kandung/Tiri</h3>
                                    <br>
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Ibu</label>
                                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" 
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir_ibu">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir_ibu" 
                                            name="tempat_lahir_ibu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir_ibu" 
                                            name="tanggal_lahir_ibu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama_ibu">Agama : </label>
                                        <select name="agama_ibu" id="agama_ibu" class="form-control" >
                                            <option>Kirsten</option>
                                            <option>Katholik</option>
                                            <option>Islam</option>
                                            <option>Budha</option>
                                            <option>Hindu</option>
                                            <option>Kong Hu Cu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan_ibu">Pendidikan</label>
                                        <input type="text" class="form-control" id="pendidikan_ibu" 
                                            name="pendidikan_ibu" v>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan_ibu">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan_ibu" 
                                            name="pekerjaan_ibu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="warga_negara_ibu">Warga Negara</label>
                                        <input type="text" class="form-control" id="warga_negara_ibu" 
                                            name="warga_negara_ibu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_telepon_ibu">Nomor Telepon</label>
                                        <input type="text" class="form-control" id="nomor_telepon_ibu" 
                                            name="nomor_telepon_ibu" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendapatan_ibu">Pendapatan</label>
                                        <input type="text" class="form-control" id="pendapatan_ibu" 
                                            name="pendapatan_ibu" required>
                                    </div>
                                    <input type="text"  name="id" hidden>
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                </div>
                            </form>
                            <br><br>
                            
                    <!-- /.row (main row) -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('siswa.components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('siswa.components.js')

</body>

</html>
