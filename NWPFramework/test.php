<?php
/**
 *NWP Framework Test
 *URL:HTTP://WWW.NWPIR.COM
 *By:ALIREZA GHADIMI
 *Prg.:PHP Storm V.7.1.3
 */
include "HTML.Library.php";

html("");
    head("");
        title("");e("NWP Framework Test");etitle();
    ehead();
    body("");
        h1("style = 'text-align: center'");e("NWP Framework");eh1();
        br();
        a("style='text-align: center' href = 'http://nwpir.com'");e("This is first test for NWP Framework");ea();
        br();
        b("style='color: rgb(0,2,355);'");e("Bold Text");eb();
        br();
        button("".a("").e("24").ea());e("Click Me");ebutton();
        br();
        iframe('SRC="recipe.html" TITLE="The Famous Recipe"');
        eiframe();
    ebody();
ehtml("");