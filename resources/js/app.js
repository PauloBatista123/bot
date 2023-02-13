import './bootstrap';

const channel = window.Echo.channel('private.log');
var audio = new Audio('http://127.0.0.1:8000/sounds/alert.mp3');

channel.subscribed(() => {
    console.log('conectado... senha');
}).listen('.novo-log', (event) => {

    console.log('enviando...');
    audio.play();
    window.livewire.emit('render_novo_log', event);

});
