<form wire:submit.prevent='submitForm' method="POST" id="contactForm" >
    @csrf
    @if ($successMessage)
    <div class="rounded-md bg-green-50 p-4 mt-8">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm leading-5 font-medium text-green-800">
                    {{ $successMessage }}
                </p>
            </div>
            <div class="ml-auto pl-3">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button" wire:click="$set('successMessage', null)"
                        class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150"
                        aria-label="Dismiss">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- name --}}
    <div class="relative z-0 w-full mb-5 group">

        <input wire:model.live.lazy="name" type="text" name="name" id="name"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-accent-400 appearance-none  focus:outline-none focus:ring-0 focus:border-secondary-200 peer"
            placeholder=" " required />
        <label for="name"
            class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-400 peer-focus:dark:text-secondary-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{__('contact.form.name')}}</label>
        @error('name')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>

    {{-- phone --}}
    <div class="relative z-0 w-full mb-5 group">

        <input wire:model.live.lazy="phone" type="tel" name="phone" id="phone"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-accent-400 appearance-none  focus:outline-none focus:ring-0 focus:border-secondary-200 peer"
            placeholder=" " required />
        <label for="phone"
            class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-400 peer-focus:dark:text-secondary-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{__('contact.form.phone')}}</label>
        @error('phone')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    {{-- email --}}
    <div class="relative z-0 w-full mb-5 group">

        <input wire:model.live.lazy="email" type="email" name="email" id="email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b border-accent-400 appearance-none  focus:outline-none focus:ring-0 focus:border-secondary-200 peer"
            placeholder=" " required />
        <label for="email"
            class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-400 peer-focus:dark:text-secondary-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
        @error('email')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>
    {{-- message --}}
    <div class="relative z-0 w-full mb-5 group">


        <textarea wire:model.live.lazy="content" name="content" id="content"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-b border-accent-400 appearance-none  focus:outline-none focus:ring-0 focus:border-secondary-200 peer min-h-[200px] max-h-[200px]"
            placeholder=" " required></textarea>
        <label for="content"
            class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-secondary-400 peer-focus:dark:text-secondary-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 ">{{__('contact.form.message')}}</label>
        @error('content')
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
    </div>


    <button data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}" data-callback='handle' data-action='submit' type="submit" wire.loading.attr="disabled" type='submit' aria-label="Wyślij"
        class="border   px-8 py-3 uppercase text-xs    text-fontWhite bg-accent-200 hover:bg-accent-400 duration-300 filter-btn"><svg
            wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-2 h-5 w-5 text-white"
            xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24">
            <circle class="opacity-40" cx="12" cy="12" r="10" stroke="#000000" stroke-width="4"></circle>
            <path class="opacity-75" fill="#fff"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
            </path>
        </svg>{{__('contact.form.send')}}</button>
</form>

<script src="https://www.google.com/recaptcha/api.js?render={{ env('CAPTCHA_SITE_KEY') }}"></script>
<script>
    function handle(e) {
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ env('CAPTCHA_SITE_KEY') }}', {
                    action: 'submit'
                })
                .then(function(token) {
                    @this.set('captcha', token);
                });
        })
    }
</script>