btn_show_modal      = document.getElementById("btn_show_modal");
btn_add             = document.getElementById("add");
btn_edit            = document.getElementById("edit");
icon_edit           = document.getElementById("icon_edit");
btn_delete         = document.getElementById("delete");
textarea_message    = document.getElementById("message");
id_nokta            = document.querySelectorAll(".id_nokta");


btn_show_modal.addEventListener("click",()=>{
    btn_edit.style.display = 'none';
    btn_add.style.display = 'block';
});
// icon_edit.addEventListener("click",()=>{
//     btn_edit.style.display = 'block';
//     btn_add.style.display = 'none';
// })

function rowNokta(nokta){
    btn_edit.style.display = 'block';
    btn_add.style.display = 'none';
    for (let i = 0; i < id_nokta.length; i++) {
        const element = id_nokta[i];
        element.value = nokta.children[0].innerText;
    }
    textarea_message.innerText = nokta.children[1].innerText;
}