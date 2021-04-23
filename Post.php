<?php
 session_start();
 include('includes/header.php');
 include('includes/navbar.php');
 ?>

<div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col-md-8">

                <div class="card mb-3">
                    <img src="img/thumbnail_large-1.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="img/thumbnail_large.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="card mb-3">
                    <img src="img/tl (1).jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4">

                <div class="card">
                    <div class="card-body">
                        <h5>A propos de l'auteur</h5>
                        <hr />
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate amet ullam excepturi
                            odio impedit saepe nemo repellendus, aut suscipit voluptas omnis quas quisquam accusamus
                            illo laboriosam rerum, totam ea eaque.</p>
                    </div>
                </div>
                <br />
                <div class="card">
                    <div class="card-body">
                        <h5>Les formations</h5>
                        <hr />
                        
                    </div>
                </div>

                <br />
                <div class="card">
                    <div class="card-body">
                        <h5>Présentation</h5>
                        <hr />
                        <div class="ratio ratio-16x9">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
 include('includes/scripts.php');
 include('includes/footer.php');
?>