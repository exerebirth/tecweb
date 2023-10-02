const taskInput = document.getElementById('task');
const taskList = document.getElementById('taskList');

function addTask() {
    const taskText = taskInput.value.trim();
    if (taskText !== '') {
        const li = document.createElement('li');
        li.innerHTML = `
            ${taskText}
            <button onclick="completeTask(this)">Completar</button>
            <button onclick="deleteTask(this)">Eliminar</button>
        `;
        taskList.appendChild(li);
        taskInput.value = '';
    }
}

function completeTask(button) {
    const taskItem = button.parentElement;
    taskItem.classList.toggle('completed');
}

function deleteTask(button) {
    const taskItem = button.parentElement;
    taskList.removeChild(taskItem);
}
