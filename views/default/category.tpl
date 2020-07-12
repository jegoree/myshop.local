{* Categories page *}

<h1 class="mt-5">{$rsCategory['name']}</h1>

<div class="d-flex flex-wrap mt-2 mb-5">
  {if $rsProducts or $rsChildCats}
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
  
  {else}
    <h2 style="color:red"><ins> Currently unavaliable!</ins></h2>
  {/if}

</div>
{foreach $rsChildCats as $item name=childCats}
  <h2><a href="/category/{$item['id']}/">{$item['name']}</a></h2>
{/foreach}