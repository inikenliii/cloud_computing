<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
        }
        .header p {
            margin: 5px 0 0 0;
            opacity: 0.9;
        }
        .content {
            background: #ffffff;
            padding: 30px;
            border: 1px solid #e0e0e0;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .details-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }
        .details-box h3 {
            margin-top: 0;
            color: #667eea;
            font-size: 16px;
        }
        .detail-row {
            display: flex;
            padding: 8px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .detail-row:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: bold;
            width: 120px;
            color: #666;
        }
        .detail-value {
            color: #333;
        }
        .button {
            display: inline-block;
            background: #10b981;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 8px;
            margin: 20px 0;
            font-weight: bold;
            text-align: center;
        }
        .button:hover {
            background: #059669;
        }
        .warning {
            background: #fff3cd;
            border: 1px solid #ffc107;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            color: #856404;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 10px 10px;
            color: #666;
            font-size: 14px;
            border: 1px solid #e0e0e0;
            border-top: none;
        }
        .footer a {
            color: #667eea;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎓 Cloud Computing 2025</h1>
        <p>Registration Confirmation</p>
    </div>

    <div class="content">
        <div class="greeting">
            Hello <strong>{{ $registration->full_name }}</strong>! 👋
        </div>

        <p>
            Congratulations! You have successfully registered for <strong>Cloud Computing 2025</strong>. 
            We are excited to have you join our program!
        </p>

        <div class="details-box">
            <h3>📋 Registration Details</h3>
            <div class="detail-row">
                <span class="detail-label">Full Name:</span>
                <span class="detail-value">{{ $registration->full_name }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Email:</span>
                <span class="detail-value">{{ $registration->student_email }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Birthdate:</span>
                <span class="detail-value">{{ $registration->birthdate->format('F j, Y') }}</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Course:</span>
                <span class="detail-value">Cloud Computing 2025</span>
            </div>
            <div class="detail-row">
                <span class="detail-label">Registration Date:</span>
                <span class="detail-value">{{ $registration->created_at->format('F j, Y - H:i') }}</span>
            </div>
        </div>

        <p>
            To complete your registration and confirm your spot in the program, please click the button below:
        </p>

        <center>
            <a href="{{ $confirmationUrl }}" class="button">
                ✓ Confirm My Registration
            </a>
        </center>

        <div class="warning">
            <strong>⚠️ Important:</strong> Please confirm your registration within 7 days to secure your spot in the program.
        </div>

        <p style="color: #666; font-size: 14px; margin-top: 30px;">
            If the button above doesn't work, copy and paste this link into your browser:<br>
            <a href="{{ $confirmationUrl }}" style="color: #667eea; word-break: break-all;">{{ $confirmationUrl }}</a>
        </p>
    </div>

    <div class="footer">
        <p>Thank you for choosing Cloud Computing 2025!</p>
        <p style="margin-top: 10px;">
            If you have any questions, please contact us at 
            <a href="mailto:support@cloudcomputing.com">support@cloudcomputing.com</a>
        </p>
        <p style="margin-top: 15px; font-size: 12px; color: #999;">
            © 2025 Cloud Computing 2025. All rights reserved.
        </p>
    </div>
</body>
</html>