<div>
    <select
        wire:model="year"
        id="year"
        class="select select-bordered"
    >
        @foreach (range(now()->isoFormat('YYYY'), 2020) as $year)
            <option value="{{ $year }}">{{ $year }}</option>
        @endforeach
    </select>

    <div wire:ignore>
        <canvas id="participants"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            var chart;

            (async function() {
                const data = @json($data);

                chart = new Chart(
                    document.getElementById('participants'), {
                        type: 'bar',
                        data: {
                            labels: data.map(row => row.month),
                            datasets: [{
                                label: 'Total partisipan berdasarkan bulan',
                                data: data.map(row => row.count)
                            }]
                        }
                    }
                );
            })();

            Livewire.on('updateChart', (data) => {
                chart.data.datasets[0].data = data.map(row => row.count);
                chart.update({
                    duration: 500,
                    easing: 'easeInOut'
                });
            });
        })
    </script>
</div>
