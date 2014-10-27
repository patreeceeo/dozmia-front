<section>
<h1>Account</h1>
<form class="dozmia-account-settings">
  <p><label for="input-first-name">First Name:<input class="dozmia-account-settings-control u-pull-right u-normalize" id="input-first-name" type="text" placeholder="David" required></label></p>
  <p><label for="input-last-name">Last Name:<input class="dozmia-account-settings-control u-pull-right u-normalize" id="input-last-name" type="text" placeholder="Bowie" required></label></p>
  <p><label for="input-email">Email:<input class="dozmia-account-settings-control u-pull-right u-normalize" id="input-email" type="email" placeholder="spaceman777@gmail.com" required></label></p>
  <p><label for="input-password">Password:<input class="dozmia-account-settings-control u-pull-right u-normalize" id="input-first-name" type="password" value="aslkdfjdsfsd" required></label></p>
  <fieldset>
    <legend class="u-pull-left">Birthday:</legend>
    <span class="dozmia-account-settings-control dozmia-account-settings-bday u-pull-right">
      <label class="u-invisible" for="input-bday-month">Month</label>
      <input class="u-normalize" id="input-bday-month" type="text" placeholder="08" maxlength="2" title="month" pattern="\d\d" inputmode="numeric" required> /
      <label class="u-invisible" for="input-bday-day">Day of Month</label>
      <input class="u-normalize" id="input-bday-day" type="text" placeholder="23" maxlength="2" title="day of month" pattern="\d\d" inputmode="numeric" required> /
      <label class="u-invisible" for="input-bday-year">Year</label>
      <input class="u-normalize" id="input-bday-year" type="text" placeholder="1988" maxlength="4" title="year" pattern="[12][90]\d\d" inputmode="numeric" required>
    </span>
  </fieldset>
  <!-- <fieldset> -->
  <!--   <legend class="u-pull-left">Birthday</legend> -->
  <!--   <label class="u-invisible" for="input-bday-month">Month</label> -->
  <!--   <span class="dozmia-account-settings-control u-pull-right"> -->
  <!--     <select class="u-normalize" id="input-bday-month"> -->
  <!--       <option value="0">January</option> -->
  <!--       <option value="1">February</option> -->
  <!--     </select> -->
  <!--     <label class="u-invisible" for="input-bday-day">Day of Month</label> -->
  <!--     <input class="u-normalize" id="input-bday-day" type="number" min="0" max="31"> -->
  <!--     <label class="u-invisible" for="input-bday-year">Year</label> -->
  <!--     <input class="u-normalize" id="input-bday-year" type="number" min="1915" max="2015"> -->
  <!--   </span> -->
  <!-- </fieldset> -->
  <p><label for="input-password">Zipcode:<input class="dozmia-account-settings-control u-pull-right u-normalize" id="input-zipcode" type="text" placeholder="90210" maxlength="8"></label></p>
  <p>
    <label for="input-sex">Sex:
      <select class="dozmia-account-settings-control u-pull-right u-normalize" id="input-sex" dir="rtl" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
    </label>
  </p>
  <!-- <fieldset> -->
  <!--   <legend class="u-pull-left">Sex</legend> -->
  <!--   <span class="dozmia-account-settings-control"> -->
  <!--     <label for="input-male"><input class="u-normalize" type="radio" name="sex" id="input-male">M</label> -->
  <!--     <label for="input-female"><input class="u-normalize" type="radio" name="sex" id="input-female">F</label> -->
  <!--   </span> -->
  <!-- </fieldset> -->
  <p><input class="dozmia-button dozmia-button--hallow u-normalize" type="submit" value="Save Changes"></p>
</form>
