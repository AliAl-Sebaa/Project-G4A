<?php
require_once '../config/database.php';
// Admin check here

$query = $pdo->query("SELECT status, COUNT(*) as count FROM requests GROUP BY status");
$chartData = $query->fetchAll();

$labels = [];
$counts = [];
foreach($chartData as $row) {
    $labels[] = $row['status'];
    $counts[] = $row['count'];
}
?>
<div class="main-content">
    <h3>System Analytics</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="card p-4">
                <h5>Ticket Distribution by Status</h5>
                <canvas id="statusChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('statusChart').getContext('2d');
new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode($labels); ?>,
        datasets: [{
            data: <?php echo json_encode($counts); ?>,
            backgroundColor: ['#ffc107', '#0d6efd', '#17a2b8', '#198754', '#dc3545']
        }]
    }
});
</script>