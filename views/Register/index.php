<!-- include('views/layouts/)-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Register User</div>
                        <div class="panel-body">
                            <form action="?c=Register&m=registrar" method="post">
                                <div>
                                 <label for="">Name</label>
                                 <input type="text" name="name" placeholder="Name" required>
                                 </div>
                                 <div>
                                 <label for="">Last Name</label>
                                 <input type="text" name="last_name" placeholder="Last_name">
                                 </div>
                                 <div>
                                 <label for="">Document</label>
                                 <input type="num" name="document" placeholder="Document" required>
                                 </div>
                                 <div>
                                 <label for="">Password</label>
                                 <input type="password" name="pass" placeholder="Password" required>
                                 </div>
                                 <div>
                                 <label for="">Email</label>
                                 <input type="text" name="email" placeholder="Email">
                                 </div>
                                 <div>
                                   <input type="submit">  
                                 </div>
                             </form>
                       
                    </div>
                </div>
            </div>  
        </div>
    </div>
    
</body>
</html>