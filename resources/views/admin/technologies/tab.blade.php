@php( $tab=1 )
@if(request()->has('tab'))
	  @php( $tab=request()->get('tab') )
@endif
 
<ul class="nav nav-tabs">
  <li class="nav-item">
       <a  id="baseIcon-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1" class="nav-link {{ ($tab == 1) ? 'active' : '' }}"  aria-expanded="{{ ($tab != 1) ? 'true' : 'false' }}" >
            <i class="fa fa-ambulance"></i> Detail
        </a>
  </li>
  <li class="nav-item">
       <a id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2" class="nav-link {{ ($tab == 2) ? 'active' : '' }}"  aria-expanded="{{ ($tab != 2) ? 'true' : 'false' }}" >
			<i class="fa fa-sliders"></i>  Faqs
        </a>
  </li>
</ul>