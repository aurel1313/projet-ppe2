<div id="formulaire">
    <div class="text">Avant d'utiliser ce moteur pour la recherche d'une commune,il est conseillé de lire <a href="/applications/view/FAQ.php">la Foire Aux Questions</a></div>
    <div class="label"><strong>Commune,Hameau,Lieu-dit...<a href="/application/view/FAQ.php?id=6">Formule</a></strong></div>
    <div id="form">
        <?php
            $attributes = ['id'=>'myForm'];
            echo validation_errors("<div class='errors'>","</div>");
            echo form_open("",$attributes);
          
            $data =array(
                "id"=>"textearea",
                "value"=>"",
                "style"=>"width:70%",
                "name"=>"search"
            );
            echo form_input($data);
            $dataSubmit =array(
                "id"=>"search"
            );
            echo form_submit('soumettre','rechercher',$dataSubmit);
            $dataLabel= array(
                'id'=>'label1'
            );
            echo form_label('Nom d\'un lieu dans l\'index','dpt',$dataLabel);
            $dataradio = array(
                'name'=>'departement',
                'id'=>'departement',
                'value'=>'Nom',
                'checked'=>FALSE
            );
            echo form_radio($dataradio);
            $dataLabel2 = array(
                'id'=>'insee'
            );
            echo form_label('Code Insee','insee',$dataLabel2);
            $dataradio2= array(
                'name'=>'departement',
                'id'=>'radio2',
                'value'=>'code Insee',
                'checked'=>FALSE
            );
            echo form_radio($dataradio2);
            $dataLabel3 =array(
                "id"=>"trier"
            );
            echo form_label('trier par :','tri',$dataLabel3);
           $attributs =array(
               "id"=>"dropdown"
           );
            $options = array(
                "lieu"=>"nom du lieu",
                "commune"=>"commune",
                "CP"=>"Code Postal",
                "numDep"=>"N°Département",
                "dept"=>"Département",
                "codeInsee"=>"Code Insee"

            );
            echo form_dropdown("area",$options,"lieu",$attributs);
            
            $attr =array(
                "class"=>"check"
            );
            echo form_label("exclure les lieux-dits et les hameaux",'labelCheck',$attr);

            $dataCheckbox = array(
                "id"=>"checkbox",
                "name"=>"checkbox",
                "checked"=>FALSE
            );
            echo form_checkbox($dataCheckbox);
            $limit = array(
                "id"=>"limit"
            );
            echo form_label("limiter la recherche à ce departement","limit",$limit);
            $input = array(
                "class"=>"limiter",
                "style"=>"width:10%"
            );
            echo form_input($input);
            echo form_close();
            
        ?>
        <div id="textForm">
            <p>Si vous connaissez le nom exact ,mettez une majuscule en premiere lettre :-)</p>
        </div>
        <div class="tri">
            <hr id="hr">
         </div>   
        
    </div>


</div>