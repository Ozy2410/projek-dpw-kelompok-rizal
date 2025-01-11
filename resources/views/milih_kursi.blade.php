<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Kursi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container mt-5">
      <h1 class="mb-4">Pilih kursi lo sini</h1>
      <form>
        <div class="mb-3">
          <label for="asal" class="form-label">Asal</label>
          <input type="text" class="form-control" id="asal" name="asal" placeholder="Masukkan asal">
        </div>
        <div class="mb-3">
          <label for="tujuan" class="form-label">Tujuan</label>
          <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukkan tujuan">
        </div>
        <div class="mb-3">
          <label for="tanggal" class="form-label">Tanggal</label>
          <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan tanggal">
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="kursi" class="form-label">Kursi</label>
            <input type="text" class="form-control" id="kursi" name="kursi" placeholder="Masukkan kursi">
          </div>
          <div class="col-md-6">
            <label for="gerbong" class="form-label">Gerbong</label>
            <input type="text" class="form-control" id="gerbong" name="gerbong" placeholder="Masukkan gerbong">
          </div>
        </div>
        <div class="d-flex justify-content-start">
          <button type="submit" class="btn btn-success me-3">Konfirmasi</button>
          <button type="button" class="btn btn-danger">Batalkan</button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
