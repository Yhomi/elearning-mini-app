$(document).ready(()=>{

    function register() {
        $('#reg-btn').click((e)=>{
            if($('#register-form')[0].checkValidity()){
                e.preventDefault()
                if($('#password').val() != $('#cpassword').val()){
                    $('#regAlert').text('Passwords do not match')
                }else{
                    $('#regAlert').text('')
                    $.ajax({
                        url:'assets/php/Registercontroller.php',
                        method:'post',
                        data:$('#register-form').serialize() + '&action=register',
                        success:function(res){
                            
                            if(res === 'registered'){
                                window.location = 'dashboard.php';
                            }else{
                                $('#regMsg').html(res)
                            }
                        }
                    })
                }
            }
        })
    }

    function login(){
        $('#log-btn').click((e)=>{
            if($('#login-form')[0].checkValidity()){
                e.preventDefault()
                $.ajax({
                        url:'assets/php/LoginController.php',
                        method:'post',
                        data:$('#login-form').serialize() + '&action=login',
                        success:function(res){
                            
                            if(res === 'login'){
                                window.location = 'dashboard.php';
                            }else{
                                $('#logMsg').html(res)
                            }
                        }
                })
            }
        })
    }


    $('#login-btn').click(()=>{
        $('#welcome-box').hide()
        $('#register-box').hide()
        $('#login-box').show()
        login()
    })
    $('#login-link').click(()=>{
        $('#welcome-box').hide()
        $('#register-box').hide()
        $('#login-box').show()
        login()
    })
    $('#register-btn').click(()=>{
        $('#welcome-box').hide()
        $('#login-box').hide()
        $('#register-box').show()
        register()
    })
    $('#register-link').click(()=>{
        $('#welcome-box').hide()
        $('#login-box').hide()
        $('#register-box').show()
        register()
    })

    
})