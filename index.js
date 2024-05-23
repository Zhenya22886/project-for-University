let currentDateElement = document.getElementById("currentDate");

 let today = new Date();
 
 let options = { year: 'numeric', month: 'long', day: 'numeric' };
        
 let formattedDate = today.toLocaleDateString('en-US', options);
 currentDateElement.textContent = formattedDate;
 const btnclick =() =>{
 alert(`Зареєструйтесь будь ласка`);
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

            const removeBtn = document.createElement('button');
            removeBtn.textContent = '←';
            removeBtn.classList.add('removeBtn');

            removeBtn.addEventListener('click', function() {
                newBlock.remove();
            });

            const createBtn = document.createElement('button');
            createBtn.textContent = 'Create';
            createBtn.classList.add('CreateBtn');

            createBtn.addEventListener('click', function() {
                newBlock.remove();
                const task = document.createElement('div');
                task.classList.add('Task');
                dayDiv.appendChild(task);
            });

            newBlock.appendChild(removeBtn);
            newBlock.appendChild(createBtn);

            dayDiv.appendChild(newBlock);
        });

        return addTaskIcon;
    }
});
