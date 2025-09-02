<?php
session_start();
$student = isset($_SESSION['student_name']) ? $_SESSION['student_name'] : "Student";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About | Student Portal</title>
  <style>
    :root {
      --bg: #f4f7fb;
      --primary: #4a90e2;
      --primary-dark: #357abd;
      --accent: #f5a623;
      --text: #2e3a59;
      --muted: #6c7a96;
      --card-bg: #fff;
      --radius: 14px;
      --shadow: 0 8px 20px rgba(0,0,0,0.08);
    }
    body {
      font-family: "Segoe UI", Roboto, sans-serif;
      background: var(--bg);
      margin: 0;
      color: var(--text);
      line-height: 1.6;
    }
    header {
      background: var(--primary);
      color: white;
      padding: 18px 24px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: var(--shadow);
    }
    header h1 { font-size: 20px; margin: 0; }
    nav a {
      color: white;
      text-decoration: none;
      margin-left: 18px;
      font-weight: 500;
      transition: opacity .2s;
    }
    nav a:hover { opacity: 0.8; }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background: var(--card-bg);
      padding: 30px;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }
    h2 { color: var(--primary); margin-bottom: 15px; }
    p { color: var(--muted); margin-bottom: 20px; }
    a.btn {
      display: inline-block;
      padding: 10px 16px;
      background: var(--primary);
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      font-weight: 600;
      transition: background .2s;
    }
    a.btn:hover { background: var(--primary-dark); }

    footer {
      margin-top: 40px;
      text-align: center;
      padding: 16px;
      background: var(--primary);
      color: white;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <header>
    <h1>🎓 Student Portal</h1>
    <nav>
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="#">Courses</a>
      <a href="#">Profile</a>
    </nav>
  </header>

  <div class="container">
    <h2>About This Portal</h2>
    <p>This Student Portal was created for <b>Experiment 4 demonstration</b>.  
       It provides access to courses, assignments, grades, and discussions for students.</p>
    <p>Currently logged in as: <b><?php echo htmlspecialchars($student); ?></b></p>
    <a href="index.php" class="btn">⬅ Back to Home</a>
  </div>

  <footer>
    © <?php echo date("Y"); ?> Student Portal • Powered by PHP & Azure
  </footer>
</body>
</html>
