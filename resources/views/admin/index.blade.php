@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex align-items-center justify-content-between flex-wrap">
        <div>
            <h1>Good day, {{ auth()->user()->name ?? 'there' }}</h1>
            <p>Here’s a snapshot of your website activity.</p>
        </div>
        <a href="{{ url('/') }}" target="_blank" rel="noopener" class="btn btn-outline-secondary">
            <i class="fas fa-external-link-alt mr-1"></i> Open website
        </a>
    </div>
@stop

@section('content')
    <div class="row">
        @foreach([
            ['label' => 'Visitors today', 'value' => $todayCount, 'icon' => 'fa-user-plus', 'tone' => 'green'],
            ['label' => 'This week', 'value' => $thisWeekCount, 'icon' => 'fa-calendar-week', 'tone' => 'blue'],
            ['label' => 'This month', 'value' => $thisMonthCount, 'icon' => 'fa-chart-line', 'tone' => 'amber'],
            ['label' => 'All-time visits', 'value' => $totalCount, 'icon' => 'fa-eye', 'tone' => 'violet'],
        ] as $metric)
            <div class="col-sm-6 col-xl-3">
                <div class="metric-card metric-{{ $metric['tone'] }}">
                    <div>
                        <span>{{ $metric['label'] }}</span>
                        <strong>{{ number_format($metric['value']) }}</strong>
                    </div>
                    <i class="fas {{ $metric['icon'] }}" aria-hidden="true"></i>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-1">
        <div class="col-xl-8">
            <section class="card dashboard-chart-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                        <h2 class="card-title mb-1">Website traffic</h2>
                        <small class="text-muted">Daily visitor count</small>
                    </div>
                    <span class="badge badge-light px-3 py-2">All recorded visits</span>
                </div>
                <div class="card-body"><canvas id="visitorChart" height="105" aria-label="Daily visitor chart"></canvas></div>
            </section>
        </div>

        <div class="col-xl-4">
            <section class="card h-100">
                <div class="card-header"><h2 class="card-title">Quick access</h2></div>
                <div class="card-body quick-access-list">
                    <a href="{{ route('massage-chairs.index') }}"><span class="quick-access-icon"><i class="fas fa-chair"></i></span><span><strong>Massage chairs</strong><small>Manage products and images</small></span><i class="fas fa-chevron-right"></i></a>
                    <a href="{{ route('blogs.index') }}"><span class="quick-access-icon"><i class="fas fa-newspaper"></i></span><span><strong>News and blogs</strong><small>Publish and edit articles</small></span><i class="fas fa-chevron-right"></i></a>
                    <a href="{{ route('categories.index') }}"><span class="quick-access-icon"><i class="fas fa-layer-group"></i></span><span><strong>Categories</strong><small>Organize your products</small></span><i class="fas fa-chevron-right"></i></a>
                    <a href="{{ route('site-settings.edit') }}"><span class="quick-access-icon"><i class="fas fa-sliders-h"></i></span><span><strong>Site settings</strong><small>Contact details and integrations</small></span><i class="fas fa-chevron-right"></i></a>
                </div>
            </section>
        </div>
    </div>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const chartCanvas = document.getElementById('visitorChart');
        if (chartCanvas) {
            new Chart(chartCanvas, {
                type: 'line',
                data: {
                    labels: {!! json_encode(array_keys($dailyVisitors)) !!},
                    datasets: [{
                        label: 'Visitors',
                        data: {!! json_encode(array_values($dailyVisitors)) !!},
                        borderColor: '#198754',
                        backgroundColor: 'rgba(25, 135, 84, .10)',
                        borderWidth: 2,
                        pointRadius: 2,
                        pointHoverRadius: 5,
                        fill: true,
                        tension: .35
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: { legend: { display: false } },
                    scales: {
                        x: { grid: { display: false }, ticks: { maxTicksLimit: 8 } },
                        y: { beginAtZero: true, ticks: { precision: 0 }, grid: { color: '#edf2ee' } }
                    }
                }
            });
        }
    </script>
@stop
