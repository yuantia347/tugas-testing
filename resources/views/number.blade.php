<!DOCTYPE html>
<html>
<head>
    <title>Cek Bilangan Ganjil dan Genap</title>
</head>
<body>
    <h1>Cek Bilangan Ganjil dan Genap dari 1 sampai N</h1>

    <form method="POST" action="/number/check">
        @csrf
        <input type="number" name="number" min="1" placeholder="Masukkan angka" value="{{ old('number', $maxNumber ?? '') }}">
        <button type="submit">Cek</button>
    </form>

    @if (isset($maxNumber))
        <h2>Bilangan Ganjil dari 1 sampai {{ $maxNumber }}:</h2>
        <p>{{ implode(', ', $odds) }}</p>

        <h2>Bilangan Genap dari 1 sampai {{ $maxNumber }}:</h2>
        <p>{{ implode(', ', $evens) }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
