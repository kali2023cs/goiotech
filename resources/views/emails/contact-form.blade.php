<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>

    <p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Service Type:</strong> {{ $data['service_type'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>

    <p>This message was sent from the contact form on your website.</p>
</body>
</html>
