function submitForm() {
    let userName = document.getElementById("txtWord").value;
    let password = document.getElementById("password").value;
    let rePassword = document.getElementById("repass").value;
    let email = document.getElementById("mail").value;
    if (password === rePassword) {
        let data = {
            id: '',
            userName: userName,
            password: password,
            rePassword: rePassword,
            mail: email,
        };
        fetch("http://127.0.0.1:8000/api/add_registration", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data),
        }).then((res) => {
            console.log("Request complete! response:", res);
        });
    }else{
          alert("Check Again password")
    }
}

function login(){
    let mail = document.getElementById("mail").value;
    let password = document.getElementById("password").value;
    
    
    if(!mail=='' && !password==''){
    
        fetch(`http://127.0.0.1:8000/api/login/${mail}&${password}`).then
        response=>response.json().then(data=>alert(data))
        return 
    }else{
          alert("Check Again password");
    }
    }
