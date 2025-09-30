<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FBC4BF; /* pink soft */
            overflow: hidden;
        }

        /* gelembung hologram */
        .bubble {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, 
                rgba(255, 255, 255, 0.9), 
                rgba(255, 182, 193, 0.6), 
                rgba(173, 216, 230, 0.6), 
                rgba(221, 160, 221, 0.6));
            opacity: 0.8;
            animation: float 8s infinite ease-in-out;
            backdrop-filter: blur(3px);
        }

        .bubble:nth-child(1) { width: 140px; height: 140px; top: 15%; left: 20%; animation-duration: 9s; }
        .bubble:nth-child(2) { width: 200px; height: 200px; bottom: 20%; right: 15%; animation-duration: 11s; }
        .bubble:nth-child(3) { width: 90px; height: 90px; top: 65%; left: 10%; animation-duration: 13s; }
        .bubble:nth-child(4) { width: 120px; height: 120px; top: 30%; right: 25%; animation-duration: 10s; }
        .bubble:nth-child(5) { width: 70px; height: 70px; bottom: 10%; left: 40%; animation-duration: 12s; }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-25px); }
            100% { transform: translateY(0px); }
        }

        /* profile card */
        .profile-card {
            width: 350px;
            border-radius: 15px;
            background: white;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
            z-index: 10;
            padding: 30px;
            text-align: center;
            animation: fadeIn 1s ease;
        }

        /* avatar default pakai icon user */
        .avatar {
            font-size: 80px;
            color: #bbb;
            margin-bottom: 15px;
        }

        .profile-info {
            background: #f5f5f5;
            color: #333;
            font-weight: 600;
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 12px;
            transition: 0.3s ease;
        }
        .profile-info:hover {
            background: #ff85a2;
            color: white;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- gelembung hologram -->
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>

    <!-- profile card -->
    <div class="profile-card">
        <div class="avatar">👤</div> <!-- icon user -->
        <h3 class="mb-4">Profile </h3>
        <div class="profile-info">Nama : {{ $nama }}</div>
        <div class="profile-info">NIM : {{ $nim }}</div>
        <div class="profile-info">Kelas : {{ $kelas }}</div>
    </div>
</body>
</html>
