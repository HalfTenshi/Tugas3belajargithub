
function showNotification() {
    const notification = document.getElementById('notification');
    
    
    setTimeout(function() {
        notification.classList.add('show');
    }, 100);

    
    setTimeout(function() {
        notification.classList.remove('show');
    }, 3000);

    return true; 
}
const urlParams = new URLSearchParams(window.location.search);
const status = urlParams.get('status');

if (status === 'success') {
    showNotification();
}