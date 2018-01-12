<footer class="footer_section" id="contact">
  <div class="container">
    <section class="main-section contact" id="contact">
      <div class="row">
        <div class="col-lg-6 wow fadeInLeft">

        </div>
        <div class="col-lg-6 wow fadeInUp delay-06s">
          </div>
        </div>
      </div>
    </section>
  </div>

<div class="container">
  <div class="footer_bottom">
    <div class="credits">
      didesain oleh: Ivan Darmawan &copy; 2018
    </div>
  </div>
</div>
</footer>
<script type="text/javascript">
$(document).ready(function(e) {
  $('#header_outer').scrollToFixed();
  $('.res-nav_click').click(function() {
    $('.main-nav').slideToggle();
    return false

  });

});
</script>
<script>
wow = new WOW({
  animateClass: 'animated',
  offset: 100
});
wow.init();
document.getElementById('').onclick = function() {
  var section = document.createElement('section');
  section.className = 'wow fadeInDown';
  section.className = 'wow shake';
  section.className = 'wow zoomIn';
  section.className = 'wow lightSpeedIn';
  this.parentNode.insertBefore(section, this);
};
</script>
<script type="text/javascript">
$(window).load(function() {

  $('a').bind('click', function(event) {
    var $anchor = $(this);

    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top - 91
    }, 1500, 'easeInOutExpo');

    event.preventDefault();
  });
})
</script>

<script type="text/javascript">
jQuery(document).ready(function($) {
  // Portfolio Isotope
  var container = $('#portfolio-wrap');
  container.isotope({
    animationEngine: 'best-available',
    animationOptions: {
      duration: 200,
      queue: false
    },
    layoutMode: 'fitRows'
  });

  $('#filters a').click(function() {
    $('#filters a').removeClass('active');
    $(this).addClass('active');
    var selector = $(this).attr('data-filter');
    container.isotope({
      filter: selector
    });
    setProjects();
    return false;
  });
  function splitColumns() {
    var winWidth = $(window).width(),
      columnNumb = 1;
      if (winWidth > 1024) {
      columnNumb = 4;
    } else if (winWidth > 900) {
      columnNumb = 2;
    } else if (winWidth > 479) {
      columnNumb = 2;
    } else if (winWidth < 479) {
      columnNumb = 1;
    }
    return columnNumb;
  }
  function setColumns() {
    var winWidth = $(window).width(),
      columnNumb = splitColumns(),
      postWidth = Math.floor(winWidth / columnNumb);

    container.find('.portfolio-item').each(function() {
      $(this).css({
        width: postWidth + 'px'
      });
    });
  }
  function setProjects() {
    setColumns();
    container.isotope('reLayout');
  }
  container.imagesLoaded(function() {
    setColumns();
  });
  $(window).bind('resize', function() {
    setProjects();
  });
});
$(window).load(function() {
  jQuery('#all').click();
  return false;
});
</script>
<script type="text/javascript" src="/assets/js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
<script type="text/javascript" src="/assets/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/assets/js/jquery.isotope.js"></script>
<script type="text/javascript" src="/assets/js/wow.js"></script>
<script type="text/javascript" src="/assets/js/classie.js"></script>

<script type="text/javascript">
$(document).ready(function(e) {
  $('.res-nav_click').click(function() {
    $('ul.toggle').slideToggle(600)
  });

  $(document).ready(function() {
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > 0) {
        $('#header_outer').addClass('fixed');
      } else {
        $('#header_outer').removeClass('fixed');
      }
    });

  });


});

function resizeText() {
  var preferredWidth = 767;
  var displayWidth = window.innerWidth;
  var percentage = displayWidth / preferredWidth;
  var fontsizetitle = 25;
  var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
  $(".divclass").css("font-size", newFontSizeTitle)
}
</script>
</body>
</html>
