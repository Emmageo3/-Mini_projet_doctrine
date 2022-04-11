<?php
// foreach ($data as $role) {
//     echo $role->getId_proprietaire()." ".$role->getNom()."<br/>";
//   }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasnim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>

     
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    
</head>

<body>
    <header>
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="">
            <img src="https://tasnimimmobilier.com/wp-content/uploads/2022/02/logo.jpg" alt="" width="200rem">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="{{ url('/dashboard') }}">
              Accueil
            </a>
      

            <a class="navbar-item" href="{{ url('/proprietaires') }}">
              Liste des propriétaires
            </a>

            

            



          </div>
      
          
        </div>
      </nav>
    </header>

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Liste des propriétaires</p>
            <div class="field has-addons">
               
              </div>
            <a class="button is-info" href="http://localhost/Mini_projet_doctrine/Proprietaire/formulaire">Ajouter une propriété</a>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Téléphone</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                foreach ($data as $proprietaire){
                                    echo "<tr>";
                                        echo "<td>" . $proprietaire->getId_proprietaire() . "</td>";
                                        echo "<td>" . $proprietaire->getNom() . "</td>";
                                        echo "<td>" . $proprietaire->getadresse(). "</td>";
                                        echo "<td>" . $proprietaire->getcontact(). "</td>";
                                        echo "<td>";
                                            echo '<a href="http://localhost/Mini_projet_doctrine/Proprietaire/details/'.$proprietaire->getId_proprietaire().'" class="button is-primary" title="View Record" data-toggle="tooltip">Voir</a>';
                                            echo '<a href="http://localhost/Mini_projet_doctrine/Proprietaire/edit/'.$proprietaire->getId_proprietaire().'" class="button is-warning" title="Modification" data-toggle="tooltip">Modifier</a>';
                                            echo '<a href="http://localhost/Mini_projet_doctrine/Proprietaire/delete/'.$proprietaire->getId_proprietaire().'" title="button is-danger" data-toggle="tooltip">Supprimer</a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                                               ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
  </body>
<!--
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">liste des Proprietaires</h2>
                        <a href="http://localhost/Mini_projet_doctrine/Proprietaire/formulaire" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Ajouter nouveau proprietaire</a>
                    </div>
                    

                           <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Adresse</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($data as $proprietaire){
                                    echo "<tr>";
                                        echo "<td>" . $proprietaire->getId_proprietaire() . "</td>";
                                        echo "<td>" . $proprietaire->getNom() . "</td>";
                                        echo "<td>" . $proprietaire->getPrenom() . "</td>";
                                        echo "<td>" . $proprietaire->getAdresse(). "</td>";
                                        echo "<td>" . $proprietaire->getContact(). "</td>";
                                        echo "<td>";
                                            echo '<a href="http://localhost/Mini_projet_doctrine/Proprietaire/details/'.$proprietaire->getId_proprietaire().'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="http://localhost/Mini_projet_doctrine/Proprietaire/edit/'.$proprietaire->getId_proprietaire().'" class="mr-3" title="Modification" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="http://localhost/Mini_projet_doctrine/Proprietaire/delete/'.$proprietaire->getId_proprietaire().'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                                               ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>