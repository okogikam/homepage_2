function addTask(id){
   
    const taskDiv = document.querySelector(id);
    
     const addTask = new TaskProject({
        taskDiv: taskDiv
     })

     console.log(taskDiv);
    addTask.init();
}

window.TaskDatabase = [];