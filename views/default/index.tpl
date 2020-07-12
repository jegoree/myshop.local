{* tamplte of home page*}



<div class="d-flex flex-wrap my-5">
  {foreach $rsProducts as $item name=products}
    <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
      <div class="card d-flex flex-column w-100">
        <a href="/product/{$item['id']}/">
          <img class="card-img-top" src="/images/products/{$item['image']}" width="100px" alt="{$item['image']}" />
        </a>
        <h4 class="card-title">{$item['name']}</h4>
  
        <a class="btn btn-success mt-auto" href="/product/{$item['id']}/">Find out more</a>
      </div>
    </div>
  {/foreach}
</div>