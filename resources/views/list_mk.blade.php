@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <style>
        /* Card utama daftar mata kuliah */
        .card-mk-fresh {
            background: #f6ffa5ff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-top: 6px solid #8BC34A;
            margin-bottom: 50px; /* jarak ke footer */
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        h1 {
            color: #689F38;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .btn-add-fresh {
            display: inline-block;
            background-color: #FBC02D;
            color: #ffffff;
            padding: 10px 25px;
            border-radius: 12px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(251, 192, 45, 0.4);
        }

        .btn-add-fresh:hover {
            background-color: #FDD835;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(251, 192, 45, 0.6);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
            font-size: 16px;
            border-radius: 12px;
            overflow: hidden;
        }

        th {
            background-color: #8BC34A;
            color: #ffffff;
            padding: 14px;
            text-transform: uppercase;
            border: none;
        }

        td {
            background-color: #FFFDE7;
            padding: 12px;
            border-bottom: 2px solid #F0F4C3;
        }

        tr:hover td {
            background-color: #F1F8E9;
            transition: background 0.3s ease;
        }

        .aksi-btn a, .aksi-btn button {
            margin: 0 5px;
            text-decoration: none;
            color: #689F38;
            font-weight: 600;
            background: none;
            border: none;
            cursor: pointer;
        }

        .aksi-btn button:hover,
        .aksi-btn a:hover {
            color: #F57C00;
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
        <h1>🌿 Daftar Mata Kuliah 🍋</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn-add-fresh">➕ Tambah Mata Kuliah</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mks as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td>{{ $mk->sks }}</td>
                    <td class="aksi-btn">
                        <a href="{{ route('matakuliah.edit', $mk->id) }}">Edit</a> |
                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
