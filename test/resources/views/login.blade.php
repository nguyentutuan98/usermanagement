<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
   
   
    <link rel="stylesheet" type="text/css" href="./public/css/style.css" >
    <link rel="stylesheet" type="text/css" href="./public/plugin/bootstrap-5.1.3/dist/css/bootstrap.css" >
    
</head>
<body>
    
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
                
            </div>
            <div class="card-body">
                    <form id="form_login" method="post" >
                        {{ csrf_field() }}
                    <?php
                            $message = Session::get('message');
                            if ($message){
                                echo '<span class="text-alert">' .$message.'</span>';
                                Session::put('message',null);
                            }
                        ?>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            
                        </div>
                        <input id="email_input" name="email" type="text" class="form-control" placeholder="username"> 
                        
                        
                    </div>
                    <span class="text-danger " id="email_error"></span>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            
                        </div>
                        <input name="pass" type="password" class="form-control pass_input" placeholder="password">
                        
                    </div>
                    <span class="text-danger " id="pass_error"></span>
                    
                    <div id='msg_login' style="display: none;color: red;">thông báo</div>
                    <div class="form-group">
                        <input  id="btn_login"type="button" value="login" class="btn  btn-primary float-right login_btn">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>


<script type="text/javascript" src="./public/js/jquery-3.6.0.js"></script>
<script type="text/javascript" src ="./public/js/login.js"></script>

</body>
</html>
