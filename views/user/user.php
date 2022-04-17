
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data User</h1>                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-warning">Data User
                            <a href="beranda.php?page=user&aksi=add">
                                <button class= "btn btn-warning">Tambah data</button>
                                </a>                             
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            
                                           
                                            <th>id pegawai</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>DibuatPada</th>
                                            <th>aksi</th>                                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                           
                                            
                                            <th>id pegawai</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>DibuatPada</th>   
                                            <th>aksi</th>  
                                    </tfoot>
                                    <tbody>
                                    <?php
                                            $sql = "select * from tabel_user";
                                            $show = $db->query($sql);
                                            foreach ($show as $agt):                                     
                                       ?>

                                       
                                        
                                        <tr>
                                           
                                            <td><?php echo $agt["id_pegawai"]?></td>
                                            <td><?php echo $agt["username"]?></td>
                                            <td><?php echo $agt["password"]?></td>
                                            <td><?php echo $agt["level"]?></td>
                                            <td><?php echo $agt["dibuatpada"]?></td>
                                            <td>
                                <a href="beranda.php?page=user&aksi=edit&id=<?php echo $agt['id_user']?>"
                                    class="btn btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/user/prosesdeleteuser.php?id=<?php echo $agt['id_user']?>"
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