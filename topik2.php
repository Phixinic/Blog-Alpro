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
            <article id="topik3" class="card">
                <h2>Menentukan Bilangan Ganjil dan Genap</h2>
                <form method="post" action="">
                    <label for="bilangan">Masukkan bilangan:</label>
                    <input type="number" name="bilangan" id="bilangan" required>  

                    <span class="error" id="error_bilangan"></span><br><br>

                    <button type="submit">Cek</button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $bilangan = $_POST['bilangan'];

                    // Validasi input
                    if (empty($bilangan) || !is_numeric($bilangan)) {
                        echo "<p class='error'>Masukkan bilangan yang valid.</p>";
                    } else {
                        // Cek ganjil atau genap
                        if ($bilangan % 2 == 0) {
                            echo "<p>$bilangan adalah bilangan genap.</p>";
                        } else {
                            echo "<p>$bilangan adalah bilangan ganjil.</p>";
                        }
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