<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            color: #343a40;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #495057;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        h2 {
            color: #495057;
            border-bottom: 2px solid #495057;
            padding-bottom: 10px;
            margin-top: 30px;
            font-size: 1.8em;
        }

        .profile-info {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .profile-info p {
            margin: 10px 0;
            font-size: 1.1em;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #8e24aa;
            margin: 10px 0;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background 0.3s;
        }

        li:hover {
            background: rgb(108, 145, 185);
        }

        a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            font-size: 1.1em;
        }

        a:hover {
            color: #e9ecef;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>User Profile</h1>
    <div class="profile-info">
        <p><strong>Name:</strong> <?= htmlspecialchars($profil['nama']) ?></p>
        <p><strong>Alamat:</strong> <?= htmlspecialchars($profil['alamat']) ?></p>
        <p><strong>Hobi:</strong> <?= htmlspecialchars($profil['hobi']) ?></p>
    </div>

    <h2>Daftar Mata Kuliah</h2>
    <ul>
        <?php foreach ($mata_kuliah as $mk): ?>
            <li>
                <a href="/mata_kuliah/details/<?= htmlspecialchars($mk['kode']) ?>">
                    <?= htmlspecialchars($mk['kode']) ?> - <?= htmlspecialchars($mk['nama']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>