import './bootstrap';

const channel = window.Echo.channel('private.servico');

const success = new Audio(`${process.env.MIX_APP_URL}/sounds/success.mp3`);
const log = new Audio(`${process.env.MIX_APP_URL}/sounds/logs.mp3`);
log.muted = true;
success.muted = true;

channel.subscribed(() => {
    console.log('conectado ao serviço...');
}).listen('.novo-servico', (event) => {

    playSound('novo-servico');

    console.log('enviando novo serviço...');
    window.livewire.emit('render_novo_servico', event);


}).listen('.novo-log', (event) => {

    playSound('novo-log');

    console.log('enviando novo log...');
    window.livewire.emit('render_novo_log', event);

}).listen('.novo-status', (event) => {

    console.log('alterando status...');
    window.livewire.emit('status', event);
});

function playSound(sound){
    if(sound === 'novo-log'){
        log.muted = false;
        log.play();
    }else if(sound === 'novo-servico'){
        success.muted = false;
        success.play();
    }
}
