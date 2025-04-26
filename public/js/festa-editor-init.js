/**
 * Festa Editor Initialization Script
 * Connects the admin templates with the rich text editor implementation
 */

// Initialize editor on specified element and connect to hidden input
function initFestaEditor(editorId, hiddenInputId) {
    console.log('initFestaEditor called for', editorId, hiddenInputId);
    
    // Make sure both elements exist
    const editorContainer = document.getElementById(editorId);
    const hiddenInput = document.getElementById(hiddenInputId);
    
    if (!editorContainer || !hiddenInput) {
        console.error('Editor container or hidden input not found', { 
            editorContainer: !!editorContainer, 
            hiddenInput: !!hiddenInput 
        });
        return;
    }
    
    console.log('Editor container and hidden input found', editorContainer, hiddenInput);
    
    // Add the class the initialization code looks for
    editorContainer.classList.add('festa-rich-text-field');
    
    // Set required data attributes
    editorContainer.dataset.fieldName = hiddenInput.name;
    editorContainer.dataset.content = hiddenInput.value || '';
    
    // Configure the image upload URL - USING EXACT ROUTE FROM LARAVEL
    const uploadUrl = window.location.origin + '/admin/api/upload-image';
    console.log('Setting upload URL to:', uploadUrl);
    
    // Initialize the editor
    const editor = new FestaRichTextEditor({
        selector: '#' + editorId,
        uploadUrl: uploadUrl,
        onChange: (html) => {
            // Update hidden input with editor content
            hiddenInput.value = html;
            
            // Log content length for debugging
            console.log('Editor content updated, length:', html.length);
        }
    });
    
    // Store editor reference on container element
    editorContainer.editor = editor;
    
    // Ensure media controls (including video button) are present
    setTimeout(() => {
        ensureVideoButton(editorContainer);
    }, 500);
    
    return editor;
}

// Function to ensure the video button is present
function ensureVideoButton(editorContainer) {
    const toolbar = editorContainer.querySelector('.festa-editor-toolbar');
    if (!toolbar) {
        console.error('Toolbar not found');
        return;
    }
    
    // Check if video button already exists
    let videoBtn = toolbar.querySelector('button[title="Embed Video"]');
    
    // If video button doesn't exist, add it
    if (!videoBtn) {
        console.log('Video button not found, adding it now');
        
        // Get editor instance
        const editor = editorContainer.editor;
        if (!editor) {
            console.error('Editor instance not found on container');
            return;
        }
        
        // Create the video button
        videoBtn = document.createElement('button');
        videoBtn.type = 'button';
        videoBtn.className = 'px-2 py-1 rounded text-sm hover:bg-white-smoke-100';
        videoBtn.textContent = 'Video';
        videoBtn.title = 'Embed Video';
        
        // Add icon or styling to make it more visible
        videoBtn.innerHTML = '<span class="px-2 py-1 bg-chicken-comb-50 text-chicken-comb-600 rounded">Video</span>';
        
        // Add click handler to show video dialog
        videoBtn.addEventListener('click', (e) => {
            e.preventDefault();
            if (typeof editor.showVideoEmbedDialog === 'function') {
                editor.showVideoEmbedDialog();
            } else {
                console.error('showVideoEmbedDialog method not found on editor');
                alert('Video embed functionality not available. Please refresh the page.');
            }
        });
        
        // Add to toolbar
        toolbar.appendChild(videoBtn);
        console.log('Video button added to toolbar');
    } else {
        console.log('Video button already exists in toolbar');
    }
}

// Load required scripts if not already loaded
function loadEditorScripts(forceReload = false) {
    return new Promise((resolve, reject) => {
        // Remove existing script if force reload
        if (forceReload) {
            const existingScript = document.querySelector('script[src="/js/festa-rich-text-editor.js"]');
            if (existingScript) {
                existingScript.parentNode.removeChild(existingScript);
                // Reset the global variable
                window.FestaRichTextEditor = undefined;
                window.createFestaEditor = undefined;
                console.log('Removed existing editor script for reload');
            }
        }
        
        // Check if main editor script is already loaded and we're not forcing reload
        if (!forceReload && typeof window.FestaRichTextEditor !== 'undefined') {
            console.log('FestaRichTextEditor already loaded');
            resolve();
            return;
        }
        
        console.log('Loading festa-rich-text-editor.js');
        // Load the main editor script
        const script = document.createElement('script');
        script.src = '/js/festa-rich-text-editor.js';
        script.onload = () => {
            console.log('festa-rich-text-editor.js loaded successfully');
            // Short delay to ensure script is fully initialized
            setTimeout(resolve, 100);
        };
        script.onerror = (err) => {
            console.error('Error loading festa-rich-text-editor.js', err);
            reject(err);
        };
        document.head.appendChild(script);
    });
}

// Make function globally available
window.initFestaEditor = initFestaEditor;

// Log that the initialization script has loaded
console.log('Festa editor initialization script loaded successfully'); 