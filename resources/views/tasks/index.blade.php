<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Task Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <style>
        body {
            background: #f5f7fb;
            font-family: 'Segoe UI', sans-serif;
            color: #2d3748;
        }

        .main-container {
            width: 90%;
            margin: 40px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .branding {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .logo {
            width: 65px;
            height: 65px;
            background: #7c8db5;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 28px;
            font-weight: bold;
        }

        .title h1 {
            margin: 0;
            font-size: 42px;
            font-weight: 700;
        }

        .title p {
            margin: 0;
            color: #718096;
            font-size: 17px;
        }

        .top-buttons {
            display: flex;
            gap: 12px;
        }

        .dashboard-btn,
        .logout-btn {
            border: none;
            padding: 10px 22px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            transition: 0.3s;
            font-weight: 500;
        }

        .dashboard-btn {
            background: #7c8db5;
        }

        .dashboard-btn:hover {
            background: #68789d;
        }

        .logout-btn {
            background: #d89a9a;
        }

        .logout-btn:hover {
            background: #c68484;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 28px;
            border-radius: 16px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .stat-card h3 {
            font-size: 20px;
            margin-bottom: 12px;
        }

        .stat-card h1 {
            font-size: 42px;
            color: #6c7ea5;
            margin: 0;
        }

        .add-btn {
            display: inline-block;
            background: #7c8db5;
            color: white;
            padding: 12px 24px;
            border-radius: 10px;
            text-decoration: none;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .add-btn:hover {
            background: #68789d;
        }

        .table-container {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #2d3748;
            color: white;
        }

        th, td {
            padding: 18px;
            text-align: left;
        }

        tbody tr {
            border-bottom: 1px solid #e2e8f0;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        .status {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
        }

        .pending {
            background: #f7e4b5;
            color: #9a6b00;
        }

        .completed {
            background: #d6f0da;
            color: #2f7a38;
        }

        .priority {
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            display: inline-block;
        }

        .high {
            background: #f3c6c6;
            color: #a94444;
        }

        .medium {
            background: #f5dfb7;
            color: #9c6d00;
        }

        .low {
            background: #d8ead3;
            color: #467a3c;
        }

        .due-green {
            color: #4f9d69;
            font-weight: 600;
        }

        .due-red {
            color: #d16d6d;
            font-weight: 600;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .edit-btn,
        .delete-btn {
            border: none;
            padding: 8px 18px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            transition: 0.3s;
        }

        .edit-btn {
            background: #a8b3cc;
        }

        .edit-btn:hover {
            background: #8f9bb6;
        }

        .delete-btn {
            background: #e1a4a4;
        }

        .delete-btn:hover {
            background: #cc8d8d;
        }

        .empty-state {
            text-align: center;
            padding: 60px;
            color: #718096;
        }

        .empty-state h2 {
            margin-top: 15px;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #718096;
            font-size: 15px;
        }

        .pagination {
            justify-content: center;
            margin-top: 25px;
        }

        svg {
            width: 18px !important;
            height: 18px !important;
        }

        @media(max-width: 900px) {
            .stats-container {
                grid-template-columns: 1fr;
            }

            .header {
                flex-direction: column;
                gap: 20px;
                align-items: flex-start;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

<div class="main-container">

    <!-- Header -->
    <div class="header">

        <div class="branding">
            <div class="logo">
                ST
            </div>

            <div class="title">
                <h1>Student Task Management System</h1>
                    <p style="margin-top:8px; color:#64748b;">
                        Welcome back,
                        <strong>{{ Auth::user()->name }}</strong> 
                    </p>
            </div>
        </div>

        <div class="top-buttons">
            <a href="/dashboard" class="dashboard-btn">
                Dashboard
            </a>

            <a href="/about" class="dashboard-btn">
                About
            </a>

            <a href="/analytics" class="dashboard-btn">
                Analytics
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="logout-btn">
                    Logout
                </button>
            </form>
        </div>

    </div>

    <!-- Stats -->
    <div class="stats-container">

        <div class="stat-card">
            <h3>Total Tasks</h3>
            <h1>{{ $tasks->count() }}</h1>
        </div>

        <div class="stat-card">
            <h3>Completed</h3>
            <h1>{{ $tasks->where('status', 'Completed')->count() }}</h1>
        </div>

        <div class="stat-card">
            <h3>Pending</h3>
            <h1>{{ $tasks->where('status', 'Pending')->count() }}</h1>
        </div>

    </div>
    

    <!-- Add Button -->
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">

        <a href="{{ route('tasks.create') }}" class="add-btn">
            + Add New Task
        </a>

        <form method="GET"
            action="{{ route('tasks.index') }}"
            style="display:flex; gap:10px;">

            <input type="text"
                name="search"
                value="{{ $search ?? '' }}"
                placeholder="Search tasks..."
                style="
                        padding:10px 15px;
                        border:1px solid #d1d5db;
                        border-radius:10px;
                        width:250px;
                        outline:none;
                ">

            <button type="submit"
                    style="
                        background:#7c8db5;
                        color:white;
                        border:none;
                        padding:10px 18px;
                        border-radius:10px;
                    ">

                Search

            </button>

        </form>

    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table -->
    <div class="table-container">

        @if($tasks->count() > 0)

        <table>

            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Priority</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @foreach($tasks as $task)

                <tr>

                    <td>{{ $task->title }}</td>

                    <td>{{ $task->description }}</td>

                    <td>
                        <span class="{{ \Carbon\Carbon::parse($task->due_date)->isPast() ? 'due-red' : 'due-green' }}">
                            {{ $task->due_date }}
                        </span>
                    </td>

                    <td>
                        <span class="status {{ strtolower($task->status) }}">
                            {{ $task->status }}
                        </span>
                    </td>

                    <td>
                        <span class="priority {{ strtolower($task->priority) }}">
                            {{ $task->priority }}
                        </span>
                    </td>

                    <td>

                        <div class="action-buttons">

                            <a href="{{ route('tasks.edit', $task->id) }}"
                               class="edit-btn">
                                Edit
                            </a>

                            <form action="{{ route('tasks.destroy', $task->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="delete-btn"
                                        onclick="return confirm('Are you sure you want to delete this task?')">

                                    Delete

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

        @else

        <div class="empty-state">
            <h1>📋</h1>
            <h2>No Tasks Available</h2>
            <p>Create your first task to get started.</p>
        </div>

        @endif

    </div>

    <!-- Pagination -->
    <div style="margin-top:20px;">
        {{ $tasks->appends(request()->query())->links('pagination::bootstrap-5') }}
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Developed by Soumyata Shakya</p>
        <p>Laravel MVC Project using PostgreSQL Database</p>
    </div>

</div>

</body>
</html>