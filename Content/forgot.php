<?php
include("sql_connect.php");

function getdata(){
    $data =array();
    $data[1] =$_POST['id'];
    $data[2] =$_POST['fname'];
    $data[3] =$_POST['lname'];
    $data[4] =$_POST['dob'];
    $data[5] =$_POST['morada'];
    $data[6] =$_POST['telemovel'];
    $data[7] =$_POST['cm'];
    return $data;
}
if(isset($_POST['insert'])){

    $info = getdata();
    $insert = "INSERT INTO [userdata] ([ID]
    ,[FNAME]
    ,[LNAME]
    ,[DOB]
    ,[MORADA]
    ,[TELEMOVEL]
    ,[CM]) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]')
    ";
    if ($stmt = sqlsrv_prepare($conn, $insert)) {
        echo "Statement prepared.\n";  
    } else {  
        echo "Statement could not be prepared.\n";  
        die(print_r(sqlsrv_errors(), true));  
    }  
    if (sqlsrv_execute($stmt)) {  
        echo "Statement executed.\n";  
    } else {  
        echo "Statement could not be executed.\n";  
        die(print_r(sqlsrv_errors(), true));  
    }  

    sqlsrv_free_stmt($stmt);  
sqlsrv_close($conn); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

 <!-- Required meta tags -->
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Register</title>

        <!-- JavaScript Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" 
crossorigin="anonymous"></script>
<script href="jsForgot.js"></script>


<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="forgotstyle.css" rel="stylesheet" >

    </head>

<body>
    
<div class="wrapper">
<div class="form" >
        <span class="badge bg-primary text-wrap" style="font-size:large"> Registe-se </span>
        <span class="badge bg-primary text-wrap" style="font-size:large"> Aqui </span>
    <div>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  

</svg>
    </div>
    </div>
    <form method="POST">
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4 class="bg-primary" style="color:white;">Dados de Registro:</h4><p></p>
            <section>
                <div class="text-primary"> Nº de Cliente: <input type="int" class="form-control" name="id" id="id"> </div>
                <div class="text-primary"> Nome: <input type="text" class="form-control" placeholder="Insira o seu Primeiro Nome" name="fname" id="fname"> </div>
                <div class="text-primary"> Ultimo Nome: <input type="text" class="form-control" placeholder="Insira o seu Ultimo Nome" name="lname" id="lname"> </div>
                <div class="text-primary"> Data de Nascimento: <input type="date" class="form-control" name="dob" id="dob"> </div>
                <div class="text-primary"> Morada: <input type="text" class="form-control" placeholder="Insira a sua Morada" name="morada" id="morada"> </div>
                <div class="text-primary"> Telemovel: <input type="text" class="form-control" name="telemovel" id="telemovel"> </div>
           <div class="divider">
            <div class="text-primary" style="margin-bottom: 18px"> Sugestão: <textarea class="form-control" name="cm" id="cm" placeholder=" Aceitamos as suas Sugestões" style="height: 108px"></textarea> </div>
           </div>
           <button type="submit" class="btn btn-primary" name="insert"> Submeter Registo </button>
        </div>
    </form>
</div>
</body>










</html>