<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Info</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .tracking-container {
            max-width: 500px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-actions {
            text-align: center;
        }

        .form-actions button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
        }

        .tracking-info {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 5px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="tracking-container">
        <h2>Tracking Info</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="order-id">Order ID</label>
                <input type="text" id="order-id" name="order_id" placeholder="Enter Order ID">
            </div>
            <div class="form-group">
                <label for="tracking-number">Tracking Number</label>
                <input type="text" id="tracking-number" name="tracking_number" placeholder="Enter Tracking Number">
            </div>
            <div class="form-actions">
                <button type="submit">Update Tracking</button>
                <button type="button" onclick="viewTrackingInfo()">View Tracking</button>
            </div>
        </form>
        <div id="tracking-info" class="tracking-info" style="display: none;">
            <strong>Order ID:</strong> ORD123 <br>
            <strong>Tracking Number:</strong> 1Z9999W99999999999 <br>
            <strong>Status:</strong> In Transit
        </div>
    </div>

    <script>
        function viewTrackingInfo() {
            // Simulate displaying tracking information
            const trackingInfo = document.getElementById('tracking-info');
            trackingInfo.style.display = 'block';
        }
    </script>
</body>

</html>
