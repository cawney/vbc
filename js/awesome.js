


/*
Serve Page
*/

$('#oneHead').click(function(){
  
  $('#two, #three').addClass('hidden');
  $('#one').toggleClass('hidden');
  $('#one').addClass('bounceInLeft');
});

$('#twoHead').click(function(){
  $('#one, #three').addClass('hidden');
  $('#two').toggleClass('hidden');
  $('#two').addClass('bounceInLeft');
});

$('#threeHead').click(function(){
  
  $('#two, #one').addClass('hidden');
  $('#three').toggleClass('hidden');
  $('#three').addClass('bounceInLeft');
});

//Click triggers event
//Hide any other descriptions
//Show the one that is clicked


/*
Subnav
*/
var hdr = $('header').height();
$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    $('.subnav').addClass('navbar-fixed-top');
  } else {
    $('.subnav').removeClass('navbar-fixed-top');
  }
});

//See if subnav has scrolled to the top
//Add fixed class
//See if the subnav has scrolled down
//Remove that class





/*
Make the icons reveal text when hovered over.
*/

//Show that is has been hovered over
//Reveal text that is associated with it.

$('.socialIcon').hover(
  console.log('on'), 
  console.log('off')
);

/* $('.socialIcon').hover(
  function(){
    $('span')
  };
); */




//-34.397, 150.644