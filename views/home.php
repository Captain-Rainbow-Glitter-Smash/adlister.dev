<div class="container">
    <div class="row">
         <h1 id="crgs_title">Welcome to Captain Rainbow Glitter Smash!</h1>
         <h4 id="subtitle">The number 4 marketplace for all your authentic-ish hero items.</h4>
     </div>
    <div class="row">
         <div class="col-md-9">
             <div class="row carousel-holder">
                 <div class="col-md-12">
                     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
                             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                             <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                             <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                         </ol>
                         <div class="carousel-inner">
                             <div class="item active">
                                 <a href="/item"><img class="slide-image" src="css/img/uploads/shield.png" alt="shield"></a>
                             </div>
                             <div class="item">
                                 <a href="/item"><img class="slide-image" src="css/img/uploads/hammer.png" alt="Hammer"></a>
                             </div>
                             <div class="item">
                                 <a href="/item"><img class="slide-image" src="css/img/uploads/lokis_helmet.png" alt="loki's helmet"></a>
                             </div>
                         </div>
                         <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left"></span>
                         </a>
                         <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right"></span>
                         </a>
                     </div>
                 </div>
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
                            <h4><a href="/item" class="make_white"><?=$item->name?></a>
                            </h4>
                            <p class="make_white"><?=$item->description?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

