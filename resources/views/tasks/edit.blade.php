<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        body{
            font-family: Arial, sans-serif;
            background:#f4f7fb;
            margin:0;
            padding:0;
        }

        .container{
            width:60%;
            margin:40px auto;
            background:white;
            padding:35px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.08);
        }

        h1{
            color:#1e293b;
            margin-bottom:30px;
            font-size:38px;
        }

        label{
            display:block;
            margin-top:18px;
            margin-bottom:8px;
            font-weight:bold;
            color:#334155;
        }

        input,
        textarea,
        select{
            width:100%;
            padding:12px;
            border:1px solid #cbd5e1;
            border-radius:6px;
            font-size:15px;
            box-sizing:border-box;
        }

        textarea{
            height:120px;
            resize:none;
        }

        .button-group{
            margin-top:25px;
            display:flex;
            gap:10px;
        }

        .btn{
            padding:12px 20px;
            border:none;
            border-radius:6px;
            color:white;
            text-decoration:none;
            cursor:pointer;
            font-size:14px;
        }

        .btn-update{
            background:#f59e0b;
        }

        .btn-back{
            background:#64748b;
        }

        .btn-update:hover{
            background:#d97706;
        }

        .btn-back:hover{
            background:#475569;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Edit Task</h1>

    <form action="/tasks/{{ $task->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Task Title</label>

        <input type="text"
        name="title"
        value="{{ $task->title }}"
        required>

        <label>Description</label>

        <textarea
        name="description"
        required>{{ $task->description }}</textarea>

        <label>Due Date</label>

        <input type="date"
        name="due_date"
        value="{{ $task->due_date }}"
        required>

        <label>Priority</label>

        <select name="priority">

            <option value="High"
            {{ $task->priority == 'High' ? 'selected' : '' }}>
                High
            </option>

            <option value="Medium"
            {{ $task->priority == 'Medium' ? 'selected' : '' }}>
                Medium
            </option>

            <option value="Low"
            {{ $task->priority == 'Low' ? 'selected' : '' }}>
                Low
            </option>

        </select>

        <label>Status</label>

        <select name="status">

            <option value="Pending"
            {{ $task->status == 'Pending' ? 'selected' : '' }}>
                Pending
            </option>

            <option value="Completed"
            {{ $task->status == 'Completed' ? 'selected' : '' }}>
                Completed
            </option>

        </select>

        <div class="button-group">

            <button type="submit"
            class="btn btn-update">

                Update Task

            </button>

            <a href="/tasks"
            class="btn btn-back">

                Back

            </a>

        </div>

    </form>

</div>

</body>
</html>