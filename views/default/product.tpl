{* Product page *}

<h2 id="test">{$rsProduct['name']}</h2>

<img src="/images/products/{$rsProduct['image']}" width="300px" alt="{$rsProduct['name']}"/>
<br>
Price: {$rsProduct['price']} 

<a id="removeCart_{$rsProduct['id']}" {if !$itemInCart}class="hideme"{/if} href="#" onClick="removeCart({$rsProduct['id']}); return false" alt="Remove from cart">Remove from cart</a>

<a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"{/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Add to cart">Add to cart</a>

<p>Description<br>{$rsProduct['description']}</p>