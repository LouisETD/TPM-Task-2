
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tenant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Food Tenant Registration</h1>

    <p>Welcome !! This is Kuliner Event ! <p>
    <p>You have to register your food tenant to sell at the site on our event !</p>
    <a href ="/registration" type="button" class="btn btn-primary btn-lg">Click here to register !</a>

    <br> </br>
    <br> </br>

    <div>
      <p class="fs-4">List Food Tenant </p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Gambar Tenant</th>
      <th scope="col">Nama Tenant</th>
      <th scope="col">Tipe Makanan</th>
      <th scope="col">Nama Pemilik</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @forelse ($list_tenant as $tenant) 
        <td>{{ $tenant->tenant }}</td>
        <th scope="row">{{ $tenant->id }}</th>
        <td>
            <img src="{{ asset('storage/' . $tenant->tenant_image_path) }}" style="width: 20%;"
             alt="">
              </td>
        <td>{{ $tenant-> nama_tenant }}</td>
        <td>{{ $tenant-> tipe_makanan }}</td>
        <td>{{ $tenant-> asal -> asal_makanan }}</td>
          <th> 
            <a type="button" class="btn btn-primary" 
                href="/update-tenant-page/ {{ $tenant->id }}">Update</a>
          <th>
          <th> 
            <form action="/delete-tenant/{{ $tenant->id }}" method="post">
              @csrf 
              <button type="submit" class="btn btn-danger" >Delete
              </button> </form>
            
          <th>
        </tr>
        @empty
          <p> Maaf, Tenant tidak ada <p>
      @endforelse
  </tbody>
</table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>
</html>