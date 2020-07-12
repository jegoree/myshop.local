<h2 class="display-4 mt-5">{$pageTitle}</h2>


{if !$rsUserOrders}
  No orders found
{else}
  <table border="1" cellpadding="1" cellspacing="1">
    <tr>
      <th>№</th>
      <th>Action</th>
      <th>Order ID</th>
      <th>Status</th>
      <th>Order date</th>
      <th>Payment date</th>
      <th>Additional info</th>
    </tr>
    {foreach $rsUserOrders as $item name=orders}
      <tr>
        <td>{$smarty.foreach.orders.iteration}</td>
        <td><a href="#" onclick="showProducts('{$item['id']}'); return false">Show products</a></td>
        <td>{$item['id']}</td>
        <td>{$item['status']}</td>
        <td>{$item['date_created']}</td>
        <td>{$item['date_payment']}&nbsp;</td>
        <td>{$item['comment']}</td>
      </tr>
    
      <tr class="hideme" id="purchaseForOrderId_{$item['id']}">
        <td colspan="7">
          {if $item['children']}
            <table border="1" cellpadding="1" cellspacing="1" width="100%">
              <tr>
                <th>№</th>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Ammount</th>
              </tr>
              {foreach $item['children'] as $itemChild name=products}
                <tr>
                  <td>{$smarty.foreach.products.iteration}</td>
                  <td>{$itemChild['product_id']}</td>
                  <td><a href="/product/{$itemChild['product_id']}/">{$itemChild['name']}</a></td>
                  <td>{$itemChild['price']}</td>
                  <td>{$itemChild['ammount']}</td>
                </tr>
              {/foreach}
      
            </table>
          {/if}
        </td>
      </tr>
    {/foreach}
  </table>
{/if}