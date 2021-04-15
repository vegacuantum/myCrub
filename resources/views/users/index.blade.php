
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Practicando</title>
  </head>
  <body>
       
       <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                  <div class="card">
                  <h1>Crear un usuarios</h>
                    <form action="{{ route('store') }}" method="POST">
                      <div class="form-row">
                        <div class="col-sm-3">
                            <input type="text" name="name" class="form-control" placeholder="escriba el nombre">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" name="email" class="form-control" placeholder="escriba el email">
                        </div>

                        <div class="col-sm-4">
                          <input type="text" name="password" class="form-control" placeholder="contraseña">
                        </div>

                        <div class="col-auto">
                          @csrf
                          <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                      </div>
                    </form>
                  </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>accion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        <form action="{{ route('destroy', $user) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input 
                              type="submit"
                              value="Eliminar"
                              class="btn btn-sm btn-danger"
                              onclick="return confirm('¿desea Eliminar...?')">
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
       </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS --> 
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   
  </body>
</html>
