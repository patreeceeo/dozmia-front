<article>
  <header class="dozmia-artist u-cf">
    <figure class="dozmia-artist-photo u-pull-left"></figure>
    <h1>Chopin</h1>
  </header>
  <ol>
    <li class="dozmia-album-list-item">
      <menu class="u-pull-right">
        <button class="dozmia-button dozmia-button--big-text u-normalize u-gutter">&plus; Collect</button>
      </menu>
      <h4>Blood Sex Sugar Magik</h4>
      <h4>2006</h4>
      <div class="u-flex">
        <div class="dozmia-album-art dozmia-album-art--dark u-gutter"></div>
        <div class="u-gutter">
          <table class="dozmia-album-track-list u-pull-right">
            <thead>
              <td>#</td>
              <td></td>
              <td>Track</td>
              <td></td>
              <td class="dozmia-bg-clock"></td>
            </thead>
            <tbody>
              <tr class="dozmia-list-item">
                <td>1</td>
                <td><a class="dozmia-add-button u-normalize"></a></td>
                <td>Pendulum Swing</td>
                <td class="js-ellipsis">
                  <menuitem>&#133;</menuitem>
                </td>
                <td>4:47</td>
              </tr>
              <tr class="dozmia-list-item"><td>2</td><td><a class="dozmia-add-button u-normalize"></a></td><td>Bla Bla</td><td class="js-ellipsis"><menuitem>&#133;<menuitem></td><td>4:47</td></tr>
              <tr class="dozmia-list-item dozmia-list-item--selected"><td>3</td><td><a class="dozmia-add-button u-normalize"></a></td><td>Pendulum Swing 2</td><td class="js-ellipsis"><menuitem>&#133;<menuitem></td><td>4:47</td></tr>
            </tbody>
          </table>
        </div>
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
    </li>
    <li class="dozmia-album-list-item">
      <menu class="u-pull-right">
        <button class="dozmia-button dozmia-button--big-text u-normalize u-gutter">&plus; Collect</button>
      </menu>
      <h4>Graceland</h4>
      <h4>1982</h4>
      <div class="u-flex">
        <div class="dozmia-album-art dozmia-album-art--dark u-gutter"></div>
        <div class="u-gutter">
          <table class="dozmia-album-track-list u-pull-right">
            <thead>
              <td>#</td>
              <td></td>
              <td>Track</td>
              <td></td>
              <td class="dozmia-bg-clock"></td>
            </thead>
            <tbody>
              <tr class="dozmia-list-item">
                <td>1</td>
                <td><a class="dozmia-add-button u-normalize"></a></td>
                <td>Pendulum Swing</td>
                <td class="js-ellipsis">
                  <menuitem>&#133;</menuitem>
                </td>
                <td>4:47</td>
              </tr>
              <tr class="dozmia-list-item"><td>2</td><td><a class="dozmia-add-button u-normalize"></a></td><td>Bla Bla</td><td class="js-ellipsis"><menuitem>&#133;<menuitem></td><td>4:47</td></tr>
              <tr class="dozmia-list-item dozmia-list-item--selected"><td>3</td><td><a class="dozmia-add-button u-normalize"></a></td><td>Pendulum Swing 2</td><td class="js-ellipsis"><menuitem>&#133;<menuitem></td><td>4:47</td></tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="dozmia-flyout dozmia-flyout--left">
        <div class="dozmia-flyout-arrow"></div>
          <div class="dozmia-flyout-content">
            <menu class="dozmia-song-actions">
              <menuitem class="dozmia-add-action">Collect</menuitem>
              <menuitem>Rock 'n Roll</menuitem>
              <menuitem>Everything</menuitem>
              <menuitem>Electronica</menuitem>
            </menu>
          </div>
        </div>
      </div>
    </li>
  </ol>
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
