import './bootstrap';

const channel = window.Echo.channel('private.servico');

channel.subscribed(() => {
    console.log('conectado ao serviço...');
}).listen('.novo-servico', (event) => {

    console.log('enviando...');
    window.livewire.emit('render_novo_servico', event);

});
