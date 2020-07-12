	{* <div id="leftColumn"> *}

	  <div class=" col-lg-3 my-5">



	    <div id="accordion">
	      {foreach $rsCategories as $item name=count}
  	      <div class="card">
  	        <div class="card-header p-0">
  	          <h5>
  	            <div href="#collapse{$smarty.foreach.count.iteration}" data-parent="#accordion" data-toggle="collapse" class="p-3 headerText">{$item['name']}<i class="fas fa-chevron-down fa"></i></div>
  	          </h5>
  	        </div>
  
  
  	        {if isset($item['children'])}
    	        <div id="collapse{$smarty.foreach.count.iteration}" class="collapse">
    	          <div class="card-body p-0">
    	            <ul class="list-group">
    	              {foreach $item['children'] as $itemChild name=count}
      	              <li class="list-group-item p-0">
      	                <a href="/category/{$itemChild['id']}/" class="d-block p-2">
      	                  {$itemChild['name']}</a>
      	              </li>
    	              {/foreach}
    	            </ul>
    	          </div>
    	        </div>
  	        {/if}
  	      </div>
	      {/foreach}
	    </div>{*ACCORDION*}



	  </div> {*COL*}

	  <div class="col-lg-9">