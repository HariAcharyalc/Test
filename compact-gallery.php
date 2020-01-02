
    <section class="gallery-block compact-gallery">
        <div class="container">
            <div class="heading">
                <h2>Recent Scene</h2>
            </div>
            <div class="row col-md-12">
                <?php
            include_once'dbconfig.php';
            $sql2="SELECT * FROM gallery ORDER BY id DESC LIMIT 12";
          $result2=mysqli_query($conn,$sql2);
          $queryResult2= mysqli_num_rows($result2);

          if ($queryResult2 >0) {
            while ($row2=mysqli_fetch_assoc($result2)) {
            echo '





                <div class="col-md-6 col-lg-4  item  zoom-on-hover">
                    <a class="lightbox" href="admin/'.$row2['image'].'">
                        <img class="img-fluid image" src="admin/'.$row2['image'].'">
                        <span class="description">
                            <span class="description-heading">'.$row2['name'].'</span>
                            <span class="description-body"></span>
                        </span>
                    </a>
                </div>';}}
                ?>
                



            </div>
        </div>
    </section>
    <script src="baguetteBox.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    </script>

