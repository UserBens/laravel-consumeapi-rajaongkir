<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consume API Raja Ongkir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .form-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            padding: 20px;
            margin-top: 50px;
            width: 100%;

        }

        .form-title {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Cek Ongkir</h2>
            <form action="" method="post">
                @csrf
                <div class="mt-2">
                    <label for="origin" class="p-2">Asal Kota</label>
                    <select name="origin" id="origin" class="form-select" aria-label="Default select example"
                        required>
                        <option selected>Pilih Kota Asal</option>
                        @foreach ($city as $item)
                            <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-2">
                    <label for="destination" class="p-2">Kota Tujuan</label>
                    <select name="destination" id="destination" class="form-select" aria-label="Default select example"
                        required>
                        <option selected>Pilih Kota Tujuan</option>
                        @foreach ($city as $item)
                            <option value="{{ $item['city_id'] }}">{{ $item['city_name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-2">
                    <label for="weight" class="p-2">Berat Paket</label>
                    <input type="number" name="weight" id="weight" class="form-control" required>
                </div>

                <div class="mt-2">
                    <label for="courier" class="p-2">Kurir</label>
                    <select name="courier" id="courier" class="form-select" aria-label="Default select example"
                        required>
                        <option selected>Pilih Kurir</option>
                        <option value="jne">JNE</option>
                        <option value="pos">POS</option>
                        <option value="tiki">TIKI</option>
                    </select>
                </div>

                <div class="mt-4">
                    <input type="submit" name="cekOngkir" class="btn btn-primary w-10">
                </div>
            </form>

            <div class="mt-5 mb-5 p-2">
                @if ($ongkir != '')
                    <h3>Rincian ongkir</h3>

                    <div class="row">
                        <label for="">Asal Kota : {{ $ongkir['origin_details']['city_name'] }}</label>
                        <label for="">Kota Tujuan : {{ $ongkir['destination_details']['city_name'] }}</label>
                        <label for="">Berat Paket : {{ $ongkir['query']['weight'] }}</label>
                    </div>
                
                    @foreach ($ongkir['results'] as $item)
                        <div>
                            <label for="name">Nama Jasa Pengiriman : {{ $item['name'] }}</label>
                            @foreach ($item['costs'] as $cost)
                                <div>
                                    <label for="service">Service : {{ $cost['service'] }}</label>
                                    @foreach ($cost['cost'] as $harga)
                                        <div>
                                            <label for="harga">Harga : {{ $harga['value'] }} (Estimasi : {{ $harga['etd'] }} Hari)</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</body>

</html>
