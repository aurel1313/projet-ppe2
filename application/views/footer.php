<div class="footer">
    <div id="liens">
    <?php
       echo anchor('','les départements et l\'outre-mer','id="titre1"');
       echo anchor('','voir les dernieres contributions','id="titre2"');
     echo anchor('/contributeur/contributeur.php','devenir contributeur',array('id'=>'titre3'));
       ?> 
    </div>
    <div id="images">
    <?php
      $propriete1 = array(
        'src'=>'assets/images/image2.jpg',
        'alt'=>'Clochers',
        'class'=>'clocher'
      );
      echo img($propriete1);
      $propriete2 =array(
        'src'=>'assets/images/image3.jpg',
        'alt'=>'cousins',
        'class'=>'cousins'
      );
      echo img($propriete2);
      $propriete3 =array(
        'src'=>'assets/images/image4.jpg',
        'alt'=>'genea',
        'class'=>'genea'
      );
      echo img($propriete3);
      $propriete4 = array(
        'src'=>'assets/images/image5.jpg',
        'alt'=>'memorial',
        'class'=>'memorial'
      );
      echo img($propriete4);
      $propriete5 = array(
        'src'=>'assets/images/image6.jpg',
        'alt'=>'mort',
        'class'=>'mort'
      );
      echo img($propriete5);
      $lien1= anchor('article.php','bénévoles');
      echo '<p class="reference">Ce site n\'a pas de "sponsor"et il est entièrement gratuit et construit par des '.$lien1.'</p>';
      $lien = anchor("referencement.php","les sites qui referencent GenCom",'id="refer"');
      echo $lien;
      echo form_open("");
      $attrLabel =array(
         "id"=>"labelEmail"
      );
      echo form_label("s'inscrire sur la liste de discussion GenCom",'',$attrLabel);
      $set =array(
        "id"=>"courrier",
        "type"=>"email",
        "placeholder"=>"votre adresse de courriel",
        "value"=>"votre adresse de courriel"
      );
      echo form_input($set);
      echo form_submit("submit","s'inscrire",'id="inscrire"');
      echo form_close();
    ?>
    </div>
    </div>
    <hr style="position:absolute;top:600px;width:80%;color:blue;left:10vw;">
    <div id="other">
     
    </div>

<script type='text/javascript' src ="<?=base_url('assets/js/js1.js');?>"></script>
