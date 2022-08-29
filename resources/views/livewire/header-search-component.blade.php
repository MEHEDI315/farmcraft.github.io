<div class="bd-action__item">
    <div class="bd-action__item">
       <div class="bd-action__search-icon p-relative">
          <a class="search-toggle bd-h-search" href="javascript:void(0)">
             <svg xmlns="http://www.w3.org/2000/svg" width="16.05" height="16.05"
                viewBox="0 0 16.05 16.05">
                <path id="magnifiying-glass"
                   d="M15.867,14.985,11.95,11.068a6.765,6.765,0,1,0-.883.882l3.917,3.917a.624.624,0,1,0,.882-.882ZM1.248,6.755a5.507,5.507,0,1,1,5.507,5.507A5.513,5.513,0,0,1,1.248,6.755Z"
                   fill="#1c1d1b" />
             </svg>
             <i class="fal fa-times"></i>
          </a>
          <!-- Search-toggle-start -->
          <div class="bd-search__toggle">
             <form action="{{ route('product.search')}}" method="GET">
                <input type="text" name="query" placeholder="Search here..." >
                <button type="submit" wire:model="search"><i class="fal fa-search"></i></button>
             </form>
          </div>
          <!-- Search-toggle-end -->
       </div>
    </div>
 </div>
