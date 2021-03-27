<?php
    include 'head.php';
    include 'connection.php';
?>
    <main>
        <div class="row">
            <?php
                // sebenarnya rawan sql injection
                $id = $_GET["id"];
                echo $id;
                $sql = "SELECT b.id as bid, b.name bname, b.publication_year as btahun, b.img as bimg, c.name cname, w.name wname
                FROM book_tb b 
                JOIN category_tb c ON b.category_id = c.id 
                JOIN writer_tb w ON b.writer_id = w.id
                WHERE b.id = $id";

                $results = $conn->query($sql);
                foreach($results as $result) {
            ?>

                <div class="row">
                    <figure class="col">
                        <img src="assets/uploads/<?= $result["bimg"]; ?>" alt="gambar" width="550px">
                    </figure>
                    <div class="col text-white">
                        <h2><?= $result["bname"]; ?></h2>
                        <ul>
                            <li>Judul : <?= $result["bname"]; ?></li>
                            <li>Tahun Publikasi : <?= $result["btahun"]; ?></li>
                            <li>kategori : <?= $result["cname"]; ?></li>
                            <li>penulis : <?= $result["wname"]; ?></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
    
<?php
    include 'footer.php'
?>
