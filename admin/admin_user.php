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
                        <th class="w-25">Nama</th>
                        <th class="w-75">Password</th>
                        <th class="w-25">Role</th>
                        <th class="w-25">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM user ORDER BY id DESC";
                    $hasil = $conn->query($sql);

                    $no = 1;
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
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
                                                    <textarea class="form-control" placeholder="Tuliskan Password Baru"  name="password" value="<?= $row["password"] ?>" required></textarea>
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
    $password = md5($_POST['password']);
    $role = $_POST['role'];


    if (isset($_POST['id'])) {
        //update data
        $id = $_POST['id'];
        $stmt = $conn->prepare("UPDATE user 
                                SET 
                                username = ?,
                                password = ?,
                                role = ?
                                WHERE id = ?");

        $stmt->bind_param("sssi",  $username, $password, $role, $id);
        $simpan = $stmt->execute();
    } else {
		    //insert data
        $stmt = $conn->prepare("INSERT INTO user (username, password,role)
                                VALUES (?,?,?)");

        $stmt->bind_param("sss",  $username, $password, $role);
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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

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