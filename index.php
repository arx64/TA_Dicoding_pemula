<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TugasAkhir - DicodingCourse</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <!-- API Key NewsAPI: 58b856756b5848bc90d86f7eadbbb8f9 -->
    <div class="jumbotron">
        <header>
            <h2>Cek Gempabumi</h2>
            <p></p>
    </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#last_gempa">Gempa Terakhir</a></li>
                    <li><a href="#aboutMe">Tentang Saya</a></li>
                    <!-- <li><a href="#tentang">Tentang Pracu</a></li> -->
                </ul>
            </nav>
        </header>

        <main>
            <div class="content">
                <article class="box" id="home">
                    <h3 class="judul">Home - Gempabumi</h3>
                        <div class="tengah">
                          <img src="https://data.bmkg.go.id/include/assets/img/gempa.svg" alt="Logo Gempabumi BMKG" class="gambar-wh rounded">
                        </div>
                    <p class="isi">Data kejadian gempabumi yang terjadi di seluruh wilayah Indonesia. Terdapat 3 jenis data kejadian gempabumi, yaitu
                    Gempabumi M 5.0+, Gempabumi Dirasakan, dan Gempabumi Berpotensi Tsunami.</p>
                </article>

                <article class="box" id="last_gempa">
                    <h3 class="judul">Gempabumi Terbaru</h3>
                        <div class="tengah">
                            <?php
                            $sc = file_get_contents("https://data.bmkg.go.id/DataMKG/TEWS/autogempa.json");
                            $data = json_decode($sc, true);
                            $data_gempa = $data["Infogempa"]["gempa"];
                            // print_r($data_gempa);
                            $url_gempa = $data_gempa["Shakemap"];
                            ?>
                            <img src="https://data.bmkg.go.id/DataMKG/TEWS/<?=$url_gempa;?>" alt="ShakeMap BMKG" class="gambar-shakemap rounded">
                        </div>
                        <p class="isi">
                            <?php foreach ($data_gempa as $key => $value) {
                            // print_r($key);
                            echo "$key: $value<br>";
                            if ($value) {
                                # code...
                            }
                        }
                        ?>
                        </p>
                </article>

                <article class="box">
                    <h3 class="judul">Gempabumi Terbaru</h3>
                        <div class="tengah">
                            <img src="https://data.bmkg.go.id/DataMKG/TEWS/" alt="ShakeMap BMKG" class="gambar-wh rounded">
                        </div>
                        <p class="isi"></p>
                </article>
                
                <article class="box">
                    <h3 class="judul">Gempabumi Terbaru</h3>
                        <div class="tengah">
                            <img src="https://data.bmkg.go.id/DataMKG/TEWS/" alt="ShakeMap BMKG" class="gambar-wh rounded">
                        </div>
                        <p class="isi"></p>
                </article>
                <!-- untuk menambahkan konten secara otomatis melalui API -->
                <!-- <div id="hasil"></div> -->
            </div>
                 <!-- Konten samping -->
            <aside>
                <article class="box">
                    <header>
                        <h3 id="aboutMe">Tentang Saya</h3>
                        <p class="isi">Halo, nama saya Muhammad Arifin Ilham dan saya adalah mahasiswa STMIK Pelita Nusantara yang saat ini memasuki semester 3.</p>
                        <figure>
                            <img src="assets/img/fotbar_class.jpg" alt="Home Cinema Logo" width="210px">
                            <figcaption><small>ini adalah foto ketika kelas berakhir</small></figcaption>
                        </figure>
                        </header>
                        <section>
                            <h2>Biodata Saya</h2>
                            <div class="biodata">
                            <p class="biodata">Nama: Muhammad Arifin Ilham</p>
                            <p class="biodata">Umur: 18</p>
                            <p class="biodata">Alamat: Medan, Sumatera Utara, Indonesia.</p>
                            </div>
                        </section>
                </article>
            </aside>
        </main>
        <footer>Muhammad Arifin Ilham &copy; Tugas Akhir Dicoding</footer>
        <script>

            </script>
</body>
</html>