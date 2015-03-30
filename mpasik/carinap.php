<?php include "header.php" ?>
<hr>
    <div class="container">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="home.php">Beranda</a></li>
                <li role="presentation" class="active"><a href="carinap.php">Pencarian</a></li>
                <li role="presentation"><a href="kontakkami.php">Kontak Kami</a></li>
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
            <div class="container">
                <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="img/bumiresort.jpg" alt="Responsible image">
                <h5>Bumi Surabaya City Resort
                <br>Surabaya Pusat</h5>
                <h6>IDR 500000/Malam</h6>
                </a>
            </div>
            
            <div class="container">
                <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="img/hoteltunjungan.jpg" alt="Responsible image">
                <h5>Hotel Tunjungan
                <br>Surabaya Pusat</h5>
                <h6>IDR 500000/Malam</h6></a>
            </div>

            <div class="container">
                <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="img/gardenpalace.jpg" alt="Responsible image">
                <h5>Garden Palace Hotel
                <br>Surabaya Pusat</h5>
                <h6>IDR 500000/Malam</h6></a>
            </div>
        </div>    

     </div>
    
    	<?php include "footer.php" ?>