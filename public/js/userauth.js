$('#authform').submit((e)=>{

    e.preventDefault()
    email =  $("input[name = 'email']").val();
    password = $("input[name =  'password' ]").val();
    
    $.ajax({
        url :"/auth/login",
        method : "POST",
        data: {
            "email" : email,
            "password" : password
        },
        success:function(response){
            response.status == 200 ? window.location = '/dashboard' : alert(response.error);
        }

    })
})