{include file="header.tpl"}

{foreach $products as $product}
    
    
<div class="container">
        <div class="imgBx">
            <img src="{$product->image_url}" alt="">
        </div>
        <div class="contentBx">
            <h2 class="name">{$product->name}</h2>
            <p class="description">{$product->description}</p>
            <p class="price">{$product->price}</p>
            {* VER *}
            <a href="#">Comprar</a>
        </div>
    </div>
{/foreach}

{include file="footer.tpl"} 