<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
  </head>
  <!-- <body class="bg-primary"> -->
    <div class="container">
    <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong bg-primary" style="border-radius: 1rem;">
          <div class="card-body p-5">

            <h3 class="mb-5">Register Now!</h3>

            <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5">
          <form action="action_register.php" method="POST">
             <table>
            <tr>
                <td>Nama User</td>
                <td><input type="text" name="name" required=""></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required=""></td>
            </tr>
            <tr>
                <td>Ulangi Password</td>
                <td><input type="password" name="ulangpassword" required=""></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                <select name="level" required=""> 
                    <option value="1">Admin</option>
                    <option value="2">Petugas</option>
                    
                </select>
                </td>
            </tr>
            </table>
            </div>
            
            <button class="btn btn-primary btn-lg  col-6 mx-auto" type="submit">Daftar</a></button>
            </form>
           
            <hr class="my-4">
            <p class="mx-auto">Sudah punya akun?<a href="login.php">Klik Disini</a></p>

          </div>
        </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>