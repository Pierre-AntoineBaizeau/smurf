var tlmenu = new TimelineMax ({paused:true});


tlmenu.to('nav',0.3,{autoAlpha:1})
.staggerFromTo('nav li',0.5,{y:100,opacity:0}, {y:0,opacity:1},0.1);


$('.nav-icon').click(function(){
	tlmenu.play(0);
});


$('.fermeButon').click(function(){
	tlmenu.reverse(0);
});



TweenMax.fromTo('#banniere h1', 0.6,{y:80, opacity:0}, {y:0,opacity:1,delay:1});

TweenMax.fromTo('#banniere .enSavoirPlus', 0.6,{y:80, opacity:0}, {y:0,opacity:1,delay:1.6, ease:Back.easeOut});


$('#montre').on('click',function(){
	$('#texte').show();
	$('#montre').hide();
});
$('#cache').on('click',function(){
	$('#texte').hide();
	$('#montre').show();
});


$('#montre1').on('click',function(){
	$('#texte1').show();
	$('#montre1').hide();
});
$('#cache1').on('click',function(){
	$('#texte1').hide();
	$('#montre1').show();
});


$('#montre2').on('click',function(){
	$('#texte2').show();
	$('#montre2').hide();
});
$('#cache2').on('click',function(){
	$('#texte2').hide();
	$('#montre2').show();
});




function myFunction() {
    var x = document.getElementById("mdp");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

