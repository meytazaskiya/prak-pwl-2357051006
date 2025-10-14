<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Laravel App' }}</title>

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
    />

    <!-- Custom CSS -->
    <style>
        body {
            background: #d9f9b4ff;
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        header, footer {
            text-align: center;
            padding: 1rem;
            color: white;
        }

        header {
            font-size: 1.8rem;
            font-weight: bold;
        }

        footer {
            font-size: 0.9rem;
        }

        .container {
            flex: 1;
        }

        .card-custom {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 2rem;
            width: 100%;
            max-width: 600px;
        }

        .title-gradient {
            background: #d9f9b4ff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }

        .btn-gradient {
            background: #d9f9b4ff;
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            transition: 0.3s;
        }

        .btn-gradient:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    @include('component.header')

    <div class="container">
        @yield('content')
    </div>

    @include('component.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
// === Notifikasi SUCCESS ===
    @if(session('success'))
        Toastify({
            text: "{{ session('success') }}",
            duration: 4500,
            gravity: "top",
            position: "center",
            stopOnFocus: true,
            close: false, // ✅ tampilkan tombol X kecil
            backgroundColor: "linear-gradient(135deg, #f9a8d4, #f9a8d4, #f9a8d4)", // gradasi pink lembut
            className: "custom-toastify",
            style: {
                fontSize: "20px",               // teks proporsional
                padding: "16px 34px",           // ruang seimbang
                borderRadius: "20px",           // sudut lembut
                boxShadow: "0 10px 25px rgba(0,0,0,0.25)", // bayangan lembut
                maxWidth: "520px",              // lebar sedang
                textAlign: "center",
                fontWeight: "700",
                color: "#fff",                  // teks putih
                marginTop: "100px",             // posisi dari atas
                opacity: "0.97",
                border: "2px solid #fbcfe8",    // pinggiran pink lembut
                transition: "transform 0.4s ease, opacity 0.4s ease",
            }
        }).showToast();
    @endif

    // === Notifikasi ERROR ===
    @if(session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 4500,
            gravity: "top",
            position: "center",
            stopOnFocus: true,
            close: true,
            backgroundColor: "linear-gradient(135deg, #fca5a5, #fca5a5, #fca5a5)", // gradasi merah elegan
            className: "custom-toastify",
            style: {
                fontSize: "30px",
                padding: "15px 40px",
                borderRadius: "20px",
                boxShadow: "0 10px 25px rgba(0,0,0,0.25)",
                maxWidth: "520px",
                textAlign: "center",
                fontWeight: "700",
                color: "#fff",
                marginTop: "100px",
                opacity: "0.97",
                border: "2px solid #ef4444",
                transition: "transform 0.4s ease, opacity 0.4s ease",
            }
        }).showToast();
    @endif
});
</script>

<!-- 🔹 Tambahkan CSS opsional agar tombol ❌ kecil dan rapi -->
<style>
.toast-close {
    color: #fff !important;
    font-size: 20px !important;
    margin-right: 10px !important;
    opacity: 0.8 !important;
}
.toast-close:hover {
    opacity: 1 !important;
    transform: scale(1.1);
}
.custom-toastify {
    animation: slideDownFade 0.6s ease forwards;
}
@keyframes slideDownFade {
    from {
        opacity: 0;
        transform: translateY(-40px) scale(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}
</style>