<?php 

$pgName = 'Thank You';
$pgClass = 'pg-thank-you';

include './templates/header.php';

?>
<body class="wrapper">
    <section class="thank-you">

        <h1>Thank You</h1>

        <?php if(isset($_POST['fn'])): ?>

        <p>Thank you <?php echo trim(ucwords(strtolower($_POST['fn']))); ?> for contacting us. We will get back to you soon.</p>

        <p>The COMP1950 Team!</p>

        <?php endif ?>

    </section>
        </body>
<?php 

include './templates/footer.php';

?>