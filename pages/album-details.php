<article>
  <header class="u-cf">
    <figure class="dozmia-album-art dozmia-album-art--dark u-pull-left"></figure>
    <h1>Blood Sex Sugar Magik</h1>
    <h4>Chopin</h4>
    <h4>1831</h4>
    <menu>
      <button class="dozmia-button dozmia-button--big-text u-normalize">&plus; Collect</button>
    </menu>
  </header>
  <div class="u-gutter">
    <table class="dozmia-album-track-list">
      <thead>
        <td>#</td>
        <td></td>
        <td>Track</td>
        <td></td>
        <td>[time]</td>
      </thead>
      <tbody>
        <tr class="dozmia-list-item">
          <td>1</td>
          <td><button class="u-normalize">[&plus;]</button></td>
          <td>Pendulum Swing</td>
          <td class="js-ellipsis">
            <menuitem>&#133;</menuitem>
          </td>
          <td>4:47</td>
        </tr>
        <tr class="dozmia-list-item"><td>2</td><td><button class="u-normalize">[&plus;]</button></td><td>Bla Bla</td><td class="js-ellipsis"><menuitem>&#133;<menuitem></td><td>4:47</td></tr>
        <tr class="dozmia-list-item dozmia-list-item--selected"><td>3</td><td><button class="u-normalize">[&plus;]</button></td><td>Pendulum Swing 2</td><td class="js-ellipsis"><menuitem>&#133;<menuitem></td><td>4:47</td></tr>
      </tbody>
    </table>
  </div>
  <div class="dozmia-flyout dozmia-flyout--left">
    <div class="dozmia-flyout-arrow"></div>
      <div class="dozmia-flyout-content">
        <menu>
          <menuitem>Collect</menuitem>
          <menuitem>Rock 'n Roll</menuitem>
          <menuitem>Everything</menuitem>
          <menuitem>Electronica</menuitem>
        </menu>
      </div>
    </div>
  </div>
</article>
<script type="text/javascript">
  $(function () {
    var timeoutId;
    $(".js-ellipsis").on("mouseover", function () {
      $flyout = $(".dozmia-flyout");
      $arrow = $(".dozmia-flyout-arrow", $flyout);
      $flyout.css("left", -$flyout.width() + $(this).position().left);
      $flyout.css("top", $(this).position().top);
      $arrow.css("top", $(this).height() / 2);
      $flyout.show();
      clearTimeout(timeoutId);
    });
    $(".js-ellipsis").on("mouseleave", function () {
      timeoutId = setTimeout(hideFlyout, 1000);
    });
    $(".dozmia-flyout").on("mouseover", function () {
      clearTimeout(timeoutId);
    });
    $(".dozmia-flyout").on("mouseleave", function () {
      timeoutId = setTimeout(hideFlyout, 1000);
    });
    function hideFlyout () {
      $(".dozmia-flyout").hide();
    }
  });
</script>
