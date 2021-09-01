<?php

namespace App\Http\Middleware\Site;

use App\Projects;
use Closure;
use Illuminate\Http\Request;

class SiteCompress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $response = $next($request);
        $buffer = $response->getContent();

        if (strpos($buffer, '<pre>') !== false) {
            $replace = array(
                '/<!--[^\[](.*?)[^\]]-->/s' => '',
                "/<\?php/"                  => '<?php ',
                "/\r/"                      => '',
                "/>\n</"                    => '><',
                "/>\s+\n</"                 => '><',
                "/>\n\s+</"                 => '><',
            );
        } else {

            $replace = array(
                '/<!--[^\[](.*?)[^\]]-->/s' => '',
                "/<\?php/"                  => '<?php ',
                "/\n([\S])/"                => '$1',
                "/\r/"                      => '',
                "/\n/"                      => '',
                "/\t/"                      => '',
                "/ +/"                      => ' ',
            );
        }

        $url = $request->getrequestUri();

        $inValidUrlTags = [
            '.js', '.css', '.png', '.jpg', 'media-manager', 'stylesheets?v', '/datatable?', 'javascript?v', '/admin/', '/_debugbar/', '/images/'
        ];
        $isinValid = false;
        foreach ($inValidUrlTags as $inValidUrlTag) {

            if (strpos($url, $inValidUrlTag) !== false) {
                $isinValid = true;
            }
        }
        if (!$isinValid) {
            $buffer = preg_replace(array_keys($replace), array_values($replace), $buffer);
        }
        $response->setContent($buffer);
        ini_set('zlib.output_compression', 'On'); // If you like to enable GZip, too!
        return $response;
    }
}
