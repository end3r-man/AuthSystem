<div class="w-full h-full flex items-center justify-center bg-[#EEEEEE]">
    <div class="h-auto w-[560px] bg-white rounded-md shadow-lg center flex-col gap-y-2 px-4 md:px-16 py-24">

        <h1 class="text-3xl font-semibold">Welcome To Autho</h1>
        <p>Hey, Enter your details to get signup</p>

        {{-- Form Inputs --}}
        <div class="w-full h-auto mt-6 center flex-col gap-y-6">

            <input wire:model="name" class="px-4 py-3 outline-none border border-slate-700 w-full rounded-md" type="text" name="email"
                placeholder="Enter Your Name">

            <input wire:model="email" class="px-4 py-3 outline-none border border-slate-700 w-full rounded-md" type="email" name="email"
                placeholder="Enter Email Address">

            <div x-data="{ open: false }" class="w-full h-auto relative">
                <input wire:model="password" class="px-4 py-3 outline-none border border-slate-700 w-full rounded-md"
                    :type="open ? 'text' : 'password'" name="email" placeholder="Enter Password">
                <iconify-icon @click="open = !open" class="text-2xl absolute top-1/2 -translate-y-1/2 right-5 cursor-pointer"
                    :icon="open ? 'ph:eye' : 'ph:eye-closed'"></iconify-icon>
            </div>
        </div>

        {{-- Remember Fields --}}
        <div class="w-full h-auto flex flex-col max-sm:gap-y-3 md:flex-row justify-between items-center gap-x-2 my-3">

            <div @click="$wire.check = !$wire.check" class="w-auto centter gap-x-2 cursor-pointer">
                <input wire:model="check" type="checkbox" name="remember">
                <span class="select-none">Accept Terms & Condition</span>
            </div>
        </div>

        <button wire:click="HandleSignup" class="w-full py-3 bg-[#EF5A6F] text-white rounded-md">Signup</button>

        {{-- Error Message --}}
        @if ($errors->any())
            <div
                class="w-[420px] h-full absolute top-0 right-0 flex items-end justify-end flex-col gap-y-4 py-6 overflow-hidden px-3">
                @foreach ($errors->all() as $message)
                    <div class="w-auto px-4 py-3 bg-emerald-400 rounded-md text-white">{{ $message }}</div>
                @endforeach
            </div>
        @endif
    </div>
</div>
