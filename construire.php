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
    <body style="background-color: orange;">
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
                    <li><a href="louer.php">LOCATION</a></li>
                    <li><a href="inscrit.php">INSCRIPTION</a></li>
                </ul>
              </div> 
            </div>
          </nav>
            <h1 style="text-align: center; color: #fff; font-weight: bold; margin-top: 6rem">Liste des personnes ayant fait une location</h1>
            <div class="row">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Prenom</th>
                      <th scope="col">ville</th>
                      <th scope="col">Maison Souhaitée</th>
                      <th scope="col">Delai</th>
                      <th scope="col">Budget</th>
                      <th scope="col">Email</th>
                      <th scope="col">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        require '../database.php';
                        $db = Database::connect();
                        $statement = $db->query('SELECT * FROM contact ORDER BY contact.id_contact DESC');
                        while($item = $statement->fetch()) 
                        {
                            echo '<tr>';
                            echo '<td>'. $item['nom_contact'] . '</td>';
                            echo '<td>'. $item['prenom_contact'] . '</td>';
                            echo '<td>'. $item['ville_contact'] . '</td>';
                            echo '<td>'. $item['maisonVoulue_contact'] . '</td>';
                            echo '<td>'. $item['delaiConstruction_contact'] . '</td>';
                            echo '<td>'. $item['budget_contact'] . '</td>';
                            echo '<td>'. $item['email_contact'] . '</td>';
                            echo '<td>'. $item['today'] . '</td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
