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

    switch(event.servico.robo_id){
        case 1:
            window.livewire.emit('render_novo_servico', event);
        break;
        case 2:
            window.livewire.emit('render_novo_servico_seguros', event);
        break;
    default:
        return;
    }
}).listen('.novo-log', (event) => {

    playSound('novo-log');

    console.log('enviando novo log...');

    switch(event.log.bot){
        case "1":
            window.livewire.emit('render_novo_log', event);
        break;
        case "2":
            window.livewire.emit('render_novo_log_seguros', event);
        break;
    default:
        return;
    }

}).listen('.novo-status', (event) => {

    console.log('alterando status...');
    switch(event.status){
        case "1":
            window.livewire.emit('status', event);
        break;
        case "2":
            window.livewire.emit('status_seguros', event);
        break;
    default:
        return;
    }
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
