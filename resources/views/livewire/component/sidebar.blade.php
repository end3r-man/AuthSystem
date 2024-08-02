<div class="h-full min-w-20 bg-[#194350] text-white flex items-center flex-col py-7 gap-y-4">

    <div class="p-2 center rounded-md bg-[#9DBEB9]">
        <iconify-icon class="text-4xl text-[#194350]" icon="ph:beach-ball-duotone"></iconify-icon>
    </div>

    <div class="w-full h-full flex flex-col items-center justify-start gap-y-6">
        <x-dash.button url="/" icon="ph:house-line-light" />
        <x-dash.button url="/" icon="ph:chart-pie-slice-light" />
        <x-dash.button url="/" icon="ph:mailbox-light" />
        <x-dash.button url="/" icon="ph:users-three-light" />
    </div>

    <div class="w-full h-full flex flex-col items-center justify-end gap-y-6">
        <x-dash.button click="HandleLogout" icon="material-symbols-light:logout-sharp" />
        <x-dash.button url="/" icon="ph:user-circle-light" />
        <x-dash.button url="/user/account" icon="ph:gear-six-light" />
    </div>

</div>
