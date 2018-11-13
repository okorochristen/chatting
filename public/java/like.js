var postId = 0;

$('.like').on();

$(document).ready(function(){

    $('.like').click(function(event){
        event.preventDefault();
        var isLike = event.target.previousElementSibling() = null;
    
        $.ajax({

         method = 'POST',
         url: 'urlLike',
         data = {isLike: isLike, post_id: post_id, },

       })

        .done(function(data){

            console.log(data);

       });
       event.preventDefault();
    });
});
