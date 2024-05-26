let currentDateElement = document.getElementById("currentDate");

 let today = new Date();
 
 let options = { year: 'numeric', month: 'long', day: 'numeric' };
        
 let formattedDate = today.toLocaleDateString('en-US', options);
 currentDateElement.textContent = formattedDate;
 const btnclick =() =>{
 alert(`Авторизуйтесь будь ласка`);
 }




document.addEventListener('DOMContentLoaded', function() {
    const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const currentDiv = document.getElementById('CurrentDiv');

    days.forEach(day => {
        const dayDiv = document.createElement('div');
        dayDiv.classList.add('main_div');
        dayDiv.id = day + 'Main';

        document.getElementById(day).addEventListener('click', function() {
            currentDiv.innerHTML = ''; // Clear current content
            const currentDay = document.createElement('p');
            currentDay.textContent = day;
            currentDay.classList.add('CurrentDay');
            
            dayDiv.innerHTML = ''; // Clear dayDiv content
            dayDiv.appendChild(currentDay);
            dayDiv.appendChild(createAddTaskIcon(dayDiv));

            currentDiv.appendChild(dayDiv);
        });
    });

    function createAddTaskIcon(dayDiv) {
        const addTaskIcon = document.createElement('div');
        addTaskIcon.id = 'add_task';
        const ul = document.createElement('ul');
        ul.id = 'Add_Task_Icon';
        const li = document.createElement('li');
        const a = document.createElement('a');
        a.textContent = '+';
        li.appendChild(a);
        ul.appendChild(li);
        addTaskIcon.appendChild(ul);

        addTaskIcon.addEventListener('click', function() {
            const newBlock = document.createElement('div');
            newBlock.classList.add('block');

            const taskInput = document.createElement('input');
            taskInput.type = 'text';
            taskInput.placeholder = 'Enter task (max 40 characters)';
            taskInput.maxLength = 40; 
            taskInput.classList.add('taskInput');

            const warningMessage = document.createElement('p');
            warningMessage.id = 'warningMessage';
            warningMessage.textContent = 'Заповніть Усі поля';
            warningMessage.classList.add('warningMessage');
            warningMessage.style.display = 'none'; // Hide initially

            const removeBtn = document.createElement('button');
            removeBtn.textContent = '←';
            removeBtn.classList.add('removeBtn');

            removeBtn.addEventListener('click', function() {
                newBlock.remove();
                document.getElementById('overlay').remove(); // Remove overlay
            });

            const createBtn = document.createElement('button');
            createBtn.textContent = 'Create';
            createBtn.classList.add('CreateBtn');

            createBtn.addEventListener('click', function() {
                const taskText = taskInput.value;
                if (taskText) {
                    
                        newBlock.remove();

                    const task = document.createElement('div');
                    task.classList.add('Task');

                    const Div_taskText = document.createElement('div');
                    Div_taskText.textContent = taskText;
                    Div_taskText.classList.add('Div_taskText');

                    const Confirm = document.createElement('button');
                    Confirm.textContent = ' ';
                    Confirm.classList.add('Confirm');

                    Confirm.addEventListener('click', function (){
                        Div_taskText.classList.toggle('completed');
                        task.classList.add('fade-out');
                        setTimeout(() => {
                            task.remove();
                        }, 2000); // Time in milliseconds
                    });

                    
                    task.appendChild(Div_taskText);
                    task.appendChild(Confirm);
                    dayDiv.appendChild(task);
                    document.getElementById('overlay').remove(); 

                    
                } else {
                    warningMessage.style.display = 'block';
                }
            });

            newBlock.appendChild(removeBtn);
            newBlock.appendChild(createBtn);
            newBlock.appendChild(taskInput);
            newBlock.appendChild(warningMessage);

            const overlay = document.createElement('div');
            overlay.id = 'overlay';
            document.body.appendChild(overlay);

            dayDiv.appendChild(newBlock);
        });

        return addTaskIcon;
    }
});
