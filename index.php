<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios CRUD</title>
</head>
<body>
  <div>
    <form action="">
      <h1>Crear usuario</h1>

      <input type="text" name="name" placeholder="Nombre">
      <input type="text" name="lastname" placeholder="Apellido">
      <input type="text" name="username" placeholder="Username">
      <input type="text" name="password" placeholder="Password">
      <input type="text" name="email" placeholder="Email">

      <input type="submit" value="Agregar usuario">

      <div>
  <h2>Usuarios Registrados</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>

    <th><a href="">Editar</a></th>
    <th><a href="">Eliminar</a></th>
  </tbody>
  </table>
      </div>
    </form>
  </div>
</body>
</html>