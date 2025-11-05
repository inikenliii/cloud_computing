<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            color: #4f46e5;
        }
        .button {
            display: inline-block;
            background-color: #16a34a;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="header">🎓 Cloud Computing 2025</h2>
        <p>Hello <strong>{{ $registration->full_name }}</strong>!</p>
        <p>
            Congratulations! You have successfully registered for
            <strong>Cloud Computing 2025</strong>.
        </p>

        <p><strong>📋 Registration Details</strong></p>
        <ul>
            <li><strong>Full Name:</strong> {{ $registration->full_name }}</li>
            <li><strong>Email:</strong> {{ $registration->student_email }}</li>
            <li><strong>Birthdate:</strong> {{ $registration->birthdate->format('F j, Y') }}</li>
        </ul>

        <p>Click the button below to confirm your registration:</p>

        <p style="text-align:center;">
            <a href="{{ $confirmationUrl }}" class="button">Confirm My Registration</a>
        </p>

        <p style="font-size: 14px; color: #666;">
            If the button doesn't work, copy this link into your browser:<br>
            <a href="{{ $confirmationUrl }}">{{ $confirmationUrl }}</a>
        </p>

        <div class="footer">
            <p>Thank you for choosing Cloud Computing 2025!</p>
            <p>Need help? Contact <a href="mailto:support@cloudcomputing.com">support@cloudcomputing.com</a></p>
        </div>
    </div>
</body>
</html>
