let btn_show_modal      = document.getElementById("btn_show_modal");
let btn_add             = document.getElementById("add");
let btn_edit            = document.getElementById("edit");
let icon_edit           = document.getElementById("icon_edit");
let btn_delete         = document.getElementById("delete");
let textarea_message    = document.getElementById("message");
let id_nokta            = document.querySelectorAll(".id_nokta");
let form               = document.forms['form1'];
console.log(form);


btn_show_modal.addEventListener("click",()=>{
    btn_edit.style.display = 'none';
    btn_add.style.display = 'block';

    //Add attribute
    form.removeAttribute("action");
    form.setAttribute("action","add");

});

function rowNokta(nokta){
    btn_edit.style.display = 'block';
    btn_add.style.display = 'none';

    //Add attribute
    form.removeAttribute("action");
    form.setAttribute("action","update");
    
    //loop for add value id in inpute hidden
    for (let i = 0; i < id_nokta.length; i++) {
        const element = id_nokta[i];
        element.value = nokta.children[0].innerText;
    }
    textarea_message.innerText = nokta.children[1].innerText;
}