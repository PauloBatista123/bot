import './bootstrap';
import {Player} from 'tone'

const channel = window.Echo.channel('private.servico');

const multiPlayer = new Player(
	`${process.env.MIX_SYSURL}/sounds/log.mp3`
, function(){
	console.log(multiPlayer);
});


channel.subscribed(() => {
    console.log('conectado ao serviço...');
}).listen('.novo-servico', async (event) => {

    console.log('enviando...');
    window.livewire.emit('render_novo_servico', event);

}).listen('.novo-log', async (event) => {

    console.log(multiPlayer.get("playerLog"));
    console.log('enviando...');
    window.livewire.emit('render_novo_log', event);

});
