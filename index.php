<?php include('inc/header.php'); ?>
 
 <div class="container">
  <div class="alert alert-danger" role="alert">
    
      <h1>This is a warning! <small>Stuff is cancelled</small></h1>
      <p><a href="alternate.php">Alternate Home Page</a></p>
    </div>
  </div> <!-- /warning widget -->
  
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
      <img src="img/ourGod.png" alt="Our God Sermon Series" class="img-responsive shrinkFix">
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
      <div class="col-md-3 col-sm-6 featuredWidgetColumn text-center"><a href="#" class="featuredImage"><img src="img/darkbackground.png" alt=""></a></div>
      <div class="col-md-3 col-sm-6 featuredWidgetColumn text-center"><a href="#" class="featuredImage"><img src="img/creditcardStock.jpg" alt=""></a></div>
    </div>
  </div>
<!--
  <div class="featuredWidgets">
   <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h3>Sunday Worship</h3>
        <ul>
          <li>Coffee and Bagels: 9 AM</li>
          <li>Small Group: 9:15 AM</li>
          <li>Worship: 10:30 AM</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Bible Study</h3>
        <ul>
          <li>Sunday Night @ 6 PM</li>
          <li>
            <ul>
              <li>Book of Galations</li>
            </ul>
          </li>
          <li>Wednesday Night @ 6 PM</li>
          <li>
            <ul>
              <li>For more info Click HERE</li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Online Giving</h3>
      </div>
    </div>
    </div>
  </div>  /featuredWidgets 
-->
  
  
  <hr>
<?php include('inc/footer.php'); ?>