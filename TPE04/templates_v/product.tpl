<div class="card" id="{$product->product_id}">
        <h2>{$product->name}</h2>
        <p>{$product->description}</p>
        <p>{$product->price}</p>
        <div class="imgBx">
            <img src="{$product->image_url}" alt="">
        </div>
        <div class="buttons"></div>
    </div>





{* {include file="header.tpl"}

{foreach $products as $product}
    
    
<div class="container">
        <div class="imgBx">
            <img src="{$product->image_url}" alt="">
        </div>
        <div class="contentBx">
            <h2 class="name">{$product->name}</h2>
            <p class="description">{$product->description}</p>
            <p class="price">{$product->price}</p>
            
            <a href="#">Comprar</a>
        </div>
    </div>
{/foreach}

{include file="footer.tpl"}  *}