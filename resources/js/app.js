import './bootstrap';

document.addEventListener('livewire:init', () => {   
    Livewire.on('articleCreated', () => {
        setTimeout(() => {
            const successMessages = document.querySelectorAll('.alert-success');
            successMessages.forEach(message => {
                message.style.transition = 'opacity 0.5s ease-out';
                message.style.opacity = '0';
                message.style.display = 'none';
            });
        }, 3000);
    });
});