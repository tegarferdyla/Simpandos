 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title mb-0">View File</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('ppk') ?>">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo site_url('ppk/jenispaket/'.$where_paket['id_tahun']) ?>"><?php echo $where_paket['nama_tahun']; ?></a>
                </li>
                <li class="breadcrumb-item"><a href=""><?php echo $where_paket['main_jenis']; ?></a></li>
                <?php if ($where_paket['sub_jenis']) :?>
                  <li class="breadcrumb-item"><a href="<?php echo site_url('ppk/pilihpaket/'.$where_paket['id_tahun'].'/'.$where_paket['id_jenis']) ?>"><?php echo $where_paket['sub_jenis']; ?></a></li>
                <?php endif ?>
                <li class="breadcrumb-item"><a href=""><?php echo $where_paket['nama_paket']; ?></a></li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <?php date_default_timezone_set('Asia/Jakarta'); date_default_timezone_set("Asia/Jakarta"); $jam  =  date("H:i:s");  ?>
            <h4 class="text-success"><i class="ft-calendar"> <?php echo date('d-m-Y') ?> </i></h4>&nbsp; &nbsp; &nbsp;
            <i class="ft-clock text-info  "></i>&nbsp; &nbsp;<h4 class="text-info" id="txt"></h4>         
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                  <div class="col-md-10">
                    <h4 class="card-title"><?php echo $where_paket['nama_paket']; ?></h4>
                  </div>
                  <div class="col-md-2 right">
                    <div class="btn-group" role="group">
                      <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1"
                      type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-zap icon-left"></i> Aksi</button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="<?php echo base_url()."ppk/updatefilepembangunan/".$where_paket['id_jenis']."/".$where_paket['id_paket'] ?>">Update Dokumen</a>
                        <a class="dropdown-item" href="<?php echo base_url()."ppk/printlaporanpembangunan/".$where_paket['id_jenis']."/".$where_paket['id_paket'] ?>" target ="_blank">Print Laporan</a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <?php if ($this->session->flashdata('berhasil')): ?>
                    <div class="alert alert-success alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                      </button>
                      <strong> File Baru Berhasil ditambahkan</strong>
                    </div>
                    <?php elseif ($this->session->flashdata('deleteberhasil')): ?>
                    <div class="alert alert-info alert-dismissible mb-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="false">&times;</span>
                      </button>
                      <strong> File Berhasil Dihapus !</strong>
                    </div>
                    <?php endif ?>
                    <ul class="nav nav-tabs nav-linetriangle no-hover-bg">
                      <li class="nav-item">
                        <a class="nav-link active" id="base-tab31" data-toggle="tab" aria-controls="tab31"
                        href="#tab31" aria-expanded="true">Readiness Criteria</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab32" data-toggle="tab" aria-controls="tab32" href="#tab32"
                        aria-expanded="false">Kontrak</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab33" data-toggle="tab" aria-controls="tab32" href="#tab33"
                        aria-expanded="false">MCO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab34" data-toggle="tab" aria-controls="tab32" href="#tab34"
                        aria-expanded="false">Klarifikasi Pasca MCO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab35" data-toggle="tab" aria-controls="tab32" href="#tab35"
                        aria-expanded="false">Addendum</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab36" data-toggle="tab" aria-controls="tab32" href="#tab36"
                        aria-expanded="false">Laporan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab37" data-toggle="tab" aria-controls="tab32" href="#tab37"
                        aria-expanded="false">Uji Berita konstruksi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab38" data-toggle="tab" aria-controls="tab32" href="#tab38"
                        aria-expanded="false"><i>SCM</i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab39" data-toggle="tab" aria-controls="tab32" href="#tab39"
                        aria-expanded="false"><i>PHO</i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab40" data-toggle="tab" aria-controls="tab32" href="#tab40"
                        aria-expanded="false"><i>FHO</i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="base-tab41" data-toggle="tab" aria-controls="tab32" href="#tab41"
                        aria-expanded="false">Dokumentasi</a>
                      </li>
                    </ul>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- -------------------READINESSS CRITERIA------------------------------- -->
                    <!-- --------------------------------------------------------------------- -->
                    <div class="tab-content px-1 pt-1">
                      <div role="tabpanel" class="tab-pane active" id="tab31" aria-expanded="true" aria-labelledby="base-tab31">

                      <div class="form-body">
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Minat Daerah</b></label>
                              <br>
                              <?php if (!empty($file_smd)): ?>
                                <?php foreach ($file_smd as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>  
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="projectinput2"><b>Surat Menerima Hibah</b></label>
                              <br>
                              <?php if (!empty($file_smh)): ?>
                                <?php foreach ($file_smh as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                          </div>
                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Kesiapan Lahan</b></label>
                              <br>
                             <?php if (!empty($file_skl)): ?>
                                <?php foreach ($file_skl as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                              
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Kesepakatan Bersama</b></label>
                              <br>
                             <?php if (!empty($file_ksb)): ?>
                                <?php foreach ($file_ksb as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                              
                            </div>
                          </div>
                        </div>

                        <div class ="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Perjanjian Kerjasama</b></label>
                              <br>
                             <?php if (!empty($file_pks)): ?>
                                <?php foreach ($file_pks as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                              
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Kuasa</b></label>
                              <br>
                             <?php if (!empty($file_sk)): ?>
                                <?php foreach ($file_sk as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                              
                            </div>
                          </div>
                        </div>

                        </div>
                      </div>
                      <!-- --------------------------------------------------------------------- -->
                      <!-- ---------------------------- KONTRAK -------------------------------- -->
                      <!-- --------------------------------------------------------------------- -->

                      <div class="tab-pane" id="tab32" aria-labelledby="base-tab32">
                      <div class="form-body">
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>SPPBJ</b></label>
                              <br>
                              <?php if (!empty($file_sppbj)): ?>
                                <?php foreach ($file_sppbj as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>SPMK</b></label>
                              <br>
                              <?php if (!empty($file_spmk)): ?>
                                <?php foreach ($file_spmk as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                          </div>

                        </div>

                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Naskah Kontrak</b></label>
                              <br>
                              <?php if (!empty($file_naskon)): ?>
                                <?php foreach ($file_naskon as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Rencana Mutu Kontrak</b></label>
                              <br>
                              <?php if (!empty($file_rmk)): ?>
                                <?php foreach ($file_rmk as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                          </div>
                        
                        </div>
                      </div>
                    </div>

                    <!-- --------------------------------------------------------------------- -->
                    <!-- ---------------------------- MC0 -------------------------------- -->
                    <!-- --------------------------------------------------------------------- -->

                    <div class="tab-pane" id="tab33" aria-labelledby="base-tab33">
                      <div class="form-body">
                        
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><i><b>Design Drawing</b></i></label>
                              <br>
                              <?php if (!empty($file_dd)): ?>
                                <?php foreach ($file_dd as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Lapangan</b></label>
                              <br>
                              <?php if (!empty($file_bal_mco)): ?>
                                <?php foreach ($file_bal_mco as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Justifikasi dan Spesifikasi Teknis</b></label>
                              <br>
                              <?php if (!empty($file_jst_mco)): ?>
                                <?php foreach ($file_jst_mco as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara <i>Pree Construction Meeting(PCM)</i></b></label>
                              <br>
                              <?php if (!empty($file_pcm)): ?>
                                <?php foreach ($file_pcm as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                          </div>

                      </div>

                    </div>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- ---------------- Hasil klarifikasi Pasca MC0 ------------------------ -->
                    <!-- --------------------------------------------------------------------- -->

                      <div class="tab-pane" id="tab34" aria-labelledby="base-tab34">
                        <div class="form-body">
                          
                          <div class="row">

                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Bill of Quantity</i></b></label>
                              <br>
                              <?php if (!empty($file_boq_psc)): ?>
                                <?php foreach ($file_boq_psc as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Justifikasi dan Spesifikasi Teknis</b></label>
                              <br>
                              <?php if (!empty($file_jst_psc)): ?>
                                <?php foreach ($file_jst_psc as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                          </div>
                          <div class="row">
                            
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Lampiran Pendukung</b></label>
                              <br>
                              <?php if (!empty($file_slp_psc)): ?>
                                <?php foreach ($file_slp_psc as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Kurva S Revisi</b></label>
                              <br>
                              <?php if (!empty($file_kurva_psc)): ?>
                                <?php foreach ($file_kurva_psc as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                          </div>
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Shop Drawing</i></b></label>
                              <br>
                              <?php if (!empty($file_sd_psc)): ?>
                                <?php foreach ($file_sd_psc as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Klarifikasi Negosiasi</b></label>
                              <br>
                              <?php if (!empty($file_bakn_psc)): ?>
                                <?php foreach ($file_bakn_psc as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Naskah Addendum I</b></label>
                              <br>
                              <?php if (!empty($file_na1)): ?>
                                <?php foreach ($file_na1 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                          </div>

                        </div>  
                      </div>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- ------------------------------- ADENDUM ------------------------------- -->
                    <!-- ----------------------------------------------------------------------- -->

                    <div class="tab-pane" id="tab35" aria-labelledby="base-tab35">

                    <div style="<?php if(empty($file_bal_ad2) && empty($file_boq_ad2) && empty($file_jst_ad2) && empty($file_slp_ad2) && empty($file_kurva_ad2) && empty($file_sd_ad2) && empty($file_bakn_ad2) && empty($file_na2)){echo 'display: none';}?>" data-topic="addendumii">
                     <div class="form-body">
                          <h4>Addendum II</h4>
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Lapangan </b></label>
                              <br>
                              <?php if (!empty($file_bal_ad2)): ?>
                                <?php foreach ($file_bal_ad2 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Bill of Quantity</i></b></label>
                              <br>
                              <?php if (!empty($file_boq_ad2)): ?>
                                <?php foreach ($file_boq_ad2 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Justifikasi dan Spesifikasi Teknis</b></label>
                              <br>
                              <?php if (!empty($file_jst_ad2)): ?>
                                <?php foreach ($file_jst_ad2 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Lampiran Pendukung</b></label>
                              <br>
                              <?php if (!empty($file_slp_ad2)): ?>
                                <?php foreach ($file_slp_ad2 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Kurva S Revisi</b></label>
                              <br>
                              <?php if (!empty($file_kurva_ad2)): ?>
                                <?php foreach ($file_kurva_ad2 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Shop Drawing</i></b></label>
                              <br>
                              <?php if (!empty($file_sd_ad2)): ?>
                                <?php foreach ($file_sd_ad2 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Klarifikasi Negosiasi</b></label>
                              <br>
                              <?php if (!empty($file_bakn_ad2)): ?>
                                <?php foreach ($file_bakn_ad2 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Naskah Addendum II</b></label>
                              <br>
                              <?php if (!empty($file_na2)): ?>
                                <?php foreach ($file_na2 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- ---------------------------------- Addendum 3 ---------------------------------- -->
                    <div style="<?php if(empty($file_bal_ad3) && empty($file_boq_ad3) && empty($file_jst_ad3) && empty($file_slp_ad3) && empty($file_kurva_ad3) && empty($file_sd_ad3) && empty($file_bakn_ad3) && empty($file_na3)){echo 'display: none';}?>" data-topic="addendumii">
                     <div class="form-body">
                          <hr>
                          <h4>Addendum III</h4>
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Lapangan </b></label>
                              <br>
                              <?php if (!empty($file_bal_ad3)): ?>
                                <?php foreach ($file_bal_ad3 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Bill of Quantity</i></b></label>
                              <br>
                              <?php if (!empty($file_boq_ad3)): ?>
                                <?php foreach ($file_boq_ad3 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Justifikasi dan Spesifikasi Teknis</b></label>
                              <br>
                              <?php if (!empty($file_jst_ad3)): ?>
                                <?php foreach ($file_jst_ad3 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Lampiran Pendukung</b></label>
                              <br>
                              <?php if (!empty($file_slp_ad3)): ?>
                                <?php foreach ($file_slp_ad3 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Kurva S Revisi</b></label>
                              <br>
                              <?php if (!empty($file_kurva_ad3)): ?>
                                <?php foreach ($file_kurva_ad3 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Shop Drawing</i></b></label>
                              <br>
                              <?php if (!empty($file_sd_ad3)): ?>
                                <?php foreach ($file_sd_ad3 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Klarifikasi Negosiasi</b></label>
                              <br>
                              <?php if (!empty($file_bakn_ad3)): ?>
                                <?php foreach ($file_bakn_ad3 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Naskah Addendum III</b></label>
                              <br>
                              <?php if (!empty($file_na3)): ?>
                                <?php foreach ($file_na3 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- ---------------------------------- Addendum 4 ---------------------------------- -->
                    <div style="<?php if(empty($file_bal_ad4) && empty($file_boq_ad4) && empty($file_jst_ad4) && empty($file_slp_ad4) && empty($file_kurva_ad4) && empty($file_sd_ad4) && empty($file_bakn_ad4) && empty($file_na3)){echo 'display: none';}?>" data-topic="addendumii">
                     <div class="form-body">
                          <hr>
                          <h4>Addendum IV</h4>
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Lapangan </b></label>
                              <br>
                              <?php if (!empty($file_bal_ad4)): ?>
                                <?php foreach ($file_bal_ad4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Bill of Quantity</i></b></label>
                              <br>
                              <?php if (!empty($file_boq_ad4)): ?>
                                <?php foreach ($file_boq_ad4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Justifikasi dan Spesifikasi Teknis</b></label>
                              <br>
                              <?php if (!empty($file_jst_ad4)): ?>
                                <?php foreach ($file_jst_ad4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Lampiran Pendukung</b></label>
                              <br>
                              <?php if (!empty($file_slp_ad4)): ?>
                                <?php foreach ($file_slp_ad4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Kurva S Revisi</b></label>
                              <br>
                              <?php if (!empty($file_kurva_ad4)): ?>
                                <?php foreach ($file_kurva_ad4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Shop Drawing</i></b></label>
                              <br>
                              <?php if (!empty($file_sd_ad4)): ?>
                                <?php foreach ($file_sd_ad4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Klarifikasi Negosiasi</b></label>
                              <br>
                              <?php if (!empty($file_bakn_ad4)): ?>
                                <?php foreach ($file_bakn_ad4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Naskah Addendum III</b></label>
                              <br>
                              <?php if (!empty($file_na4)): ?>
                                <?php foreach ($file_na4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- ---------------------------------- Addendum 5 ---------------------------------- -->
                    <div style="<?php if(empty($file_bal_ad5) && empty($file_boq_ad5) && empty($file_jst_ad5) && empty($file_slp_ad5) && empty($file_kurva_ad5) && empty($file_sd_ad5) && empty($file_bakn_ad5) && empty($file_na5)){echo 'display: none';}?>" data-topic="addendumii">
                     <div class="form-body">
                          <hr>
                          <h4>Addendum V</h4>
                          <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Lapangan </b></label>
                              <br>
                              <?php if (!empty($file_bal_ad5)): ?>
                                <?php foreach ($file_bal_ad5 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Bill of Quantity</i></b></label>
                              <br>
                              <?php if (!empty($file_boq_ad5)): ?>
                                <?php foreach ($file_boq_ad5 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Justifikasi dan Spesifikasi Teknis</b></label>
                              <br>
                              <?php if (!empty($file_jst_ad5)): ?>
                                <?php foreach ($file_jst_ad5 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Lampiran Pendukung</b></label>
                              <br>
                              <?php if (!empty($file_slp_ad5)): ?>
                                <?php foreach ($file_slp_ad5 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Kurva S Revisi</b></label>
                              <br>
                              <?php if (!empty($file_kurva_ad5)): ?>
                                <?php foreach ($file_kurva_ad5 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i>Shop Drawing</i></b></label>
                              <br>
                              <?php if (!empty($file_sd_ad5)): ?>
                                <?php foreach ($file_sd_ad5 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Klarifikasi Negosiasi</b></label>
                              <br>
                              <?php if (!empty($file_bakn_ad5)): ?>
                                <?php foreach ($file_bakn_ad5 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Naskah Addendum V</b></label>
                              <br>
                              <?php if (!empty($file_na4)): ?>
                                <?php foreach ($file_na4 as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- ------------------------------ Laporan ------------------------------ -->
                    <!-- --------------------------------------------------------------------- -->

                    <div class="tab-pane" id="tab36" aria-labelledby="base-tab36">
                      <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Laporan Harian</b></label>
                              <br>
                              <?php if (!empty($file_lh)): ?>
                                <?php foreach ($file_lh as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Laporan Mingguan</b></label>
                              <br>
                              <?php if (!empty($file_lm)): ?>
                                <?php foreach ($file_lm as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Laporan Bulanan</b></label>
                              <br>
                              <?php if (!empty($file_lb)): ?>
                                <?php foreach ($file_lb as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Sertifikat Pembayaran</b></label>
                              <br>
                              <?php if (!empty($file_sp)): ?>
                                <?php foreach ($file_sp as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- ------------------------------ Uji Berita Konstruksi ---------------- -->
                    <!-- --------------------------------------------------------------------- -->

                    <div class="tab-pane" id="tab37" aria-labelledby="base-tab37">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Pengujian Material</b></label>
                              <br>
                              <?php if (!empty($file_bapm)): ?>
                                <?php foreach ($file_bapm as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- ------------------------------ SCM ---------------- -->
                    <!-- --------------------------------------------------------------------- -->

                    <div class="tab-pane" id="tab38" aria-labelledby="base-tab38">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara <i>Show Cause Meeting</i>(SCM)</b></label>
                              <br>
                              <?php if (!empty($file_scm)): ?>
                                <?php foreach ($file_scm as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- ------------------------------ PHO ---------------- -->
                    <!-- --------------------------------------------------------------------- -->

                    <div class="tab-pane" id="tab39" aria-labelledby="base-tab39">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Permohonan PHO</b></label>
                              <br>
                              <?php if (!empty($file_sp_pho)): ?>
                                <?php foreach ($file_sp_pho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara <i>First Visit</i></b></label>
                              <br>
                              <?php if (!empty($file_ba_pho)): ?>
                                <?php foreach ($file_ba_pho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara <i>Second Visit</i></b></label>
                              <br>
                              <?php if (!empty($file_basv_pho)): ?>
                                <?php foreach ($file_basv_pho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Serah terima Pekerjaan</b></label>
                              <br>
                              <?php if (!empty($file_bastp_pho)): ?>
                                <?php foreach ($file_bastp_pho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b><i> As Build Drawing</i></b></label>
                              <br>
                              <?php if (!empty($file_abd_pho)): ?>
                                <?php foreach ($file_abd_pho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- ------------------------------ FHO ---------------- -->
                    <!-- --------------------------------------------------------------------- -->

                    <div class="tab-pane" id="tab40" aria-labelledby="base-tab40">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Surat Permohonan FHO</b></label>
                              <br>
                              <?php if (!empty($file_sp_fho)): ?>
                                <?php foreach ($file_sp_fho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara <i>First Visit</i></b></label>
                              <br>
                              <?php if (!empty($file_ba_fho)): ?>
                                <?php foreach ($file_ba_fho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara <i>Second Visit</i></b></label>
                              <br>
                              <?php if (!empty($file_basv_fho)): ?>
                                <?php foreach ($file_basv_fho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Berita Acara Serah terima Pekerjaan</b></label>
                              <br>
                              <?php if (!empty($file_bastp_fho)): ?>
                                <?php foreach ($file_bastp_fho as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- --------------------------------------------------------------------- -->
                    <!-- ------------------------------ Dokumentasi ---------------- -->
                    <!-- --------------------------------------------------------------------- -->

                    <div class="tab-pane" id="tab41" aria-labelledby="base-tab41">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Dokumentasi</b></label>
                              <br>
                              <?php if (!empty($file_dok)): ?>
                                <?php foreach ($file_dok as $u) { ?>
                                  <p style="color: green"><?php echo $u['nama_file'] ?></p>
                                  <a href="<?php echo base_url('assets/data/'.$where_paket['nama_tahun']. '/'.$data_ppk['nama_ppk'].'/'.$where_paket['main_jenis']. '/'.$where_paket['sub_jenis'] .'/'. $where_paket['nama_paket'].'/'.$u['nama_file']) ?>" target = "_blank"><button type="button" class="btn btn-icon btn-primary mr-1"><i class="fa fa-download"></i> Download</button></a>
                                <?php } ?>
                              <?php else: ?>
                                <p style="color:red">Tidak Ada Data</p>  
                              <?php endif ?>
                            </div>
                            </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <!--/ Zero configuration table -->
      </div>
    </div>
  </div>