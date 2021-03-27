<?php
    include 'head.php';
    include 'connection.php';

    $wri = "SELECT * FROM wiriter_tb";
    $writers = $conn->query($wri);
?>
    <main>
            <?php
                
            ?>
        <div class="row">
            <form method="POST" action="insertbook.php">
                <div class="form-group">
                    <label class="text-white">Judul</label>
                    <input type="text" class="form-control" placeholder="judul" name="judul">
                </div>
                <div class="form-group">
                    <label class="text-white">Nama Gambar</label>
                    <input type="text" class="form-control" placeholder="gambar" name="year">
                </div>
                <div class="form-group">
                    <label class="text-white">Year</label>
                    <input type="text" class="form-control" placeholder="gambar" name="gambar">
                </div>
                <div class="form-group">
                    <label class="text-white">Kategori</label>
                    <select class="form-control" name="category_id" >
                        <?php 
                            $cat = "SELECT * FROM category_tb";
                            $categories = $conn->query($cat);
                            foreach($categories as $category) {
                        ?>
                        <option value="<?= $category["id"]?>"><?= $category["name"]?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-white">Nama Penulis</label>
                    <select class="form-control" name="writer_id" >
                        <?php 
                            $wir = "SELECT * FROM writer_tb";
                            $writers = $conn->query($wir);
                            foreach($writers as $writer) {
                        ?>
                        <option value="<?= $writer["id"]?>"><?= $writer["name"]?></option>
                        <?php } ?>
                    </select>
                </div><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </main>
    
<?php
    include 'footer.php'
?>
