<table style="width:100%; border-collapse:collapse; box-shadow:0 2px 8px #ccc;">
    <thead style="background:#5900ff; color:white;">
        <tr>
            
            <th style="padding:8px;">NAMA</th>
            <th style="padding:8px;">NIM</th>
            <th style="padding:8px;">KELAS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $users)
            <tr style="background: #ccc;">
                
                <td style="padding:8px;">{{ $users->nama }}</td>
                <td style="padding:8px;">{{ $users->nim }}</td>
                <td style="padding:8px;">{{ $users->kelas->nama_kelas }}</td>
            </tr>
        @endforeach
    </tbody>
</table>