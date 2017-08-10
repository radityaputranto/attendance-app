            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><b>Data Pegawai</b></li>
            </ol>
            
            <!-- table user -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Data Pegawai
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Age</th>
                                    <th>Tanggal masuk</th>
                                    <th>No Telepon</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Age</th>
                                    <th>Tanggal masuk</th>
                                    <th>No Telepon</th>
                                    <th>Detail</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td><button type="button" class="btn btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">
                    Data update : (hari/tanggal/tahun) 11:59 PM
                </div>
            </div>
            <!-- akhir table user -->

            <!-- tombol -->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                <button type="button" class="btn btn-outline-primary btn-sm btn-block">Get All User</button>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                <button type="button" class="btn btn-outline-warning btn-sm btn-block">delete All User</button>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                <button type="button" class="btn btn-outline-danger btn-sm btn-block">Clear User</button>
                </div>

                <div class="col-xl-3 col-sm-6 mb-3">
                <button type="button" class="btn btn-outline-danger btn-sm btn-block">Clear Scanlog In Database</button>
                </div>
            </div>
            <!-- /tombol-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="input-group">
                      
                      <input type="text" class="form-control" placeholder="PIN">
                      <span class="input-group-btn">
                        <button class="btn  btn-primary" type="button">Set User</button>
                      </span>
                    </div>
                </div>

                    <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="input-group">
                      
                      <input type="text" class="form-control" placeholder="PIN">
                      <span class="input-group-btn">
                        <button class="btn  btn-danger" type="button">Delete User</button>
                      </span>
                    </div>
                  </div>
            </div>