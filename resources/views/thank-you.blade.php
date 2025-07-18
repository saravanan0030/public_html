
  <html>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thank You</title>
  <style>
    body {
      margin: 0;
      padding: 20px;
      min-height: 100vh;
      background: linear-gradient(135deg, #e0f7fa, #ffffff);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-align: center;
    }

    .checkmark {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background-color: #4CAF50;
      display: flex;
      align-items: center;
      justify-content: center;
      animation: popIn 0.8s ease-out forwards;
    }

    .checkmark::after {
      content: '✓';
      font-size: 40px;
      color: white;
      animation: checkFade 1s ease-out 0.3s forwards;
      opacity: 0;
    }

    h1 {
      font-size: 2.8rem;
      margin-top: 30px;
      background: linear-gradient(to right, #007BFF, #00C6FF);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      opacity: 0;
      transform: translateY(30px);
      animation: slideFadeIn 1s ease-out 1s forwards;
    }

    p {
      margin-top: 15px;
      font-size: 1.1rem;
      color: #555;
      opacity: 0;
      animation: fadeIn 1.2s ease-in 1.6s forwards;
    }

    @keyframes popIn {
      0% {
        transform: scale(0);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes checkFade {
      to {
        opacity: 1;
      }
    }

    @keyframes slideFadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <div class="checkmark"></div>
  <h1>Thank you for your submission!</h1>
  <p>We’ll get back to you.</p>
</body>
</html>

