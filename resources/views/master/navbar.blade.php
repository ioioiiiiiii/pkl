
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class=" m-2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('images/R.png') }}" height="40" alt="A">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="/" class="nav-item nav-link active">Disnaker</a>
                    <a href="about" class="nav-item nav-link" style="color: azure">Profile</a>
                </div>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: azure" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Rekap</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="rekap-umum">Rekap Umum</a></li>
                      <li><a class="dropdown-item" href="kegiatan-pengembangan">Kegiatan Pengembangan</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
                
                <div class="ms-auto">
                    <ul class="navbar-nav ml-auto">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Welcome back, {{auth()->user()->name}}</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">Logout</i></button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="navbar-item">
                                <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                            </li>
                        @endauth
                    </ul>
                </div>    
                

            </div>
        </div>
    </nav>
</div>
</body>
</html>