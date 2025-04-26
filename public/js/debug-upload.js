/**
 * Debug script for testing image upload
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log('Debug upload script loaded');
    
    // Create debug buttons
    createDebugButtons();
});

function createDebugButtons() {
    // Create container
    const container = document.createElement('div');
    container.className = 'fixed bottom-4 right-4 z-50 flex flex-col gap-2';
    
    // Regular upload button
    const regularBtn = document.createElement('button');
    regularBtn.textContent = 'Test Admin Upload';
    regularBtn.className = 'bg-red-500 text-white px-4 py-2 rounded-lg shadow-lg';
    regularBtn.addEventListener('click', () => testUpload('/admin/api/upload-image'));
    container.appendChild(regularBtn);
    
    // Simple upload button
    const simpleBtn = document.createElement('button');
    simpleBtn.textContent = 'Test Simple Upload';
    simpleBtn.className = 'bg-blue-500 text-white px-4 py-2 rounded-lg shadow-lg';
    simpleBtn.addEventListener('click', () => testUpload('/test-upload'));
    container.appendChild(simpleBtn);
    
    document.body.appendChild(container);
    console.log('Debug buttons created');
}

async function testUpload(uploadUrl) {
    console.log(`Test upload initiated to ${uploadUrl}`);
    
    try {
        // Create file input
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = 'image/*';
        
        // When file is selected
        input.addEventListener('change', async () => {
            if (!input.files || input.files.length === 0) {
                console.log('No file selected');
                return;
            }
            
            const file = input.files[0];
            console.log('File selected:', file.name, file.type, file.size);
            
            // Create status indicator
            const status = document.createElement('div');
            status.className = 'fixed top-4 right-4 z-50 bg-white p-4 rounded-lg shadow-lg max-w-md';
            status.innerHTML = '<p class="font-bold">Upload Status:</p><p>Uploading...</p>';
            document.body.appendChild(status);
            
            // Create form data
            const formData = new FormData();
            formData.append('image', file);
            
            // Get CSRF token
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            if (!csrfToken) {
                console.error('CSRF token not found');
                status.innerHTML += '<p class="text-red-500">Error: CSRF token not found</p>';
                return;
            }
            
            console.log('CSRF token:', csrfToken.substring(0, 8) + '...');
            console.log('Sending request to:', uploadUrl);
            
            status.innerHTML += `<p>Sending to: ${uploadUrl}</p>`;
            
            try {
                // Make the fetch request
                const response = await fetch(uploadUrl, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    credentials: 'same-origin'
                });
                
                console.log('Response status:', response.status);
                status.innerHTML += `<p>Response status: ${response.status}</p>`;
                
                // Check response
                if (!response.ok) {
                    const errorText = await response.text();
                    console.error('Upload failed:', errorText);
                    status.innerHTML += `<p class="text-red-500">Upload failed: ${response.status}</p>`;
                    status.innerHTML += `<pre class="text-xs bg-gray-100 p-2 mt-2 overflow-auto max-h-40">${errorText}</pre>`;
                    return;
                }
                
                const result = await response.json();
                console.log('Upload result:', result);
                
                if (result.success) {
                    console.log('Image URL:', result.url);
                    status.innerHTML += `<p class="text-green-500">Upload successful!</p>`;
                    status.innerHTML += `<p>URL: ${result.url}</p>`;
                    
                    // Display the image
                    const img = document.createElement('img');
                    img.src = result.url;
                    img.className = 'mt-2 max-w-full h-auto max-h-40 border border-green-500 rounded';
                    status.appendChild(img);
                } else {
                    console.error('Upload failed:', result.message);
                    status.innerHTML += `<p class="text-red-500">Upload failed: ${result.message}</p>`;
                    if (result.trace) {
                        status.innerHTML += `<pre class="text-xs bg-gray-100 p-2 mt-2 overflow-auto max-h-40">${result.trace}</pre>`;
                    }
                }
            } catch (error) {
                console.error('Fetch error:', error);
                status.innerHTML += `<p class="text-red-500">Fetch error: ${error.message}</p>`;
            }
        });
        
        // Open file selector
        input.click();
        
    } catch (error) {
        console.error('Test upload error:', error);
        alert(`Test upload error: ${error.message}`);
    }
} 