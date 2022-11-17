<?php $this->view("head",$data);?>

<div class="wrapp">
    <?php $this->view("header", $data);?>
    <section class="notfound">
        <div class="container">
            <div class="logo"></div>
            <h1>Page not found</h1>
            <p>We’re sorry, the page you requested could not be found. Please go back to the homepage.</p>
        </div>
    </section>
    <?php $this->view("footer",$data);?>
</div>

</body>
</html>