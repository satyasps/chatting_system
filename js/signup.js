const form = document.querySelector(".container form"),
        continueBtn = form.querySelector(".button input");

form.onsubmit = (e)=>{
    e.preventDefault();
};

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/registration_con.php", true );
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    };
    let formData = new FormData(form);
    xhr.send(formData);
};