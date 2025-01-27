import './bootstrap';

document.addEventListener('livewire:load', function () {
    Livewire.on('articleCreated', function () {
        setTimeout(function () {
            let successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 10000); // 10 secondes
    });
});