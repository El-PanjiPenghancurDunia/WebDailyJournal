<div class="container">
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
    <i class="bi bi-plus-lg"></i> Tambah User
</button>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th class="w-50">Gambar</th>
                        <th class="w-25">Nama</th>
                        <th class="w-50">Password</th>
                        <th class="w-25">Role</th>
                        <th class="w-25">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Konfigurasi paginasi
                    $per_page = 4; // Jumlah item per halaman
                    $page = isset($_GET['hal']) ? (int)$_GET['hal'] : 1; // Ubah 'page' menjadi 'hal'
                    $start = ($page - 1) * $per_page;

                    // Query untuk mendapatkan total data
                    $total_query = "SELECT COUNT(*) as total FROM user";
                    $total_result = $conn->query($total_query);
                    $total_row = $total_result->fetch_assoc();
                    $total_pages = ceil($total_row['total'] / $per_page);

                    // Pastikan halaman tidak melebihi total halaman
                    if($page > $total_pages) {
                        $page = $total_pages;
                    }
                    if($page < 1) {
                        $page = 1;
                    }                    

                    $sql = "SELECT * FROM user ORDER BY id DESC LIMIT $start, $per_page";
                    $hasil = $conn->query($sql);

                    $no = ($page - 1) * $per_page + 1; // Nomor urut dimulai dari data ke berapa
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>
                            <?php
                                if ($row["gambar"] != '') {
                                    if (file_exists('../gambar/' . $row["gambar"] . '')) {
                                ?>
                                        <img src="../gambar/<?= $row["gambar"] ?>" width="100">
                                <?php
                                    }
                                }
                                ?>
                            </td>
                                <td>
                                    <?= $row["username"] ?>
                                    
                                </td>
                                <td>
                                    <?= $row["password"] ?>
                                    
                                </td>
                                <td>
                                    <?= $row["role"] ?>
                                </td>
                            <td>
                                <a href="#" title="edit" class="badge rounded-pill text-bg-success" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row["id"] ?>"><i class="bi bi-pencil"></i></a>
                                <a href="#" title="delete" class="badge rounded-pill text-bg-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row["id"] ?>"><i class="bi bi-x-circle"></i></a>
                            
                                <!-- Awal Modal Edit -->
                            <div class="modal fade" id="modalEdit<?= $row["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Gallery</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <p>Username Lama : <?= $row["username"] ?> <br>
                                                Password Lama : <?= $row["password"] ?> <br>
                                                role Lama : <?= $row["role"] ?>
                                            </p>
                                            <hr>
                                                <div class="mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label">Ganti Username</label>
                                                    <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                                    <input type="text" class="form-control" name="username" placeholder="Tuliskan Username Baru" value="<?= $row["username"] ?>" required>
                                                    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="floatingTextarea2">Password</label>
                                                    <textarea class="form-control" placeholder="Tuliskan Password Baru"  name="password"  required><?= $row["password"] ?></textarea>
                                                </div>
                                                <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label">Ganti Gambar</label>
                                                    <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                                    <input type="file" class="form-control" name="gambar">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="formGroupExampleInput3" class="form-label">Gambar Lama</label>
                                                    <?php
                                                    if ($row["gambar"] != '') {
                                                        if (file_exists('../gambar/' . $row["gambar"] . '')) {
                                                    ?>
                                                            <br><img src="../gambar/<?= $row["gambar"] ?>" width="100">
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    <input type="hidden" name="gambar_lama" value="<?= $row["gambar"] ?>">
                                                </div>
                                            </div>
                                                <div class="mb-3">
                                                    <label for="formGroupExampleInput2" class="form-label">Ganti Role</label>
                                                    <input type="text" class="form-control" name="role" placeholder="Tuliskan Role Baru" value="<?= $row["role"] ?>" required>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal Edit -->

                            <!-- Awal Modal Hapus -->
                            <div class="modal fade" id="modalHapus<?= $row["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus user</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="formGroupExampleInput" class="form-label">Yakin akan menghapus user "<strong><?= $row["username"] ?></strong>"?</label>
                                                    <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                                    <input type="hidden" name="username" value="<?= $row["username"] ?>">
                                                    <input type="hidden" name="gambar" value="<?= $row["gambar"] ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                                                <input type="submit" value="hapus" name="hapus" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir Modal Hapus -->
                            </td>
                            <td>
                            
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <!-- paginasi -->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php if($page > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="admin.php?page=admin_user&hal=<?= $page-1 ?>">Previous</a>
                        </li>
                    <?php else: ?>
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                    <?php endif; ?>

                    <?php for($i = 1; $i <= $total_pages; $i++): ?>
                        <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                            <a class="page-link" href="admin.php?page=admin_user&hal=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>

                    <?php if($page < $total_pages): ?>
                        <li class="page-item">
                            <a class="page-link" href="admin.php?page=admin_user&hal=<?= $page+1 ?>">Next</a>
                        </li>
                    <?php else: ?>
                        <li class="page-item disabled">
                            <span class="page-link">Next</span>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
        <!-- Awal Modal Tambah-->
        <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah user</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="floatingTextarea2">Password</label>
                                <textarea class="form-control" name="password" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">role</label>
                                <input type="text" class="form-control" name="role" value="user">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Modal Tambah-->

    </div>
</div>

<?php
include "../upload_foto.php";

//jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $gambar = '';
    $nama_gambar = $_FILES['gambar']['name'];

    //upload gambar
    if ($nama_gambar != '') {
        $cek_upload = upload_foto($_FILES["gambar"]);

        if ($cek_upload['status']) {
            $gambar = $cek_upload['message'];
        } else {
            echo "<script>
                alert('" . $cek_upload['message'] . "');
                document.location='admin.php?page=admin_user';
            </script>";
            die;
        }
    }

    if (isset($_POST['id'])) {
        //update data
        $id = $_POST['id'];

        if ($nama_gambar == '') {
            //jika tidak ganti gambar
            $gambar = $_POST['gambar_lama'];
        } else {
            //jika ganti gambar, hapus gambar lama
            unlink("../gambar/" . $_POST['gambar_lama']);
        }

        $stmt = $conn->prepare("UPDATE user 
                                SET 
                                gambar = ?,
                                username = ?,
                                password = ?,
                                role = ?
                                WHERE id = ?");

        $stmt->bind_param("ssssi", $gambar,  $username, $password, $role, $id);
        $simpan = $stmt->execute();
    } else {
		    //insert data
        $stmt = $conn->prepare("INSERT INTO user (gambar, username, password,role)
                                VALUES (?,?,?,?)");

        $stmt->bind_param("ssss", $gambar, $username, $password, $role);
        $simpan = $stmt->execute();
    }

    if ($simpan) {
        echo "<script>
            alert('Simpan data sukses');
            document.location='admin.php?page=admin_user';
        </script>";
    } else {
        echo "<script>
            alert('Simpan data gagal');
            document.location='admin.php?page=admin_user';
        </script>";
    }

    $stmt->close();
    $conn->close();
}

//jika tombol hapus diklik
if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $gambar = $_POST['gambar'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($gambar != '') {
        //hapus file gambar
        unlink("../gambar/" . $gambar);
    }

    $stmt = $conn->prepare("DELETE FROM user WHERE id =?");

    $stmt->bind_param("i", $id);
    $hapus = $stmt->execute();

    if ($hapus) {
        echo "<script>
            alert('Hapus data sukses');
            document.location='admin.php?page=admin_user';
        </script>";
    } else {
        echo "<script>
            alert('Hapus data gagal');
            document.location='admin.php?page=admin_user';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>