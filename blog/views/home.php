<?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];

        if ('success' === $status) {
            $output = <<<'OUTPUT'
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Félicitations! L'article a bien été sauvegardé</strong>.
            </div>
OUTPUT;
            echo $output;
        } else {
            $output = <<<'OUTPUT'
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Oooops! Problème lors de la sauvegarde...</strong>
            </div>
OUTPUT;
            echo $output;
        }
    }
        ?>
<style>

.bouton {
    width:40px;
    height:40px;
background-color:rgb(239, 239, 239);
border: 1px solid gray;
border-radius:2px;
font-size:30px;
font-family: Arial, Helvetica, sans-serif;
line-height:1.5;
 vertical-align: baseline;
 
 
margin-bottom:4px;

}

.gras {
  font-weight:bold;
}

.italique {
 font-style: italic;
}

.souligne {
  text-decoration: underline;
}

input[type="color"] {
	opacity: 1;
	width: 42px;
	height: 42px;
	border: 0px solid silver;
  vertical-align: sub;

 
}

img {
    width:500px;
}
</style>  

<h2>Home Page</h2>


<!--div class="container" style="display:flex; flex-direction:column; justify-content:center; align-items:center;"-->

<div class="container" style=" ">
    
      <button onclick="Gras()" class="bouton gras">G</button>
      <button onclick="Italique()" class="bouton italique">I</button>
      <button onclick="Souligne()" class="bouton souligne">S</button>
    <input name="MyColorPicker" type="color" id="ColorPicker1" onblur="changeColor()"> 
    
    <div contenteditable="true" id="mydiv" style="width:400px;height:200px;border:1px solid #000;padding:10px;"></div>    


    <form action="process.php" method="post"  onsubmit="envoiForm()">
        <input type="text" name="title" placeholder="Entrez le titre" required>
    
        <!--textarea name="description" cols="30" rows="10" placeholder="Entrez une description" required></textarea-->
        
         <input type="hidden" id="description" name="description">
         
         
        <input type="submit" name="submit" value="Publier">
    </form> <br>

    <!-- form bootstrap -->
    <!--form action="process.php" method="post" onsubmit="envoiForm()">
        <fieldset>
            <legend>Ajouter un article</legend>
            <div class="">
            <label class="">Titre</label>
            <div class="">
                <input type="text" class="" name="title">
            </div>
            </div>
            <div class="">
            <label for="" class="">Description</label>
            
    <!-- Ajout de la barre de mise en forme du texte ------------->
    
    <!--button onclick="Gras ()">G</button>
    <button onclick="Italique ()">I</button>
    <button onclick="Souligne ()">S</button>    
    <input name="MyColorPicker" type="color" id="ColorPicker1" onblur="changeColor()">   
            
    <!-- fin Ajout de la barre de mise en forme du texte ------------->       
            
<!--textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea-->
            
<!-- Je remplace le textarea par une DIV car la balise textarea n' execute pas le HTML ----->        
            
<!-- Voici donc une jolie DIV qui va recevoir les enrobages de tags HTML envoyés dynamiquement par JS et mes petites mimines ----->  
 
       <!--div contenteditable="true" id="mydiv" style="height:200px;border:1px solid #000;"></div>         
            
            
        <!--input type="text" id="myText" value="Mickey">
    
    <button onclick="copie()">Clique</button-->      
            
            
            
            <!--/div>
            <button type="submit" class="" name="submit">Publier</button>
        </fieldset>
    </form-->

    <div>
        <?php
            // récuperer les posts dans la bdd
            $fileContent = file_get_contents('./db.json');

            // convertir le json en tableau associatif
            $posts = array_reverse(json_decode($fileContent, true));
            // echo '<pre>';
            // print_r($posts);
            // echo '</pre>';

            // on vérifie s'il y a des posts
            if (count($posts) > 0) {
                // boucler sur le tableau
                foreach ($posts as $array) {
                    // echo '<pre>';
                    // print_r($array);
                    // echo '</pre>';
                    $content = <<<POST
                <div class="card mb-3">
                    <h3 class="card-header">{$array['postTitle']}</h3>
                    <div class="card-body">
                        <h5 class="card-title">{$array['id']}</h5>
                    </div>
                    <img src="//unsplash.it/400"/>
                    <div class="card-body">
                        <p class="card-text">{$array['postDescription']}</p>
                    </div>
                    <div class="card-footer text-muted">
                        Publié le : 2 days ago
                    </div>
                </div>
POST;
                    echo $content;
                }
            } else {
                // s'il n'y a pas de post
                $content = <<<'POST'
                <div>
                    <p>Aucun article publié pour l'instant. Ecrivez le premier...</p>
                </div>
POST;
                echo $content;
            }

        ?>
    </div>
    
</div>

        <script>
        
 /* Mon script fait maison pour faire des barre de mise en forme Texte comme WordPress */
        
        function copie(){
        
        var texte = document.getElementById("mydiv").innerHTML ;
        
        document.getElementById("myText").value = texte;
        
        }
        
        
        
        function Gras () {
            document.execCommand ('bold', false, null);
        }
        
        
        function Italique () {
            document.execCommand ('italic', false, null);
        }
        
        
        function Souligne () {
            document.execCommand ('underline', false, null);
        }
        
        
        function changeColor() {
           var coul =   document.getElementById("ColorPicker1").value;
           
           document.execCommand('ForeColor', false, coul);
           
        }
        
        function envoiForm() {
            
        var texte = document.getElementById("mydiv").innerHTML ;
        
        document.getElementById("description").value = texte;
            
            

}
        
    </script>