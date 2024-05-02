<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daisystore - Beauty Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/9a/9f/15/9a9f15013182aafb474124dcc2b2513a.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
        }

        .brand-logo {
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }

        .blog-posts {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .blog-post {
            flex: 0 0 calc(50% - 10px);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .post-title {
            font-size: 24px;
            font-weight: bold;
            color: #343a40;
        }

        .post-meta {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .post-content {
            color: #495057;
            line-height: 1.6;
        }

        .btn-dark {
            background-color: #343a40;
            border-color: #343a40;
        }

        .btn-dark:hover {
            background-color: #23272b;
            border-color: #1d2124;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Daisystore - Beauty Blog</h1>

        <div class="blog-posts">
            <div class="blog-post">
                <img class="img-fluid mb-3" src="https://goodstats.id/img/articles/original/2022/09/15/7-merek-kosmetik-lokal-paling-banyak-digunakan-di-indonesia-2022-ccBqp8iCKF.jpg?p=articles-lg" alt="Beauty Blog Post">
                <h2 class="post-title">Top 10 Brand Kosmetik Lokal di Indonesia</h2>
                <p class="post-meta">Diposting pada 2 Mei 2024</p>
                <p class="post-content">Dalam artikel ini, kami membahas sepuluh merek kosmetik lokal yang paling banyak digunakan di Indonesia. Dari produk perawatan kulit hingga produk kecantikan, merek-merek ini telah mendapatkan kepercayaan pelanggan di seluruh negeri.</p>
                <a href="{{ route('home') }}" class="btn btn-dark">Buy Now</a>
            </div>

            <div class="blog-post">
                <img class="img-fluid mb-3" src="https://qph.cf2.quoracdn.net/main-qimg-db7899edd9c2f2301f8679ac63a2a40b-lq" alt="Beauty Blog Post">
                <h2 class="post-title">5 Tips Perawatan Kulit Penting untuk Kulit yang Bersinar</h2>
                <p class="post-meta">Diposting pada 1 Mei 2024</p>
                <p class="post-content">Dalam artikel ini, Silahkan Anda Membeli Produk yang Kita Jual untuk Perawatan Lebih Baik.</p>
                <a href="{{ route('home') }}" class="btn btn-dark">Buy Now</a>
            </div>
        </div>
    </div>
</body>
</html>
