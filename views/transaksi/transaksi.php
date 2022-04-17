
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Transaksi</h1>                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-warning">Data Transaksi
                            <a href="beranda.php?page=transaksi&aksi=add">
                                <button class= "btn btn-warning">Tambah data</button>
                                </a>                             
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                          
                                            <th>Tanggal transaksi</th>
                                            <th>Nama Anggota</th>
                                            <th>Nama Pegawai</th>
                                            <th>Nama Buku</th>
                                            <th>Quantity</th>
                                            <th>Jenis transaksi</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           
                                            <th>Tanggal transaksi</th>
                                            <th>Nama Anggota</th>
                                            <th>Nama Pegawai</th>
                                            <th>Nama Buku</th>
                                            <th>Quantity</th>
                                            <th>Jenis transaksi</th>
                                            <th>aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                            $sql = "select * from tabel_transaksi a left join tabel_anggota b on a.id_anggota = b.id_anggota
                                                   left join tabel_pegawai c on a.id_pegawai = c.id_pegawai 
                                                   left join tabel_buku d on a.id_buku = a.id_buku ";
                                            $show = $db->query($sql);
                                            foreach($show as $agt):                                    
                                       ?>
                                        <tr>
                                            <td><?php echo $agt["tanggal_transaksi"]?></td>
                                            <td><?php echo $agt["nama_anggota"]?></td>
                                            <td><?php echo $agt["nama_pegawai"]?></td>
                                            <td><?php echo $agt["nama_buku"]?></td>
                                            <td><?php echo $agt["quantity"]?></td>
                                            <td><?php echo $agt["jenis_transaksi"]?></td>
                                            <td>
                                <a href="beranda.php?page=transaksi&aksi=edit&id=<?php echo $agt['id_transaksi']?>"
                                    class="btn btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/transaksi/prosesdeletetransaksi.php?id=<?php echo $agt['id_transaksi']?>"
                                    class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                                           
                                        <?php endforeach ; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>