<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Chat System UI</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }

    .chat-container {
      max-width: 600px;
      margin: 50px auto;
    }

    .chat-box {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
      overflow-y: auto;
      max-height: 400px;
    }

    .message {
      margin-bottom: 15px;
    }

    .user .message {
      text-align: right;
    }

    .message .sender {
      font-weight: bold;
      color: #007bff; /* User color */
    }

    .message .timestamp {
      font-size: 0.8rem;
      color: #6c757d;
    }

    .message .text {
      color: #333;
    }

    .seller .message {
      text-align: left;
    }

    .input-group {
      margin-top: 20px;
    }

    .form-control {
      border-radius: 5px;
    }

    .btn-primary {
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="container chat-container">
  <div class="chat-box" id="chatBox">
    <!-- Example messages -->
    <div class="message user">
      <div class="sender">User 1</div>
      <div class="timestamp">12:30 PM</div>
      <div class="text">Hello there!</div>
    </div>
    <div class="message seller">
      <div class="sender">Seller</div>
      <div class="timestamp">12:35 PM</div>
      <div class="text">Hi! How can I help you?</div>
    </div>
    <!-- Add more messages as needed -->
  </div>

  <div class="input-group">
    <input type="text" class="form-control" placeholder="Type your message...">
    <button class="btn btn-primary">Send</button>
  </div>
</div>

<!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
