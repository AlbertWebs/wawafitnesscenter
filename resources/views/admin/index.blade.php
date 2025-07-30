@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <!-- Visitors Today -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $todayCount }}</h3>
                <p>Visitors Today</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">View Logs <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- Weekly Visitors -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $thisWeekCount }}</h3>
                <p>This Week</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-week"></i>
            </div>
            <a href="#" class="small-box-footer">Full Report <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- Monthly Visitors -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $thisMonthCount }}</h3>
                <p>This Month</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <a href="#" class="small-box-footer">Analytics <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- Total Visitors -->
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $totalCount }}</h3>
                <p>Total Visitors</p>
            </div>
            <div class="icon">
                <i class="fas fa-database"></i>
            </div>
            <a href="#" class="small-box-footer">All Logs <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<!-- Chart Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daily Visitor Chart</h3>
            </div>
            <div class="card-body">
                <canvas id="visitorChart" height="100"></canvas>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('visitorChart').getContext('2d');
    const visitorChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: {!! json_encode(array_keys($dailyVisitors)) !!},
            datasets: [{
                label: 'Visitors',
                data: {!! json_encode(array_values($dailyVisitors)) !!},
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    stepSize: 1
                }
            }
        }
    });
</script>
@stop
