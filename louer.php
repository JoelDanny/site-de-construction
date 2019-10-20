<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/first.js"></script>
        <script src="js/script.js"></script>
        <title>construction</title>
    </head>
    <body style="background-color: tomato; font-weight: bold;">
          <nav class="navbar navbar-inverse navbar-fixed-top couleur ">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> 
                  </button>
                  <a class="navbar-brand" href="#">BatimCode</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="construire.php">CONSTRUCTION</a></li>
                    <li><a href="inscrit.php">INSCRIPTION</a></li>
                </ul>
              </div> 
            </div>
          </nav>
            <h1 style="text-align: center; color: #fff; margin-top: 6rem">Liste des personnes ayant fait une location</h1>
            <div class="row">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">Telephone</th>
                      <th scope="col">Durée</th>
                      <th scope="col">Code Secret</th>
                      <th scope="col">Email</th>
                      <th scope="col">Maison Louée</th>
                      <th scope="col">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        require '../database.php';
                        $db = Database::connect();
                        $statement = $db->query('SELECT * FROM location ORDER BY location.id_location DESC');
                        while($item = $statement->fetch()) 
                        {
                            echo '<tr>';
                            echo '<td>'. $item['nom_location'] . '</td>';
                            echo '<td>'. $item['prenom_location'] . '</td>';
                            echo '<td>'. $item['phone_location'] . '</td>';
                            echo '<td>'. $item['duree_location'] . '</td>';
                            echo '<td>'. $item['codeSecret_location'] . '</td>';
                            echo '<td>'. $item['email_location'] . '</td>';
                            echo '<td>'. $item['maison_location'] . '</td>';
                            echo '<td>'. $item['today'] . '</td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                      ?>
                  </tbody>
                </table>
            </div>
      </body>
  </html>
