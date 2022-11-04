<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUs extends Component
{
    public string $name    = '';
    public string $email   = '';
    public string $phone   = '';
    public string $subject = '';
    public string $message = '';

    protected $rules = [
        'name'        => 'required|string|min:3|max:199',
        'subject'     => 'required|string|min:3|max:199',
        'email'       => 'required|email:rfc,dns|min:3|max:199',
        'phone'       => 'required|digits:11|numeric',
        'message'     => 'required|string|min:3|max:500',
    ];


    public function messages()
    {
        return [
            // Validation name
            'name.required'             => __('admin/request.name_required'),
            'name.min'                  => __('admin/request.name_min'),
            'name.max'                  => __('admin/request.name_max'),
            // Validation phone
            'phone.required'            => __('admin/request.phone_required'),
            'phone.numeric'             => __('admin/request.phone_numeric'),
            'phone.digits'              => __('admin/request.phone_digits'),
            // Validation email
            'email.required'            => __('admin/request.email_required'),
            'email.min'                 => __('admin/request.email_min'),
            'email.max'                 => __('admin/request.email_max'),
            'email.email'               => __('admin/request.email_email'),
            // Validation message
            'message.required'          => __('admin/request.message_required'),
            'message.max'               => __('admin/request.message_max'),
            'message.min'               => __('admin/request.message_min'),
            // Validation message
            'subject.required'          => __('admin/request.subject_required'),
            'subject.max'               => __('admin/request.subject_max'),
            'subject.min'               => __('admin/request.subject_min'),

        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $contact  = Contact::create([
            'name'        => $this->name,
            'email'       => $this->email,
            'phone'       => $this->phone,
            'subject'     => $this->subject,
            'message'     => $this->message,
        ]);

        $data = $this->validate();

        $this->name       = '';
        $this->email      = '';
        $this->phone      = '';
        $this->subject    = '';
        $this->message    = '';
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
