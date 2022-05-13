<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Recettes</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <div class="receipe-post-area section-padding-80">
        <!-- Receipe Post Search -->
        <div class="receipe-post-search mb-80">
            <div class="container">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select1">
                                <option value="0">Toutes les recettes</option>
                                <?php
                                    foreach (CATEGORIES as $category)
                                    {
                                        echo '<option value="' . htmlspecialchars($category['idCategroy']) .'">' . htmlspecialchars($category['name']) . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3 searchbar">
                            <input type="search" name="search" placeholder="Rechercher des recettes" >
                        </div>
                        <div class="col-12 col-lg-3 text-right">
                            <button class="btn delicious-btn searchBtn" onclick="search()">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <?php foreach (RECIPES as $recipe): ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-best-receipe-area mb-30">
                            <img src="resources/image/imgMainMeal/<?php echo $recipe['image']?>" style="height:10;"alt="Meal Image">
                            <div class="receipe-content">
                                <a href="receipe-post.php">
                                    <h5><?php echo $recipe['title']?></h5>
                                </a>
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>