let btn = document.getElementById("knop");
btn.addEventListener("click", a_menuV);
function a_menuV(){
let modal = document.getElementsByClassName("model")[0];
modal.style.top = "50%";
}
let but = document.getElementById("closeModal"); 
 
but.addEventListener("click", closeModal); 
 
function closeModal(){ 
    let model = document.getElementsByClassName("model")[0]; 
    console.log(model); 
    model.style.top = "-50%";
}

let btn1 = document.getElementById("knopka");
btn1.addEventListener("click", av);
function av(){
let modal1 = document.getElementsByClassName("model1")[0];
modal1.style.top = "50%";
}
let but1 = document.getElementById("closeModal1"); 
 
but1.addEventListener("click", closeModal1); 
 
function closeModal1(){ 
    let model1 = document.getElementsByClassName("model1")[0]; 
    console.log(model1); 
    model1.style.top = "-50%"; 
}
