{* Cart page *}

<h1 class="display-4 mt-5">Shopping cart</h1>

{if !$rsProducts}
  Cart is empty.
  
{else}
  <form action="/cart/order/" method="POST">
    <h2>You have following items in cart</h2>
  
    <table class="table">
  
      <tr>
        <td>№</td>
        <td>Product</td>
        <td>Quantity</td>
        <td>Item price</td>
        <td>Total price</td>
        <td>Action</td>
      </tr>
  
      {foreach $rsProducts as $item name=products}
        <tr>
          <td>{$smarty.foreach.products.iteration}</td>
    
          <td><a href="/product/{$item['id']}/">{$item['name']}</a></td>
    
    
          <td>
    
    
            <input name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" text="text" value="1" onchange="conversionPrice({$item['id']});">
          </td>
          <td>
            <span id="itemPrice_{$item['id']}" value="{$item['price']}">
              {$item['price']}
            </span>
          </td>
          <td>
            <span name="" id="itemRealPrice_{$item['id']}">
              {$item['price']}
            </span>
          </td>
          <td>
            <a id="removeCart_{$item['id']}" href="#" onClick="removeCart({$item['id']}); return false;" title="Remove from cart">Remove from cart</a>
            <a id="addCart_{$item['id']}" class="hideme" href="#" onClick="addToCart({$item['id']}); return false;" title="Restore">Restore</a>
          </td>
    
        </tr>
      {/foreach}
  
    </table>
    <input class="btn btn-success" type="submit" value="Order">
  </form>
  
{/if}