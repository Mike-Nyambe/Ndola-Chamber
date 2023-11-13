<?php 
  
  $title = 'Gallery';
  include('header.php');

?>
<!-- End Header -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Gallery</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Gallery</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Gallery ======= -->
    <section class="gallery" id="gallery">
        <!-- Gallery Images Here -->
        <div class="container">
            <div class="row">
                <!-- Your gallery images go here -->
            </div>
            <!-- Load More Button -->
            <div class="d-flex justify-content-center align-items-center mt-4">
                <button id="loadMoreButton" class="btn-load-more">Load More</button>
            </div>
        </div>
    </section>
    <sectio class="main-pagination">
        <div class="pagination"></div>
    </sectio>
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<?php 
  
  include('footer.php');

?>