<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
        }
        .active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <nav class="sidebar bg-light p-3">
            <h4 class="text-center">Dashboard</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </nav>

        <div class="content flex-grow-1 p-4">
            <header class="d-flex justify-content-between align-items-center mb-4">
                <h2>Git Crash Course (Production)</h2>
                <button class="btn btn-primary">Add New</button>
            </header>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card bg-default">
                        <div class="card-body">
                            <h5 class="card-title ">Administrator's Page</h5>
                            <p class="card-text ">This is a simple card with content.</p>
                            <a href="#" class="btn btn-secondary btn-success">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Content</h5>
                            <p class="card-text">This is a simple card with content.</p>
                            <a href="#" class="btn btn-secondary btn-danger">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Statistics</h5>
                            <p class="card-text">This is a simple card with content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>