<!DOCTYPE html>
<html>

<head>
    <title>ALPRO</title>
    <link rel="stylesheet" href="assets/styles/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <div class="jumbotron">
            <h1>Ujian Tengah Semester Algoritma Pemrograman</h1>
            <figure>
                <img src="assets/image/logomachung.png" height="300px" />
                <figcaption>Dibuat oleh : Heka dan Xander</figcaption>
            </figure>
            <p>Ulangan Tengah Semester</p>
        </div>
        <nav>

        </nav>
    </header>

    <main>
        <div id="content">
            <article id="topik3" class="card">
                <h2>Menentukan Bilangan Terbesar dari 3 Bilangan</h2>
                <form method="post" action="">
                    <label for="bilangan1">Masukkan bilangan pertama:</label>
                    <input type="number" name="bilangan1" id="bilangan1" required><br><br>

                    <label for="bilangan2">Masukkan bilangan kedua:</label>
                    <input type="number" name="bilangan2" id="bilangan2" required><br><br>

                    <label for="bilangan3">Masukkan bilangan ketiga:</label>
                    <input type="number" name="bilangan3" id="bilangan3" required><br><br>

                    <input type="submit" value="Cari Bilangan Terbesar">
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $bilangan1 = intval($_POST['bilangan1']);
                    $bilangan2 = intval($_POST['bilangan2']);
                    $bilangan3 = intval($_POST['bilangan3']);

                    // Logika mencari bilangan terbesar (sama seperti kode sebelumnya)
                    if ($bilangan1 >= $bilangan2 && $bilangan1 >= $bilangan3) {
                        $terbesar = $bilangan1;
                    } elseif ($bilangan2 >= $bilangan1 && $bilangan2 >= $bilangan3) {
                        $terbesar = $bilangan2;
                    } else {
                        $terbesar = $bilangan3;
                    }

                    echo "<p>Bilangan terbesar adalah: " . $terbesar . "</p>";
                }
                ?>
            </article>
        </div>

        <aside>
            <article class="profile card">
                <header>
                    <h2>FLOWCHART</h2>
                    <p>Menentukan Bilangan Terbesar dari 3 Bilangan</p>
                    <figure>
                        <img src="assets/image/fc3bilangan.png" />
                    </figure>
                </header>
            </article>
        </aside>
    </main>

    <footer>
        <p>hekaxander &#169; 2024, Universitas Machung</p>
    </footer>
</body>

</html>