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

async function login(){
    let mail = document.getElementById("mail").value;
    let password = document.getElementById("password").value;
    //document.getElementById('abc').innerHTML= mail
    http://127.0.0.1:8000/api/login/turag.shagor01@gmail.com&2121
    
    if(!mail=='' && !password==''){ 
        
        try {
            await fetch(`http://127.0.0.1:8000/api/login/${mail}&${password}`)
        .then(response => response.json()).then(data=>console.log(data))
            
        } catch (error) {
           if(error)
           document.getElementById('abc').innerHTML= "Email or Password doesn't match";
        }
        
        
    }else{ 
          alert("Check Again password");
    }
    }
