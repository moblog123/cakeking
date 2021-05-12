<?php
require_once ('header.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
         <form action="managecart.php" method="POST">
                  <div class="card" >
                     <img src="images/15.jpg" class="card-img-top">
                    <div class="card body text-center">
                      <h5 class="card-title">vanilla</h5>
                       <p class="card-text"> Price: 350 </p>    
                       <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="vanila">
                        <input type="hidden" name="Price" value="350">
                    </div>
                </div>
        </form>
    </div>

        <div class="col-lg-3">
            <form action="managecart.php" method="POST">
                  <div class="card" >
                         <img src="./images/16.jpg" class="card-img-top">
                      <div class="card body text-center">
                            <h5 class="card-title">chocolate</h5>
                              <p class="card-text">Price: RS:650 </p>    
                              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                 <input type="hidden" name="Item_Name" value="chocolate">
                                   <input type="hidden" name="Price" value="650">
                         </div>
                    </div>
            </form>
        </div>
        <div class="col-lg-3">
              <form action="managecart.php" method="POST">
                 <div class="card" >
                      <img src="./images/17.jpg" class="card-img-top">
                          <div class="card body text-center">
                             <h5 class="card-title">butterscotch</h5>
                               <p class="card-text">Price: RS:650 </p>    
                                <button type="submit"name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                  <input type="hidden" name="Item_Name" value="butterscotch">
                                  <input type="hidden" name="Price" value="650">
                             </div>
                     </div>
               </form>
          </div>
        <div class="col-lg-3">
            <form action="managecart.php" method="POST"> 
                 <div class="card" >
                       <img src="./images/18.jpg" class="card-img-top">
                        <div class="card body text-center">
                             <h5 class="card-title">vanilla</h5>
                             <p class="card-text"> Price: Rs:450 </p>    
                              <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                             <input type="hidden" name="Item_Name" value="cake">
                              <input type="hidden" name="Price" value="450">
                         </div>
                     </div>
             </form>
        </div>
        
        <div class="col-lg-3 my-2">
            <form action="managecart.php" method="POST"> 
                  <div class="card" >
                          <img src="./images/19.jpg" class="card-img-top">
                           <div class="card body text-center">
                                  <h5 class="card-title">chocolate</h5>
                                   <p class="card-text"> Price: Rs:358 </p>    
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                     <input type="hidden" name="Item_Name" value="chocolate">
                                      <input type="hidden" name="Price" value="358">
                             </div>
                     </div>
            </form>
        </div>

        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
                  <div class="card" >
                          <img src="./images/20.jpg" class="card-img-top">
                           <div class="card body text-center">
                              <h5 class="card-title">butter</h5>
                               <p class="card-text"> Price: Rs:450 </p>    
                               <button type="submit"  name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                 <input type="hidden" name="Item_Name" value="butter">
                                     <input type="hidden" name="Price" value="450">
                             </div>
                     </div>
             </form>
        </div>

        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/21.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">Vanilla</h5>
                    <p class="card-text"> Price: Rs:450 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="Vanilla">
                    <input type="hidden" name="Price" value="450">
                </div>
            </div>
            </form>
        </div>

        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/22.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">Chocovan</h5>
                    <p class="card-text"> Price: Rs:550 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="Chocovan">
                    <input type="hidden" name="Price" value="550">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/23.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">redvalvet</h5>
                    <p class="card-text"> Price: Rs:850 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="redvalvet">
                    <input type="hidden" name="Price" value="850">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/24.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">strawberry chocolate</h5>
                    <p class="card-text"> Price: Rs:450 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="strawberry chocolate">
                    <input type="hidden" name="Price" value="450">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/25.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">vanilla</h5>
                    <p class="card-text"> Price: Rs:350 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="vanilla">
                    <input type="hidden" name="Price" value="350">
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/26.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">popcake</h5>
                    <p class="card-text"> Price: Rs:250 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="popcake">
                    <input type="hidden" name="Price" value="250">
                </div>
              
            </div>
            </form>
        </div>
        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/27.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">vanilla chocolate</h5>
                    <p class="card-text"> Price: Rs:750 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="vanilla chocolate">
                    <input type="hidden" name="Price" value="750">
                </div>
                
            </div>
            </form>
        </div>
        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/28.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">vanilla</h5>
                    <p class="card-text"> Price: Rs:450 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="vanilla">
                    <input type="hidden" name="Price" value="450">
                </div>
               
            </div>
            </form>
        </div>
        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
            <div class="card" >
                <img src="./images/29.jpg" class="card-img-top">
                <div class="card body text-center">
                    <h5 class="card-title">fabvan</h5>
                    <p class="card-text"> Price: Rs:550 </p>    
                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                    <input type="hidden" name="Item_Name" value="fabvan">
                    <input type="hidden" name="Price" value="550">
                </div>
                
            </div>
            </form>
        </div>
        <div class="col-lg-3 my-3">
            <form action="managecart.php" method="POST"> 
               <div class="card" >
                    <img src="./images/30.jpg" class="card-img-top">
                    <div class="card body text-center">
                       <h5 class="card-title">latechoco</h5>
                        <p class="card-text"> Price: Rs:450 </p>    
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                         <input type="hidden" name="Item_Name" value="latechoco">
                       <input type="hidden" name="Price" value="450">
                    </div>
                </div>
            </form>
         </div>
            
   </div>
</div>
     
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>