<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Que estas esperando?</h3>
            <p>Recuerda confirmar antes del 15 de agosto!</p>
            <div id="rsvp-form" class="rsvp-form" action="" method="POST" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-input-group">
                            <i class="fa fa-user"></i>
                            <input wire:model.live="query" type="text" name="name" class=""
                                placeholder="Tu nombre" required autocomplete="off">
                            @if (!empty($guests))
                                <ul class="search-results">
                                    @foreach ($guests as $user)
                                        <li wire:click="selectGuest({{ $user->id }})">{{ $user->last_name }}
                                            {{ $user->first_name }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="form-input-group">
                            <i class="fa fa-question-circle"></i>
                            <select wire:model="status" class="form-control" required>
                                <option value="">Asistiras?</option>
                                <option value="si">Si</option>
                                <option value="no">No</option>
                                <option value="quizas">No lo se</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-input-group">
                            <i class="fa fa-users"></i>
                            <input wire:model.live="extras" type="number" name="extras" class="" min="0"
                                max="4" placeholder="Acompañantes" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="form-input-group">
                            <i class="fa fa-key"></i>
                            <input wire:model="invite_code" type="number" class="" min="0"
                                placeholder="Código" required autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for ($i = 0; $i < $extras; $i++)
                        <div class="col-md-12 col-sm-12">
                            <div class="form-input-group">
                                <i class="fa fa-user"></i>
                                <input wire:model="extrasName.{{ $i }}" type="text" class=""
                                    placeholder="Nombre Acompañante {{ $i + 1 }}" required autocomplete="off">
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="row">
                    <div class="col-md-12" id="alert-wrapper">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close"><span>&times;</span></button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="alert-wrapper">
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                </div>
                <button class="btn-fill rsvp-btn" wire:loading.attr="disabled" wire:click="submitForm">
                    <span wire:loading.remove wire:target="submitForm">Cuenten conmigo!</span>
                    <span wire:loading wire:target="submitForm">Procesando tu confirmación...</span>
                </button>
            </div>
        </div>
    </div>
    <style>
        .search-results {
            border: 1px solid #ccc;
            list-style-type: none;
            padding: 0;
            margin: 0;
            position: absolute;
            background-color: white;
            z-index: 1000;
            width: 100%;
        }

        .search-results li {
            padding: 10px;
            cursor: pointer;
        }

        .search-results li:hover {
            background-color: #f0f0f0;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        .alert .close {
            position: absolute;
            top: 10px;
            right: 20px;
            z-index: 1;
        }
    </style>
</div>
