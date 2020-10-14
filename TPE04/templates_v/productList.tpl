<div class="allProducts listaCartas">
        
    {foreach $products as $products} 



    
    {include file="product.tpl"}
{* ACA PODRIA PONER UN REQUIRE A SINGLE CARD Y QUEDARIA MEJOR YA QUE SON SOLO DATOS Y LOS CONTENEDORES EXTERIORES DE SINGLE Y PRODUCTLIST SON LOS QUE DEFINEN LA CAJITA
        <div class="card">
            <h2>{$product->name}</h2>
            <p>{$product->description}</p>
            <p>{$product->price}</p>
            <div class="imgBx">
                <img src="{$product->image_url}" alt="">
            </div>
            <div class="buttons"></div>
        </div> *}

    {/foreach}
</div>