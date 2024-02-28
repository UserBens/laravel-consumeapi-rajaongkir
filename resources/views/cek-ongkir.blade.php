<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consume API Raja Ongkir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container w-25">
        <h2 class="text-center p-4">Cek Ongkir</h2>
        <form action="" method="post">
            @csrf
            <div class="mt-2">
                <label for="origin" class="p-2">Asal Kota</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kota Asal</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mt-2">
                <label for="destination" class="p-2">Kota Tujuan</label>
                <select name="destination" id="destination" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kota Tujuan</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            
            <div class="mt-2">
                <label for="weight" class="p-2">Berat Paket</label>
                <input type="number" name="weight" id="weight" class="form-control">
            </div>

            <div class="mt-2">
                <label for="courier" class="p-2">Kurir</label>
                <select name="courier" id="courier" class="form-select" aria-label="Default select example">
                    {{-- <option selected>Pilih Kurir</option> --}}
                    <option value="jne">JNE</option>
                    <option value="pos">POS</option>
                    <option value="tiki">TIKI</option>
                </select>
            </div>

            <div class="mt-4">
                <input type="submit" name="cekOngkir" class="btn btn-primary w-25">
            </div>
        </form>


    </div>


</body>

</html>
