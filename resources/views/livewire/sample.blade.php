<div style="margin-left:20px;margin-top:20px;">
    <p>User Record: {{ $user->name }} / {{ $user->email }}</p>
    <p style="margin-top:10px;">SQL used to retreive the user. You'll see it has a LIKE where clause on initial load from the global scope RestrictedDomain
        but when you refresh the component that scope is removed from the query.</p>

    <p style="margin-top:10px;">{{ Cache::driver('array')->get('sql'); }}</p>
    <p style="margin-top:10px;"><button wire:click="$refresh">Reload Component</button></p>
</div>
