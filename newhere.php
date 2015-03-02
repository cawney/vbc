<?php include('inc/header.php'); ?>

<div class="container">
  <div class="navSubnav">
    <ul class="nav nav-pills nav-justified subnav">
      <li role="presentation" class="active"><a href="#mission">Our Mission</a></li>
      <li role="presentation"><a href="#belief">Beliefs</a></li>
      <li role="presentation"><a href="#expect">What to Expect</a></li>
      <li role="presentation"><a href="#location">Location and Parking</a></li>
      <li role="presentation"><a href="#question">Questions</a></li>
    </ul>
  </div> <!-- /navSubnav -->



  <pre>Maybe make it wehre you have to click on the those buttons and then have it all overlay and only show the stuff you need to see.</pre>
  <h1>Welcome!</h1>
  <p class="lead">Thanks for checking out Versailles Baptist Church. We are so thankful you are considering stopping by!</p>
  <div class="row">
    <div class="mission" id="mission">
      <h3>Our Mission</h3>
      <p>There are 3 things Versailles Baptist relintlancy pursues. We exist to glorify God by:</p>
      <div class="col-sm-10">
      <div class="decide">
        <h2>1. Decide</h2>
        <p class="lead">We want people to decide to come to church. Our main purpose is to get people to decide to follow Jesus Christ. Wheather that is by being baptised or by joining our church.</p>
      </div> <!-- /decide -->

      <div class="devote">
        <h2>2. Devote</h2>
        <p class="lead">The last thing Jesus said to his disciples was to go and make followers across the world in all the nations. We are dedicated to following Jesus's last commision by devoting our life to Jesus.</p>
      </div> <!-- /devote -->
      <div class="demonstrate">
        <h2>3. Demonstrate</h2>
        <p class="lead">We want people to demonstrate their servent Love. That's what's up.</p>
      </div> <!-- /demonstrate -->
      </div> <!-- /mission -->
    </div> <!-- /mission -->
  </div>

   <div class="believe" id="belief">
    <h3>What we believe</h3>
    <ul>
      <li>Who is this God fellow?</li>
      <li>Who is this Jesus fellow?</li>
      <li>What do I need to do to meet Jesus some day?</li>
      <li>Why should I help people?</li>
    </ul>
  </div> <!-- /believe -->

  <div class="expect" id="expect">
    <h3>What to Expect</h3>
    <ul>
      <li>How long is service?</li>
      <li>Do I need to dress up?</li>
      <li>When should I get there?</li>
      <li>Is there childcare?</li>
    </ul>
  </div> <!-- /expect -->
  <pre>Make a JS app that will have the map embedded where the parking spots are pre-lit and have the address of the extra parking lots. It's nice to see where they are, but they don't have a physical address it can be hard to tell where it is when you are on the streets.</pre>
  <div class="location" id="location">
    <iframe width="100%" height="350" frameborder="0"  class="welcomeMap" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=125%20East%20Green%20Street%2C%20Versailles%2C%20KY%2C%20United%20States&key=AIzaSyCWLAU1C80xj2ikXD7F4iOtP-Dy1vwamM0"></iframe>
  </div> <!-- /location -->
  <div class="question" id="question">
    <p class="lead">Have more questions?</p>
    <p>If you need help with anything else or have any questions, please feel free to email Glenn at our office. If we left anything out that you want some clarification, he can answer your question!</p>
    <a href="mailto:glenn@versaillesbaptist.org" class="btn btn-primary">Email Here.</a>
  </div> <!-- /question -->
</div> <!-- /container -->
<?php include('inc/footer.php'); ?>