function submitForm() {
    let userName = document.getElementById("txtWord").value;
    let password = document.getElementById("password").value;
    let rePassword = document.getElementById("repass").value;
    let email = document.getElementById("mail").value;
    if (password === rePassword) {
        let data = {
            id: 4,
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
          alert("Check Again")
    }
}
