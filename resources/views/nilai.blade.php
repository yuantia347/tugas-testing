<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Nilai & Grade</title>
</head>
<body>
    <h2>Hitung Nilai Akhir dan Grade</h2>

    <form action="{{ route('nilai.hitung') }}" method="POST">
        @csrf
        <label>Nilai UTS (30%):</label><br>
        <input type="number" name="uts" value="{{ old('uts', $uts ?? '') }}" required><br><br>

        <label>Nilai UAS (40%):</label><br>
        <input type="number" name="uas" value="{{ old('uas', $uas ?? '') }}" required><br><br>

        <label>Nilai Tugas (30%):</label><br>
        <input type="number" name="tugas" value="{{ old('tugas', $tugas ?? '') }}" required><br><br>

        <button type="submit">Hitung Nilai</button>
    </form>

    @if (isset($nilai_akhir))
        <hr>
        <h3>Hasil:</h3>
        <p>Nilai Akhir: <strong>{{ number_format($nilai_akhir, 2) }}</strong></p>
        <p>Grade: <strong>{{ $grade }}</strong></p>
    @endif
</body>
</html>