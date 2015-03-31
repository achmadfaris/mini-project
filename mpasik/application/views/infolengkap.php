<?php include "header.php" ?>
<hr>
    <div class="container">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href=<?php echo site_url('home') ?>>Beranda</a></li>
                <li role="presentation" class="active"><a href=<?php echo site_url('carinap') ?>>Pencarian</a></li>
                <li role="presentation"><a href=<?php echo site_url('kontakkami') ?>>Kontak Kami</a></li>
            </ul>
    </div>

    <div class="container">
        <div class="col-lg-3">
        <p>
            <form class="form-group">
            <input type="text" class="input-small" placeholder="kata pencarian">
            <button type="submit" class="btn">
            Cari
            </button>
            </form>
        <hr>

        <div class="btn-group">
            <h4>Kategori</h4>
            <h5><label class="checkbox"><input type="checkbox" value="option1">Hotel</label>
            <label class="checkbox"><input type="checkbox" value="option1">Apartemen</label>
            <label class="checkbox"><input type="checkbox" value="option1">Home Stay</label>
            <label class="checkbox"><input type="checkbox" value="option1">Wisma</label></h5>

            <h4>Fasilitas</h4>
            <h5><label class="checkbox"><input type="checkbox" value="option1">Kolam Renang</label>
            <label class="checkbox"><input type="checkbox" value="option2">Gym Center</label>
            <label class="checkbox"><input type="checkbox" value="option3">Taman Bermain</label>
            <label class="checkbox"><input type="checkbox" value="option1">Restoran</label>
            <label class="checkbox"><input type="checkbox" value="option1">Ruang Rapat</label>
            <label class="checkbox"><input type="checkbox" value="option1">Karaoke</label>
            <label class="checkbox"><input type="checkbox" value="option1">Spa</label></h5>
           
            <h4>Area</h4>
            <h5><label class="checkbox"><input type="checkbox" value="option1">Surabaya Pusat</label>
            <label class="checkbox"><input type="checkbox" value="option1">Surabaya Utara</label>
            <label class="checkbox"><input type="checkbox" value="option2">Surabaya Selatan</label>
            <label class="checkbox"><input type="checkbox" value="option3">Surabaya Barat</label>
            <label class="checkbox"><input type="checkbox" value="option1">Surabaya Timur</label></h5>

            <button type="submit" class="btn">Cari</button>
        </div>

        </div>

        <div class="col-lg-9">
        <p>
            <div class="media-body">
            <?php foreach ($penginapan as $row) {?>
                <h2><?=$row['NAMA_INAP']?></h2>
                <h4><?=$row['ALAMAT']?></h4>
                <h5><?=$row['HARGA']?></h5>
                <?php echo '<img src="'.site_url().'imghotel/'.$row['Gambar'].'"' ;?> style="width:500px;"> 
                <h5><p class="text-justified"><?=$row['DESKRIPSI']?></p></h5>
                <?php } ?>
            </div>

            <div class="container">
            <h3> Tinggalkan komentar dan testimoni anda </h3>
            <label for="exampleInputNama1">Nama</label>
            <input type="text" class="form-control" id="exampleInputNama1" placeholder="nama">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
            <label for="exampleInputEmail1">Isi komentar dan testimoni</label>
            <textarea class="form-control" rows="3" id="InputKomentar1">
            </textarea><p>
            <button type="submit" class="btn">Kirim</button></p>
            </div></form></div>
            
        </div>    

     </div>
    
    	<?php include "footer.php" ?>