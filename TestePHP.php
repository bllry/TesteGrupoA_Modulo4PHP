<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Teste Luana</title>
    
</head>

<style>

    h2, label, address{
        color: white;
    }
    
</style>

<body>
  

<div class="mt-5">
  
<div class="row justify-content-center" style="height: 150px;">
   
   <div class="col-5 bg-secondary" style="border-radius: 20px;">
       
   
    <h2 style="text-align: center;border-bottom: solid 2px white;">Tomadas</h2>


    <form action="gravar.php" method="post">
    <label for="">Digite as quantidades das entradas</label>


        <input name="t1" type="number"  min="2" max="6" value="2" required>

        <input name="t2" type="number"  min="2" max="6" value="2" required>

        <input name="t3" type="number"  min="2" max="6" value="2" required>

        <input name="t4" type="number"  min="2" max="6" value="2" required>



        <input type="submit" class="btn btn-primary">


    </form>
    
    </div>

   </div>
   
   <hr><hr>
    <hr>

   
   
<div class="row justify-content-center">
   
   <div class="col-5 justify-content-center bg-secondary" style="border-radius: 20px;">
   
    <h2 style="text-align: center;border-bottom: solid 2px white;">Números primos</h2>
    
    <form action="gravar2.php" method="post">
        <label for="">Digite o número</label>

        <input name="num" type="number" min="1" required="required">

        <input type="submit" class="btn btn-primary">
    
    
    </form>
    <br><br>

   
   </div>



</div>
<hr><hr><hr>

<div class="row justify-content-center">
   
<div class="col-5 justify-content-center bg-info">
    <address class="mt-3"> Criado por: <i><strong>Grupo A</strong></i></address>
    <address> Composto por: <i><strong>Rosangela, Leonardo, Lucas, Ygor e Bruno </strong></i></address>
</div>
</div>

<div class="col-6">
    
</div>
</div>

   

    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    
    
</body>
</html>