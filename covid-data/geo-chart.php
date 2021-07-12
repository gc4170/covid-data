
<div class="info">
    <h2 class="pt-6 mb-4-mobile has-text-centered ">¿Cuáles son las provincias que ya están vacunando a tu grupo etario?</h2>     
    <p class="has-text-centered">
      Con la llegada continua de dosis se aceleró la vacunación en todo el país. Se incorporaron rápidamente más franjas etarias y se ampliaron las convocatorias para vacunación libre de grupos priorizados.  
    </p>
</div>


<div class="covid-menu mapa tabs is-centered mt-6">
  <ul>
    <li class="menu-items is-active">
    <a href="#argentina" class="has-text-centered" onclick="jQuery('.map_tabs').addClass('is-hidden');jQuery(jQuery(this).attr('href')).removeClass('is-hidden');jQuery('.menu-items').removeClass('is-active');jQuery(this).parent().addClass('is-active');return false">
      Argentina
      </a>
    </li>
    <li class="menu-items" >
      <a href="#caba" class="has-text-centered" onclick="jQuery('.map_tabs').addClass('is-hidden');jQuery(jQuery(this).attr('href')).removeClass('is-hidden');jQuery('.menu-items').removeClass('is-active');jQuery(this).parent().addClass('is-active');return false">
        Solo CABA
      </a>
    </li>
  </ul>
</div>

<div class="info">
  <div class="columns map_tabs" id="argentina">
      <div class="column  has-text-centered-mobile pt-0-mobile mt-0-mobile">
        <div class="flourish-embed flourish-map px-6 mx-6  ml-0-mobile mr-0-mobile pl-0-mobile pr-0-mobile" data-src="visualisation/6449217"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
      </div>
  </div>
  <div class="columns map_tabs is-hidden" id="caba">
      <div class="column  has-text-centered-mobile pt-0-mobile mt-0-mobile">
        <div class="flourish-embed flourish-map px-6 mx-6  ml-0-mobile mr-0-mobile pl-0-mobile pr-0-mobile" data-src="visualisation/6468412"><script src="https://public.flourish.studio/resources/embed.js"></script></div>
      </div>
  </div>
</div>