<div class="w-10/12 mx-auto mt-10 z-10">

    <form method="post" action="#" wire:submit.prevent="submit">

        <div class="mb-3">

            <label for="name" class="form-label">Nom Complet</label>

            <input type="text" id="name" wire:model.defer="name"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="Votre nom complet">

            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="mb-3">

            <label for="email" class="form-label">Adresse email</label>

            <input type="email" id="email" wire:model.defer="email"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="Votre adresse email">

            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div class="mb-3">

            <label for="msg" class="form-label">Message</label>

            <textarea id="msg" wire:model.defer="msg"
                class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                rows="4" placeholder="Votre message ici"></textarea>

            @error('msg')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <button type="submit" class="btn btn-primary">Envoyer le message</button>

    </form>
    <div class="mt-5">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
</div>
