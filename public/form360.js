jQuery(document).ready(function () {
    //scrollToTop()
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = jQuery("fieldset").length;
    if(localStorage.getItem('form360fieldset') !== '' || localStorage.getItem('form360fieldset') !== null || localStorage.getItem('form360fieldset') !== undefined){
        //alert(localStorage.getItem('form360fieldset'));
         const fieldsetid = localStorage.getItem('form360fieldset');
         if(fieldsetid == 'fieldsetone'){
             jQuery('#fieldsetone').show();
             jQuery('#fieldsettwo').hide();
             jQuery('#fieldsetthree').hide();
             jQuery('#fieldsetfour').hide();

             jQuery('#fieldsetfive').hide();
             jQuery('#fieldsetsix').hide();
             jQuery('#fieldsetseven').hide();

             jQuery('#fieldseteight').hide();
             jQuery('#fieldsetnine').hide();
             jQuery('#fieldsetten').hide();

             jQuery('#fieldseteleven').hide();
             jQuery('#fieldsettwelve').hide();
             jQuery('#fieldsetthirteen').hide();
             
             current = 1;
             
         }else if(fieldsetid == 'fieldsettwo'){
             //jQuery('#fieldsetone').hide();
             jQuery('#fieldsetone').hide();
             jQuery('#fieldsettwo').show();
             jQuery('#fieldsetthree').hide();
             jQuery('#fieldsetfour').hide();

             jQuery('#fieldsetfive').hide();
             jQuery('#fieldsetsix').hide();
             jQuery('#fieldsetseven').hide();

             jQuery('#fieldseteight').hide();
             jQuery('#fieldsetnine').hide();
             jQuery('#fieldsetten').hide();

             jQuery('#fieldseteleven').hide();
             jQuery('#fieldsettwelve').hide();
             jQuery('#fieldsetthirteen').hide();

             current = 2;
         }else if(fieldsetid == 'fieldsetthree'){
             //jQuery('#fieldsetone').hide();
             jQuery('#fieldsetone').hide();
             jQuery('#fieldsettwo').hide();
             jQuery('#fieldsetthree').show();
             jQuery('#fieldsetfour').hide();

             jQuery('#fieldsetfive').hide();
             jQuery('#fieldsetsix').hide();
             jQuery('#fieldsetseven').hide();

             jQuery('#fieldseteight').hide();
             jQuery('#fieldsetnine').hide();
             jQuery('#fieldsetten').hide();

             jQuery('#fieldseteleven').hide();
             jQuery('#fieldsettwelve').hide();
             jQuery('#fieldsetthirteen').hide();

             current = 3;
         }else if(fieldsetid == 'fieldsetfour'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').show();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();

            current = 4;
        }else if(fieldsetid == 'fieldsetfive'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').show();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();

            current = 5;
        }else if(fieldsetid == 'fieldsetsix'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').show();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();

            current = 6;
        }else if(fieldsetid == 'fieldsetseven'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').show();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();

            current = 7;
        }else if(fieldsetid == 'fieldseteight'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').show();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();

            current = 8;
        }else if(fieldsetid == 'fieldsetnine'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').show();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();

            current = 9;
        }else if(fieldsetid == 'fieldsetten'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').show();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();

            current = 10;
        }else if(fieldsetid == 'fieldseteleven'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').show();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();

            current = 11;
        }else if(fieldsetid == 'fieldsettwelve'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').show();
            jQuery('#fieldsetthirteen').hide();

            current = 12;
        }else if(fieldsetid == 'fieldsetthirteen'){
            //jQuery('#fieldsetone').hide();
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').show();

            current = 13;
        }else if(fieldsetid == 'fieldsetfourteen'){
            //localStorage.removeItem('form360fieldset')
            //window.location.href = '/admin';
            jQuery('#fieldsetone').hide();
            jQuery('#fieldsettwo').hide();
            jQuery('#fieldsetthree').hide();
            jQuery('#fieldsetfour').hide();

            jQuery('#fieldsetfive').hide();
            jQuery('#fieldsetsix').hide();
            jQuery('#fieldsetseven').hide();

            jQuery('#fieldseteight').hide();
            jQuery('#fieldsetnine').hide();
            jQuery('#fieldsetten').hide();

            jQuery('#fieldseteleven').hide();
            jQuery('#fieldsettwelve').hide();
            jQuery('#fieldsetthirteen').hide();
            jQuery('#fieldsetfourteen').show();

             current = 14;
        }
     }
    setProgressBar(current);

    jQuery(".next").click(function (e) {
        current_fs = jQuery(this).parent();
        next_fs = jQuery(this).parent().next();

        setTimeout(function () {
            $(".next").val("Next");
            $('body.client #fieldsetfourteen .next').val('Submit');
            next_fs.show();
            current_fs.animate(
                { opacity: 0 },
                {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            display: "none",
                            position: "relative",
                        });
                        next_fs.css({ opacity: opacity });
                    },
                    duration: 500,
                }
            );

            jQuery("#progressbar li")
                .eq(jQuery("fieldset").index(next_fs))
                .addClass("active");

            setProgressBar(++current);
            //  scrollToTop()
            window.scrollTo({ top: 0, behavior: "smooth" });

            if (next_fs.attr("id") == "fieldsetfifteen") {
                $("#form360").submit();
            }
        }, 500);
    });

    jQuery(".previous").click(function () {
        current_fs = jQuery(this).parent();
        previous_fs = jQuery(this).parent().prev();

        //Remove class active
        jQuery("#progressbar li")
            .eq(jQuery("fieldset").index(current_fs))
            .removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate(
            { opacity: 0 },
            {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        display: "none",
                        position: "relative",
                    });
                    previous_fs.css({ opacity: opacity });
                },
                duration: 500,
            }
        );
        setProgressBar(--current);
        //  scrollToTop()
        window.scrollTo({ top: 0, behavior: "smooth" });
    });

    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        jQuery(".progress-bar").css("width", percent + "%");
    }

    jQuery(window).keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });

    setProgressBar(current);

    jQuery('#form360submit').click(function(){
        localStorage.removeItem('form360fieldset')
        localStorage.setItem('form360fieldset',jQuery(this).closest('fieldset').attr('id'))
        console.log(localStorage.getItem('form360fieldset'));
    });
    jQuery(".save").click(function (e) {

        localStorage.removeItem('form360fieldset')
        localStorage.setItem('form360fieldset',jQuery(this).closest('fieldset').attr('id'))
        console.log(localStorage.getItem('form360fieldset'));
        $(this).text('Saving...');
        $("#form360").submit();
    });
});
