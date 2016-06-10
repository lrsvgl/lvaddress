/* lvaddress */
jQuery(document).ready(function() {
    if (jQuery(".tx-lv-address .addresses li").length > 0) {

        var obj = jQuery(".tx-lv-address .addresses li");
        var slow = 350;
        var fast = 50;
        var op = 0.1;
        var delay = 250;
        // Adapted from getPageSize() by quirksmode.com
        function getPageHeight() {
            var windowHeight;
            if (self.innerHeight) { // all except Explorer
                windowHeight = self.innerHeight;
            } else if (document.documentElement && document.documentElement.clientHeight) {
                windowHeight = document.documentElement.clientHeight;
            } else if (document.body) { // other Explorers
                windowHeight = document.body.clientHeight;
            }
            return windowHeight;
        }

        obj.hover(function() {
            jQuery(this).doTimeout('hover', delay, function() {
                var wh = jQuery(document).height();
                var ph = getPageHeight();
                var elh = jQuery(this).outerHeight();
                var scrollT = jQuery(window).scrollTop();
                var posT = jQuery(this).offset().top;
                var posP = posT - scrollT;
                var posB = ph - posP - elh;
                //console.log("window height: "+ wh);
                //console.log("pageheight: " + ph );
                //console.log("element height: " + elh);
                //console.log("pos: "+posT);
                //console.log("scrollTop: " +  $(window).scrollTop() );
                //console.log("pos zum oberen Fensterrand ==> : "+posP);
                //console.log("pos zum unteren Fensterrand ==> : "+posB);     
                if (posB < elh) {
                    jQuery(this).addClass('active bottom');
                } else {
                    jQuery(this).addClass('active');
                }
                obj.not('li.active').animate({opacity: op}, slow);
                jQuery(this).find('div.adr').fadeIn(fast);
            });
        }, function() {
            jQuery(this).doTimeout('hover', delay, function() {
                jQuery(this).removeClass('active');
                jQuery(this).removeClass('bottom');
                obj.not('li.active').animate({opacity: "1.0"}, fast);
                jQuery(this).find('div.adr').fadeOut(fast);
            });
        });
    }
    // productsdatabase neu 
    if (jQuery('.address-teaser-list').length > 0) {

        //console.log("bx");

        jQuery('.address-teaser-list').bxSlider({
            // Configuration goes here
            mode: 'vertical',
            auto: true,
            easing: 'linear',
            autoHover: true,
            controls: false,
            displaySlideQty: 1,
            moveSlideQty: 1,
            pause: 1,
            speed: 3000
        });
    }
});