@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <style>
        /* Card utama form edit */
        .card-mk-fresh {
            background: #f6ffa5ff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
            border-top: 6px solid #8BC34A;
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Judul halaman */
        h1 {
            color: #689F38;
            font-weight: 800;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Label input */
        .form-label-fresh {
            font-weight: 600;
            color: #33691E;
            margin-bottom: 8px;
            font-size: 16px;
            display: block;
            text-align: left;
        }

        /* Input styling */
        .input-fresh {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #AEEA00;
            border-radius: 12px;
            outline: none;
            transition: 0.3s;
            font-size: 16px;
            background: #FFFDE7;
        }

        .input-fresh:focus {
            border-color: #8BC34A;
            box-shadow: 0 0 8px rgba(139, 195, 74, 0.4);
            background: #F1F8E9;
        }

        /* Tombol Simpan */
        .btn-save-fresh {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 25px;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(76, 175, 80, 0.4);
            font-size: 16px;
            text-decoration: none;
        }

        .btn-save-fresh:hover {
            background-color: #66BB6A;
            transform: translateY(-2px);
        }

        /* Tombol kembali */
        .btn-back-fresh {
            background-color: #FBC02D;
            color: #ffffff;
            padding: 10px 25px;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            transition: 0.3s;
            margin-left: 10px;
            box-shadow: 0 4px 10px rgba(253, 216, 53, 0.4);
            font-size: 16px;
            text-decoration: none;
        }

        .btn-back-fresh:hover {
            background-color: #FDD835;
            transform: translateY(-2px);
        }

        /* Popup Notification */
        .popup-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1055;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .popup-container.show {
            opacity: 1;
            visibility: visible;
        }

        .popup {
            background: #4CAF50;
            color: white;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            font-weight: 500;
            font-size: 18px;
            text-align: center;
            animation: popupBounce 0.5s ease;
            max-width: 400px;
            width: 90%;
        }

        .popup.error {
            background: #ef4444;
        }

        .popup.success {
            background: #4CAF50;
        }

        @keyframes popupBounce {
            0% { transform: scale(0.5); opacity: 0; }
            50% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>

    {{-- Popup Container --}}
    <div class="popup-container" id="popupContainer">
        <div class="popup" id="popupMessage"></div>
    </div>

    <div class="card-mk-fresh">
        <h1>✏️ Edit Mata Kuliah 🍃</h1>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nama Mata Kuliah -->
            <div class="mb-3 text-start">
                <label for="nama_mk" class="form-label-fresh">Nama Mata Kuliah</label>
                <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" class="input-fresh" required>
            </div>

            <!-- Jumlah SKS -->
            <div class="mb-3 text-start">
                <label for="sks" class="form-label-fresh">Jumlah SKS</label>
                <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" class="input-fresh" min="1" max="3" required>
            </div>

            <!-- Tombol Aksi -->
            <div class="text-center mt-4">
                <button type="submit" class="btn-save-fresh">💾 Simpan Perubahan</button>
                <a href="{{ route('matakuliah.index') }}" class="btn-back-fresh">⬅️ Kembali ke Daftar</a>
            </div>
        </form>
    </div>
</div>

{{-- Script untuk popup animasi --}}
<script>
    function showPopup(message, type = 'success') {
        const popupContainer = document.getElementById('popupContainer');
        const popupMessage = document.getElementById('popupMessage');

        popupMessage.textContent = message;
        popupMessage.className = 'popup ' + type;

        popupContainer.classList.add('show');

        setTimeout(() => {
            popupContainer.classList.remove('show');
        }, 3000);
    }

    // Cek session untuk popup
    @if(session('success'))
        showPopup("{{ session('success') }}", 'success');
    @endif
    @if(session('error'))
        showPopup("{{ session('error') }}", 'error');
    @endif
</script>
@endsection
