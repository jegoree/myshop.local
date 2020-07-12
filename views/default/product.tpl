{* Product page *}



<h2 class="display-4 mt-5" id="test">{$rsProduct['name']}</h2>
<div class="row d-flex">
  <div class="col-lg-6 col-xl-5">

    <img src="/images/products/{$rsProduct['image']}" width="300px" alt="{$rsProduct['name']}" />
  </div>
  <div class="col-lg-6 col-xl-7">
    <br>
    <div class="pb-3">
      <strong>Price: &euro; {$rsProduct['price']}&#44;&#45; </strong>

      <a id="removeCart_{$rsProduct['id']}" {if !$itemInCart} class="hideme" {/if} href="#" onClick="removeCart({$rsProduct['id']}); return false" alt="Remove from cart">Remove from cart</a>

      <a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme" {/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Add to cart">Add to cart</a>
    </div>
    <p class="lead">Description</p><br>{$rsProduct['description']}

  </div>
</div>