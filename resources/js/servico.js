import './bootstrap';

const channel = window.Echo.channel('private.servico');

channel.subscribed(() => {
    console.log('conectado ao serviço...');
}).listen('.novo-servico', (event) => {

    const success = new Audio(`${process.env.MIX_APP_URL}/sounds/success.mp3`);
    success.play();

    console.log('enviando novo serviço...');
    window.livewire.emit('render_novo_servico', event);

}).listen('.novo-log', (event) => {

    const log = new Audio(`${process.env.MIX_APP_URL}/sounds/logs.mp3`);
    log.play();

    console.log('enviando novo log...');
    window.livewire.emit('render_novo_log', event);

});
