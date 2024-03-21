{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cafe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to My Cafe</h1>
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="menu">
        <h2>Our Menu</h2>
        <div class="menu-item">
            <h3>Coffee</h3>
            <p>Delicious coffee made from freshly ground beans.</p>
            <p>Price: $3.50</p>
        </div>
        <div class="menu-item">
            <h3>Tea</h3>
            <p>A selection of fine teas from around the world.</p>
            <p>Price: $2.50</p>
        </div>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are a cozy cafe located in the heart of the city. Our mission is to provide high-quality beverages and a comfortable atmosphere for our customers.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Address: 123 Main Street, Cityville</p>
        <p>Phone: 555-1234</p>
        <p>Email: info@mycafe.com</p>
    </section>

    <footer>
        <p>&copy; 2024 My Cafe. All rights reserved.</p>
    </footer>
</body>
</html>

<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
}

section {
    padding: 20px;
}

#menu {
    background-color: #f2f2f2;
}

.menu-item {
    border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
    padding-bottom: 20px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    position: fixed;
    bottom: 0;
    width: 100%;
}

</style> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cafe</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to My Cafe</h1>
            <nav>
                <ul>
                    <li><a href="#menu">Sejarah</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="menu">
        <div class="container">
            <h2>Sejarah</h2>
            <div class="menu-item">
                <h3>Sejarah Ada nya aplikasi ini</h3>
                {{-- <p>Aplikasi ini di buat dengan penuh usaha dan rasa cinta, aplikasi ini banyak mengajar kan saya tentang banyak hal. </p> --}}
                <p>Aplikasi ini bukan hanya sekadar proyek, tetapi sebuah perjalanan yang
                    penuh dengan usaha, dedikasi, dan rasa cinta. Melalui proses pembuatan
                    aplikasi ini, saya telah belajar begitu banyak hal yang tidak hanya
                    terbatas pada keterampilan teknis, tetapi juga pelajaran hidup yang berharga.
                    Setiap baris kode yang ditulis, setiap kesalahan yang diperbaiki, dan setiap tantangan yang dihadapi membawa
                    saya satu langkah lebih dekat untuk menjadi seorang pengembang yang lebih baik.</p><br>
                <p>Aplikasi ini telah menjadi guru terbaik saya, membimbing saya melalui berbagai konsep dan
                    praktik terbaik dalam pengembangan perangkat lunak.
                    Saya belajar tentang arsitektur perangkat lunak, manajemen basis data,
                    keamanan aplikasi, dan masih banyak lagi. Tidak hanya itu, saya juga belajar
                    untuk menjadi lebih terorganisir, lebih disiplin, dan lebih tekun dalam menyelesaikan tugas.
                    Melalui semua perjuangan dan pencapaian dalam proses pembuatan aplikasi ini, saya merasakan
                    betapa berharganya usaha yang telah saya curahkan. Rasa cinta dan dedikasi saya
                    terhadap proyek ini telah menginspirasi saya untuk tetap gigih dan bersemangat dalam mengatasi setiap rintangan.</p><br>
                <p>Dengan demikian, aplikasi ini bukan hanya sekadar sebuah produk, tetapi sebuah karya seni yang mewakili perjalanan
                    pribadi saya dalam dunia pengembangan perangkat lunak. Saya bersyukur atas semua pengalaman yang telah saya dapatkan,
                    dan saya yakin bahwa pembelajaran dan pertumbuhan yang saya alami melalui proses ini akan membawa dampak positif dalam karier saya di masa depan.</p>
                {{-- <p>Price: $3.50</p> --}}
            </div>
            {{-- <div class="menu-item">
                <h3>Tea</h3>
                <p>A selection of fine teas from around the world.</p>
                <p>Price: $2.50</p>
            </div> --}}
        </div>
    </section>

    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are a cozy cafe located in the heart of the city. Our mission is to provide high-quality beverages and a comfortable atmosphere for our customers.</p>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Address: 123 Main Street, Cityville</p>
            <p>Phone: 555-1234</p>
            <p>Email: info@mycafe.com</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 My Cafe. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

<style>
    /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

.container {
    width: 80%;
    margin: auto;
}

header {
    background-color: #2e2417;
    color: white;
    padding: 20px 0;
}

header h1 {
    margin: 0;
    font-size: 2.5em;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 1.2em;
}

section {
    padding: 50px 0;
}

#sejarah {
    background-color: #f9f9f9;
}

.sejarah-item {
    border-bottom: 1px solid #ccc;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.sejarah-item h3 {
    color: #333;
    font-size: 1.5em;
    margin-bottom: 10px;
}

.sejarah-item p {
    color: #666;
    font-size: 1.1em;
}

footer {
    background-color: #2E2417;
    color: white;
    text-align: center;
    padding: 20px 0;
}

footer p {
    margin: 0;
    font-size: 1.1em;
}

</style>
