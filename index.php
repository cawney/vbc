<?php include('inc/header.php'); ?>
  
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/23blast.jpg" alt="23 Blast Picture" class="img-responsive">
      <div class="carousel-caption">
        <h2>23 Blast</h2>
      </div>
    </div>
    <div class="item">
      <img src="img/ourGod.png" alt="Our God Sermon Series" class="img-responsive">
      <div class="carousel-caption">
        <h2><a href="#">Our God</a></h2>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1140x422" alt="...">
      <div class="carousel-caption">
        <h2><a href="#">Wednesday Night</a></h2>

      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> <!-- /slider -->
  
  
  <div class="featuredWidget">
    <div class="row">
      <div class="col-md-3 col-sm-6 featuredWidgetColumn text-center" id="wednesdayNight"><a href="#" class="featuredImage"><img src="img/bigBible.jpg" alt=""></a></div>
      <div class="col-md-3 col-sm-6 featuredWidgetColumn text-center" id="missionPromo"><a href="#" class="featuredImage"><img src="img/missionBible.jpg" alt=""></a></div>
      <div class="col-md-3 col-sm-6 featuredWidgetColumn text-center"><a href="#" class="featuredImage"><img src="img/countdown.png" alt=""></a></div>
      <div class="col-md-3 col-sm-6 featuredWidgetColumn text-center"><a href="#" class="featuredImage"><img src="img/creditcardStock.jpg" alt=""></a></div>
    </div>
  </div>
  
  
  <hr>
<?php include('inc/footer.php'); ?>