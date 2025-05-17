<div>
    <h2 class="text-xl font-bold mb-4">Article Ratings Dashboard</h2>

    <div class="mb-4 flex flex-col md:flex-row gap-2">
        <div>
            <label>Filter by Article:</label>
            <select wire:model="articleId" class="border rounded px-2 py-1">
                <option value="">All Articles</option>
                @foreach($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Per Page:</label>
            <select wire:model="perPage" class="border rounded px-2 py-1">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
            </select>
        </div>
    </div>

    <table class="min-w-full bg-white border mb-6">
        <thead>
            <tr>
                <th class="border px-4 py-2">Article</th>
                <th class="border px-4 py-2">Indicator</th>
                <th class="border px-4 py-2">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td class="border px-4 py-2" rowspan="5">{{ $row['title'] }}</td>
                    <td class="border px-4 py-2">Average rating</td>
                    <td class="border px-4 py-2">{{ number_format($row['average'], 2) }}</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Total ratings</td>
                    <td class="border px-4 py-2">{{ $row['total'] }}</td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Rating breakdown</td>
                    <td class="border px-4 py-2">
                        @foreach($row['breakdown'] as $star => $count)
                            {{ $star }}★: {{ $count }}<br>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">IP-based log</td>
                    <td class="border px-4 py-2">
                        @foreach($row['ips'] as $ip)
                            {{ $ip }}<br>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="border px-4 py-2">Ratings over time</td>
                    <td class="border px-4 py-2">
                        <canvas id="chart-{{ md5($row['title']) }}" width="300" height="100"></canvas>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const ctx = document.getElementById('chart-{{ md5($row['title']) }}').getContext('2d');
                                new window.Chart(ctx, {
                                    type: 'line',
                                    data: {
                                        labels: {!! json_encode(array_keys($row['ratings_over_time']->toArray())) !!},
                                        datasets: [{
                                            label: 'Ratings',
                                            data: {!! json_encode(array_values($row['ratings_over_time']->toArray())) !!},
                                            borderColor: 'rgba(75, 192, 192, 1)',
                                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                            fill: true,
                                        }]
                                    },
                                    options: {
                                        responsive: true,
                                        plugins: { legend: { display: false } },
                                        scales: { y: { beginAtZero: true } }
                                    }
                                });
                            });
                        </script>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $articles->links() }}

    {{-- Chart.js CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</div>
