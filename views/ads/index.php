<div class="container">
   <div class="row">
        <h1 id="crgs_title">Items for sale</h1>
        <h4 id="subtitle">They are real-ish.</h3>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group" id="filter_list">
                <form name="form1" method="post" action="/Items.php">
                    <label for="search">Filter by:</label><br>
                    <input type="radio" name="search_type" value="weapons" checked> Weapons<br>
                    <input type="radio" name="search_type" value="armor"> Armor<br>
                    <input id="filter" type="submit" name="filter" value="Search">
                </form> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <?php foreach ($items as $item): ?> 
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail opacity">
                        <img class="crop" src=<?="/css/img/uploads/" . $item->img_url?>>
                        <div class="caption">
                            <h4 class="pull-right make_white"><?='$'.$item->price?></h4>
                            <h4><a href="/item?name=<?=$item->name?>" class="make_white"><?=$item->name?></a>
                            </h4>
                            <p class="make_white"><?=$item->description?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div><!--Page for an index of advertisements-->
