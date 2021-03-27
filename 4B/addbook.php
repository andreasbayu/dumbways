<?php
    include 'head.php';
    include 'connection.php';
    $cat = "SELECT id,name FROM category_tb";
    $categories = $conn->query($cat);
    $wri = "SELECT * FROM wiriter_tb";
    $writers = $conn->query($wri);
?>
    <main>
            <?php
                
            ?>
        <div class="row">
            <form>
                <div class="form-group">
                    <label class="text-white">Judul</label>
                    <input type="text" class="form-control" placeholder="judul">
                </div>
                <div class="form-group">
                    <label class="text-white">Kategori</label>
                    <select class="form-control" name="category_id" >
                        <?php foreach($categories as $category) {?>
                        <option value="<?php $category["id"]?>"><?php $category["name"]?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-white">Nama</label>
                    <select class="form-control" name="writer_id" >
                        <?php foreach($writers as $writer) {?>
                        <option value="<?php $writer["id"]?>"><?php $writer["name"]?></option>
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
