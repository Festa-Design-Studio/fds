/**
 * Festa Rich Text Editor
 * A custom editor implementation for case studies that seamlessly integrates
 * with Tailwind CSS classes and typography system.
 */

console.log('🚀 festa-rich-text-editor.js is loading...');

class FestaRichTextEditor {
    constructor(options = {}) {
        this.options = {
            selector: '#festa-editor',
            uploadUrl: '/admin/api/upload-image',
            ...options
        };
        
        console.log('🎯 FestaRichTextEditor constructor called with options:', this.options);
        
        this.element = document.querySelector(this.options.selector);
        if (!this.element) {
            console.error(`❌ Element with selector ${this.options.selector} not found`);
            return;
        }
        
        console.log('✅ Found element:', this.element);
        
        this.init();
    }
    
    init() {
        console.log('🔧 Initializing editor...');
        this.createEditorContainer();
        this.initTipTap();
        this.createToolbar();
        console.log('✅ Editor initialization completed');
    }
    
    createEditorContainer() {
        // Create wrapper for the editor
        this.wrapper = document.createElement('div');
        this.wrapper.className = 'festa-editor-wrapper border border-white-smoke-300 rounded-lg overflow-hidden';
        
        // Create toolbar container
        this.toolbarContainer = document.createElement('div');
        this.toolbarContainer.className = 'festa-editor-toolbar bg-white-smoke-50 border-b border-white-smoke-300 p-2 flex flex-wrap gap-2';
        
        // Create content container
        this.contentContainer = document.createElement('div');
        this.contentContainer.className = 'festa-editor-content p-4 min-h-[300px] bg-white focus:outline-none';
        
        // Append containers to wrapper
        this.wrapper.appendChild(this.toolbarContainer);
        this.wrapper.appendChild(this.contentContainer);
        
        // Replace original element with our wrapper
        this.element.parentNode.replaceChild(this.wrapper, this.element);
    }
    
    initTipTap() {
        // Simplified version using contentEditable instead of TipTap for now
        // Get initial content from options or original element
        const initialContent = this.options.content || this.element.value || '';
        
        // Make content container editable
        this.contentContainer.contentEditable = true;
        this.contentContainer.innerHTML = initialContent;
        
        // Add placeholder when empty
        if (!initialContent.trim()) {
            this.contentContainer.innerHTML = '<p class="text-the-end-400">Start writing your content...</p>';
        }
        
        // Handle content changes
        this.contentContainer.addEventListener('input', () => {
            this.updateHiddenInput();
        });
        
        // Handle focus/blur for placeholder behavior
        this.contentContainer.addEventListener('focus', () => {
            if (this.contentContainer.innerHTML.includes('Start writing your content...')) {
                this.contentContainer.innerHTML = '<p><br></p>';
            }
        });
        
        this.contentContainer.addEventListener('blur', () => {
            if (!this.contentContainer.textContent.trim()) {
                this.contentContainer.innerHTML = '<p class="text-the-end-400">Start writing your content...</p>';
            }
        });
        
        // Create hidden input to store HTML content
        this.hiddenInput = document.createElement('input');
        this.hiddenInput.type = 'hidden';
        this.hiddenInput.name = this.element.name || 'content';
        this.hiddenInput.value = this.getEditorHTML();
        this.wrapper.appendChild(this.hiddenInput);
        
        // Create a simple editor interface
        this.editor = {
            chain: () => ({
                focus: () => ({
                    toggleBold: () => ({ run: () => this.execCommand('bold') }),
                    toggleItalic: () => ({ run: () => this.execCommand('italic') }),
                    toggleUnderline: () => ({ run: () => this.execCommand('underline') }),
                    insertContent: (content) => ({ run: () => this.insertContent(content) })
                })
            }),
            getHTML: () => this.getEditorHTML()
        };
    }
    
    updateHiddenInput() {
        const content = this.getEditorHTML();
        if (this.hiddenInput) {
            this.hiddenInput.value = content;
        }
        
        // Trigger change event
        if (typeof this.options.onChange === 'function') {
            this.options.onChange(content);
        }
    }
    
    getEditorHTML() {
        if (!this.contentContainer) return '';
        
        // Clean up placeholder content
        const content = this.contentContainer.innerHTML;
        if (content.includes('Start writing your content...')) {
            return '';
        }
        return content;
    }
    
    execCommand(command) {
        this.contentContainer.focus();
        document.execCommand(command, false, null);
        this.updateHiddenInput();
    }
    
    insertContent(content) {
        this.contentContainer.focus();
        
        // If content is empty or has placeholder, replace it
        if (!this.contentContainer.textContent.trim() || 
            this.contentContainer.innerHTML.includes('Start writing your content...')) {
            this.contentContainer.innerHTML = content;
        } else {
            // Insert at cursor position
            const selection = window.getSelection();
            if (selection.rangeCount > 0) {
                const range = selection.getRangeAt(0);
                range.deleteContents();
                const div = document.createElement('div');
                div.innerHTML = content;
                const fragment = document.createDocumentFragment();
                while (div.firstChild) {
                    fragment.appendChild(div.firstChild);
                }
                range.insertNode(fragment);
            } else {
                this.contentContainer.innerHTML += content;
            }
        }
        
        this.updateHiddenInput();
    }
    
    createToolbar() {
        // Text style controls
        this.createHeadingControls();
        this.addDivider();
        this.createTextStyleControls();
        this.addDivider();
        this.createColorControls();
        this.addDivider();
        this.createListControls();
        this.addDivider();
        this.createMediaControls();
    }
    
    createHeadingControls() {
        const headingOptions = [
            { label: 'Display Heading', value: 'h1', classes: 'text-display font-bold text-pepper-green' },
            { label: 'H1 - Main Title', value: 'h1', classes: 'text-h1 font-bold text-pepper-green' },
            { label: 'H2 - Section', value: 'h2', classes: 'text-h2 font-bold text-pepper-green' },
            { label: 'H3 - Subsection', value: 'h3', classes: 'text-h3 font-semibold text-the-end-900' },
            { label: 'H4 - Point', value: 'h4', classes: 'text-h4 font-semibold text-the-end-900' },
            { label: 'H5 - Subpoint', value: 'h5', classes: 'text-h5 font-medium text-chicken-comb-600' },
            { label: 'H6 - Detail', value: 'h6', classes: 'text-h6 font-medium text-chicken-comb-600' }
        ];
        
        const dropdown = this.createStyledDropdown('Headings', headingOptions, (option) => {
            this.formatHeading(option.value, option.classes);
        }, 'heading');
        
        this.toolbarContainer.appendChild(dropdown);
    }
    
    formatHeading(tagName, classes) {
        this.contentContainer.focus();
        
        const selection = window.getSelection();
        if (selection.rangeCount === 0) return;
        
        const range = selection.getRangeAt(0);
        let element = range.startContainer;
        
        // Find the current block element (paragraph or heading)
        while (element && element.nodeType !== Node.ELEMENT_NODE) {
            element = element.parentNode;
        }
        
        // If we're not in a block element, find the closest one
        if (!element || !['P', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'DIV'].includes(element.tagName)) {
            element = element.closest('p, h1, h2, h3, h4, h5, h6, div');
        }
        
        if (element && element.parentNode === this.contentContainer) {
            // Create new heading element
            const newHeading = document.createElement(tagName);
            newHeading.className = classes;
            
            // Move all content from old element to new heading
            while (element.firstChild) {
                newHeading.appendChild(element.firstChild);
            }
            
            // If the element is empty, add a placeholder
            if (!newHeading.textContent.trim()) {
                newHeading.textContent = 'Your heading text here...';
            }
            
            // Replace the old element with new heading
            element.parentNode.replaceChild(newHeading, element);
            
            // Set cursor at the end of the new heading
            const newRange = document.createRange();
            newRange.selectNodeContents(newHeading);
            newRange.collapse(false);
            selection.removeAllRanges();
            selection.addRange(newRange);
            
            console.log(`✅ Applied heading ${tagName} with classes: ${classes}`);
        } else {
            // If no suitable element found, create a new heading at cursor position
            const newHeading = document.createElement(tagName);
            newHeading.className = classes;
            newHeading.textContent = 'Your heading text here...';
            
            // Insert at current cursor position
            range.deleteContents();
            range.insertNode(newHeading);
            
            // Set cursor inside the new heading
            const newRange = document.createRange();
            newRange.selectNodeContents(newHeading);
            selection.removeAllRanges();
            selection.addRange(newRange);
        }
        
        this.updateHiddenInput();
    }
    
    createTextStyleControls() {
        // Paragraph styles dropdown
        const paragraphOptions = [
            { label: 'Body Large', value: 'large', classes: 'text-body-lg text-the-end-700' },
            { label: 'Body Regular', value: 'normal', classes: 'text-body text-the-end-700' },
            { label: 'Body Small', value: 'small', classes: 'text-body-sm text-the-end-600' }
        ];
        
        const dropdown = this.createStyledDropdown('Text Style', paragraphOptions, (option) => {
            this.formatParagraph(option.classes);
        }, 'text');
        
        this.toolbarContainer.appendChild(dropdown);
        
        // Text formatting buttons
        const textFormatButtons = [
            { icon: 'bold', title: 'Bold', action: () => this.execCommand('bold') },
            { icon: 'italic', title: 'Italic', action: () => this.execCommand('italic') },
            { icon: 'underline', title: 'Underline', action: () => this.execCommand('underline') }
        ];
        
        textFormatButtons.forEach(button => {
            const btn = this.createButton(button.icon, button.title, button.action);
            this.toolbarContainer.appendChild(btn);
        });
    }
    
    formatParagraph(classes) {
        this.contentContainer.focus();
        
        const selection = window.getSelection();
        if (selection.rangeCount === 0) return;
        
        const range = selection.getRangeAt(0);
        let element = range.startContainer;
        
        // Find the current block element
        while (element && element.nodeType !== Node.ELEMENT_NODE) {
            element = element.parentNode;
        }
        
        // If we're not in a block element, find the closest one
        if (!element || !['P', 'H1', 'H2', 'H3', 'H4', 'H5', 'H6', 'DIV'].includes(element.tagName)) {
            element = element.closest('p, h1, h2, h3, h4, h5, h6, div');
        }
        
        if (element && element.parentNode === this.contentContainer) {
            // Create new paragraph element
            const newParagraph = document.createElement('p');
            newParagraph.className = classes;
            
            // Move all content from old element to new paragraph
            while (element.firstChild) {
                newParagraph.appendChild(element.firstChild);
            }
            
            // If the element is empty, add a placeholder
            if (!newParagraph.textContent.trim()) {
                newParagraph.textContent = 'Your text content here...';
            }
            
            // Replace the old element with new paragraph
            element.parentNode.replaceChild(newParagraph, element);
            
            // Set cursor at the end of the new paragraph
            const newRange = document.createRange();
            newRange.selectNodeContents(newParagraph);
            newRange.collapse(false);
            selection.removeAllRanges();
            selection.addRange(newRange);
            
            console.log(`✅ Applied paragraph with classes: ${classes}`);
        } else {
            // If no suitable element found, create a new paragraph at cursor position
            const newParagraph = document.createElement('p');
            newParagraph.className = classes;
            newParagraph.textContent = 'Your text content here...';
            
            // Insert at current cursor position
            range.deleteContents();
            range.insertNode(newParagraph);
            
            // Set cursor inside the new paragraph
            const newRange = document.createRange();
            newRange.selectNodeContents(newParagraph);
            selection.removeAllRanges();
            selection.addRange(newRange);
        }
        
        this.updateHiddenInput();
    }
    
    applyTextColor(colorClass) {
        this.contentContainer.focus();
        
        const selection = window.getSelection();
        if (selection.rangeCount > 0 && !selection.isCollapsed) {
            const range = selection.getRangeAt(0);
            const span = document.createElement('span');
            span.className = `text-${colorClass}`;
            
            try {
                range.surroundContents(span);
            } catch (e) {
                // If surroundContents fails, extract and wrap contents
                const contents = range.extractContents();
                span.appendChild(contents);
                range.insertNode(span);
            }
            
            // Clear selection
            selection.removeAllRanges();
        }
        
        this.updateHiddenInput();
    }
    
    createColorControls() {
        // Create main color families dropdown based on tailwind.config.js
        const colorFamilies = [
            {
                name: 'pepper-green',
                shades: {
                    '50': '#ecfff7',
                    '100': '#d1ffe9',
                    '200': '#a7ffd8',
                    '300': '#6fffc1',
                    '400': '#00f28b',
                    'DEFAULT': '#007f4e',
                    '600': '#00b369',
                    '700': '#008f54',
                    '800': '#007144',
                    '900': '#005c38'
                }
            },
            {
                name: 'chicken-comb',
                shades: {
                    '50': '#fef2f2',
                    '100': '#fee2e2',
                    '200': '#fecaca',
                    '300': '#fca5a5',
                    '400': '#f87171',
                    'DEFAULT': '#e12729',
                    '600': '#dc2626',
                    '700': '#b91c1c',
                    '800': '#991b1b',
                    '900': '#7f1d1d'
                }
            },
            {
                name: 'apocalyptic-orange',
                shades: {
                    '50': '#fff7ed',
                    '100': '#ffedd5',
                    '200': '#fed7aa',
                    '300': '#fdba74',
                    'DEFAULT': '#f37324',
                    '500': '#f97316',
                    '600': '#ea580c',
                    '700': '#c2410c',
                    '800': '#9a3412',
                    '900': '#7c2d12'
                }
            },
            {
                name: 'pot-of-gold',
                shades: {
                    '50': '#fefce8',
                    '100': '#fef9c3',
                    'DEFAULT': '#f8cc1b',
                    '300': '#fde047',
                    '400': '#facc15',
                    '500': '#eab308',
                    '600': '#ca8a04',
                    '700': '#a16207',
                    '800': '#854d0e',
                    '900': '#713f12'
                }
            },
            {
                name: 'leaf',
                shades: {
                    '50': '#f3f9ec',
                    '100': '#e5f2d8',
                    'DEFAULT': '#72b043',
                    '300': '#bcd99b',
                    '400': '#a3ca78',
                    '500': '#8bbb55',
                    '600': '#729b45',
                    '700': '#5b7c37',
                    '800': '#46612b',
                    '900': '#384d22'
                }
            },
            {
                name: 'the-end',
                shades: {
                    '50': '#f6f6f6',
                    '100': '#e7e7e7',
                    '200': '#d1d1d1',
                    '300': '#b0b0b0',
                    '400': '#888888',
                    'DEFAULT': '#2a2a2a',
                    '600': '#4d4d4d',
                    '700': '#434343',
                    '800': '#3f3f3f',
                    '900': '#3d3d3d'
                }
            }
        ];
        
        // Color picker implementation
        const colorPickerBtn = document.createElement('button');
        colorPickerBtn.type = 'button'; // Prevent form submission
        colorPickerBtn.className = 'px-3 py-1.5 rounded hover:bg-white-smoke-100 flex items-center gap-2';
        colorPickerBtn.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 2v10l4.24 4.24"></path>
            </svg>
            <span>Text Color</span>
        `;
        
        // When clicked, show color palette
        colorPickerBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this.showColorPalette();
        });
        
        this.toolbarContainer.appendChild(colorPickerBtn);
    }
    
    showColorPalette() {
        // If palette already exists, toggle it
        if (this.colorPalette) {
            this.colorPalette.classList.toggle('hidden');
            return;
        }
        
        // Create color palette container
        this.colorPalette = document.createElement('div');
        this.colorPalette.className = 'absolute z-10 p-3 bg-white shadow-lg rounded-lg border border-white-smoke-300 mt-1 grid grid-cols-7 gap-1';
        
        // Color families from tailwind.config.js
        const colorFamilies = [
            {
                name: 'pepper-green',
                shades: {
                    '50': '#ecfff7',
                    '100': '#d1ffe9',
                    '200': '#a7ffd8',
                    '300': '#6fffc1',
                    '400': '#00f28b',
                    'DEFAULT': '#007f4e',
                    '600': '#00b369',
                    '700': '#008f54',
                    '800': '#007144',
                    '900': '#005c38'
                }
            },
            {
                name: 'chicken-comb',
                shades: {
                    '50': '#fef2f2',
                    '100': '#fee2e2',
                    '200': '#fecaca',
                    '300': '#fca5a5',
                    '400': '#f87171',
                    'DEFAULT': '#e12729',
                    '600': '#dc2626',
                    '700': '#b91c1c',
                    '800': '#991b1b',
                    '900': '#7f1d1d'
                }
            },
            {
                name: 'apocalyptic-orange',
                shades: {
                    '50': '#fff7ed',
                    '100': '#ffedd5',
                    '200': '#fed7aa',
                    '300': '#fdba74',
                    'DEFAULT': '#f37324',
                    '500': '#f97316',
                    '600': '#ea580c',
                    '700': '#c2410c',
                    '800': '#9a3412',
                    '900': '#7c2d12'
                }
            },
            {
                name: 'pot-of-gold',
                shades: {
                    '50': '#fefce8',
                    '100': '#fef9c3',
                    'DEFAULT': '#f8cc1b',
                    '300': '#fde047',
                    '400': '#facc15',
                    '500': '#eab308',
                    '600': '#ca8a04',
                    '700': '#a16207',
                    '800': '#854d0e',
                    '900': '#713f12'
                }
            },
            {
                name: 'leaf',
                shades: {
                    '50': '#f3f9ec',
                    '100': '#e5f2d8',
                    'DEFAULT': '#72b043',
                    '300': '#bcd99b',
                    '400': '#a3ca78',
                    '500': '#8bbb55',
                    '600': '#729b45',
                    '700': '#5b7c37',
                    '800': '#46612b',
                    '900': '#384d22'
                }
            },
            {
                name: 'the-end',
                shades: {
                    '50': '#f6f6f6',
                    '100': '#e7e7e7',
                    '200': '#d1d1d1',
                    '300': '#b0b0b0',
                    '400': '#888888',
                    'DEFAULT': '#2a2a2a',
                    '600': '#4d4d4d',
                    '700': '#434343',
                    '800': '#3f3f3f',
                    '900': '#3d3d3d'
                }
            }
        ];
        
        // Create swatches for each color family
        colorFamilies.forEach(family => {
            const column = document.createElement('div');
            column.className = 'flex flex-col gap-1';
            
            // Add family name
            const familyLabel = document.createElement('div');
            familyLabel.className = 'text-xs text-the-end-600 font-medium text-center mb-1';
            familyLabel.textContent = family.name.replace('-', ' ');
            column.appendChild(familyLabel);
            
            // Add color swatches
            Object.entries(family.shades).forEach(([shade, color]) => {
                const swatch = document.createElement('button');
                swatch.type = 'button'; // Prevent form submission
                swatch.className = `w-6 h-6 rounded-full border border-white-smoke-200 hover:opacity-80`;
                swatch.style.backgroundColor = color;
                swatch.title = `${family.name}-${shade}`;
                
                swatch.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    this.applyTextColor(`${family.name}-${shade}`);
                    this.colorPalette.classList.add('hidden');
                });
                
                column.appendChild(swatch);
            });
            
            this.colorPalette.appendChild(column);
        });
        
        // Add preset colors for common uses
        const presets = document.createElement('div');
        presets.className = 'col-span-7 mt-2 pt-2 border-t border-white-smoke-200';
        
        const presetTitle = document.createElement('div');
        presetTitle.className = 'text-xs text-the-end-600 font-medium mb-1';
        presetTitle.textContent = 'Common Text Colors';
        presets.appendChild(presetTitle);
        
        const presetColors = [
            { name: 'Section Header', class: 'pepper-green' },
            { name: 'Subsection Header', class: 'the-end-900' },
            { name: 'Highlight Points', class: 'chicken-comb-600' },
            { name: 'Body Text', class: 'the-end-700' },
            { name: 'Caption Text', class: 'the-end-600' }
        ];
        
        const presetContainer = document.createElement('div');
        presetContainer.className = 'flex flex-wrap gap-2';
        
        presetColors.forEach(preset => {
            const presetBtn = document.createElement('button');
            presetBtn.type = 'button'; // Prevent form submission
            presetBtn.className = `px-2 py-1 text-xs rounded bg-white-smoke-50 hover:bg-white-smoke-100 text-${preset.class}`;
            presetBtn.textContent = preset.name;
            
            presetBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                this.applyTextColor(preset.class);
                this.colorPalette.classList.add('hidden');
            });
            
            presetContainer.appendChild(presetBtn);
        });
        
        presets.appendChild(presetContainer);
        this.colorPalette.appendChild(presets);
        
        // Close button
        const closeBtn = document.createElement('button');
        closeBtn.type = 'button'; // Prevent form submission
        closeBtn.className = 'absolute top-2 right-2 text-xs text-the-end-400 hover:text-the-end-700';
        closeBtn.innerHTML = 'X';
        closeBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            this.colorPalette.classList.add('hidden');
        });
        this.colorPalette.appendChild(closeBtn);
        
        // Append palette to toolbar
        this.toolbarContainer.appendChild(this.colorPalette);
        
        // Click outside to close
        document.addEventListener('click', (e) => {
            if (!this.colorPalette.contains(e.target) && !e.target.closest('button[data-action="color"]')) {
                this.colorPalette.classList.add('hidden');
            }
        });
    }
    
    createListControls() {
        const listButtons = [
            { icon: 'list-ul', title: 'Bullet List', action: () => this.execCommand('insertUnorderedList') },
            { icon: 'list-ol', title: 'Numbered List', action: () => this.execCommand('insertOrderedList') }
        ];
        
        listButtons.forEach(button => {
            const btn = this.createButton(button.icon, button.title, button.action);
            this.toolbarContainer.appendChild(btn);
        });
    }
    
    createMediaControls() {
        // Image upload button
        const imageBtn = this.createButton('image', 'Insert Image', () => {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            
            input.addEventListener('change', async () => {
                if (input.files?.length) {
                    await this.uploadImage(input.files[0]);
                }
            });
            
            input.click();
        });
        
        this.toolbarContainer.appendChild(imageBtn);
        
        // Figure with caption button
        const figureBtn = this.createButton('figure', 'Image with Caption', () => {
            // Open figure dialog
            this.showFigureDialog();
        });
        
        this.toolbarContainer.appendChild(figureBtn);
        
        // Video container button (NEW)
        const videoContainerBtn = this.createButton('video', 'Insert Video Container', () => {
            this.showVideoContainerDialog();
        });
        
        this.toolbarContainer.appendChild(videoContainerBtn);
    }
    
    showFigureDialog() {
        // Create modal dialog
        const modal = document.createElement('div');
        modal.className = 'fixed inset-0 bg-the-end-900/50 flex items-center justify-center z-50';
        
        const dialog = document.createElement('div');
        dialog.className = 'bg-white rounded-lg shadow-xl w-full max-w-2xl p-6 space-y-4';
        
        // Dialog header
        const header = document.createElement('div');
        header.className = 'text-h4 font-bold text-the-end-900';
        header.textContent = 'Insert Image with Caption';
        
        // Image upload section
        const uploadSection = document.createElement('div');
        uploadSection.className = 'space-y-2';
        
        const uploadLabel = document.createElement('label');
        uploadLabel.className = 'block text-body-sm font-medium text-the-end-700';
        uploadLabel.textContent = 'Upload Image';
        
        const uploadInput = document.createElement('input');
        uploadInput.type = 'file';
        uploadInput.accept = 'image/*';
        uploadInput.className = 'block w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm';
        
        uploadSection.appendChild(uploadLabel);
        uploadSection.appendChild(uploadInput);
        
        // Caption section
        const captionSection = document.createElement('div');
        captionSection.className = 'space-y-2';
        
        const captionLabel = document.createElement('label');
        captionLabel.className = 'block text-body-sm font-medium text-the-end-700';
        captionLabel.textContent = 'Image Caption';
        
        const captionInput = document.createElement('input');
        captionInput.type = 'text';
        captionInput.className = 'block w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm';
        captionInput.placeholder = 'Enter caption for the image';
        
        captionSection.appendChild(captionLabel);
        captionSection.appendChild(captionInput);
        
        // Alt text section
        const altSection = document.createElement('div');
        altSection.className = 'space-y-2';
        
        const altLabel = document.createElement('label');
        altLabel.className = 'block text-body-sm font-medium text-the-end-700';
        altLabel.textContent = 'Alt Text (for accessibility)';
        
        const altInput = document.createElement('input');
        altInput.type = 'text';
        altInput.className = 'block w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm';
        altInput.placeholder = 'Describe the image for screen readers';
        
        altSection.appendChild(altLabel);
        altSection.appendChild(altInput);
        
        // Dialog footer with buttons
        const footer = document.createElement('div');
        footer.className = 'flex justify-end space-x-3 pt-4';
        
        const cancelBtn = document.createElement('button');
        cancelBtn.className = 'px-4 py-2 text-body-sm bg-white-smoke-50 hover:bg-white-smoke-100 text-the-end-700 rounded';
        cancelBtn.textContent = 'Cancel';
        cancelBtn.addEventListener('click', () => {
            document.body.removeChild(modal);
        });
        
        const insertBtn = document.createElement('button');
        insertBtn.className = 'px-4 py-2 text-body-sm bg-pepper-green hover:bg-pepper-green-700 text-white rounded';
        insertBtn.textContent = 'Insert';
        insertBtn.addEventListener('click', async () => {
            if (uploadInput.files?.length) {
                const imageUrl = await this.uploadImage(uploadInput.files[0]);
                if (imageUrl) {
                    this.insertFigureWithCaption(imageUrl, captionInput.value, altInput.value);
                    document.body.removeChild(modal);
                }
            }
        });
        
        footer.appendChild(cancelBtn);
        footer.appendChild(insertBtn);
        
        // Assemble dialog
        dialog.appendChild(header);
        dialog.appendChild(uploadSection);
        dialog.appendChild(captionSection);
        dialog.appendChild(altSection);
        dialog.appendChild(footer);
        
        modal.appendChild(dialog);
        document.body.appendChild(modal);
    }
    
    async uploadImage(file) {
        try {
            const formData = new FormData();
            formData.append('image', file);
            
            const response = await fetch(this.options.uploadUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            });
            
            if (!response.ok) {
                throw new Error('Image upload failed');
            }
            
            const result = await response.json();
            
            // Insert image into editor
            if (result.url) {
                this.editor.chain().focus().setImage({ src: result.url }).run();
                return result.url;
            }
        } catch (error) {
            console.error('Error uploading image:', error);
            alert('Failed to upload image. Please try again.');
        }
        
        return null;
    }
    
    insertFigureWithCaption(imageUrl, caption, altText) {
        // Insert figure with proper Tailwind classes
        const figureHTML = `
            <figure class="bg-white-smoke-50 rounded-lg border border-white-smoke-300 p-4 md:p-8 lg:p-8 mx-auto my-6 w-full">
                <div class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 w-full h-full">
                    <img src="${imageUrl}" alt="${altText || 'Image'}" class="object-cover w-full h-full rounded-lg" />
                </div>
                ${caption ? `<figcaption class="text-pepper-green-700 text-body-sm text-center">${caption}</figcaption>` : ''}
            </figure>
        `;
        
        // Use our contentEditable approach to insert the content
        this.contentContainer.focus();
        
        // Get current selection or cursor position
        const selection = window.getSelection();
        let range;
        
        if (selection.rangeCount > 0) {
            range = selection.getRangeAt(0);
        } else {
            // If no selection, create one at the end of content
            range = document.createRange();
            range.selectNodeContents(this.contentContainer);
            range.collapse(false);
        }
        
        // Create a temporary div to hold our HTML
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = figureHTML;
        
        // Insert each child node from the temp div
        const fragment = document.createDocumentFragment();
        while (tempDiv.firstChild) {
            fragment.appendChild(tempDiv.firstChild);
        }
        
        // Insert the fragment at the current position
        range.deleteContents();
        range.insertNode(fragment);
        
        // Move cursor after the inserted content
        range.collapse(false);
        selection.removeAllRanges();
        selection.addRange(range);
        
        // Update the hidden input
        this.updateHiddenInput();
        
        console.log('✅ Figure with caption inserted successfully');
    }
    
    showVideoContainerDialog() {
        // Create modal dialog
        const modal = document.createElement('div');
        modal.className = 'fixed inset-0 bg-the-end-900/50 flex items-center justify-center z-50';
        
        const dialog = document.createElement('div');
        dialog.className = 'bg-white rounded-lg shadow-xl w-full max-w-2xl p-6 space-y-4';
        
        // Dialog header
        const header = document.createElement('div');
        header.className = 'text-h4 font-bold text-the-end-900';
        header.textContent = 'Insert Responsive Video Container';
        
        // Embed code section
        const embedSection = document.createElement('div');
        embedSection.className = 'space-y-2';
        
        const embedLabel = document.createElement('label');
        embedLabel.className = 'block text-body-sm font-medium text-the-end-700';
        embedLabel.textContent = 'Video Embed Code (Vimeo/YouTube iframe)';
        
        const embedTextarea = document.createElement('textarea');
        embedTextarea.rows = 4;
        embedTextarea.className = 'block w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm resize-none';
        embedTextarea.placeholder = '<iframe src="https://player.vimeo.com/video/..." allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
        
        embedSection.appendChild(embedLabel);
        embedSection.appendChild(embedTextarea);
        
        // Caption section
        const captionSection = document.createElement('div');
        captionSection.className = 'space-y-2';
        
        const captionLabel = document.createElement('label');
        captionLabel.className = 'block text-body-sm font-medium text-the-end-700';
        captionLabel.textContent = 'Video Caption';
        
        const captionInput = document.createElement('input');
        captionInput.type = 'text';
        captionInput.className = 'block w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm';
        captionInput.placeholder = 'Brief accessible caption or description of the video content';
        
        captionSection.appendChild(captionLabel);
        captionSection.appendChild(captionInput);
        
        // Dialog footer with buttons
        const footer = document.createElement('div');
        footer.className = 'flex justify-end space-x-3 pt-4';
        
        const cancelBtn = document.createElement('button');
        cancelBtn.className = 'px-4 py-2 text-body-sm bg-white-smoke-50 hover:bg-white-smoke-100 text-the-end-700 rounded';
        cancelBtn.textContent = 'Cancel';
        cancelBtn.addEventListener('click', () => {
            document.body.removeChild(modal);
        });
        
        const insertBtn = document.createElement('button');
        insertBtn.className = 'px-4 py-2 text-body-sm bg-pepper-green hover:bg-pepper-green-700 text-white rounded';
        insertBtn.textContent = 'Insert Video Container';
        insertBtn.addEventListener('click', () => {
            const embedCode = embedTextarea.value.trim();
            const caption = captionInput.value.trim();
            
            if (!embedCode) {
                alert('Please paste the video embed code');
                return;
            }
            
            this.insertVideoContainer(embedCode, caption);
            document.body.removeChild(modal);
        });
        
        footer.appendChild(cancelBtn);
        footer.appendChild(insertBtn);
        
        // Assemble dialog
        dialog.appendChild(header);
        dialog.appendChild(embedSection);
        dialog.appendChild(captionSection);
        dialog.appendChild(footer);
        
        modal.appendChild(dialog);
        document.body.appendChild(modal);
        
        // Focus the textarea
        setTimeout(() => embedTextarea.focus(), 100);
    }
    
    insertVideoContainer(embedCode, caption) {
        // Ensure the iframe has the proper classes for responsive video (matching video-container.blade.php)
        let processedEmbedCode = embedCode;
        
        // Remove any existing classes and size attributes to ensure proper responsive behavior
        processedEmbedCode = processedEmbedCode.replace(/class="[^"]*"/g, '');
        processedEmbedCode = processedEmbedCode.replace(/width="[^"]*"/g, '');
        processedEmbedCode = processedEmbedCode.replace(/height="[^"]*"/g, '');
        processedEmbedCode = processedEmbedCode.replace(/style="[^"]*"/g, '');
        
        // Add responsive classes to iframe for proper full-width coverage
        if (!processedEmbedCode.includes('class=')) {
            processedEmbedCode = processedEmbedCode.replace('<iframe', '<iframe class="absolute inset-0 w-full h-full rounded-lg"');
        }
        
        // Add accessibility attributes if not present
        if (!processedEmbedCode.includes('tabindex=')) {
            processedEmbedCode = processedEmbedCode.replace('<iframe', '<iframe tabindex="0"');
        }
        
        // Insert responsive video container using the exact layout from video-container.blade.php
        const videoContainerHTML = `
            <figure class="bg-white-smoke-50 rounded-lg border border-white-smoke-300 p-4 md:p-8 lg:p-8 mx-auto my-6 w-full">
                <div class="relative w-full aspect-video overflow-hidden rounded-lg">
                    ${processedEmbedCode}
                </div>
                ${caption ? `<figcaption class="mt-4 text-pepper-green-700 text-body-sm text-center">${caption}</figcaption>` : ''}
            </figure>
        `;
        
        // Use our contentEditable approach to insert the content
        this.contentContainer.focus();
        
        // Get current selection or cursor position
        const selection = window.getSelection();
        let range;
        
        if (selection.rangeCount > 0) {
            range = selection.getRangeAt(0);
        } else {
            // If no selection, create one at the end of content
            range = document.createRange();
            range.selectNodeContents(this.contentContainer);
            range.collapse(false);
        }
        
        // Create a temporary div to hold our HTML
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = videoContainerHTML;
        
        // Insert each child node from the temp div
        const fragment = document.createDocumentFragment();
        while (tempDiv.firstChild) {
            fragment.appendChild(tempDiv.firstChild);
        }
        
        // Insert the fragment at the current position
        range.deleteContents();
        range.insertNode(fragment);
        
        // Move cursor after the inserted content
        range.collapse(false);
        selection.removeAllRanges();
        selection.addRange(range);
        
        // Update the hidden input
        this.updateHiddenInput();
        
        console.log('✅ Video container inserted successfully');
    }
    
    // Utility methods
    createButton(icon, title, action) {
        const button = document.createElement('button');
        button.type = 'button'; // Prevent form submission
        button.className = 'p-1.5 rounded hover:bg-white-smoke-100';
        button.title = title;
        button.innerHTML = this.getIconSvg(icon);
        button.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            action();
        });
        return button;
    }
    
    createStyledDropdown(label, options, onSelect, type) {
        const dropdown = document.createElement('div');
        dropdown.className = 'relative inline-block';
        
        const button = document.createElement('button');
        button.type = 'button'; // Prevent form submission
        button.className = 'px-3 py-1.5 rounded hover:bg-white-smoke-100 flex items-center gap-2 border border-white-smoke-300';
        button.innerHTML = `
            <span class="text-body-sm font-medium">${label}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        `;
        
        const menu = document.createElement('div');
        menu.className = 'absolute z-10 hidden mt-1 py-2 bg-white rounded-lg shadow-lg border border-white-smoke-300 min-w-[220px] max-w-[280px]';
        
        options.forEach(option => {
            const item = document.createElement('button');
            item.type = 'button'; // Prevent form submission
            item.className = 'w-full text-left px-4 py-3 hover:bg-white-smoke-50 border-b border-white-smoke-100 last:border-b-0 transition-colors';
            
            // Create styled preview based on type
            if (type === 'heading') {
                const preview = this.createHeadingPreview(option);
                item.innerHTML = preview;
            } else if (type === 'text') {
                const preview = this.createTextPreview(option);
                item.innerHTML = preview;
            } else {
                item.textContent = option.label;
            }
            
            item.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                onSelect(option);
                menu.classList.add('hidden');
            });
            menu.appendChild(item);
        });
        
        button.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            menu.classList.toggle('hidden');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
        
        dropdown.appendChild(button);
        dropdown.appendChild(menu);
        
        return dropdown;
    }
    
    createHeadingPreview(option) {
        const sizeClasses = {
            'text-display': 'text-xl font-bold',
            'text-h1': 'text-lg font-bold',
            'text-h2': 'text-base font-bold',
            'text-h3': 'text-sm font-semibold',
            'text-h4': 'text-sm font-semibold',
            'text-h5': 'text-xs font-medium',
            'text-h6': 'text-xs font-medium'
        };
        
        const colorClasses = {
            'text-pepper-green': '#007f4e',
            'text-the-end-900': '#2a2a2a',
            'text-chicken-comb-600': '#dc2626'
        };
        
        let previewClass = 'text-sm';
        let previewColor = '#2a2a2a';
        
        // Extract size and color from classes
        const classes = option.classes.split(' ');
        classes.forEach(cls => {
            if (sizeClasses[cls]) {
                previewClass = sizeClasses[cls];
            }
            if (colorClasses[cls]) {
                previewColor = colorClasses[cls];
            }
        });
        
        return `
            <div class="flex flex-col gap-1">
                <div class="${previewClass}" style="color: ${previewColor}">
                    ${option.label}
                </div>
                <div class="text-xs text-the-end-500">
                    ${option.value.toUpperCase()} • ${option.classes.split(' ').slice(0, 2).join(' ')}
                </div>
            </div>
        `;
    }
    
    createTextPreview(option) {
        const sizeClasses = {
            'text-body-lg': 'text-base',
            'text-body': 'text-sm',
            'text-body-sm': 'text-xs'
        };
        
        const colorClasses = {
            'text-the-end-700': '#434343',
            'text-the-end-600': '#4d4d4d'
        };
        
        let previewClass = 'text-sm';
        let previewColor = '#434343';
        
        // Extract size and color from classes
        const classes = option.classes.split(' ');
        classes.forEach(cls => {
            if (sizeClasses[cls]) {
                previewClass = sizeClasses[cls];
            }
            if (colorClasses[cls]) {
                previewColor = colorClasses[cls];
            }
        });
        
        return `
            <div class="flex flex-col gap-1">
                <div class="${previewClass}" style="color: ${previewColor}">
                    ${option.label} - Sample text content
                </div>
                <div class="text-xs text-the-end-500">
                    ${option.classes.split(' ').slice(0, 2).join(' ')}
                </div>
            </div>
        `;
    }
    
    addDivider() {
        const divider = document.createElement('div');
        divider.className = 'festa-toolbar-divider';
        this.toolbarContainer.appendChild(divider);
    }
    
    getIconSvg(icon) {
        // Map of icon names to SVG content
        const icons = {
            bold: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 4h8a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path><path d="M6 12h9a4 4 0 0 1 4 4 4 4 0 0 1-4 4H6z"></path></svg>',
            italic: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="4" x2="10" y2="4"></line><line x1="14" y1="20" x2="5" y2="20"></line><line x1="15" y1="4" x2="9" y2="20"></line></svg>',
            underline: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3v7a6 6 0 0 0 6 6 6 6 0 0 0 6-6V3"></path><line x1="4" y1="21" x2="20" y2="21"></line></svg>',
            'list-ul': '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>',
            'list-ol': '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="10" y1="6" x2="21" y2="6"></line><line x1="10" y1="12" x2="21" y2="12"></line><line x1="10" y1="18" x2="21" y2="18"></line><path d="M4 6h1v4"></path><path d="M4 10h2"></path><path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1"></path></svg>',
            image: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>',
            figure: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="14" rx="2" ry="2"></rect><path d="M3 21h18"></path><path d="M9 21v-3"></path><path d="M15 21v-3"></path></svg>',
            video: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>'
        };
        
        return icons[icon] || '';
    }
    
    // Original dropdown method for simple dropdowns
    createDropdown(label, options, onSelect) {
        const dropdown = document.createElement('div');
        dropdown.className = 'relative inline-block';
        
        const button = document.createElement('button');
        button.type = 'button'; // Prevent form submission
        button.className = 'px-3 py-1.5 rounded hover:bg-white-smoke-100 flex items-center gap-2';
        button.innerHTML = `
            <span>${label}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        `;
        
        const menu = document.createElement('div');
        menu.className = 'absolute z-10 hidden mt-1 py-1 bg-white rounded-lg shadow-lg border border-white-smoke-300 min-w-[180px]';
        
        options.forEach(option => {
            const item = document.createElement('button');
            item.type = 'button'; // Prevent form submission
            item.className = 'w-full text-left px-4 py-2 text-body-sm hover:bg-white-smoke-50';
            item.textContent = option.label;
            item.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                onSelect(option);
                menu.classList.add('hidden');
            });
            menu.appendChild(item);
        });
        
        button.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            menu.classList.toggle('hidden');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!dropdown.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
        
        dropdown.appendChild(button);
        dropdown.appendChild(menu);
        
        return dropdown;
    }
}

// IMMEDIATE EXPORT - Export the class as soon as it's defined
console.log('🔧 IMMEDIATE: Exporting FestaRichTextEditor to window object...');
window.FestaRichTextEditor = FestaRichTextEditor;
console.log('✅ IMMEDIATE: FestaRichTextEditor exported successfully:', typeof window.FestaRichTextEditor);

// Custom TipTap extensions
class TailwindClass extends Extension {
    get name() {
        return 'tailwindClass';
    }
    
    addGlobalAttributes() {
        return [
            {
                types: ['heading', 'paragraph'],
                attributes: {
                    class: {
                        default: null,
                    },
                },
            },
        ];
    }
    
    addCommands() {
        return {
            setTailwindClass: (classes) => ({ commands }) => {
                return commands.updateAttributes(this.type, { class: classes });
            },
        };
    }
}

// Debug logging
console.log('FestaRichTextEditor class loaded and exposed to window object');
console.log('🎉 festa-rich-text-editor.js finished loading!'); 