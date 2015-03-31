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
        <?php foreach ($penginapan as $row) {?>
                <div href="#" class="thumbnail">
                <a href=<?php echo site_url().'infolengkap/view/'.$row['ID_INAP'] ?>>
                <div class="media-left">
                <?php echo '<img src="imghotel/'.$row['Gambar'].'"' ;?>  alt="Responsible image" style="width: 150px;">  
                </div> 
                <div class="media-body">
                <h4><?=$row['NAMA_INAP']?>
                <br><?=$row['AREA']?></h4>
                <h5><?=$row['HARGA']?>/Malam</h5>
                </div>
                </a>
                </div>
    
        <?php } ?>
            
          

     </div>
    
    	<?php include "footer.php" ?>