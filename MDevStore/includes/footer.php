<div id="footer"><!-- #footer Begin -->
   <div class="container"><!-- container Begin -->
      <div class="row"><!-- row Begin -->
         <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->
            <h4>Pages</h4>
            <ul><!-- ul Begin -->
                <li><a href="cart.php">Shopping Cart</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="customer/my_account.php">My Account</a></li>
            </ul><!-- ul Finish -->
            <hr>
            
             <h4>User Section</h4>
             <ul><!-- ul Begin -->
                 <?php
                    if(!isset($_SESSION['customer_email'])){
                        echo "<a href='checkout.php'> Login </a>";
                    }else{
                        echo "<a href='customer/my_account.php?my_orders'>My Account</a>";
                    }
                ?>
                 <li><a href="customer_register.php">Register</a></li>
             </ul><!-- ul Finish -->
             <hr class="hidden-md hidden-lg hidden-sm">
         </div><!-- col-sm-6 col-md-3 Finish -->
         
         <div class="col-sm-6 col-md-6"><!-- col-sm-6 col-md-3 Begin -->
            <h4>Find Us</h4>
            <ul><!-- ul Begin -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.1131158082962!2d105.80123181425596!3d21.028159493176254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab424a50fff9%3A0xbe3a7f3670c0a45f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBHaWFvIHRow7RuZyBW4bqtbiB04bqjaSAoVVRDKQ!5e0!3m2!1svi!2s!4v1604369153287!5m2!1svi!2s" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </ul><!-- ul Finish -->
            <hr class="hidden-md hidden-lg">
             
         </div><!-- col-sm-6 col-md-3 Finish -->
         
         
         
         <div class="col-sm-6 col-md-3">
             <h4>Get The News</h4>
             <p class="text-muted">Dont miss our latest update products.</p>
             <form action="" method="post"><!-- form begin -->
                <div class="input-group"><!-- input-group begin -->
                   <input type="text" class="form-control" name="email">
                   <span class="input-group-btn"><!-- input-group-btn begin -->
                      <input type="submit" value="subscribe" class="btn btn-default">
                       
                   </span><!-- input-group-btn finish -->
                    
                </div><!-- input-group finish -->
                 
             </form><!-- form finish -->
             <hr>
             <h4>Keep In Touch</h4>
             <p class="social">
                 <a href="#" class="fa fa-facebook"></a>
                 <a href="#" class="fa fa-twitter"></a>
                 <a href="#" class="fa fa-instagram"></a>
                 <a href="#" class="fa fa-google-plus"></a>
                 <a href="#" class="fa fa-envelope"></a>
             </p>
         </div>
          
      </div><!-- row Finish -->
       
   </div><!-- container Finish -->
    
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            <p class="pull-left">&copy;2020 Ecom Store All Rights Reserve</p>
        </div><!-- col-md-6 Finish -->
        
        <div class="col-md-6"><!-- col-md-6 Begin -->
           <p class="pull-right">Theme by:<a href="#">Mr.A</a></p> 
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->