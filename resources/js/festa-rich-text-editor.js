/**
 * Festa Rich Text Editor
 * A custom editor implementation for case studies that seamlessly integrates
 * with Tailwind CSS classes and typography system.
 */

class FestaRichTextEditor {
    constructor(options = {}) {
        this.options = {
            selector: '#festa-editor',
            uploadUrl: '/api/upload-image',
            ...options
        };
        
        this.element = document.querySelector(this.options.selector);
        if (!this.element) {
            console.error(`Element with selector ${this.options.selector} not found`);
            return;
        }
        
        this.init();
    }
    
    init() {
        this.createEditorContainer();
        this.initTipTap();
        this.createToolbar();
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
        // Import statement is required in actual implementation
        // This is a simplified version assuming the required libraries are loaded
        this.editor = new Editor({
            element: this.contentContainer,
            extensions: [
                StarterKit,
                TextStyle,
                Color,
                Image.configure({
                    uploadFunc: this.uploadImage.bind(this)
                }),
                Figure,
                Figcaption,
                TailwindClass
            ],
            content: this.element.value || '',
            onUpdate: ({ editor }) => {
                // Update hidden input with HTML content when editor changes
                if (this.hiddenInput) {
                    this.hiddenInput.value = editor.getHTML();
                }
                
                // Trigger change event
                if (typeof this.options.onChange === 'function') {
                    this.options.onChange(editor.getHTML());
                }
            }
        });
        
        // Create hidden input to store HTML content
        this.hiddenInput = document.createElement('input');
        this.hiddenInput.type = 'hidden';
        this.hiddenInput.name = this.element.name || 'content';
        this.hiddenInput.value = this.editor.getHTML();
        this.wrapper.appendChild(this.hiddenInput);
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
            { label: 'H2 - Section', value: 2, classes: 'text-h2 font-bold text-pepper-green' },
            { label: 'H3 - Subsection', value: 3, classes: 'text-h4 font-semibold text-the-end-900' },
            { label: 'H4 - Point', value: 4, classes: 'text-h6 font-medium text-chicken-comb-600' }
        ];
        
        const dropdown = this.createDropdown('Headings', headingOptions, (option) => {
            this.editor.chain().focus().toggleHeading({ level: option.value, classes: option.classes }).run();
        });
        
        this.toolbarContainer.appendChild(dropdown);
    }
    
    createTextStyleControls() {
        // Paragraph styles dropdown
        const paragraphOptions = [
            { label: 'Regular Paragraph', value: 'normal', classes: 'text-body text-the-end-700' },
            { label: 'Large Paragraph', value: 'large', classes: 'text-body-lg text-the-end-700' },
            { label: 'Small Text', value: 'small', classes: 'text-body-sm text-the-end-600' }
        ];
        
        const dropdown = this.createDropdown('Paragraph', paragraphOptions, (option) => {
            this.editor.chain().focus().setParagraph().setTailwindClass(option.classes).run();
        });
        
        this.toolbarContainer.appendChild(dropdown);
        
        // Text formatting buttons
        const textFormatButtons = [
            { icon: 'bold', title: 'Bold', action: () => this.editor.chain().focus().toggleBold().run() },
            { icon: 'italic', title: 'Italic', action: () => this.editor.chain().focus().toggleItalic().run() },
            { icon: 'underline', title: 'Underline', action: () => this.editor.chain().focus().toggleUnderline().run() }
        ];
        
        textFormatButtons.forEach(button => {
            const btn = this.createButton(button.icon, button.title, button.action);
            this.toolbarContainer.appendChild(btn);
        });
    }
    
    createColorControls() {
        // Create main color families dropdown
        const colorFamilies = [
            { label: 'Pepper Green', value: 'pepper-green', primary: 'bg-pepper-green' },
            { label: 'Chicken Comb', value: 'chicken-comb', primary: 'bg-chicken-comb' },
            { label: 'Apocalyptic Orange', value: 'apocalyptic-orange', primary: 'bg-apocalyptic-orange' },
            { label: 'Pot of Gold', value: 'pot-of-gold', primary: 'bg-pot-of-gold' },
            { label: 'Leaf', value: 'leaf', primary: 'bg-leaf' },
            { label: 'White Smoke', value: 'white-smoke', primary: 'bg-white-smoke' },
            { label: 'The End', value: 'the-end', primary: 'bg-the-end' },
        ];
        
        // Color picker implementation
        const colorPickerBtn = document.createElement('button');
        colorPickerBtn.className = 'px-3 py-1.5 rounded hover:bg-white-smoke-100 flex items-center gap-2';
        colorPickerBtn.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 2v10l4.24 4.24"></path>
            </svg>
            <span>Text Color</span>
        `;
        
        // When clicked, show color palette
        colorPickerBtn.addEventListener('click', () => {
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
        
        // Color shades for each family
        const shades = ['50', '100', '200', '300', '400', '500', '600', '700', '800', '900'];
        
        // Create color families
        const colorFamilies = [
            'pepper-green',
            'chicken-comb',
            'apocalyptic-orange',
            'pot-of-gold',
            'leaf',
            'white-smoke',
            'the-end'
        ];
        
        // Create swatches for each color family and shade
        colorFamilies.forEach(family => {
            const column = document.createElement('div');
            column.className = 'flex flex-col gap-1';
            
            // Add family name
            const familyLabel = document.createElement('div');
            familyLabel.className = 'text-xs text-the-end-600 font-medium text-center mb-1';
            familyLabel.textContent = family.replace('-', ' ');
            column.appendChild(familyLabel);
            
            // Add color swatches
            shades.forEach(shade => {
                const swatch = document.createElement('button');
                swatch.className = `w-6 h-6 rounded-full bg-${family}-${shade} border border-white-smoke-200 hover:opacity-80`;
                swatch.title = `${family}-${shade}`;
                
                swatch.addEventListener('click', () => {
                    this.editor.chain().focus().setColor(`text-${family}-${shade}`).run();
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
            { name: 'Section Header', class: 'text-pepper-green' },
            { name: 'Subsection Header', class: 'text-the-end-900' },
            { name: 'Highlight Points', class: 'text-chicken-comb-600' },
            { name: 'Body Text', class: 'text-the-end-700' },
            { name: 'Caption Text', class: 'text-the-end-600' }
        ];
        
        const presetContainer = document.createElement('div');
        presetContainer.className = 'flex flex-wrap gap-2';
        
        presetColors.forEach(preset => {
            const presetBtn = document.createElement('button');
            presetBtn.className = `px-2 py-1 text-xs rounded bg-white-smoke-50 hover:bg-white-smoke-100 ${preset.class}`;
            presetBtn.textContent = preset.name;
            
            presetBtn.addEventListener('click', () => {
                this.editor.chain().focus().setColor(preset.class).run();
                this.colorPalette.classList.add('hidden');
            });
            
            presetContainer.appendChild(presetBtn);
        });
        
        presets.appendChild(presetContainer);
        this.colorPalette.appendChild(presets);
        
        // Close button
        const closeBtn = document.createElement('button');
        closeBtn.className = 'absolute top-2 right-2 text-xs text-the-end-400 hover:text-the-end-700';
        closeBtn.innerHTML = 'X';
        closeBtn.addEventListener('click', () => {
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
            { icon: 'list-ul', title: 'Bullet List', action: () => this.editor.chain().focus().toggleBulletList().run() },
            { icon: 'list-ol', title: 'Numbered List', action: () => this.editor.chain().focus().toggleOrderedList().run() }
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
        this.editor.chain().focus().insertContent({
            type: 'figure',
            content: [
                {
                    type: 'image',
                    attrs: {
                        src: imageUrl,
                        alt: altText || 'Image',
                        class: 'aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100 w-full h-full object-cover'
                    }
                },
                {
                    type: 'figcaption',
                    attrs: {
                        class: 'text-body-sm text-the-end-600 text-center'
                    },
                    content: [
                        {
                            type: 'text',
                            text: caption || 'Image caption'
                        }
                    ]
                }
            ]
        }).run();
    }
    
    // Utility methods
    createButton(icon, title, action) {
        const button = document.createElement('button');
        button.className = 'p-1.5 rounded hover:bg-white-smoke-100';
        button.title = title;
        button.innerHTML = this.getIconSvg(icon);
        button.addEventListener('click', action);
        return button;
    }
    
    createDropdown(label, options, onSelect) {
        const dropdown = document.createElement('div');
        dropdown.className = 'relative inline-block';
        
        const button = document.createElement('button');
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
            item.className = 'w-full text-left px-4 py-2 text-body-sm hover:bg-white-smoke-50';
            item.textContent = option.label;
            item.addEventListener('click', () => {
                onSelect(option);
                menu.classList.add('hidden');
            });
            menu.appendChild(item);
        });
        
        button.addEventListener('click', () => {
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
    
    addDivider() {
        const divider = document.createElement('div');
        divider.className = 'w-px h-8 bg-white-smoke-300';
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
            figure: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="14" rx="2" ry="2"></rect><path d="M3 21h18"></path><path d="M9 21v-3"></path><path d="M15 21v-3"></path></svg>'
        };
        
        return icons[icon] || '';
    }
}

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

// Export for use
window.FestaRichTextEditor = FestaRichTextEditor; 