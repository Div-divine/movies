<?php get_header('List des categories', 'admin'); ?>

<div class="mb-5 mt-5">
    <a href="<?= $router->generate('addCategorie')?>" class="categorieAdd">Ajouter une nouvelle catégorie</a>
</div>
<div>
    <table class="table custom-table table-bordered border-black">
    <thead>
        <tr>
        <th scope="col"  class="text-center align-middle">Id</th>
        <th scope="col"  class="text-center align-middle">Nom</th>
        <th scope="col" class="text-center align-middle">Editer</th>
        </tr>
    </thead>
    <tbody>
       <?php foreach($categoriesId as $categorieId){ ?>
        <tr>
            <td class="align-middle text-center"><?= $categorieId->id;?></td>
            <td class="align-middle text-center"><?= $categorieId->nom; ?></td>
            <td class="text-center align-middle">
                    <a class="btn btn-warning editButton" href="<?= $router->generate('editCategorie', ['id' =>  $categorieId->id]); ?>">Editer</a>
                    <a class="btn btn-danger" href="<?= $router->generate('deleteCategorie', ['id' =>  $categorieId->id]); ?>">Supprimer</a>
            </td>

       </tr>    
    <?php } ?>
    </tbody>
    </table>
</div>

<?php get_footer('admin'); ?>