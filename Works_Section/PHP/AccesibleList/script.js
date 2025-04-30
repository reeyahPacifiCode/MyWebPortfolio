document.addEventListener("DOMContentLoaded", function () {
    const taskInput = document.getElementById("task");
  
    taskInput.addEventListener("keypress", function (e) {
      if (e.key === "Enter") {
        e.preventDefault();
        document.getElementById("todo-form").submit();
      }
    });
  });

  
  document.addEventListener("DOMContentLoaded", function () {
    const taskInput = document.getElementById("task");
  
    taskInput.addEventListener("keypress", function (e) {
      if (e.key === "Enter") {
        e.preventDefault();
        document.getElementById("todo-form").submit();
      }
    });
  });
  


  document.addEventListener('DOMContentLoaded', function() {
    const clearButton = document.getElementById('clear-btn');
    const taskList = document.getElementById('task-list');

    clearButton.addEventListener('click', function() {
      // Clear all tasks by setting innerHTML to an empty string
      taskList.innerHTML = '';
    });
  });

