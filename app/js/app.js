jQuery(document).ready(function(){
    function onReady(){
      setTimeout(
        function() 
        {
          $('.overlay-transition').addClass('loaded');
        }, 3000);
    
        // Cloner
        var e = $('.scroll-section .ticket');
        for (var i = 0; i < 15; i++) {
          e.clone().insertAfter(e);
        }
    
        // Activate first child
        e.first().addClass('active');
    }

	$('#search').submit(function(e){
	  e.preventDefault();
	  Barba.Pjax.goTo('ticket.php');
	});

    onReady();

    var transEffect = Barba.BaseTransition.extend({
      start: function(){
        this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
      },
      fadeInNewcontent: function(nc) {
        nc.hide();
        var _this = this;
        $(this.oldContainer).fadeOut(1000).promise().done(() => {
          nc.css('visibility','visible');
          nc.fadeIn(1000, function(){
            _this.done();
          })
        });
      }
  });
  Barba.Pjax.getTransition = function() {
    return transEffect;
  }

  Barba.Pjax.start();

  Barba.Dispatcher.on('newPageReady', function(current, prev, newContainer) {
    // Run Functions
    onReady();
    // Bar Transform
      current = current.url;
      var e = $('.inner-bar .block');
      if(current.includes("ticket")){
        $('.inner-bar').addClass('t-page');
        e.first().removeClass('active');
		e.last().addClass('active');
      } else{
        $('.inner-bar').removeClass('t-page');
        e.first().addClass('active');
		e.last().removeClass('active');
      }
  });

});
