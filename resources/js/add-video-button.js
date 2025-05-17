/**
 * Add video embed button to existing editors 
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log('Adding video buttons to all editors');
    
    // Find all editor instances
    const editors = document.querySelectorAll('.festa-editor-wrapper');
    console.log('Found', editors.length, 'editors on the page');
    
    // Add video button to each editor
    editors.forEach((editor, index) => {
        const toolbar = editor.querySelector('.festa-editor-toolbar');
        if (!toolbar) {
            console.log('Toolbar not found for editor #' + index);
            return;
        }
        
        // Check if a video button already exists
        const existingBtn = toolbar.querySelector('button[title="Embed Video"]');
        if (existingBtn) {
            console.log('Video button already exists for editor #' + index);
            return;
        }
        
        // Create the video button
        const videoBtn = document.createElement('button');
        videoBtn.type = 'button';
        videoBtn.className = 'px-2 py-1 rounded text-sm hover:bg-white-smoke-100';
        videoBtn.title = 'Embed Video';
        videoBtn.innerHTML = '<span class="px-2 py-1 bg-chicken-comb-50 text-chicken-comb-600 rounded">Video</span>';
        
        // Add click handler
        videoBtn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Create video embed dialog
            showVideoEmbedDialog(editor.querySelector('.festa-editor-content'));
        });
        
        // Append to toolbar
        toolbar.appendChild(videoBtn);
        console.log('Video button added to editor #' + index);
    });
});

// Video embed dialog function
function showVideoEmbedDialog(contentArea) {
    console.log('Showing video embed dialog');
    
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
            const videoId = extractYouTubeId(url);
            if (videoId) {
                embedCode = `<div class="responsive-video my-4"><iframe src="https://www.youtube.com/embed/${videoId}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>`;
            } else {
                alert('Invalid YouTube URL');
                return;
            }
        }
        // Check for Vimeo
        else if (url.includes('vimeo.com')) {
            const videoId = extractVimeoId(url);
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
        
        insertNodeAtCursor(contentArea, embedElement);
        
        // Close the dialog
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

// Helper functions for video embedding
function extractYouTubeId(url) {
    const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    const match = url.match(regExp);
    return (match && match[2].length === 11) ? match[2] : null;
}

function extractVimeoId(url) {
    const regExp = /vimeo\.com\/(?:video\/)?([0-9]+)/;
    const match = url.match(regExp);
    return match ? match[1] : null;
}

function insertNodeAtCursor(contentArea, node) {
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
        // If no selection, append to the content area
        contentArea.appendChild(node);
    }
    
    // Trigger content change for hidden input
    const event = new CustomEvent('input', { bubbles: true });
    contentArea.dispatchEvent(event);
} 