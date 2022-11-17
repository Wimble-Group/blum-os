

<script type="text/javascript" src="<?=ASSETS?>js/libs/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="<?=ASSETS?>js/libs/fm.revealator.jquery.js"></script>

<script type="text/javascript" src="<?=ASSETS?>js/script.js?<?=TIMESTAMP?>"></script>
<script src="<?=ASSETS?>js/libs/smoothscroll.min.js"></script>


<?php if ($data['page'] == 'home') { ?>
    <script type="text/javascript" src="<?=ASSETS?>js/libs/slick.min.js"></script>
    <script type="text/javascript" src="<?=ASSETS?>js/index.js?<?=TIMESTAMP?>"></script>
<?php } ?>

<?php if ($data['page'] == 'contacts') { ?>
    <script type="text/javascript" src="<?=ASSETS?>js/contacts.js?"></script>
<?php } ?>