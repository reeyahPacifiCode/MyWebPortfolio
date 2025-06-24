<?php
$badWords = [
    'sample', 'bad', 'bitch', 'fucked up', 'fuck', 'shit',
    'asshole', 'bastard', 'damn', 'dick', 'piss', 'slut',
    'whore', 'crap', 'cock', 'pussy', 'motherfucker', 'bloody'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';
    $containsBadWords = false;

    foreach ($badWords as $badWord) {
        $replacement = str_repeat('*', strlen($badWord));
        if (stripos($title, $badWord) !== false || stripos($content, $badWord) !== false) {
            $containsBadWords = true;
        }
        $title = str_ireplace($badWord, $replacement, $title);
        $content = str_ireplace($badWord, $replacement, $content);
    }
    
    $submitted = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Post & Book Content</title>
  <style>
    :root {
      --main-bg: #E2E0C8;
      --box-bg: #A7B49E;
      --header-color: #5C7285;
      --accent: #818C78;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: var(--main-bg);
      color: #333;
      font-size: 14px;
    }

    .container {
      display: flex;
      min-height: 100vh;
      flex-wrap: wrap;
      justify-content: center; /* Center the whole layout */
      gap: 20px; /* Space between left and right */
    }

    .left, .right {
      flex: 1 1 400px;  /* Flex basis to limit width */
      max-width: 500px; /* limit maximum width */
      padding: 20px;
      box-sizing: border-box;
    }

    .left {
      background: var(--box-bg);
    }

    .right {
      background: #fff;
      border-left: 4px solid var(--header-color);
    }

    h1 {
      color: var(--header-color);
      font-size: 20px;
      margin-bottom: 10px;
    }

    label {
      font-weight: bold;
      margin-bottom: 3px;
      display: block;
      color: var(--header-color);
      font-size: 13px;
    }

    input[type="text"], textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 13px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    textarea {
      min-height: 100px;
    }

    button {
      background: var(--header-color);
      color: white;
      padding: 8px 14px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      font-size: 13px;
    }

    button:hover {
      background: var(--accent);
    }

    .preview {
      background: #fff;
      padding: 15px;
      border-radius: 5px;
      margin-top: 15px;
    }

    .preview h2 {
      margin-top: 0;
      color: var(--header-color);
      font-size: 16px;
    }

    .notification {
      background: #fff3cd;
      color: #856404;
      padding: 8px 12px;
      border: 1px solid #ffeeba;
      border-radius: 4px;
      margin-bottom: 15px;
      font-size: 13px;
    }

    .book-cover {
      width: 100%;
      max-width: 350px; /* Larger book cover */
      display: block;
      border-radius: 5px;
      margin: 0 auto 20px auto;
    }

    .book-content {
      background: var(--main-bg);
      padding: 15px;
      border-radius: 5px;
    }

    .book-content h2 {
      color: var(--header-color);
      margin-top: 0;
      font-size: 18px;
    }

    .book-content p {
      line-height: 1.6;
      margin-bottom: 12px;
    }

    @media(max-width: 900px) {
      .container {
        flex-direction: column;
        align-items: center;
      }
      .right {
        border-left: none;
        border-top: 4px solid var(--header-color);
      }
      .book-cover {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- LEFT SIDE: Post Form -->
    <div class="left">
      <h1>Tell Us Something</h1>

      <?php if (isset($submitted) && $containsBadWords): ?>
        <div class="notification">
          Some inappropriate words were detected and filtered.
        </div>
      <?php endif; ?>

      <form id="postForm" method="post">
        <label for="title">Give Your Post a Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="content">What’s on Your Mind?:</label>
        <textarea id="content" name="content" required></textarea>

        <button type="submit">Submit</button>
      </form>

      <?php if (isset($submitted)): ?>
        <div class="preview">
          <h2>Preview of Your Post:</h2>
          <h3><?php echo htmlspecialchars($title); ?></h3>
          <p><?php echo nl2br(htmlspecialchars($content)); ?></p>
        </div>
      <?php endif; ?>
    </div>

    <!-- RIGHT SIDE: Book Cover + Content -->
    <div class="right">
      <img src="./HG.jpg" alt="Book Cover" class="book-cover">
      <div class="book-content">
        <h2>Book Chapter 1: The Reaping</h2>
        <p>
          The sun barely broke through the dense grey clouds hanging over District 12.
          In the dusty square, children and families gathered, their faces a mixture of fear and numb acceptance. 
          Among them stood Katniss Everdeen, her braid brushing against the back of her worn dress as she kept a 
          protective eye on her sister, Prim.
        </p>
        <p>
          Rumors whispered through the crowd — who would be chosen this year to fight in the Capitol’s 
          cruel spectacle known as the Hunger Games? Every heartbeat in the square seemed to echo the 
          unspoken truth: survival was a privilege not everyone could claim.
        </p>
        <p>
          When Effie Trinket finally ascended the stage with her painted smile and brightly colored wig, 
          the tension crackled like a live wire. A name was drawn, silence fell, and in that moment, 
          Katniss knew her life would never be the same.
        </p>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('postForm').addEventListener('submit', function(e) {
      const badWords = <?php echo json_encode($badWords); ?>;
      let title = document.getElementById('title').value;
      let content = document.getElementById('content').value;
      let hasBadWords = false;

      badWords.forEach(badWord => {
        const regex = new RegExp(badWord, 'gi');
        const replacement = '*'.repeat(badWord.length);
        if (regex.test(title) || regex.test(content)) {
          hasBadWords = true;
        }
        title = title.replace(regex, replacement);
        content = content.replace(regex, replacement);
      });

      document.getElementById('title').value = title;
      document.getElementById('content').value = content;

      if (hasBadWords) {
        alert("Some inappropriate words were detected and filtered.");
      }
    });
  </script>
</body>
</html>
