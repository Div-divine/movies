<?php get_header('Liste des utilisateur', 'admin'); ?>

<h2 class="mt-5 mb-3">Liste des utilisateurs</h2>

<div>
    <table class="table custom-table table-bordered border-black">
    <thead>
        <tr>
        <th scope="col"  class="text-center align-middle">Nom</th>
        <th scope="col"  class="text-center align-middle">Email</th>
        <th scope="col" class="text-center align-middle">Editer</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($users as $user){ ?>
        <tr>
            <td class="align-middle text-center"><?= $user->nom;?></td>
            <td class="align-middle text-center"><?= htmlentities($user->email); ?></td>
            <td class="text-center align-middle">
                    <a class="btn btn-warning editButton" href="<?= $router->generate('editUser', ['id' =>  $user->id]); ?>">Editer</a>
                    <a class="btn btn-danger" href="<?= $router->generate('deleteUser', ['id' =>  $user->id]); ?>">Supprimer</a>
            </td>

       </tr>    
    <?php } ?>
    </tbody>
    </table>
</div>


<?php get_footer('admin'); ?>