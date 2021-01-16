<?php require "head/header.php"; ?>
    <!--création du bloc principal -->
    <div class=div2>

      <div class="row">

        <div class="column3" style="background-color:#F95074;">
        <h2>10 BD CULTES !</h2>
        </div>

        <div class="column" style="background-color: snow;">
        <ul class="livre1" >

          <?php
          $res = $link->query("SELECT Genre.libelle,Livre.annee,nom,prenom,isbn
          FROM Auteur
          JOIN Personne ON Auteur.idPersonne  = Personne.id
          JOIN role ON Auteur.idROLE=Role.id
          JOIN Livre ON Auteur.idLivre= Livre.isbn
          JOIN Genre ON Livre.genre = Genre.id
          JOIN Editeur ON Livre.editeur=Editeur.id
        ");
     if($res)
     {
         while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
         {
           echo "<div class='column' style=background-color: 'snow';>";
           echo "<ul class='livre1' >";
             echo "<h3><a href=" . $row["isbn"] . ".php?isbn=" . $row["isbn"] . "><b>" . $row["titre"] . "</b></a></h3>''";
             echo "<a href='page/" . $row["isbn"] . ".php?isbn=" . $row["isbn"]."'><img src='image/" . $row["isbn"] . ".jpg' height='400' width='275'></a>";
             echo "</div>";
         }
     }
        ?>
                       </ul>


</div>

                              </div>

        </div>
<!-- Bloc de Fin -->
<?php require "foot/footer.php"; ?>

<!--*************************************************FIN*************************************************-->

  </body>
</html>
