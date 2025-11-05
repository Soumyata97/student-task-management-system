<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow border-0">

                <div class="card-header bg-primary text-white">

                    <h3 class="mb-0">
                        Create New Task
                    </h3>

                </div>

                <div class="card-body">

                    <form action="{{ route('tasks.store') }}"
                          method="POST">

                        @csrf

                        <!-- Task Title -->

                        <div class="mb-3">

                            <label class="form-label">
                                Task Title
                            </label>

                            <input type="text"
                                   name="title"
                                   class="form-control"
                                   placeholder="Enter task title"
                                   required>

                        </div>

                        <!-- Description -->

                        <div class="mb-3">

                            <label class="form-label">
                                Description
                            </label>

                            <textarea name="description"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Enter task description"></textarea>

                        </div>

                        <!-- Due Date -->

                        <div class="mb-3">

                            <label class="form-label">
                                Due Date
                            </label>

                            <input type="date"
                                   name="due_date"
                                   class="form-control">

                        </div>

                        <!-- Priority -->

                        <div class="mb-4">

                            <label class="form-label">
                                Priority
                            </label>

                            <select name="priority"
                                    class="form-select">

                                <option value="High">
                                    High
                                </option>

                                <option value="Medium" selected>
                                    Medium
                                </option>

                                <option value="Low">
                                    Low
                                </option>

                            </select>

                        </div>

                        <!-- Buttons -->

                        <div class="d-flex gap-2">

                            <button type="submit"
                                    class="btn btn-success">

                                Save Task

                            </button>

                            <a href="{{ route('tasks.index') }}"
                               class="btn btn-secondary">

                                Back

                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>