<?php get_header('Liste des utilisateur', 'admin'); ?>

<h2>Liste des utilisateurs</h2>

<a href="<?= $router->generate('addUser'); ?>" class="btn btn-success">Ajouter</a>

<div>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($users as $user){ ?>
        <tr>
            <td class="align-middle"><?= $user->id; ?></td>
            <td class="align-middle"><?= $user->email; ?></td>
            <td class="align-middle"><?htmlentities($user->email) ?></td>
            <td class="text-center align-middle">
                    <a class="btn btn-warning" href="<?= $router->generate('editUser', ['id' =>  $user->id]); ?>">Editer</a>
                    <a class="btn btn-danger" href="<?= $router->generate('deleteUser', ['id' =>  $user->id]); ?>">Supprimer</a>
            </td>

       </tr>    
    <?php } ?>
    </tbody>
    </table>
</div>


<?php get_footer('admin'); ?>