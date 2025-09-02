<?php
// Start session
session_start();

// For demo: set student name (in real app this comes from login system / DB)
if (!isset($_SESSION['student_name'])) {
    $_SESSION['student_name'] = "John Doe";
}
$student = $_SESSION['student_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Portal</title>
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
    *{box-sizing:border-box;margin:0;padding:0;}
    body {
      font-family: "Segoe UI", Roboto, sans-serif;
      background: var(--bg);
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
    header h1 {
      font-size: 20px;
      margin: 0;
    }
    nav a {
      color: white;
      text-decoration: none;
      margin-left: 18px;
      font-weight: 500;
      transition: opacity .2s;
    }
    nav a:hover { opacity: 0.8; }

    .hero {
      max-width: 1100px;
      margin: 40px auto;
      padding: 40px 20px;
      background: var(--card-bg);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      display: flex;
      align-items: center;
      gap: 30px;
      flex-wrap: wrap;
    }
    .hero-text { flex: 1; }
    .hero-text h2 {
      font-size: 32px;
      margin-bottom: 14px;
    }
    .hero-text p { color: var(--muted); margin-bottom: 18px; }
    .btn {
      padding: 12px 18px;
      border-radius: 8px;
      border: none;
      font-weight: 600;
      cursor: pointer;
      transition: background .2s;
    }
    .btn-primary {
      background: var(--primary);
      color: #fff;
    }
    .btn-primary:hover { background: var(--primary-dark); }
    .btn-accent {
      background: var(--accent);
      color: #fff;
      margin-left: 10px;
    }

    .features {
      max-width: 1100px;
      margin: 30px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }
    .card {
      background: var(--card-bg);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 20px;
      transition: transform .15s ease, box-shadow .15s ease;
    }
    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }
    .card h3 { margin-bottom: 10px; color: var(--primary); }
    .card p { color: var(--muted); }

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
      <a href="#">Home</a>
      <a href="#">Courses</a>
      <a href="#">Profile</a>
      <a href="#">Logout</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h2>Welcome, <?php echo htmlspecialchars($student); ?> 👋</h2>
      <p>Access all your courses, assignments, grades, and resources in one place. Stay on track with your learning journey.</p>
      <button class="btn btn-primary">View Courses</button>
      <button class="btn btn-accent">My Profile</button>
    </div>
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png" alt="Student illustration" width="220" />
  </section>

  <section class="features">
    <div class="card">
      <h3>📚 Courses</h3>
      <p>Browse and access all enrolled courses with study materials and lectures.</p>
    </div>
    <div class="card">
      <h3>📝 Assignments</h3>
      <p>Check deadlines, submit work, and track your progress on tasks easily.</p>
    </div>
    <div class="card">
      <h3>📊 Grades</h3>
      <p>View performance analytics, track improvements, and identify strengths.</p>
    </div>
    <div class="card">
      <h3>💬 Discussion</h3>
      <p>Join course forums, ask questions, and collaborate with peers.</p>
    </div>
  </section>

  <footer>
    © <?php echo date("Y"); ?> Student Portal • Powered by PHP & Azure
  </footer>
</body>
</html>
