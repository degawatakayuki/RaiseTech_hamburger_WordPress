<?php wp_head(); ?><!-- WordPress必須関数（headの最後に設定） -->
<header class="header-container">
    <p class="header-title">Hamburger</p>
    <button href="#" class="menu-btn">Menu</button>
    <form class="searchbox" action="archive_search.html" method="get">
        <input type="text" class="search_input">
        <input type="submit" class="search-btn" value="検索"></input><i class="fas fa-search"></i>
    </form>
</header>