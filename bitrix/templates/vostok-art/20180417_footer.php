<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


    <div class="container">
        <div class="content-wrap">
            <div class="text-block">
                <p>По всем вопросам пишите нам на <a href="mailto:vopros@vostok-art.ru">vopros@vostok-art.ru</a>.</p>

                Присоединяйтесь к нам!<br><br>
                <div class="social">
                    <a href="https://www.facebook.com/vostokart"><i class="fb"></i></a>
                    <a href="https://vk.com/vostok_art"><i class="vk"></i></a>
                    <a href="https://www.instagram.com/vostokart/"><i class="insta"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="copy">
                    Все права защищены © 2000-<?=date('Y')?>.<br><br>
                    Фотографии, материалы и статьи являются собственностью галереи «Интерьеры Махараджей»
                    ARTPLAY Москва, Нижняя Сыромятническая д. 10 стр. 2 Телефон: +7 (903) 103-53-09
                </div>
            </div>
            <div class="col-md-7">
                <div class="logo-footer-wrap">
                    <div class="logo-footer"></div>
                </div>
            </div>
        </div>
    </div>
</footer>




    <!-- <script src="<?=SITE_TEMPLATE_PATH?>/js/vendor/jquery.js"></script> -->
    <script src="<?=SITE_TEMPLATE_PATH?>/js/vostokartapp.min.js"></script>

    <script>
//  $(document).ready($(document).vostokartapp());

/*
  $(document).ready($(document).vostokartapp());
  $(window).on('resize', vostokartapp.lib_methods.throttle(function () {
    $(document).vostokartapp();
  }, 300));
*/

    <? // tree menu ?>
    $.fn.animateRotate = function(angleFrom, angleTo, duration, easing, complete) {
      return this.each(function() {
          var $elem = $(this);

          $({deg: angleFrom}).animate({deg: angleTo}, {
              duration: duration,
              easing: easing,
              step: function(now) {
                  $elem.css({
                      transform: 'rotate(' + now + 'deg)'
                  });
              },
              complete: complete || $.noop
          });
      });
  };

    $(function() {
    if ($("#sidenav").length > 0) {
      $('#sidenav ul:not(:has(li.active))').hide();

      $('#sidenav ul:has(li.active)').parent().find('.discl > i').animateRotate(0, 90);
       $('#sidenav .sidenav-item.active').find('ul').show()
       $('#sidenav .sidenav-item.active').find('.discl > i').animateRotate(0, 90);

   //    $('#sidenav:has(li.active)').find('ul').show();
   //    $('#sidenav:has(li.active)').find('.discl > i').animateRotate(0, 90);


      $("#sidenav > li > a.rootcat").click(function(e) {

      var siblings = $(this).siblings("ul");

      if (siblings.length == 0) {return true;}





        if (siblings.is(":hidden")) { degFrom = 0; degTo = 90; } else { degFrom = 90; degTo = 360; }

        $(this).find('.discl > i').animateRotate(degFrom, degTo);

        $(this).siblings("ul").slideToggle();

        // e.preventDefault();
      });
    }
  });


     $(document).vostokartapp();


    </script>
  


<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter32349185 = new Ya.Metrika({
                    id:32349185,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/32349185" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!--
<script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=379daaff690c72a116836682ad357d64" charset="UTF-8"></script>

-->
<!-- {literal} -->
<script type="text/javascript">
var liveTex = true,
liveTexID = 113036,
liveTex_object = true;
window.LiveTex = {
	onLiveTexReady: function () {
		var desc1 = LiveTex.addEventListener(
			LiveTex.Event.CONVERSATION_STARTED,
			function (data) {
				yaCounter32349185.reachGoal ('CONVERSATION_STARTED');
				ga('send', 'event', 'event', 'CONVERSATION_STARTED');
			}
		);
		var desc2 = LiveTex.addEventListener(
			LiveTex.Event.OFFLINE_MESSAGE_SENT,
			function (data) {
				yaCounter32349185.reachGoal ('OFFLINE_MESSAGE_SENT');
				ga('send', 'event', 'event', 'OFFLINE_MESSAGE_SENT'); 
			}
		);
		var desc2 = LiveTex.addEventListener(
			LiveTex.Event.CALL_ESTABLISHED,
			function (data) {
				yaCounter32349185.reachGoal ('CALL_ESTABLISHED');
				ga('send', 'event', 'event', 'CALL_ESTABLISHED');
			}
		);
		var desc3 = LiveTex.addEventListener(
			LiveTex.Event.CALL_STARTED,
			function (data) {
				yaCounter32349185.reachGoal ('CALL_STARTED');
				ga('send', 'event', 'event', 'CALL_STARTED');
			}
		);
		var desc4 = LiveTex.addEventListener(
			LiveTex.Event.CONVERSATION_STARTED,
			function (data) {
				yaCounter32349185.reachGoal ('X_WINDOW_SHOWN');
				ga('send', 'event', 'event', 'X_WINDOW_SHOWN');
			}
		);
	}
};
(function() {
	var lt = document.createElement('script');
	lt.type ='text/javascript';
	lt.async = true;
	lt.src = '//cs15.livetex.ru/js/client.js';
	var sc = document.getElementsByTagName('script')[0];
	if ( sc ) sc.parentNode.insertBefore(lt, sc);
	else document.documentElement.firstChild.appendChild(lt);
})();
</script>
<!-- {/literal} -->

</body>
</html>
