<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>Comic & Manga Collection</title>
    </head>

    <body>
        <header>

            <center><h1>Selamat Datang</h1></center>
            

        </header>

        <div class="satu">

            <center><h1>Menampilkan Data dengan Select *</h1></center>
            <?php
            //KONEKSI
            $db_host = 'localhost'; // Nama Server
            $db_user = 'root'; // User Server
            $db_pass = ''; // Password Server
            $db_name = 'soal2'; // Nama Database
            
            $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
            if (!$link) {
                die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
            }
            ?>

            <form action="" method="post">
                <table class="center" border="1" cellpadding="0" cellspacing="0">
                    <tr>
                        <th style="padding: 20px;">Kode_Buku</th>
                        <th style="padding: 20px;">Kode_Kategori</th>
                        <th style="padding: 20px;">Kode_Penerbit</th>
                        <th style="padding: 20px;">Judul_Buku</th>
                        <th style="padding: 20px;">Jumlah_Buku</th>
                        <th style="padding: 20px;">Pengarang_Buku</th>
                        <th style="padding: 20px;">Tahun_Terbit</th>
                    </tr>   
            
                    <tr>
                        
                    <?php

            $q = $link->query("select * from ms_buku");  
                while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
                    echo "<tr>";
                    echo "<th><b>".$r['kode_buku']."</b></th>";
                    echo "<th><b>".$r['kode_kategori']."</b></th>";
                    echo "<th><b>".$r['kode_penerbit']."</b></th>";  
                    echo "<th><b>".$r['judul_buku']."</b></th>";
                    echo "<th><b>".$r['jumlah_buku']."</b></th>";
                    echo "<th><b>".$r['pengarang_buku']."</b></th>";
                    echo "<th><b>".$r['tahun_terbit_buku']."</b></th>";     	
            ?>	 
                
                </tr>
                </center>

                <?php } ?>	
                
                                    
                                
                            </table>
                        </form>

        </div>

        <div class="dua">
            <center><h1>Menampilkan Data dengan Select Where Tahun Terbit 2017</h1></center>

            <?php
            //KONEKSI
            $db_host = 'localhost'; // Nama Server
            $db_user = 'root'; // User Server
            $db_pass = ''; // Password Server
            $db_name = 'soal2'; // Nama Database
            
            $link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
            if (!$link) {
                die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
            }
            ?>

<form action="" method="post">
                <table class="center" border="1" cellpadding="0" cellspacing="0">
                    <tr>
                        <th style="padding: 20px;">Kode_Buku</th>
                        <th style="padding: 20px;">Kode_Kategori</th>
                        <th style="padding: 20px;">Kode_Penerbit</th>
                        <th style="padding: 20px;">Judul_Buku</th>
                        <th style="padding: 20px;">Jumlah_Buku</th>
                        <th style="padding: 20px;">Pengarang_Buku</th>
                        <th style="padding: 20px;">Tahun_Terbit</th>
                    </tr>   
            
                    <tr>
                        
                    <?php

            $q = $link->query("select * from ms_buku where tahun_terbit_buku='2017'");  
                while ($r = $q->fetch_array()) { //mengambil data array hasil dari database dan menampung dalam variabel $r
                    echo "<tr>";
                    echo "<th><b>".$r['kode_buku']."</b></th>";
                    echo "<th><b>".$r['kode_kategori']."</b></th>";
                    echo "<th><b>".$r['kode_penerbit']."</b></th>";  
                    echo "<th><b>".$r['judul_buku']."</b></th>";
                    echo "<th><b>".$r['jumlah_buku']."</b></th>";
                    echo "<th><b>".$r['pengarang_buku']."</b></th>";
                    echo "<th><b>".$r['tahun_terbit_buku']."</b></th>";     	
            ?>	 
                
                </tr>
                </center>

                <?php } ?>	
                
                                    
                                
                            </table>
                        </form>

        </div>

        <div class="tiga">



        </div>
        
    </body>
</html>
