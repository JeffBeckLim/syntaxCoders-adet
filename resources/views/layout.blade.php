<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Syntax Coders</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body class="m-0 overflow-hidden">

    <nav class="navbar navbar-expand-lg bg-dark p-4 ">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold text-light" href="/">SyntaxCoders</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            @auth
              
              <li class="nav-item">
                <span class=" nav-link fw-light text-light">{{auth()->user()->name}}</span>
              </li>

              @if(auth()->user()->user_type == 1)
               <li class="nav-item">
                <a class="nav-link text-warning" href="/users">Users</a>
               </li>
              @endif

              <li class="nav-item">
                <form class="nav-link" method="POST" action="/logout">
                  @csrf
                  <button class="btn btn-sm btn-warning">
                    Logout
                  </button>
                </form>
                
              </li>


              @else 
              
              <li class="nav-item">
                <a class="nav-link active text-light"  href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/register">Register</a>
              </li>
              

              @endauth

            </ul>
          </div>
        </div>
      </nav>

      <div>

        @yield('content')

      </div>

  </body>
</html>