<?php

require_once("db.inc");
require_once("util.inc");
require_once("download.inc");

    init_session();
    db_init();

    page_head("Download BOINC software");
    echo "
        <h3>Download BOINC software</h3>
        <font color=ff0000>
        <b>First-time ".PROJECT." participants</b>:
        <br>Don't download BOINC software now.
        <a href=create_account_form.php>Create an account</a>
        before you download.
        </font>
        <p>
        If you're a returning ".PROJECT." user,
        click on your computer type:
        <p>
    ";
    print_download_links();
    echo "
        <p>
        <font size=-1>
        *BOINC is distributed computing software
        developed at the University of California by
        the SETI@home project.
        </font>
    ";
    page_tail();
?>
