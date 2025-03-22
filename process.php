<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visa Check Result</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-image: url('https://images.unsplash.com/photo-1553729459-efe14ef6055d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      max-width: 500px;
      width: 100%;
      background: linear-gradient(135deg, rgba(0, 0, 0, 0.85), rgba(34, 34, 34, 0.9));
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0px 15px 50px rgba(0, 0, 0, 0.9);
      text-align: center;
    }
    .title {
      font-size: 28px;
      color: #FFD700;
      text-shadow: 4px 4px 10px rgba(255, 215, 0, 0.7);
      margin-bottom: 25px;
      font-weight: bold;
    }
    .message {
      font-size: 18px;
      margin-top: 20px;
      text-shadow: 2px 2px 6px rgba(255, 255, 255, 0.8);
    }
  </style>
</head>
<body>
  <div class="container">
    <p class="title">🌍 Visa Check Result ✈</p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $country = $_POST["country"];

      if (empty($country)) {
        echo '<p class="message" style="color: #FF6347;">Please select a country to check visa requirements.</p>';
      } else {
        $colors = [
          "USA" => "#1E90FF",
          "Canada" => "#DC143C",
          "India" => "#FF8C00",
          "UK" => "#32CD32",
          "Australia" => "#FFD700"
        ];

        $color = $colors[$country] ?? "#FF6347"; // Default color if country not found
        echo '<p class="message" style="color: ' . $color . ';">Visa requirement information for ' . $country . ' will appear here soon!</p>';
      }
    } else {
      echo '<p class="message" style="color: #FF6347;">Invalid request. Please go back and try again.</p>';
    }
    ?>
    <a href="index.html" style="color: #FFD700; text-decoration: none; font-size: 18px; margin-top: 20px; display: inline-block;">← Go Back</a>
  </div>
</body>
</html>