$(document).ready(function(){
    
    
      $(function() {
  $('.scrolldown').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('.main')).offset().top}, 500, 'linear');
  });
});
    
   var height = $(window).height();
    
    
    ajustesIniciales();
    
    
    
    function ajustesIniciales(){
        $("#container").css({"margin-top": height - 70 + "px"});
    }
    
    
    $(document).scroll(function(){
        
       var scrollTop = $(this).scrollTop();
        var pixels = scrollTop/98;
        
        if(scrollTop<=height){
            $("#bannerblock").css({
                "-webkit-filter":"blur(" + pixels + "px)",
                "background-position": "center -" + pixels * 8 + "px"
                
            });
        }
        
        
        
        
        
    });
    
  
    
    
});






