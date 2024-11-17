<!DOCTYPE html>
<html>

<head>
    <title>ALPRO</title>
    <link rel="stylesheet" href="assets/styles/stylee.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <nav>
            <p class="d-inline-flex gap-1">
                <a href="index.html" class="btn" role="button" data-bs-toggle="button">⤺BACK</a>
            </p>
        </nav>
    </header>

    <main>
        <div id="content">
            <article id="topik3" class="">
                <h2>Menghitung Luas Persegi</h2>
                <form method="post" action="">
                    <label for="sisi">Masukkan panjang sisi (cm):</label>
                    <input type="number" name="sisi" id="sisi" required>
                    <span class="error" id="error_sisi"></span><br><br>
                    <input type="submit" value="Cari Luas Persegi">
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $sisi = $_POST['sisi'];
                    $error = false;

                    // Validasi input
                    if (empty($sisi) || $sisi <= 0) {
                        echo "<p class='error'>Panjang sisi harus diisi dan lebih dari 0.</p>";
                        $error = true;
                    }

                    if (!$error) {
                        $luas = $sisi * $sisi;
                        echo "<p>Luas persegi dengan sisi $sisi cm adalah $luas cm².</p>";
                    }
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