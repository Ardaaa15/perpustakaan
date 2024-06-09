<?php
    include "header.php";
    
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-2" style="min-height: 480px">
            <div class="card">
                <div class="card-header">
                    Data Kategori
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="tambah_kategori.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="col">
                            <form class="form-inline float-right" method="GET">
                                <input type="text" class="form-control" name="keyword">
                                <input type="submit" class="btn btn-primary ml-2" name="cari" value="Cari">
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php
                                if (isset($_GET['cari'])) {
                                  $keyword=$_GET['keyword'];
                                  $query = mysqli_query($koneksi, "SELECT * FROM kategori where
                                  nama_kategori like '%$keyword%'"); 
                                }else{
                                  $query = mysqli_query($koneksi, "SELECT * FROM kategori"); 
                                }
                                $no = 1; // tambahkan variabel untuk nomor urut
                                while ($ambil_data = mysqli_fetch_array($query)) {
                              ?>
                                <tr>
                                    <td><?= $no++;?></td>
                                    <td><?= $ambil_data['id_kategori'];?></td>
                                    <td><?= $ambil_data['nama_kategori'];?></td>
                                    <td>
                                        <a href="edit_kategori.php?id=<?php echo $ambil_data['id_kategori']?>"class="btn btn-warning">Edit</a>
                                        <a href="hapus_kategori.php?id= <?php echo $ambil_data['id_kategori']?>" class="btn btn-danger">Hapus</a>

                                    </td>
                                </tr>
                                <?php
                                }
                              ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "footer.html";
?>