{* tamplte of home page*}



<div class="d-flex flex-wrap my-5">
  {foreach $rsProducts as $item name=products}
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card">
        <a href="/product/{$item['id']}/">
          <img class="card-img-top" src="/images/products/{$item['image']}" width="100px" alt="{$item['image']}" />
        </a>
        <h4 class="card-title"><a href="/product/{$item['id']}/">{$item['name']}</a></h4>
      </div>
    </div>
  {/foreach}
</div>