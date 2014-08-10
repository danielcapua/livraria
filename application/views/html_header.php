<?php echo doctype('xtml1-trans');?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Meu website de receitas</title>
        <?php
         $meta= array(
                array('name'=>'robots','content'=>'no-cache'),
                array('name'=>'description','content'=>'Meu website de receitas'),
                array('name'=>'keywords','content'=>'Receitas, doces, salgados, sobremesas, massa'),
                array('name'=>'robots','content'=>'no-cache'),
                array('name'=>'Content-Type', 'content' =>'text/html; charset=uf-8','type' =>'equiv'));
         echo meta($meta);
         echo link-tag('assets/img/fork.iko','shotcurt icon', 'image/ico');
         echo link_tag('assets/css/layout.css');
         ?>
    </head>
    <body>