<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url('https://i.pinimg.com/1200x/ef/59/04/ef59049d6654f7c8d92db691b7f94f2b.jpg'); /* cream aesthetic */
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
      padding: 20px;
    }
    .profile-card {
      background: rgba(255, 255, 255, 0.66);
      backdrop-filter: blur(12px);
      border-radius: 25px;
      padding: 40px 30px;
      box-shadow: 0 12px 30px rgba(160, 101, 101, 0.25);
      width: 30rem;       /* lebih besar */
      max-width: 95%;     /* responsif di layar kecil */
    }
    .profile img {
      width: 170px;
      height: 170px;
      object-fit: cover;
      border-radius: 50%;
      border: 0px solid white;
      box-shadow: 0 6px 15px rgba(255, 115, 115, 0.35);
      margin-bottom: 25px;
    }
    .info-box {
      border-radius: 18px;
      padding: 20px;
      font-weight: bold;
      font-size: 1.35rem;
      color: white;
      text-align: center;
    }
    .nama { background: #6f0707ff; }
    .kelas { background: #6f0707ff; color: white; }
    .npm { background: #6f0707ff; }
  </style>
</head>
<body>
  <div class="profile-card text-center">
    <!-- Foto Profil -->
    <div class="profile">
      <img src="{{ asset('Meyta .jpg') }}" alt="Foto Profil">
    </div>

    <!-- Data -->
    <div class="d-grid gap-3">
      <div class="info-box nama">Nama: Meyta Zaskiya</div>
      <div class="info-box kelas">Kelas: B</div>
      <div class="info-box npm">NPM: 2357051006</div>
    </div>
  </div>
</body>
</html>