/**
 * Festa Rich Text Editor Initialization
 * This file initializes the custom rich text editor for case study content
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all editors on the page
    const editorContainers = document.querySelectorAll('.festa-rich-text-field');
    
    if (editorContainers.length > 0) {
        // Load required dependencies
        loadDependencies()
            .then(() => {
                editorContainers.forEach(container => {
                    initializeEditor(container);
                });
            })
            .catch(error => {
                console.error('Failed to load editor dependencies:', error);
            });
    }
});

/**
 * Load required external dependencies for the editor
 */
function loadDependencies() {
    return new Promise((resolve, reject) => {
        // Check if dependencies are already loaded
        if (window.Editor && window.TipTap) {
            resolve();
            return;
        }
        
        // Load TipTap libraries
        const scriptTipTap = document.createElement('script');
        scriptTipTap.src = 'https://cdn.jsdelivr.net/npm/@tiptap/core@2.0.0-beta.218/dist/tiptap-core.umd.min.js';
        scriptTipTap.onload = () => {
            
            // Load TipTap extensions
            const scriptExtensions = document.createElement('script');
            scriptExtensions.src = 'https://cdn.jsdelivr.net/npm/@tiptap/starter-kit@2.0.0-beta.218/dist/tiptap-starter-kit.umd.min.js';
            scriptExtensions.onload = () => {
                
                // Load additional extensions
                const scriptTextStyle = document.createElement('script');
                scriptTextStyle.src = 'https://cdn.jsdelivr.net/npm/@tiptap/extension-text-style@2.0.0-beta.218/dist/tiptap-extension-text-style.umd.min.js';
                scriptTextStyle.onload = () => {
                    
                    const scriptColor = document.createElement('script');
                    scriptColor.src = 'https://cdn.jsdelivr.net/npm/@tiptap/extension-color@2.0.0-beta.218/dist/tiptap-extension-color.umd.min.js';
                    scriptColor.onload = () => {
                        
                        const scriptImage = document.createElement('script');
                        scriptImage.src = 'https://cdn.jsdelivr.net/npm/@tiptap/extension-image@2.0.0-beta.218/dist/tiptap-extension-image.umd.min.js';
                        scriptImage.onload = () => {
                            // All dependencies loaded
                            window.TipTap = {
                                StarterKit: window.StarterKit,
                                TextStyle: window.TextStyle,
                                Color: window.Color,
                                Image: window.Image
                            };
                            
                            resolve();
                        };
                        scriptImage.onerror = reject;
                        document.head.appendChild(scriptImage);
                    };
                    scriptColor.onerror = reject;
                    document.head.appendChild(scriptColor);
                };
                scriptTextStyle.onerror = reject;
                document.head.appendChild(scriptTextStyle);
            };
            scriptExtensions.onerror = reject;
            document.head.appendChild(scriptExtensions);
        };
        scriptTipTap.onerror = reject;
        document.head.appendChild(scriptTipTap);
    });
}

/**
 * Initialize an editor instance on a container element
 */
function initializeEditor(container) {
    const fieldName = container.dataset.fieldName || 'content';
    const uploadUrl = container.dataset.uploadUrl || '/admin/api/upload-image';
    const content = container.dataset.content || '';
    
    // Create editor instance
    const editor = new FestaRichTextEditor({
        selector: `#${container.id}`,
        uploadUrl: uploadUrl,
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
    return new FestaRichTextEditor(options);
};

/**
 * Get the content of an editor by its container ID
 */
window.getFestaEditorContent = function(containerId) {
    const container = document.getElementById(containerId);
    if (container && container.festaEditor) {
        return container.festaEditor.editor.getHTML();
    }
    return null;
}; 