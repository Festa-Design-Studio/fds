@props([
    'title' => 'Article Title',
    'url' => 'https://example.com/article'
])

<div {{ $attributes->merge(['class' => 'flex flex-col items-center md:items-end w-full']) }}>
    <div class="space-y-1 md:text-right text-center">
        <label class="text-the-end-400 text-body-sm">Share this article</label>
        <div class="flex space-x-1.5">
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode($url) }}&title={{ urlencode($title) }}" 
               target="_blank" rel="noopener" class="p-1" title="Share on LinkedIn"
               aria-label="Share article on LinkedIn">
                <svg class="w-6 h-6 fill-the-end-400 hover:fill-pepper-green-600" viewBox="0 0 33 33">
                    <title>Share on linkedin</title>
                    <g>
                        <path d="M31.74 0h-30.36c-0.76 0-1.38 0.62-1.38 1.38v30.36c0 0.76 0.62 1.38 1.38 1.38h30.36c0.76 0 1.38-0.62 1.38-1.38v-30.36c0-0.76-0.62-1.38-1.38-1.38z m-21.94 28.22h-4.9v-15.8h4.9v15.8z m-2.42-17.94c-1.59 0-2.83-1.24-2.83-2.83s1.24-2.83 2.83-2.83 2.83 1.24 2.83 2.83c0 1.52-1.24 2.83-2.83 2.83z m20.84 17.94h-4.9v-7.66c0-1.86 0-4.21-2.55-4.21s-2.97 2-2.97 4.07v7.8h-4.9v-15.8h4.69v2.14h0.07c0.62-1.24 2.28-2.55 4.63-2.55 4.97 0 5.86 3.24 5.86 7.52v8.69z"></path>
                    </g>
                </svg>
            </a>
            <!-- Facebook -->
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" 
               target="_blank" rel="noopener" class="p-1 text-the-end-400 hover:text-pepper-green-600" title="Share on Facebook"
               aria-label="Share article on Facebook">
                <svg class="w-6 h-6 fill-the-end-400 hover:fill-pepper-green-600" viewBox="0 0 48 48">
                    <title>Share on facebook</title>
                    <g>
                        <path d="M47,24.138A23,23,0,1,0,20.406,46.859V30.786H14.567V24.138h5.839V19.07c0-5.764,3.434-8.948,8.687-8.948a35.388,35.388,0,0,1,5.149.449v5.66h-2.9a3.325,3.325,0,0,0-3.732,2.857,3.365,3.365,0,0,0-.015.737v4.313h6.379l-1.02,6.648H27.594V46.859A23,23,0,0,0,47,24.138Z"></path>
                    </g>
                </svg>
            </a>
            <!-- X (Twitter) -->
            <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}&text={{ urlencode($title) }}" 
               target="_blank" rel="noopener" class="p-1 text-the-end-400 hover:text-pepper-green-600" title="Share on X"
               aria-label="Share article on X (Twitter)">
                <svg class="w-6 h-6 fill-the-end-400 hover:fill-pepper-green-600" viewBox="0 0 1200 1227">
                    <title>Share on X</title>
                    <g>
                        <defs></defs>
                        <path class="st0" d="M714.2,519.3L1160.9,0h-105.9l-387.9,450.9L357.3,0H0l468.5,681.8L0,1226.4h105.9l409.6-476.2,327.2,476.2h357.3l-485.9-707.1h0ZM569.2,687.8l-47.5-67.9L144,79.7h162.6l304.8,436,47.5,67.9,396.2,566.7h-162.6l-323.3-462.4h0Z"></path>
                    </g>
                </svg>
            </a>
            <!-- Copy Link -->
            <button type="button" class="p-1 text-the-end-400 hover:text-pepper-green-600" 
                onclick="copyArticleLink(this, '{{ $url }}')" 
                title="Copy link"
                aria-label="Copy article link to clipboard">
                <svg class="w-6 h-6 fill-the-end-400 hover:fill-pepper-green-600" viewBox="0 0 48 48">
                    <title>Copy link</title>
                    <g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34 28C34 31.3137 31.3137 34 28 34L10 34C6.68629 34 4 31.3137 4 28L4 10C4 6.68629 6.68629 4 10 4L28 4C31.3137 4 34 6.68629 34 10L34 28Z"></path>
                        <path d="M38 44C41.3137 44 44 41.3137 44 38L44 20C44 16.6863 41.3137 14 38 14L37 14L37 29C37 33.4183 33.4183 37 29 37L14 37L14 38C14 41.3137 16.6863 44 20 44L38 44Z"></path>
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
function copyArticleLink(button, url) {
    // Try modern clipboard API first
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(url).then(() => {
            showCopySuccess(button);
        }).catch((err) => {
            console.error('Failed to copy with clipboard API:', err);
            fallbackCopyText(button, url);
        });
    } else {
        // Fallback for older browsers
        fallbackCopyText(button, url);
    }
}

function fallbackCopyText(button, url) {
    try {
        // Create temporary input element
        const tempInput = document.createElement('input');
        tempInput.value = url;
        tempInput.style.position = 'absolute';
        tempInput.style.left = '-9999px';
        document.body.appendChild(tempInput);
        
        // Select and copy
        tempInput.select();
        tempInput.setSelectionRange(0, 99999);
        const successful = document.execCommand('copy');
        
        // Clean up
        document.body.removeChild(tempInput);
        
        if (successful) {
            showCopySuccess(button);
        } else {
            showCopyError(button);
        }
    } catch (err) {
        console.error('Fallback copy failed:', err);
        showCopyError(button);
    }
}

function showCopySuccess(button) {
    const originalHTML = button.innerHTML;
    button.innerHTML = `<svg class='w-6 h-6 fill-pepper-green-600' viewBox='0 0 48 48'><title>Copied!</title><g><path fill-rule='evenodd' clip-rule='evenodd' d='M34 28C34 31.3137 31.3137 34 28 34L10 34C6.68629 34 4 31.3137 4 28L4 10C4 6.68629 6.68629 4 10 4L28 4C31.3137 4 34 6.68629 34 10L34 28Z'></path><path d='M38 44C41.3137 44 44 41.3137 44 38L44 20C44 16.6863 41.3137 14 38 14L37 14L37 29C37 33.4183 33.4183 37 29 37L14 37L14 38C14 41.3137 16.6863 44 20 44L38 44Z'></path></g></svg>`;
    button.setAttribute('aria-label', 'Link copied to clipboard');
    
    // Show toast notification
    showToast('Link copied to clipboard!', 'success');
    
    // Add pulse animation
    button.classList.add('animate-pulse');
    
    setTimeout(() => {
        button.innerHTML = originalHTML;
        button.setAttribute('aria-label', 'Copy article link to clipboard');
        button.classList.remove('animate-pulse');
    }, 1200);
}

function showCopyError(button) {
    const originalHTML = button.innerHTML;
    button.innerHTML = `<svg class='w-6 h-6 fill-chicken-comb-600' viewBox='0 0 48 48'><title>Copy failed</title><g><path d='M24 4C12.96 4 4 12.96 4 24s8.96 20 20 20 20-8.96 20-20S35.04 4 24 4zm2 30h-4v-4h4v4zm0-8h-4V14h4v12z'/></g></svg>`;
    button.setAttribute('aria-label', 'Copy failed - try selecting and copying the URL manually');
    
    // Show error toast
    showToast('Failed to copy link. Please try again.', 'error');
    
    setTimeout(() => {
        button.innerHTML = originalHTML;
        button.setAttribute('aria-label', 'Copy article link to clipboard');
    }, 2000);
}

function showToast(message, type) {
    // Remove existing toast if present
    const existingToast = document.getElementById('copy-toast');
    if (existingToast) {
        existingToast.remove();
    }
    
    // Create toast element
    const toast = document.createElement('div');
    toast.id = 'copy-toast';
    toast.className = `fixed top-4 right-4 z-50 px-4 py-3 rounded-lg shadow-lg transform transition-all duration-300 ease-in-out ${
        type === 'success' 
            ? 'bg-pepper-green-100 text-pepper-green-800 border border-pepper-green-300' 
            : 'bg-chicken-comb-100 text-chicken-comb-800 border border-chicken-comb-300'
    }`;
    
    toast.innerHTML = `
        <div class="flex items-center gap-2">
            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                ${type === 'success' 
                    ? '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>'
                    : '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>'
                }
            </svg>
            <span class="text-body-sm font-medium">${message}</span>
        </div>
    `;
    
    // Add to page
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => {
        toast.style.transform = 'translateY(0)';
        toast.style.opacity = '1';
    }, 10);
    
    // Remove after delay
    setTimeout(() => {
        toast.style.transform = 'translateY(-100%)';
        toast.style.opacity = '0';
        setTimeout(() => {
            if (toast.parentNode) {
                toast.parentNode.removeChild(toast);
            }
        }, 300);
    }, 3000);
}
</script> 