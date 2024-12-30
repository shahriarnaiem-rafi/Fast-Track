<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }

        .table-container {
            max-width: 90%;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        thead {
            background-color: #007bff;
            color: #fff;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .status {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .status.pending {
            color: #856404;
            background-color: #fff3cd;
        }

        .status.completed {
            color: #155724;
            background-color: #d4edda;
        }

        .status.cancelled {
            color: #721c24;
            background-color: #f8d7da;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <p>Order List</p>
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Pickup Location</th>
                    <th>Delivery Location</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ORD001</td>
                    <td>John Doe</td>
                    <td>New York, NY</td>
                    <td>Los Angeles, CA</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>ORD002</td>
                    <td>Jane Smith</td>
                    <td>Chicago, IL</td>
                    <td>Houston, TX</td>
                    <td><span class="status completed">Completed</span></td>
                </tr>
                <tr>
                    <td>ORD003</td>
                    <td>Michael Brown</td>
                    <td>Seattle, WA</td>
                    <td>Denver, CO</td>
                    <td><span class="status cancelled">Cancelled</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
