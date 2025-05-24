/**
 * Festa Rich Text Editor Initialization
 * This file initializes the custom rich text editor for case study content
 */

console.log('🚀 festa-editor-init.js is loading...');

document.addEventListener('DOMContentLoaded', function() {
    console.log('📋 DOM loaded, checking for editors...');
    
    // Initialize all editors on the page
    const editorContainers = document.querySelectorAll('.festa-rich-text-field');
    console.log(`Found ${editorContainers.length} editor containers with class festa-rich-text-field`);
    
    if (editorContainers.length > 0) {
        editorContainers.forEach(container => {
            console.log('Initializing editor for container:', container.id);
            initializeEditor(container);
        });
    }
});

/**
 * Initialize an editor instance on a container element
 */
function initializeEditor(container) {
    const fieldName = container.dataset.fieldName || 'content';
    const uploadUrl = container.dataset.uploadUrl || '/admin/api/upload-image';
    const content = container.dataset.content || '';
    
    console.log('📝 Initializing editor with:', { fieldName, uploadUrl, content });
    
    // Check if FestaRichTextEditor is available
    if (typeof FestaRichTextEditor === 'undefined') {
        console.error('❌ FestaRichTextEditor class not available');
        return;
    }
    
    // Create editor instance
    const editor = new FestaRichTextEditor({
        selector: `#${container.id}`,
        uploadUrl: uploadUrl,
        content: content,
        onChange: (html) => {
            // Create or update hidden input with editor content
            let hiddenInput = document.querySelector(`input[name="${fieldName}"]`);
            if (!hiddenInput) {
                hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = fieldName;
                container.parentNode.appendChild(hiddenInput);
            }
            hiddenInput.value = html;
            
            // Trigger change event on hidden input for form validation
            const event = new Event('change', { bubbles: true });
            hiddenInput.dispatchEvent(event);
        }
    });
    
    // Store editor instance on container for later reference
    container.festaEditor = editor;
    
    return editor;
}

/**
 * Create a rich text editor
 * This function can be called from outside to create an editor programmatically
 */
window.createFestaEditor = function(options) {
    console.log('🎯 createFestaEditor called with options:', options);
    return new FestaRichTextEditor(options);
};

/**
 * Get the content of an editor by its container ID
 */
window.getFestaEditorContent = function(containerId) {
    const container = document.getElementById(containerId);
    if (container && container.festaEditor) {
        return container.festaEditor.getEditorHTML();
    }
    return null;
};

/**
 * Initialize Festa Editor for a specific element ID and hidden input ID
 * This function is called from individual pages like blog edit
 */
window.initFestaEditor = function(editorId, hiddenInputId) {
    console.log('🔧 initFestaEditor function called');
    console.log('Initializing Festa Editor for:', editorId, hiddenInputId);
    
    // Function to check if FestaRichTextEditor is available and initialize editor
    const tryInitialize = () => {
        // Check if FestaRichTextEditor class is available
        if (typeof FestaRichTextEditor === 'undefined') {
            console.log('⏳ FestaRichTextEditor class not yet available, retrying...');
            return false;
        }
        
        const editorElement = document.getElementById(editorId);
        const hiddenInput = document.getElementById(hiddenInputId);
        
        if (!editorElement) {
            console.error('❌ Editor element not found:', editorId);
            return true; // Don't retry for this error
        }
        
        if (!hiddenInput) {
            console.error('❌ Hidden input not found:', hiddenInputId);
            return true; // Don't retry for this error
        }
        
        try {
            // Get initial content from hidden input
            const initialContent = hiddenInput.value || '';
            console.log('📄 Initial content:', initialContent);
            
            // Create the editor instance
            const editor = new FestaRichTextEditor({
                selector: `#${editorId}`,
                content: initialContent,
                uploadUrl: '/admin/api/upload-image',
                onChange: (html) => {
                    // Update hidden input with editor content
                    hiddenInput.value = html;
                    
                    // Trigger change event on hidden input for form validation
                    const event = new Event('change', { bubbles: true });
                    hiddenInput.dispatchEvent(event);
                }
            });
            
            // Store editor instance on element for later reference
            editorElement.festaEditor = editor;
            
            console.log('✅ Festa Editor initialized successfully');
            
            return true; // Success
        } catch (error) {
            console.error('❌ Error initializing Festa Editor:', error);
            return true; // Don't retry for initialization errors
        }
    };
    
    // Try to initialize immediately
    if (tryInitialize()) {
        return;
    }
    
    // If FestaRichTextEditor is not available, wait for it with exponential backoff
    let retryCount = 0;
    const maxRetries = 10;
    
    const retryInitialization = () => {
        retryCount++;
        
        if (retryCount > maxRetries) {
            console.error(`❌ Failed to initialize Festa Editor after ${maxRetries} attempts. FestaRichTextEditor class is not available.`);
            console.log('Available window objects:', Object.keys(window).filter(key => key.includes('Festa')));
            return;
        }
        
        if (tryInitialize()) {
            return;
        }
        
        // Wait with exponential backoff (50ms, 100ms, 200ms, etc.)
        const delay = Math.min(50 * Math.pow(2, retryCount - 1), 1000);
        console.log(`⏳ Retrying in ${delay}ms (attempt ${retryCount}/${maxRetries})`);
        setTimeout(retryInitialization, delay);
    };
    
    // Start retrying after a short delay
    setTimeout(retryInitialization, 50);
};

console.log('✅ initFestaEditor function defined:', typeof window.initFestaEditor);
console.log('🎉 festa-editor-init.js finished loading!'); 