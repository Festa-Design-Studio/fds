/**
 * Force Video Button
 * This script forcibly adds a video embed button to any rich text editor on the page
 */

(function() {
  console.log('Force Video Button script executing');
  
  // Function to add the video button to a toolbar
  function addVideoButton(toolbar, contentArea) {
    // Create the video button with high visibility styling
    const videoBtn = document.createElement('button');
    videoBtn.type = 'button';
    videoBtn.className = 'px-2 py-1 rounded text-sm';
    videoBtn.title = 'Embed Video';
    videoBtn.style.cssText = 'background-color: #e12729; color: white; font-weight: bold; padding: 5px 10px; margin: 5px; border-radius: 4px;';
    videoBtn.innerHTML = 'VIDEO';
    
    // Add click handler
    videoBtn.addEventListener('click', function(e) {
      e.preventDefault();
      console.log('Video button clicked');
      
      // Implement a simple embed dialog directly
      createVideoDialog(contentArea);
    });
    
    // Add to toolbar
    toolbar.appendChild(videoBtn);
    console.log('Video button forcibly added to toolbar');
  }
  
  // Function to create video embed dialog
  function createVideoDialog(contentArea) {
    console.log('Creating video embed dialog');
    
    // Save current selection
    const selection = window.getSelection();
    let savedRange = null;
    if (selection.rangeCount > 0) {
      savedRange = selection.getRangeAt(0).cloneRange();
    }
    
    // Create modal backdrop
    const modal = document.createElement('div');
    modal.style.cssText = 'position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0,0,0,0.5); display: flex; align-items: center; justify-content: center; z-index: 9999;';
    
    // Create dialog
    const dialog = document.createElement('div');
    dialog.style.cssText = 'background-color: white; border-radius: 8px; padding: 20px; width: 500px; max-width: 90%;';
    
    // Add title
    const title = document.createElement('h3');
    title.textContent = 'Embed Video';
    title.style.cssText = 'font-size: 18px; font-weight: bold; margin-bottom: 15px;';
    dialog.appendChild(title);
    
    // Add description
    const description = document.createElement('p');
    description.textContent = 'Paste a YouTube or Vimeo URL to embed a video';
    description.style.cssText = 'margin-bottom: 15px; font-size: 14px; color: #666;';
    dialog.appendChild(description);
    
    // Add input
    const input = document.createElement('input');
    input.type = 'text';
    input.placeholder = 'https://www.youtube.com/watch?v=...';
    input.style.cssText = 'width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; margin-bottom: 15px;';
    dialog.appendChild(input);
    
    // Add buttons container
    const buttons = document.createElement('div');
    buttons.style.cssText = 'display: flex; justify-content: flex-end; gap: 10px;';
    
    // Cancel button
    const cancelBtn = document.createElement('button');
    cancelBtn.textContent = 'Cancel';
    cancelBtn.style.cssText = 'padding: 8px 15px; background-color: #f0f0f0; border: none; border-radius: 4px; cursor: pointer;';
    cancelBtn.addEventListener('click', function() {
      document.body.removeChild(modal);
    });
    buttons.appendChild(cancelBtn);
    
    // Embed button
    const embedBtn = document.createElement('button');
    embedBtn.textContent = 'Embed';
    embedBtn.style.cssText = 'padding: 8px 15px; background-color: #e12729; color: white; border: none; border-radius: 4px; cursor: pointer;';
    embedBtn.addEventListener('click', function() {
      const url = input.value.trim();
      
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
      if (contentArea) {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = embedCode;
        
        // Insert at cursor or append
        if (savedRange) {
          savedRange.deleteContents();
          savedRange.insertNode(tempDiv.firstChild);
        } else {
          contentArea.appendChild(tempDiv.firstChild);
        }
        
        // Trigger change event
        const event = new Event('input', { bubbles: true });
        contentArea.dispatchEvent(event);
      }
      
      // Close dialog
      document.body.removeChild(modal);
    });
    buttons.appendChild(embedBtn);
    
    dialog.appendChild(buttons);
    modal.appendChild(dialog);
    document.body.appendChild(modal);
    
    // Focus the input
    setTimeout(() => input.focus(), 100);
  }
  
  // Helper functions for video IDs
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
  
  // Run immediately and also on DOM content loaded
  function init() {
    console.log('Checking for editors to add video button to');
    
    // Find all editors
    const editors = document.querySelectorAll('.festa-editor-wrapper');
    console.log('Found ' + editors.length + ' editors');
    
    editors.forEach(function(editor, index) {
      // Find toolbar and content area
      const toolbar = editor.querySelector('.festa-editor-toolbar');
      const contentArea = editor.querySelector('.festa-editor-content');
      
      if (toolbar && contentArea) {
        // Check if video button already exists
        const existing = toolbar.querySelector('button[title="Embed Video"]');
        if (!existing) {
          addVideoButton(toolbar, contentArea);
        } else {
          console.log('Video button already exists in editor #' + index);
        }
      } else {
        console.log('Toolbar or content area not found in editor #' + index);
      }
    });
  }
  
  // Run now and after DOM content loaded
  init();
  
  document.addEventListener('DOMContentLoaded', function() {
    // Run init after a short delay to ensure editor is fully loaded
    setTimeout(init, 1000);
    
    // Also run after 3 seconds as a failsafe
    setTimeout(init, 3000);
  });
  
  // Also add a global function that can be called manually
  window.addVideoButtonToEditors = init;
})(); 