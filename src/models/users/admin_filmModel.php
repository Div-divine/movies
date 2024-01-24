<?php

function selectAllFilms(){
    global $db;
    global $router;
    $sql= "SELECT * FROM movies";
    $data= $db->query($sql);
    $data->execute();
    $results= $data->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($results as $result){
           echo '<tr>'; 
           echo '<td class="">'.$result['title']. '</td>'; 
           echo '<td class="">'.$result['dates']. '</td>'; 
           echo '<td class="">'.$result['duration']. '</td>';
           echo '<td class="">'.$result['rating']. '</td>';
           echo '<td class="">'.$result['categories']. '</td>';
           echo '<td class="">'.$result['castings']. '</td>';
           echo '<td class="">'.$result['directors']. '</td>';
           echo '<td class="">'.$result['synopsis']. '</td>';
           echo '<td class=""><form method="POST" action="">'.'
           <button type="submit" name="deleteFilm" value="'.$result['id'].'" style="background-color:#dc3545; color:white;padding: 5px;">Supprimer'.'
           </button>'.'
           </form></td>';
           echo '<td class=""><form method="POST" action="'.$router->generate('editFilms',['id'=>$result['id']]).'">'.'
           <button type="submit" name="EditFilm" value="'.$result['id'].'" style="background-color:#198754; color:white;padding: 5px;">Editer'.'
           </button></form></td>';
           echo '</tr>';

    }
}

function deleteFilm($filmId){
    global $db;
    $sql = "DELETE FROM movies WHERE id = :id";
    $smt = $db->prepare($sql);
    $smt->bindParam(':id', $filmId);
    $smt->execute();
}
