<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign in to Sinvent</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
            <style>
              body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh; 
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                }
              .logo{
                width:100px;
              }
              .title{
                font-size:24px;
              }
              .login-form {
                  background-color: #f5f5f5;
                  padding: 20px;
                  border-radius: 10px;
                  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                  width: 350px;
                  margin: 0 auto;
                  text-align: left;
     }
              .register-link{
                font-size:12px;
              }
            </style>
    </head>

    <body>

      <div class="laravel text-center">
          <img alt="logo" class="logo mb-4" height="100" src="{{ asset(path: 'img/Laravel.png') }}" width="100"/>
          <div class="title mb-3 font-weight-bold fs-2">
           Sign in to Sinvent
          </div>

       <div class="login-form p-4">
       
          <form action="{{ route(name: 'actionlogin') }}" method="post">
          @csrf
            <div class="mb-2">
                <label for="username">
                  Username
                </label>
                <input id="username" name="email" type="text" class="form-control"/>
            </div>
            <div class="mb-2">
                <a class="register-link" href="#" style="float: right;">
                 Forgot password?
                </a>
                <label for="password">
                 Password
                </label>
                <input id="password" name="password" type="password" class="form-control"/>
            </div>

           <button type="submit" class="btn btn-primary w-100 mb-2">
            Login
           </button>

          </form>

        <div class="register-link mt-2 text-center">
         Don't have any account?
         <a href="#">
          Register Now
         </a>

        </div>

       </div>
      </div>
 </body>
</html>