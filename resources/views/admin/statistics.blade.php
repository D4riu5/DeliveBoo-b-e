@extends('layouts.admin')

@section('content')
    <div class="container-sm mt-1">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h4 class="">
                Ordini ricevuti nell'ultimo anno
            </h4>
            <div class="mt-4 mb-2" style="height: 60vh"><canvas id="acquisitions"></canvas></div>
        </div>
    </div>

    {{-- CHART SCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = {!! json_encode($labels) !!};
        const counts = {!! json_encode($counts) !!};

        const ctx = document.getElementById('acquisitions').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            options: {
                animation: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        enabled: true
                    }
                },
                scales: {
                    x: {
                        
                        ticks: {
                            autoSkip: false,
                            maxRotation: 90,
                            minRotation: 90,
                            color: 'white'
                        }
                    },
                    y: {
                        ticks: {
                            color: 'white' // Add this line
                        }
                    }
                },
                color: 'white'
            },
            data: {
                labels: labels,
                datasets: [{
                    label: 'Numero ordini',
                    data: counts,
                    backgroundColor: 'red',
                    borderColor: 'red',
                    hoverBackgroundColor: 'darkred'
                }]
            },
        });
    </script>
@endsection
