/**
 * Festa Rich Text Editor
 * A lightweight rich text editor for the Festa Design Studio admin
 */

console.log('Festa Rich Text Editor script loaded');

class FestaRichTextEditor {
    constructor(options = {}) {
        console.log('FestaRichTextEditor constructor called with options:', options);
        
        this.options = {
            selector: '#festa-editor',
            uploadUrl: '/api/upload-image',
            onChange: null,
            ...options
        };
        
        this.element = document.querySelector(this.options.selector);
        if (!this.element) {
            console.error(`Element with selector ${this.options.selector} not found`);
            return;
        }
        
        console.log('Found editor element:', this.element);
        this.init();
    }
    
    init() {
        // Create editor structure
        this.createEditorContainer();
        this.setupToolbar();
        this.setupContentEditable();
        
        // Set initial content if available
        if (this.element.dataset.content) {
            console.log('Setting initial content from dataset');
            this.contentArea.innerHTML = this.element.dataset.content;
        }
        
        console.log('Editor initialization complete');
    }
    
    createEditorContainer() {
        console.log('Creating editor container');
        
        // Create wrapper for the editor
        this.wrapper = document.createElement('div');
        this.wrapper.className = 'festa-editor-wrapper border border-white-smoke-300 rounded-lg overflow-hidden';
        
        // Create toolbar container
        this.toolbar = document.createElement('div');
        this.toolbar.className = 'festa-editor-toolbar bg-white-smoke-50 border-b border-white-smoke-300 p-2 flex flex-wrap gap-2';
        
        // Create content area
        this.contentArea = document.createElement('div');
        this.contentArea.className = 'festa-editor-content p-4 min-h-[300px] bg-white';
        this.contentArea.contentEditable = true;
        
        // Append containers to wrapper
        this.wrapper.appendChild(this.toolbar);
        this.wrapper.appendChild(this.contentArea);
        
        // Replace original element with our wrapper
        this.element.parentNode.replaceChild(this.wrapper, this.element);
        console.log('Editor container created and added to DOM');
    }
    
    setupToolbar() {
        console.log('Setting up toolbar');
        
        // Create toolbar sections
        const formatSection = document.createElement('div');
        formatSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
        const headingSection = document.createElement('div');
        headingSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
        const paragraphSection = document.createElement('div');
        paragraphSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
        const listSection = document.createElement('div');
        listSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
        const colorSection = document.createElement('div');
        colorSection.className = 'flex items-center gap-1';
        
        // Add basic formatting buttons
        const formatButtons = [
            { label: 'B', title: 'Bold', className: 'font-bold', action: () => this.execCommand('bold') },
            { label: 'I', title: 'Italic', className: 'italic', action: () => this.execCommand('italic') },
            { label: 'U', title: 'Underline', className: 'underline', action: () => this.execCommand('underline') }
        ];
        
        formatButtons.forEach(btn => {
            const button = this.createToolbarButton(btn);
            formatSection.appendChild(button);
        });
        
        // Add heading format buttons with Festa typography classes
        const headingButtons = [
            { label: 'H1', title: 'Heading 1 (Large)', action: () => this.applyHeadingWithClass('h1', 'text-h1 font-bold text-the-end-900') },
            { label: 'H2', title: 'Heading 2 (Section)', action: () => this.applyHeadingWithClass('h2', 'text-h2 font-bold text-pepper-green') },
            { label: 'H3', title: 'Heading 3 (Subsection)', action: () => this.applyHeadingWithClass('h3', 'text-h3 font-semibold text-the-end-900') },
            { label: 'H4', title: 'Heading 4', action: () => this.applyHeadingWithClass('h4', 'text-h4 font-semibold text-the-end-900') },
            { label: 'H5', title: 'Heading 5', action: () => this.applyHeadingWithClass('h5', 'text-h5 font-medium text-the-end-900') }
        ];
        
        headingButtons.forEach(btn => {
            const button = this.createToolbarButton(btn);
            headingSection.appendChild(button);
        });

        // Add paragraph style buttons based on Festa typography system
        const paragraphButtons = [
            { label: 'P', title: 'Normal Paragraph', action: () => this.applyHeadingWithClass('p', 'text-body text-the-end-700') },
            { label: 'P-lg', title: 'Large Paragraph', action: () => this.applyHeadingWithClass('p', 'text-body-lg text-the-end-700') },
            { label: 'P-sm', title: 'Small Paragraph', action: () => this.applyHeadingWithClass('p', 'text-body-sm text-the-end-600') }
        ];
        
        paragraphButtons.forEach(btn => {
            const button = this.createToolbarButton(btn);
            paragraphSection.appendChild(button);
        });
        
        // Add list buttons
        const listButtons = [
            { label: '• List', title: 'Bullet List', action: () => this.execCommand('insertUnorderedList') },
            { label: '1. List', title: 'Numbered List', action: () => this.execCommand('insertOrderedList') }
        ];
        
        listButtons.forEach(btn => {
            const button = this.createToolbarButton(btn);
            listSection.appendChild(button);
        });
        
        // Add color controls
        const colorPicker = document.createElement('input');
        colorPicker.type = 'color';
        colorPicker.title = 'Text Color';
        colorPicker.className = 'w-8 h-8 p-0 border-0 cursor-pointer';
        colorPicker.addEventListener('change', (e) => {
            this.execCommand('foreColor', e.target.value);
        });
        
        const colorLabel = document.createElement('span');
        colorLabel.textContent = 'Text';
        colorLabel.className = 'text-sm ml-1 mr-2';
        
        const bgColorPicker = document.createElement('input');
        bgColorPicker.type = 'color';
        bgColorPicker.title = 'Background Color';
        bgColorPicker.className = 'w-8 h-8 p-0 border-0 cursor-pointer';
        bgColorPicker.addEventListener('change', (e) => {
            this.execCommand('hiliteColor', e.target.value);
        });
        
        const bgColorLabel = document.createElement('span');
        bgColorLabel.textContent = 'Background';
        bgColorLabel.className = 'text-sm ml-1';
        
        colorSection.appendChild(colorPicker);
        colorSection.appendChild(colorLabel);
        colorSection.appendChild(bgColorPicker);
        colorSection.appendChild(bgColorLabel);
        
        // Add all sections to toolbar
        this.toolbar.appendChild(formatSection);
        this.toolbar.appendChild(headingSection);
        this.toolbar.appendChild(paragraphSection);
        this.toolbar.appendChild(listSection);
        this.toolbar.appendChild(colorSection);

        // Add theme color buttons based on Festa color system
        this.addThemeColorButtons();
    }

    addThemeColorButtons() {
        // Create theme color section for text colors
        const themeColorSection = document.createElement('div');
        themeColorSection.className = 'flex items-center gap-1 mt-2 pt-2 border-t border-white-smoke-300 w-full';
        
        // Add label
        const themeLabel = document.createElement('span');
        themeLabel.textContent = 'Theme:';
        themeLabel.className = 'text-sm mr-2';
        themeColorSection.appendChild(themeLabel);
        
        // Theme color buttons with exact color codes from tailwind config
        const themeColors = [
            { color: '#007f4e', label: 'Pepper Green', class: 'text-pepper-green' },
            { color: '#e12729', label: 'Chicken Comb', class: 'text-chicken-comb' },
            { color: '#f37324', label: 'Orange', class: 'text-apocalyptic-orange' },
            { color: '#f8cc1b', label: 'Gold', class: 'text-pot-of-gold' },
            { color: '#2a2a2a', label: 'Black', class: 'text-the-end' }
        ];
        
        themeColors.forEach(color => {
            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'w-6 h-6 rounded-full border border-white-smoke-300 mx-1';
            button.title = color.label;
            button.style.backgroundColor = color.color;
            button.addEventListener('click', (e) => {
                e.preventDefault();
                this.applyThemeClass(color.class);
            });
            themeColorSection.appendChild(button);
        });
        
        this.toolbar.appendChild(themeColorSection);
    }
    
    createToolbarButton(btn) {
        const button = document.createElement('button');
        button.type = 'button';
        button.className = `px-2 py-1 rounded text-sm hover:bg-white-smoke-100 ${btn.className || ''}`;
        button.textContent = btn.label;
        button.title = btn.title || btn.label;
        button.addEventListener('click', (e) => {
            e.preventDefault();
            btn.action();
        });
        return button;
    }
    
    setupContentEditable() {
        console.log('Setting up content editable area');
        // Listen for changes in the content area
        this.contentArea.addEventListener('input', () => {
            this.handleContentChange();
        });
        
        // Make sure focus works properly
        this.contentArea.addEventListener('focus', () => {
            this.contentArea.classList.add('outline-none', 'ring-2', 'ring-pepper-green-300');
        });
        
        this.contentArea.addEventListener('blur', () => {
            this.contentArea.classList.remove('outline-none', 'ring-2', 'ring-pepper-green-300');
        });

        // Ensure document has a click handler to handle selection
        document.addEventListener('selectionchange', () => {
            this.currentSelection = document.getSelection();
        });

        // Ensure paste events maintain formatting
        this.contentArea.addEventListener('paste', (e) => {
            e.preventDefault();
            
            // Get text content
            let text;
            if (e.clipboardData) {
                text = e.clipboardData.getData('text/plain');
            } else if (window.clipboardData) {
                text = window.clipboardData.getData('Text');
            }
            
            // Insert as plain text
            if (text && document.queryCommandSupported('insertText')) {
                document.execCommand('insertText', false, text);
            } else {
                document.execCommand('paste', false, text);
            }
        });
    }
    
    execCommand(command, value = null) {
        // Focus the editor first and select content if needed
        this.contentArea.focus();
        
        // Execute the command
        try {
            const result = document.execCommand(command, false, value);
            console.log(`Command ${command} executed with result:`, result);
        } catch (error) {
            console.error(`Error executing command ${command}:`, error);
        }
        
        // Handle content change
        this.handleContentChange();
    }
    
    // New method to apply both HTML tag and className in one operation
    applyHeadingWithClass(tag, className) {
        console.log(`Applying heading ${tag} with class ${className}`);
        
        // Ensure we have focus and selection
        this.contentArea.focus();
        const selection = window.getSelection();
        
        if (selection.rangeCount === 0) {
            console.warn('No selection found for heading/paragraph formatting');
            return;
        }
        
        const range = selection.getRangeAt(0);
        
        // Get common ancestor to determine what we're working with
        const container = range.commonAncestorContainer;
        
        // Find block element to replace or determine insertion point
        let blockElement = container;
        if (container.nodeType === Node.TEXT_NODE) {
            blockElement = container.parentNode;
        }
        
        while (blockElement && 
               blockElement !== this.contentArea && 
               !['P', 'DIV', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'LI', 'BLOCKQUOTE'].includes(blockElement.tagName)) {
            blockElement = blockElement.parentNode;
        }
        
        // Create a new element with the tag and class
        const newElement = document.createElement(tag);
        newElement.className = className;
        
        try {
            if (blockElement && blockElement !== this.contentArea) {
                // Replace existing block element
                console.log('Replacing existing block element', blockElement);
                
                if (blockElement.tagName === 'LI') {
                    // Special handling for list items - we need to extract from the list
                    console.log('Special handling for list item');
                    
                    // Save the list's parent to insert after the list
                    const list = blockElement.parentNode;
                    const listParent = list.parentNode;
                    
                    // Move content from the LI to the new element
                    newElement.innerHTML = blockElement.innerHTML;
                    
                    // Check if this is the only list item
                    if (list.children.length === 1) {
                        // Replace the entire list with our new element
                        listParent.replaceChild(newElement, list);
                    } else {
                        // Add the new element after the list item
                        if (blockElement.nextSibling) {
                            list.insertBefore(newElement, blockElement.nextSibling);
                        } else {
                            listParent.insertBefore(newElement, list.nextSibling);
                            // Remove the list item
                            list.removeChild(blockElement);
                        }
                    }
                } else {
                    // Copy contents and replace
                    newElement.innerHTML = blockElement.innerHTML;
                    blockElement.parentNode.replaceChild(newElement, blockElement);
                }
            } else {
                // Insert a new block with selection content
                console.log('Creating new block element from selection');
                
                // Extract selected content
                const fragment = range.extractContents();
                
                // If fragment is empty, add a space to ensure element has content
                if (!fragment.textContent.trim()) {
                    newElement.innerHTML = '&nbsp;';
                } else {
                    newElement.appendChild(fragment);
                }
                
                // Insert the new element
                range.insertNode(newElement);
            }
            
            // Place cursor at the end of the new element
            this.placeCursorAtEnd(newElement);
            
        } catch (error) {
            console.error('Error applying heading/paragraph:', error);
            
            // Fallback method
            try {
                console.log('Trying fallback method for heading/paragraph');
                // First apply the formatting tag
                document.execCommand('formatBlock', false, `<${tag}>`);
                
                // Then find the just-created element and add the class
                const selection = window.getSelection();
                if (selection.rangeCount > 0) {
                    const range = selection.getRangeAt(0);
                    const container = range.commonAncestorContainer;
                    
                    // Find the element we just created
                    let el = container;
                    if (container.nodeType === Node.TEXT_NODE) {
                        el = container.parentNode;
                    }
                    
                    while (el && el !== this.contentArea && el.tagName.toLowerCase() !== tag) {
                        el = el.parentNode;
                    }
                    
                    if (el && el.tagName.toLowerCase() === tag) {
                        el.className = className;
                    }
                }
            } catch (fallbackError) {
                console.error('Fallback method also failed:', fallbackError);
            }
        }
        
        this.handleContentChange();
    }

    applyThemeClass(className) {
        // Get current selection
        const selection = window.getSelection();
        
        if (selection.rangeCount === 0) {
            console.log('No selection for theme class application');
            return;
        }
        
        const range = selection.getRangeAt(0);
        
        try {
            // If the selection is collapsed (just a cursor), we need to find the current paragraph/heading
            if (range.collapsed) {
                console.log('Selection is collapsed, finding containing block');
                let node = range.commonAncestorContainer;
                
                // If we're in a text node, get its parent
                if (node.nodeType === Node.TEXT_NODE) {
                    node = node.parentNode;
                }
                
                // Find the closest block element
                while (node && 
                       node !== this.contentArea && 
                       !['P', 'DIV', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6'].includes(node.tagName)) {
                    node = node.parentNode;
                }
                
                if (node && node !== this.contentArea) {
                    // Extract existing classes that aren't text-color classes
                    const existingClasses = node.className.split(' ').filter(cls => 
                        !cls.startsWith('text-pepper-green') && 
                        !cls.startsWith('text-chicken-comb') && 
                        !cls.startsWith('text-apocalyptic-orange') && 
                        !cls.startsWith('text-pot-of-gold') && 
                        !cls.startsWith('text-the-end')
                    );
                    
                    // Add the new text-color class
                    existingClasses.push(className);
                    node.className = existingClasses.join(' ');
                    console.log('Applied theme class to block element:', node);
                }
            } else {
                console.log('Selection spans multiple nodes, wrapping with span');
                // Create a span with the theme class
                const span = document.createElement('span');
                span.className = className;
                
                // Extract the content from the range and put it in the span
                const fragment = range.extractContents();
                span.appendChild(fragment);
                
                // Insert the span at the range position
                range.insertNode(span);
                
                // Place cursor at the end of the span
                this.placeCursorAtEnd(span);
            }
        } catch (error) {
            console.error('Error applying theme class:', error);
        }
        
        this.handleContentChange();
    }

    placeCursorAtEnd(element) {
        // Create a new range
        const range = document.createRange();
        
        // Place range at the end of the element
        range.selectNodeContents(element);
        range.collapse(false); // collapse to end
        
        // Apply the range
        const selection = window.getSelection();
        selection.removeAllRanges();
        selection.addRange(range);
        
        // Ensure focus remains in the editor
        this.contentArea.focus();
    }
    
    handleContentChange() {
        // Get HTML content
        const html = this.contentArea.innerHTML;
        
        // Trigger onChange callback
        if (typeof this.options.onChange === 'function') {
            this.options.onChange(html);
        }
    }
    
    getHTML() {
        return this.contentArea.innerHTML;
    }
    
    setHTML(html) {
        this.contentArea.innerHTML = html;
        this.handleContentChange();
    }
}

// Make class globally available
window.FestaRichTextEditor = FestaRichTextEditor;

// Create a global function to instantiate the editor
window.createFestaEditor = function(options) {
    console.log('createFestaEditor called with options:', options);
    return new FestaRichTextEditor(options);
};

// Log that the script is ready
console.log('Festa Rich Text Editor script ready for use'); 