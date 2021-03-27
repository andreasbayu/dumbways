<?php
    include 'head.php';
    include 'connection.php';
?>
    <main>
        <div class="row row-cols-4 mt-5 ">
            <?php
                $sql = "SELECT b.id as buku_id,b.name as judul,b.writer_id,b.publication_year as tahun,b.img as gambar, w.name as nama_penulis FROM book_tb b JOIN writer_tb w ON b.writer_id = w.id";
                $results = $conn->query($sql);
                foreach($results as $result) {
            ?>

            <div class="col mb-4">
                <div class="container-sm">
                    <figure>
                        <img src="assets/uploads/<?= $result["gambar"]; ?>" alt="gambar" width="260px">
                        <figcaption><h5><?= $result["judul"]; ?></h5></figcaption>
                    </figure>
                    <div class="d-flex justify-content-between text-danger">
                        <span style="padding: 5px;"><?= $result["tahun"]; ?></span> <div style="padding: 5px;" class="ml-auto"><?= $result["nama_penulis"]; ?></div> 
                    </div>
                    <a href="detail.php?id=<?= $result["buku_id"]; ?>" class="btn btn-primary w-100">View Detail</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
    
<?php
    include 'footer.php'
?>
