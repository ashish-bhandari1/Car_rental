<?php include_once('common/header.php'); ?>
  
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide pointer-event" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/liberty-walk-lamborghini-aventador.jpg" data-src="holder.js/900x300?auto=yes&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [900x300]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22900%22%20height%3D%22300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20900%20300%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1709077828c%20text%20%7B%20fill%3A%23555%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A45pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1709077828c%22%3E%3Crect%20width%3D%22900%22%20height%3D%22300%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22308.2890625%22%20y%3D%22170.1%22%3EFirst%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
              <div class="d-md-block">
                <div class="bannerText">
                    <h3>E-car rental</h3>
                    <p>Make your trip memorable and delightfull</p>
                </div>
            </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/121719-hot-girl-vintage-car-landscape-hd.jpg" data-src="holder.js/900x300?auto=yes&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [900x300]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22900%22%20height%3D%22300%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20900%20300%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17090778292%20text%20%7B%20fill%3A%23444%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A45pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17090778292%22%3E%3Crect%20width%3D%22900%22%20height%3D%22300%22%20fill%3D%22%23666%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22264.9453125%22%20y%3D%22170.1%22%3ESecond%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
              <div class="d-md-block">
                <div class="bannerText">
                    <h3>The service for quality matter only</h3>
                    <p>Connect with us</p>
                </div>
            </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
 
    <!-- Banner end -->
    <div class="introHeadWrapper">
        <div class="introHead row show-grid">
            <div class="col-md-3 "> <img src="images/Enjoy-Your-Vacation.jpg" alt="company picture" class="aboutImage">
            </div>
            <div class="col-md-5 ">
                <div class="intro">
                    <h3>About us</h3>
                    <p>The objective of the proposed Online Car Rental System, the users are able to enter the company’s website for searching and reserving their favorite cars easily through the Internet and it can be access anywhere anytime in the world. Hence, the company is able to improve their customer satisfaction level, increasing efficiency by provides better services to their customer. </P>
                </div>
            </div>
            <div class="col-md-4 side-feature">
                <div class="HeadFacility">
                    <h3> Facilities</h3>
                    <ul class="features">
                        <li>Fully air-conditioned </li>
                        <li>Private terminal building</li>
                        <li>Free Wi-fi</li>
                        <li>Advance booking system</li>
                        <li>Insurace coverage of NRs 500,000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bookingWrapper">
        <h2>Travel with us </h2>
        <!-- ---- -->
        <?php 
            while($row = mysqli_fetch_assoc($result)){
            ?>
        <div class="card bookCard">
            <img class="card-img-top" src="userimg/<?php echo $row['image']; ?>" alt="Card image cap">
            <div class="card-body cardWrapper">
                <h4 class="card-title"><?php echo $row['name']; ?> </h4>
                <p class="card-text">
                    Brand: <?php echo $row['brand']; ?>, Seat Number: <?php echo $row['seat']; ?>, Engine power: <?php echo $row['power']; ?> , <span>Rate: <?php echo $row['rate']; ?>/day</span>
                    <p style = "font-style: italic;"> <?php echo $row['description']; ?></P>
                </p>
                <a href="book.php?id=<?php echo $row['id']; ?>" class="btn btn-primary booknow">Book Now</a>
                <a href="moreDescription.php?id=<?php echo $row['id']; ?>" class="btn btn-primary viewdetail">View Detail <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <?php } ?>

    </div>
    <!-- ---- -->
    </div>
    
</body>
<?php include_once('common/footer.php'); ?>
