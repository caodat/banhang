<!DOCTYPE html>

<html lang="vi">
<?php $option =$this->Mod_admin1->get_option(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo strip_tags($option['description']); ?>">
    <meta name="author" content="">
    <title>

    <?php echo strip_tags($option['title']); ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>styles/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>styles/css/styles.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>/styles/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>vendors/jquery/dist/jquery.min.js"></script>
    
</head>
<body>
    <div class="container" id="home">
        <?php 
            $this->load->view($content);
            $this->load->view($lottery);
        ?>   
        <footer>
            <?php if(isset($option['footer'])){
                echo $option['footer'];
                } ?>
        </footer>     
    </div><!-- .container -->
</body>
</html>

