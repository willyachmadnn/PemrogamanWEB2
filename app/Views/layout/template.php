<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jarlokaf.ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark" href="/" style="letter-spacing: 1px;">
                Buku Jaringan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-dark fw-bold" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-bold" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-bold" href="/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-bold" href="/biodata">Biodata</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-bold" href="/books">Daftar Buku</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->rendersection('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
</body>

</html>