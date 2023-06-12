class TaskProject{
    constructor (config){
        this.taskList = config.taskDiv;
        this.dataTask = config.data || [];
    }

    addTask(){
        TaskDatabase.push(this.dataTask);
    }

    drawTask(){
        
        const tr = document.createElement("tr");
        const tdname = document.createElement("td");
        const tdstatus = document.createElement("td");
        const tdoption = document.createElement("td");

        tdname.innerHTML = `
        <input type="text" name="task_name[]" value="" class="form-control"></input>`;
        tdstatus.innerHTML =`
        <select name="task_status[]" class="form-control custom-select">
        <option value="" selected>--Pilih--</option>
        <option value="0" >Progres</option>
        <option value="1" >Done</option>
        </select>`;
        tdoption.innerHTML = `<div class="btn-group btn-group-sm">
        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
        </div>`;
        tdoption.setAttribute("class","text-right py-0 align-middle");

        tr.append(tdname);
        tr.append(tdstatus);
        tr.append(tdoption);

        this.taskList.append(tr);
       
    }

    init(){
        this.addTask();

        this.drawTask();
        console.log(TaskDatabase)
    }
}