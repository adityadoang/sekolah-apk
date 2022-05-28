      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0">Mata Pelajaran</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Guru</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                    <table class="table table-striped table-hover table-border">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nomor Induk Penduduk</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Foto</th>
                                <th>No.WhatsApp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                include_once('config.php');
                                $sql = "SELECT * FROM teachers ORDER BY name ASC";
                                $result = mysqli_query($config, $sql);
                                if (mysqli_num_rows($result) > 0){
                                    $no=1;
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo'<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$row['nip'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['pob'].'</td>
                                            <td>'.$row['dob'].'</td>
                                            <td>'.$row['photo'].'</td>
                                            <td>'.$row['wa'].'</td>
                                            <td>
                                                <a href="?m=subject&s=edit&id='.$row['id'].'" class="btn btn-warning btn-sm">edit</a>
                                                <a href="?m=subject&s=delete&id='.$row['id'].'"onclick="retrn confirm (\'Yakin akan dihapus?\')" class="btn btn-danger btn-sm">hapus</a>
                                            </td>
                                        </tr>';
                                        $no++;
                                    }
                                }else{
                                    echo'<tr>
                                        <td colspan=7>Tidak Ada Data</td>
                                    </tr>';
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->