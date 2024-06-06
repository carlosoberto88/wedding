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
        $this->query = $this->selectedGuest->first_name;
        $this->guests = [];
    }

    public function submitForm()
    {
        $this->validate([
            'query'         => 'nullable',
            'status'        => 'required',
            'extras'        => 'required',
            'extrasName'    => [
                Rule::requiredIf($this->extras == 'si')
            ],
            'invite_code'   => 'required|integer',
            'selectedGuest' => 'required'
        ], [
            'selectedGuest.required' => 'Por favor selecciona un nombre de la lista.',
            'query.required'         => 'Por favor selecciona un nombre de la lista.',
            'status.required'        => 'Por favor indicanos tu asistencia.',
            'extras.required'        => 'Por favor indicanos si llevaras a alguien.',
            'invite_code.required'   => 'Por favor indicanos tu codigo de confirmacion.',
            'extrasName.required'    => 'Por favor indicanos el nombre de tu pareja.',
        ]);

        // Ensure the invite_code belongs to the selectedGuest
        if ($this->selectedGuest && (int) $this->selectedGuest->code != (int) $this->invite_code) {
            $this->addError('invite_code', 'El código de invitación no coincide con el invitado seleccionado.');
            return;
        }
        // Ensure the guest hasnt confirmed before
        if($this->selectedGuest && $this->selectedGuest->status == 'si') {
            $this->addError('invite_code', 'El invitado ya confirmó su asistencia.');
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
            $newExtra = new Extra();
            $newExtra->name = $this->extrasName;
            $newExtra->guest_id = $selectedGuest->id;
            $newExtra->save();
        }

        $twilio = new Twilio();
        $flashMessage = 'Gracias por tu confirmacion!';
        try {
            if ($this->status == 'si') {
                $message = 'Hola, ' . $selectedGuest->first_name . ' ha confirmado tu asistencia junto con un extra.';
            } else {
                $message = 'Hola, ' . $selectedGuest->first_name . ' lamentablemente no podra asistir.';
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
