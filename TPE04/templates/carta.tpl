
{foreach $products as $product}

{if ($product->id_category) eq ($category->id_category)}
    

<div class="card">
 <div class="imgBx">

            <img src="{$product->image_url}" alt="">
            
        </div>
        <div class="contentBx">
            <h2>{$product->name}</h2>
            <p>{$product->description}</p>
            <p class="price">{$product->price}</p>
            <a href="#">Buy Now</a>
        </div> </div>
{/if}
    
    {/foreach}  


        
