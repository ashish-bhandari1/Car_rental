
<footer>
      <div class="footer">
         <div class="row ">
            <div class="col-md-3">
               <ul>
                  <p>Service</p>
                  <li><a href="#"><i class="fas fa-hands-helping"></i>help</a></li>
                  <li><a href="#"><i class="fas fa-envelope-square"></i>ecar.rental@contact.com</a></li>
                  <li><a href="#"><i class="fas fa-phone"></i>+977 9822247653</a></li>
               </ul>
            </div>
            <div class="col-md-3">
               <ul>
                  <p>The company</p>
                  <?php 
                     while($qryRow = mysqli_fetch_assoc($btnResult)){
                     ?>               
                  <li><a href="<?php echo $qryRow['link']; ?> "><?php echo $qryRow['link_name'] ?> </a>
                  </li>
                  <?php } ?>
               </ul>
            </div>
            <div class="col-md-3">
               <ul>
                  <p>Quick Link</p>
                  <li><a href="https://mail.google.com/mail/u/0/#inbox">Contact us</a></li>
                  <li><a href="login/login.php">Login</a></li>
                  <li><a href="login/register.php">Register</a></li>
               </ul>
            </div>
            <div class="col-md-3">
               <ul>
                  <p>Follow Us</p>
                  <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i>twitter</a></li>
                  <li><a href="#"><i class="fab fa-forumbee"></i>forum</a></li>
               </ul>
            </div>
         </div>
      </div>
   </footer>

  
   <script src="js/script.js"></script>
   <script>
      // Sticky Header
      $(window).scroll(function() {
      
      if ($(window).scrollTop() >= 100) {
          $('.nav-head').addClass('sticky');
      } else {
          $('.main_h').removeClass('sticky');
      }
      });
          
   </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>