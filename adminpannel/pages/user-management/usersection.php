<style>
    .form-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 900px;
    }

    .form-section {
        width: 45%;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-size: 16px;
        color: #333;
    }

    input[type="text"],
    input[type="tel"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
        color: #333;
        background-color: #f9f9f9;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    input[type="submit"]:active {
        background-color: #3e8e41;
    }

    .receipt {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 900px;
        margin-top: 20px;
    }

    .receipt h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    .receipt p {
        font-size: 16px;
        color: #333;
    }
</style>

<div class="form-container">
    <!-- Sender Form -->
    <div class="form-section">
        <h2>Sender Form</h2>
        <form id="senderForm">
            <label for="service">Service Type</label>
            <select id="service" name="service">
                <option value="Standard">Standard</option>
                <option value="Express">Express</option>
            </select>

            <label for="senderName">Name</label>
            <input type="text" id="senderName" name="senderName" required>

            <label for="senderAddress">Address</label>
            <input type="text" id="senderAddress" name="senderAddress" required>

            <label for="senderPhone">Phone</label>
            <input type="tel" id="senderPhone" name="senderPhone" required>
        </form>
    </div>

    <!-- Receiver Form -->
    <div class="form-section">
        <h2>Receiver Form</h2>
        <form id="receiverForm">
            <label for="receiverName">Name</label>
            <input type="text" id="receiverName" name="receiverName" required>

            <label for="receiverAddress">Address</label>
            <input type="text" id="receiverAddress" name="receiverAddress" required>

            <label for="receiverPhone">Phone</label>
            <input type="tel" id="receiverPhone" name="receiverPhone" required>
        </form>
    </div>
</div>

<input type="submit" value="Submit" id="submitBtn">

<div class="receipt" id="receipt" style="display: none;">
    <h3>Receipt</h3>
    <p><strong>Sender:</strong></p>
    <p><strong>Name:</strong> <span id="receiptSenderName"></span></p>
    <p><strong>Address:</strong> <span id="receiptSenderAddress"></span></p>
    <p><strong>Phone:</strong> <span id="receiptSenderPhone"></span></p>
    <p><strong>Service Type:</strong> <span id="receiptService"></span></p>

    <p><strong>Receiver:</strong></p>
    <p><strong>Name:</strong> <span id="receiptReceiverName"></span></p>
    <p><strong>Address:</strong> <span id="receiptReceiverAddress"></span></p>
    <p><strong>Phone:</strong> <span id="receiptReceiverPhone"></span></p>
</div>

<script>
    const senderForm = document.getElementById('senderForm');
    const receiverForm = document.getElementById('receiverForm');
    const receipt = document.getElementById('receipt');
    const submitBtn = document.getElementById('submitBtn');

    submitBtn.addEventListener('click', function(event) {
        event.preventDefault();

        // Gather data from the sender form
        const senderName = document.getElementById('senderName').value;
        const senderAddress = document.getElementById('senderAddress').value;
        const senderPhone = document.getElementById('senderPhone').value;
        const service = document.getElementById('service').value;

        // Gather data from the receiver form
        const receiverName = document.getElementById('receiverName').value;
        const receiverAddress = document.getElementById('receiverAddress').value;
        const receiverPhone = document.getElementById('receiverPhone').value;

        // Display receipt
        document.getElementById('receiptSenderName').textContent = senderName;
        document.getElementById('receiptSenderAddress').textContent = senderAddress;
        document.getElementById('receiptSenderPhone').textContent = senderPhone;
        document.getElementById('receiptService').textContent = service;
        document.getElementById('receiptReceiverName').textContent = receiverName;
        document.getElementById('receiptReceiverAddress').textContent = receiverAddress;
        document.getElementById('receiptReceiverPhone').textContent = receiverPhone;

        // Show the receipt
        receipt.style.display = 'block';
    });
</script>