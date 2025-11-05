<!DOCTYPE html>
<html>
<head>
    <title>Student Task Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
            color: #2d3748;
            font-family: 'Segoe UI', sans-serif;
        }

        .system-nav {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
        }

        .navbar-brand {
            color: #2d3748;
        }

        .navbar-brand:hover {
            color: #2d3748;
        }

        .btn-system {
            background: #7c8db5;
            border-color: #7c8db5;
            color: #ffffff;
        }

        .btn-system:hover {
            background: #68789d;
            border-color: #68789d;
            color: #ffffff;
        }

        .btn-soft {
            background: #f8fafc;
            border-color: #d8dee8;
            color: #2d3748;
        }

        .btn-soft:hover {
            background: #edf2f7;
            border-color: #cbd5e1;
            color: #2d3748;
        }

        .feature-list {
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .feature-list .list-group-item {
            border-color: #e2e8f0;
            color: #2d3748;
            padding: 14px 18px;
        }

        .system-card {
            border: 0;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .feature-tile {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            color: #2d3748;
            min-height: 110px;
        }

        .feature-tile h4 {
            color: #6c7ea5;
            font-weight: 700;
        }

        .feature-tile p {
            color: #718096;
            margin-bottom: 0;
        }

        .system-footer {
            background: #2d3748;
            color: #ffffff;
        }
    </style>
</head>

<body>

    <nav class="navbar system-nav">

        <div class="container">

            <a class="navbar-brand fw-bold"
               href="/">
                Student Task Management System
            </a>

            <div>

                <a href="/login"
                   class="btn btn-soft me-2">
                    Login
                </a>

                <a href="/register"
                   class="btn btn-system">
                    Register
                </a>

            </div>

        </div>

    </nav>

    <div class="container mt-5">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h1 class="display-4 fw-bold mb-4">

                    Manage Your Student Tasks Easily

                </h1>

                <p class="lead text-muted">

                    A Laravel MVC-based task management system
                    developed using PostgreSQL database integration.

                </p>

                <ul class="list-group list-group-flush feature-list mb-4">

                    <li class="list-group-item">
                        Task Creation & Management
                    </li>

                    <li class="list-group-item">
                        Authentication System
                    </li>

                    <li class="list-group-item">
                        Task Priority Management
                    </li>

                    <li class="list-group-item">
                        Search Functionality
                    </li>

                    <li class="list-group-item">
                        PostgreSQL Database Integration
                    </li>

                </ul>

                <a href="/register"
                   class="btn btn-system btn-lg">

                    Get Started

                </a>

            </div>

            <div class="col-md-6">

                <div class="card system-card">

                    <div class="card-body p-5">

                        <h3 class="mb-4 text-center">
                            Project Features
                        </h3>

                        <div class="row text-center">

                            <div class="col-6 mb-4">

                                <div class="card feature-tile">

                                    <div class="card-body">

                                        <h4>CRUD</h4>

                                        <p>Operations</p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-6 mb-4">

                                <div class="card feature-tile">

                                    <div class="card-body">

                                        <h4>MVC</h4>

                                        <p>Architecture</p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="card feature-tile">

                                    <div class="card-body">

                                        <h4>Search</h4>

                                        <p>System</p>

                                    </div>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="card feature-tile">

                                    <div class="card-body">

                                        <h4>Priority</h4>

                                        <p>Management</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <footer class="system-footer text-center mt-5 p-3">

        Developed by Soumyata Shakya |
        Laravel MVC Project

    </footer>

</body>
</html>
