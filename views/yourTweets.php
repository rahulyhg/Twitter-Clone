<?php if (isset($_SESSION['id'])){ ?>
<div class="container homeContainer">
    <div class="row">
        <div class="col-md-8">
            <h2>Your Tweets<hr /></h2>
            <?php displayTweets('yourTweets'); ?>
        </div>
        <div class="col-md-4">
            <?php displaySearch(); ?>
            <?php postTweet(); ?>
        </div>

    </div>
</div>
<?php } else {
    echo '<div class="container homeContainer">
        <h2 class="text-muted">Please Login / Sign up.  </h2>
    </div>';
}?>
