<?php
    include 'head.php';
    include 'connection.php';
?>
    <main>
        <div class="row">
            <form id="form-insert">
                <div class="form-group">
                    <label class="text-white" for="nama">Nama Writer : </label>
                    <input type="text" class="form-control" placeholder="nama" id="name">
                </div>
                <br>
                <button id="button" type="button" class="btn btn-primary" onclick="addWriter()">Simpan</button>
            </form>
        </div>
    </main>

    <script>
        const addWriter = async () => {
            try {
                let name   = document.getElementById("name").value;
                let data = {
                    name: name
                };
                await fetch('insertwriter.php', {
                    method: "POST",
                    body: JSON.stringify(data),
                })
                alert("data Berhasil disimpan");
                document.getElementById("name").value="";
            } catch (e) {
                console.log(e);
            }
        }
    </script>
    
<?php
    include 'footer.php'
?>
