<ul class="list-group">

    <?php foreach ($data["projet"] as $projet): ?>
    <div class="animated fadeInUp">
        <li>
            <div class="card" style="padding:5px; margin-bottom:50px;">
                <div class="card-header">
                    <h5><?php echo $projet["id"];?> - <?php echo $projet["title"]; ?></h5>
                </div>
                <div class="card-body">
                    <a href="<?php echo $projet["lien"]; ?>">
                        <img class="img-fluid" alt="<?php echo $projet["title"]; ?>" src="<?php echo $projet["picture"] ?>" style="max-heigth: 100px;margin-left:1%;margin-right:auto;"><img>
                    </a>
                    <p class="card-text" style="text-align:left; margin-top:10px;"><?php echo $projet["logiciel"]; ?></p>
                    <a href="<?php echo $projet["lien"]; ?>" class="btn btn-primary" style="width:20%; margin-right:5%; margin-left:auto; margin-top:15px;">Lien Github</a>
                </div>
            </div>
        </li>
        <li class="admin-mode <?php echo "form-projet-row-" . $projet["id"] ?>">
            <div class="card-body">
                <form action="/editProjet.php" method="post" class="form-inline">
                    <input type="hidden" name="id" value= <?php echo $projet["id"]?> />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <input placeholder="Titre" type="text" name="title" value="<?php echo $projet["title"]; ?>">
                            </div>
                            <div class="col-md-4">
                                <input placeholder="Lien Image" type="text" name="picture" value="<?php echo $projet["picture"]; ?>">
                            </div>
                            <div class="col-md-3">
                                <input placeholder="Logiciel" type="text" name="logiciel" value="<?php echo $projet["logiciel"]; ?>">
                            </div>
                            <div style="margin-top: 10px;" class="col-md-4">
                                <input placeholder="Lien Projet" type="text" name="lien" value="<?php echo $projet["lien"]; ?>">
                            </div>
                            <div style="margin-left: 30%;" class="col-md-2">
                                <button style="width: 100%;" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                            </div>
                            <div class="col-md-2">
                                <button style="width: 100%;" class="btn btn-danger" type="button" value="Cancel" onclick="toogleProjetForm(<?php echo  $projet["id"] ?>)">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </li>
    </div>
    <?php endforeach;?>
    <div class="card admin-mode" style="margin:10px; padding:5px;">
        <h6 class="card-header">Ajouter un projet</h6>
        <li class="list-group-item">
            <form action="/addProjet.php" method="post" class="form-inline">
                <div class="container" style="margin: 10px">
                    <div class="row">
                        <div class="col-md-6">
                            <input placeholder="Titre" type="text" name="title">
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Picture" type="text" name="picture">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <input placeholder="Logiciel" type="text" name="logiciel">
                        </div>
                        <div style="margin-top: 10px;" class="col-md-6">
                            <input placeholder="Lien" type="text" name="lien">
                        </div>
                        <div class="col-md-2">
                            <button style="margin-left:250%; margin-top:50px; width:200px" class="btn btn-danger" type="submit" value="Ok">Ok</button>
                        </div>
                    </div>
                </div>
            </form>
        </li>
    </div>
</ul>
<script>
    function toogleProjetForm(id) {
        $('.projet-row-' + id).toggle();
        $('.form-projet-row-' + id).toggle();
    }
</script>
