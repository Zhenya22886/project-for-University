let currentDateElement = document.getElementById("currentDate");

        let today = new Date();

        let options = { year: 'numeric', month: 'long', day: 'numeric' };
        let formattedDate = today.toLocaleDateString('en-US', options);

        currentDateElement.textContent = formattedDate;
        const btnclick =() =>{
                alert(`Зареєструйтесь будь ласка`);
        }