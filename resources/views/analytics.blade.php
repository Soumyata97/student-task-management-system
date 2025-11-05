<!DOCTYPE html>
<html>
<head>

    <title>Analytics Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7fb;
            font-family:'Segoe UI', sans-serif;
        }

        .main-container{
            width:90%;
            margin:40px auto;
        }

        .header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .title h1{
            margin:0;
            color:#334155;
            font-size:40px;
        }

        .title p{
            color:#64748b;
        }

        .back-btn{
            background:#7c8db5;
            color:white;
            padding:10px 18px;
            border-radius:10px;
            text-decoration:none;
        }

        .stats-grid{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:20px;
            margin-bottom:30px;
        }

        .stat-card{
            background:white;
            padding:25px;
            border-radius:16px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .stat-card h4{
            color:#64748b;
        }

        .stat-card h1{
            color:#475569;
            font-size:42px;
        }

        .chart-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:20px;
        }

        .chart-card{
            background:white;
            padding:25px;
            border-radius:16px;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        footer{
            text-align:center;
            margin-top:40px;
            color:#64748b;
        }

        @media(max-width:900px){

            .stats-grid,
            .chart-grid{
                grid-template-columns:1fr;
            }

        }

    </style>

</head>

<body>

<div class="main-container">

    <!-- Header -->

    <div class="header">

        <div class="title">

            <h1>Analytics Dashboard</h1>

            <p>
                Task statistics and visual analytics
            </p>

        </div>

        <a href="/tasks" class="back-btn">

            ← Back to Dashboard

        </a>

    </div>

    <!-- Stats -->

    <div class="stats-grid">

        <div class="stat-card">

            <h4>Total Tasks</h4>

            <h1>{{ $tasks->count() }}</h1>

        </div>

        <div class="stat-card">

            <h4>Completed Tasks</h4>

            <h1>
                {{ $tasks->where('status','Completed')->count() }}
            </h1>

        </div>

        <div class="stat-card">

            <h4>Pending Tasks</h4>

            <h1>
                {{ $tasks->where('status','Pending')->count() }}
            </h1>

        </div>

    </div>

    <!-- Charts -->

    <div class="chart-grid">

        <div class="chart-card">

            <h4 style="margin-bottom:20px;">
                Task Status Overview
            </h4>

            <canvas id="statusChart"></canvas>

        </div>

        <div class="chart-card">

            <h4 style="margin-bottom:20px;">
                Priority Distribution
            </h4>

            <canvas id="priorityChart"></canvas>

        </div>

    </div>

    <footer>

        <p>
            Developed by Soumyata Shakya
        </p>

    </footer>

</div>

<!-- Charts -->

<script>

    // Status Chart

    new Chart(

        document.getElementById('statusChart'),

        {

            type:'doughnut',

            data:{

                labels:['Completed','Pending'],

                datasets:[{

                    data:[
                        {{ $tasks->where('status','Completed')->count() }},
                        {{ $tasks->where('status','Pending')->count() }}
                    ],

                    backgroundColor:[
                        '#c7dfcc',
                        '#eadab8'
                    ]

                }]

            }

        }

    );

    // Priority Chart

    new Chart(

        document.getElementById('priorityChart'),

        {

            type:'bar',

            data:{

                labels:['High','Medium','Low'],

                datasets:[{

                    label:'Tasks',

                    data:[
                        {{ $tasks->where('priority','High')->count() }},
                        {{ $tasks->where('priority','Medium')->count() }},
                        {{ $tasks->where('priority','Low')->count() }}
                    ],

                    backgroundColor:[
                        '#e4bcbc',
                        '#ecd9b5',
                        '#cce3c6'
                    ]

                }]

            },

            options:{

                responsive:true,

                plugins:{
                    legend:{
                        display:false
                    }
                }

            }

        }

    );

</script>

</body>
</html>