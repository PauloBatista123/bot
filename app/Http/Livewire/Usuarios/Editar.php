<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Perfil;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Editar extends Component
{
    use LivewireAlert;

    protected $listeners = ['editar_user' => 'editar'];

    public $perfis;

    public $usuario;
    public $name;
    public $email;
    public $password = null;
    public $password_confirmation;
    public $perfil;

    public $messages = [
        'name.required' => "Ops! Nome é obrigatório",
        'name.min' => "Insira no mínimo 3 caracteres",
        'name.max' => "Chegamos ao limite de 255 caracteres",
        'email.required' => "Ops! email é obrigatório",
        'email.email' => "Informe um email válido",
        'email.unique' => "O email informado já está cadastrado",
        'password.required' => "Informe a senha",
        'password.min' => "Sua senha deve ter no mínimo 8 caracteres",
        'password.letters' => "Sua senha deve possuir letras",
        'password.mixedCase' => "A senha deve conter pelo menos uma letra maiúscula e uma minúscula",
        "password.numbers" => "Sua senha deve possuir números",
        "password.symbols" => "Sua senha deve possuir caracteres especiais (%,&,@,#, etc)",
        'password.confirmed' => "A confirmação da senha não corresponde",
        'perfil.required' => "Selecione o perfil de acesso.",
        'perfil.exists' => "O perfil não existe."
    ];

    public function render()
    {
        return view('livewire.usuarios.editar');
    }

    public function mount()
    {
        $this->perfis = Perfil::all();
    }

    public function editar($id)
    {

        try{

            $this->usuario = User::findOrFail($id);
            $this->name = $this->usuario->name;
            $this->email = $this->usuario->email;
            $this->perfil = $this->usuario->perfis[0]->id;

        }catch(Exception $e){

            $this->alert('warning', $e->getMessage());

        }
    }

    public function salvar()
    {

        $validator = Validator::make([
            'name' => $this->name,
            'password' => $this->password,
            'email' => $this->email,
            'password_confirmation' => $this->password_confirmation,
            'perfil' => $this->perfil
        ], [
            'name' => ['required','min:5', 'max:255'],
            'email' => ['required', 'email'],
            'perfil' => ['required', 'exists:App\Models\Perfil,id'],
            'password' => ['confirmed',
                Rule::excludeIf(fn () => is_null($this->password) ),
                Password::min(8)->letters()->numbers()->mixedCase()->symbols(),
            ]
        ], $this->messages, ['password' => 'campo senha'])->validate();

        try{

            $this->usuario->name = $this->name;
            $this->usuario->email = $this->email;
            if($this->password){
                $this->usuario->password = bcrypt($this->password);
            }
            $this->usuario->save();

            $this->alert('success', 'Usuário atualizado com sucesso!', [
                'position' => 'top-start'
            ]);

            $this->emit('render_usuarios');
            $this->dispatchBrowserEvent('close-modal-editar');

        }catch(Exception $e){

            $this->alert('warning', 'Erro ao realizar operação:'.$e->getMessage(), [
                'time' => 6000
            ]);

        }
    }
}
