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
    
    // Load and initialize the editor
    if (typeof window.createFestaEditor === 'function') {
        // If the editor library is already loaded
        console.log('Creating Festa editor (function already available)');
        window.createFestaEditor({
            selector: `#${editorId}`,
            onChange: (html) => {
                hiddenInput.value = html;
            }
        });
    } else {
        // Need to wait for scripts to load
        console.log('Loading editor scripts first');
        loadEditorScripts().then(() => {
            console.log('Scripts loaded, now creating editor');
            window.createFestaEditor({
                selector: `#${editorId}`,
                onChange: (html) => {
                    hiddenInput.value = html;
                }
            });
        }).catch(err => {
            console.error('Failed to load editor scripts', err);
        });
    }
}

// Load required scripts if not already loaded
function loadEditorScripts() {
    return new Promise((resolve, reject) => {
        // Check if main editor script is already loaded
        if (typeof window.FestaRichTextEditor !== 'undefined') {
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
            resolve();
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