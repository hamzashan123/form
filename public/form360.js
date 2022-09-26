jQuery(document).ready(function () {
    //scrollToTop()
    var current_fs, next_fs, previous_fs //fieldsets
    var opacity
    var current = 1
    var steps = jQuery('fieldset').length
  
    setProgressBar(current)
        
    
    jQuery('.next').click(function (e) {
      current_fs = jQuery(this).parent()
      next_fs = jQuery(this).parent().next()
      
       setTimeout(function() { 
              $('.next').val('Next');
             
                  
                    next_fs.show()
                    current_fs.animate(
                      { opacity: 0 },
                      {
                        step: function (now) {
                          // for making fielset appear animation
                          opacity = 1 - now
              
                          current_fs.css({
                            display: 'none',
                            position: 'relative',
                          })
                          next_fs.css({ opacity: opacity })
                        },
                        duration: 500,
                      },
                    )
              
                    jQuery('#progressbar li')
                      .eq(jQuery('fieldset').index(next_fs))
                      .addClass('active')
              
                    setProgressBar(++current)
                  //  scrollToTop()
                   
                    
                    if ( next_fs.attr('id') == 'fieldsetthree') {
                       $('#form360').submit();
                      
                    } 
              
       }, 500);
    })
  
  jQuery('.previous').click(function () {
      current_fs = jQuery(this).parent()
      previous_fs = jQuery(this).parent().prev()
  
      //Remove class active
      jQuery('#progressbar li')
        .eq(jQuery('fieldset').index(current_fs))
        .removeClass('active')
  
      //show the previous fieldset
      previous_fs.show()
  
      //hide the current fieldset with style
      current_fs.animate(
        { opacity: 0 },
        {
          step: function (now) {
            // for making fielset appear animation
            opacity = 1 - now
  
            current_fs.css({
              display: 'none',
              position: 'relative',
            })
            previous_fs.css({ opacity: opacity })
          },
          duration: 500,
        },
      )
      setProgressBar(--current)
    //  scrollToTop()
    })
  
  function setProgressBar(curStep) {
      var percent = parseFloat(100 / steps) * curStep
      percent = percent.toFixed()
      jQuery('.progress-bar').css('width', percent + '%')
    }
    
  
    
  jQuery(window).keydown(function(event){
      if(event.keyCode == 13) {
        event.preventDefault();
        return false;
      }
  });
  
  

    
  })
  