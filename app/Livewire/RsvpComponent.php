<?php

namespace App\Livewire;

use App\Libraries\Twilio;
use App\Models\Extra;
use App\Models\Guest;
use App\Models\SmsLogs;
use App\Services\TwilioService;
use Illuminate\Validation\Rule;
use Livewire\Component;

class RsvpComponent extends Component
{
    public $query;
    public $guests;
    public $selectedGuest;
    public $status = '';
    public $extras = '';
    public $invite_code = '';

    public $extrasName = [];

    public function mount()
    {
        $this->query = '';
        $this->guests = [];
        $this->selectedGuest = null;
    }

    public function updatedQuery()
    {
        $this->guests = Guest::where('first_name', 'like', '%' . $this->query . '%')->orWhere('last_name', 'like', '%' . $this->query . '%')->get();
    }

    public function selectGuest($userId)
    {
        $this->selectedGuest = Guest::find($userId);
        $this->query = $this->selectedGuest->first_name . ' ' . $this->selectedGuest->last_name;
        $this->guests = [];
    }

    public function submitForm()
    {
        $this->validate([
            'query'         => 'nullable',
            'status'        => 'required',
            'extras'        => 'required|integer|min:0|max:4',
            'extrasName'    => [
                Rule::requiredIf($this->extras > 0),
                'array',
                'min:' . $this->extras,
                'max:' . $this->extras,
            ],
            'invite_code'   => 'required|integer',
            'selectedGuest' => 'required'
        ], [
            'selectedGuest.required' => 'Por favor selecciona un nombre de la lista.',
            'query.required'         => 'Por favor selecciona un nombre de la lista.',
            'status.required'        => 'Por favor indicanos tu asistencia.',
            'extras.required'        => 'Por favor indicanos si llevaras a alguien.',
            'invite_code.required'   => 'Por favor indicanos tu codigo de confirmacion.',
            'extrasName.required'    => 'Por favor indicanos tus acompañantes.',
            'extrasName.min'         => 'El número de acompañantes debe ser igual a ' . $this->extras . '.',
            'extrasName.max'         => 'El número de acompañantes debe ser igual a ' . $this->extras . '.',
        ]);

        // Ensure the invite_code belongs to the selectedGuest
        if ($this->selectedGuest && (int) $this->selectedGuest->code != (int) $this->invite_code) {
            $this->addError('invite_code', 'El código de invitación no coincide con el invitado seleccionado.');
            return;
        }
        //UPDATE GUESTS
        $selectedGuest = Guest::find($this->selectedGuest->id);
        $selectedGuest->status = $this->status;
        $selectedGuest->extras = $this->extras;
        $selectedGuest->save();

        //UPDATE EXTRAS
        if ($this->extras > 0) {
            Extra::where('guest_id', $selectedGuest->id)->delete();
            foreach ($this->extrasName as $extra) {
                $newExtra = new Extra();
                $newExtra->name = $extra;
                $newExtra->guest_id = $selectedGuest->id;
                $newExtra->save();
            }
        }

        $twilio = new Twilio();
        $flashMessage = 'Gracias por tu confirmacion!';
        try {
            if ($this->status == 'si') {
                $message = 'Hola, ' . $selectedGuest->first_name . ' ' . $selectedGuest->last_name . ' ha confirmado tu asistencia junto con ' . $this->extras . ' extra(s).';
            } elseif ($this->status == 'quizas') {
                $message = 'Hola, ' . $selectedGuest->first_name . ' ' . $selectedGuest->last_name . ' no esta seguro si podra asistir junto con ' . $this->extras . ' extra(s).';
            } else {
                $message = 'Hola, ' . $selectedGuest->first_name . ' ' . $selectedGuest->last_name . ' lamentablemente no podra asistir.';
            }
            // $twilio->sendSms(env('ADMIN_PHONE_NUMBER'), $message);
        } catch (\Exception $e) {
            $flashMessage = $e->getMessage();
        }

        session()->flash('message', $flashMessage);

        // Optionally reset the form fields
        $this->reset(['query', 'status', 'extras', 'extrasName', 'selectedGuest', 'invite_code']);
    }

    public function render()
    {
        return view('livewire.rsvp-component');
    }
}
