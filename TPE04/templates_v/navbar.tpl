<header class="navbar">
        
        <a href="#">
            <img src="templates/img/logo.svg" alt="logo" class="logo">
        </a>
        
        <div id="toggleMenuAction" class="toggleMenu"></div>
        
        <ul class="navigation">
            <li>
                <a href="#">Home</a>
            </li>
            {foreach $products as $product}
            <li>
                <a href="#">{$product->name}</a>
            </li>
            {/foreach}
            <li class="loginButton" id="loginButton">
                <a href="#">Login</a>
            </li>
        </ul>

    </header>
