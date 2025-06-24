<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Accessible To-Do List</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #F5EFE7;
      color: #213555;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #3E5879;
      padding: 1rem 2rem;
      text-align: center;
      color: #F5EFE7;
      position: relative;
    }

    header h1 {
      margin: 0;
    }

    nav {
      margin-top: 0.5rem;
    }

    nav a {
      margin: 0 1rem;
      color: #F5EFE7;
      text-decoration: none;
      font-weight: bold;
    }

    a.skip-link {
    position: absolute;
    left: 1rem;   /* inside header */
    top: 1rem;
    background: #F5EFE7;
    color: #213555;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    transform: translateY(-200%);
    transition: transform 0.3s;
    }

    a.skip-link:focus {
    transform: translateY(0);
    }


    #toggleDarkMode {
      position: absolute;
      right: 2rem;
      top: 1rem;
      padding: 0.5rem 1rem;
      background: #D8C4B6;
      color: #213555;
      border: none;
      cursor: pointer;
      border-radius: 20px;
    }

    main {
      margin: 2rem auto;
      max-width: 800px;
      padding: 0 2rem;
    }

    section {
      margin-bottom: 2rem;
      background: #D8C4B6;
      padding: 1rem 2rem;
      border-radius: 8px;
      color: #213555;
    }

    h2 {
      margin-top: 0;
      color: #213555;
    }

    #taskForm {
      display: flex;
      gap: 1rem;
      margin-bottom: 1rem;
    }

    #newTask {
      flex: 1;
      padding: 0.5rem;
      border: 1px solid #3E5879;
      border-radius: 8px;
    }

    button {
      padding: 0.5rem 1rem;
      cursor: pointer;
      border: none;
      border-radius: 20px;
      background: #3E5879;
      color: #F5EFE7;
    }

    ul.task-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .task-list li {
      background: #F5EFE7;
      margin: 0.5rem 0;
      padding: 0.5rem 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 4px;
      color: #213555;
    }

    .task-actions {
      display: flex;
      gap: 0.5rem;
    }

    .task-actions button {
      background: #3E5879;
      color: #F5EFE7;
    }

    #notification {
      margin-top: 1rem;
      background: #F5EFE7;
      color: #213555;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      display: inline-block;
    }

    .dark-mode {
      background-color: #3E5879;
      color: #F5EFE7;
    }

    .dark-mode header {
      background-color: #213555;
      color: #F5EFE7;
    }

    .dark-mode section {
      background-color: #213555;
      color: #F5EFE7;
    }

    .dark-mode .task-list li {
      background: #D8C4B6;
      color: #213555;
    }

    .dark-mode .task-actions button {
      background: #F5EFE7;
      color: #213555;
    }

    .edit-input {
      flex: 1;
      padding: 0.3rem;
      border: 1px solid #3E5879;
      border-radius: 8px;
    }

  </style>
</head>
<body>
  <header>
    <a href="#maincontent" class="skip-link">Skip to Main Content</a>
    <h1>Accessible To-Do List</h1>
    <button id="toggleDarkMode">Want to Dark Mode?</button>
    <nav>
      <a href="#">Home</a>
      <a href="#">Instructions</a>
      <a href="#">My Tasks</a>
    </nav>
  </header>

  <main id="maincontent">
    <section id="instructionSection">
      <h2>Instructions</h2>
      <p>Use the form below to add tasks. Navigate using Tab and Enter. Use Edit and Delete at the end of each task. All tasks are saved automatically.</p>
    </section>

    <section id="taskSection">
      <h2>My Tasks</h2>
      <div id="taskForm">
        <input type="text" id="newTask" placeholder="New Task" />
        <button id="addTask">Add Task</button>
      </div>
      <ul class="task-list" id="taskList"></ul>
      <div id="notification"></div>
    </section>
  </main>

  <script>
    const taskInput = document.getElementById('newTask');
    const addTaskBtn = document.getElementById('addTask');
    const taskList = document.getElementById('taskList');
    const notification = document.getElementById('notification');
    const toggleDarkMode = document.getElementById('toggleDarkMode');

    let tasks = JSON.parse(localStorage.getItem('tasks')) || [];

    function saveTasks() {
      localStorage.setItem('tasks', JSON.stringify(tasks));
    }

    function showNotification(message) {
      notification.textContent = message;
    }

    function renderTasks() {
      taskList.innerHTML = '';
      tasks.forEach((task, index) => {
        const li = document.createElement('li');

        const span = document.createElement('span');
        span.textContent = task;
        span.style.flex = '1';

        const actions = document.createElement('div');
        actions.className = 'task-actions';

        const editBtn = document.createElement('button');
        editBtn.textContent = 'Edit';
        editBtn.tabIndex = 0;

        const delBtn = document.createElement('button');
        delBtn.textContent = 'Delete';
        delBtn.tabIndex = 0;

        editBtn.addEventListener('click', () => startEdit(index, span, actions));
        editBtn.addEventListener('keydown', (e) => {
          if (e.key === 'Enter') startEdit(index, span, actions);
        });

        delBtn.addEventListener('click', () => {
          tasks.splice(index, 1);
          saveTasks();
          renderTasks();
          showNotification('Task deleted.');
        });
        delBtn.addEventListener('keydown', (e) => {
          if (e.key === 'Enter') {
            tasks.splice(index, 1);
            saveTasks();
            renderTasks();
            showNotification('Task deleted.');
          }
        });

        actions.appendChild(editBtn);
        actions.appendChild(delBtn);

        li.appendChild(span);
        li.appendChild(actions);
        taskList.appendChild(li);
      });
    }

    function startEdit(index, span, actions) {
      const input = document.createElement('input');
      input.type = 'text';
      input.value = tasks[index];
      input.className = 'edit-input';

      const saveBtn = document.createElement('button');
      saveBtn.textContent = 'Save';

      saveBtn.addEventListener('click', () => {
        tasks[index] = input.value.trim();
        saveTasks();
        renderTasks();
        showNotification('Task edited.');
      });

      saveBtn.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
          tasks[index] = input.value.trim();
          saveTasks();
          renderTasks();
          showNotification('Task edited.');
        }
      });

      span.replaceWith(input);
      actions.replaceChildren(saveBtn);
      input.focus();
    }

    addTaskBtn.addEventListener('click', () => {
      const task = taskInput.value.trim();
      if (task) {
        tasks.push(task);
        saveTasks();
        renderTasks();
        showNotification(`Task "${task}" added.`);
        taskInput.value = '';
        taskInput.focus();
      }
    });

    taskInput.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') {
        addTaskBtn.click();
      }
    });

    toggleDarkMode.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
    });

    renderTasks();
  </script>
</body>
</html>
