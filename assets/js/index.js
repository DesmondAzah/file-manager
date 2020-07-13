$(document).ready(function(){

      //filter directories on click
                  //creata alphabetical navigagion
                  var alphas = 'abcdefghijklmnopqrstuvwxyz';
                  var navList = ''; 
                  for (var x = 0; x < 26; x++){
                    navList += '<li class="page-item" >'+'<a class="page-link" href="#">'+alphas[x].toUpperCase()+'</a>'+'</li>'
                  }
                  $('.pagination').append(navList);
      
                  //select all on click all
                  $('.pagination a').click(function(){
                    if($(this).attr('id') == 'all'){
                      $('#directories > div').fadeIn(450);
                      return false;
                    }
      
                    //get each item on click
                    var listItem = $(this).html();
      
                    //filter directoreies with item
                    $('.directory').hide().filter(function(){
                      var listData = $('.link-02', $(this)); 
                      return listData.length && listData.html() && new RegExp('^'+ listItem + '.*$' , 'i').test(listData.html().toLowerCase()); 
                    }).fadeIn(450);
                  });
      
              //toggle active filter btn
              var $btns = $('.page-link').click(function() {
                  $btns.removeClass('active');
                  $(this).addClass('active');
              });
                        
      
             //Search filter
             $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".directory").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
      
      
      });