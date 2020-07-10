	<div id="leftColumn">

	  <div id="leftMenu">
	    <div class="menuCaption">Menu:</div>
	    {foreach $rsCategories as $item}
  	    <a href="/category/{$item['id']}/">{$item['name']}</a><br>
  
  	    {if isset($item['children'])}
    	    {foreach $item['children'] as $itemChild}
      	    --<a href="/category/{$itemChild['id']}/">{$itemChild['name']}</a></br>
    	    {/foreach}
  	    {/if}
	    {/foreach}
	  </div>


	  <div>
	    <div class="menuCaption">Shopping cart</div>
	    <a href="/cart/" title="Go to cart">In cart: </a>
	    <span id="cartCntItems">
	      {if $cartCntItems > 0}{$cartCntItems}{else}Empty{/if}
	    </span>
	  </div>
	</div>