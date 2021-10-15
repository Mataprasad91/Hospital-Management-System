<?php 
    $title = "Admin Dashboard";
    $bodyColor = 'bg-white';
    include "includes/header1.php";
    include "includes/navbar1.php";

?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col">
            <div class="card border-0 text-white bg-success mb-3" style="max-width: 20rem;">
                <div class="card-header">Responses</div>
                <div class="card-body bg-light">

                    <p class="dashboard-card-title">255 New Responses</p>
                    <button class="btn btn-success btn-sm">Check</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-white bg-info mb-3" style="max-width: 20rem;">
                <div class="card-header">Number of events</div>
                <div class="card-body bg-light">

                    <p class="dashboard-card-title">6</p>
                    <button class="btn btn-info btn-sm">Check</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-white bg-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">Most Liked Event</div>
                <div class="card-body bg-light">

                    <p class="dashboard-card-title">BGMI - no of likes</p>
                    <button class="btn btn-dark btn-sm">Check</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card rounded mb-3">
                <h3 class="card-header bg-primary">Ready to host a event</h3>
                <img src="img/party.jpg" alt="" class="dashboard-add-event">
                <div class="card-body">
                    <p class="card-text">Host a event for your college or your own free of cost.</p>
                </div>
                <div class="card-body">
                    <a href="eventadd.php" class="card-link btn btn-sm btn-primary">Host event</a>
                    
                </div>
            </div>
        </div>
    </div>

</div>



<?php
    include "includes/footer1.php";
?>