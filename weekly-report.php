<?php include '../includes/header.php'; ?>

<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Weekly Market Report</h1>
    
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-semibold">Week of <?= date('M j, Y') ?></h2>
            <button onclick="window.print()" class="px-4 py-2 bg-green-600 text-white rounded-md">
                <i class="fas fa-print mr-2"></i>Print Report
            </button>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6 mb-8">
            <div class="bg-green-50 p-4 rounded-lg">
                <h3 class="font-bold text-green-800 mb-2">Top Performing Crops</h3>
                <ol class="list-decimal list-inside">
                    <li>Tomatoes (+12%)</li>
                    <li>Onions (+8%)</li>
                    <li>Flowers (+5%)</li>
                </ol>
            </div>
            
            <div class="bg-blue-50 p-4 rounded-lg">
                <h3 class="font-bold text-blue-800 mb-2">Market Trends</h3>
                <ul class="list-disc list-inside">
                    <li>Increased demand for organic produce</li>
                    <li>Storage costs down 3% this week</li>
                </ul>
            </div>
            
            <div class="bg-yellow-50 p-4 rounded-lg">
                <h3 class="font-bold text-yellow-800 mb-2">Recommendations</h3>
                <ul class="list-disc list-inside">
                    <li>Sell tomatoes before Thursday</li>
                    <li>Consider value-added processing for potatoes</li>
                </ul>
            </div>
        </div>
        
        <div class="bg-white border rounded-lg p-4 mb-6">
            <h3 class="font-bold mb-4">Detailed Price Trends</h3>
            <div class="h-96">
                <canvas id="weeklyChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    // Weekly chart data
    const ctx = document.getElementById('weeklyChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
            datasets: [
                {
                    label: 'Tomatoes (₹/kg)',
                    data: [42, 45, 47, 46, 48],
                    borderColor: '#10B981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    tension: 0.4
                },
                {
                    label: 'Potatoes (₹/kg)',
                    data: [22, 21, 20, 22, 23],
                    borderColor: '#F59E0B',
                    backgroundColor: 'rgba(245, 158, 11, 0.1)',
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Weekly Price Fluctuations'
                }
            }
        }
    });
</script>

<?php include '../includes/footer.php'; ?>