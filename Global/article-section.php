<?php
// Default values if variables are not passed
$title = $title ?? "Default Article Title";
$date = $date ?? date("F d, Y");
$author = $author ?? "Admin";
$image = $image ?? "https://via.placeholder.com/1000x400";
$content = $content ?? "<p>No content available.</p>";
?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="card shadow-sm border-0">
                    
                    <div class="card-body p-4 p-md-5">

                        <h2 class="mb-2"><?php echo $title; ?></h2>

                        <p class="text-muted">
                            Published on <?php echo $date; ?> | By <?php echo $author; ?>
                        </p>

                        <img src="<?php echo $image; ?>" 
                             class="img-fluid rounded my-3" 
                             alt="Article Image">

                        <div class="article-content">
                            <?php echo $content; ?>
                        </div>

                        <!--<div class="d-flex justify-content-between mt-4">-->
                        <!--    <a href="#" class="btn btn-outline-primary btn-sm">← Previous</a>-->
                        <!--    <a href="#" class="btn btn-outline-primary btn-sm">Next →</a>-->
                        <!--</div>-->

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
