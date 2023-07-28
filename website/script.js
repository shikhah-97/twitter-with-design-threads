const container = document.querySelector(".container"),
    pwshoHide =document.querySelectorAll(".showHidePw"),
    pwFields =document.querySelectorAll(".password"),
    signUp =document.querySelector(".signup-link")
    Login =document.querySelector(".Login-link");
    // js code to show/hide password and change icon
    pwshoHide.forEach(eyeIcon => {
        eyeIcon.addEventListener("click",()=>{
            pwFields.forEach(pwFields =>{
            if (pwFields.type ==="password"){
                pwFields.type="text";
                pwshoHide.forEach(icon =>{
                 pwshoHide.classList.replace("uil-eye-slash","uil-eye");
                })

            }else{
                pwFields.type="password";
                pwshoHide.forEach(icon =>{
                    pwshoHide.classList.replace("uil-eye","uil-eye-slash");
                   })
            }
            
            })
        })
        
    })
    //js code to appear singup and login form
    signUp.addEventListener("click",()=>{
        container.classList.add("active");
    });
    Login.addEventListener("click",()=>{
        container.classList.remove("active");
    });