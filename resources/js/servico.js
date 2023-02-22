import './bootstrap';
import {Player, loaded} from 'tone'

const channel = window.Echo.channel('private.servico');

const player = new Player("https://cdn.freesound.org/previews/674/674807_14714786-lq.mp3").toDestination();

loaded().then(() => {
    console.log("Loaded");
});

channel.subscribed(() => {
    console.log('conectado ao serviço...');
}).listen('.novo-servico', (event) => {

    console.log('enviando...');
    window.livewire.emit('render_novo_servico', event);

}).listen('.novo-log', (event) => {

    player.start();
    console.log('enviando...');
    window.livewire.emit('render_novo_log', event);

});
