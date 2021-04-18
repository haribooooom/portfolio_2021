  <p class="pagetop"><a href="#wrap">▲</a></p>
<footer>
      <div class="footer-upper">
        <ul>
          <li><a href="https://twitter.com/haribooooom"><img src="img/twitter.svg" alt="twitter"></a></li>
          <li><a href="https://note.com/haribom"><img src="img/note.svg" alt="note"></a></li>
          <li><a href="https://github.com/haribooooom"><img src="img/github.svg" alt="github"></a></li>
        </ul>
      </div>
      <div class="footer-lower">
        <small style="font-size:1.2rem;">&copy; noma.</small>
      </div>
    </footer>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      var pagetop = $('.pagetop');
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
        } else {
          pagetop.fadeOut();
        }
      });
      pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
      });
    });
  </script>
  <script>
    $(function () {
      var headNav = $(".header");
      //scrollだけだと読み込み時困るのでloadも追加
      $(window).on('load scroll', function () {
        //現在の位置が500px以上かつ、クラスfixedが付与されていない時
        if ($(this).scrollTop() > 400 && headNav.hasClass('fixed') == false) {
          //headerの高さ分上に設定
          headNav.css({ "top": '-52px' });
          //クラスfixedを付与
          headNav.addClass('fixed');
          //位置を0に設定し、アニメーションのスピードを指定
          headNav.animate({ "top": 0 }, 500);
        }
        //現在の位置が300px以下かつ、クラスfixedが付与されている時にfixedを外す
        else if ($(this).scrollTop() < 380 && headNav.hasClass('fixed') == true) {
          headNav.removeClass('fixed');
        }
      });
    });
  </script>
</body>

</html>
