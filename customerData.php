
<?php
session_start();
$rootList = include $_SERVER["DOCUMENT_ROOT"] . "/config/bootstrap.php";
require_once $_SERVER["DOCUMENT_ROOT"] . $rootList['analyticsPdo'];
$conn = connector();

// Fetch customer data
$sql = "SELECT * FROM customers";
$stmt = $conn->prepare($sql);
$stmt->execute();
$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch payment data
$pay_sql = "SELECT * FROM payments";
$pay_stmt = $conn->prepare($pay_sql);
$pay_stmt->execute();
$payments = $pay_stmt->fetchAll(PDO::FETCH_ASSOC);

// Merge based on UUID
$mergedData = [];
foreach ($customers as $customer) {
    $uuid = $customer['uuid'];
    $hasPayment = false;

    foreach ($payments as $payment) {
        if ($payment['uuid'] === $uuid) {
            $mergedData[] = array_merge($customer, $payment);
            $hasPayment = true;
        }
    }

    if (!$hasPayment) {
        $mergedData[] = array_merge($customer, [
            'rp_payment_id' => null,
            'user_name' => null,
            'email' => null,
            'mobile_number' => null,
            'amount_paid' => null,
            'frame' => null,
            'status_payment' => null,
        ]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Merged Customer & Payment Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h3 class="mb-4">Customer & Payment Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr class="table-primary">
                    <th colspan="9">Customer Details</th>
                    <th colspan="7">Payment Details</th>
                </tr>
                <tr class="table-secondary">
                    <th>S.No</th>
                    <th>Occasion</th>
                    <th>Image</th>
                    <th>Video</th>
                    <th>Door No</th>
                    <th>Area</th>
                    <th>City</th>
                    <th>Nearby</th>
                    <th>Status</th>

                    <th>RP Payment ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Amount Paid</th>
                    <th>Frame</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                foreach ($mergedData as $row) {
                    echo "<tr>";
                    echo "<td>" . $count++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['occasion'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['image_path'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['video_path'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['door_no'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['area'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['city'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['nearby'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['status'] ?? 'N/A') . "</td>";

                    echo "<td>" . htmlspecialchars($row['rp_payment_id'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['user_name'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['email'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['mobile_number'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['amount_paid'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['frame'] ?? 'N/A') . "</td>";
                    echo "<td>" . htmlspecialchars($row['status'] ?? 'N/A') . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
