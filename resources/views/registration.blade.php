<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h1>Registration</h1>


<form method="POST" action="/post-registration" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Tenant</label>
    <input type="text" name="nama_tenant_input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    @error('nama_tenant_input')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Foto Tenant</label>
    <input type="file" name="tenant_image_input" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="Help" class="form-text">Format must be : jpg or png</div>
    @error('tenant_image_input')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tipe Makanan</label>
    <input type="text" name="tipe_makanan_input" class="form-control" id="exampleInputPassword1">
    <div id="Help" class="form-text">Berat / Ringan</div>
    @error('tipe_makanan_input')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Pemilik</label>
    <select name="asal_makanan_input" id="exampleInputPassword1">
      @forelse ($asals as $asals)
        <option value="{{ $item->id }}"> {{ $item->asal_makanan }}</option>
      @empty
        <option value="">Empty</option>
      @endforelse
     
    </select>
    @error('asal_makanan_input')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
</body>
</html>