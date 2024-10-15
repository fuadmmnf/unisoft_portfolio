<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .email-container {
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .email-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .email-body {
            padding: 20px;
        }
        .email-body p {
            line-height: 1.6;
        }
        .email-footer {
            text-align: center;
            color: #999;
            padding: 10px;
            font-size: 12px;
        }
    </style>
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <h2>New Contact Request</h2>
    </div>
    <div class="email-body">
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Subject:</strong> {{ $subject }}</p>
        <p><strong>Message:</strong></p>
        <p>{{ $messageBody }}</p>
    </div>
</div>
</body>
</html>
