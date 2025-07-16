<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Exceptions\PostTooLargeException;

class ValidatePostSize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \Illuminate\Http\Exceptions\PostTooLargeException
     */
    public function handle($request, Closure $next)
    {
        $max = $this->getPostMaxSize();

        if ($max > 0 && $request->server('CONTENT_LENGTH') > $max) {
            throw new PostTooLargeException('The POST data is too large.');
        }

        return $next($request);
    }

    /**
     * Determine the server 'post_max_size' as bytes.
     * Custom implementation that allows for larger uploads for blog content.
     *
     * @return int
     */
    protected function getPostMaxSize()
    {
        // Get the configured post_max_size from php.ini
        $postMaxSize = ini_get('post_max_size');
        
        // If post_max_size is 0, it means unlimited
        if ($postMaxSize === '0') {
            return 0;
        }
        
        // For blog content management, allow up to 100MB by default
        // This can be overridden by php.ini settings
        $defaultMaxSize = 100 * 1048576; // 100MB in bytes
        
        if (is_numeric($postMaxSize)) {
            return max((int) $postMaxSize, $defaultMaxSize);
        }

        $metric = strtoupper(substr($postMaxSize, -1));
        $postMaxSize = (int) $postMaxSize;

        $calculatedSize = match ($metric) {
            'K' => $postMaxSize * 1024,
            'M' => $postMaxSize * 1048576,
            'G' => $postMaxSize * 1073741824,
            default => $postMaxSize,
        };
        
        // Return the larger of the configured size or our default
        return max($calculatedSize, $defaultMaxSize);
    }
}