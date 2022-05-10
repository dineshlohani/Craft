<script>
    var ctx = document.getElementById("{{ $options['chart_name'] ?? 'myChart' }}");
    var {{ $options['chart_name'] ?? 'myChart' }} = new Chart(ctx, {
        type: '{{ $options['chart_type'] ?? 'line' }}',
        data: {
            labels: [
                @if (count($datasets) > 0)
                    @foreach ($datasets[0]['data'] as $group => $result)
                        "{{ $group }}",
                    @endforeach
                @endif
            ],
        datasets: [
            @foreach ($datasets as $dataset)
            {
                label: '{{ $dataset['name'] ?? $options['chart_name'] }}',
                data: [
                    @foreach ($dataset['data'] as $group => $result)
                        {!! $result !!},
                    @endforeach
                ],
                @if ($options['chart_type'] == 'line')
                    fill: false,
                    @if (isset($dataset['color']) && $dataset['color'] != '')
                        borderColor: '{{ $dataset['color'] }}',
                    @else
                        borderColor: 'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 0.2)',
                    @endif
                @elseif ($options['chart_type'] == 'pie')
                    backgroundColor: [
                        @foreach ($dataset['data'] as $group => $result)
                            'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 0.2)',
                        @endforeach
                    ],
                @endif
                borderWidth: 3
            },
            @endforeach
        ]
    },
    options: {
        tooltips: {
            mode: 'point'
        },
        height: '{{ $options['chart_height'] ?? "300px" }}',
        @if ($options['chart_type'] != 'pie')
            scales: {
                xAxes: [],
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            },
        @endif
    }
    });
</script>
