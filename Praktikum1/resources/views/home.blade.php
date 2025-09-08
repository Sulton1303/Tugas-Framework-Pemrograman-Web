<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
</head>
<body>
    <h1>{{ $universityHistory['name'] }}</h1>
    <h2>({{ $universityHistory['acronym'] }})</h2>
    <p><strong>Didirikan:</strong> {{ $universityHistory['established'] }}</p>
    <p><strong>Pendiri:</strong> {{ $universityHistory['founder'] }}</p>
    <p><strong>Lokasi:</strong> {{ $universityHistory['location'] }}</p>

    <h3>Visi</h3>
    <p>{{ $universityHistory['vision'] }}</p>

    <h3>Misi</h3>
    <ul>
        @foreach($universityHistory['mission'] as $mission)
            <li>{{ $mission }}</li>
        @endforeach
    </ul>

    <h3>Sejarah Perkembangan</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Tahun</th>
                <th>Perkembangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universityHistory['history'] as $item)
                <tr>
                    <td>{{ $item['year'] }}</td>
                    <td>{{ $item['event'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Fakultas</h3>
    <ol>
        @foreach($universityHistory['faculties'] as $faculty)
            <li>{{ $faculty }}</li>
        @endforeach
    </ol>

    <h3>Prestasi</h3>
    <ul>
        @foreach($universityHistory['achievements'] as $achievement)
            <li>{{ $achievement }}</li>
        @endforeach
    </ul>
</body>
</html>