<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

            @foreach($seos as $seo)
            <url> 
                <loc>{{url($seo['url'])}}</loc>
                 
                <lastmod>{{  date('Y-m-d', strtotime($seo['updated_at'])).'T'.date('H:i:s', strtotime($seo['updated_at'])).'+00:00' }}</lastmod>
                
                <priority> {{ $seo['parent_id'] == 0 ? '1.0' : '0.5'  }} </priority>
                
              </url>
              @endforeach
        </urlset>            
 