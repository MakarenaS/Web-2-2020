<div class="cardList">

{foreach from=$products item=product}

    <div class="card">
        <div class="imgBx">
            <img src="$product->image_url" alt="">
        </div>
        <div class="contentBx">
            <h2 class="name">$product->name</h2>
            <p class="description">$product->description</p>
            <p class="price">$product->precio</p>
            {* VER *}
            <a href="addCart/{$product->id_product}>Comprar</a>
        </div>
    </div>    
{/foreach}
</div>

