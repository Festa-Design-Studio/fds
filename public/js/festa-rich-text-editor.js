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
            uploadUrl: '/admin/api/upload-image',
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
        this.toolbarContainer = document.createElement('div');
        this.toolbarContainer.className = 'festa-editor-toolbar bg-white-smoke-50 border-b border-white-smoke-300 p-2 flex flex-wrap gap-2';
        
        // Create content area
        this.contentArea = document.createElement('div');
        this.contentArea.className = 'festa-editor-content p-4 min-h-[300px] bg-white';
        this.contentArea.contentEditable = true;
        
        // Append containers to wrapper
        this.wrapper.appendChild(this.toolbarContainer);
        this.wrapper.appendChild(this.contentArea);
        
        // Replace original element with our wrapper
        this.element.parentNode.replaceChild(this.wrapper, this.element);
        console.log('Editor container created and added to DOM');
    }
    
    setupToolbar() {
        console.log('Setting up toolbar with all controls');
        
        // Create toolbar sections
        const formatSection = document.createElement('div');
        formatSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
        const headingSection = document.createElement('div');
        headingSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
        const paragraphSection = document.createElement('div');
        paragraphSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
        const listSection = document.createElement('div');
        listSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
        const mediaSection = document.createElement('div');
        mediaSection.className = 'flex items-center gap-1 mr-2 border-r border-white-smoke-300 pr-2';
        
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
            { label: 'H1', title: 'Heading 1 (Large)', action: () => this.applyHeadingWithClass('h1', 'text-h1 font-black text-the-end-900') },
            { label: 'H2', title: 'Heading 2 (Section)', action: () => this.applyHeadingWithClass('h2', 'text-h2 font-bold text-pepper-green') },
            { label: 'H3', title: 'Heading 3 (Subsection)', action: () => this.applyHeadingWithClass('h3', 'text-h3 font-semibold text-the-end-900') },
            { label: 'H4', title: 'Heading 4', action: () => this.applyHeadingWithClass('h4', 'text-h4 font-semibold text-chicken-comb-600') },
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
        
        // Add list buttons - FIXED LIST FUNCTIONALITY
        const listButtons = [
            { 
                label: '• List', 
                title: 'Bullet List', 
                action: () => {
                    console.log('Bullet list button clicked');
                    this.execCommand('insertUnorderedList');
                    this.applyClassToCurrentList('text-body text-the-end-700');
                }
            },
            { 
                label: '1. List', 
                title: 'Numbered List', 
                action: () => {
                    console.log('Numbered list button clicked');
                    this.execCommand('insertOrderedList');
                    this.applyClassToCurrentList('text-body text-the-end-700');
                }
            }
        ];
        
        listButtons.forEach(btn => {
            const button = this.createToolbarButton(btn);
            listSection.appendChild(button);
        });
        
        // Add media buttons - NEW FEATURE
        const mediaButtons = [
            { 
                label: 'Image', 
                title: 'Insert Image', 
                action: () => {
                    console.log('Simple image button clicked');
                    this.showSimpleImageUploader();
                }
            },
            { 
                label: 'Figure', 
                title: 'Image with Caption', 
                action: () => {
                    console.log('Figure with caption button clicked');
                    this.showFigureDialog();
                }
            },
            { 
                label: 'Gallery', 
                title: 'Image Gallery Grid', 
                action: () => {
                    console.log('Gallery grid button clicked');
                    this.showGridDialog();
                }
            }
        ];
        
        mediaButtons.forEach(btn => {
            const button = this.createToolbarButton(btn);
            mediaSection.appendChild(button);
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
        this.toolbarContainer.appendChild(formatSection);
        this.toolbarContainer.appendChild(headingSection);
        this.toolbarContainer.appendChild(paragraphSection);
        this.toolbarContainer.appendChild(listSection);
        this.toolbarContainer.appendChild(mediaSection);
        this.toolbarContainer.appendChild(colorSection);

        // Add theme color buttons based on Festa color system
        this.addThemeColorButtons();
    }

    // NEW METHOD FOR FIXING LIST FUNCTIONALITY
    applyClassToCurrentList(className) {
        console.log('Applying class to current list:', className);
        setTimeout(() => {
            const selection = window.getSelection();
            if (!selection.rangeCount) return;
            
            const range = selection.getRangeAt(0);
            let current = range.commonAncestorContainer;
            
            // Find the list element
            while (current && current.nodeType === Node.TEXT_NODE) {
                current = current.parentNode;
            }
            
            // Look for UL or OL parent
            let listElement = current;
            while (listElement && !(listElement.nodeName === 'UL' || listElement.nodeName === 'OL')) {
                listElement = listElement.parentNode;
                // Stop if we reach the editor content area
                if (listElement === this.contentArea) break;
            }
            
            if (listElement && (listElement.nodeName === 'UL' || listElement.nodeName === 'OL')) {
                console.log('Found list element to style:', listElement);
                listElement.className = className;
                
                // Also apply styles to list items
                const items = listElement.querySelectorAll('li');
                items.forEach(item => {
                    item.className = className;
                });
                
                this.handleContentChange();
                console.log('Applied styles to list successfully');
            } else {
                console.log('No list element found to style');
            }
        }, 10); // Small delay to ensure the list has been created
    }
    
    // NEW METHOD FOR SIMPLE IMAGE UPLOAD
    showSimpleImageUploader() {
        console.log('showSimpleImageUploader called');
        
        try {
            // Save the current selection before opening file dialog
            const selection = window.getSelection();
            let savedRange = null;
            if (selection.rangeCount > 0) {
                savedRange = selection.getRangeAt(0).cloneRange();
            }
            
            // Add notification in editor
            const notification = document.createElement('div');
            notification.className = 'p-2 bg-white-smoke-200 text-the-end-700 text-sm rounded';
            notification.textContent = 'Please select an image file...';
            
            // Insert notification
            if (savedRange) {
                selection.removeAllRanges();
                selection.addRange(savedRange);
                this.insertNodeAtCursor(notification);
            } else {
                this.contentArea.appendChild(notification);
            }
            
            // Create file input
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            
            // Add log to track when file is selected
            input.addEventListener('change', async (event) => {
                console.log('File input change event fired');
                
                if (!input.files || input.files.length === 0) {
                    console.log('No file selected');
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                    return;
                }
                
                const file = input.files[0];
                console.log('File selected:', file.name, file.type, file.size);
                
                // Update notification
                notification.textContent = 'Uploading image...';
                
                try {
                    // Use our improved upload function
                    const imageUrl = await this.uploadImage(file);
                    console.log('Upload complete, got URL:', imageUrl);
                    
                    // Remove notification
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                    
                    if (imageUrl) {
                        // Insert simple image
                        const img = document.createElement('img');
                        img.src = imageUrl;
                        img.alt = 'Uploaded image';
                        img.className = 'max-w-full h-auto rounded-lg my-4';
                        
                        console.log('Inserting image at cursor');
                        
                        // Restore the selection before inserting
                        if (savedRange) {
                            selection.removeAllRanges();
                            selection.addRange(savedRange);
                        }
                        
                        // Insert at cursor position
                        this.insertNodeAtCursor(img);
                        this.handleContentChange();
                    }
                } catch (uploadError) {
                    console.error('Error in upload process:', uploadError);
                    
                    // Update notification with error
                    if (notification.parentNode) {
                        notification.className = 'p-2 bg-chicken-comb-100 text-chicken-comb-700 rounded text-center';
                        notification.textContent = 'Upload failed: ' + uploadError.message;
                        
                        // Remove error message after 5 seconds
                        setTimeout(() => {
                            if (notification.parentNode) {
                                notification.parentNode.removeChild(notification);
                            }
                        }, 5000);
                    }
                }
            });
            
            console.log('Opening file selector');
            input.click();
        } catch (error) {
            console.error('Error in showSimpleImageUploader:', error);
            alert('Error opening file selector: ' + error.message);
        }
    }
    
    // NEW METHOD FOR FIGURE WITH CAPTION
    showFigureDialog() {
        console.log('showFigureDialog called');
        
        try {
            // Save the current selection before opening dialog
            const selection = window.getSelection();
            let savedRange = null;
            if (selection.rangeCount > 0) {
                savedRange = selection.getRangeAt(0).cloneRange();
            }
            
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
            
            // Add file change event logging
            uploadInput.addEventListener('change', (event) => {
                console.log('Figure upload input change event fired');
                if (uploadInput.files && uploadInput.files.length > 0) {
                    console.log('Figure file selected:', uploadInput.files[0].name);
                }
            });
            
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
                console.log('Figure dialog cancelled');
                document.body.removeChild(modal);
            });
            
            const insertBtn = document.createElement('button');
            insertBtn.className = 'px-4 py-2 text-body-sm bg-pepper-green hover:bg-pepper-green-700 text-white rounded';
            insertBtn.textContent = 'Insert';
            insertBtn.addEventListener('click', async () => {
                console.log('Figure insert button clicked');
                
                if (!uploadInput.files || uploadInput.files.length === 0) {
                    console.log('No file selected for figure');
                    alert('Please upload an image');
                    return;
                }
                
                try {
                    console.log('Starting figure image upload');
                    const imageUrl = await this.uploadImage(uploadInput.files[0]);
                    
                    if (imageUrl) {
                        console.log('Figure image uploaded successfully:', imageUrl);
                        
                        // Restore selection if available
                        if (savedRange) {
                            selection.removeAllRanges();
                            selection.addRange(savedRange);
                        }
                        
                        this.insertFigureWithCaption(
                            imageUrl, 
                            captionInput.value || 'Image caption', 
                            altInput.value || 'Image'
                        );
                        document.body.removeChild(modal);
                    } else {
                        console.error('Figure image upload failed');
                        alert('Image upload failed. Please try again.');
                    }
                } catch (error) {
                    console.error('Error in figure upload process:', error);
                    alert('Failed to upload image: ' + error.message);
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
            
            console.log('Figure dialog created and added to DOM');
        } catch (error) {
            console.error('Error creating figure dialog:', error);
            alert('Error creating figure dialog: ' + error.message);
        }
    }
    
    // NEW METHOD FOR INSERTING FIGURE WITH CAPTION
    insertFigureWithCaption(imageUrl, caption, altText) {
        console.log('Inserting figure with caption:', imageUrl);
        
        // Create figure HTML using exact structure from case study
        const figureHTML = `
            <figure class="my-6">
                <div class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                    <img src="${imageUrl}" alt="${altText || 'Image'}" class="w-full h-full object-cover">
                </div>
                <figcaption class="text-body-sm text-the-end-600 text-center">${caption || 'Image caption'}</figcaption>
            </figure>
        `;
        
        // Insert at cursor position
        this.insertHTMLAtCursor(figureHTML);
        console.log('Figure with caption inserted successfully');
    }
    
    // NEW METHOD FOR IMAGE GRID DIALOG
    showGridDialog() {
        console.log('showGridDialog called');
        
        try {
            // Create modal dialog
            const modal = document.createElement('div');
            modal.className = 'fixed inset-0 bg-the-end-900/50 flex items-center justify-center z-50';
            
            const dialog = document.createElement('div');
            dialog.className = 'bg-white rounded-lg shadow-xl w-full max-w-3xl p-6 space-y-4';
            
            // Dialog header
            const header = document.createElement('div');
            header.className = 'text-h4 font-bold text-the-end-900';
            header.textContent = 'Insert Image Gallery Grid';
            
            // Images container
            const imagesContainer = document.createElement('div');
            imagesContainer.className = 'space-y-4';
            
            // Add image slots (4 by default)
            const imageSlots = document.createElement('div');
            imageSlots.className = 'grid grid-cols-2 gap-4';
            
            // Track uploaded images
            const uploadedImages = [null, null, null, null];
            
            // Create 4 upload slots
            for (let i = 0; i < 4; i++) {
                const slot = document.createElement('div');
                slot.className = 'space-y-2 border border-dashed border-white-smoke-300 p-4 rounded-lg';
                
                // Preview container
                const preview = document.createElement('div');
                preview.className = 'aspect-w-16 aspect-h-9 bg-white-smoke-50 rounded-lg overflow-hidden hidden';
                
                const previewImg = document.createElement('img');
                previewImg.className = 'w-full h-full object-cover';
                preview.appendChild(previewImg);
                
                // Upload button
                const uploadBtn = document.createElement('button');
                uploadBtn.className = 'w-full px-3 py-2 bg-white-smoke-50 hover:bg-white-smoke-100 text-the-end-700 rounded-md text-center text-body-sm';
                uploadBtn.textContent = `Upload Image ${i+1}`;
                uploadBtn.addEventListener('click', () => {
                    console.log(`Gallery upload button clicked for slot ${i+1}`);
                    
                    const input = document.createElement('input');
                    input.type = 'file';
                    input.accept = 'image/*';
                    
                    input.addEventListener('change', async () => {
                        console.log(`File selected for gallery slot ${i+1}`);
                        
                        if (!input.files || input.files.length === 0) {
                            console.log('No file selected for gallery slot');
                            return;
                        }
                        
                        try {
                            console.log(`Starting upload for gallery slot ${i+1}`);
                            const imageUrl = await this.uploadImage(input.files[0]);
                            
                            if (imageUrl) {
                                console.log(`Upload successful for gallery slot ${i+1}, URL:`, imageUrl);
                                
                                // Store the image URL
                                uploadedImages[i] = {
                                    url: imageUrl,
                                    caption: captionInput.value || `Image ${i+1}`,
                                    alt: altInput.value || `Gallery image ${i+1}`
                                };
                                
                                // Show preview
                                previewImg.src = imageUrl;
                                preview.classList.remove('hidden');
                                uploadBtn.textContent = 'Change Image';
                                
                                console.log(`Image preview updated for slot ${i+1}`);
                            } else {
                                console.error(`Upload failed for gallery slot ${i+1}`);
                            }
                        } catch (error) {
                            console.error(`Error uploading image for gallery slot ${i+1}:`, error);
                            alert(`Failed to upload image for slot ${i+1}: ${error.message}`);
                        }
                    });
                    
                    console.log('Opening file selector for gallery image');
                    input.click();
                });
                
                // Caption
                const captionInput = document.createElement('input');
                captionInput.type = 'text';
                captionInput.placeholder = `Caption for image ${i+1}`;
                captionInput.className = 'w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm';
                captionInput.addEventListener('change', () => {
                    console.log(`Caption changed for gallery slot ${i+1}`);
                    if (uploadedImages[i]) {
                        uploadedImages[i].caption = captionInput.value;
                    }
                });
                
                // Alt text
                const altInput = document.createElement('input');
                altInput.type = 'text';
                altInput.placeholder = `Alt text for image ${i+1}`;
                altInput.className = 'w-full px-3 py-2 bg-white-smoke-50 border border-white-smoke-300 rounded text-body-sm';
                altInput.addEventListener('change', () => {
                    console.log(`Alt text changed for gallery slot ${i+1}`);
                    if (uploadedImages[i]) {
                        uploadedImages[i].alt = altInput.value;
                    }
                });
                
                // Assemble slot
                slot.appendChild(preview);
                slot.appendChild(uploadBtn);
                slot.appendChild(captionInput);
                slot.appendChild(altInput);
                
                imageSlots.appendChild(slot);
            }
            
            imagesContainer.appendChild(imageSlots);
            
            // Dialog footer with buttons
            const footer = document.createElement('div');
            footer.className = 'flex justify-end space-x-3 pt-4';
            
            const cancelBtn = document.createElement('button');
            cancelBtn.className = 'px-4 py-2 text-body-sm bg-white-smoke-50 hover:bg-white-smoke-100 text-the-end-700 rounded';
            cancelBtn.textContent = 'Cancel';
            cancelBtn.addEventListener('click', () => {
                console.log('Gallery dialog cancelled');
                document.body.removeChild(modal);
            });
            
            const insertBtn = document.createElement('button');
            insertBtn.className = 'px-4 py-2 text-body-sm bg-pepper-green hover:bg-pepper-green-700 text-white rounded';
            insertBtn.textContent = 'Insert Gallery';
            insertBtn.addEventListener('click', () => {
                console.log('Insert gallery button clicked');
                
                // Filter out null values
                const validImages = uploadedImages.filter(img => img !== null);
                console.log(`Found ${validImages.length} valid images for gallery`);
                
                if (validImages.length > 0) {
                    console.log('Inserting gallery with images:', validImages);
                    this.insertImageGrid(validImages);
                    document.body.removeChild(modal);
                } else {
                    console.log('No images uploaded for gallery');
                    alert('Please upload at least one image for the gallery.');
                }
            });
            
            footer.appendChild(cancelBtn);
            footer.appendChild(insertBtn);
            
            // Assemble dialog
            dialog.appendChild(header);
            dialog.appendChild(imagesContainer);
            dialog.appendChild(footer);
            
            modal.appendChild(dialog);
            document.body.appendChild(modal);
            
            console.log('Gallery dialog created and added to DOM');
        } catch (error) {
            console.error('Error creating gallery dialog:', error);
            alert('Error creating gallery dialog: ' + error.message);
        }
    }
    
    // NEW METHOD FOR INSERTING IMAGE GRID
    insertImageGrid(images) {
        // Create gallery grid HTML using exact structure from case study
        let gridHTML = `
            <!-- Gallery image inn grid -->
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
        `;
        
        // Add each image with caption using the exact HTML from case study
        images.forEach(image => {
            gridHTML += `
                <!-- Image with Caption -->
                <figure>
                    <div class="aspect-w-16 aspect-h-9 mb-3 rounded-lg overflow-hidden bg-gradient-to-br from-white-smoke-50 via-apocalyptic-orange-50 to-pot-of-gold-100">
                        <img src="${image.url}" alt="${image.alt}" class="w-full h-full object-cover">
                    </div>
                    <figcaption class="text-body-sm text-the-end-600 text-center">${image.caption || 'Image caption'}</figcaption>
                </figure>
            `;
        });
        
        gridHTML += `</div>`;
        
        // Insert at cursor position
        this.insertHTMLAtCursor(gridHTML);
    }
    
    // HELPER METHOD FOR IMAGE UPLOAD
    async uploadImage(file) {
        console.log('Starting image upload process for file:', file.name);
        console.log('Using upload URL:', this.options.uploadUrl);
        
        const statusBar = document.createElement('div');
        statusBar.className = 'p-2 text-sm bg-white-smoke-200 rounded text-center';
        statusBar.innerText = 'Uploading image...';
        this.contentArea.appendChild(statusBar);
        
        try {
            // Create a simple FormData object
            const formData = new FormData();
            formData.append('image', file);
            
            // Get CSRF token
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            if (!csrfToken) {
                throw new Error('CSRF token not found');
            }
            
            console.log('Sending upload request with CSRF token...');
            
            // Make a simple fetch request
            const response = await fetch(this.options.uploadUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest' // Ensure Laravel recognizes as AJAX
                },
                credentials: 'same-origin'
            });
            
            console.log('Received response:', response.status);
            
            // Try to parse as JSON, but handle text response as well
            let result;
            const responseText = await response.text();
            console.log('Response text:', responseText.substring(0, 150) + (responseText.length > 150 ? '...' : ''));
            
            try {
                result = JSON.parse(responseText);
                console.log('Parsed JSON response:', result);
            } catch (jsonError) {
                console.error('Error parsing JSON response:', jsonError);
                
                // If we got a 200 OK but invalid JSON, try to extract URL from HTML response
                // (This handles cases where the server returns HTML instead of JSON)
                if (response.ok && responseText.includes('<img')) {
                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = responseText;
                    const img = tempDiv.querySelector('img');
                    if (img && img.src) {
                        this.contentArea.removeChild(statusBar);
                        return img.src;
                    }
                }
                
                throw new Error('Invalid response format from server');
            }
            
            this.contentArea.removeChild(statusBar);
            
            if (result.success && result.url) {
                console.log('Upload successful:', result.url);
                return result.url;
            } else {
                throw new Error(result.message || 'Unknown error');
            }
        } catch (error) {
            console.error('Image upload failed:', error);
            statusBar.className = 'p-2 text-sm bg-chicken-comb-100 text-chicken-comb-700 rounded text-center';
            statusBar.innerText = 'Upload failed: ' + error.message;
            
            // Remove error message after 5 seconds
            setTimeout(() => {
                if (statusBar.parentNode === this.contentArea) {
                    this.contentArea.removeChild(statusBar);
                }
            }, 5000);
            
            return null;
        }
    }
    
    // HELPER METHOD TO INSERT HTML AT CURSOR
    insertHTMLAtCursor(html) {
        // Save selection
        const selection = window.getSelection();
        
        // Check if there's a valid selection
        if (!selection || selection.rangeCount === 0) {
            console.log('No valid selection for insertHTMLAtCursor, appending to content area');
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = html;
            while (tempDiv.firstChild) {
                this.contentArea.appendChild(tempDiv.firstChild);
            }
            this.handleContentChange();
            return;
        }
        
        const range = selection.getRangeAt(0);
        
        // Insert HTML at cursor position
        const fragment = range.createContextualFragment(html);
        range.deleteContents();
        range.insertNode(fragment);
        
        // Move cursor to end of inserted content
        range.collapse(false);
        selection.removeAllRanges();
        selection.addRange(range);
        
        // Trigger content change event
        this.handleContentChange();
    }
    
    // HELPER METHOD TO INSERT DOM NODE AT CURSOR
    insertNodeAtCursor(node) {
        // Get current selection
        const selection = window.getSelection();
        
        if (selection.rangeCount) {
            // Get the current range
            const range = selection.getRangeAt(0);
            
            // Delete any current selection
            range.deleteContents();
            
            // Insert the node
            range.insertNode(node);
            
            // Move cursor after the inserted node
            range.setStartAfter(node);
            range.setEndAfter(node);
            selection.removeAllRanges();
            selection.addRange(range);
        } else {
            // If no selection, append to the editor content
            this.contentArea.appendChild(node);
        }
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
        
        this.toolbarContainer.appendChild(themeColorSection);
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

    createMediaControls() {
        // Image upload button
        const imageBtn = this.createButton('image', 'Insert Image', () => {
            // Focus the editor first to ensure proper cursor position
            this.contentArea.focus();
            
            // Create and trigger file input
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            
            // Add notification for user
            const notification = document.createElement('div');
            notification.className = 'p-2 bg-white-smoke-200 text-the-end-700 text-sm rounded';
            notification.textContent = 'Please select an image file...';
            
            // Add at cursor position or at end of content
            this.insertNodeAtCursor(notification);
            
            // Listen for file selection
            input.addEventListener('change', async () => {
                if (input.files?.length) {
                    // Replace notification with uploading message
                    notification.textContent = 'Uploading image...';
                    notification.className = 'p-2 bg-white-smoke-200 text-the-end-700 text-sm rounded';
                    
                    // Try to upload
                    const imageUrl = await this.uploadImage(input.files[0]);
                    
                    // Remove notification if it's still in the DOM
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                    
                    // If upload was successful, insert the image
                    if (imageUrl) {
                        console.log('Adding uploaded image to content:', imageUrl);
                        
                        // Create image element
                        const img = document.createElement('img');
                        img.src = imageUrl;
                        img.alt = 'Uploaded image';
                        img.className = 'max-w-full h-auto rounded my-4';
                        
                        // Insert at cursor position
                        this.insertNodeAtCursor(img);
                        this.handleContentChange();
                    }
                } else {
                    // No file selected, remove the notification
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }
            });
            
            // Click to open file browser
            input.click();
        });
        
        this.toolbarContainer.appendChild(imageBtn);
        
        // Figure with caption button
        const figureBtn = this.createButton('figure', 'Image with Caption', () => {
            // Open figure dialog
            this.showFigureDialog();
        });
        
        this.toolbarContainer.appendChild(figureBtn);
        
        // Video embed button
        const videoBtn = this.createButton('video', 'Embed Video', () => {
            this.showVideoEmbedDialog();
        });
        
        this.toolbarContainer.appendChild(videoBtn);
    }

    // Add a new method for video embedding
    showVideoEmbedDialog() {
        console.log('showVideoEmbedDialog called');
        
        // Save current selection
        const selection = window.getSelection();
        let savedRange = null;
        if (selection.rangeCount > 0) {
            savedRange = selection.getRangeAt(0).cloneRange();
        }
        
        // Create modal backdrop
        const modal = document.createElement('div');
        modal.className = 'fixed inset-0 bg-the-end-900/50 flex items-center justify-center z-50';
        
        // Create dialog
        const dialog = document.createElement('div');
        dialog.className = 'bg-white-smoke-50 rounded-lg shadow-lg p-6 w-full max-w-md';
        modal.appendChild(dialog);
        
        // Create header
        const header = document.createElement('div');
        header.className = 'mb-4';
        
        const title = document.createElement('h3');
        title.className = 'text-h5 font-semibold text-the-end-900';
        title.textContent = 'Embed Video';
        header.appendChild(title);
        
        const description = document.createElement('p');
        description.className = 'text-body-sm text-the-end-600 mt-1';
        description.textContent = 'Paste a YouTube or Vimeo URL to embed a video';
        header.appendChild(description);
        
        // Create URL input section
        const inputSection = document.createElement('div');
        inputSection.className = 'mb-4';
        
        const urlLabel = document.createElement('label');
        urlLabel.className = 'block text-body-sm font-medium text-the-end-700 mb-1';
        urlLabel.textContent = 'Video URL';
        inputSection.appendChild(urlLabel);
        
        const urlInput = document.createElement('input');
        urlInput.type = 'text';
        urlInput.className = 'w-full px-3 py-2 bg-white-smoke-100 border border-the-end-200 rounded-md';
        urlInput.placeholder = 'https://www.youtube.com/watch?v=...';
        inputSection.appendChild(urlInput);
        
        // Create footer with buttons
        const footer = document.createElement('div');
        footer.className = 'flex justify-end mt-6 gap-2';
        
        const cancelBtn = document.createElement('button');
        cancelBtn.className = 'px-4 py-2 bg-white-smoke-200 text-the-end-700 rounded hover:bg-white-smoke-300';
        cancelBtn.textContent = 'Cancel';
        cancelBtn.addEventListener('click', () => {
            document.body.removeChild(modal);
        });
        
        const embedBtn = document.createElement('button');
        embedBtn.className = 'px-4 py-2 bg-pepper-green-600 text-white-smoke-50 rounded hover:bg-pepper-green-700';
        embedBtn.textContent = 'Embed';
        embedBtn.addEventListener('click', () => {
            const url = urlInput.value.trim();
            
            if (!url) {
                alert('Please enter a video URL');
                return;
            }
            
            let embedCode = '';
            
            // Check for YouTube
            if (url.includes('youtube.com') || url.includes('youtu.be')) {
                const videoId = this.extractYouTubeId(url);
                if (videoId) {
                    embedCode = `<div class="responsive-video my-4"><iframe src="https://www.youtube.com/embed/${videoId}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>`;
                } else {
                    alert('Invalid YouTube URL');
                    return;
                }
            }
            // Check for Vimeo
            else if (url.includes('vimeo.com')) {
                const videoId = this.extractVimeoId(url);
                if (videoId) {
                    embedCode = `<div class="responsive-video my-4"><iframe src="https://player.vimeo.com/video/${videoId}" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>`;
                } else {
                    alert('Invalid Vimeo URL');
                    return;
                }
            }
            else {
                alert('Unsupported video URL. Please use YouTube or Vimeo.');
                return;
            }
            
            // Restore selection if available
            if (savedRange) {
                selection.removeAllRanges();
                selection.addRange(savedRange);
            }
            
            // Insert the embed code
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = embedCode;
            const embedElement = tempDiv.firstChild;
            
            this.insertNodeAtCursor(embedElement);
            this.handleContentChange();
            
            document.body.removeChild(modal);
        });
        
        footer.appendChild(cancelBtn);
        footer.appendChild(embedBtn);
        
        // Assemble dialog
        dialog.appendChild(header);
        dialog.appendChild(inputSection);
        dialog.appendChild(footer);
        
        // Add to document
        document.body.appendChild(modal);
        
        // Focus the input
        setTimeout(() => urlInput.focus(), 100);
    }

    // Helper methods for video embedding
    extractYouTubeId(url) {
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        const match = url.match(regExp);
        return (match && match[2].length === 11) ? match[2] : null;
    }

    extractVimeoId(url) {
        const regExp = /vimeo\.com\/(?:video\/)?([0-9]+)/;
        const match = url.match(regExp);
        return match ? match[1] : null;
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