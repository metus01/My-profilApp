require('./bootstrap');
import AlpineInstance from 'alpinejs';
AlpineInstance.start();
require('./bootstrap.bundle.min');
document.addEventListener('livewire:load' , function()
{
    Livewire.on('numberUpdated' , function(nbUser){
        document.querySelector('#print').textContent = nbUser;
    });
})
