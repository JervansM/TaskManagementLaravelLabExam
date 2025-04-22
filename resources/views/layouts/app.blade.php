<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: #fff;
        }
        .navbar {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: black;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1020;
            text-decoration: none;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: white !important;
            position: start;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        
                        <a class="navbar"href="{{ route('tasks.index') }}">Task Management | </a>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="/">Home | </a>
                       
                         <li class="nav-item">
                            <a class="nav-link text-white" href="/create">Create | </a>
                         <li class="nav-item">
                                <a class="nav-link text-white" href="/edit">Edit | </a>
                         <li class="nav-item">
                                <a class="nav-link text-white" href="/index">Tasks | </a>
                         <li class="nav-item">
                        
                        
                        
                  
                  
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-4 container">
        @yield('content')
    </div>
</body>
</html>
