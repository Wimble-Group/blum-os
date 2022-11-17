<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title><?=$data['page_title']?></title>
    <link rel="shortcut icon" type="image/png" href="<?=ASSETS?>img/common/favicon/favicon-16.png">

    <?php $this->view("common/css", $data);?> 
    <?php $this->view("common/js", $data);?> 
</head>

<script type="text/javascript">
  $(window).on('load', function(){
    $('.loader').fadeOut();
    $('body').removeClass('hidden');
    });
</script>

<body id='wrapper' class="hidden">