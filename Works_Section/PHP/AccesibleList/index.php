
<?php
      session_start();

      if (!isset($_SESSION["tasks"])) {
          $_SESSION["tasks"] = [];
      }

      $notifications = [];

      // Handle form submission
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST['clear'])) {
              $_SESSION["tasks"] = []; // Clear all tasks
              header("Location: " . $_SERVER['PHP_SELF']);
              exit(); // important!
          } elseif (isset($_POST['task'])) {
              $task = htmlspecialchars($_POST["task"]);
              if (!empty($task)) {
                  $_SESSION["tasks"][] = $task;
                  // Store task in query string as temp notification (optional)
                  $_SESSION["last_added_task"] = $task;

                  header("Location: " . $_SERVER['PHP_SELF']);
                  exit(); // important!
              }
          }
      }

  ?>

  <?php
    if (isset($_SESSION["last_added_task"])) {
        $notifications[] = $_SESSION["last_added_task"];
        unset($_SESSION["last_added_task"]); // clear it after showing
    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Accessible To-Do List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <a href="#main-content" class="skip-link">Skip to Main Content</a>
      <h1>Accessible To-Do List</h1>
    </header>
        <nav class="nav-links">
          <a href="#">Home</a>
          <a href="#">Instructions</a>
          <a href="#">My Tasks</a>
        </nav>

          <main id="maincontent" class="container">
            <section class="instructions">
              <h2>Instructions</h2>
              <p>Use the form below to tadd task. Use the keyboard (Tab or Enter)to navigate and interact.</p>
            </section>
          </main>

          <main class="container">
            <h2>My Tasks</h2>
            <p>New Task</p>
              <form id="todo-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="text" name="task" id="task" placeholder="Type a task and press Enter" required>
                <button type="submit" id="addTaskBtn">Add Task</button>
              </form>
              <section class="task-list">
                <ul> 
                  <?php
                      // Display all stored tasks from session
                      foreach ($_SESSION["tasks"] as $taskItem) {
                          echo "<li>" . htmlspecialchars($taskItem) . "</li>";}
                  ?>
                </ul>
                  
                  <?php
                    // Show a message for each task added
                    foreach ($notifications as $note) {
                        echo '<p class="notification">Task  "' . $note . '"  added.</p>';}
                  ?>
                
              </section>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                  <button type="submit" name="clear" id="clearAllBtn">Clear All Tasks</button>
                </form>
          </main>



  <footer>
    <p>&copy; 2025 Accessible Web Project</p>
  </footer>

<script src="script.js"></script>
</body>
</html>
