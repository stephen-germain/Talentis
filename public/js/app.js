$(function()
{
     $(".menu a, footer a").on("click", function(event)
     {
            event.preventDefault();
            var hash = this.hash;
            $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;})
     });
})

// $(document).ready(function(){

//     $('.nav1').scroll(function(){
//         if(srollTop()>0){
//             $(this).css({'background': 'blue'});
//         }
        
//     })
// })
