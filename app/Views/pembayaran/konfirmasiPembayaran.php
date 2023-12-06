<!-- =========== PAGE TITLE ========== -->
<div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg)">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h1>Pembayaran</h1>
                    <ol class="breadcrumb">
                        <li>Dashboard</li>
                        <li>Pembayaran</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- =========== MAIN ========== -->
<main id="room_page">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover ">
                <h2>List Pembayaran</h2><br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Tanggal Awal</th>
                            <th>Masa Berlaku</th>
                            <th>Nama Pelanggan</th>
                            <th>ID Kamar</th>
                            <th>Biaya</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $database = "ekost";
                            $username = "root";
                            $password = "";
                            $hostname = "localhost";
                            $conn = new mysqli($hostname, $username, $password, $database);
                            if ($conn->connect_error) {
                                die("Connection failed : " . $conn->connect_error);
                            }

                            // Update task status to done
                            if (isset($_GET['selesai'])) {
                                $id = $_GET['selesai'];
                                $sql = "UPDATE sewa SET status='selesai' WHERE sewa_id=$id";
                                if ($conn->query($sql) === TRUE) {
                                    header("Location: " . $_SERVER['PHP_SELF']);
                                    exit();
                                } else {
                                    echo "Error updating record: " . $conn->error;
                                }
                            }

                            // Delete task from database
                            if (isset($_GET['hapus'])) {
                                $id = $_GET['hapus'];
                                $sql = "DELETE FROM sewa WHERE sewa_id=$id";
                                if ($conn->query($sql) === TRUE) {
                                    header("Location: " . $_SERVER['PHP_SELF']);
                                    exit();
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }
                            }

                            ?>
                            <?php
                            $sql = "SELECT * FROM sewa";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["sewa_id"] .
                                        "</td><td>" . $row["tanggal_awal"] .
                                        "</td><td>" . $row["masa_berlaku"] .
                                        "</td><td>" . $row["pelanggan_id"] .
                                        "</td><td>" . $row["kamar_id"] .
                                        "</td><td>" . $row["biaya"] .
                                        "</td><td>";
                                    if ($row["status"] == "aktif") {
                                        echo "<a href='" . $_SERVER['PHP_SELF'] . "?selesai=" . $row["sewa_id"] . "'>Selesai</a> ";
                                    }
                                    echo "<a href='" . $_SERVER['PHP_SELF'] . "?hapus=" . $row["sewa_id"] . "'>Hapus</a>";
                                    echo "</td></tr>";
                                }
                                echo "</tbody></table>";
                            } else {
                                echo "Tidak ada kegiatan yang tersimpan.";
                                $sql = "ALTER TABLE sewa AUTO_INCREMENT=1";
                                $query = mysqli_query($conn, $sql);
                            }
                            ?>
                    </tbody>
                </table>

        </div>
    </div>


</main>