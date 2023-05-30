// //Selectors
// const todoInput = document.querySelector(".todo-input");
// const todoButton = document.querySelector(".todo-button");
// const todoList = document.querySelector(".todo-list");
// const filterOption = document.querySelector(".filter-todo");



// //Event Listeners
// document.addEventListener("DOMContentLoaded", getTodos);
// todoButton.addEventListener("click", addTodo);
// todoList.addEventListener("click", deleteCheck);
// filterOption.addEventListener("click", filterTodo);

    

// // Functions
// function addTodo(event){
//     // PREVENT FORM FROM SUBMITTING
//     event.preventDefault();
//     // TODO DIV
//     const todoDiv = document.createElement("div");
//     todoDiv.classList.add("todo");
//     // CREATE LI
//     const newTodo = document.createElement('li');
//     newTodo.innerText = todoInput.value;
//     newTodo.classList.add('todo-item');
//     todoDiv.appendChild(newTodo);
//     // ADD TODO TO LOCALSTORAGE
//     saveLocaltodos(todoInput.value);

//     // CHECK MARK BUTTON
//     const completedButton = document.createElement('button');
//     completedButton.innerHTML = '<i class="fas fa-check"></i>';
//     completedButton.classList.add("complete-btn");
//     todoDiv.appendChild(completedButton);

//     // EDIT BUTTON
//     const editButton = document.createElement('button');
//     editButton.innerHTML = '<i class="fas fa-edit"></i>';
//     editButton.classList.add("edit-btn");
//     todoDiv.appendChild(editButton);

//     // CHECK DELETE BUTTON
//     const deleteButton = document.createElement('button');
//     deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
//     deleteButton.classList.add("delete-btn");
//     todoDiv.appendChild(deleteButton);
//     // APPEND TO LIST
//     todoList.appendChild(todoDiv);
//     // CLEAR TODO INPUT VALUE
//     todoInput.value = "";
// }

// function deleteCheck(e){
//     const item = e.target;
//     // DELETE TODO
//     if (item.classList[0] === "delete-btn") {
//         const todo = item.parentElement;
//         removeLocalTodos(todo);
//         todo.remove();
//     }

//     // CHECK MARK
//     if(item.classList[0] === "complete-btn"){
//         const todo = item.parentElement;
//         todo.classList.toggle("completed");
//     }

//     // EDIT TODO
//     if(item.classList[0] === "edit-btn"){
//         const todo = item.parentElement;
//         todo.classList.toggle("edit");
//     }
// }

// function filterTodo(e){
//     const todos = todoList.childNodes;
//     todos.forEach(function(todo){
//         switch(e.target.value){
//             case "all":
//                 todo.style.display = 'flex';
//                 break;
//             case "completed":
//                 if(todo.classList.contains("completed")){todo.style.display = 'flex';
//             }else{
//                 todo.style.display = "none";
//             }
//                 break;
//             case "pending":
//                 if(!todo.classList.contains("completed")){
//                 todo.style.display = 'flex';
//             }else{
//                 todo.style.display = "none";
//             }
//                 break;
//         }

//     });
// }

// function saveLocaltodos(todo){
//     // CHECK EXISTING LOCAL STORAGE
//     if(localStorage.getItem('todos') === null){
//         todos = [];
//     }else{
//         todos = JSON.parse(localStorage.getItem('todos'));
//     }

//     todos.push(todo);
//     localStorage.setItem("todos", JSON.stringify(todos));
// }

// function getTodos(){
//         // CHECK EXISTING LOCAL STORAGE
//         let todos;
//         if(localStorage.getItem('todos') === null){
//             todos = [];
//         }else{
//             todos = JSON.parse(localStorage.getItem('todos'));
//         }
//         todos.forEach(function(todo){
//             // Todo DIV
//             const todoDiv = document.createElement("div");
//             todoDiv.classList.add("todo");
//             // Create LI
//             const newTodo = document.createElement('li');
//             newTodo.innerText = todo;
//             newTodo.classList.add('todo-item');
//             todoDiv.appendChild(newTodo);

//             // CHECK MARK BUTTON
//             const completedButton = document.createElement('button');
//             completedButton.innerHTML = '<i class="fas fa-check"></i>';
//             completedButton.classList.add("complete-btn");
//             todoDiv.appendChild(completedButton);

//             // EDIT BUTTON
//             const editButton = document.createElement('button');
//             editButton.innerHTML = '<i class="fas fa-edit"></i>';
//             editButton.classList.add("edit-btn");
//             todoDiv.appendChild(editButton);

//             // CHECK DELETE BUTTON
//             const deleteButton = document.createElement('button');
//             deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
//             deleteButton.classList.add("delete-btn");
//             todoDiv.appendChild(deleteButton);
//             // APPEND TO LIST
//             todoList.appendChild(todoDiv);
//         });
// }

// function removeLocalTodos(todo){
//     // CHECK EXISTING LOCAL STORAGE
//     let todos;
//     if(localStorage.getItem('todos') === null){
//         todos = [];
//     }else{
//         todos = JSON.parse(localStorage.getItem('todos'));
//     }
//     const todoIndex = todo.children[0].innerText;
//     todos.splice(todos.indexOf(todoIndex), 1);
//     localStorage.setItem("todos", JSON.stringify(todos));
// }



showtask();
let addtaskinput = document.getElementById("addtaskinput");
let addtaskbtn = document.getElementById("addtaskbtn");

addtaskbtn.addEventListener("click", function(){
    addtaskinputval = addtaskinput.value;
    if(addtaskinputval.trim()!=0){
        let webtask = localStorage.getItem("localtask");
        if(webtask == null){
            taskObj = [];
        }
        else{
            taskObj = JSON.parse(webtask);
        }
        taskObj.push({'task_name':addtaskinputval, 'completeStatus':false});
		// console.log(taskObj, 'Ashendra');
        localStorage.setItem("localtask", JSON.stringify(taskObj));
        addtaskinput.value = '';
    }
    showtask();
})

// showtask
function showtask(){
    let webtask = localStorage.getItem("localtask");
    if(webtask == null){
        taskObj = [];
    }
    else{
        taskObj = JSON.parse(webtask);
    }
    let html = '';
    let addedtasklist = document.getElementById("addedtasklist");
    taskObj.forEach((item, index) => {

        if(item.completeStatus==true){
            taskCompleteValue = `<td class="completed">${item.task_name}</td>`;
        }else{
            taskCompleteValue = `<td>${item.task_name}</td>`;
        }
        html += `<tr>
                    <th scope="row">${index+1}</th>
                    ${taskCompleteValue}
                    <td><button type="button" onclick="edittask(${index})" class="text-primary"><i class="fa fa-edit"></i>Edit</button></td>
                    <td><button type="button" class="text-success" id=${index}><i class="fa fa-check-square-o"></i>Complete</button></td>
                    <td><button type="button" onclick="deleteitem(${index})" class="text-danger"><i class="fa fa-trash"></i>Delete</button></td>
                </tr>`;
    });
    addedtasklist.innerHTML = html;
}

// edittask
function edittask(index){
    let saveindex = document.getElementById("saveindex");
    let addtaskbtn = document.getElementById("addtaskbtn");
    let savetaskbtn = document.getElementById("savetaskbtn");
    saveindex.value = index;
    let webtask = localStorage.getItem("localtask");
    let taskObj = JSON.parse(webtask); 
    
    addtaskinput.value = taskObj[index]['task_name'];
    addtaskbtn.style.display="none";
    savetaskbtn.style.display="block";
}

// savetask
let savetaskbtn = document.getElementById("savetaskbtn");
savetaskbtn.addEventListener("click", function(){
    let addtaskbtn = document.getElementById("addtaskbtn");
    let webtask = localStorage.getItem("localtask");
    let taskObj = JSON.parse(webtask); 
    let saveindex = document.getElementById("saveindex").value;
    
    for (keys in taskObj[saveindex]) {
        if(keys == 'task_name'){
            taskObj[saveindex].task_name = addtaskinput.value;
        }
      }
    // taskObj[saveindex] = {'task_name':addtaskinput.value, 'completeStatus':false} ;
  //  taskObj[saveindex][task_name] = addtaskinput.value;
    savetaskbtn.style.display="none";
    addtaskbtn.style.display="block";
    localStorage.setItem("localtask", JSON.stringify(taskObj));
    addtaskinput.value='';
    showtask();
})
// deleteitem
function deleteitem(index){
    let webtask = localStorage.getItem("localtask");
    let taskObj = JSON.parse(webtask);
    taskObj.splice(index, 1);
    localStorage.setItem("localtask", JSON.stringify(taskObj));
    showtask();
}

//complete task
/* function completetask(index){
    let webtask = localStorage.getItem("localtask");
    let taskObj = JSON.parse(webtask);
    taskObj[index] = '<span style="text-decoration:line-through">' + taskObj[index] + '</span>';
    let addedtasklist = document.getElementById("addedtasklist");
    addedtasklist.addEventListener("click", function(e){
        console.log(addedtasklist)
    })
    localStorage.setItem("localtask", JSON.stringify(taskObj));
    showtask();
} */

// complete task
let addedtasklist = document.getElementById("addedtasklist");
    addedtasklist.addEventListener("click", function(e){
       // console.log(e);
        
        // showtask();
        let webtask = localStorage.getItem("localtask");
        let taskObj = JSON.parse(webtask);
        
        let mytarget = e.target;
        if(mytarget.classList[0] === 'text-success'){
        let mytargetid = mytarget.getAttribute("id");
        
        
        // let taskValue = taskObj[mytargetid]['task_name'];
        
        mytargetpresibling = mytarget.parentElement.previousElementSibling.previousElementSibling;
            
            // let mynewelem = mytargetpresibling.classList.toggle("completed");
            // taskObj.splice(mytargetid,1,mynewelem);
            for (keys in taskObj[mytargetid]) {
                if(keys == 'completeStatus' && taskObj[mytargetid][keys]==true){
                    taskObj[mytargetid].completeStatus = false;
                   // taskObj[mytargetid] = {'task_name':taskValue, 'completeStatus':false};
                }else if(keys == 'completeStatus' && taskObj[mytargetid][keys]==false){
                    taskObj[mytargetid].completeStatus = true;
                    //taskObj[mytargetid] = {'task_name':taskValue, 'completeStatus':true};
                }
              }
        //}
       // showtask();        
        localStorage.setItem("localtask", JSON.stringify(taskObj));
        showtask();
    }
    })

    



// deleteall
let deleteallbtn = document.getElementById("deleteallbtn");
deleteallbtn.addEventListener("click", function(){
    let savetaskbtn = document.getElementById("savetaskbtn");
    let addtaskbtn = document.getElementById("addtaskbtn");
    let webtask = localStorage.getItem("localtask");
    let taskObj = JSON.parse(webtask);
    if(webtask == null){
        taskObj = [];
    }
    else{
        taskObj = JSON.parse(webtask);
        taskObj = [];
    }
    savetaskbtn.style.display="none";
    addtaskbtn.style.display="block";
    localStorage.setItem("localtask", JSON.stringify(taskObj));
    showtask();

})


// serachlist
let searchtextbox = document.getElementById("searchtextbox");
searchtextbox.addEventListener("input", function(){
    let trlist = document.querySelectorAll("tr");
    Array.from(trlist).forEach(function(item){
        let searchedtext = item.getElementsByTagName("td")[0].innerText;
        let searchtextboxval = searchtextbox.value;
        let re = new RegExp(searchtextboxval, 'gi');
        if(searchedtext.match(re)){
            item.style.display="table-row";
        }
        else{
            item.style.display="none";
        }
    })
})