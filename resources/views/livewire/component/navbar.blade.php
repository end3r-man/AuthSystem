<div class="w-full h-auto flex justify-between items-center py-3 container mx-auto text-[#FFFFFF]">
    <div class="w-full md:w-auto h-full flex items-center md:items-start flex-col gap-y-1">
        <h2 class="text-3xl font-semibold">Autho</h2>
    </div>

    <div class="w-full h-full hidden md:flex justify-end items-center gap-x-8">

        @auth
            <button wire:click="HandleLogout" class="capitalize">Logout</button>
            <a wire:navigate href="{{ route('user.dash') }}"
                class="capitalize px-3 py-2 bg-[#9DBEB9] rounded-md text-white">Dashboard</a>
        @else
            <a wire:navigate href="{{ route('auth.login') }}" class="capitalize text-white">Login</a>
            <a wire:navigate href="{{ route('auth.reg') }}"
                class="capitalize px-3 py-2 bg-[#9DBEB9] rounded-md text-slate-700">Sign Up</a>
        @endauth

    </div>
</div>
