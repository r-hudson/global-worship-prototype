<?php include "header.php"; ?>
	<script type="text/javascript" src="../js/search.js"></script>
	<form action="search.html">
        <div>Search keywords: <input type="text" name="keyword" id="keyword"></div>
        <div>Art form: <select name="art_form" id="artForm"></select></div>
        <div>Language: <select id="language" name="language"></select></div>
        <div>Genre: <select id="genre" name="genre"></select></div>
        <input type="submit" value="Submit">
    </form>
    <div id="searchResults"></div>
    <div id="pageNavigation">
        <a><input type="button" value="previous" id="previous" /></a>
        <span id="pageNumbers"></span>
        <a><input type="button" value="next" id="next" /></a>
    </div>
<?php include "footer.php"; ?>